@extends('template')
@section('content')
<!-- Begin Slider Area -->
<div class="slider-area">

    <!-- Main Slider
    <div class="swiper-container main-slider swiper-arrow with-bg_white">
        <div class="swiper-wrapper">
            <div class="swiper-slide animation-style-01">
                <div class="slide-inner style-1 bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 align-self-center">
                                <div class="slide-content text-black">
                                    <span class="offer">65% Off</span>
                                    <h2 class="title">New Plant</h2>
                                    <p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
                                    <div class="btn-wrap">
                                        <a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                <div class="inner-img">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="assets/images/slider/inner-img/1-1-524x617.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide animation-style-01">
                <div class="slide-inner style-1 bg-height" data-bg-image="assets/images/slider/bg/1-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 align-self-center">
                                <div class="slide-content text-black">
                                    <span class="offer">65% Off</span>
                                    <h2 class="title">New Plant</h2>
                                    <p class="short-desc">Pronia, With 100% Natural, Organic & Plant Shop.</p>
                                    <div class="btn-wrap">
                                        <a class="btn btn-custom-size xl-size btn-pronia-primary" href="shop.html">Discover Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-8 offset-md-2 offset-lg-0 order-1 order-lg-2">
                                <div class="inner-img">
                                    <div class="scene fill">
                                        <div class="expand-width" data-depth="0.2">
                                            <img src="assets/images/slider/inner-img/1-2-524x617.png" alt="Inner Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         Add Pagination -->
        <div class="swiper-pagination d-md-none"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>

</div>
<!-- Slider Area End Here -->

<!-- Begin Shipping Area -->
<div class="shipping-area section-space-top-100">
    <div class="container">
        <div class="shipping-bg">
            <div class="row shipping-wrap">
                <div class="col-lg-6 col-md-6">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="assets/images/shipping/icon/car.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h2 class="title">Бесплатная доставка</h2>
                            <p class="short-desc mb-0">При заказе от 7 тысяч рублей</p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="assets/images/shipping/icon/card.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h2 class="title">Safe Payment</h2>
                            <p class="short-desc mb-0">With our payment gateway</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
                    <div class="shipping-item">
                        <div class="shipping-img">
                            <img src="assets/images/shipping/icon/service.png" alt="Shipping Icon">
                        </div>
                        <div class="shipping-content">
                            <h2 class="title"></h2>
                            <p class="short-desc mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shipping Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="section-title-wrap">
            <a href="/shop"><h2 class="section-title mb-0">Все товары</h2></a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav product-tab-nav tab-style-1" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="active" id="featured-tab" data-bs-toggle="tab" href="#featured" role="tab" aria-controls="featured" aria-selected="true">
                            Рекомендуем
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="bestseller-tab" data-bs-toggle="tab" href="#bestseller" role="tab" aria-controls="bestseller" aria-selected="false">
                            Лучшие
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a id="latest-tab" data-bs-toggle="tab" href="#latest" role="tab" aria-controls="latest" aria-selected="false">
                            Последние
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="featured" role="tabpanel" aria-labelledby="featured-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 1</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 2</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 3</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 4</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 5</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 6</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 7</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 8</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bestseller" role="tabpanel" aria-labelledby="bestseller-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 9</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 10</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 11</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 12</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 13</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 14</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 15</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 16</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="latest" role="tabpanel" aria-labelledby="latest-tab">
                        <div class="product-item-wrap row">
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 17</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 18</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 19</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 20</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 21</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 22</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 23</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6">
                                <div class="product-item">
                                    <div class="product-img">
                                        <a href="/shop">
                                            <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                            <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                        </a>
                                        <!--<div class="product-add-action">
                                            <ul>
                                                <li>
                                                    <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-like"></i>
                                                    </a>
                                                </li>
                                                <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                                    <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-look"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                        <i class="pe-7s-cart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>-->
                                    </div>
                                    <div class="product-content">
                                        <a class="product-name" href="/shop">Товар 24</a>
                                        <div class="price-box pb-1">
                                            <span class="new-price">Цена</span>
                                        </div>
                                        <!--<div class="rating-box">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-area section-space-top-90 blog-area section-space-bottom-100">
    <div class="container">
        <div class="row g-min-30 g-4">
            <div class="col-lg-8">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="assets/images/banner/1-1-770x300.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-left">
                        <span class="collection"></span>
                        <h3 class="title">Керамические горшки & <br>Растения</h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size btn-pronia-primary" href="/shop">Магазин</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="assets/images/banner/1-2-370x300.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-center">
                        <span class="collection"></span>
                        <h3 class="title">Шарики</h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size lg-size btn-pronia-primary" href="/shop">Магазин</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="assets/images/banner/1-3-370x300.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-center">
                        <span class="collection"></span>
                        <h3 class="title">Игрушки</h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size lg-size btn-pronia-primary" href="/shop">Магазин</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="banner-item img-hover-effect">
                    <div class="banner-img">
                        <img src="assets/images/banner/1-4-770x300.jpg" alt="Banner Image">
                    </div>
                    <div class="banner-content text-position-left">
                        <span class="collection"></span>
                        <h3 class="title"> Букеты & <br> открытки</h3>
                        <div class="button-wrap">
                            <a class="btn btn-custom-size lg-size btn-pronia-primary" href="/shop">Магазин</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->

