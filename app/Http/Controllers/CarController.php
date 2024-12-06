<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Feature;

class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }

    public function create(){
        return view('cars.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'price' => ['required', 'numeric'],
            'year' => ['required', 'numeric'],
            'manufacture_id' => ['required'],
            'features' => ['array']
        ]);

        $car = Car::create($request->all());
        $car->features()->sync($request->features);

        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::with('features')->findOrFail($id);
        return view('cars.show', ['car' => $car]);
    }

    public function edit($id){
        $car = Car::with('features')->findOrFail($id);
        $features = Feature::all();
        return view('cars.edit', ['car' => $car, 'features' => $features]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'price' => ['required', 'numeric'],
            'year' => ['required', 'numeric'],
            'manufacture_id' => ['required'],
            'features' => ['array']
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());
        $car->features()->sync($request->features);

        return redirect()->route('cars.index');
    }

    public function destroy($id){
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index');
    }

    public function addFeatures($id)
    {
        $car = Car::findOrFail($id);
        $features = Feature::all();
        return view('cars.add-features', ['car' => $car, 'features' => $features]);
    }

    public function storeFeatures(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->features()->sync($request->features);

        return redirect()->route('cars.show', $car->id);
    }
}
