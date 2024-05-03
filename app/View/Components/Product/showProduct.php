<?php

namespace App\View\Components\product;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class showProduct extends Component
{
    
    public $product;
    public function __construct($product)
    {
        $this->product=$product;;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product.show-product');
    }
}