<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Media Gallery') }}
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

                    <!-- Media Gallery edit form -->
                    <form method="POST" action="{{ route('media-galleries.update', $mediaGallery->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Display existing image -->
                        <img src="{{ asset('assets/images/resources/destinations/gallery/' . $mediaGallery->image_path) }}" alt="Uploaded Image" class="w-full h-40 object-cover mb-4">

                        <!-- Form inputs for editing -->
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-semibold mb-2">Select New Image (Optional):</label>
                            <input type="file" name="image" class="w-full border p-2">
                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="bg-blue border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-white">Update Image</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
