<!-- resources/views/alum/show.blade.php -->

@extends('layouts.app')

@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alum Details') }}
        </h2>
    </x-slot>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $alum->name }}</h3>
                        <p><strong>Email:</strong> {{ $alum->email }}</p>
                        <p><strong>Graduation Year:</strong> {{ $alum->graduation_year }}</p>
                        <a href="{{ route('alum.edit', $alum->id) }}" class="btn btn-primary">Edit</a>
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
@endsection