<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Sectors extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $img;
    public $title;
    public function __construct($img, $title)
    {
        $this->img = $img;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('public.components.sectors');
    }
}
