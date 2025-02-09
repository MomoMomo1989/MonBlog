<?php

namespace App\Livewire;

use Livewire\Component;

class TestButton extends Component
{
    public function render()
    {
        return view('livewire.test-button');
    }
    public $message = "Hello";

    public function act()
    {
        $this->message = "Bouton cliqué !";
    }

    
}
