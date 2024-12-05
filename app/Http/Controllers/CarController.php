<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index(){
        $cars = DB::table('cars')->get();
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

        DB::table('cars')->insert([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'year' => $request->year
        ]);

        return redirect('cars');
    }

    public function show($id)
    {
        $car = DB::table('cars')->where('id', $id)->first();
        return view('cars.show', ['car' => $car]);
    }

    public function edit($id){
        $car = DB::table('cars')->where('id', $id)->first();
        return view('cars.edit', ['car' => $car]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'type' => ['required'],
            'price' => ['required', 'numeric'],
            'year' => ['required', 'numeric']
        ]);

        DB::table('cars')->where('id', $id)->update([
            'name' => $request->name,
            'type' => $request->type,
            'price' => $request->price,
            'year' => $request->year
        ]);

        return redirect('cars');
    }

    public function destroy($id){
        DB::table('cars')->where('id', $id)->delete();
        return redirect('cars');
    }
}
