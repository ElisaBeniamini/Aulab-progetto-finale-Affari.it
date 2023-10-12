<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index()
    {
        $announcementes = Announcement::all();
        return view('announcement.index', compact('announcementes'));
    }


    public function create()
    {
        return view('announcement.create');
    }


    // public function show()
    // {
    //     $announcementes = Announcement::all();
    //     $categories = Category::all();
    //     return view('announcement.show', compact('announcementes', 'categories'));
    // }
}
