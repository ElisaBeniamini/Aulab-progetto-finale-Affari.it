<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;


class CreateAnnouncement extends Component
{   
    use WithFileUploads;

    public $title, $description, $price, $category , $temporaty_images , $images = [] , $image;
    
    //START VALIDAZIONE DATI
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'images.*' => 'image|1024:max',
        '$temporaty_images.*' => 'image|1024:max',
    ];
    //END VALIDAZIONE DATI
    
    public function store()
    {
        $this->validate(); //Se i dai sono validati OK procedi alla creazione.

        $category = Category::find($this->category);

        $announcement = $category->announcements()->create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
        ]);

        Auth::user()->announcements()->save($announcement);

        $this->reset('title', 'description', 'price', 'category'); //Al submit pulisci i campi del form.

        session()->flash('announcement', 'Annuncio creato corretamente');
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
