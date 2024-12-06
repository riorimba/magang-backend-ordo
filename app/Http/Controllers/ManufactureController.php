<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufacture;

class ManufactureController extends Controller
{
    public function index(){
        $manufactures = Manufacture::all();
        return view('manufactures.index', ['manufactures' => $manufactures]);
    }

    public function create(){
        return view('manufactures.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'address' => ['required']
        ]);

        Manufacture::create($request->all());

        return redirect()->route('manufactures.index');
    }

    public function show($id)
    {
        $manufacture = Manufacture::findOrFail($id);
        return view('manufactures.show', ['manufacture' => $manufacture]);
    }

    public function edit($id){
        $manufacture = Manufacture::findOrFail($id);
        return view('manufactures.edit', ['manufacture' => $manufacture]);
    }

    public function update($id, Request $request){
        $request->validate([
            'name' => ['required'],
            'address' => ['required']
        ]);

        $manufacture = Manufacture::findOrFail($id);
        $manufacture->update($request->all());

        return redirect()->route('manufactures.index');
    }

    public function destroy($id){
        $manufacture  = Manufacture::findOrFail($id);
        $manufacture ->delete();

        return redirect()->route('manufactures.index');
    }
}
