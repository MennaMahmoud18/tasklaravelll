<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Head extends Component
{
    public $title;

    public function __construct($title = "Laravel App")
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('components.layout.head');
    }
}

 

