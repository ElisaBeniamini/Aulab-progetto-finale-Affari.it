<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create()  // creazione annuncio
    {
        return view('announcement.create');
    }

    public function index()
    {
        $categories = Category::all();   //index annunci
        $announcementes = Announcement::all();
        return view('announcement.index', compact('announcementes', 'categories'));
    }


    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));  //vedi annuncio
    }
}
