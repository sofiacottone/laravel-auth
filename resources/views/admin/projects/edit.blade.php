@extends('layouts.admin')

@section('content')
    <h2 class="mb-3">Edit: {{ $project->name }}</h2>

    <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Project name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
            @error('name')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="client-name" class="form-label">Client name</label>
            <input type="text" class="form-control" id="client-name" name="client_name"
                value="{{ old('client_name', $project->client_name) }}">
            @error('client_name')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control" id="summary" rows="10" name="summary">{{ old('summary', $project->summary) }}</textarea>
            @error('summary')
                <div class="text-danger ps-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection