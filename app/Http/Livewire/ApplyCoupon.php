<?php

namespace App\Http\Livewire;

use Cart;
use App\Coupon;
use Livewire\Component;

class ApplyCoupon extends Component
{
    public $couponCode = '';

    public function applyCoupon()
    {
        $couponCode = $this->couponCode;

        $couponData = Coupon::where('code', $couponCode)->first();
        
        if (!$couponData) {
            $this->emit('cartUpdated', 'error', 'Coupon does not exist');
        } else {
            // coupon logic
            $condition = new \Darryldecode\Cart\CartCondition(array(
                'name' => $couponData->name,
                'type' => $couponData->type,
                'target' => 'total', // this condition will be applied to cart's subtotal when getSubTotal() is called.
                'value' => $couponData->value,
            ));
            
            Cart::session(auth()->id())->condition($condition); // for a speicifc user's cart

            $this->emit('cartUpdated', 'message', 'Coupon applied!');
        }
    }

    public function render()
    {
        return view('livewire.apply-coupon');
    }
}
