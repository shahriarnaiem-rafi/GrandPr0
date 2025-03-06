
@extends('AdminDashboard.main')
@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-semibold mb-6 text-center text-gray-800">Update User</h2>

            <form action="{{ route('updateStaff') }}" method="post" class="space-y-5">
                @csrf
                <div>
                    <label for="id" class="block text-sm font-medium text-gray-700">Id:</label>
                    <input type="text" name="id" id="id"  readonly value="{{ $staffData->id  }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                    <input type="text" name="name" id="name" required value="{{ $staffData->name  }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                    <input type="email" name="email" id="email" required value="{{ $staffData->email  }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password:</label>
                    <input type="password" name="password" id="password" required value="{{ $staffData->password  }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone:</label>
                    <input type="tel" name="phone" id="phone" required value="{{ $staffData->phone  }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>
                <div>
                    <label for="picture" class="block text-sm font-medium text-gray-700">Picture:</label>
                    <input type="text" name="image" id="image" required value="{{ $staffData->image }}" placeholder="update your image link"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-400 focus:outline-none transition duration-200">
                </div>
              

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition font-medium">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection