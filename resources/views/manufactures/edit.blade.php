@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Manufacture</h1>
    <form action="{{ route('manufactures.update', $manufacture->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $manufacture->name }}" required>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $manufacture->address }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Manufacture</button>
    </form>
</div>
@endsection