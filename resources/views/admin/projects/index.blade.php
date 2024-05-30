@extends('layouts.admin')

@section('content')
    <h1>Projects</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Client name</th>
                <th>Summary</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{ $project->client_name }}</td>
                    <td>{{ $project->summary }}</td>

                    {{-- actions  --}}
                    <td>
                        <div class="text-center">
                            <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}"
                                class="btn btn-outline-secondary">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
