@extends('AdminDashboard.main')

@section('content')

<body class="bg-gray-100">

    <!-- Page Header -->
    <div class="p-6 bg-blue-600 text-white text-2xl font-semibold">
        Hotel Room Management
    </div>

    <!-- Room List -->
    <div class="container mx-auto p-6">
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Room Number</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Room Type</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Price</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Room 1 -->
                    @foreach ($showroom as $showsingleroom)


                    <tr class="border-b">
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $showsingleroom->roomnumber }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $showsingleroom->typeroom }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900">{{ $showsingleroom->roomprice }}</td>

                        <td class="px-6 py-4 text-sm text-gray-900">Vacant</td>
                        <td class="px-6 py-4">
                            <!-- onclick="openEditModal('101', 'Single', 100, 'Vacant')" -->
                            <!-- <button
                                class=" text-green   rounded-md"><i class="fa-solid fa-pen-to-square"></i> </button> -->
                            <form action="{{ route('deleteroomdetails',$showsingleroom->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class=" text-red px-4 py-2 rounded-md"><i class="fa-solid fa-trash"></i></button>

                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <!-- Edit Room Modal -->
    <div id="editModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden justify-center items-center">
        <div class="bg-white rounded-lg p-6 w-1/3">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Edit Room Details</h3>
            <form id="editForm">
                <div class="mb-4">
                    <label for="roomNumber" class="block text-sm font-medium text-gray-700">Room Number</label>
                    <input type="text" id="roomNumber" name="roomNumber"
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md" readonly />
                </div>
                <div class="mb-4">
                    <label for="roomType" class="block text-sm font-medium text-gray-700">Room Type</label>
                    <input type="text" id="roomType" name="roomType"
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md" />
                </div>
                <div class="mb-4">
                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" id="price" name="price"
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md" />
                </div>
                <div class="mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status"
                        class="mt-1 block w-full px-4 py-2 bg-gray-100 border border-gray-300 rounded-md">
                        <option value="Vacant">Vacant</option>
                        <option value="Reserved">Reserved</option>
                        <option value="Maintenance">Maintenance</option>
                    </select>
                </div>
                <!-- onclick="closeModal()" -->
                <div class="flex justify-end">
                    <button type="button"
                        class="bg-red-500 text-white px-4 py-2 rounded-md mr-2">Cancel</button>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openEditModal(roomNumber, roomType, price, status) {
            // Populate form fields
            document.getElementById('roomNumber').value = roomNumber;
            document.getElementById('roomType').value = roomType;
            document.getElementById('price').value = price;
            document.getElementById('status').value = status;

            // Show the modal
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeModal() {
            // Close the modal
            document.getElementById('editModal').classList.add('hidden');
        }

        // Handle form submission (you can customize this to save the data)
        document.getElementById('editForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Room details updated!');
            closeModal();
        });
    </script>

</body>

</html>

@endsection