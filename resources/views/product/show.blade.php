@extends('layouts.front')

@section('content')
<div class="product-details pt-100 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-7 col-12">
                <div class="product-details-4 pr-70">
                    <div class="easyzoom easyzoom--overlay">
                        <a href="#">
                            <img src="{{'/img/'.$product->cover_img}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-5 col-12">
                <div class="product-details-content">
                    <h3>{{$product->name}}</h3>
                    {{-- <div class="rating-number">
                        <div class="quick-view-rating">
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                            <i class="pe-7s-star"></i>
                        </div>
                        <div class="quick-view-number">
                            <span>2 Ratting (S)</span>
                        </div>
                    </div> --}}
                    <div class="details-price">
                        <span>${{$product->price}}</span>
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="product-color-2">
                        <h4 class="details-title">Color*</h4>
                        <div class="product-color-style2">
                            <ul>
                                <li class="orange"></li>
                                <li class="blue2"></li>
                                <li class="pink"></li>
                                <li class="yellow"></li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-size-2">
                        <h4 class="details-title">Size*</h4>
                        <div class="product-size-style2">
                            <ul>
                                <li><a href="#">xl</a></li>
                                <li><a href="#">ml</a></li>
                                <li><a href="#">m</a></li>
                                <li><a href="#">sl</a></li>
                                <li><a href="#">ls</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="quickview-plus-minus">
                        <div class="cart-plus-minus">
                            <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                        </div>
                        <div class="quickview-btn-cart">
                            <a class="btn-hover-black" href="{{route('cart.add', $product)}}">add to cart</a>
                            {{-- <form action="{{ route('cart.update', $item->id) }}">
                                <input type="number" name="quantity" value="{{ $item->quantity }}">
                                <input type="submit" class="btn-hover-black" value="add to cart">
                            </form> --}}
                        </div>
                        {{-- <div class="quickview-btn-wishlist">
                            <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                        </div> --}}
                    </div>
                    <div class="product-details-cati-tag mt-35">
                        <ul>
                            <li class="categories-title">Categories :</li>
                            @foreach ($product->categories as $category)
                                <li><a href="{{route('products.index', ['category_id' => $category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    {{-- <div class="product-details-cati-tag mtb-10">
                        <ul>
                            <li class="categories-title">Tags :</li>
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">electronics</a></li>
                            <li><a href="#">toys</a></li>
                            <li><a href="#">food</a></li>
                            <li><a href="#">jewellery</a></li>
                        </ul>
                    </div>
                    <div class="bundle-area">
                        <h3>Buy this bundle and get off to 35%</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmol tempor incidid ut labore et dolore magna aliqua.</p>
                        <div class="bundle-img">
                            <div class="single-bundle-img">
                                <a href="product-details-6.html"><img src="/assets/img/product-details/s1-details4.jpg" alt=""></a>
                            </div>
                            <div class="single-bundle-img">
                                <a href="product-details-6.html"><img src="/assets/img/product-details/s2-details4.jpg" alt=""></a>
                            </div>
                            <div class="single-bundle-img">
                                <a href="product-details-6.html"><img src="/assets/img/product-details/s3-details4.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="bundle-all-price">
                            <div class="bundle-price">
                                <ul>
                                    <li>White drone with remote  <span>$400</span> - $250</li>
                                    <li>Black drone with remote <span>$300</span> - $200</li>
                                    <li>Colorful drone with remote  <span>$600</span> - $300</li>
                                </ul>
                            </div>
                            <div class="bundle-result">
                                <h4>Price For All : <span> <span class="bundle-cross"> $1300</span> - $750</span></h4>
                            </div>
                        </div>
                        <div class="bundle-cart">
                            <a class="btn-hover-black bundle-btn" href="#">add bundle to cart</a>
                        </div>
                        <div class="product-details5-social">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-flikr"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product area start -->
{{-- <div class="product-area pb-95">
    <div class="container">
        <div class="section-title-3 text-center mb-50">
            <h2>Related products</h2>
        </div>
        <div class="product-style">
            <div class="related-product-active owl-carousel">
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                        </a>
                        <span>hot</span>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/3.jpg" alt="">
                        </a>
                        <span>hot</span>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/4.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/5.jpg" alt="">
                        </a>
                        <span>hot</span>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                        </a>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
                <div class="product-wrapper">
                    <div class="product-img">
                        <a href="#">
                            <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                        </a>
                        <span>hot</span>
                        <div class="product-action">
                            <a class="animate-left" title="Wishlist" href="#">
                                <i class="pe-7s-like"></i>
                            </a>
                            <a class="animate-top" title="Add To Cart" href="#">
                                <i class="pe-7s-cart"></i>
                            </a>
                            <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                <i class="pe-7s-look"></i>
                            </a>
                        </div>
                    </div>
                    <div class="product-content">
                        <h4><a href="#">Arifo Stylas Dress</a></h4>
                        <span>$115.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- product area end -->
@endsection