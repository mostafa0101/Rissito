<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MenuController extends Controller
{

    public function index()
    {
        $menus=Menu::all();
        return view('admin.menu.index',compact('menus'));
    }


    public function create()
    {
        $categories=Category::all();
        return view('admin.menu.create',compact('categories'));
    }


    public function store(MenuStoreRequest $request)
    {
        $image = $request->file('image')->store('public/categories');

        $menu=Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price'=>$request->price
        ]);

        if($request->has('categories'))
        {
            $menu->categories()->attach($request->categories);
        }
        return to_route('admin.menu.index')->with('success', 'Menu created successfully.');
    }


    public function edit(Menu $menu)
    {
        $categories = Category::all();
        return view('admin.menu.edit', compact('menu', 'categories'));
    }


    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        $image = $menu->image;
        if ($request->hasFile('image')) {
            Storage::delete($menu->image);
            $image = $request->file('image')->store('public/menus');
        }

        $menu->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'price' => $request->price
        ]);

        if ($request->has('categories')) {
            $menu->categories()->sync($request->categories);
        }
        return to_route('admin.menu.index')->with('success', 'Menu updated successfully.');
    }


    public function destroy(Menu $menu)
    {
        Storage::delete($menu->image);
        $menu->categories()->detach();
        $menu->delete();
        return to_route('admin.menu.index')->with('danger', 'Menu deleted successfully.');
    }
}
