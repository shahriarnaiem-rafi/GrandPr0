<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    @include('Shared.header')

    <div>
        <div class="relative min-h-[400px] bg-cover bg-center flex items-center justify-center text-white"
            style="background-image: url('https://i.ibb.co/SzGFCHt/Banner.jpg');">
            <div class="bg-black bg-opacity-30 p-8 text-center rounded-2xl">
                <h1 class="text-4xl md:text-5xl font-bold">Welcome to GrandPr0 Hotel</h1>
                <p class="text-lg md:text-2xl mt-4">Experience luxury and comfort like never before.</p>
            </div>
        </div>
        <br>
        <div class="container mx-auto px-4 py-6">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($showroom as $showsingleroom)
                <div class="bg-white p-3 rounded-lg shadow-md hover:shadow-lg transition duration-300 flex flex-col">
                    <!-- Image with adjusted height -->
                    <img src="{{ $showsingleroom->roomphoto	 }}"
                        alt="Room Image"
                        class="w-full h-32 object-cover rounded-md">

                    <!-- Room Type Title -->
                    <h3 class="text-base font-semibold text-gray-800 mt-2 truncate">{{ $showsingleroom->typeroom }}</h3>

                    <!-- Grid 1: Room Price & Capacity -->
                    <div class="grid grid-cols-2 gap-2 text-gray-600 text-sm mt-2">
                        <p class="flex items-center"><i class="fa-solid fa-dollar-sign text-blue-500 mr-1"></i>{{ $showsingleroom->roomprice }}</p>
                        <p class="flex items-center"><i class="fa-solid fa-user text-blue-500 mr-1"></i>{{ $showsingleroom->roomcapacity }}</p>
                    </div>

                    <!-- Grid 2: View & Bed Type -->
                    <div class="grid grid-cols-2 gap-2 text-gray-600 text-sm mt-1">
                        <p class="flex items-center"><i class="fa-solid fa-eye text-blue-500 mr-1"></i>{{ $showsingleroom->roomview }}</p>
                        <p class="flex items-center"><i class="fa-solid fa-bed text-blue-500 mr-1"></i>{{ $showsingleroom->bedtypes }}</p>
                    </div>

                    <!-- Description (Truncated) -->
                    <p class="text-gray-600 text-xs mt-2 truncate"><i class="fa-solid fa-file text-blue-500 mr-1"></i> {{ Str::limit($showsingleroom->description, 80) }}</p>

                    <!-- Price per Night -->
                    <p class="text-xs font-semibold text-gray-700 mt-2">Per Night: <span class="text-blue-600">${{ $showsingleroom->roomprice }}</span></p>

                    <!-- Learn More Button -->
                    <a href="/login" class="mt-2 bg-blue-600 text-white py-1.5 rounded-md text-center text-sm font-semibold hover:bg-blue-700 transition duration-300">
                        Book Know
                    </a>
                </div>
                @endforeach
            </div>
        </div>





    </div>

    @include('Shared.footer')

    <!-- Footer -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>