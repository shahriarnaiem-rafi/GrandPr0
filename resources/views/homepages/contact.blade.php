<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('shared.header')
    

    <!-- Contact Section -->
    <section class="py-16 px-4 md:px-8">
        <h2 class="text-3xl font-bold text-center mb-6">Contact Us</h2>
        <p class="text-lg md:text-xl text-center mb-8">
            Have questions? We would love to hear from you! Please reach out to us using the form below.
        </p>
        
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
            <form id="contactForm">
                <div class="mb-4">
                    <label for="name" class="block text-lg font-semibold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-lg font-semibold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-lg font-semibold mb-2">Message</label>
                    <textarea id="message" name="message" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-colors">
                        Send Message
                    </button>
                </div>
            </form>
            <p id="successMessage" class="hidden mt-6 text-center text-green-500 font-semibold">
                Thank you for your message! We will get back to you soon.
            </p>
        </div>
    </section>

    <!-- Additional Info Section -->
    <section class="bg-gray-200 py-16 px-4 md:px-8">
        <h2 class="text-3xl font-bold text-center mb-6">Visit Us</h2>
        <p class="text-lg md:text-xl text-center mb-8">
            Feel free to visit our beautiful hotel for a personal tour or to make a reservation.
        </p>
        <div class="text-center">
            <p class="text-xl mb-2">GrandPr0 Hotel</p>
            <p class="text-lg">123 Grand Ave, Luxury City</p>
            <p class="text-lg">Phone: +123 456 7890</p>
            <p class="text-lg">Email: contact@grandpr0hotel.com</p>
        </div>
    </section>
    @include('shared.footer')

    <!-- JavaScript for Form Submission -->
    <script>
        document.getElementById("contactForm").addEventListener("submit", function(event) {
            event.preventDefault();
            document.getElementById("successMessage").classList.remove("hidden");
        });
    </script>

</body>
</html>
