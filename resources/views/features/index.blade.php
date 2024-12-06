@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Feature CRUD</h2>
        <a href="{{ route('features.create') }}" class="btn btn-success">Create New Feature</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($features as $feature)
            <tr>
                <td>{{ $feature->id }}</td>
                <td>{{ $feature->name }}</td>
                <td>

                    <a class="btn btn-info" href="{{ route('features.show', $feature->id) }}">Show</a>
                    <form action="{{ route('features.destroy', $feature->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('features.edit', $feature->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection