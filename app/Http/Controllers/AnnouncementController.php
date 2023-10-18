<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth")->only('announcement.create'); //solo per la rotta create.announcemet
    }




    public function create()  // creazione annuncio
    {
        return view('announcement.create');
    }

    public function index()
    {
        $categories = Category::all(); // index annunci
        $announcements = Announcement::where('is_accepted', true)->paginate(6);
        return view('announcement.index', compact('announcements', 'categories'));
    }

    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement')); // vedi annuncio
    }
    public function show(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));
    }
}
