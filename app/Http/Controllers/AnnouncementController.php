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
        $consigliati = Announcement::inRandomOrder()->limit(6)->get();

        $consigliatiTwo = Announcement::inRandomOrder()->limit(6)->get();

        $ineferioridicianquanta = Announcement::where('price', '<', 50)->inRandomOrder()->limit(12)->get();

        return view('announcement.show', compact('announcement', 'consigliati', 'consigliatiTwo', 'ineferioridicianquanta')); // vedi annuncio
    }

    public function show(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));
    }
}
