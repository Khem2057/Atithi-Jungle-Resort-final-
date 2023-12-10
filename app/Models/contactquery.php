<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactquery extends Model
{
    use HasFactory;
    protected $table = 'contactquery';
    protected $fillable = [
        'name',
        'email',
        'contact',
        'address',
        'message',
    ];
}
