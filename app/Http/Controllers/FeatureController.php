<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use App\Models\Car;

class FeatureController extends Controller
{
    public function index(){
        $features = Feature::all();
        return view('features.index', ['features' => $features]);
    }

    public function create(){
        return view('features.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
        ]);

        Feature::create($request->all());

        return redirect()->route('features.index');
    }

    public function show($id)
    {
        $feature = Feature::with('cars')->findOrFail($id);
        return view('features.show', ['feature' => $feature]);
    }

    public function edit($id){
        $feature = Feature::findOrFail($id);
        return view('features.edit', ['feature' => $feature]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
        ]);

        $feature = Feature::findOrFail($id);
        $feature->update($request->all());

        return redirect()->route('features.index');
    }

    public function destroy($id){
        $feature = Feature::findOrFail($id);
        $feature->delete();

        return redirect()->route('features.index');
    }
}
