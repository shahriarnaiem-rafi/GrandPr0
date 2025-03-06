<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div
        class="flex justify-center items-center min-h-screen bg-gradient-to-b from-black via-transparent to-black bg-cover">
        <div class="bg-black bg-opacity-70 p-10 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-3xl font-bold text-center text-orange-500 mb-6">
                Register
            </h2>

            <!-- Error Message -->
            <div id="errorMessage" class="text-red-500 text-center mb-4"></div>

            <form id="registrationForm" action="{{ route('registrationSave') }}" method="post">
                @csrf
                <!-- Name -->
                <label class="block text-gray-400 mb-2">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name"
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500"
                    required />

                <!-- Email -->
                <label class="block text-gray-400 mb-2">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500"
                    required />

                <!-- Password -->
                <label class="block text-gray-400 mb-2">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500"
                    required />

                <!-- Phone -->
                <label class="block text-gray-400 mb-2">Phone Number</label>
                <input type="tel" name="phone" id="phone" placeholder="Enter your phone number"
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500"
                    required />

                <label class="block text-gray-400 mb-2">Gender</label>
                <select name="gender" id="gender" required
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                    <option value="">Select Gender</option> <!-- Default empty option -->
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>

                <!-- Country -->
                <label class="block text-gray-400 mb-2">Country</label>
                <select name="country" id="country" required
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                    <option value="">Select Country</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="India">India</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                </select>

                <!-- Role -->
                <label class="block text-gray-400 mb-2">Role</label>
                <select name="role" id="role" required
                    class="w-full px-4 py-2 mb-6 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                    <option value="">Select Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Staff">Staff</option>
                    <option value="Customer">Customer</option>
                </select>
                <!-- Submit Button -->

                <input type="submit" value="submit"
                    class="w-full py-3 bg-orange-500 text-white text-lg font-semibold rounded-lg hover:bg-orange-400 transition duration-300"
                    name="submit">


                <!-- Login Link -->
                <a href="/login" class="block text-center mt-4 text-orange-500 text-sm hover:underline">
                    Already have an account? Login here
                </a>
            </form>

            <div class="text-center mt-6 text-gray-400 text-sm">
                <p>&copy; 2025 GrandPr0. All Rights Reserved.</p>
            </div>
        </div>
    </div>

    <script>
        const registrationForm = document.getElementById('registrationForm');
        const errorMessageElement = document.getElementById('errorMessage');

        registrationForm.addEventListener('submit', function (event) {


            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const phone = document.getElementById('phone').value;

            // Validation logic
            if (!name || !email || !password || !phone) {
                errorMessageElement.textContent = 'Please fill in all fields.';
                return;
            }

            // Email Validation
            const emailRegex = /\S+@\S+\.\S+/;
            if (!emailRegex.test(email)) {
                errorMessageElement.textContent = 'Enter a valid email address.';
                return;
            }

            // Password Validation
            const passwordRegex = /^(?=.*\d).{6,}$/;
            if (!passwordRegex.test(password)) {
                errorMessageElement.textContent = 'Password must be at least 6 characters with a number.';
                return;
            }

            // Phone Validation
            const phoneRegex = /^\d{10,}$/;
            if (!phoneRegex.test(phone)) {
                errorMessageElement.textContent = 'Enter a valid phone number (at least 10 digits).';
                return;
            }

            // If validation passes
            errorMessageElement.textContent = '';
            console.log({
                name,
                email,
                password,
                phone,
            });

            // You can send this data to a server or handle further logic here.
        });
    </script>
</body>

</html>