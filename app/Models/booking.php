<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $table ='bookings';
    protected $fillable = [
        'checkin',
        'checkout',
        'night',
        'roomtype',
        'roomno',
        'noofroom',
        'noofadult',
        'totalprice',
    ];
}
