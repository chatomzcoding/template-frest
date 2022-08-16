<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class FrestLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;
    public $title;

    public function __construct($menu='dashboard',$title='Sakola')
    {
        $this->menu = $menu;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user   = Auth::user();
        return view('layouts.frest', compact('user'));
    }
}
