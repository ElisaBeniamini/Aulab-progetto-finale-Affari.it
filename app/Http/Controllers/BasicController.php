<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();
        $announcementes = Announcement::take(6)->get()->sortByDesc('created_at');
        return view('homepage', compact('announcementes', 'categories'));
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}
