<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotelDetail extends Model
{
    use HasFactory;
    protected $table= 'hotel_details';
    protected $fillable =[
        'hotelname',
        'logo', 
        'video', 
    ];
}
