<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function homepage()
    {
        $announcements = Announcement::take(6)->get()->sortByDesc('create_at');
        return view('homepage', compact('announcements'));
    }
}
