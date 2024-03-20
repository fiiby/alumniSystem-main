<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- /*admin section only*/ -->
                    <!-- <a href="{{ route('events.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Event</a>
                    <br><br>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif -->
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Description</th>
                                <th class="px-4 py-2" width="150px">Date</th>
                                <th class="px-4 py-2">Location</th>
                                <th class="px-4 py-2" width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($events as $event)
                            <tr>
                                <td class="border px-4 py-2">{{ $event->name }}</td>
                                <td class="border px-4 py-2">{{ $event->description }}</td>
                                <td class="border px-4 py-2">{{ $event->date }}</td>
                                <td class="border px-4 py-2">{{ $event->location }}</td>
                                <td class="border px-4 py-2">
                                    <a onclick="confirmParticipation({{ $event->id }})" href="#" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Participate</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    function confirmParticipation(eventId) {
        if (confirm('Are you sure you want to participate?')) {
            // Perform any additional actions if needed
            alert('You have successfully participated in the event.');
        } else {
            // Handle the cancellation of participation
            // For example, you might want to display a message or do nothing
        }
    }
</script>