<?php

namespace App\View\Components;

use App\Models\Semester;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class ArchitectLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $menu;

    public function __construct($menu='dashboard')
    {
        $this->menu = $menu;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $user   = Auth::user();
        $tp     = 'Belum di setting'; // tahun pelajaran
        $semester     = Semester::where('status','aktif')->first();
        if ($semester) {
            $tp = $semester->tahunpelajaran->nama.' | '.ucwords($semester->semester);
        }
        return view('layouts.architectui', compact('user','tp'));
    }
}
