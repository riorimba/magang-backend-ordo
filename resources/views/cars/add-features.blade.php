@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add Features to {{ $car->name }}</h1>
    <form action="{{ route('cars.store-features', $car->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="features">Features</label>
            <select multiple class="form-control" id="features" name="features[]">
                @foreach($features as $feature)
                    <option value="{{ $feature->id }}" {{ $car->features->contains($feature->id) ? 'selected' : '' }}>{{ $feature->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Features</button>
    </form>
    <a href="{{ route('cars.index') }}" class="btn btn-secondary mt-3">Back to Cars</a>
</div>
@endsection