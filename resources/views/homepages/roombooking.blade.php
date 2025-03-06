<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body class="bg-gray-100">

@include('shared.header')


    <!-- Page Content -->
    <div class="pt-20 pb-12">
        <div class="container mx-auto px-6">
            <div class="text-center mb-8">
                <h2 class="text-4xl font-bold text-gray-800">Room Booking</h2>
                <p class="text-lg text-gray-600 mt-2">Book your stay with us and enjoy the luxury!</p>
                <p class="text-3xl text-red-600 mt-2 " >Please Registration First <br>
                    <span class="text-5xl">Click  Login and Registration <i class="fa-solid fa-arrow-up-right-from-square"></i></span> </p>
            </div>

            <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <form action="#" method="POST">
                    <!-- Room Type -->
                    <div class="mb-4">
                        <label for="room-type" class="block text-gray-700 font-semibold mb-2">Room Type</label>
                        <select id="room-type" name="room-type" class="w-full p-3 border border-gray-300 rounded-md">
                            <option value="single">Single Room</option>
                            <option value="double">Double Room</option>
                            <option value="suite">Suite</option>
                            <option value="penthouse">Penthouse</option>
                        </select>
                    </div>

                    <!-- Check-In Date -->
                    <div class="mb-4">
                        <label for="check-in" class="block text-gray-700 font-semibold mb-2">Check-In Date</label>
                        <input type="date" id="check-in" name="check-in" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>

                    <!-- Check-Out Date -->
                    <div class="mb-4">
                        <label for="check-out" class="block text-gray-700 font-semibold mb-2">Check-Out Date</label>
                        <input type="date" id="check-out" name="check-out" class="w-full p-3 border border-gray-300 rounded-md" required>
                    </div>

                    <!-- Number of Guests -->
                    <div class="mb-4">
                        <label for="guests" class="block text-gray-700 font-semibold mb-2">Number of Guests</label>
                        <input type="number" id="guests" name="guests" class="w-full p-3 border border-gray-300 rounded-md" min="1" max="10" required>
                    </div>

                    <!-- Special Requests -->
                    <div class="mb-4">
                        <label for="requests" class="block text-gray-700 font-semibold mb-2">Special Requests</label>
                        <textarea id="requests" name="requests" rows="4" class="w-full p-3 border border-gray-300 rounded-md" placeholder="Any special requests or preferences"></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-4 text-center">
                        <button type="submit" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 transition-colors">Book Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('shared.footer')

</body>
</html>
