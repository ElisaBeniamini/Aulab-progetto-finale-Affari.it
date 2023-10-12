<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;
    //pescami dal DB titolo descizione e prezzo.
    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
    ];

    //Gli annunci appartanegono alle categorie.
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
