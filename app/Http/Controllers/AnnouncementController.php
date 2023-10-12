<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $announcements = Announcement::all();
        return view('announcement.index', compact('announcements', 'categories'));
    }


    public function create()
    {
        return view('announcement.create');
    }


    public function show(Announcement $announcement)
    {
        //
    }
}
