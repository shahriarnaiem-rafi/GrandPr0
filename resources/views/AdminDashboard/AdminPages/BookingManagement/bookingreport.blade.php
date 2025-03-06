@extends('AdminDashboard.main')

@section('content')
<section class="ml-52 mt-2">
    <form method="POST" action="main_dashboard.php?page=monthly_booking" class="max-w-lg md:mx-auto mx-4 md:p-8 px-4 py-4 rounded-xl hover:shadow-2xl transition-shadow duration-300 bg-white border border-gray-200 mb-6">
        <div class="mb-4">
            <label for="checkin_date" class="block text-gray-700 font-semibold ">Check-in Date:</label>
            <input type="date" name="checkin_date" id="checkin_date" class="py-3 px-4 bg-white border-2 border-red-500 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-black" required>
        </div>
        <div class="mb-4">
            <label for="checkout_date" class="block text-gray-700 font-semibold">Check-out Date:</label>
            <input type="date" name="checkout_date" id="checkout_date" class="py-3 px-4 bg-white border-2 border-red-500 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-black" required>
        </div>
        <button type="submit" name="submit" id="submitbtn" class=" relative flex justify-center items-center w-full py-3 border-2 rounded-lg border-red-500 text-green-900 font-semibold hover:text-white bg-transparent overflow-hidden group transition-all duration-500 mt-5">
            <span class="absolute inset-0 bg-black transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500 ease-out "></span>
            <span class="relative z-10 uppercase">Search Bookings</span>
        </button>
    </form>
</section>

<section>
    <div class="container mx-auto p-4">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
                <thead class="bg-gray-600 ">
                    <tr>
                        <th class="px-6 py-3 text-center text-white font-semibold">SL</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">User Name</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">User Email</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Room Type</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Room Number</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Booking Date</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Chekin Date</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Checkout Date</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Payment</th>
                        <th class="px-6 py-3 text-center text-white font-semibold">Total Amount</th>
                        <!-- <th class="px-6 py-3 text-center text-gray-700 font-semibold">Actions</th> -->
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">1</td>
                        <td class="px-6 py-4">John Doe</td>
                        <td class="px-6 py-4">john@example.com</td>
                        <td class="px-6 py-4">Single</td>
                        <td class="px-6 py-4">101</td>
                        <td class="px-6 py-4">Date</td>
                        <td class="px-6 py-4">Date</td>
                        <td class="px-6 py-4">Date</td>
                        <td class="px-6 py-4">paid</td>
                        <td class="px-6 py-4">500</td>
                        <!-- <td class="px-6 py-4">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mb-1">Edit</button><br>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 ">Delete</button>
                        </td> -->
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection