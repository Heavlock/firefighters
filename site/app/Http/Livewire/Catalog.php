<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Catalog extends Component
{
    public $product;
    public $productId;
    public $products;
    public $title = 'Каталог';

    public function mount()
    {
        if (!$this->products) $this->products = \App\Models\Product::All();
    }


    public function render()
    {
        return view('livewire.catalog')->extends('master')->layoutData(['title' => $this->title]);
    }
}
