<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>Plant Nest || Get a beloved plant today</title>
        <meta name="description" content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
        <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, beds cabinets, Outdoor plants and seating., chests, clocks, desks, tables, dressers, cupboards accessories, desks, plastic, restaurant accessories"/>
        <meta name="author" content="Webtemplate">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="{{asset('assets/image/favicon/favicon.png')}}">
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- owl carousel -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.theme.default.min.css')}}">
        <!-- swiper slider -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/swiper-bundle.min.css')}}">
        <!-- magnific-popup css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
        <!-- aniamte css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.min.css')}}">
        <!-- font awsome -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/all.min.css')}}">
        <!-- feather -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/feather.css')}}">
        <!-- slick css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">
        <!-- collection css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/collection.css')}}">
        <!-- blog css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/blog.css')}}">
        <!-- other page css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/other-page.css')}}">
        <!-- custom css -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        @livewireStyles()
    </head>
    <body>
        <!-- popup start -->
        {{-- <div class="modal fade popup-wrapper" id="popup">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-bs-dismiss="modal"><i class="feather-x"></i></button>
                        <div class="newsletter-info">
                            <div class="newsletter-image">
                                <!-- popup-img start -->
                                <img src="{{asset('assets/image/newsletter/popup.jpg')}}" class="img-fluid" alt="popup">
                                <!-- popup-img end -->
                            </div>
                            <div class="subscribe-area">
                                <!-- popup-title start -->
                                <div class="subscribe-content">
                                    <h2><span>Newsletter</span></h2>
                                    <p>Subscribe with us to get special offers and other discount information</p>
                                </div>
                                <!-- popup-title end -->
                                <!-- popup-newsletter start -->
                                <div class="popup-newsletter">
                                    <div class="news-content">
                                        <form method="post">
                                            <input type="email" name="q" placeholder="Enter your email address..." class="input-text" required="">
                                            <div class="email-submit">
                                                <button type="submit" class="btn btn-style2" name="commit" id="Subscribe">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- popup-newsletter end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- popup end -->
        <!-- top notification start -->
        <div class="top-noticifaction-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ul class="noticifaction-entry">
                            <li class="notify-wrap contact-link">
                                <div class="text-wrap">
                                    <div class="richtext">
                                        <p>Free shipping plant store for above RS 1000</p>
                                    </div>
                                </div>
                            </li>
                            <li class="notify-wrap notify-wrap-center">
                                <div class="richtext">
                                    <p>Welcome to our  Plant Nest  online store</p>
                                </div>
                            </li>
                            <li class="notify-wrap notify-wrap-right">
                                <div class="richtext">
                                    <p>Online order <a href="tel:+92 3042 219384" title="tel:+92 3042 219384">+92 3042 219384</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top notification end -->
        <!-- header start -->
        <header class="main-header">
            <div class="header-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="header-main">
                                <!-- header-logo start -->
                                <div class="header-element header-logo">
                                    <a href="{{route("home.index")}}" class="theme-logo">
                                        <img src="{{asset('assets/image/logo/logo.png')}}" class="img-fluid" alt="logo">
                                    </a>
                                </div>
                                <!-- header-logo end -->
                                <button class="toggler-button"><span class="line"></span></button>
                                <!-- header-menu start -->
                                <div class="header-element megamenu-content">
                                    <a href="#desk-main-collapse" data-bs-toggle="collapse" class="browse-cat">
                                        <span class="menu-icon"><i class="fa-solid fa-bars"></i></span>
                                        <span class="menu-title">Menu</span>
                                        <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                    </a>
                                    <div class="main-wrap collapse show" id="desk-main-collapse">
                                        <ul class="main-menu">
                                            <li class="menu-link">
                                                <a href="{{route("home.index")}}" class="link-title active">
                                                    <span class="sp-link-title">Home</span>
                                                </a>
                                                <a href="#desk-menumain-single" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Home</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{route("about.index")}}" class="link-title">
                                                    <span class="sp-link-title">About</span>
                                                </a>
                                                <a href="#desk-menumain-single" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">About</span>
                                                </a>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{route("shop.index")}}" class="link-title">
                                                    <span class="sp-link-title">Shop</span>
                                                </a>
                                                <a href="#desk-menumain-single" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Shop</span>
                                                </a>
                                            </li>
                                            {{-- <li class="menu-link">
                                                <a href="collection.html" class="link-title">
                                                    <span class="sp-link-title">Collection</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <a href="#desk-menumain-banner" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Collection</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <div class="menu-dropdown banner-menu collapse" id="desk-menumain-collection">
                                                    <ul class="container ul p-0">
                                                        <li class="bannermenu-li banner-hover">
                                                            <a href="collection.html" class="collection-img banner-img">
                                                                <img src="{{asset('assets/image/menu-banner/menubanner-1.jpg')}}" class="img-fluid" alt="menubanner-1">
                                                            </a>
                                                            <a href="collection.html" class="collection-title"><span>New product</span></a>
                                                        </li>
                                                        <li class="bannermenu-li banner-hover">
                                                            <a href="collection.html" class="collection-img banner-img">
                                                                <img src="{{asset('assets/image/menu-banner/menubanner-2.jpg')}}" class="img-fluid" alt="menubanner-2">
                                                            </a>
                                                            <a href="collection.html" class="collection-title"><span>Feature product</span></a>
                                                        </li>
                                                        <li class="bannermenu-li banner-hover">
                                                            <a href="collection.html" class="collection-img banner-img">
                                                                <img src="{{asset('assets/image/menu-banner/menubanner-3.jpg')}}" class="img-fluid" alt="menubanner-3">
                                                            </a>
                                                            <a href="collection.html" class="collection-title"><span>Related product</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li> --}}
                                            <li class="menu-link">
                                                <a href="collection.html" class="link-title">
                                                    <span class="sp-link-title">Categories</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <a href="#desk-menumain-product" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Categories</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <div class="menu-dropdown product-menu collapse" id="desk-menumain-product">
                                                    <ul class="container ul p-0">
                                                        <li class="productmenu-li">
                                                            <a href="JavaScript:void(0)" class="productlink-title">
                                                                <span class="sp-link-title">Plants</span>
                                                            </a>
                                                            <a href="#desk-menumain-productpage-product" data-bs-toggle="collapse" class="productlink-title productlink-title-lg">
                                                                <span class="sp-link-title">Product page</span>
                                                                <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                            </a>
                                                            <ul class="productsupmenu-dropdown collapse" id="desk-menumain-productpage-product">
                                                                <li class="productsupmenu-li">
                                                                    <a href="product.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Product layout</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="product-2.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Product tab</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="product-3.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Product advance</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="product-4.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Product accordian</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="product-5.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Product center</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="product-6.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Product sticky</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="productmenu-li">
                                                            <a href="JavaScript:void(0)" class="productlink-title">
                                                                <span class="sp-link-title">Accessories</span>
                                                            </a>
                                                            <a href="#desk-menumain-productpage-shop" data-bs-toggle="collapse" class="productlink-title productlink-title-lg">
                                                                <span class="sp-link-title">Shop page</span>
                                                                <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                            </a>
                                                            <ul class="productsupmenu-dropdown collapse" id="desk-menumain-productpage-shop">
                                                                <li class="productsupmenu-li">
                                                                    <a href="collection.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Collection</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="collection.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Collection left</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="collection.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Collection right</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="collection.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Collection list</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="collection.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Collection list left</span>
                                                                    </a>
                                                                </li>
                                                                <li class="productsupmenu-li">
                                                                    <a href="collection.html" class="productsuplink-title">
                                                                        <span class="sp-link-title">Collection list right</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="productmenu-li">
                                                            <div class="product-banner banner-hover">
                                                                <a href="collection.html" class="banner-img">
                                                                    <img class="img-fluid" src="{{asset('assets/image/menu-banner/menubanner-3.jpg')}}" alt="menubanner-5">
                                                                </a>
                                                            </div>
                                                        </li>
                                                        <li class="productmenu-li">
                                                            <div class="product-banner banner-hover">
                                                                <a href="collection.html" class="banner-img">
                                                                    <img class="img-fluid" src="{{asset('assets/image/menu-banner/menubanner-2.jpg')}}" alt="menubanner-5">
                                                                </a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{route("home.index")}}" class="link-title">
                                                    <span class="sp-link-title">Pages</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <a href="#desk-menumain-sub" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Pages</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="menu-dropdown sub-menu collapse" id="desk-menumain-sub">
                                                    <li class="submenu-li">
                                                        <a href="about-us.html" class="sublink-title">
                                                            <span class="sp-link-title">About us</span>
                                                        </a>
                                                        <a href="about-us.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">About us</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="sublink-title">
                                                            <span class="sp-link-title">Account</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                        </a>
                                                        <a href="#desk-menumain-sub-account" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Account</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                        </a>
                                                        <ul class="submenu-dropdown collapse" id="desk-menumain-sub-account">
                                                            <li class="supmenu-li">
                                                                <a href="order.html" class="suplink-title">
                                                                    <span class="sp-link-title">Order</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="profile.html" class="suplink-title">
                                                                    <span class="sp-link-title">Profile</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="my-address.html" class="suplink-title">
                                                                    <span class="sp-link-title">Address</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="wishlist-product.html" class="suplink-title">
                                                                    <span class="sp-link-title">Wishlist</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="ticket.html" class="suplink-title">
                                                                    <span class="sp-link-title">My ticket</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="billing-info.html" class="suplink-title">
                                                                    <span class="supmenu-title">Billing info</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="my-account.html" class="suplink-title">
                                                                    <span class="supmenu-title">My account</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="my-address.html" class="suplink-title">
                                                                    <span class="supmenu-title">My address</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="track-page.html" class="suplink-title">
                                                                    <span class="supmenu-title">Track page</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="order-complete.html" class="suplink-title">
                                                                    <span class="supmenu-title">Order complete</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="contact-us.html" class="sublink-title">
                                                            <span class="sp-link-title">Contact us</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                        </a>
                                                        <a href="#desk-menumain-sub-contact" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Contact us</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                        </a>
                                                        <ul class="submenu-dropdown collapse" id="desk-menumain-sub-contact">
                                                            <li class="supmenu-li">
                                                                <a href="contact-us.html" class="suplink-title">
                                                                    <span class="sp-link-title">Contact us 1</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="contact-us2.html" class="suplink-title">
                                                                    <span class="sp-link-title">Contact us 2</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="javascript:void(0)" class="sublink-title">
                                                            <span class="sp-link-title">Checkout</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                        </a>
                                                        <a href="#desk-menumain-sub-checkout" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Checkout</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                        </a>
                                                        <ul class="submenu-dropdown collapse" id="desk-menumain-sub-checkout">
                                                            <li class="supmenu-li">
                                                                <a href="checkout-1.html" class="suplink-title">
                                                                    <span class="supmenu-title">Checkout 1</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="checkout-2.html" class="suplink-title">
                                                                    <span class="supmenu-title">Checkout 2</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="checkout-3.html" class="suplink-title">
                                                                    <span class="supmenu-title">Checkout 3</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="contact-us.html" class="sublink-title">
                                                            <span class="sp-link-title">Features</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                        </a>
                                                        <a href="#desk-menumain-sub-features" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Features</span>
                                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                        </a>
                                                        <ul class="submenu-dropdown collapse" id="desk-menumain-sub-features">
                                                            <li class="supmenu-li">
                                                                <a href="cancellation.html" class="suplink-title">
                                                                    <span class="supmenu-title">Cancellation</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="cart-page.html" class="suplink-title">
                                                                    <span class="supmenu-title">Cart page</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="wishlist.html" class="suplink-title">
                                                                    <span class="supmenu-title">Wishlist product</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="sitemap.html" class="suplink-title">
                                                                    <span class="supmenu-title">Sitemap</span>
                                                                </a>
                                                            </li>
                                                            <li class="supmenu-li">
                                                                <a href="store-location.html" class="suplink-title">
                                                                    <span class="supmenu-title">Store loccation</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="faqs.html" class="sublink-title">
                                                            <span class="sp-link-title">Faq's</span>
                                                        </a>
                                                        <a href="faqs.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Faq's</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="return-policy.html" class="sublink-title">
                                                            <span class="sp-link-title">Return policy</span>
                                                        </a>
                                                        <a href="return-policy.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Return policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="privacy-policy.html" class="sublink-title">
                                                            <span class="sp-link-title">Privacy policy</span>
                                                        </a>
                                                        <a href="privacy-policy.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Privacy policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="payment-policy.html" class="sublink-title">
                                                            <span class="sp-link-title">Payment policy</span>
                                                        </a>
                                                        <a href="payment-policy.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Payment policy</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="terms-condition.html" class="sublink-title">
                                                            <span class="sp-link-title">Terms & condition</span>
                                                        </a>
                                                        <a href="terms-condition.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Terms & condition</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="404.html" class="sublink-title">
                                                            <span class="sp-link-title">404</span>
                                                        </a>
                                                        <a href="404.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">404</span>
                                                        </a>
                                                    </li>
                                                    <li class="submenu-li">
                                                        <a href="coming-soon.html" class="sublink-title">
                                                            <span class="sp-link-title">Coming soon</span>
                                                        </a>
                                                        <a href="coming-soon.html" class="sublink-title sublink-title-lg">
                                                            <span class="sp-link-title">Coming soon</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-link">
                                                <a href="{{route("contact.index")}}" class="link-title">
                                                    <span class="sp-link-title">Contact Us</span>
                                                </a>
                                                <a href="#desk-menumain-single" data-bs-toggle="collapse" class="link-title link-title-lg">
                                                    <span class="sp-link-title">Contact Us</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- header-menu end -->
                                <!-- header-icon start -->
                                <div class="header-element header-icon">
                                    <ul class="shop-element">
                                        <li class="side-wrap search-wrap">
                                            <div class="search-wrapper">
                                                <a href="#search-modal" data-bs-toggle="modal">
                                                    <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                                                    <span class="search-title">Find our item</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="side-wrap user-wrap">
                                            <div class="user-wrapper">
                                                <a href="login.html">
                                                    <span class="user-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="side-wrap wishlist-wrap">
                                            <div class="wishlist-wrapper">
                                                <a href="wishlist.html">
                                                    <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></span>
                                                    <span class="wishlist-counter">3</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="cart-wrapper">
                                                <a href="JavaScript:void(0)" class="cart-count">
                                                    <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                    <span class="cart-counter">11</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- header-icon end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        {{-- views slicing --}}
        {{$slot}}
        {{-- views slicing --}}

        
        <!-- footer start -->
        <section class="footer-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-list-wrap">
                            <ul class="footer-list">
                                <li class="ftlink-li ft-detils">
                                    <div class="footer-info">
                                        <h2 class="ft-title">Need help you ?</h2>
                                        <div class="rich-text">
                                            <p>There are many variations of passages <br>of lorem ipsum available, but the !</p>
                                        </div>
                                        <ul class="social-icon">
                                            <li class="facebook">
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="gplus">
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-pinterest-p"></i>
                                                </a>
                                            </li>
                                            <li class="pinterest">
                                                <a href="javascript:void(0)">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="ftlink-li custom-text text-left text-lg-left ft-detils">
                                    <h2 class="ft-title">Opening time</h2>
                                    <div class="rich-text">
                                        <p>Monday - Thursday : 8:30AM to 6:30PM
                                            <span>Friday - Saturday : 8:30AM to 4:00PM </span>
                                            <span>Sunday : ALL DAYS CLOSED </span>
                                        </p>
                                    </div>
                                </li>
                                <li class="ftlink-li text-left text-lg-left ft-detils">
                                    <div class="news-content">
                                        <h2 class="ft-title">Subscribe newsletter</h2>
                                        <div class="rich-text"><p>Get now free 20% discount for all<br>products on your first order!</p></div>
                                        <form method="post" action="https://spacingtech.com/contact#contact_form" class="contact-form">
                                            <input type="hidden" name="form_type" value="customer">
                                            <input type="hidden" name="utf8" value="✓">
                                            <div class="news-wrap">
                                                <input type="hidden" name="contact[tags]" value="newsletter">
                                                <input type="email" name="contact[email]" class="email mail" id="E-mail" value="" placeholder="Enter your email" autocapitalize="off" required="">
                                                <button type="submit" name="commit"><i class="fa-regular fa-envelope-open"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- footer end -->
        <!-- bottom-footer-area start -->
        <section class="bottom-footer-area section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="footer-list-wrap">
                            <ul class="footer-list">
                                <li class="ftlink-li link-list text-left text-lg-left">
                                    <h2 class="ft-title md-d-none">Information</h2>
                                    <a data-bs-toggle="collapse" href="#collapse-information" class="ft-title">
                                        <span>Information</span>
                                        <i class="fa-light fa-plus"></i>
                                    </a>
                                    <ul class="collapse footer-sublist link" id="collapse-information">
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">About plants</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Customer service</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Product sellar</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Accessibility state</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="ftlink-li link-list text-left text-lg-left">
                                    <h2 class="ft-title md-d-none">Plants legal</h2>
                                    <a data-bs-toggle="collapse" href="#collapse-plants-legal" class="ft-title">
                                        <span>Plants legal</span>
                                        <i class="fa-light fa-plus"></i>
                                    </a>
                                    <ul class="collapse  footer-sublist link" id="collapse-plants-legal">
                                        <li class="ftsublink-li">
                                            <a href="privacy-policy.html" class="ft-sublink">Privacy policy</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="return-policy.html" class="ft-sublink">Return policy</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="terms-condition.html" class="ft-sublink">Terms conditons </a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="payment-policy.html" class="ft-sublink">Payment policy</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="ftlink-li link-list text-left text-lg-left">
                                    <h2 class="ft-title md-d-none">Browse category</h2>
                                    <a data-bs-toggle="collapse" href="#collapse-browse-category" class="ft-title">
                                        <span>Browse category</span>
                                        <i class="fa-light fa-plus"></i>
                                    </a>
                                    <ul class="collapse  footer-sublist link" id="collapse-browse-category">
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Outdoor plants</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Indoor plants</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Office plants</a>
                                        </li>
                                        <li class="ftsublink-li">
                                            <a href="collection.html" class="ft-sublink">Greenary plants</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="ftlink-li payment-block text-left text-lg-left">
                                    <div class="pay-icon">
                                        <h2 class="ft-title">Payment method</h2>
                                        <a href="javascript:void(0)" class="payment-icon">
                                            <img src="{{asset('assets/image/payment-icon/visa.svg')}}" alt="pay-icon">
                                            <img src="{{asset('assets/image/payment-icon/paypal.svg')}}" alt="pay-icon">
                                            <img src="{{asset('assets/image/payment-icon/master.svg')}}" alt="pay-icon">
                                            <img src="{{asset('assets/image/payment-icon/american.svg')}}" alt="pay-icon">
                                        </a>
                                    </div>
                                    <div class="app-icon">
                                        <h2 class="ft-title">Download app</h2>
                                        <a href="{{route("home.index")}}" class="img-content">
                                            <img src="{{asset('assets/image/payment-icon/app-icon1.png')}}" class="img-fluid" alt="app-icon1">
                                        </a>
                                        <a href="{{route("home.index")}}" class="img-content">
                                            <img src="{{asset('assets/image/payment-icon/app-icon2.png')}}" class="img-fluid" alt="app-icon2">
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- bottom-footer-area end -->
        <!-- footer start -->
        <footer class="footer-bottom-area">
            <div class="container">
                <ul class="footer-bottom">
                    <li class="ftlink-li">
                        <a href="{{route("home.index")}}" class="theme-logo">
                            <img src="{{asset('assets/image/logo/logo.png')}}" class="img-fluid" alt="freozy">
                        </a>
                    </li>
                    <li class="ftlink-li">
                        <div class="richtext">
                            <p>Copyright © 2023 PlantNest</p>
                        </div>
                    </li>
                </ul>
            </div>
        </footer>
        <!-- footer end -->
        <!-- mobile-menu start -->
        <div class="mobile-menu" id="menu-toggle">
            <div class="main-menu-area">
                <div class="box-header">
                    <button class="close-box" type="button"><i class="fa-solid fa-xmark"></i></button>
                </div>
                <div class="main-menu-wrap">
                    <!-- main-menu start -->
                    <div class="mega-menu-area">
                        <div class="megamenu-content">
                            <a href="#resp-main-collapse" data-bs-toggle="collapse" class="browse-cat" aria-expanded="true">
                                <span class="menu-icon"><i class="fa-solid fa-bars"></i></span>
                                <span class="menu-title">Menu</span>
                                <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                            </a>
                            <div class="main-wrap collapse show" id="resp-main-collapse">
                                <ul class="main-menu">
                                    <li class="menu-link">
                                        <a href="{{route("home.index")}}" class="link-title">
                                            <span class="sp-link-title">Home</span>
                                        </a>
                                        <a href="#resp-menumain-single" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Home</span>
                                        </a>
                                    </li>
                                    <li class="menu-link">
                                        <a href="collection.html" class="link-title">
                                            <span class="sp-link-title">Collection</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <a href="#resp-menumain-collection" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Collection</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <div class="menu-dropdown banner-menu collapse" id="resp-menumain-collection">
                                            <ul class="container ul p-0">
                                                <li class="bannermenu-li banner-hover">
                                                    <a href="collection.html" class="collection-img banner-img">
                                                        <img src="{{asset('assets/image/menu-banner/menubanner-1.jpg')}}" class="img-fluid" alt="menubanner-1">
                                                    </a>
                                                    <a href="collection.html" class="collection-title"><span>New product</span></a>
                                                </li>
                                                <li class="bannermenu-li banner-hover">
                                                    <a href="collection.html" class="collection-img banner-img">
                                                        <img src="{{asset('assets/image/menu-banner/menubanner-2.jpg')}}" class="img-fluid" alt="menubanner-2">
                                                    </a>
                                                    <a href="collection.html" class="collection-title"><span>Feature product</span></a>
                                                </li>
                                                <li class="bannermenu-li banner-hover">
                                                    <a href="collection.html" class="collection-img banner-img">
                                                        <img src="{{asset('assets/image/menu-banner/menubanner-3.jpg')}}" class="img-fluid" alt="menubanner-3">
                                                    </a>
                                                    <a href="collection.html" class="collection-title"><span>Best product</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-link">
                                        <a href="collection.html" class="link-title">
                                            <span class="sp-link-title">Product</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <a href="#resp-menumain-product" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Product</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <div class="menu-dropdown product-menu collapse" id="resp-menumain-product">
                                            <ul class="container ul p-0">
                                                <li class="productmenu-li">
                                                    <a href="JavaScript:void(0)" class="productlink-title">
                                                        <span class="sp-link-title">Product page</span>
                                                    </a>
                                                    <a href="#resp-menumain-productpage-product" data-bs-toggle="collapse" class="productlink-title productlink-title-lg">
                                                        <span class="sp-link-title">Product page</span>
                                                        <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                    </a>
                                                    <ul class="productsupmenu-dropdown collapse" id="resp-menumain-productpage-product">
                                                        <li class="productsupmenu-li">
                                                            <a href="product.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Product layout</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="product-2.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Product tab</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="product-3.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Product advance</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="product-4.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Product accordian</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="product-5.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Product center</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="product-6.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Product sticky</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="productmenu-li">
                                                    <a href="JavaScript:void(0)" class="productlink-title">
                                                        <span class="sp-link-title">Shop page</span>
                                                    </a>
                                                    <a href="#resp-menumain-productpage-shop" data-bs-toggle="collapse" class="productlink-title productlink-title-lg">
                                                        <span class="sp-link-title">Shop page</span>
                                                        <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                    </a>
                                                    <ul class="productsupmenu-dropdown collapse" id="resp-menumain-productpage-shop">
                                                        <li class="productsupmenu-li">
                                                            <a href="collection.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Collection</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="collection.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Collection left</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="collection.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Collection right</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="collection.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Collection list</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="collection.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Collection list left</span>
                                                            </a>
                                                        </li>
                                                        <li class="productsupmenu-li">
                                                            <a href="collection.html" class="productsuplink-title">
                                                                <span class="sp-link-title">Collection list right</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="productmenu-li">
                                                    <div class="product-banner banner-hover">
                                                        <a href="collection.html" class="banner-img">
                                                            <img class="img-fluid" src="{{asset('assets/image/menu-banner/menubanner-5.jpg')}}" alt="menubanner-5">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="productmenu-li">
                                                    <div class="product-banner banner-hover">
                                                        <a href="collection.html" class="banner-img">
                                                            <img class="img-fluid" src="{{asset('assets/image/menu-banner/menubanner-6.jpg')}}" alt="menubanner-5">
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-link">
                                        <a href="blog.html" class="link-title">
                                            <span class="sp-link-title">Blog</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <a href="#resp-menumain-blog" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Blog</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <div class="menu-dropdown blog-menu collapse" id="resp-menumain-blog">
                                            <ul class="container ul p-0">
                                                <li class="blogmenu-li">
                                                    <a href="blog.html" class="bloglink-title">
                                                        <span class="sp-link-title">Blog page</span>
                                                    </a>
                                                    <a href="#resp-menumain-bloggrid" data-bs-toggle="collapse" class="bloglink-title bloglink-title-lg">
                                                        <span class="sp-link-title">Blog page</span>
                                                        <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                    </a>
                                                    <ul class="blogsupmenu-dropdown collapse" id="resp-menumain-bloggrid">
                                                        <li class="blogsupmenu-li">
                                                            <a href="blog-without.html" class="blogsuplink-title">
                                                                <span class="sp-link-title">01 Blog grid</span>
                                                            </a>
                                                        </li>
                                                        <li class="blogsupmenu-li">
                                                            <a href="blog.html" class="blogsuplink-title">
                                                                <span class="sp-link-title">02 Blog grid left</span>
                                                            </a>
                                                        </li>
                                                        <li class="blogsupmenu-li">
                                                            <a href="blog-right.html" class="blogsuplink-title">
                                                                <span class="sp-link-title">03 Blog grid right</span>
                                                            </a>
                                                        </li>
                                                        <li class="blogsupmenu-li">
                                                            <a href="article-without.html" class="blogsuplink-title">
                                                                <span class="sp-link-title">04 Article post</span>
                                                            </a>
                                                        </li>
                                                        <li class="blogsupmenu-li">
                                                            <a href="article.html" class="blogsuplink-title">
                                                                <span class="sp-link-title">05 Article post left</span>
                                                            </a>
                                                        </li>
                                                        <li class="blogsupmenu-li">
                                                            <a href="article-right.html" class="blogsuplink-title">
                                                                <span class="sp-link-title">06 Article post right</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="blogmenu-li">
                                                    <div class="menu-blog">
                                                        <ul class="blog-ul">
                                                            <li class="blog-li">
                                                                <div class="blog-menu-list">
                                                                    <div class="blog-post">
                                                                        <div class="blog-post-content">
                                                                            <h6 class="blog-title">
                                                                            <a href="article.html">Wel illum do lorem fugiat?</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="blog-li">
                                                                <div class="blog-menu-list">
                                                                    <div class="blog-post">
                                                                        <div class="blog-post-content">
                                                                            <h6 class="blog-title">
                                                                            <a href="article.html">Nisi ut aliquid commodi?</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="blog-li">
                                                                <div class="blog-menu-list">
                                                                    <div class="blog-post">
                                                                        <div class="blog-post-content">
                                                                            <h6 class="blog-title">
                                                                            <a href="article.html">Which of us undertakes?</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="blog-li">
                                                                <div class="blog-menu-list">
                                                                    <div class="blog-post">
                                                                        <div class="blog-post-content">
                                                                            <h6 class="blog-title">
                                                                            <a href="article.html">Where does it come from?</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="blog-li">
                                                                <div class="blog-menu-list">
                                                                    <div class="blog-post">
                                                                        <div class="blog-post-content">
                                                                            <h6 class="blog-title">
                                                                            <a href="article.html">Why do we use it?</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="blog-li">
                                                                <div class="blog-menu-list">
                                                                    <div class="blog-post">
                                                                        <div class="blog-post-content">
                                                                            <h6 class="blog-title">
                                                                            <a href="article.html">What is Lorem Ipsum?</a>
                                                                            </h6>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="menu-blog-btn">
                                                            <a href="blog.html" class="menu-blog-link">See more</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="blogmenu-li">
                                                    <div class="blog-banner banner-hover">
                                                        <a href="collection.html" class="banner-img">
                                                            <img class="img-fluid" src="{{asset('assets/image/menu-banner/blogbanner-1.jpg')}}" alt="blogbanner-1">
                                                        </a>
                                                    </div>
                                                </li>
                                                <li class="blogmenu-li">
                                                    <div class="blog-banner banner-hover">
                                                        <a href="collection.html" class="banner-img">
                                                            <img class="img-fluid" src="{{asset('assets/image/menu-banner/blogbanner-2.jpg')}}" alt="blogbanner-2">
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="menu-link">
                                        <a href="{{route("home.index")}}" class="link-title">
                                            <span class="sp-link-title">Pages</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <a href="#resp-menumain-sub" data-bs-toggle="collapse" class="link-title link-title-lg">
                                            <span class="sp-link-title">Pages</span>
                                            <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                        </a>
                                        <ul class="menu-dropdown sub-menu collapse" id="resp-menumain-sub">
                                            <li class="submenu-li">
                                                <a href="about-us.html" class="sublink-title">
                                                    <span class="sp-link-title">About us</span>
                                                </a>
                                                <a href="about-us.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">About us</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="sublink-title">
                                                    <span class="sp-link-title">Account</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                                <a href="#resp-menumain-sub-account" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Account</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="submenu-dropdown collapse" id="resp-menumain-sub-account">
                                                    <li class="supmenu-li">
                                                        <a href="order.html" class="suplink-title">
                                                            <span class="sp-link-title">Order</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="profile.html" class="suplink-title">
                                                            <span class="sp-link-title">Profile</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="my-address.html" class="suplink-title">
                                                            <span class="sp-link-title">Address</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="wishlist-product.html" class="suplink-title">
                                                            <span class="sp-link-title">Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="ticket.html" class="suplink-title">
                                                            <span class="sp-link-title">My ticket</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="billing-info.html" class="suplink-title">
                                                            <span class="supmenu-title">Billing info</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="my-account.html" class="suplink-title">
                                                            <span class="supmenu-title">My account</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="my-address.html" class="suplink-title">
                                                            <span class="supmenu-title">My address</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="track-page.html" class="suplink-title">
                                                            <span class="supmenu-title">Track page</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="order-complete.html" class="suplink-title">
                                                            <span class="supmenu-title">Order complete</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="contact-us.html" class="sublink-title">
                                                    <span class="sp-link-title">Contact us</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                                <a href="#resp-menumain-sub-contact" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Contact us</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="submenu-dropdown collapse" id="resp-menumain-sub-contact">
                                                    <li class="supmenu-li">
                                                        <a href="contact-us.html" class="suplink-title">
                                                            <span class="sp-link-title">Contact us 1</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="contact-us2.html" class="suplink-title">
                                                            <span class="sp-link-title">Contact us 2</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="javascript:void(0)" class="sublink-title">
                                                    <span class="sp-link-title">Checkout</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                                <a href="#resp-menumain-sub-checkout" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Checkout</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="submenu-dropdown collapse" id="resp-menumain-sub-checkout">
                                                    <li class="supmenu-li">
                                                        <a href="checkout-1.html" class="suplink-title">
                                                            <span class="supmenu-title">Checkout 1</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="checkout-2.html" class="suplink-title">
                                                            <span class="supmenu-title">Checkout 2</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="checkout-3.html" class="suplink-title">
                                                            <span class="supmenu-title">Checkout 3</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="contact-us.html" class="sublink-title">
                                                    <span class="sp-link-title">Features</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-right"></i></span>
                                                </a>
                                                <a href="#resp-menumain-sub-features" data-bs-toggle="collapse" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Features</span>
                                                    <span class="menu-arrow"><i class="fa-solid fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="submenu-dropdown collapse" id="resp-menumain-sub-features">
                                                    <li class="supmenu-li">
                                                        <a href="cancellation.html" class="suplink-title">
                                                            <span class="supmenu-title">Cancellation</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="cart-page.html" class="suplink-title">
                                                            <span class="supmenu-title">Cart page</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="wishlist.html" class="suplink-title">
                                                            <span class="supmenu-title">Wishlist product</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="sitemap.html" class="suplink-title">
                                                            <span class="supmenu-title">Sitemap</span>
                                                        </a>
                                                    </li>
                                                    <li class="supmenu-li">
                                                        <a href="store-location.html" class="suplink-title">
                                                            <span class="supmenu-title">store loccation</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="faqs.html" class="sublink-title">
                                                    <span class="sp-link-title">Faq's</span>
                                                </a>
                                                <a href="faqs.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Faq's</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="return-policy.html" class="sublink-title">
                                                    <span class="sp-link-title">Return policy</span>
                                                </a>
                                                <a href="return-policy.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Return policy</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="privacy-policy.html" class="sublink-title">
                                                    <span class="sp-link-title">Privacy policy</span>
                                                </a>
                                                <a href="privacy-policy.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Privacy policy</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="payment-policy.html" class="sublink-title">
                                                    <span class="sp-link-title">Payment policy</span>
                                                </a>
                                                <a href="payment-policy.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Payment policy</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="terms-condition.html" class="sublink-title">
                                                    <span class="sp-link-title">Terms & condition</span>
                                                </a>
                                                <a href="terms-condition.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Terms & condition</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="404.html" class="sublink-title">
                                                    <span class="sp-link-title">404</span>
                                                </a>
                                                <a href="404.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">404</span>
                                                </a>
                                            </li>
                                            <li class="submenu-li">
                                                <a href="coming-soon.html" class="sublink-title">
                                                    <span class="sp-link-title">Coming soon</span>
                                                </a>
                                                <a href="coming-soon.html" class="sublink-title sublink-title-lg">
                                                    <span class="sp-link-title">Coming soon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- main-menu end -->
                </div>
            </div>
        </div>
        <!-- mobile-menu end -->
        <!-- notification-bottom menu start -->
        <div class="notification-bottom">
            <ul class="shop-element-menu navigation-menu">
                <li class="side-wrap home-wrap">
                    <div class="home-wrapper">
                        <a href="{{route("home.index")}}" class="home-modal">
                            <span class="home-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                            </svg></span>
                        </a>
                        <span class="header-title">Home</span>
                    </div>
                </li>
                <li class="side-wrap search-wrap">
                    <div class="search-wrapper">
                        <a href="#search-modal" class="search-modal" data-bs-toggle="modal">
                            <span class="search-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                        </a>
                        <span class="header-title">Search</span>
                    </div>
                </li>
                <li class="side-wrap wishlist-wrap">
                    <div class="wishlist-wrapper">
                        <div class="wish-det">
                            <a href="wishlist.html" class="wishlist-count">
                                <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                <span class="wishlist-counter">3</span>
                            </a>
                        </div>
                        <div class="wishlist-title">
                            <span class="header-title">Wishlist</span>
                        </div>
                    </div>
                </li>
                <li class="side-wrap cart-wrap">
                    <div class="cart-wrapper">
                        <div class="cart-det">
                            <a href="javascript:void(0)" class="cart-count">
                                <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                <span class="cart-counter">11</span>
                            </a>
                        </div>
                        <div class="cart-title">
                            <span class="header-title">Cart</span>
                        </div>
                    </div>
                </li>
                <li class="side-wrap user-wrap">
                    <div class="user-wrapper">
                        <a href="login.html" class="user-login">
                            <span class="user-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg></span>
                        </a>
                        <span class="header-title">User</span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- notification-bottom menu end -->
        <!-- quickview-modal start -->
        <div class="productmodal">
            <div class="modal fade popup_wrapper" id="quickview" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="modal-quickview">Quickview</span>
                            <button type="button" class="close" data-bs-dismiss="modal"><i class="feather-x"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="quickview-main-area">
                                <div class="quickview-slider">
                                    <div class="swiper gallery-top">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="javascript:void(0)"><img src="{{asset('assets/image/product/p-1.jpg')}}" class="img-fluid" alt="p-1"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="quick-view-content">
                                    <div class="product-title">
                                        <h6 class="product_title">Flower</h6>
                                    </div>
                                    <div class="price-box price-part">
                                        <span class="new-price amount price-box-old">$300.00</span>
                                    </div>
                                    <div class="product-ratting">
                                        <div class="rating">
                                            <span class="spr-badge">
                                                <span class="star-rating spr-badge-starrating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <form id="add-item-qv" action="https://spacingtech.com/cart/add" method="post">
                                        <div class="quick-view-select variants select-option-part">
                                            <div class="variants_selects">
                                                <div class="selector-wrapper">
                                                    <label>Color:</label>
                                                    <div class="select-icon">
                                                        <select class="single-option-selector select--wd">
                                                            <option>Blue</option>
                                                            <option>Wood</option>
                                                            <option>White</option>
                                                            <option>Cooffe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="product-quantity-action">
                                                    <h6>Quantity:</h6>
                                                    <div class="product-quantity">
                                                        <div class="cart-plus-minus">
                                                            <div class="dec qtybutton">-</div>
                                                            <input value="1" type="text" name="quantity" pattern="[0-9]*">
                                                            <div class="inc qtybutton">+</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="quickview-buttons">
                                                    <button type="button">ADD TO CART</button>
                                                    <a href="wishlist.html" class="wishlist">
                                                        <span class="wishlist-icon"><i class="far fa-heart"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quickview-modal end -->
        <div class="mini-cart">
            <div class="cart-text">
                <!-- minicart-empty start -->
                <p class="d-none">No products in the cart.</p>
                <!-- minicart-empty end -->
                <!-- minicart-fill start -->
                <p class="d-block"><span class="cart-count">11</span> products in the cart</p>
                <!-- minicart-fill end -->
                <!-- minicart-close start -->
                <button class="cart-close"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/><path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/></svg></button>
                <!-- minicart-close end -->
            </div>
            <!-- minicart empty-content start -->
            <div class="empty-cart d-none">
                <span class="cart-icon"><i class="bi bi-bag-dash"></i></span>
                <a href="javascript:void(0)" class="btn btn-style2">Continue shopping</a>
            </div>
            <!-- minicart empty-content end -->
            <ul class="cart-item d-block">
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-1.jpg')}}" class="img-fluid" alt="cart-1">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$40.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-2.jpg')}}" class="img-fluid" alt="cart-2">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Party Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$70.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-3.jpg')}}" class="img-fluid" alt="cart-3">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Leather Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$17.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-4.jpg')}}" class="img-fluid" alt="cart-4">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Sofa Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$47.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-6.jpg')}}" class="img-fluid" alt="cart-6">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Wooden Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$45.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-7.jpg')}}" class="img-fluid" alt="cart-7">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Round Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$28.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-8.jpg')}}" class="img-fluid" alt="cart-8">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Club Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$10.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-9.jpg')}}" class="img-fluid" alt="cart-9">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Table lamp</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$24.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-10.jpg')}}" class="img-fluid" alt="cart-10">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Long Outdoor plant</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$32.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
                <li class="cart-product">
                    <div class="cart-img">
                        <!-- minicart-img start -->
                        <a href="product.html" class="img-area">
                            <img src="{{asset('assets/image/cart/cart-9.jpg')}}" class="img-fluid" alt="cart-9">
                        </a>
                        <!-- minicart-img end -->
                    </div>
                    <div class="cart-content">
                        <!-- minicart-title start -->
                        <h6><a href="product.html">Wooden clock</a></h6>
                        <!-- minicart-title end -->
                        <div class="product-info">
                            <!-- minicart-price start -->
                            <div class="info-item">
                                <span class="product-qty">1 ×</span>
                                <span class="product-price">$40.00 USD</span>
                            </div>
                            <!-- minicart-price end -->
                            <!-- minicart delete-icon start -->
                            <div class="delete-cart">
                                <a href="cart-empty.html" class="delete-icon text-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/></svg></a>
                            </div>
                            <!-- minicart delete-icon end -->
                        </div>
                    </div>
                </li>
            </ul>
            <!-- minicart-total start -->
            <ul class="subtotal-area">
                <li class="subtotal-info">
                    <div class="subtotal-titles">
                        <!-- minicart total-title start -->
                        <h6 class="cart-total">Subtotal:</h6>
                        <!-- minicart total-title end -->
                        <!-- minicart total-price start -->
                        <span class="subtotal-price">£378.00</span>
                        <!-- minicart total-price end -->
                    </div>
                </li>
                <li class="mini-info">
                    <!-- minicart agree-text start -->
                    <div class="read-agree">
                        <label class="box-area">
                            <span class="agree-text">I have read and agree with the <a href="terms-condition.html">terms & condition.</a></span>
                            <input type="checkbox" class="cust-checkbox">
                            <span class="cust-check"></span>
                        </label>
                    </div>
                    <!-- minicart agree-text end -->
                    <!-- minicart button start -->
                    <div class="cart-btn">
                        <a href="cart-page.html" class="btn btn-style2">View cart</a>
                        <a href="checkout-1.html" class="btn btn-style2 checkout disabled">Checkout</a>
                    </div>
                    <!-- minicart button end -->
                </li>
            </ul>
            <!-- minicart-total end -->
        </div>
        <!-- search-popup start -->
        <div class="modal fade" id="search-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="crap-search">
                                        <!-- search-button-close start -->
                                        <div class="button-close">
                                            <button type="button" class="search-close" data-bs-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/><path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/></svg></button>
                                        </div>
                                        <!-- search-button-close end -->
                                        <!-- search-form start -->
                                        <form method="get" class="search-bar">
                                            <div class="form-search">
                                                <input type="search" name="q" placeholder="Search product here.." class="input-text" required>
                                                <button type="submit" class="search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/></svg></button>
                                            </div>
                                        </form>
                                        <!-- search-form end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-popup end -->
        <!-- preloader start -->
        <div class="preloader"><div class="spinner-border text-success"></div></div>
        <!-- preloader end -->
        <!-- screen bg start -->
        <div class="screen-bg"></div>
        <!-- screen bg end -->
        <a href="javascript:void(0)" id="top" class="scroll"><span><i class="fa-solid fa-arrow-up"></i></span></a>
        <!-- jquery -->
        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
        <!-- bootstarp -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/popper.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- swiper sider -->
        <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>
        <!-- counter js -->
        <script src="{{asset('assets/js/counter.js')}}"></script>
        <!-- owl carousel -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- slick slider -->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!-- custom js -->
        <script src="{{asset('assets/js/custom.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        @livewireScripts()
    </body>
</html>