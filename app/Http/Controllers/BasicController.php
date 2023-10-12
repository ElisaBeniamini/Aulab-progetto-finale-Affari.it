<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
}
