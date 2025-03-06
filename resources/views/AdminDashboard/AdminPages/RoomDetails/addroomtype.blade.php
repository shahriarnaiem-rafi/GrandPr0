@extends('AdminDashboard.main')

@section('content')

<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-2xl bg-white p-6 rounded-lg shadow-md text-center">
        <h2 class="text-xl font-bold mb-4">Add Room Type</h2>
        <form id="roomTypeForm" class="flex w-full space-x-2 mb-4 justify-center" action="{{ route('createroomtype') }}" method="post">
            @csrf
            <input type="text" id="roomTypeName" name="typeroom" placeholder="Enter Room Type"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <button type="submit"
                class="bg-blue-400 ml-3 text-white px-4 py-2 rounded-lg hover:bg-green-600">Add</button>
        </form>

        <div class="overflow-x-auto">
            <table class="w-full bg-white border rounded-lg shadow-md">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-2 px-4 border text-center">SL</th>
                        <th class="py-2 px-4 border text-center">Room Type</th>
                        <th class="py-2 px-4 border text-center">Action</th>
                    </tr>
                </thead>
                <tbody id="roomTypeList">
                    @foreach ($showroomType as $showroomt)
                    <tr >
                        <td class="py-2 px-4 border text-center">{{ $showroomt->id }}</td>
                        <td class="py-2 px-4 border text-center">{{ $showroomt->typeroom }}</td>
                        <td class="py-2 px-4 border text-center">
                            <form action="{{ route('deleteroomtype', $showroomt->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   
</body>

@endsection
