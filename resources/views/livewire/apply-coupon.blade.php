<div>
    <div class="coupon-all">
        <div class="coupon">
            <h4>Have you a coupon?</h4>
            <form wire:submit.prevent="applyCoupon">
                <input id="coupon_code" class="input-text" name="coupon_code" placeholder="Coupon code" type="text"
                        wire:model="couponCode">
                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
            </form>
        </div>
    </div>
</div>
