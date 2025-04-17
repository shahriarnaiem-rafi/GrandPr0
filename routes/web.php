<?php

use App\Http\Controllers\AddedRoomController;
use App\Http\Controllers\BedController;
use App\Http\Controllers\BookingmanagementController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/inspiration', function () {
    return view('homepages.inspiration');
});
Route::get('/roombooking', function () {
    return view('homepages.roombooking');
});
// Route::get('/room', function () {
//     return view('homepages.room');
// });

Route::get('/room',[AddedRoomController::class,'senddataRoom']);


Route::get('/about', function () {
    return view('homepages.about');
});
Route::get('/contact', function () {
    return view('homepages.contact');
});
Route::get('/login', function () {
    return view('login');
});
//ui pages complete
















// go to registration page
Route::get('/registration',[RegistrationController::class,'registration'])->name('registration');
Route::post('/registrationSave', [RegistrationController::class, 'registrationSave'])->name('registrationSave');

// Registration done

Route::get('/maindashboard', function () {
    return view('AdminDashboard.main');
});
Route::get('/maindashboard', function () {
    return view('AdminDashboard.AdminPages.dashboard');
});
// Dashboard done 

Route::get('/addroom',[RoomController::class,'senddata']);

// Room add



Route::get('/addroomtype',[RoomController::class,'showroomType']);
Route::delete('/deleteroomtype/{id}',[RoomController::class,'removeRoomType'])->name('deleteroomtype');
Route::post('createroomtype',[RoomController::class,'addRoomType'])->name('createroomtype');

// room type done

Route::get('/addbed',[BedController::class,'showbedType']);
Route::delete('/deletebedtype/{id}',[BedController::class,'removeBedType'])->name('deletebedtype');
Route::post('createbedtype',[BedController::class,'addBedType'])->name('createbedtype');
// bed type done 




Route::get('/roomdetails', function () {
    return view('AdminDashboard.AdminPages.RoomDetails.roomdetails');
});
Route::get('/roomdetails',[AddedRoomController::class,'showroom']);
Route::delete('/deleteroomdetails/{id}',[AddedRoomController::class,'removeRoom'])->name('deleteroomdetails');
Route::post('createroom',[AddedRoomController::class,'addroom'])->name('createroom');








Route::get('/adduser', function () {
    return view('AdminDashboard.AdminPages.Users.adduser');
});
Route::post('create',[StaffController::class,'addStaff'])->name('create');
Route::get('/edit{id}',[StaffController::class,'update'])->name('update');
Route::post('/updated',[StaffController::class,'updateStaff'])->name('updateStaff');
Route::get('/manageuser',[StaffController::class,'showStaff']);

Route::delete('/delete/{id}',[StaffController::class,'removeStaff'])->name('delete');
// user management done





//booking management
Route::get('/bookinglist', function () {
    return view('AdminDashboard.AdminPages.BookingManagement.bookinglist');
});
Route::get('/roomstatus', function () {
    return view('AdminDashboard.AdminPages.BookingManagement.roomstatus');
});
Route::get('/bookingreport', function () {
    return view('AdminDashboard.AdminPages.BookingManagement.bookingreport');
});

//end booking

Route::get('/transection', function () {
    return view('AdminDashboard.AdminPages.Transection.transection');
});




// Customer Section

Route::get('/customerdashboard',function(){
    return view('CustomerDashboard.main');
});

// dashboard
Route::get('/customerdashboard',function(){
    return view('CustomerDashboard.CustomerPages.customerdashboard');
});


//booking management
// Route::get('/your-bookinglist', function () {
//     return view('CustomerDashboard.CustomerPages.BookingManagement.bookinglist');
// });
Route::get('/your-bookinglist',[BookingmanagementController::class,'showbookings']);
Route::delete('/your-bookinglist/{id}',[BookingmanagementController::class,'removebookings'])->name('removebookings');


Route::get('/your-roomstatus', function () {
    return view('CustomerDashboard.CustomerPages.BookingManagement.roomstatus');
});
Route::get('/your-bookingreport', function () {
    return view('CustomerDashboard.CustomerPages.BookingManagement.bookingreport');
});
Route::get('/your-bookingreport',[BookingmanagementController::class,'showbookingreport']);

Route::get('/booking-registar', function () {
    return view('CustomerDashboard.CustomerPages.BookingManagement.booking-registar');
});
Route::get('/booking-registar',[AddedRoomController::class,'senddataRoomcustomerdashboard']);
// Route::post('/booking-registar',[BookingmanagementController::class,'senddatabookingmanagement'])->name('/senddatabookingmanagement');
Route::post('/booking-registar', [BookingmanagementController::class, 'senddatabookingmanagement'])->name('booking.senddatabookingmanagement');

//end booking

// transection
Route::get('/your-transection',[BookingmanagementController::class,'showbookingtransection']);
