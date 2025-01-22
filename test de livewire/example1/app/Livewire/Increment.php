<?php

namespace App\Livewire;

use Livewire\Component;

class Increment extends Component
{
    public $count = 0; // Variable publique

    public function increment()
    {
        $this->count++; // Méthode pour incrémenter la variable $count
    }

    public function render()
    {
        return view('livewire.increment'); // Retourne la vue associée
    }
}
