<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\room;
use Illuminate\Http\Request;

class roomDetailController extends Controller
{
    public function index(){
        $data['rooms'] = room::all();
        return view('frontend.admin.rooms',$data);
    }

    public function store(Request $request){
        $room = new room();
        $room->roomtype = $request->input('roomtype');
        $room->description = $request->input('description');
        $room->totalroom = $request->input('totalroom');
        $room->adultone = $request->input('adultone');
        $room->adulttwo = $request->input('adulttwo');
        
        if($request->hasfile('img')){
            $fileName= time(). ".-ws.". $request->file('img')->getClientOriginalExtension();
            echo $request->file('img')->move('img/roomdetail', $fileName);
            $room->img = $fileName;
        }
        $room->save();
        return redirect()->back()->with('message', 'Data stored successfully ');
    }



    public function roomdelete($roomid){
        // dd($id);
        // room::find($id)->delete();
        // return redirect()->back();
        $room = room::find($roomid);
        if(!is_null($room)){
            $room->delete();
        }
        return redirect()->back();
    }
}
