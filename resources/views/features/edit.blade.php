@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Feature</h1>
    <form action="{{ route('features.update', $feature->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $feature->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Car</button>
    </form>
</div>
@endsection