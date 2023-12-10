<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\package;
use Illuminate\Http\Request;

class packageDetailController extends Controller
{
    public function index(){
        $data['packages']= package::all();
        return view('frontend.admin.package',$data);
    }


    public function store(Request $request){
        $package = new package();
        $package->name = $request->input('name');
        $package->description = $request->input('description');
        
        if($request->hasfile('img')){
            $fileName= time(). ".-ws.". $request->file('img')->getClientOriginalExtension();
            echo $request->file('img')->move('img/packagedetail', $fileName);
            $package->img = $fileName;
        }

        $package->save();
        return redirect()->back()->with('message', 'Pacakge stored successfullly ');
    }

    public function packagedelete($id) {
        // dd($id);
        $packages = package::find($id);
        if(!is_null($packages)){
            $packages->delete();
        }
        return redirect()->back();
        
    }
}