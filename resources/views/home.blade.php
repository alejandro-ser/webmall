@extends('layouts.front')

@section('content')

<div class="pl-200 pr-200 overflow clearfix">
    <div class="categori-menu-slider-wrapper clearfix">
        <div class="categories-menu">
            <div class="category-heading">
                <h3> All Departments <i class="pe-7s-angle-down"></i></h3>
            </div>
            <div class="category-menu-list">
                <ul>

                    @foreach ($parentCategories as $pCategory)
                    <li>
                        <a href="{{route('products.index', ['category_id' => $pCategory->id])}}">{{$pCategory->name}}<i class="pe-7s-angle-right"></i></a>

                        @php
                            $childrenCategories = TCG\Voyager\Models\Category::where('parent_id', $pCategory->id)->get();
                        @endphp

                        @if ($childrenCategories->isNotEmpty())
                            <div class="category-menu-dropdown">

                                @foreach ($childrenCategories as $chCategory)
                                <div class="category-dropdown-style category-common3">
                                    <h4 class="categories-subtitle">
                                        <a href="{{route('products.index', ['category_id' => $chCategory->id])}}">{{$chCategory->name}}</a>
                                    </h4>

                                    @php
                                        $grandChildrenCategories = TCG\Voyager\Models\Category::where('parent_id', $chCategory->id)->get();
                                    @endphp

                                    @if ($grandChildrenCategories->isNotEmpty())
                                    <ul>
                                        @foreach ($grandChildrenCategories as $gChCategory)
                                        <li><a href="{{route('products.index', ['category_id' => $gChCategory->id])}}"> {{$gChCategory->name}}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif

                                </div>
                                @endforeach

                            </div>
                        @endif

                    </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="menu-slider-wrapper">
            <div class="slider-area">
                <div class="slider-active owl-carousel">
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(img/default-product.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated text-light">Invention of <br>design platform</h2>
                            <h4 class="animated text-light">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div>
                    <div class="single-slider single-slider-hm3 bg-img pt-170 pb-173" style="background-image: url(img/default-product.jpg)">
                        <div class="slider-animation slider-content-style-3 fadeinup-animated">
                            <h2 class="animated text-light">Invention of <br>design platform</h2>
                            <h4 class="animated text-light">Best Product With warranty </h4>
                            <a class="electro-slider-btn btn-hover" href="product-details.html">buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="electronic-banner-area">
    <div class="custom-row-2">
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/15.jpg" alt="">
                <div class="electro-banner-style electro-banner-position">
                    <h1>Live 4K! </h1>
                    <h2>up to 20% off</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/16.jpg" alt="">
                <div class="electro-banner-style electro-banner-position2">
                    <h1>Xoxo ssl </h1>
                    <h2>up to 15% off</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
        <div class="custom-col-style-2 electronic-banner-col-3 mb-30">
            <div class="electronic-banner-wrapper">
                <img src="assets/img/banner/17.jpg" alt="">
                <div class="electro-banner-style electro-banner-position3">
                    <h1>BY Laptop</h1>
                    <h2>Super Discount</h2>
                    <h4>Amazon exclusives</h4>
                    <a href="product-details.html">Buy Now→</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="electro-product-wrapper wrapper-padding pt-10 pb-45">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>
        <div class="top-product-style">
            
            <div>
                <div id="electro1">
                    <div class="custom-row-2">

                        @foreach ($allProducts as $product)
                        
                            @include('product._single_product')

                        @endforeach
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
