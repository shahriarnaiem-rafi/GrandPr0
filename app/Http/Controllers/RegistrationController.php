<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Redirect;

class RegistrationController extends Controller
{
    public function registration()
    {
        return view("/registration");
    }
    public function registrationSave(Request $request)
    {
        // Validate request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'phone' => 'required|digits:10',
            'gender' => 'required',
            'country' => 'required',
            'role' => 'required',
        ]);

        // Create a new registration entry
        $registerdata = new Registration;
        $registerdata->name = $request->name;
        $registerdata->email = $request->email;
        $registerdata->password = $request->password; 
        $registerdata->phone = $request->phone;
        $registerdata->gender = $request->gender;
        $registerdata->country = $request->country;
        $registerdata->role = $request->role;
        $registerdata->save();
        return redirect('/login')->with('success', 'Registration successful!');
    }
    
}
