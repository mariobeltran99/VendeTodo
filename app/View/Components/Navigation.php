<?php

namespace App\View\Components;

use App\Models\categoria;
use Illuminate\View\Component;


class Navigation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $flag, $name, $imgsrc, $listc;
    public function __construct($flagR, $named,$url)
    {
        $this->listc = categoria::all();
        $this->flag = $flagR;
        $this->name = $named;
        $this->imgsrc = $url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.navigation');
    }
}
