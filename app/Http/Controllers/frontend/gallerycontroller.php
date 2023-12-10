<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;

class gallerycontroller extends Controller
{
    public function index(){
        $data['gallery']= gallery::all();
        return view('frontend.gallery',$data);
    }
}
