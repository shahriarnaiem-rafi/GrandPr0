@extends('AdminDashboard.main')

@section('content')
<section class="mt-2 py-20">
    <h2 class="text-2xl text-center font-semibold">Room Status List</h2>
    <div class="overflow-x-auto mt-6">
        <table class="w-full max-w-4xl mx-auto border border-gray-300 bg-white rounded-lg shadow-lg">
            <thead>
                <tr class="bg-gray-800 text-white text-center text-sm md:text-base font-semibold">
                    <th class="px-6 py-3">SL</th>
                    <th class="px-6 py-3">Room Type</th>
                    <th class="px-6 py-3">Room Number</th>
                    <th class="px-6 py-3">Checkout Date</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody class="text-center text-gray-700 text-sm md:text-base">
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-6 py-4">1</td>
                    <td class="px-6 py-4">Double</td>
                    <td class="px-6 py-4">103</td>
                    <td class="px-6 py-4">None</td>
                    <td class="px-6 py-4"><span class="text-green-500 font-semibold">Available</span></td>
                </tr>
                <tr class="border-b hover:bg-gray-100">
                    <td class="px-6 py-4">2</td>
                    <td class="px-6 py-4">Cozy Corner</td>
                    <td class="px-6 py-4">600</td>
                    <td class="px-6 py-4">None</td>
                    <td class="px-6 py-4"><span class="text-green-500 font-semibold">Available</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection