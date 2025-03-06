@extends('AdminDashboard.main')
@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Create User</h2>

            <form action="" method="" class="space-y-5">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone:</label>
                    <input type="tel" name="phone" id="phone" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>
                <div>
                    <label class="block text-gray-400 mb-2">Gender</label>
                    <select name="gender" id="gender" required
                        class="w-full px-4 py-2 mb-2 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                        <option value="">Select Gender</option> <!-- Default empty option -->
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <!-- Country -->
                <div>
                    <label class="block text-gray-400 mb-2">Country</label>
                    <select name="country" id="country" required
                        class="w-full px-4 py-2 mb-2 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                        <option value="">Select Country</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="India">India</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                    </select>
                </div>

                <!-- Role -->
                <div>
                    <label class="block text-gray-400 mb-6">Role</label>
                    <select name="role" id="role" required
                        class="w-full px-4 py-2 mb-2 bg-gray-800 text-white border border-gray-600 rounded-lg focus:ring-2 focus:ring-orange-500">
                        <option value="">Select Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Staff">Staff</option>
                        <option value="Customer">Customer</option>
                    </select>
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition font-medium">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection