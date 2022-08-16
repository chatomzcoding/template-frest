<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $judul;
    public $icon;
    public $active;
    public $link;

    public function __construct($judul='judul halaman',$icon='car',$active="halaman",$link=[])
    {
        $this->judul = $judul;
        $this->icon = $icon;
        $this->active = $active;
        $this->link = $link;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header');
    }
}
