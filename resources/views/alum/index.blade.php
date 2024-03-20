<!-- resources/views/alum/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alum List') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-8">
        <div class="overflow-x-auto">
            <div class="min-w-screen flex items-center justify-center font-sans overflow-hidden">
                <div class="w-full lg:w-5/6">
                    <div class="bg-white shadow-md rounded my-6">
                        <table class="min-w-max w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ID</th>
                                    <th class="py-3 px-6 text-left">Name</th>
                                    <th class="py-3 px-6 text-left">Email</th>
                                    <th class="py-3 px-6 text-left">Graduation Year</th>
                                    <th class="py-3 px-6 text-left">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($alum as $alum)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left">{{ $alum->id }}</td>
                                    <td class="py-3 px-6 text-left">{{ $alum->name }}</td>
                                    <td class="py-3 px-6 text-left">{{ $alum->email }}</td>
                                    <td class="py-3 px-6 text-left">{{ $alum->graduation_year }}</td>
                                    <td class="py-3 px-6 text-left">
                                        <a href="{{ route('alum.show', $alum->id) }}" class="text-blue-600 hover:text-blue-800 mx-3">View</a>
                                        <a href="{{ route('alum.edit', $alum->id) }}" class="text-yellow-600 hover:text-yellow-800 mx-3">Edit</a>
                                        <form action="{{ route('alum.destroy', $alum->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800 mx-3" onclick="return confirm('Are you sure you want to delete this alum?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>