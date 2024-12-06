@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Feature Detail</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name Feature</th>
            <td>{{ $feature->name }}</td>
        </tr>
    </table>
</div>
<div class="container mt-5">
    <h2>Cars with this Feature</h2>
    <ul class="list-group">
        @if($feature->cars->isEmpty())
            <p>No Car with this feature.</p>
        @endif
        @foreach($feature->cars as $car)
            <li class="list-group-item">{{ $car->name }}</li>
        @endforeach
    </ul>
</div>
@endsection