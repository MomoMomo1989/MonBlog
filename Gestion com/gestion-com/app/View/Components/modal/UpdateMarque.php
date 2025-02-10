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

    public function __construct($id)
    {
        //
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $brands = brand::where('id',  $this->id )
        ->get()->first();
        
        return view('components.modal.update-marque',[
            'brands'=>$brands,
        ]);
    }
}
