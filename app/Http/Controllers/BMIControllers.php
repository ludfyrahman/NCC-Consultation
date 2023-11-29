<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BMIControllers extends Controller
{
    //
    public function index(Request $request)
    {
        $title = 'Kalkulator BMI | CC';
        return view('pages/frontend/bmi/index', compact('title'));
    }
}
