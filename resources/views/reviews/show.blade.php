@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Manufacture Details</h1>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td>{{ $manufacture->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $manufacture->name }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $manufacture->address }}</td>
            </tr>
        </table>
        <a href="{{ route('manufactures.index') }}" class="btn btn-primary">Back to List</a>
    </div>
@endsection
