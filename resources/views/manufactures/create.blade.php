@extends('layouts.app')

@section('content')
<h1>Create a New Manufacure</h1>
    <form action="{{ route('manufactures.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <button type="submit">Create Manufacture</button>
        </div>
    </form>
@endsection