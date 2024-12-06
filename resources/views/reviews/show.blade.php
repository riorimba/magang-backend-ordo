@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Review Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $review->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $review->rating }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $review->name }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $review->comment }}</td>
            </tr>
            <tr>
                <th>Car Name</th>
                <td>{{ $review->car->name }}</td>
            </tr>
        </table>
        <a href="{{ route('manufactures.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
