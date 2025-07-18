<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class InputBox extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title = "input",
        public string $type = "text",
        public string $placeholder = ""
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-box');
    }
}
