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
        'user_id',
        'is_accepted',
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

    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount()
    {
     return Announcement::where('is_accepted', null)->count();   
    }
}
