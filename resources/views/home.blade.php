<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrandPr0 | Hotel</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Style for the scroll to top button */
        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 50%;
            padding: 10px 15px;
            font-size: 20px;
            cursor: pointer;
            display: none;
            z-index: 1;
            /* Hidden by default */
        }

        #scrollToTopBtn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body class="bg-gray-100">

    @include('Shared.header')


    <!-- Navbar -->

    <button id="scrollToTopBtn" onclick="scrollToTop()">
        <i class="fa fa-arrow-up"></i>
    </button>
    <!-- Hero Section -->
    <div class="relative min-h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('https://i.ibb.co/SzGFCHt/Banner.jpg');">
        <div class="bg-black bg-opacity-30 p-8 text-center rounded-2xl">
            <h1 class="text-4xl md:text-5xl font-bold">Welcome to GrandPr0 Hotel</h1>
            <p class="text-lg md:text-2xl mt-4">Experience luxury and comfort like never before.</p>
        </div>
    </div>

    <!-- chek out  -->
    <div>
        <form method="POST" action="pages/room.php" class="md:mx-8 mx-5 my-2">
            <div
                class="form-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-6 rounded-lg shadow-md shadow-blue-100">

                <!-- Check-in Date -->
                <div class="form-section flex flex-col items-center md:border-r-2 md:border-gray-300 cursor-pointer"
                    onclick="focusInput('checkin')">
                    <h4 class="text-lg font-semibold mb-2 text-[--secondary-color] titel_content">CHECK IN &#128197;
                    </h4>
                    <input type="date" id="checkin" name="checkin" value="2025-02-19"
                        required min="2025-02-19"
                        class="md:w-[90%] w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-black border-red-500 bg-[--primary-color]">
                </div>

                <!-- Check-out Date -->
                <div class="form-section flex flex-col items-center md:border-r-2 md:border-gray-300 cursor-pointer"
                    onclick="focusInput('checkout')">
                    <h4 class="text-lg font-semibold mb-2 text-[--secondary-color] titel_content">CHECK OUT &#128197;
                    </h4>
                    <input type="date" id="checkout" name="checkout"
                        value="2025-02-20" required
                        min="2025-02-20"
                        class="md:w-[90%] w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-black border-red-500 bg-[--primary-color]">
                </div>

                <!-- Guests Section -->
                <div class="flex flex-col items-center md:border-r-2 md:border-gray-300">
                    <h4 class="text-lg font-semibold mb-2 text-[--secondary-color] titel_content">GUESTS &#128101;</h4>
                    <select name="guests"
                        class="md:w-[90%] w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-black titel_content border-red-500 bg-[--primary-color]">
                        <option value="1">1 Guest</option>
                        <option value="2">2 Guests</option>
                        <option value="3">3 Guests</option>
                        <option value="4">4+ Guests</option>
                    </select>
                </div>

                <!-- Check Availability Button -->
                <div class="check-availability flex flex-col items-center justify-center">
                    <a type="submit" href="/room"
                        class="relative flex justify-center items-center w-full h-full py-2 md:py-0 border-2 rounded-lg border-red-500 hover:text-white overflow-hidden group">
                        <span
                            class="absolute inset-0 bg-black translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-300 ease-out"></span>
                        <span class="relative z-10 uppercase text-xl titel_content">Check Availability</span>
                    </a>
                </div>
            </div>
        </form>
    </div>




    <!-- About  -->
    <div class="py-8">
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex flex-col lg:flex-row items-center justify-center gap-8 px-4 lg:px-16">
                <!-- Image Section -->
                <img src="https://i.ibb.co/xSHHq43t/View.jpg" class="rounded-lg shadow-2xl" alt="View" />

                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">About Us</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.

                    </p>
                    <p class="py-3 text-lg md:text-xl text-gray-700">Provident cupiditate voluptatem et in. Quaerat
                        fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <p class="py-3 text-lg md:text-xl text-gray-700">


                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.</p>
                    <button
                        class="btn btn-primary text-white bg-blue-600 hover:bg-black px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <a href="/roombooking">Book Now</a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Room -->
    <div class="py-8 " style="margin-top: -150px;">
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex flex-col lg:flex-row items-center justify-center gap-8 px-4 lg:px-16">
                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">Rooms</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae et a id nisi.

                    </p>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">AMENITIES</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">Provident cupiditate voluptatem Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Dolore, similique! et in. Quaerat fugiat ut assumenda
                        excepturi exercitationem quasi. In deleniti eaque aut repudiandae et a id nisi.</p>

                    <button
                        class="btn btn-primary text-white bg-blue-600 hover:bg-black px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <a href="/roombooking">Book Now</a>
                    </button>
                </div>
                <!-- Image Section -->
                <img src="https://i.ibb.co.com/XrNffGTm/roberto-nickson-tle-CJi-DOri0-unsplash.jpg"
                    class="rounded-lg shadow-2xl" alt="View" />
            </div>
        </div>
    </div>
    <!-- swiming pull -->
    <div class="py-8" style="margin-top: -150px;">
        <div class="hero bg-base-200 min-h-screen">
            <div class="hero-content flex flex-col lg:flex-row items-center justify-center gap-8 px-4 lg:px-16">
                <!-- Image Section -->
                <img src="https://i.ibb.co.com/vCJSX4hs/exterior-design-in-gulshan-1-1024x576.jpg"
                    class="rounded-lg shadow-2xl" alt="View" />

                <!-- Text Section -->
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">SWIMING POOL</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">
                        Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi. In deleniti eaque aut repudiandae Quaerat fugiat ut assumenda excepturi exercitationem
                        quasi.

                    </p>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800">CAR PARKING</h1>
                    <p class="py-3 text-lg md:text-xl text-gray-700">Provident cupiditate voluptatem Lorem ipsum dolor
                        sit amet consectetur adipisicing elit. Dolore, similique! et in. Quaerat fugiat ut assumenda
                        excepturi exercitationem quasi. </p>

                    <button
                        class="btn btn-primary text-white bg-blue-600 hover:bg-black px-6 py-3 rounded-lg shadow-md transition duration-300">
                        <a href="/roombooking">Book Now</a>
                    </button>
                </div>

            </div>
        </div>
    </div>



    <div class="min-h-screen p-8 bg-base-200" style="margin-top: -250px;">
        <h1 class="text-4xl font-bold text-center py-8">Gallery</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <div class="relative">
                <img src="https://i.ibb.co.com/qYm7m7th/download-2.jpg" alt="Gallery Image 1"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/zWJvLHtQ/download.jpg" alt="Gallery Image 2"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/1kFcm30/istockphoto-1166166558-612x612.jpg" alt="Gallery Image 3"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/wrJdg9HJ/istockphoto-1448294355-612x612.jpg" alt="Gallery Image 4"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/WNF94nyw/istockphoto-1481129583-612x612.jpg" alt="Gallery Image 5"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/wrJdg9HJ/istockphoto-1448294355-612x612.jpg" alt="Gallery Image 6"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/TBz8kfqr/download.jpg" alt="Gallery Image 7"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
            <div class="relative">
                <img src="https://i.ibb.co.com/qY1mMtcB/download-1.jpg" alt="Gallery Image 8"
                    class="rounded-lg shadow-lg w-full h-auto">
            </div>
        </div>
    </div>

    <section>
        <div class="py-8">
            <h2 class="text-3xl font-bold text-center mb-6">Instagram Feed</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 px-4">
                <!-- Instagram Images -->
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/qYm7m7th/download-2.jpg" alt="Instagram Post 1"
                        class="w-full h-full object-cover">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/zWJvLHtQ/download.jpg" alt="Instagram Post 2"
                        class="w-full h-full object-cover">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/1kFcm30/istockphoto-1166166558-612x612.jpg" alt="Instagram Post 3"
                        class="w-full h-full object-cover">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer"
                    class="block overflow-hidden rounded-lg shadow-lg hover:scale-105 transition-transform">
                    <img src="https://i.ibb.co.com/wrJdg9HJ/istockphoto-1448294355-612x612.jpg" alt="Instagram Post 4"
                        class="w-full h-full object-cover">
                </a>
            </div>
        </div>
    </section>

    @include('Shared.footer')

    <!-- Footer -->

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>