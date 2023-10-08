<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $menu = Menu::all();
        $category=Category::all();
        return view('welcome', compact('menu','category'));
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}