<!-- Begin Product Area
<div class="product-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="section-title-wrap without-tab">
                <h2 class="section-title">New Products</h2>
                <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                    roots in a piece of classical Latin literature
                </p>
            </div>
            <div class="col-lg-12">
                <div class="swiper-container product-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide product-item">
                            <div class="product-img">
                                <a href="shop.html">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                </a>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <a class="product-name" href="shop.html">American Marigold</a>
                                <div class="price-box pb-1">
                                    <span class="new-price">$23.45</span>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <div class="product-img">
                                <a href="shop.html">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                </a>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <a class="product-name" href="shop.html">Black Eyed Susan</a>
                                <div class="price-box pb-1">
                                    <span class="new-price">$25.45</span>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <div class="product-img">
                                <a href="shop.html">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                                </a>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <a class="product-name" href="shop.html">Bleeding Heart</a>
                                <div class="price-box pb-1">
                                    <span class="new-price">$30.45</span>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide product-item">
                            <div class="product-img">
                                <a href="shop.html">
                                    <img class="primary-img" src="assets/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                                    <img class="secondary-img" src="assets/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                                </a>
                                <div class="product-add-action">
                                    <ul>
                                        <li>
                                            <a href="wishlist.html" data-tippy="Add to wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-like"></i>
                                            </a>
                                        </li>
                                        <li class="quuickview-btn" data-bs-toggle="modal" data-bs-target="#quickModal">
                                            <a href="#" data-tippy="Quickview" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-look"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html" data-tippy="Add to cart" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                                                <i class="pe-7s-cart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-content">
                                <a class="product-name" href="shop.html">Bloody Cranesbill</a>
                                <div class="price-box pb-1">
                                    <span class="new-price">$45.00</span>
                                </div>
                                <div class="rating-box">
                                    <ul>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonial-area section-space-top-90 section-space-bottom-95">
    <div class="container-fluid">
        <div class="testimonial-bg" data-bg-image="assets/images/testimonial/bg/1-1-1820x443.jpg">
            <div class="section-title-wrap">
                <h2 class="section-title">What Say Client</h2>
                <p class="section-desc mb-0">Contrary to popular belief, Lorem Ipsum is not simply random
                    text. It has roots in a piece of classical Latin literature
                </p>
            </div>
        </div>
        <div class="container custom-space">
            <div class="swiper-container testimonial-slider with-bg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/user/1.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo
                            incididunt ut labore et dolore. magna
                        </p>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/user/2.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo
                            incididunt ut labore et dolore. magna
                        </p>
                    </div>
                    <div class="swiper-slide testimonial-item">
                        <div class="user-info mb-3">
                            <div class="user-shape-wrap">
                                <div class="user-img">
                                    <img src="assets/images/testimonial/user/3.png" alt="User Image">
                                </div>
                            </div>
                            <div class="user-content text-charcoal">
                                <h4 class="user-name mb-1">Phoenix Baker</h4>
                                <span class="user-occupation">Client</span>
                            </div>
                        </div>
                        <p class="user-comment mb-6">Lorem ipsum dolor sit amet, conse adipisic elit, sed do eiusmod
                            tempo
                            incididunt ut labore et dolore. magna
                        </p>
                    </div>
                </div>

                <div class="swiper-pagination without-absolute"></div>
            </div>
        </div>
    </div>
</div>

<div class="brand-area section-space-bottom-100">
    <div class="container">
        <div class="brand-bg" data-bg-image="assets/images/brand/bg/1-1170x300.jpg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-container brand-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/1-1.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/1-2.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/1-3.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/1-4.png" alt="Brand Image">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="brand-item" href="#">
                                    <img src="assets/images/brand/1-5.png" alt="Brand Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-area section-space-bottom-100">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="section-title mb-7">Latest Blog</h2>
            <p class="section-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                roots in a piece of classical Latin literature
            </p>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container blog-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li class="author">
                                                <a href="#">By: Admin</a>
                                            </li>
                                            <li class="date">24 April 2021</li>
                                        </ul>
                                    </div>
                                    <h2 class="title">
                                        <a href="blog.html">There Many Variations</a>
                                    </h2>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consecteturl adipisl elit,
                                        sed do eiusmod tempor incidio ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="blog-img img-hover-effect">
                                    <a href="blog.html">
                                        <img class="img-full" src="assets/images/blog/medium-size/1-1-310x220.jpg" alt="Blog Image">
                                    </a>
                                    <div class="inner-btn-wrap">
                                        <a class="inner-btn" href="blog.html">
                                            <i class="pe-7s-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li class="author">
                                                <a href="#">By: Admin</a>
                                            </li>
                                            <li class="date">24 April 2021</li>
                                        </ul>
                                    </div>
                                    <h2 class="title">
                                        <a href="blog.html">Maecenas Laoreet Massa</a>
                                    </h2>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consecteturl adipisl elit,
                                        sed do eiusmod tempor incidio ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="blog-img img-hover-effect">
                                    <a href="blog.html">
                                        <img class="img-full" src="assets/images/blog/medium-size/1-2-310x220.jpg" alt="Blog Image">
                                    </a>
                                    <div class="inner-btn-wrap">
                                        <a class="inner-btn" href="blog.html">
                                            <i class="pe-7s-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="blog-item">
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <ul>
                                            <li class="author">
                                                <a href="#">By: Admin</a>
                                            </li>
                                            <li class="date">24 April 2021</li>
                                        </ul>
                                    </div>
                                    <h2 class="title">
                                        <a href="blog.html">Aenean Vulputate Lorem</a>
                                    </h2>
                                    <p class="short-desc mb-7">Lorem ipsum dolor sit amet, consecteturl adipisl elit,
                                        sed do eiusmod tempor incidio ut labore et dolore magna aliqua.</p>
                                </div>
                                <div class="blog-img img-hover-effect">
                                    <a href="blog.html">
                                        <img class="img-full" src="assets/images/blog/medium-size/1-3-310x220.jpg" alt="Blog Image">
                                    </a>
                                    <div class="inner-btn-wrap">
                                        <a class="inner-btn" href="blog.html">
                                            <i class="pe-7s-link"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
