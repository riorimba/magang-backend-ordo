<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberOperationsController extends Controller
{
    public function multiplication($number){
        return $number * 2;
    }
}
