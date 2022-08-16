<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navbar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $kembali;
    public $tambah;

    public function __construct($kembali=NULL,$tambah=NULL)
    {
        $this->kembali = $kembali;
        $this->tambah = $tambah;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navbar');
    }
}
