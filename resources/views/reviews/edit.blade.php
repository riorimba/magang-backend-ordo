@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Review</h1>
    <form action="{{ route('reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="car_id">Car</label>
            <select class="form-control" id="car_id" name="car_id" required>
                @foreach($cars as $car)
                    <option value="{{ $car->id }}">{{ $car->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="rating">Rating</label>
            <input type="text" class="form-control" id="rating" name="rating" value="{{ $review->rating }}" required>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $review->name }}" required>
        </div>

        <div class="form-group">
            <label for="comment">Comment</label>
            <textarea class="form-control" id="comment" name="comment" required>{{ $review->comment }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Review</button>
    </form>
</div>
@endsection