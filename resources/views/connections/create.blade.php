<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Connection') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('connections.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="sender_id" class="block text-gray-700 text-sm font-bold mb-2">Sender:</label>
                            <input type="text" name="sender_id" id="sender_id" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="receiver_id" class="block text-gray-700 text-sm font-bold mb-2">Receiver:</label>
                            <input type="text" name="receiver_id" id="receiver_id" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                            <input type="text" name="status" id="status" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Connection</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>