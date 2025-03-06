<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StaffController extends Controller
{
    public function showStaff()
    {
        $staffDatas = Staff::all();
        return view('AdminDashboard.AdminPages.Users.manageuser', compact('staffDatas'));
    }
    public function removeStaff($id)
    {
        $staffDatas = Staff::find($id);
        $staffDatas->delete();
        return Redirect::to('/manageuser');
    }
    public function addStaff(Request $request)
    {
        $addData = new Staff;
        $addData->name = $request->name;
        $addData->email = $request->email;
        $addData->password = $request->password;
        $addData->phone = $request->phone;
        $addData->image = $request->image;
        $addData->save();
        return Redirect::to('/manageuser');
    }
    public function update($id)
    {
        $staffData = Staff::find($id);
        return view('AdminDashboard.AdminPages.Users.edit', compact('staffData'));
    }
    public function updateStaff(Request $request)
    {
        $staffData = Staff::find($request->id);
        $staffData->name = $request->name;
        $staffData->email = $request->email;
        $staffData->password = $request->password;
        $staffData->phone = $request->phone;
        $staffData->image = $request->image;
        $staffData->save();
        return Redirect::to('/manageuser');
    }
}
