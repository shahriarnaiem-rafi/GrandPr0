@extends('CustomerDashboard.main')

@section('content')
    <div class="grid md:grid-cols-2 gap-4">

        <div class="card border border-blue-500 p-4 rounded-lg text-center">
            <span class="text-center mb-3"><i class="fa-solid fa-clipboard-list text-4xl" aria-hidden="true"></i></span>
            <h2 class="text-xl uppercase titel_content">Total Booking List</h2>

            @php
                $totalBookings = \App\Models\BookingManagement::count(); // Count the total bookings
            @endphp
            <p class="text-2xl titel_content">{{ $totalBookings }}</p> <a href="/your-bookinglist"
                class="border border-blue-600 text-center rounded-md py-3 mt-3 font-medium hover:bg-blue-600 hover:text-white transition-all titel_content">View
                More</a>
        </div>


        <div class="card border border-blue-500 p-4 rounded-lg text-center">
            <span class="text-center mb-3"><i class="fa-solid fa-hand-holding-dollar text-4xl"
                    aria-hidden="true"></i></span>
            @php
                $totalPayments = \App\Models\BookingManagement::count(); // Count the total bookings
            @endphp
            <h2 class="text-xl uppercase titel_content">Payment History</h2>
            <p class="text-2xl titel_content">{{ $totalPayments }} </p> <a href="/your-transection"
                class="border border-blue-600 text-center rounded-md py-3 mt-3 font-medium hover:bg-blue-600 hover:text-white transition-all titel_content">View
                More</a>
        </div>
        <!-- Add more cards -->
    </div>
@endsection