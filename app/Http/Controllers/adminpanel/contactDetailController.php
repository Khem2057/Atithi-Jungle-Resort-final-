<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class contactDetailController extends Controller
{
    public function index(){
        return view('frontend.admin.contact');
    }


    public function storecontact(Request $request){
        $contact = new contact();
        $contact->phone = $request->input('phone');
        $contact->address = $request->input('address');
        $contact->email = $request->input('email');
        $contact->facebook = $request->input('facebook');
        $contact->instagram = $request->input('instagram');
        $contact->tiktok = $request->input('tiktok');
        $contact->twitter = $request->input('twitter');
        $contact->save();
        return redirect()->back()->with('message', 'Changed successfully');
    }
}
