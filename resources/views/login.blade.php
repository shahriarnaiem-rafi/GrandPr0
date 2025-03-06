<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div
        class="flex justify-center items-center min-h-screen bg-gradient-to-b from-black via-transparent to-black bg-cover">
        <a href="/"
            class="absolute top-4 left-4 flex items-center px-4 py-2 text-orange-500 font-semibold text-lg hover:text-white transition">
            <i class="fas fa-home mr-2"></i> Back to Home
        </a>
        <div class="bg-black bg-opacity-70 p-10 rounded-lg shadow-lg w-full max-w-md relative">
            <!-- Home Button -->

            <h2 class="text-3xl font-bold text-center text-orange-500 mb-6">Login</h2>

            <!-- Error Message -->
            <!-- Uncomment and add error message logic -->
            <!-- <div class="text-red-500 text-center mb-4">Error message goes here</div> -->

            <form>
                <!-- Role Selection -->
                <label for="role" class="block text-gray-400 mb-2">Role</label>
                <select id="role" required
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                    <option value="">Select Your Roll</option>
                    <option value="Admin">Admin</option>
                    <option value="Staff">Staff</option>
                    <option value="Customer">Customer</option>
                </select>

                <!-- Email -->
                <label for="email" class="block text-gray-400 mb-2">Email</label>
                <input type="email" id="email" placeholder="Enter your email"
                    class="w-full px-4 py-2 mb-4 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500"
                    required />

                <!-- Password -->
                <label for="password" class="block text-gray-400 mb-2">Password</label>
                <div class="flex items-center bg-gray-800 border border-gray-600 rounded-lg mb-4">
                    <i class="fas fa-lock text-gray-400 px-4"></i>
                    <input type="password" id="password" placeholder="Enter your password"
                        class="w-full px-4 py-2 bg-gray-800 text-white border-0 rounded-lg focus:ring-2 focus:ring-orange-500"
                        required />
                </div>

                <!-- Submit Button -->
                <button type="submit" id="login"
                    class="w-full py-3 bg-orange-500 text-white text-lg font-semibold rounded-lg hover:bg-orange-400 transition duration-300">
                    <a href="">Log in</a>
                </button>

                <!-- Registration Link -->
                <a href="/registration" class="block text-center mt-4 text-orange-500 text-sm hover:underline">
                    Don't have an account? Register here
                </a>
            </form>

            <div class="text-center mt-6 text-gray-400 text-sm">
                <p>&copy; 2025 FastTrack. All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('login').addEventListener('click', function (event) {
            event.preventDefault();
            const role = document.getElementById('role').value.toLowerCase();
            const email = document.getElementById('email').value.toLowerCase();
            const password = document.getElementById('password').value;
            if (role == 'admin' && email == 'admin@gmail.com' && password == 'admin') {
                window.location.href='/maindashboard';
            }
           else if (role == 'customer' && email == 'customer@gmail.com' && password == 'customer') {
                window.location.href='/customerdashboard';
            }
            else {
                alert('invalid user');
            }
        })


    </script>

</body>

</html>