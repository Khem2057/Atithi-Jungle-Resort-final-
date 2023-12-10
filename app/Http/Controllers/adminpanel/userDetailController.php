<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use App\Models\User;

class userDetailController extends Controller
{
    public function index(){
        $data['userdetail'] = User::all();
        // return view('frontend.admin.hotel-details',$data);
        return view('frontend.admin.user-details',$data);
    }


    public function delete($id){
        // dd($id);
        // User::find($id)->delete();
        // return redirect()->back();
        $users = User::find($id);
        if(!is_null($users)){
            $users->delete();
        }
        return redirect()->back();
    }
}
