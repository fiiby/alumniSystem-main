<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-2xl font-bold mb-4">{{ $event->name }}</h1>
                    <p class="text-lg mb-4">{{ $event->description }}</p>
                    <p><strong>Date:</strong> {{ $event->date }}</p>
                    <p><strong>Location:</strong> {{ $event->location }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>