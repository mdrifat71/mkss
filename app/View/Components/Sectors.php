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
    public $image;
    public $name;
    public function __construct($image, $name)
    {
        $this->image = $image;
        $this->name = $name;
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
