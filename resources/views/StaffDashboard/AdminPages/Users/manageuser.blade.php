@extends('AdminDashboard.main')
@section('content')
<div class="container mx-auto">
        <h2 class="text-2xl font-bold text-gray-700 text-center mb-6">User Data Table</h2>
        

        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="min-w-full border border-gray-200">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Email</th>
                        <th class="py-3 px-6 text-left">subtype</th>
                        <th class="py-3 px-6 text-left">Create_at</th>
                        <th class="py-3 px-6 text-left">Updated_at</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
              <tbody>

              </tbody>
            </table>
            
        </div>
    </div>

@endsection
