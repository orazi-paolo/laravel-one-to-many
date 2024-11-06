@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>@yield('edit-or-create-project')</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="@yield('form-action')" method="POST">
        @csrf
        @yield('form-method')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project->name) }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"
                value="{{ old('description', $project->description) }}">
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control" id="url" name="url" value="{{ old('url', $project->url) }}">
        </div>
        <button type="submit" class="btn btn-primary">@yield('create-or-update')</button>
        <a href="@yield('redirect-page')" class="btn btn-secondary">Return</a>
    </form>
</div>
@endsection
