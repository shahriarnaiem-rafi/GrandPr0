<?php

namespace App\Http\Controllers;

use App\Models\Bed;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BedController extends Controller
{
    public function showbedType()
    {
        $showbedTypes = Bed::all();
        return view('AdminDashboard.AdminPages.RoomDetails.bed', compact('showbedTypes'));
    }
    public function removeBedType($id)
    {
        $showbedTypes = Bed::find($id);
        $showbedTypes->delete();
        return Redirect::to('/addbed');
    }
    public function addBedType(Request $request)
    {
        $bedtype = new  Bed;
        $bedtype->bedtypes = $request->bedtypes;
        $bedtype->save();
        return Redirect::to('/addbed');
    }
}
