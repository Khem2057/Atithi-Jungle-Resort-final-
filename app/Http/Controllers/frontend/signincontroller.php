<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Signup;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class signincontroller extends Controller
{

    public function index(){
        return view('frontend.signin');
    }
    public function register(Request $request){
          $request->validate(
            [
                'email'=> 'required|email',
                'password'=> 'required',
            ]
        );  

        $credentials = $request->only('email', 'password');
       

        // $data = User::where('email',$request->email)->where('password',$request->password)->first();
        // dd($data);
        if (Auth::attempt($credentials)) {

            // dd($data);
            // Authentication passed
            // $request->session()->regenerate();
            if(auth()->check() && auth()->user()->role === 1){
                return redirect('/adminhotel')->with('success', 'Sign-up successful');

            }else{
                return redirect('/booking');
            }
           
            // return redirect()-> intended('booking');
            // return redirect('/booking')->with('message','You are now logged in '); // Redirect to the intended page after successful login
            //  $redirectTo = '/booking';
        }
        else{
        // Authentication failed
        return redirect()->back()->with('error', 'Invalid email or password');
        }
    }
        
}

    