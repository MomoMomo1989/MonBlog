<?php

namespace App\Livewire;

use Livewire\Component;

class Navigation extends Component
{

public $activeS = false;

    public function activeSearch(){
        $this->activeS = true;
    }

    public function desactiveSearch(){
        $this->activeS = false;
    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
