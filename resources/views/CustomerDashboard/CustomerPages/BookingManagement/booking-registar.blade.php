@extends('CustomerDashboard.main')

@section('content')
    <div class="container mx-auto px-4 py-6 max-w-4xl">
        <!-- Grid layout with 4 items per row on large screens, 2 items per row on medium and smaller screens -->
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 gap-6">
            @foreach ($showroom as $showsingleroom)
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col">
                    <!-- Room Image -->
                    <img src="{{ $showsingleroom->roomphoto }}" alt="Room Image" class="w-full h-40 object-cover rounded-md">

                    <!-- Room Type Title -->
                    <h3 class="text-base font-semibold text-gray-800 mt-3">{{ $showsingleroom->typeroom }}</h3>

                    <!-- Room Price & Capacity -->
                    <div class="grid grid-cols-2 gap-2 text-gray-600 text-sm mt-2">
                        <p class="flex items-center"><i class="fa-solid fa-dollar-sign text-blue-500 mr-1"></i>{{ $showsingleroom->roomprice }}</p>
                        <p class="flex items-center"><i class="fa-solid fa-user text-blue-500 mr-1"></i>{{ $showsingleroom->roomcapacity }}</p>
                        <p class="flex items-center" title="floornumber"><i class="fa-solid fa-building text-blue-500 mr-1"></i>{{ $showsingleroom->floornumber }}</p>
                        <p class="flex items-center" title="roomnumber"><i class="fa-solid fa-hotel text-blue-500 mr-1"></i>{{ $showsingleroom->roomnumber }}</p>
                    </div>

                    <!-- Room View & Bed Type -->
                    <div class="grid grid-cols-2 gap-2 text-gray-600 text-sm mt-1">
                        <p class="flex items-center"><i class="fa-solid fa-eye text-blue-500 mr-1"></i>{{ $showsingleroom->roomview }}</p>
                        <p class="flex items-center"><i class="fa-solid fa-bed text-blue-500 mr-1"></i>{{ $showsingleroom->bedtypes }}</p>
                    </div>

                    <!-- Room Description (Truncated) -->
                    <p class="text-gray-600 text-xs mt-2 truncate"><i class="fa-solid fa-file text-blue-500 mr-1"></i>
                        {{ Str::limit($showsingleroom->description, 80) }}</p>

                    <!-- Price per Night -->
                    <p class="text-xs font-semibold text-gray-700 mt-2">Per Night: <span class="text-blue-600">${{ $showsingleroom->roomprice }}</span></p>
                </div>

                <!-- Booking Form (on the same row as the room details) -->
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition duration-300">
                    <!-- Display Validation Errors -->
                    @if ($errors->any())
                        <div class="mb-4 p-3 bg-red-100 border border-red-400 rounded-md">
                            <ul class="text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Booking Form -->
                    <form action="{{ route('booking.senddatabookingmanagement') }}" method="POST" class="mt-2">
                        @csrf

                        <!-- Hidden Inputs for Room Details -->
                        <input type="hidden" name="id" value="{{ $showsingleroom->id }}">
                        <input type="hidden" name="typeroom" value="{{ $showsingleroom->typeroom }}">
                        <input type="hidden" name="roomprice" value="{{ $showsingleroom->roomprice }}">
                        <input type="hidden" name="roomcapacity" value="{{ $showsingleroom->roomcapacity }}">
                        <input type="hidden" name="roomview" value="{{ $showsingleroom->roomview }}">
                        <input type="hidden" name="bedtypes" value="{{ $showsingleroom->bedtypes }}">
                        <input type="hidden" name="floornumber" value="{{ $showsingleroom->floornumber }}">
                        <input type="hidden" name="roomnumber" value="{{ $showsingleroom->roomnumber }}">

                        <!-- Name and Phone Input Fields -->
                        <div class="mb-2">
                            <label for="customername" class="block text-xs font-semibold text-gray-700">Full Name</label>
                            <input type="text" name="customername" id="customername" class="w-full p-2 mt-1 text-sm border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-2">
                            <label for="phone" class="block text-xs font-semibold text-gray-700">Phone Number</label>
                            <input type="tel" name="phone" id="phone" class="w-full p-2 mt-1 text-sm border border-gray-300 rounded-md" required>
                        </div>

                        <!-- Payment Method Dropdown -->
                        <div class="mb-2">
                            <label for="paymentmethod" class="block text-xs font-semibold text-gray-700">Payment Method</label>
                            <select name="paymentmethod" id="paymentmethod" class="w-full p-2 mt-1 text-sm border border-gray-300 rounded-md" required>
                                <option value="" disabled selected>Select Payment Method</option>
                                <option value="Bkash">Bkash</option>
                                <option value="Nogod">Nogod</option>
                                <option value="Roket">Roket</option>
                            </select>
                        </div>

                        <!-- Book Now Button -->
                        <button type="submit" class="w-full mt-2 bg-blue-600 text-white py-1.5 rounded-md text-center text-sm font-semibold hover:bg-blue-700 transition duration-300">
                            Book Now
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
