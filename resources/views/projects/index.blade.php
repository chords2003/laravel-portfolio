@extends('layouts.app')

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
@section('scripts')
    <script>
        // Add any JavaScript needed for the projects page here
    </script>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/projects.css') }}">
    <style>
        /* Add any custom styles for the projects page here */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
        }
        .border {
            border: 1px solid #ccc;
            padding: 1rem;
            border-radius: 0.5rem;
        }
        .rounded {
            border-radius: 0.5rem;
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 0.5rem;
        }
        a {
            display: inline-block;
            margin-top: 0.5rem;
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 0.5rem;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
@endsection
@section('title', 'My Projects')
@section('description', 'A showcase of my projects, including descriptions and links to view them.')
@section('keywords', 'projects, portfolio, web development, showcase')
@section('author', 'Your Name')
@section('og:title', 'My Projects')
@section('og:description', 'A showcase of my projects, including descriptions and links to view them.')
@section('og:image', asset('storage/' . $projects->first()->image))
@section('og:url', url()->current())
@section('twitter:title', 'My Projects')
@section('twitter:description', 'A showcase of my projects, including descriptions and links to view them.')
@section('twitter:image', asset('storage/' . $projects->first()->image))
@section('twitter:card', 'summary_large_image')
@section('twitter:site', '@your_twitter_handle')
@section('twitter:creator', '@your_twitter_handle')
@section('canonical', url()->current())
@section('prev')
    <a href="{{ route('home') }}" class="text-blue-500 hover:underline">Home</a>
@endsection
@section('next')
    <a href="{{ route('projects.create') }}" class="text-blue-500 hover:underline">Create New Project</a>
@endsection
