<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
   
    public function index()
    {
        //
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
