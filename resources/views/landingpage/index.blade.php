@extends('landingpage.master')

@section('title','Home')
@section('content')
<body>
    <!-- Quick view -->
    <div class="modal fade custom-modal" id="quickViewModal" tabindex="-1" aria-labelledby="quickViewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-gallery">
                                <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                <!-- MAIN SLIDES -->
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img id="photo" src=""
                                            alt="product image">
                                    </figure>
                                    
                                </div>
                               
                            </div>
                            <!-- End Gallery -->
                            
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="detail-info">
                                <h3 class="title-detail mt-30" id="barang">Colorful Pattern Shirts HD450</h3>
                                <div class="product-detail-rating">
                                    <div class="pro-details-brand">
                                        <span> Categori: <a href="shop-grid-right.html" id="categori"></a></span>
                                    </div>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                    </div>
                                </div>
                                <div class="clearfix product-price-cover">
                                    <div class="product-price primary-color float-left">
                                        <ins><span class="text-brand" id="harga"></span></ins>
                                    </div>
                                </div>
                                <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                                <div class="detail-extralink">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <span class="qty-val">1</span>
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                    <div class="product-extra-link2">
                                        <form action="#" id="form-cart">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="hidden" name="id_barang" id="id_barang">
                                            <button type="submit" class="button button-add-to-cart">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                <ul class="product-meta font-xs color-grey mt-20">
                                    <li>Availability:<span class="in-stock text-success ml-5" id="stok"></span>
                                    <li>Terjual:<span class="in-stock text-success ml-5" id="terjual"></span>
                                    </li>
                                </ul>
                            </div>
                            <!-- Detail Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header-area header-style-4 header-height-2">
        <div class="header-top header-top-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info">
                            <ul>
                                <li><i class="fi-rs-smartphone"></i> <a href="#">(+01) - 2345 - 6789</a></li>
                                <li><i class="fi-rs-marker"></i><a href="page-contact.html">Our location</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="text-center">
                            <div id="news-flash" class="d-inline-block">
                                <ul>
                                    <li>Get great devices up to 50% off <a href="shop-grid-right.html">View details</a>
                                    </li>
                                    <li>Supper Value Deals - Save more with coupons</li>
                                    <li>Trendy 25silver jewelry, save up 35% off today <a
                                            href="shop-grid-right.html">Shop now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="header-info header-info-right">
                            <ul>
                                <li>
                                    <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i>
                                        English <i class="fi-rs-angle-small-down"></i></a>
                                    <ul class="language-dropdown">
                                        <li><a href="#"><img
                                                    src="{{ asset('evara/assets/imgs/theme/flag-fr.png') }}"
                                                    alt="">Français</a></li>
                                        <li><a href="#"><img
                                                    src="{{ asset('evara/assets/imgs/theme/flag-dt.png') }}"
                                                    alt="">Deutsch</a></li>
                                        <li><a href="#"><img
                                                    src="{{ asset('evara/assets/imgs/theme/flag-ru.png') }}"
                                                    alt="">Pусский</a></li>
                                    </ul>
                                </li>
                                <li><i class="fi-rs-user"></i><a href="page-login-register.html">Log In / Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
            <div class="container">
                <div class="header-wrap">
                    <div class="logo logo-width-1">
                        <a href="index.html"><img src="{{ asset('evara') }}/assets/imgs/theme/logo.svg"
                                alt="logo"></a>
                    </div>
                    <div class="header-right">
                        <div class="search-style-2">
                            <form action="#">
                                <select class="select-active">
                                    <option>All Categories</option>
                                    <option>Women's</option>
                                    <option>Men's</option>
                                    <option>Cellphones</option>
                                    <option>Computer</option>
                                    <option>Electronics</option>
                                    <option> Accessories</option>
                                    <option>Home & Garden</option>
                                    <option>Luggage</option>
                                    <option>Shoes</option>
                                    <option>Mother & Kids</option>
                                </select>
                                <input type="text" placeholder="Search for items...">
                            </form>
                        </div>
                        <div class="header-action-right">
                            <div class="header-action-2">
                                <div class="header-action-icon-2">
                                    <a href="shop-wishlist.html">
                                        <img class="svgInject" alt="Evara"
                                            src="assets/imgs/theme/icons/icon-heart.svg">
                                        <span class="pro-count blue">4</span>
                                    </a>
                                </div>
                                <div class="header-action-icon-2">
                                    <a class="mini-cart-icon" href="shop-cart.html">
                                        <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                        <span class="pro-count blue">2</span>
                                    </a>
                                    <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                        <ul>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Evara"
                                                            src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                    <h4><span>1 × </span>$800.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="shopping-cart-img">
                                                    <a href="shop-product-right.html"><img alt="Evara"
                                                            src="assets/imgs/shop/thumbnail-2.jpg"></a>
                                                </div>
                                                <div class="shopping-cart-title">
                                                    <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                    <h4><span>1 × </span>$3200.00</h4>
                                                </div>
                                                <div class="shopping-cart-delete">
                                                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-footer">
                                            <div class="shopping-cart-total">
                                                <h4>Total <span>$4000.00</span></h4>
                                            </div>
                                            <div class="shopping-cart-button">
                                                <a href="shop-cart.html" class="outline">View cart</a>
                                                <a href="shop-checkout.html">Checkout</a>
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
        <div class="header-bottom header-bottom-bg-color sticky-bar">
            <div class="container">
                <div class="header-wrap header-space-between position-relative">
                    <div class="logo logo-width-1 d-block d-lg-none">
                        <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                    </div>
                    <div class="header-nav d-none d-lg-flex">
                        <div class="main-categori-wrap d-none d-lg-block">
                            <a class="categori-button-active" href="#">
                                <span class="fi-rs-apps"></span> Browse Categories
                            </a>
                            <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                <ul>
                                    <li class="has-children">
                                        <a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's
                                            Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Dresses</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Blouses & Shirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Hoodies & Sweatshirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Women's Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suits & Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Bodysuits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Tanks & Camis</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Coats & Jackets</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Bottoms</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Leggings</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Skirts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Shorts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Jeans</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Pants & Capris</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Bikini Sets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Cover-Ups</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Swimwear</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-2.jpg"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-3.jpg"
                                                            alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's
                                            Clothing</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Jackets & Coats</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Down Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Parkas</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Faux Leather Coats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Trench</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Wool & Blends</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vests & Waistcoats</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Leather Coats</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Suits & Blazers</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Blazers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suit Jackets</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suit Pants</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Vests</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Tailor-made Suits</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Cover-Ups</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-4.jpg"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="has-children">
                                        <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i>
                                            Cellphones</a>
                                        <div class="dropdown-menu">
                                            <ul class="mega-menu d-lg-flex">
                                                <li class="mega-menu-col col-lg-7">
                                                    <ul class="d-lg-flex">
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Hot & Trending</span>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Cellphones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">iPhones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Refurbished Phones</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Mobile Phone</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Mobile Phone Parts</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Phone Bags & Cases</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Communication Equipments</a>
                                                                </li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Walkie Talkie</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-6">
                                                            <ul>
                                                                <li><span class="submenu-title">Accessories</span></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Screen Protectors</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Wire Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Wireless Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Car Chargers</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Power Bank</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Armbands</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Dust Plug</a></li>
                                                                <li><a class="dropdown-item nav-link nav_item"
                                                                        href="#">Signal Boosters</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="mega-menu-col col-lg-5">
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-5.jpg"
                                                            alt="menu_banner1">
                                                        <div class="banne_info">
                                                            <h6>10% Off</h6>
                                                            <h4>New Arrival</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="header-banner2">
                                                        <img src="assets/imgs/banner/menu-banner-6.jpg"
                                                            alt="menu_banner2">
                                                        <div class="banne_info">
                                                            <h6>15% Off</h6>
                                                            <h4>Hot Deals</h4>
                                                            <a href="#">Shop now</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer &
                                            Office</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer
                                            Electronics</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Jewelry &
                                            Accessories</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home &
                                            Garden</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a>
                                    </li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother &
                                            Kids</a></li>
                                    <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a>
                                    </li>
                                    <li>
                                        <ul class="more_slide_open" style="display: none;">
                                            <li><a href="shop-grid-right.html"><i
                                                        class="evara-font-desktop"></i>Beauty, Health</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Bags and
                                                    Shoes</a></li>
                                            <li><a href="shop-grid-right.html"><i
                                                        class="evara-font-diamond"></i>Consumer Electronics</a></li>
                                            <li><a href="shop-grid-right.html"><i
                                                        class="evara-font-home"></i>Automobiles & Motorcycles</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="more_categories">Show more...</div>
                            </div>
                        </div>
                        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                            <nav>
                                <ul>
                                    <li><a class="active" href="index.html">Home <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                            <li><a href="index-3.html">Home 3</a></li>
                                            <li><a href="index-4.html">Home 4</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page-about.html">About</a>
                                    </li>
                                    <li><a href="shop-grid-right.html">Shop <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                            <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                            <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                            <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                            <li><a href="#">Single Product <i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu">
                                                    <li><a href="shop-product-right.html">Product – Right Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-product-left.html">Product – Left Sidebar</a>
                                                    </li>
                                                    <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-filter.html">Shop – Filter</a></li>
                                            <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                            <li><a href="shop-cart.html">Shop – Cart</a></li>
                                            <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                            <li><a href="shop-compare.html">Shop – Compare</a></li>
                                        </ul>
                                    </li>
                                    <li class="position-static"><a href="#">Mega menu <i
                                                class="fi-rs-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Women's Fashion</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Dresses</a></li>
                                                    <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                                    <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a>
                                                    </li>
                                                    <li><a href="shop-product-right.html">Wedding Dresses</a></li>
                                                    <li><a href="shop-product-right.html">Prom Dresses</a></li>
                                                    <li><a href="shop-product-right.html">Cosplay Costumes</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Men's Fashion</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Jackets</a></li>
                                                    <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                                    <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                                    <li><a href="shop-product-right.html">Casual Pants</a></li>
                                                    <li><a href="shop-product-right.html">Sweatpants</a></li>
                                                    <li><a href="shop-product-right.html">Harem Pants</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-22">
                                                <a class="menu-title" href="#">Technology</a>
                                                <ul>
                                                    <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                                    <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                                    <li><a href="shop-product-right.html">Tablets</a></li>
                                                    <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                                    <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                                </ul>
                                            </li>
                                            <li class="sub-mega-menu sub-mega-menu-width-34">
                                                <div class="menu-banner-wrap">
                                                    <a href="shop-product-right.html"><img
                                                            src="assets/imgs/banner/menu-banner.jpg"
                                                            alt="Evara"></a>
                                                    <div class="menu-banner-content">
                                                        <h4>Hot deals</h4>
                                                        <h3>Don't miss<br> Trending</h3>
                                                        <div class="menu-banner-price">
                                                            <span class="new-price text-success">Save to 50%</span>
                                                        </div>
                                                        <div class="menu-banner-btn">
                                                            <a href="shop-product-right.html">Shop now</a>
                                                        </div>
                                                    </div>
                                                    <div class="menu-banner-discount">
                                                        <h3>
                                                            <span>35%</span>
                                                            off
                                                        </h3>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-category-grid.html">Blog <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                            <li><a href="blog-category-list.html">Blog Category List</a></li>
                                            <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                            <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                            <li><a href="#">Single Post <i class="fi-rs-angle-right"></i></a>
                                                <ul class="level-menu level-menu-modify">
                                                    <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages <i class="fi-rs-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="page-about.html">About Us</a></li>
                                            <li><a href="page-contact.html">Contact</a></li>
                                            <li><a href="page-account.html">My Account</a></li>
                                            <li><a href="page-login-register.html">login/register</a></li>
                                            <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                            <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="page-terms.html">Terms of Service</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="page-contact.html">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="hotline d-none d-lg-block">
                        <p><i class="fi-rs-headset"></i><span>Hotline</span> 1900 - 888 </p>
                    </div>
                    <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%
                    </p>
                    <div class="header-action-right d-block d-lg-none">
                        <div class="header-action-2">
                            <div class="header-action-icon-2">
                                <a href="shop-wishlist.html">
                                    <img alt="Evara" src="assets/imgs/theme/icons/icon-heart.svg">
                                    <span class="pro-count white">4</span>
                                </a>
                            </div>
                            <div class="header-action-icon-2">
                                <a class="mini-cart-icon" href="shop-cart.html">
                                    <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg">
                                    <span class="pro-count white">2</span>
                                </a>
                                <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                    <ul>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara"
                                                        src="assets/imgs/shop/thumbnail-3.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                <h3><span>1 × </span>$800.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="shopping-cart-img">
                                                <a href="shop-product-right.html"><img alt="Evara"
                                                        src="assets/imgs/shop/thumbnail-4.jpg"></a>
                                            </div>
                                            <div class="shopping-cart-title">
                                                <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                <h3><span>1 × </span>$3500.00</h3>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="fi-rs-cross-small"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-footer">
                                        <div class="shopping-cart-total">
                                            <h4>Total <span>$383.00</span></h4>
                                        </div>
                                        <div class="shopping-cart-button">
                                            <a href="shop-cart.html">View cart</a>
                                            <a href="shop-checkout.html">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-action-icon-2 d-block d-lg-none">
                                <div class="burger-icon burger-icon-white">
                                    <span class="burger-icon-top"></span>
                                    <span class="burger-icon-mid"></span>
                                    <span class="burger-icon-bottom"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="mobile-header-active mobile-header-wrapper-style">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="mobile-header-logo">
                    <a href="index.html"><img src="assets/imgs/theme/logo.svg" alt="logo"></a>
                </div>
                <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                    <button class="close-style search-close">
                        <i class="icon-top"></i>
                        <i class="icon-bottom"></i>
                    </button>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="mobile-search search-style-3 mobile-header-border">
                    <form action="#">
                        <input type="text" placeholder="Search for items…">
                        <button type="submit"><i class="fi-rs-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-wrap mobile-header-border">
                    <div class="main-categori-wrap mobile-header-border">
                        <a class="categori-button-active-2" href="#">
                            <span class="fi-rs-apps"></span> Browse Categories
                        </a>
                        <div class="categori-dropdown-wrap categori-dropdown-active-small">
                            <ul>
                                <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's
                                        Clothing</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a>
                                </li>
                                <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i>
                                        Cellphones</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer &
                                        Office</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer
                                        Electronics</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a>
                                </li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother &
                                        Kids</a></li>
                                <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- mobile menu start -->
                    <nav>
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="index.html">Home</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home 1</a></li>
                                    <li><a href="index-2.html">Home 2</a></li>
                                    <li><a href="index-3.html">Home 3</a></li>
                                    <li><a href="index-4.html">Home 4</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="shop-grid-right.html">shop</a>
                                <ul class="dropdown">
                                    <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                    <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                    <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                    <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Single Product</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                            <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                            <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-filter.html">Shop – Filter</a></li>
                                    <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                    <li><a href="shop-cart.html">Shop – Cart</a></li>
                                    <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                    <li><a href="shop-compare.html">Shop – Compare</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Mega menu</a>
                                <ul class="dropdown">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Women's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Dresses</a></li>
                                            <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                            <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                            <li><a href="shop-product-right.html">Women's Sets</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Men's Fashion</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Jackets</a></li>
                                            <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                            <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Technology</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                            <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                            <li><a href="shop-product-right.html">Tablets</a></li>
                                            <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                            <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="blog-category-fullwidth.html">Blog</a>
                                <ul class="dropdown">
                                    <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                    <li><a href="blog-category-list.html">Blog Category List</a></li>
                                    <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                    <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                            href="#">Single Product Layout</a>
                                        <ul class="dropdown">
                                            <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                            <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                            <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact</a></li>
                                    <li><a href="page-account.html">My Account</a></li>
                                    <li><a href="page-login-register.html">login/register</a></li>
                                    <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                    <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="page-terms.html">Terms of Service</a></li>
                                    <li><a href="page-404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                    href="#">Language</a>
                                <ul class="dropdown">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                    <li><a href="#">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </div>
                <div class="mobile-header-info-wrap mobile-header-border">
                    <div class="single-mobile-header-info mt-30">
                        <a href="page-contact.html"> Our location </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="page-login-register.html">Log In / Sign Up </a>
                    </div>
                    <div class="single-mobile-header-info">
                        <a href="#">(+01) - 2345 - 6789 </a>
                    </div>
                </div>
                <div class="mobile-social-icon">
                    <h5 class="mb-15 text-grey-4">Follow Us</h5>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-facebook.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-twitter.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-instagram.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-pinterest.svg"
                            alt=""></a>
                    <a href="#"><img src="{{ asset('evara') }}/assets/imgs/theme/icons/icon-youtube.svg"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="container">
                <div class="home-slide-cover bg-grey-10 mt-30">
                    <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                        <div class="single-hero-slider single-animation-wrap">
                            <div class="container">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="hero-slider-content-2">
                                            <h4 class="animated">Trade-In Offer</h4>
                                            <h3 class="animated fw-900">Supper Value Deals</h3>
                                            <h2 class="animated fw-900 text-brand">On All Products</h2>
                                            <p class="animated">Save more with coupons & up to 70% off</p>
                                            <a class="animated btn btn-brush btn-brush-3"
                                                href="shop-product-right.html" tabindex="0"> Shop Now </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="single-slider-img single-slider-img-1">
                                            <img class="animated"
                                                src="{{ asset('evara') }}/assets/imgs/slider/slider-6.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-hero-slider single-animation-wrap">
                            <div class="container">
                                <div class="row align-items-center slider-animated-1">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="hero-slider-content-2">
                                            <h4 class="animated">Hot promotions</h4>
                                            <h3 class="animated fw-900">Fashion Trending</h3>
                                            <h2 class="animated fw-900 text-brand">Great Collection</h2>
                                            <p class="animated">Save more with coupons & up to 20% off</p>
                                            <a class="animated btn btn-brush btn-brush-1"
                                                href="shop-product-right.html" tabindex="0"> Get It Now </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-6">
                                        <div class="single-slider-img single-slider-img-1">
                                            <img class="animated"
                                                src="{{ asset('evara') }}/assets/imgs/slider/slider-7.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-arrow hero-slider-1-arrow"></div>
                </div>
            </div>
        </section>
        <section class="banners mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('evara') }}/assets/imgs/banner/banner-1.png" alt="">
                            <div class="banner-text">
                                <span>Smart Offer</span>
                                <h4>Save 20% on <br>Woman Bag</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow fadeIn animated">
                            <img src="{{ asset('evara') }}/assets/imgs/banner/banner-2.png" alt="">
                            <div class="banner-text">
                                <span>Sale off</span>
                                <h4>Great Summer <br>Collection</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img wow fadeIn animated  mb-sm-0">
                            <img src="{{ asset('evara') }}/assets/imgs/banner/banner-3.png" alt="">
                            <div class="banner-text">
                                <span>New Arrivals</span>
                                <h4>Shop Today’s <br>Deals & Offers</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-tabs pt-25 pb-20 wow fadeIn animated">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Category</h5>
                            <ul class="categories">
                                @foreach ($categori as $item)
                                    <li><a href="shop-grid-right.html">{{ $item->nama }}</a></li>
                                @endforeach
                                
                               
                            </ul>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Sort by</h5>
                            <ul class="categories">
                                <li><a href="shop-grid-right.html">Popularity</a></li>
                                <li><a href="shop-grid-right.html">Average rating</a></li>
                                <li><a href="shop-grid-right.html">Price: Low to High</a></li>
                                <li><a href="shop-grid-right.html">Price: High to Low</a></li>
                            </ul>
                        </div>
                        <div class="widget-category mb-30">
                            <h5 class="section-title style-1 mb-30 wow fadeIn animated">Price Range</h5>
                            <ul class="categories">
                                <li><a href="shop-grid-right.html">$0-$200</a></li>
                                <li><a href="shop-grid-right.html">$200-$400</a></li>
                                <li><a href="shop-grid-right.html">$400-$600</a></li>
                                <li><a href="shop-grid-right.html">$600-$800</a></li>
                                <li><a href="shop-grid-right.html">800$+</a></li>
                            </ul>
                        </div>
                        <div class="banner-img wow fadeIn mb-45mb-lg-0 animated d-lg-block d-none">
                            <img src="{{ asset('evara') }}/assets/imgs/banner/banner-11.jpg" alt="">
                            <div class="banner-text">
                                <span>Women Zone</span>
                                <h4>Save 17% on <br>Office Dress</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-header">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab"
                                        data-bs-target="#tab-one" type="button" role="tab"
                                        aria-controls="tab-one" aria-selected="true">Featured</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab"
                                        data-bs-target="#tab-two" type="button" role="tab"
                                        aria-controls="tab-two" aria-selected="false">Popular</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab"
                                        data-bs-target="#tab-three" type="button" role="tab"
                                        aria-controls="tab-three" aria-selected="false">New added</button>
                                </li>
                            </ul>
                            <a href="#" class="view-more d-none d-md-flex">View More<i
                                    class="fi-rs-angle-double-small-right"></i></a>
                        </div>
                        <!--End nav-tabs-->
                        <div class="tab-content wow fadeIn animated" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-one" role="tabpanel"
                                aria-labelledby="tab-one">
                                <div class="row product-grid-4">
                                    @foreach ($barang as $i)
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('storage/'.$i->photo) }}"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('storage/'.$i->photo) }}"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" id="show" data-bs-target="#quickViewModal"
                                                        data-id="{{ $i->id }}"
                                                        data-namabarang="{{ $i->nama_barang }}"
                                                        data-photo="{{ asset('storage/'.$i->photo) }}"
                                                        data-harga="{{ $i->harga }}"
                                                        data-stok="{{ $i->stok }}"
                                                        data-categori="{{ $i->categori->nama }}"
                                                        data-terjual="{{ $i->jumlah_terjual }}"
                                                        ><i
                                                            class="fa-solid fa-basket-shopping"></i></a>
                                                    
                                                    
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">{{$i->categori->nama}}</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">{{$i->categori->nama}}</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">{{$i->nama_barang}}</a></h2>
                                                
                                                <div class="product-price">
                                                    <span>{{ $i->harga }} </span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                    @endforeach
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Clothing</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Plain Color Pocket Shirts</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>50%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$255.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Shirts</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Vintage Floral Oil Shirts</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>95%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$338.85 </span>
                                                    <span class="old-price">$445.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Clothing</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Colorful Hawaiian Shirts</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$123.85 </span>
                                                    <span class="old-price">$235.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-5-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-5-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Shirt</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Flowers Sleeve Lapel Shirt</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$28.85 </span>
                                                    <span class="old-price">$45.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-6-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-6-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-22%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Shirts</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Ethnic Floral Casual Shirts</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Shoes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Stitching Hole Sandals</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>98%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$1275.85 </span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-8-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-8-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Shirt</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Mens Porcelain Shirt</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Shirt</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Mens Porcelain Shirt</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab one (Featured)-->
                            <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="row product-grid-4">
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Donec </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Lorem ipsum dolor</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>90%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-10-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-10-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Music</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Sed tincidunt interdum</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>50%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$255.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-11-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-11-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Fusce metus orci</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>95%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$338.85 </span>
                                                    <span class="old-price">$445.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Fusce metus orci</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>95%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$338.85 </span>
                                                    <span class="old-price">$445.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-12-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-12-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Music</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Integer venenatis libero</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$123.85 </span>
                                                    <span class="old-price">$235.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-13-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-13-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Speaker</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cras tempor orci id</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$28.85 </span>
                                                    <span class="old-price">$45.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-14-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-14-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-22%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Camera</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Nullam cursus mi qui</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Phone</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Fusce fringilla ultrices</a>
                                                </h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>98%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$1275.85 </span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-1-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-1-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Accessories </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Sed sollicitudin est</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab two (Popular)-->
                            <div class="tab-pane fade" id="tab-three" role="tabpanel"
                                aria-labelledby="tab-three">
                                <div class="row product-grid-4">
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Music</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Donec ut nisl rutrum</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>90%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Music</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Nullam dapibus pharetra</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>50%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$255.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-13-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-13-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Music</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Nullam dapibus pharetra</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>50%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$255.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Morbi dictum finibus</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>95%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$338.85 </span>
                                                    <span class="old-price">$445.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-5-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-5-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Music</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Nunc volutpat massa</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$123.85 </span>
                                                    <span class="old-price">$235.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-6-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-6-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-30%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Speaker</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Nullam ultricies luctus</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$28.85 </span>
                                                    <span class="old-price">$45.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-22%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Camera</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Nullam mattis enim</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-8-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-8-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Phone</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Vivamus sollicitudin</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>98%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$1275.85 </span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-1.jpg"
                                                            alt="">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal"><i
                                                            class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist" class="action-btn hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Accessories </a>
                                                </div>
                                                <h2><a href="shop-product-right.html"> Donec ut nisl rutrum</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab three (New added)-->
                        </div>
                        <!--End tab-content-->
                    </div>
                </div>
            </div>
        </section>
        <section class="banner-2 section-padding pb-0">
            <div class="container">
                <div class="banner-img banner-big wow fadeIn animated f-none">
                    <img src="{{ asset('evara') }}/assets/imgs/banner/banner-4.png" alt="">
                    <div class="banner-text d-md-block d-none">
                        <h4 class="mb-15 mt-40 text-brand">Repair Services</h4>
                        <h1 class="fw-600 mb-20">We're an Apple <br>Authorised Service Provider</h1>
                        <a href="shop-grid-right.html" class="btn">Learn More <i
                                class="fi-rs-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <section class="popular-categories section-padding mt-15">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>Popular</span> Categories</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                        id="carausel-6-columns-arrows"></div>
                    <div class="carausel-6-columns" id="carausel-6-columns">
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-1.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">T-Shirt</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"> <img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-2.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Bags</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-3.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Sandan</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-4.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Scarf Cap</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-5.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Shoes</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-6.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Pillowcase</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-7.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Jumpsuits</a></h5>
                        </div>
                        <div class="card-1">
                            <figure class=" img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img
                                        src="{{ asset('evara') }}/assets/imgs/shop/category-thumb-8.jpg"
                                        alt=""></a>
                            </figure>
                            <h5><a href="shop-grid-right.html">Hats</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deals section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0"
                            style="background-image: url('{{ asset('evara') }}/assets/imgs/banner/menu-banner-7.jpg');">
                            <div class="deal-top">
                                <h2 class="text-brand">Deal of the Day.</h2>
                                <h5>Limited quantities.</h5>
                            </div>
                            <div class="deal-content">
                                <h6 class="product-title"><a href="shop-product-right.html">Summer Collection New
                                        Morden Design</a></h6>
                                <div class="product-price"><span class="new-price">$139.00</span><span
                                        class="old-price">$160.99</span></div>
                            </div>
                            <div class="deal-bottom">
                                <p>Hurry Up! Offer End In:</p>
                                <div class="deals-countdown" data-countdown="2025/03/25 00:00:00"></div>
                                <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 deal-co">
                        <div class="deal wow fadeIn animated"
                            style="background-image: url('{{ asset('evara') }}/assets/imgs/banner/menu-banner-8.jpg');">
                            <div class="deal-top">
                                <h2 class="text-success">Men Clothing</h2>
                                <h5>Shirt & Bag</h5>
                            </div>
                            <div class="deal-content">
                                <h6 class="product-title"><a href="shop-product-right.html">Try something new on
                                        vacation</a></h6>
                                <div class="product-price"><span class="new-price">$178.00</span><span
                                        class="old-price">$256.99</span></div>
                            </div>
                            <div class="deal-bottom">
                                <p>Hurry Up! Offer End In:</p>
                                <div class="deals-countdown" data-countdown="2026/03/25 00:00:00"></div>
                                <a href="shop-grid-right.html" class="btn hover-up">Shop Now <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-25 pb-15">
            <div class="container wow fadeIn animated">
                <h3 class="section-title mb-20"><span>New</span> Arrivals</h3>
                <div class="carausel-6-columns-cover position-relative">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                        id="carausel-6-columns-2-arrows"></div>
                    <div class="carausel-6-columns carausel-arrow-center" id="carausel-6-columns-2">
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Lorem ipsum dolor</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Aliquam posuere</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$173.85 </span>
                                    <span class="old-price">$185.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Sed dapibus orci</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$215.85 </span>
                                    <span class="old-price">$235.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">.33%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Donec congue</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$83.8 </span>
                                    <span class="old-price">$125.2</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-9-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">-25%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Curabitur porta</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$1238.85 </span>
                                    <span class="old-price">$1245.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Praesent maximus</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$123 </span>
                                    <span class="old-price">$156</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                        <div class="product-cart-wrap small hover-up">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-1-1.jpg"
                                            alt="">
                                        <img class="hover-img"
                                            src="{{ asset('evara') }}/assets/imgs/shop/product-1-2.jpg"
                                            alt="">
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                        <i class="fi-rs-eye"></i></a>
                                    <a aria-label="Add To Wishlist" class="action-btn small hover-up"
                                        href="shop-wishlist.html" tabindex="0"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn small hover-up"
                                        href="shop-compare.html" tabindex="0"><i class="fi-rs-shuffle"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <h2><a href="shop-product-right.html">Vestibulum ante</a></h2>
                                <div class="rating-result" title="90%">
                                    <span>
                                    </span>
                                </div>
                                <div class="product-price">
                                    <span>$238.85 </span>
                                    <span class="old-price">$245.8</span>
                                </div>
                            </div>
                        </div>
                        <!--End product-cart-wrap-2-->
                    </div>
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container pb-20">
                <h3 class="section-title mb-20 wow fadeIn animated"><span>Featured</span> Brands</h3>
                <div class="carausel-6-columns-cover position-relative wow fadeIn animated">
                    <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow"
                        id="carausel-6-columns-3-arrows"></div>
                    <div class="carausel-6-columns text-center" id="carausel-6-columns-3">
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-1.png"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-2.png"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-3.png"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-4.png"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-5.png"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-6.png"
                                alt="">
                        </div>
                        <div class="brand-logo">
                            <img class="img-grey-hover" src="{{ asset('evara') }}/assets/imgs/banner/brand-3.png"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-grey-9 section-padding">
            <div class="container pt-15 pb-25">
                <div class="heading-tab d-flex">
                    <div class="heading-tab-left wow fadeIn animated">
                        <h3 class="section-title mb-20"><span>Monthly</span> Best Sell</h3>
                    </div>
                    <div class="heading-tab-right wow fadeIn animated">
                        <ul class="nav nav-tabs right no-border" id="myTab-1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="nav-tab-one-1" data-bs-toggle="tab"
                                    data-bs-target="#tab-one-1" type="button" role="tab"
                                    aria-controls="tab-one" aria-selected="true">Featured</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-two-1" data-bs-toggle="tab"
                                    data-bs-target="#tab-two-1" type="button" role="tab"
                                    aria-controls="tab-two" aria-selected="false">Popular</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="nav-tab-three-1" data-bs-toggle="tab"
                                    data-bs-target="#tab-three-1" type="button" role="tab"
                                    aria-controls="tab-three" aria-selected="false">New added</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-none d-lg-flex">
                        <div class="banner-img style-2 wow fadeIn animated">
                            <img src="{{ asset('evara') }}/assets/imgs/banner/banner-9.jpg" alt="">
                            <div class="banner-text">
                                <span>Woman Area</span>
                                <h4 class="mt-5">Save 17% on <br>Clothing</h4>
                                <a href="shop-grid-right.html" class="text-white">Shop Now <i
                                        class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="tab-content wow fadeIn animated" id="myTabContent-1">
                            <div class="tab-pane fade show active" id="tab-one-1" role="tabpanel"
                                aria-labelledby="tab-one-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-1-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-1-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Nulla</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Maecenas eget</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-2-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Duis </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Luctus suscipit</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-3-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Fusce </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Aliquam ac</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-4-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Nunc </a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Fusce et ligula</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-11-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-11-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Aliquam</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Morbi lacinia</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End tab-pane-->
                            <div class="tab-pane fade" id="tab-two-1" role="tabpanel"
                                aria-labelledby="tab-two-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-2-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-2">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-6-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-6-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed 2</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-7-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-5-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-5-1.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Hugy Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-10-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-10-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-12-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-12-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-three-1" role="tabpanel"
                                aria-labelledby="tab-three-1">
                                <div class="carausel-4-columns-cover arrow-center position-relative">
                                    <div class="slider-arrow slider-arrow-2 carausel-4-columns-arrow"
                                        id="carausel-4-columns-3-arrows"></div>
                                    <div class="carausel-4-columns carausel-arrow-center" id="carausel-4-columns-3">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-8-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-8-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-13-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-13-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$138.85 </span>
                                                    <span class="old-price">$145.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-14-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-14-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">Best Sell</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Hugy Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$152.85 </span>
                                                    <span class="old-price">$156.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-15-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">-12%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Smart Speaker</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-11-1.jpg"
                                                            alt="">
                                                        <img class="hover-img"
                                                            src="{{ asset('evara') }}/assets/imgs/shop/product-11-2.jpg"
                                                            alt="">
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Quick view" class="action-btn small hover-up"
                                                        data-bs-toggle="modal" data-bs-target="#quickViewModal">
                                                        <i class="fi-rs-eye"></i></a>
                                                    <a aria-label="Add To Wishlist"
                                                        class="action-btn small hover-up"
                                                        href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn small hover-up"
                                                        href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                </div>
                                                <div
                                                    class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Watch</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Cotton Leaf Printed</a></h2>
                                                <div class="rating-result" title="90%">
                                                    <span>
                                                        <span>70%</span>
                                                    </span>
                                                </div>
                                                <div class="product-price">
                                                    <span>$238.85 </span>
                                                    <span class="old-price">$245.8</span>
                                                </div>
                                                <div class="product-action-1 show">
                                                    <a aria-label="Add To Cart" class="action-btn hover-up"
                                                        href="shop-cart.html"><i
                                                            class="fi-rs-shopping-bag-add"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End tab-content-->
                    </div>
                    <!--End Col-lg-9-->
                </div>
            </div>
        </section>
        <section class="section-padding">
            <div class="container pt-25 pb-20">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="section-title mb-20"><span>From</span> blog</h3>
                        <div class="post-list mb-4 mb-lg-0">
                            <article class="wow fadeIn animated">
                                <div class="d-md-flex d-block">
                                    <div class="post-thumb d-flex mr-15">
                                        <a class="color-white" href="blog-post-fullwidth.html">
                                            <img src="{{ asset('evara') }}/assets/imgs/blog/blog-2.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta mb-10 mt-10">
                                            <a class="entry-meta meta-2" href="blog-category-fullwidth.html"><span
                                                    class="post-in font-x-small">Fashion</span></a>
                                        </div>
                                        <h4 class="post-title mb-25 text-limit-2-row">
                                            <a href="blog-post-fullwidth.html">Qualcomm is developing a Nintendo
                                                Switch-like console, report says</a>
                                        </h4>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on">14 April 2022</span>
                                                <span class="hit-count has-dot">12M Views</span>
                                            </div>
                                            <a href="blog-post-right.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="wow fadeIn animated">
                                <div class="d-md-flex d-block">
                                    <div class="post-thumb d-flex mr-15">
                                        <a class="color-white" href="blog-post-fullwidth.html">
                                            <img src="{{ asset('evara') }}/assets/imgs/blog/blog-1.jpg"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <div class="entry-meta mb-10 mt-10">
                                            <a class="entry-meta meta-2" href="blog-category-fullwidth.html"><span
                                                    class="post-in font-x-small">Healthy</span></a>
                                        </div>
                                        <h4 class="post-title mb-25 text-limit-2-row">
                                            <a href="blog-post-fullwidth.html">Not even the coronavirus can derail
                                                5G's global momentum</a>
                                        </h4>
                                        <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                            <div>
                                                <span class="post-on">14 April 2022</span>
                                                <span class="hit-count has-dot">12M Views</span>
                                            </div>
                                            <a href="blog-post-right.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="banner-img banner-1 wow fadeIn animated">
                                    <img src="{{ asset('evara') }}/assets/imgs/banner/banner-5.jpg"
                                        alt="">
                                    <div class="banner-text">
                                        <span>Accessories</span>
                                        <h4>Save 17% on <br>Autumn Hat</h4>
                                        <a href="shop-grid-right.html">Shop Now <i
                                                class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="banner-img mb-15 wow fadeIn animated">
                                    <img src="{{ asset('evara') }}/assets/imgs/banner/banner-6.jpg"
                                        alt="">
                                    <div class="banner-text">
                                        <span>Big Offer</span>
                                        <h4>Save 20% on <br>Women's socks</h4>
                                        <a href="shop-grid-right.html">Shop Now <i
                                                class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="banner-img banner-2 wow fadeIn animated">
                                    <img src="{{ asset('evara') }}/assets/imgs/banner/banner-7.jpg"
                                        alt="">
                                    <div class="banner-text">
                                        <span>Smart Offer</span>
                                        <h4>Save 20% on <br>Eardrop</h4>
                                        <a href="shop-grid-right.html">Shop Now <i
                                                class="fi-rs-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="banner-bg wow fadeIn animated"
                            style="background-image: url('{{ asset('evara') }}/assets/imgs/banner/banner-8.jpg')">
                            <div class="banner-content">
                                <h5 class="text-grey-4 mb-15">Shop Today’s Deals</h5>
                                <h2 class="fw-600">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up
                                    to 40%</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <div class="banner-img wow fadeIn animated mb-md-4 mb-lg-0">
                            <img src="{{ asset('evara') }}/assets/imgs/banner/banner-10.jpg" alt="">
                            <div class="banner-text">
                                <span>Shoes Zone</span>
                                <h4>Save 17% on <br>All Items</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Deals & Outlet</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-3.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Fish Print Patched T-shirt</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-4.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Vintage Floral Print Dress</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-5.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Multi-color Stripe Circle Print T-Shirt</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-sm-5 mb-md-0">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Top Selling</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-6.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Geometric Printed Long Sleeve Blosue</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-7.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Print Patchwork Maxi Dress</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-8.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Daisy Floral Print Straps Jumpsuit</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title style-1 mb-30 wow fadeIn animated">Hot Releases</h4>
                        <div class="product-list-small wow fadeIn animated">
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-9.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Floral Print Casual Cotton Dress</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-1.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Ruffled Solid Long Sleeve Blouse</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                            <article class="row align-items-center">
                                <figure class="col-md-4 mb-0">
                                    <a href="shop-product-right.html"><img
                                            src="{{ asset('evara') }}/assets/imgs/shop/thumbnail-2.jpg"
                                            alt=""></a>
                                </figure>
                                <div class="col-md-8 mb-0">
                                    <h4 class="title-small">
                                        <a href="shop-product-right.html">Multi-color Print V-neck T-Shirt</a>
                                    </h4>
                                    <div class="product-price">
                                        <span>$238.85 </span>
                                        <span class="old-price">$245.8</span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured section-padding">
            <div class="container pb-25">
                <div class="row">
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('evara') }}/assets/imgs/theme/icons/feature-1.png" alt="">
                            <h4 class="bg-1">Free Shipping</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('evara') }}/assets/imgs/theme/icons/feature-2.png" alt="">
                            <h4 class="bg-3">Online Order</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('evara') }}/assets/imgs/theme/icons/feature-3.png" alt="">
                            <h4 class="bg-2">Save Money</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('evara') }}/assets/imgs/theme/icons/feature-4.png" alt="">
                            <h4 class="bg-4">Promotions</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('evara') }}/assets/imgs/theme/icons/feature-5.png" alt="">
                            <h4 class="bg-5">Happy Sell</h4>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
                        <div class="banner-features wow fadeIn animated hover-up">
                            <img src="{{ asset('evara') }}/assets/imgs/theme/icons/feature-6.png" alt="">
                            <h4 class="bg-6">24/7 Support</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection
