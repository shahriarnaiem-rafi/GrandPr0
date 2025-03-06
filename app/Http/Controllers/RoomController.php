<?php

namespace App\Http\Controllers;

use App\Models\AddroomType;
use App\Models\Bed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoomController extends Controller
{
    public function showroomType(){
         $showroomType=AddroomType::all();
         return view('AdminDashboard.AdminPages.RoomDetails.addroomtype', compact('showroomType'));
    }

    public function senddata(){
        $showroomTypedata=AddroomType::all();
        $showbed = Bed::all();
        return view('AdminDashboard.AdminPages.RoomDetails.addroom',compact('showroomTypedata','showbed'));
   }
    public function removeRoomType($id)
    {
        $showroomType = AddroomType::find($id);
        $showroomType->delete();
        return Redirect::to('/addroomtype');
    }
    public function addRoomType(Request $request)
    {
        $showroomt =new  AddroomType;

        $showroomt->typeroom=$request->typeroom;
        $showroomt->save();
        return Redirect::to('/addroomtype');
    }  
}
