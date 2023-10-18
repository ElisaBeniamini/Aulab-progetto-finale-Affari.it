<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Announcement extends Model
{
    use HasFactory, Searchable;

    //pescami dal DB titolo descizione e prezzo.
    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id',
    ];

    //Gli annunci appartanegono alle categorie.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //Gli annunci appartengona agli utenti.
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //METODO PER RICERCA PRODOTTI
    public function toSearchableArray()
    {
        $category = $this->category;

        $array = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $category,
        ];

        return $array;
    }
}
