<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class signupcontroller extends Controller
{
    public function index(){
        return view('frontend.signup');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'username'=> 'required',
                'email'=> 'required|email|unique:signup',
                'contact'=> 'required',
                'password'=> 'required',
                'confirmpassword'=> 'required|same:password'
            ]
            );

            // $email = $request->input('email');
            // $existingUser = signup::where('email',$email)->first();
            // if($existingUser){
            //     return redirect()->back()->with('error','Email address already in use. please choose another email.');
            // }
            // else{
        // echo "<pre>";
        // print_r($request->all());
        $users = new user();
        $users->name = $request['username'];
        $users->email = $request['email'];
        $users->contact = $request['contact'];
        $users->password = /*md5(*/$request['password']/*);*/;
        $users->confirm_password = $request['confirmpassword'];
        $users->save();
        return redirect('/signin');
        //  }
    }
}
