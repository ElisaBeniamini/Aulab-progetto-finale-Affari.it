<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function homepage()
    {
        $announcementes = Announcement::take(6)->get()->sortByDesc('created_at'); //  visualizzare i primi sei annunci
        return view('homepage', compact('announcementes'));
    }
}
