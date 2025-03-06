@extends('AdminDashboard.main')

@section('content')

<body class="bg-gray-100 p-6">

    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <header class="flex items-center justify-between pb-4 border-b">
            <div class="ml-70">
                <img src="https://i.ibb.co.com/W447n6pj/elegant-luxury-hotel-logo-23-2147534418.jpg" alt="Logo" class="h-14 ">
            </div>
            <h1 class="text-xl font-bold text-center">Add Room</h1>

        </header>

        <form class="mt-4 grid grid-cols-2 gap-4" action="{{ route('createroom') }}" method="post">
            @csrf
            <!-- First Grid -->
            <div>
                <label class="block font-medium">Select Room Type</label>

                <select class="w-full border p-2 rounded" name="typeroom">
                    <option value="">Select Room Type</option>
                    @foreach ($showroomTypedata as $showroomt)
                    <option value="{{ $showroomt->typeroom }}">{{ $showroomt->typeroom }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium">Room Price</label>
                <input type="number" class="w-full border p-2 rounded" placeholder="Enter price" name="roomprice">
            </div>

            <div>
                <label class="block font-medium">Room Size</label>
                <input type="text" class="w-full border p-2 rounded" placeholder="Enter size" name="roomsize">
            </div>

            <div>
                <label class="block font-medium">View</label>
                <input type="text" class="w-full border p-2 rounded" placeholder="Enter view type" name="roomview">
            </div>

            <!-- Second Grid -->
            <div>
                <label class="block font-medium">Room Number</label>
                <input type="text" class="w-full border p-2 rounded" placeholder="Enter room number" name="roomnumber">
            </div>

            <div>
                <label class="block font-medium">Select Bed Type</label>
                <select class="w-full border p-2 rounded" name="bedtypes">
                    <option value="">Select Room Type</option>
                    @foreach ($showbed as $bedtype)
                    <option value="{{ $bedtype->bedtypes }}">{{ $bedtype->bedtypes }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="block font-medium">Floor Number</label>
                <input type="text" class="w-full border p-2 rounded" placeholder="Enter floor number" name="floornumber">
            </div>

            <div>
                <label class="block font-medium">Room Capacity</label>
                <input type="number" class="w-full border p-2 rounded" placeholder="Enter capacity" name="roomcapacity">
            </div>

            <!-- Below Description and Upload -->
            <div class="col-span-2">
                <label class="block font-medium">Description</label>
                <textarea class="w-full border p-2 rounded" placeholder="Enter description" name="description"></textarea>
            </div>

            <div class="col-span-2">
                <label class="block font-medium">Room Photo</label>
                <input type="text" class="w-full border p-2 rounded" placeholder="input image link" name="roomphoto">
            </div>

            <div class="col-span-2">
                <button type="submit" class="w-full bg-blue-600 hover:bg-green-600 text-white py-2 rounded ">Add Room</button>
            </div>
        </form>
    </div>
</body>

</html>
@endsection