<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Job') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('jobs.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title</label>
                            <input type="text" name="title" id="title" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                            <textarea name="description" id="description" class="form-textarea rounded-md shadow-sm mt-1 block w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="requirements" class="block text-gray-700 text-sm font-bold mb-2">Requirements</label>
                            <textarea name="requirements" id="requirements" class="form-textarea rounded-md shadow-sm mt-1 block w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="application_deadline" class="block text-gray-700 text-sm font-bold mb-2">Application Deadline</label>
                            <input type="datetime-local" name="application_deadline" id="application_deadline" class="form-input rounded-md shadow-sm mt-1 block w-full" />
                        </div>
                        <div>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>