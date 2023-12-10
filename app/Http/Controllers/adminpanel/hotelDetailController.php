<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\hotelDetail;
use Illuminate\Http\Request;

class hotelDetailController extends Controller
{
    public function index(){
            $data['hoteldetail'] = hotelDetail::all();
        return view('frontend.admin.hotel-details',$data);
    }




    public function upload(Request $request){
        $hoteldetail = new hotelDetail();
        $hoteldetail->hotelname = $request->input('hotelname');

        if($request->hasfile('logo')){
            $fileName= time(). ".-ws.". $request->file('logo')->getClientOriginalExtension();
            echo $request->file('logo')->move('img/homedetail', $fileName);
            $hoteldetail->logo = $fileName;
            
            // return redirect()->back()->with('status', 'Logo added successfully');
       
        }
        if($request->hasfile('video')){
            $fileName= time(). ".-ws.". $request->file('video')->getClientOriginalExtension();
            echo $request->file('video')->move('img/homedetail', $fileName);
            $hoteldetail->video = $fileName;
            // $hoteldetail->save();
            
       
        }
        $hoteldetail->save();
        return redirect()->back()->with('status', ' Added successfully');

    }


    public function update(Request $request, $id){

        $hoteldetail = hotelDetail::find($id);
        dd($request['hotelname']);
        $hoteldetail->hotelname = $request->input('hotelname');

        
        if($request->hasfile('logo')){
            $fileName= time(). ".-ws.". $request->file('logo')->getClientOriginalExtension();
            echo $request->file('logo')->move('img/homedetail', $fileName);
            $hoteldetail->logo = $fileName;
            
            // return redirect()->back()->with('status', 'Logo added successfully');
       
        }
        if($request->hasfile('video')){
            $fileName= time(). ".-ws.". $request->file('video')->getClientOriginalExtension();
            echo $request->file('video')->move('img/homedetail', $fileName);
            $hoteldetail->video = $fileName;
            // $hoteldetail->save();
            
       
        }
        // $hoteldetail->logo = $request['logo'];
        // $hoteldetail->video = $request['video'];
        $hoteldetail->update();
        return redirect('/adminhotel');
    }

    public function edit($id){
        $data['hoteldetail'] = hotelDetail::find($id);
        return view('frontend.admin.updatehotel',$data);
    }



    public function hoteldelete($id){
        // dd($id);
        $hoteldetail = hotelDetail::find($id);
        if(!is_null($hoteldetail)){
            $hoteldetail->delete();
        }
        return redirect()->back();
    }
}
