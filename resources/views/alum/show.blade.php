<!-- resources/views/alum/show.blade.php -->
{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
{{-- @extends('layouts.app') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alum Details') }}
        </h2>
    </x-slot>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="container px-4 py-2">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-blue-200">
                <div class="card ">
                    <div class="card-body">
                        <h3>{{ $alum->name }}</h3>
                        <br>
                        <br>  
                        <p><strong>Email:</strong> {{ $alum->email }}</p>
                        <br>
                        <br>
                        <p><strong>Graduation Year:</strong> {{ $alum->graduation_year }}</p>
                        <br>
                        <br>

                        <a href="{{ route('alum.edit', $alum->id) }}" class="btn btn-primary text-white font-bold py-2 px-4 rounded bg-blue-500">Edit</a>
                        <form action="{{ route('alum.destroy', $alum->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this alum?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>