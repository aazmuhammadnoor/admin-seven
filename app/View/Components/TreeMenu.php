<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TreeMenu extends Component
{
    public $child;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($child=null)
    {
        $this->child = $child;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tree-menu');
    }
}
