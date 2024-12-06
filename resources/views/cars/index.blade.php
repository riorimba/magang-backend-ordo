@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Cars CRUD</h2>
        <a href="{{ route('cars.create') }}" class="btn btn-success">Create New Car</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Year</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($cars as $car)
            <tr>
                <td>{{ $car->id }}</td>
                <td>{{ $car->name }}</td>
                <td>{{ $car->type }}</td>
                <td>{{ $car->price }}</td>
                <td>{{ $car->year }}</td>
                <td>

                <a href="{{ route('cars.show', $car->id) }}" class="btn btn-info">Show</a>
                <a href="{{ route('cars.edit', $car->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('cars.add-features', $car->id) }}" class="btn btn-primary">Add Features</a>
                <form action="{{ route('cars.destroy', $car->id) }}" method="POST" style="display:inline;">
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