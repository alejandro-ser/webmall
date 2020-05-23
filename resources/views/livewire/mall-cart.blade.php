<div>
    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-50 pb-100">
        <div class="container">
            {{-- display success message --}}
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show text-center mt-20" role="alert">
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
    
            {{-- display error message --}}
            @if(session()->has('error'))
                <div class="alert alert-danger alert-dismissible fade show text-center mt-20" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="section-title-4 text-center mb-40">
                <h2>Cart</h2>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @if (count($cartItems) > 0 )
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Remove</th>
                                    <th>Images</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $item)
                                <tr>
                                    <td class="product-remove"><a href="{{ route('cart.destroy', $item['id']) }}"><i class="pe-7s-close"></i></a></td>
                                    <td class="product-thumbnail">
                                        <a href="{{ route('product.show', $item['id']) }}"><img src="{{asset('img/'.$item['associatedModel']['cover_img'])}}" alt=""></a>
                                    </td>
                                    <td class="product-name"><a href="{{ route('product.show', $item['id']) }}">{{ $item['name'] }}</a></td>
                                    <td class="product-price-cart"><span class="amount">${{ Cart::session(auth()->id())->get($item['id'])->price }}</span></td>
                                    <td class="product-quantity">
                                        <livewire:cart-update-form :item="$item" :key="$item['id']" />
                                    </td>
                                    <td class="product-subtotal">${{ Cart::session(auth()->id())->get($item['id'])->getPriceSum() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @else
                        <h1 class="text-center"><i>Add produts to the cart</i></h1>
                    @endif
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <livewire:apply-coupon />
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="cart-page-total" style="padding-top:30px;">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal<span>{{ Cart::session(auth()->id())->getSubTotal() }}</span></li>
                                    <li>Total<span>{{ Cart::session(auth()->id())->getTotal() }}</span></li>
                                </ul>
                                <a href="{{ route('cart.checkout') }}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
