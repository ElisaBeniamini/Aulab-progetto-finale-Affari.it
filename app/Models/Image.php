<?php

namespace App\Models;
use App\Models\Announcement;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path'];

    //1 Igm ha un solo annuncio 
    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}