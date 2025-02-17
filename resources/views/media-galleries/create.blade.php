<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Upload Media Gallery') }}
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
                    <!-- Display the trip title -->
                    <h3 class="text-xl font-semibold">{{ $trip->trip_title }}</h3>

                    <!-- Media Gallery upload form -->
                    <!-- media-galleries.create.blade.php -->
                <form method="POST" action="{{ route('media-galleries.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="trip_id" value="{{ $trip->id }}">
                    <div class="mb-4">
                        <label for="image" class="block text-sm font-semibold mb-2">Select Images:</label>
                        <input type="file" name="image" class="w-full border p-2" required>
                    </div>

                    <button type="submit" class="bg-blue border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white">Upload Images</button>
                </form>


                <!-- Display uploaded images -->
                
                <div class="mt-8">
                    <h3 class="text-lg font-semibold">Uploaded Images</h3>
                    <div class="grid grid-cols-3 gap-4 mt-4">
                        @foreach($trip->mediaGalleries as $image)
                            <div class="relative flex flex-col items-center">
                                <img src="{{ asset('assets/images/resources/destinations/gallery/' . $image->image_path) }}" alt="Uploaded Image" class="w-full h-40 object-cover mb-2">
                                <div class="flex space-x-4">
                                    <a href="{{ route('media-galleries.edit', $image->id) }}" class="text-blue-500">Edit</a>
                                    <form action="{{ route('media-galleries.destroy', $image->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 bg-white bg-opacity-50 px-2 py-1 rounded">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
