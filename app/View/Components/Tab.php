<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Tab extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $back;

    public function __construct($back='#')
    {
        $this->back = $back;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tab');
    }
}
