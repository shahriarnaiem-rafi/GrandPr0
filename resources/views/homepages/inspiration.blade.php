<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inspiration</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
@include('shared.header');

  <div class="min-h-screen">

    <!-- Hero Section -->
    <div class="relative bg-cover bg-center min-h-[400px]" style="background-image: url('https://i.ibb.co.com/KzQwsQ7r/inspire.jpg')">
      <div class="absolute inset-0 bg-black bg-opacity-60"></div>
      <div class="relative text-center text-white py-24">
        <div class="max-w-xl mx-auto">
          <h1 class="text-4xl md:text-5xl font-bold">Get Inspired at GrandPr0</h1>
          <p class="py-6 text-xl md:text-2xl">Discover the beauty, serenity, and luxury that await you.</p>
        </div>
      </div>
    </div>

    <!-- Inspiration Gallery Section -->
    <section class="py-16 px-4 md:px-8 text-center">
      <h2 class="text-3xl font-semibold mb-6">Inspiration Gallery</h2>
      <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
        Experience the beauty and elegance of GrandPr0 through stunning imagery that highlights the essence of luxury and tranquility. Let these images inspire your next getaway.
      </p>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        <!-- Image 1 -->
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="https://i.ibb.co.com/Q3DhrJf8/download-2.jpg" alt="Hotel Room" class="w-full h-60 object-cover" />
        </div>
        <!-- Image 2 -->
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="https://i.ibb.co.com/xq8zW4rm/download-1.jpg" alt="Pool View" class="w-full h-60 object-cover" />
        </div>
        <!-- Image 3 -->
        <div class="rounded-lg overflow-hidden shadow-lg">
          <img src="https://i.ibb.co.com/qLR5Y3zJ/download.jpg" alt="Spa Treatment" class="w-full h-60 object-cover" />
        </div>
      </div>
    </section>

    <!-- Inspirational Quotes Section -->
    <section class="bg-white py-16 px-4 md:px-8 text-center">
      <h2 class="text-3xl font-semibold mb-6">Inspirational Quotes</h2>
      <div class="space-y-8">
        <blockquote class="italic text-lg md:text-xl text-gray-700">
          "The best way to predict the future is to create it." <br />
          <span class="font-semibold">Abraham Lincoln</span>
        </blockquote>
        <blockquote class="italic text-lg md:text-xl text-gray-700">
          "Life is either a daring adventure or nothing at all." <br />
          <span class="font-semibold">Helen Keller</span>
        </blockquote>
        <blockquote class="italic text-lg md:text-xl text-gray-700">
          "Travel is the only thing you buy that makes you richer." <br />
          <span class="font-semibold"> Unknown</span>
        </blockquote>
      </div>
    </section>

  </div>

  <!-- Call to Action Section -->
  <section class="bg-gray-200 py-16 px-4 md:px-8 text-center">
    <h2 class="text-3xl font-semibold mb-6">Plan Your Dream Stay</h2>
    <p class="text-lg md:text-xl max-w-3xl mx-auto mb-8">
      Your perfect getaway awaits. Book your stay with us and create memories that last a lifetime.
    </p>
    <a href="/booking" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors">
      Book Now
    </a>
  </section>
  @include('shared.footer');

</body>
</html>
