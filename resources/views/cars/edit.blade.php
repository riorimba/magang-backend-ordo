@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Car</h1>
    <form action="{{ route('cars.update', $car->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $car->name }}" required>
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $car->type }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="price" class="form-control" id="price" name="price" value="{{ $car->price }}" required>
        </div>

        <div class="form-group">
            <label for="year">Year</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $car->year }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Car</button>
    </form>
</div>
@endsection