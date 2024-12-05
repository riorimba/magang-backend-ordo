@extends('layouts.app')

@section('content')
<h1>Create a New Car</h1>
    <form action="{{ route('cars.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>
        </div>
        <div>
            <label for="year">Year:</label>
            <input type="number" id="year" name="year" required>
        </div>
        <div>
            <button type="submit">Create Car</button>
        </div>
    </form>
@endsection