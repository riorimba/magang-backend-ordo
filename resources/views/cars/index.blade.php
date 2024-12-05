@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Car CRUD</h2>
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

                    <a class="btn btn-info" href="{{ route('cars.show', $car->id) }}">Show</a>
                    <form action="{{ route('cars.destroy', $car->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('cars.edit', $car->id) }}">Edit</a>
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