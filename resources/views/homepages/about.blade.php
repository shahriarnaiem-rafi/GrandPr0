<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GrandPr0 Hotel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
@include('shared.header');

    <!-- Hero Section -->
    <div class="relative min-h-[400px] bg-cover bg-center flex items-center justify-center text-white"
        style="background-image: url('https://i.ibb.co/SzGFCHt/Banner.jpg');">
        <div class="bg-black bg-opacity-50 p-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold">Welcome to GrandPr0 Hotel</h1>
            <p class="text-lg md:text-2xl mt-4">Experience luxury and comfort like never before.</p>
        </div>
    </div>

    <!-- About Us Section -->
    <section class="py-16 px-4 md:px-8 text-center">
        <h2 class="text-3xl font-semibold mb-6">About GrandPr0 Hotel</h2>
        <p class="text-lg md:text-xl max-w-3xl mx-auto mb-4">
            At GrandPr0, we provide an unforgettable experience with world-class amenities & personalized service.
        </p>
        <p class="text-lg md:text-xl max-w-3xl mx-auto">
            With elegant rooms, fine dining, and luxury spa services, we ensure a comfortable and sophisticated stay.
        </p>
    </section>

    <!-- Our Services Section -->
    <section class="bg-white py-16 px-4 md:px-8 text-center">
        <h2 class="text-3xl font-semibold mb-6">Our Services</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="service-item">
                <i class="fa-solid fa-bed text-4xl mb-4 text-blue-600"></i>
                <h3 class="text-2xl font-semibold mb-2">Luxury Rooms</h3>
                <p class="text-lg">Spacious rooms with world-class amenities.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-utensils text-4xl mb-4 text-blue-600"></i>
                <h3 class="text-2xl font-semibold mb-2">Gourmet Dining</h3>
                <p class="text-lg">Exquisite dining with international cuisine.</p>
            </div>
            <div class="service-item">
                <i class="fa-solid fa-spa text-4xl mb-4 text-blue-600"></i>
                <h3 class="text-2xl font-semibold mb-2">Relaxation & Spa</h3>
                <p class="text-lg">Luxury spa services for total relaxation.</p>
            </div>
        </div>
    </section>

    <!-- Contact Information -->
    <section class="bg-gray-100 py-16 px-4 md:px-8 text-center">
        <h2 class="text-3xl font-semibold mb-6">Get In Touch</h2>
        <p class="text-lg md:text-xl mb-8">
            Contact us for reservations and inquiries.
        </p>
        <div>
            <p class="text-xl font-semibold">Email:</p>
            <p class="text-lg">contact@grandpr0hotel.com</p>
        </div>
        <div class="mt-4">
            <p class="text-xl font-semibold">Phone:</p>
            <p class="text-lg">+1 (234) 567-890</p>
        </div>
    </section>
    @include('shared.footer');

</body>
</html>
