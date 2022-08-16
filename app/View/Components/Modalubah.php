<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Modalubah extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $nilaiid;
    public $judul;
    public $index;
    public $link;
    public $size;

    public function __construct($id="ubah",$judul='Modal',$index="-1",$link='',$size=NULL,$nilaiid=NULL)
    {
        $this->id = $id;
        $this->judul = $judul;
        $this->index = $index;
        $this->link = $link;
        $this->size = $size;
        $this->nilaiid = $nilaiid;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modalubah');
    }
}
