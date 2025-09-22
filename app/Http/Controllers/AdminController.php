<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
       if(Auth::id()){
        $usertype = Auth::user()->usertype;
        if($usertype == 'user'){
            return view('home.index');
        }
        else if($usertype == 'admin'){
            return view('admin.index');
        }
        else{
            return redirect()->back();
        }
       }
    }


    public function create_room(){
        return view('admin.create_room');
    }

    public function add_room(Request $request){
        // return $request;
        $data = new Room;
        $data->room_title = $request->title;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->wifi = $request->wifi;
        $data->room_type = $request->room_type;
        $image = $request->image;
        if($image)
        {
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('room',$imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back()->with('message', 'User Added Successfully');

    }

    public function all_rooms(){
        $data = Room::all();
        return view('admin.all_rooms', compact('data'));
    }

    public function home(){
        return view('home.index');
    }
}
