@extends('layouts.admin')

@section('content')
    <h1>Deleted projects</h1>

    @if (count($projects) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Client name</th>
                    <th>Created</th>
                    <th>Deleted</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->client_name }}</td>
                        <td>{{ $project->created_at }}</td>
                        <td>{{ $project->deleted_at }}</td>

                        {{-- actions  --}}
                        <td>
                            <div class="hstack justify-content-center gap-2 text-center">

                                <a href="{{ route('admin.projects.restore', ['project' => $project->id]) }}"
                                    class="btn btn-outline-secondary">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                </a>

                                <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" data-project-title="{{ $project->name }}"
                                        class="js-delete-btn btn btn-outline-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div>No deleted projects.</div>
    @endif
@endsection
