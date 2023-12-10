<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\contactquery;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function index(){
        return view('frontend.contact');
    }


    public function store(request $request){
        $query = new contactquery();
        $query->name = $request->input('name');
        $query->email = $request->input('email');
        $query->contact = $request->input('contact');
        $query->address = $request->input('address');
        $query->message = $request->input('message');
        $query->save();
        return redirect()->back()->with('message', 'Query sent');
    }
}
