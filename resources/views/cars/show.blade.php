@extends('layouts.app')

@section('content')

<div class="container">
        <h1>Car Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $car->id }}</td>
            </tr>
            <tr>
                <th>Make</th>
                <td>{{ $car->name }}</td>
            </tr>
            <tr>
                <th>Model</th>
                <td>{{ $car->type }}</td>
            </tr>
            <tr>
                <th>Price</th>
                <td>{{ $car->price }}</td>
            </tr>
            <tr>
                <th>Year</th>
                <td>{{ $car->year }}</td>
            </tr>
            <tr>
                <th>Manufacture id</th>
                <td>{{ $car->manufacture_id }}</td>
            </tr>
        </table>

        <h2>Features</h2>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    @if($car->features->isEmpty())
                        <p>No features for this car.</p>
                    @endif
                    @foreach($car->features as $feature)
                        <td>{{ $feature->name }}</td>
                    @endforeach
                </tr>
            </thead>
        </table>
        
        
        <a href="{{ route('cars.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
