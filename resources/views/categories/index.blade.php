<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                        <table class="min-w-full bg-white border border-gray-300">
                            <thead>
                                <tr>
                                    <th class="py-2 px-4 border-b">ID</th>
                                    <th class="py-2 px-4 border-b">Name</th>
                                    <th class="py-2 px-4 border-b">Status</th>
                                    <th class="py-2 px-4 border-b">Created At</th>
                                    <th class="py-2 px-4 border-b">Updated At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td class="py-2 px-4 border-b">{{ $category->id }}</td>
                                        <td class="py-2 px-4 border-b">{{ $category->name }}</td>
                                        <td class="py-2 px-4 border-b">{{ $category->isActive ? 'Active' : 'Inactive' }}</td>
                                        <td class="py-2 px-4 border-b">{{ $category->created_at }}</td>
                                        <td class="py-2 px-4 border-b">{{ $category->updated_at }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="py-2 px-4 border-b" colspan="5">No categories found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>