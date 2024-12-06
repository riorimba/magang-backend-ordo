<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Car;

class ReviewController extends Controller
{
    public function index(){
        $reviews = Review::with('car')->get();
        return view('reviews.index', ['reviews' => $reviews]);
    }

    public function create(){
        $cars = Car::all();
        return view('reviews.create', ['cars' => $cars]);
    }

    public function store(Request $request){
        $request->validate([
            'rating' => ['required', 'numeric', 'between:0,10'],
            'name' => ['required'],
            'comment' => ['required'],
            'car_id' => ['required', 'numeric']
        ]);

        Review::create($request->all());

        return redirect()->route('reviews.index');
    }

    public function show($id)
    {
        $review = Review::with('car')->findOrFail($id);
        return view('reviews.show', ['review' => $review]);
    }

    public function edit($id){
        $review = Review::findOrFail($id);
        $cars = Car::all();
        return view('reviews.edit', ['review' => $review, 'cars' => $cars]);
    }

    public function update($id, Request $request){
        $request->validate([
            'rating' => ['required', 'numeric', 'between:0,10'],
            'name' => ['required'],
            'comment' => ['required'],
            'car_id' => ['required', 'numeric']
        ]);

        $review = Review::findOrFail($id);
        $review->update($request->all());

        return redirect()->route('reviews.index');
    }

    public function destroy($id){
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('reviews.index');
    }
}
