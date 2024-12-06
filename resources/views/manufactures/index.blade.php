@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Manufactures CRUD</h2>
        <a href="{{ route('manufactures.create') }}" class="btn btn-success">Create New Manufacture</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($manufactures as $manufacture)
            <tr>
                <td>{{ $manufacture->id }}</td>
                <td>{{ $manufacture->name }}</td>
                <td>{{ $manufacture->address }}</td>
                <td>

                    <a class="btn btn-info" href="{{ route('manufactures.show', $manufacture->id) }}">Show</a>
                    <form action="{{ route('manufactures.destroy', $manufacture->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('manufactures.edit', $manufacture->id) }}">Edit</a>
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