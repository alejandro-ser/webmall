<div class="custom-col-style-2 custom-col-4">
    <div class="product-wrapper product-border mb-24">
        <div class="product-img-3">
            <a href="{{route('product.show', $product)}}">
                <img src="{{asset('img/'.$product->cover_img)}}" alt="">
            </a>
            <div class="product-action-right">
                <a class="animate-right" href="{{route('product.show', $product)}}">
                    <i class="pe-7s-look"></i>
                </a>
                <a class="animate-top" title="Add To Cart" href="{{route('cart.add', $product)}}">
                    <i class="pe-7s-cart"></i>
                </a>
            </div>
        </div>
        <div class="product-content-4 text-center">
            {{-- <div class="product-rating-4">
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star yellow"></i>
                <i class="icofont icofont-star"></i>
            </div> --}}
            <h4><a href="{{route('product.show', $product)}}">{{$product->name}}</a></h4>
            <span>{{$product->description}}</span>
            <h5>${{$product->price}}</h5>
        </div>
    </div>
</div>