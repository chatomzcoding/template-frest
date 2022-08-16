<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Megamenu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $tp;
    
    public function __construct($tp=NULL)
    {
        $this->tp = $tp;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.megamenu');
    }
}
