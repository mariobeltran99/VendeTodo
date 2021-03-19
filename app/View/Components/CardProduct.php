<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CardProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $price, $category, $imgsrc, $url;
    public function __construct($titleR, $priceR, $categoryR, $imgsrcR, $urlR)
    {
        $this->title = $titleR;
        $this->price = $priceR;
        $this->category = $categoryR;
        $this->imgsrc = $imgsrcR;
        $this->url = $urlR;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.card-product');
    }
}
