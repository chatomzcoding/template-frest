<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Aksi extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $unique;
    public $link;
    public $detail;
    public $type;

    public function __construct($id,$unique=NULL,$link='',$detail=NULL,$type="inline")
    {
        $this->id = $id;
        $this->unique = $unique;
        $this->link = $link;
        $this->detail = $detail;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $nilaiid = ($this->unique <> NULL) ? $this->unique : $this->id ;
        return view('components.aksi', compact('nilaiid'));
    }
}
