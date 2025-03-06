@extends('CustomerDashboard.main')

@section('content')

    <section>
        <div class="container mx-auto p-4">
            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse table-auto bg-white rounded-lg shadow-md">
                    <thead class="bg-blue-500 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left">SL</th>
                            <th class="px-6 py-3 text-left">User Name</th>
                            <th class="px-6 py-3 text-left">Phone</th>
                            <th class="px-6 py-3 text-left">Room Type</th>
                            <th class="px-6 py-3 text-left">Room Number</th>
                            <th class="px-6 py-3 text-left">Booking Date</th>
                            <th class="px-6 py-3 text-left">Check-in Date</th>
                            <th class="px-6 py-3 text-left">Checkout Date</th>
                            <th class="px-6 py-3 text-left">Payment</th>
                            <th class="px-6 py-3 text-left">Total Amount</th>
                            <th class="px-6 py-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @foreach ($bookings as $booking)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4">{{ $booking->id }}</td>
                                <td class="px-6 py-4">{{ $booking->customername }}</td>
                                <td class="px-6 py-4">{{ $booking->phone }}</td>
                                <td class="px-6 py-4">{{ $booking->typeroom }}</td>
                                <td class="px-6 py-4">{{ $booking->roomnumber }}</td>
                                <td class="px-6 py-4">{{ $booking->created_at->format('Y-m-d') }}</td>
                                <td class="px-6 py-4">{{ $booking->check_in_date ?? 'N/A' }}</td>
                                <td class="px-6 py-4">{{ $booking->check_out_date ?? 'N/A' }}</td>
                                <td class="px-6 py-4">{{ $booking->paymentmethod }}</td>
                                <td class="px-6 py-4">${{ $booking->roomprice }}</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <!-- Edit Button -->
                                    <button
                                        class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">
                                        Edit
                                    </button>
                                    <!-- Delete Button -->
                                    <form action="{{ route('removebookings', $booking->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($bookings->isEmpty())
                    <tr>
                        <td colspan="11" class="text-center py-4">No bookings available.</td>
                    </tr>
                @endif
            </div>
        </div>


    </section>

@endsection