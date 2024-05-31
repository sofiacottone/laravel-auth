@extends('layouts.admin')

@section('content')
    <div>
        <div class="hstack justify-content-between">
            <h2>{{ $project->name }}</h2>
            <div>ID: {{ $project->id }}</div>
        </div>
        <div>Slug: {{ $project->slug }}</div>
        <div>Client: {{ $project->client_name }}</div>
        <div>Created: {{ $project->created_at }}</div>
        <div>Updated: {{ $project->updated_at }}</div>
        <div class="mt-5">{{ $project->summary }}</div>
    </div>
@endsection
