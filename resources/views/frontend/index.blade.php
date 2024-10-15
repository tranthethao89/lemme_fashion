@extends('frontend.master')
@section('content')
    <div id="wrapper">
        <!-- Announcement Bar -->
        <div class="announcement-bar bg_primary">
            <div class="container-full">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-md-4 col-12 text-center wrap-announcement-bar-2">
                        <div class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true"
                            data-speed="1000" data-delay="2000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p class="noti-bar-text text-white fw-5">Welcome to our store</p>
                                </div>
                                <div class="swiper-slide">
                                    <p class="noti-bar-text text-white fw-5">The best HTML theme</p>
                                </div>
                            </div>
                        </div>
                        <div class="navigation-topbar nav-next-topbar"><span class="icon icon-arrow-left"></span></div>
                        <div class="navigation-topbar nav-prev-topbar"><span class="icon icon-arrow-right"></span></div>
                    </div>
                </div>
                <span class="icon-close close-announcement-bar"></span>
            </div>
        </div>
        <!-- /Announcement Bar -->
        <!-- Header -->
        @include('frontend.components.header')
        <!-- /Header -->
        <!-- Slider -->
        @include('frontend.components.slider')
        <!-- /Slider -->
        <!-- Collection -->
        <section class="flat-spacing-18">
            <div class="container">
                <div class="masonry-layout-v2">
                    <div class="item-1 collection-item-v5 hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="collection-inner">
                            <a href="shop-default.html" class="collection-image img-style">
                                <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-59.jpg') }}"
                                    src="{{ asset('frontend/images/collections/collection-59.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-default.html" class="collection-title"><span>Clothing</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-2 collection-item-v5 hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="collection-inner">
                            <a href="shop-default.html" class="collection-image img-style">
                                <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-60.jpg') }}"
                                    src="{{ asset('frontend/images/collections/collection-60.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-default.html" class="collection-title"><span>Shoes</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-3 collection-item-v5 hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="collection-inner">
                            <a href="shop-default.html" class="collection-image img-style">
                                <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-61.jpg') }}"
                                    src="{{ asset('frontend/images/collections/collection-61.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-default.html" class="collection-title"><span>Slippers</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-4 collection-item-v5 hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="collection-inner">
                            <a href="shop-default.html" class="collection-image img-style">
                                <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-62.jpg') }}"
                                    src="{{ asset('frontend/images/collections/collection-62.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-default.html" class="collection-title"><span>Perfume</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-5 collection-item-v5 hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="collection-inner">
                            <a href="shop-default.html" class="collection-image img-style">
                                <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-63.jpg') }}"
                                    src="{{ asset('frontend/images/collections/collection-63.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-default.html" class="collection-title"><span>Bags</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="item-6 collection-item-v5 hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="collection-inner">
                            <a href="shop-default.html" class="collection-image img-style">
                                <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-64.jpg') }}"
                                    src="{{ asset('frontend/images/collections/collection-64.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content">
                                <a href="shop-default.html" class="collection-title"><span>Hats</span><i
                                        class="icon icon-arrow1-top-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Collection -->

        <!-- Product -->
        <section class="flat-spacing-6 pt_0">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">BỘ SƯU TẬP LEMME</span>
                    <div class="d-flex gap-16 align-items-center">
                        <div class="nav-sw-arrow nav-next-slider nav-next-product"><span
                                class="icon icon-arrow1-left"></span></div>
                        <a href="product-style-05.html" class="tf-btn btn-line fs-12 fw-6">VIEW ALL</a>
                        <div class="nav-sw-arrow nav-prev-slider nav-prev-product"><span
                                class="icon icon-arrow1-right"></span></div>
                    </div>
                </div>
                <div class="hover-sw-nav hover-sw-2">
                    <div class="swiper tf-sw-product-sell wrap-sw-over" data-preview="4" data-tablet="3" data-mobile="2"
                        data-space-lg="30" data-space-md="15" data-pagination="2" data-pagination-md="3"
                        data-pagination-lg="3">
                        <div class="swiper-wrapper">
                            @include('frontend.product_view.all_product_view')
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-product box-icon w_46 round"><span
                            class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-product box-icon w_46 round"><span
                            class="icon icon-arrow-right"></span></div>
                </div>
            </div>
        </section>
        <!-- /Product -->

        <!-- Shop Collection -->
        <section class="flat-spacing-4 pt_0">
            <div class="container">
                <div class="tf-grid-layout md-col-2 tf-img-with-text style-2">
                    <div class="tf-image-wrap wow fadeInUp" data-wow-delay="0s">
                        <img class="lazyload" data-src="{{ asset('frontend/images/collections/collection-65.jpg') }}"
                            src="{{ asset('frontend/images/collections/collection-65.jpg') }}" alt="collection-img">
                    </div>
                    <div class="tf-content-wrap text-center w-100 wow fadeInUp" data-wow-delay="0s">
                        <span class="sub-heading text-uppercase fw-7">GET YOUR FASHION FIX HERE</span>
                        <div class="heading">Spring Collections</div>
                        <p class="description">Shop our luxury silk button-up blouses made with ultra-soft, <br
                                class="d-none d-xl-block"> washable silk.</p>
                        <a href="shop-collection-list.html"
                            class="tf-btn style-2 btn-fill radius-3 animate-hover-btn">Shop collection</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Shop Collection -->
        <!-- Look book -->
        <section class="flat-spacing-13">
            <div class="container">
                <div class="flat-lookbook-v3 d-flex">
                    <div class="col-left w-50">
                        <div class="slider-wrap-lookbook">
                            <div class="inner-sw-lookbook">
                                <div class="flat-title-lookbook">
                                    <p class="label">BUNDLE AND SAVE</p>
                                    <h3 class="heading">Shop this look</h3>
                                </div>
                                <form class="">
                                    <div class="swiper tf-lookbook " data-preview="3" data-tablet="1" data-mobile="1"
                                        data-space-lg="0" data-space-md="0">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide" lazy="true">
                                                <div class="tf-bundle-product-item type-lg">
                                                    <div class="tf-product-bundle-image">
                                                        <a href="product-detail.html">
                                                            <img src="{{ asset('frontend/images/shop/products/hmgoepprod2.jpg') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="tf-product-bundle-infos">
                                                        <a href="product-detail.html"
                                                            class="tf-product-bundle-title">Patterned scarf</a>
                                                        <div class="tf-product-bundle-price">
                                                            <div class="price">$15.00</div>
                                                        </div>
                                                        <div class="tf-product-bundle-variant position-relative">
                                                            <select class="tf-select">
                                                                <option selected="selected">Beige / S</option>
                                                                <option>Beige / M</option>
                                                                <option>Beige / L</option>
                                                                <option>Beige / XL</option>
                                                                <option>Black / S</option>
                                                                <option>Black / M</option>
                                                                <option>Black / L</option>
                                                                <option>Black / XL</option>
                                                                <option>Blue / S</option>
                                                                <option>Blue / M</option>
                                                                <option>Blue / L</option>
                                                                <option>Blue / XL</option>
                                                                <option>White / S</option>
                                                                <option>White / M</option>
                                                                <option>White / L</option>
                                                                <option>White / XL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" lazy="true">
                                                <div class="tf-bundle-product-item type-lg">
                                                    <div class="tf-product-bundle-image">
                                                        <a href="product-detail.html">
                                                            <img src="{{ asset('frontend/images/shop/products/p-d3.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="tf-product-bundle-infos">
                                                        <span class="tf-product-bundle-title">Ribbed modal
                                                            T-shirt</span>
                                                        <div class="tf-product-bundle-price">
                                                            <div class="compare-at-price">$10.00</div>
                                                            <div class="price-on-sale">$8.00</div>
                                                        </div>
                                                        <div class="tf-product-bundle-variant position-relative">
                                                            <select class="tf-select">
                                                                <option selected="selected">Beige / S</option>
                                                                <option>Beige / M</option>
                                                                <option>Beige / L</option>
                                                                <option>Beige / XL</option>
                                                                <option>Black / S</option>
                                                                <option>Black / M</option>
                                                                <option>Black / L</option>
                                                                <option>Black / XL</option>
                                                                <option>Blue / S</option>
                                                                <option>Blue / M</option>
                                                                <option>Blue / L</option>
                                                                <option>Blue / XL</option>
                                                                <option>White / S</option>
                                                                <option>White / M</option>
                                                                <option>White / L</option>
                                                                <option>White / XL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide" lazy="true">
                                                <div class="tf-bundle-product-item type-lg">
                                                    <div class="tf-product-bundle-image">
                                                        <a href="product-detail.html">
                                                            <img src="{{ asset('frontend/images/shop/products/p-d1.png') }}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="tf-product-bundle-infos">
                                                        <span class="tf-product-bundle-title">Cotton jersey top</span>
                                                        <div class="tf-product-bundle-price">
                                                            <div class="compare-at-price">$10.00</div>
                                                            <div class="price-on-sale">$8.00</div>
                                                        </div>
                                                        <div class="tf-product-bundle-variant position-relative">
                                                            <select class="tf-select">
                                                                <option selected="selected">Beige / S</option>
                                                                <option>Beige / M</option>
                                                                <option>Beige / L</option>
                                                                <option>Beige / XL</option>
                                                                <option>Black / S</option>
                                                                <option>Black / M</option>
                                                                <option>Black / L</option>
                                                                <option>Black / XL</option>
                                                                <option>Blue / S</option>
                                                                <option>Blue / M</option>
                                                                <option>Blue / L</option>
                                                                <option>Blue / XL</option>
                                                                <option>White / S</option>
                                                                <option>White / M</option>
                                                                <option>White / L</option>
                                                                <option>White / XL</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="sw-dots style-2 sw-pagination-lookbook justify-content-center d-xl-none">
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="tf-btn w-100 justify-content-center style-2 btn-fill radius-3 animate-hover-btn">Add
                                        selected to cart - $48.00 USD</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-right w-50">
                        <div class="wrap-lookbook lookbook-sw">
                            <div class="image">
                                <img class="lazyload" data-src="{{ asset('frontend/images/shop/file/lookbook-6.jpg') }}"
                                    src="{{ asset('frontend/images/shop/file/lookbook-6.jpg') }}" alt="collection-img">
                            </div>
                            <div class="navigation-sw-dot type-black nav-next-lookbook"><span></span></div>
                            <div class="navigation-sw-dot type-black nav-prev-lookbook"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Look book -->
        <!-- Marquee -->
        <div class="tf-marquee marquee-lg line">
            <div class="wrap-marquee">
                <div class="marquee-item">
                    <p>Use <a href="#" title="#">code GET30</a> at checkout for 30% off your first order</p>
                </div>
                <div class="marquee-item">
                    <p>Use <a href="#" title="#">code GET30</a> at checkout for 30% off your first order</p>
                </div>
                <div class="marquee-item">
                    <p>Use <a href="#" title="#">code GET30</a> at checkout for 30% off your first order</p>
                </div>
            </div>
        </div>
        <!-- /Marquee -->
        <!-- Blogs post -->
        <section class="flat-spacing-14">
            <div class="container">
                <div class="flat-title wow fadeInUp" data-wow-delay="0s">
                    <span class="title">Blogs post</span>
                </div>
                <div class="hover-sw-nav view-default hover-sw-3">
                    <div class="swiper tf-sw-recent" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30"
                        data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1"
                        data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay="0s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-1.jpg') }}"
                                                src="{{ asset('frontend/images/blog/blog-1.jpg') }}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">Pop-punk is back in fashion</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".1s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-2.jpg') }}"
                                                src="{{ asset('frontend/images/blog/blog-2.jpg') }}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather
                                                alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".2s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-3.jpg') }}"
                                                src="{{ asset('frontend/images/blog/blog-3.jpg') }}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">An Exclusive Clothing Collaboration</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".3s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-4.jpg') }}"
                                                src="{{ asset('frontend/images/blog/blog-4.jpg') }}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather
                                                alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".4s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-5.jpg') }}"
                                                src="{{ asset('frontend/images/blog/blog-5.jpg') }}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather
                                                alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" lazy="true">
                                <div class="blog-article-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="article-thumb h-460 rounded-0">
                                        <a href="blog-detail.html">
                                            <img class="lazyload" data-src="{{ asset('frontend/images/blog/blog-6.jpg') }}"
                                                src="{{ asset('frontend/images/blog/blog-6.jpg') }}" alt="img-blog">
                                        </a>
                                        <div class="article-label">
                                            <a href="blog-grid.html"
                                                class="tf-btn btn-sm btn-fill animate-hover-btn">Accessories</a>
                                        </div>
                                    </div>
                                    <div class="article-content">
                                        <div class="article-title">
                                            <a href="blog-detail.html" class="">The next generation of leather
                                                alternatives</a>
                                        </div>
                                        <div class="article-btn">
                                            <a href="blog-detail.html" class="tf-btn btn-line fw-6">Read more<i
                                                    class="icon icon-arrow1-top-left"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="nav-sw nav-next-slider nav-next-recent box-icon w_46 round"><span
                            class="icon icon-arrow-left"></span></div>
                    <div class="nav-sw nav-prev-slider nav-prev-recent box-icon w_46 round"><span
                            class="icon icon-arrow-right"></span></div>
                    <div class="sw-dots style-2 sw-pagination-recent justify-content-center"></div>
                </div>
            </div>
        </section>
        <!-- /Blogs post -->
        <!-- Footer -->
        @include('frontend.components.footer')
        <!-- /Footer -->

    </div>
@endsection
