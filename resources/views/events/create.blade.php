<x-app-layout>
    <x-slot name="header">
        Create Event
    </x-slot>

    <x-slot name="content">
        <h1>Create New Event</h1>

        @if ($errors->any())
        <div>
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('events.store') }}" method="POST">
            @csrf

            <div>
                <label for="name">Event Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>

            <div>
                <label for="description">Event Description:</label>
                <textarea id="description" name="description">{{ old('description') }}</textarea>
            </div>

            <div>
                <label for="date">Event Date:</label>
                <input type="date" id="date" name="date" value="{{ old('date') }}">
            </div>

            <div>
                <label for="location">Event Location:</label>
                <input type="text" id="location" name="location" value="{{ old('location') }}">
            </div>

            <button type="submit">Create Event</button>
        </form>
    </x-slot>
</x-app-layout>
