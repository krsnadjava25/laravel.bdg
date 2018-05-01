<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function single()
    {
        return view('single');
    }

    public function multiple()
    {
        return view('multiple');
    }
}
