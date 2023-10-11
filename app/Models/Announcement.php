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
    ];
}
