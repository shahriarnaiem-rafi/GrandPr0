@extends('AdminDashboard.main')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Parcel Received -->
        <div class="bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">5</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Total Booking</p>
        </div>

        <!-- Old Parcel -->
        <div class="bg-gradient-to-r from-green-500 to-green-700 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">400</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Available Room</p>
        </div>

        <!-- Total Parcel -->
        <div class="bg-gray-800 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">56</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Revenue</p>
        </div>

        <!-- Pending Delivered -->
        <div class="bg-gradient-to-r from-red-500 to-red-700 text-white rounded-xl shadow-lg p-6 text-center">
            <h3 class="text-4xl font-bold drop-shadow-md">546</h3>
            <p class="text-xl font-semibold mt-2 drop-shadow-md">Total Guest</p>
        </div>
    </div>
</div>
@endsection
