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

        $itOnly = Announcement::where('category_id', '=', 2)->inRandomOrder()->limit(10)->get();
        //la variabile $itOnly mi manda i dati nella homepage per poter creare la section con card per categorie in questo caso ho nella view della homepage una section che mi renderizza 10 card con annunci di solo informatica.

        $motorsOnly = Announcement::where('category_id', '=', 1)->inRandomOrder()->limit(10)->get();
        //la variabile  $motorsOnly mi manda i dati nella homepage per poter creare la section con card per categorie in questo caso ho nella view della homepage una section che mi renderizza 10 card con annunci di solo motori.

        $smartphoneMinors = Announcement::where('category_id', '=', 8)->where('price', '<', 600)->inRandomOrder()->limit(10)->get();
        //la variabile   $smartphoneMinors mi manda i dati nella homepage per poter creare la section con card per categorie in questo caso ho nella view della homepage una section che mi renderizza 10 card con annunci di solo smartphone < di 600€.

        return view('homepage', compact('announcements', 'categories', 'itOnly', 'motorsOnly', 'smartphoneMinors'));
    }


    public function categoryShow(Category $category)
    {
        return view('categoryShow', compact('category'));
    }
}
