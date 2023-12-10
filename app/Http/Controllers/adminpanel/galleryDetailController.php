<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\gallery;
use Illuminate\Http\Request;

class galleryDetailController extends Controller
{
    public function index(){
        return view('frontend.admin.gallery');
    }


    public function upload(Request $request){
        $gallery = new gallery();

        if($request->hasfile('image')){
            $fileName= time(). ".-ws.". $request->file('image')->getClientOriginalExtension();
            echo $request->file('image')->move('img/galleries', $fileName);
            $gallery->img = $fileName;
            $gallery->save();
            return redirect()->back()->with('status', 'Image added successfully');
       
        }
    }

    public function show(){
        $gallery= gallery::all();
        return view('/gallery', compact('gallery'));
    }
    public function  delete($id){
        // dd($id);
        $galleries = gallery::find($id);
        if(!is_null($galleries)){
            $galleries->delete();
        }
        return redirect()->back();
    }

}
