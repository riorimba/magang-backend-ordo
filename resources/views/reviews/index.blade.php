@extends('layouts.app')

@section('content')
<div class="container">
        <h2>Review CRUD</h2>
        <a href="{{ route('reviews.create') }}" class="btn btn-success">Create New Review</a>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Rating</th>
                <th>Name</th>
                <th>Comment</th>
                <th>Car Name</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($reviews as $review)
            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->rating }}</td>
                <td>{{ $review->name}}</td>
                <td>{{ $review->comment}}</td>
                <td>{{ $review->car->name }}</td>
                <td>

                    <a class="btn btn-info" href="{{ route('reviews.show', $review->id) }}">Show</a>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('reviews.edit', $review->id) }}">Edit</a>
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