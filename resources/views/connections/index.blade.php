<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Connections') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('connections.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Connection</a>
                    <br><br>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    <table class="table-auto">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Sender</th>
                                <th class="px-4 py-2">Receiver</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2" width="280px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($connections as $connection)
                            <tr>
                                <td class="border px-4 py-2">{{ $connection->sender->name }}</td>
                                <td class="border px-4 py-2">{{ $connection->receiver->name }}</td>
                                <td class="border px-4 py-2">{{ $connection->status }}</td>
                                <td class="border px-4 py-2" width="100px"> 
                                     <!-- /fix size or padding to middle --> 
                                    <!-- still other a-tag not appear in page -->
                                    <a href="{{ route('connections.show', $connection->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Show</a>

                                    <a href="{{ route('connections.edit', $connection->id) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded">Edit</a>

                                    <form action="{{ route('connections.destroy', $connection->id) }}" method="POST">
                                        @csrf
                                        <!-- @method('DELETE') -->
                                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        <!-- still other a-tag not appear in page + change delete method to show more or what else we should add iin this connections/what end result for conn? -->
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
</x-app-layout>