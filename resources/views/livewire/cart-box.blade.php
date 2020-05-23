<div>
    <ul class="cart-dropdown">
        @if (count($cartItems) > 0 )
            @foreach ($cartItems as $item)
            <li class="single-product-cart">
                <div class="cart-img">
                    <a href="{{ route('product.show', $item['id']) }}"><img src="{{ asset('img/'.$item['associatedModel']['cover_img']) }}" alt=""></a>
                </div>
                <div class="cart-title">
                    <h5><a href="{{ route('product.show', $item['id']) }}">{{ $item['name'] }}</a></h5>
                    <span>${{ Cart::session(auth()->id())->get($item['id'])->price }} x {{ $item['quantity'] }}</span>
                </div>
                <div class="cart-delete">
                    <livewire:cart-update-form :item="$item" :key="$item['id']" />
                    <a href="{{ route('cart.destroy', $item['id']) }}"><i class="ti-trash"></i></a>
                </div>
            </li>
            @endforeach    
        @else
        <li class="single-product-cart">
            <h5 class="text-center">Add produts to the cart</h5>
        </li>
        @endif
        
        <li class="cart-btn-wrapper">
            <a class="cart-btn btn-hover" href="{{route('cart.index')}}">View cart</a>
            <a class="cart-btn btn-hover" href="{{route('cart.checkout')}}">Checkout</a>
        </li>
    </ul>
</div>
