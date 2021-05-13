<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Article extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $id;
    public $titulo;
    public $descrp;
    public $foto;
    public function __construct($id,$titulo,$descrp,$foto)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descrp = $descrp;
        $this->foto = $foto;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.article');
    }
}
