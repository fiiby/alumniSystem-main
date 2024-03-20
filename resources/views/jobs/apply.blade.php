<!-- resources/views/apply.blade.php -->
pbl to fix:
where data from store application go to?

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Apply for Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- <form action="{{ route('jobs.storeApplication', $job->id) }}" method="POST" enctype="multipart/form-data">   which one is correct store or apply action?-->
                        <form action="{{ route('jobs.apply', $job->id) }}" method="POST" enctype="multipart/form-data">
                            <!-- enctype="multipart/form-data" mean? -->

                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                                <input type="text" name="name" id="name" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                                <input type="email" name="email" id="email" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="mb-4">
                                <label for="resume" class="block text-gray-700 text-sm font-bold mb-2">Resume:</label>
                                <input type="file" name="resume" id="resume" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit Application</button>
                                <!-- /*btn not displaying in the browser??*/ -->
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>