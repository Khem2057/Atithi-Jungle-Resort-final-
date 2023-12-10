<?php

namespace App\Http\Controllers\adminpanel;

use App\Http\Controllers\Controller;
use App\Models\booked;
use App\Models\booking;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class bookedDetailController extends Controller
{
    public function index(){
    $data['booking'] = booking::all();
        return view('frontend.admin.booked',$data);
    }

    public function storeroom(Request $request){
        $books = new booking();
        $books->checkin = $request->input('checkin');
        $books->checkout = $request->input('checkout');
        $books->night = $request->input('night');
        $books->roomtype = $request->input('roomtype');
        $books->roomno = $request->input('roomno');
        $books->noofroom = $request->input('noofroom');
        $books->noofadults = $request->input('noofadults');
        $books->totalprice = $request->input('totalprice');
        $books->save();
        return redirect()->back()->with('message', 'Changed successfully');
    }


    public function delete($id){
        $books = booking::find($id);
        if(!is_null($books)){
            $books->delete();
        }
        return redirect()->back();
    }
}
