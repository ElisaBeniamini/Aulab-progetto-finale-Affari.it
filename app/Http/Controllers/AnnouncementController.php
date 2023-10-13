<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{

    public function create()
    {
        return view('announcement.create');
    }



    public function index()
    {
        $categories = Category::all();
        $announcementes = Announcement::all();
        // $announcementes = Announcement::take(6)->get()->sortByDesc('created_at');   visualizzare i primi sei annunci
        return view('announcement.index', compact('announcementes', 'categories'));
    }





    public function showAnnouncement(Announcement $announcement)
    {
        return view('announcement.show', compact('announcement'));
    }



    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}
