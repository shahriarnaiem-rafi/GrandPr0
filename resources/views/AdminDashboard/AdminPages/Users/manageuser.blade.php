@extends('AdminDashboard.main')
@section('content')
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">User Data Table</h2>


        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Img</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>

                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($staffDatas as $staffData)
                        <tr>
                            <td class="py-3 px-6 text-left">{{ $staffData->id }}</td>
                            <td class="py-3 px-6 text-left">
                                <div class="image">
                                    <img src="{{ $staffData->image }}" class="img-circle elevation-2"
                                        alt="Staff Image" style="width: 50px; height: 50px; object-fit: cover;">
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left">{{ $staffData->name }}</td>
                            <td class="py-3 px-6 text-left">{{ $staffData->email }}</td>


                            <td class="py-3 px-6 text-left">
                                <a href="{{route('update', $staffData->id)}}">Edit</a>
                                <form action="{{ route('delete', $staffData->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <Button type="submit">Delete</Button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
    </div>

@endsection