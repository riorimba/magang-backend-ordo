<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberOperationsController extends Controller
{
    public function multiplication($number){
        return $number * 2;
    }

    public function index(){
        return view('operation');
    }

    public function addition(Request $request){
        $request->validate([
            'angka1' => ['required', 'numeric'],
            'angka2' => ['required', 'numeric']
        ]);

        $number1 = $request->input('angka1');
        $number2 = $request->input('angka2');
        $result = $number1 + $number2;
        return view('operation', ['result' => $result]);
    }
}
