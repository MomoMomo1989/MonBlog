<?php

namespace App\Livewire\Client;

use App\Models\client;
use Livewire\Component;

class ListeClient extends Component
{
    public function render()
    {
        $clients = client::all();
        return view('livewire.client.liste-client',[
            'clients'=>$clients,
        ]);
    }
}
