<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
    public function show()
    {
        return view('show');
    }

    public function index()
    {
        return view('index');
    }
}
