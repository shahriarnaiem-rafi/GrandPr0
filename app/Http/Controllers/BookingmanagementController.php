<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\BookingManagement;
use Redirect;
use Illuminate\Http\Request;
class BookingmanagementController extends Controller
{
    public function showbookings()
    {
        $bookings = BookingManagement::all();
        return view('CustomerDashboard.CustomerPages.BookingManagement.bookinglist', compact('bookings'));
    }

    public function removebookings($id)
    {
        $bookings = BookingManagement::find($id);
        $bookings->delete();
        return Redirect::to('/your-bookinglist');
    }

    public function showbookingreport()
    {
        $bookings = BookingManagement::all();
        return view('CustomerDashboard.CustomerPages.BookingManagement.bookingreport', compact('bookings'));
    }

    public function removebookingreport($id)
    {
        $bookings = BookingManagement::find($id);
        $bookings->delete();
        return Redirect::to('/your-bookingreport');
    }

    public function showbookingtransection()
    {
        $bookings = BookingManagement::all();
        return view('CustomerDashboard.CustomerPages.Transection.transection', compact('bookings'));
    }

    public function senddatabookingmanagement(Request $request)
    {
        $customerName = $request->input('customername');
        $phone = $request->input('phone');

        $booking = new BookingManagement;
        $booking->customername = $request->customername;
        $booking->phone = $request->phone;
        $booking->id = $request->id;  
        $booking->typeroom = $request->typeroom;
        $booking->floornumber = $request->floornumber;

        $booking->roomcapacity = $request->roomcapacity;
        $booking->roomprice = $request->roomprice;
        $booking->bedtypes = $request->bedtypes; 
        $booking->roomnumber = $request->roomnumber;  
        $booking->paymentmethod = $request->paymentmethod;  
        $booking->save();

        return Redirect::to('/your-bookinglist');
    }
}
