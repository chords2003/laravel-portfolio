@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
    <h1>My Projects</h1>
    <div class="grid grid-cols-3 gap-4">
        @foreach($projects as $project)
            <div class="border p-4 rounded">
                <h2>{{ $project->title }}</h2>
                <p>{{ $project->description }}</p>
                @if($project->image)
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
                @endif
                @if($project->link)
                    <a href="{{ $project->link }}" target="_blank">View Project</a>
                @endif
            </div>
        @endforeach
    </div>
@endsection
