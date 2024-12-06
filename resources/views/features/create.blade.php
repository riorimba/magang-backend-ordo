@extends('layouts.app')

@section('content')
<h1>Create a New Feature</h1>
    <form action="{{ route('features.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <button type="submit">Create Car</button>
        </div>
    </form>
@endsection