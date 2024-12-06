<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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
            'year' => ['required', 'numeric']
        ]);

        Car::create($request->all());

        return redirect()->route('cars.index');
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', ['car' => $car]);
    }

    public function edit($id){
        $car = Car::findOrFail($id);
        return view('cars.edit', ['car' => $car]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'price' => ['required', 'numeric'],
            'year' => ['required', 'numeric']
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());

        return redirect()->route('cars.index');
    }

    public function destroy($id){
        $car = Car::findOrFail($id);
        $car->delete();

        return redirect()->route('cars.index');
    }
}
