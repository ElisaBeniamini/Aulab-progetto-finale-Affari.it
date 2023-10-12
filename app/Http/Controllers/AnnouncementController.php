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
        $announcementes = Announcement::all();
        return view('announcement.index', compact('announcementes', 'categories'));
    }


    public function create()
    {
        return view('announcement.create');
    }


    //  public function show(Announcement $announcement)
    //  {
    //        $announcementes = Announcement::find($announcement->id);
    //      $categories = Category::all();
    //      return view('announcement.show');
    //  }
}
