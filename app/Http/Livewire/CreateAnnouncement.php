<?php

namespace App\Http\Livewire;

use App\Models\Announcement;
use Livewire\Component;

class CreateAnnouncement extends Component
{
    public $title, $description, $price , $category;

    //START VALIDAZIONE DATI
    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
    ];
    //END VALIDAZIONE DATI

    public function store()
    {
        $this->validate(); //Se i dai sono validati OK procedi alla creazione.

        Announcement::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
        ]);

        $this->reset('title', 'description', 'price' , 'category'); //Al submit pulisci i campi del form.

        session()->flash('announcement', 'Annuncio creato corretamente');
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
