<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Trips') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <!-- Display success message -->
                    @if(session('success'))
                    <div class="bg-green-200 border-green-400 text-green-700 px-4 py-2 rounded-md mb-4">
                        {{ session('success') }}
                    </div>
                    @endif

                    <!-- Display validation errors -->
                    @if ($errors->any())
                    <div class="bg-red-200 border-red-400 text-red-700 px-4 py-2 rounded-md mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif



                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Trip Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Duration
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($trips as $trip)

                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$trip->trip_title}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$trip->trip_duration}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$trip->category->name;}}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{$trip->trip_price}}
                                    </td>
                                    <td class="px-6 py-4">

                                        <div class="flex items-center">
                                            <a href="{{ route('media-galleries.create', ['trip_id' => $trip->id]) }}" class="text-green-600 hover:text-green-900 px-2">
                                                Upload Gallery
                                            </a>
                                            <a href="{{ route('trips.edit', $trip->id) }}" class="text-indigo-600 hover:text-indigo-900 px-2">
                                                Edit
                                            </a>
                                            <button type="button" class="text-red-600 hover:text-red-900 px-2" onclick="openConfirmationModal({{ $trip->id }})">
                                                Delete
                                            </button>
                                        </div>

                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>



                   <!-- Confirmation Modal -->
<div id="confirmationModal" class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md">
        <p>Are you sure you want to delete this trip?</p>
        <div class="mt-4 flex justify-end">
            <button onclick="deleteTrip({{ $trip->id }})" class="text-red-600 hover:text-red-900 px-4 py-2">Confirm Delete</button>
            <button onclick="closeConfirmationModal()" class="ml-4 px-4 py-2">Cancel</button>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script>
    <script>
    function openConfirmationModal(tripId) {
    document.getElementById('confirmationModal').classList.remove('hidden');
    // Store the trip ID in a hidden field or variable to reference it on deletion
    window.selectedTripId = tripId;
}

// Close the confirmation modal
function closeConfirmationModal() {
    document.getElementById('confirmationModal').classList.add('hidden');
}
// Soft delete the trip
function deleteTrip(tripId) {
    console.log('hello');
    fetch(`/trips/${tripId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
        },
    })
    .then(response => {
        if (response.status === 204) {
            // Handle successful deletion
            closeConfirmationModal();
            window.location.reload(); // Reload the page
        } else {
            // Handle failed deletion
            // Display an error message or take appropriate action
            console.error('Failed to delete trip');
        }
    })
    .catch(error => {
        // Handle network errors or other issues
        console.error('Error deleting trip:', error);
    });
}

    </script>

    @endpush
</x-app-layout>



