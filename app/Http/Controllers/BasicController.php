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
        $announcements = Announcement::where('is_accepted', true)
            ->orderBy('created_at', 'desc')
            ->take(6)
            ->get();
        return view('homepage', compact('announcements', 'categories'));
    }

    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}
