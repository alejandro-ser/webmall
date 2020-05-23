<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartBox extends Component
{
    public $cartItems = [];

    public function mount()
    {
        $this->cartItems = Cart::session(auth()->id())->getContent()->toArray();
    }

    public function render()
    {
        return view('livewire.cart-box');
    }
}
