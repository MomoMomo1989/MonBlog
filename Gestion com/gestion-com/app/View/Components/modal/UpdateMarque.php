<?php

namespace App\View\Components\modal;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\brand;

class UpdateMarque extends Component
{
    /**
     * public $id;
     * Create a new component instance.
     */
    public $id;
    public $brands;

    public function __construct($id)
    {
        //
        $this->id=$id;
        $this->brands = brand::where('id',  $this->id )
        ->get()->first();
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.update-marque');
    }
}
