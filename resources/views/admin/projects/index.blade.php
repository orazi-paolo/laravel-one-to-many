@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Admin Projects</h1>
    <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-4">Add New Project</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->id }}</td>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->url }}</td>
                <td>
                    <a href="{{ route('admin.projects.show', $project->id )}}" class="btn btn-primary btn-sm">Show</a>
                    <a href="{{ route('admin.projects.edit', $project->id )}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm delete-button"
                            data-project-name="{{ $project->name }}">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('additional-script')
<script>
    @vite('resources/js/delete-project.js')
</script>
@endsection
