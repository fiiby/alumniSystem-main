<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Connection Details') }}
        </h2>
    </x-slot>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">Sender: {{ $connection->sender->name }}</h1>
                    <h1 class="text-2xl font-bold mb-4">Receiver: {{ $connection->receiver->name }}</h1>
                    <p class="text-gray-600">Status: {{ $connection->status }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>