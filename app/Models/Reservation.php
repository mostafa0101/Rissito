<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string)
 */
class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'tel_number',
        'email',
        'table_id',
        'res_date',
        'guest_number'
    ];

//    protected array $dates = [
//        'res_date',
//        'created_at',
//        'expired_at',
//    ];

    protected $casts=[
      'res_date'=>'datetime',
    ];





    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
