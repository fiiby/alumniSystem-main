<x-app-layout>
    <x-slot name="header">
        Delete Event
    </x-slot>

    <x-slot name="content">
        <h1>Delete Event</h1>

        <p>Are you sure you want to delete this event?</p>

        <form action="{{ route('events.destroy', $event->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">Delete</button>
        </form>
    </x-slot>
</x-app-layout>