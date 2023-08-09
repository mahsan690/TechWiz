<div>
        <!-- breadcrumb-area start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-index">
                            <!-- breadcrumb-list start -->
                            <ul class="breadcrumb-list">
                                <li class="breadcrumb-title">
                                    <a href="<?php echo e(route("home.index")); ?>" title="Back to the home page">Home</a>
                                </li>
                                <li class="breadcrumb-title">
                                    <span>Collection left</span>
                                </li>
                            </ul>
                            <!-- breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area end -->
        <!-- shop-page start -->
        <section class="collection">
            <div class="main-content-wrap shop-page section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="pro-grli-wrapper left-side-wrap">
                                <div class="pro-grli-wrap product-grid">
                                    <div class="collection-img-wrap">
                                        <h6 class="st-title">Collection (12)</h6>
                                        <!-- collection info start -->
                                        <div class="collection-info">
                                            <div class="collection-image">
                                                <img src="<?php echo e(asset('assets/image/collection/collection-banner.jpg')); ?>" class="img-fluid" alt="collection-banner">
                                            </div>
                                        </div>
                                        <!-- collection info end -->
                                    </div>
                                    <!-- shop-top bar start -->
                                    <div class="shop-top-bar">
                                        <div class="product-filter">
                                            <button class="filter-button" type="button">
                                            <i class="feather-filter"></i>
                                            <span>Filter</span>
                                            </button>
                                        </div>
                                        <div class="product-view-mode">
                                            <!-- shop-item-filter-list start -->
                                            <a class="list-change-view grid-three active" data-grid-view="3"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/></svg></span></a>
                                            <a class="list-change-view list-one" data-grid-view="1"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"/><line x1="8" y1="12" x2="21" y2="12"/><line x1="8" y1="18" x2="21" y2="18"/><line x1="3" y1="6" x2="3.01" y2="6"/><line x1="3" y1="12" x2="3.01" y2="12"/><line x1="3" y1="18" x2="3.01" y2="18"/></svg></span></a>
                                            <!-- shop-item-filter-list end -->
                                        </div>
                                        <!-- shop-top bar end -->
                                        <!-- product-shot start -->
                                        <div class="product-short">
                                            <label for="SortBy">Sort by:</label>
                                            <select class="nice-select" name="sortby" id="SortBy">
                                                <option value="manual">Featured</option>
                                                <option value="best-selling">Best Selling</option>
                                                <option value="title-ascending">Alphabetically, A-Z</option>
                                                <option value="title-descending">Alphabetically, Z-A</option>
                                                <option value="price-ascending">Price, low to high</option>
                                                <option value="price-descending">Price, high to low</option>
                                                <option value="created-descending">Date, new to old</option>
                                                <option value="created-ascending">Date, old to new</option>
                                            </select>
                                            <a href="javascript:void(0)" class="short-title short-title">
                                                <span class="sort-title">Best Selling</span>
                                                <span class="sort-icon"><i class="feather-chevron-down"></i></span>
                                            </a>
                                            <a href="javascript:void(0)" class="short-title short-title-lg">
                                                <span class="sort-title">Best Selling</span>
                                                <span class="sort-icon"><i class="feather-chevron-down"></i></span>
                                            </a>
                                            <ul class="collapse" id="select-wrap">
                                                <li><a href="javascript:void(0)">Featured</a></li>
                                                <li class="selected"><a href="javascript:void(0)">Best Selling</a></li>
                                                <li><a href="javascript:void(0)">Alphabetically, A-Z</a></li>
                                                <li><a href="javascript:void(0)">Alphabetically, Z-A</a></li>
                                                <li><a href="javascript:void(0)">Price, low to high</a></li>
                                                <li><a href="javascript:void(0)">Price, high to low</a></li>
                                                <li><a href="javascript:void(0)">Date, new to old</a></li>
                                                <li><a href="javascript:void(0)">Date, old to new</a></li>
                                            </ul>
                                        </div>
                                        <!-- product-shot end -->
                                    </div>
                                    <!-- shop-top-bar end -->
                                    <div class="get-data-products">
                                        <div class="shop-grid">
                                            <div class="productgridcontainer">
                                                <div class="product-grid-view">
                                                    <div class="shop-product-wrap collection grid-3">
                                                        <div class="row">
                                                            <div class="col">
                                                                <ul class="product-view" id="product-grid">
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-1.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-2.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Bonsai plant">Bonsai plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$245.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product-7.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Bonsai plant">Bonsai plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$99.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-3.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-4.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-label">
                                                                                    <span class="discount-label">-12%</span>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Bamboo palm">Bamboo palm</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$90.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Bamboo palm">Bamboo palm</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$44.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-5.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-6.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Outdoor plant">Outdoor plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$45.00</span>
                                                                                        <span class="old-price">$40.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Outdoor plant">Outdoor plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$49.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-7.jpg')); ?>" class="img-fluid img1 resp-7" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-8.jpg')); ?>" class="img-fluid img2 resp-8" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Party Outdoor plant">Party Outdoor plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$245.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Party Outdoor plant">Party Outdoor plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$48.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-9.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-10.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Leather Outdoor plant">Leather Outdoor plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$545.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Leather Outdoor plant">Leather Outdoor plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$39.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-11.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-12.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Snake plant">Snake plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$75.00</span>
                                                                                        <span class="old-price">$80.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Snake plant">Snake plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$59.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-13.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-14.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Money plant">Money plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$245.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="collection.html" title="Money plant">Money plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$59.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-15.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-16.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-label">
                                                                                    <span class="discount-label">-18%</span>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Office plant">Office plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$55.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Office plant">Office plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$29.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-17.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-18.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Peace lily plant">Peace lily plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$345.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Peace lily plant">Peace lily plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$18.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-19.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-20.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Vines plant">Vines plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$10.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Vines plant">Vines plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$58.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-21.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-22.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Office plant">Office plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$128.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="collection.html" title="Office plant">Office plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$24.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="st-col-item">
                                                                        <div class="single-product-wrap">
                                                                            <div class="product-image">
                                                                                <a href="product.html" class="pro-img">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-23.jpg')); ?>" class="img-fluid img1 resp-1" alt="p-1">
                                                                                    <img src="<?php echo e(asset('assets/image/product/p-24.jpg')); ?>" class="img-fluid img2 resp-2" alt="p-2">
                                                                                </a>
                                                                                <div class="product-label">
                                                                                    <span class="discount-label">-10%</span>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-content">
                                                                                <div class="product-text">
                                                                                    <div class="product-title">
                                                                                        <a href="product.html" title="Vines plant">Vines plant</a>
                                                                                    </div>
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$345.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <a href="javascript:void(0);" class="add-to-cart">
                                                                                    <span class="cart-title"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                </a>
                                                                            </div>
                                                                            <div class="list-content">
                                                                                <a href="product.html" class="product-vendor" title="Naturo">Naturo</a>
                                                                                <div class="product-rating">
                                                                                    <span class="star-rating">
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star"></i>
                                                                                        <i class="fas fa-star-half-alt"></i>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="product-title">
                                                                                    <a href="product.html" title="Vines plant">Vines plant</a>
                                                                                </div>
                                                                                <div class="pro-prlb pro-sale">
                                                                                    <div class="price-box">
                                                                                        <span class="new-price">$79.00</span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-description">
                                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ‘s standard dummy text. </p>
                                                                                </div>
                                                                                <div class="product-action">
                                                                                    <a href="javascript:void(0)" class="add-to-cart">
                                                                                        <span class="tooltip-text">Add to cart</span>
                                                                                        <span class="cart-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></span>
                                                                                    </a>
                                                                                    <a href="#quickview" data-bs-toggle="modal" data-bs-target="#quickview" class="quick-view">
                                                                                        <span class="tooltip-text">Quickview</span>
                                                                                        <span class="quick-view-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg></span>
                                                                                    </a>
                                                                                    <a href="wishlist.html" class="wishlist">
                                                                                        <span class="tooltip-text">Wishlist</span>
                                                                                        <span class="wishlist-icon"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg></span>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- pagination-area start -->
                                                    <div class="paginatoin-area">
                                                        <ul class="pagination-box">
                                                            <li class="number active">
                                                                <a href="javascript:void(0)">1</a>
                                                            </li>
                                                            <li class="number">
                                                                <a href="javascript:void(0)" title="2">2</a>
                                                            </li>
                                                            <li class="next np-icon">
                                                                <a href="javascript:void(0)" class="next" aria-label="Next" title="Next »">
                                                                    <i class="feather-chevron-right"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- pagination-area end -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-grli-wrap product-sidebar">
                                    <div class="main-collection-filters">
                                        <div class="shop-sidebar-inner">
                                            <div class="shop-sidebar-wrap filter-sidebar">
                                                <!-- button start -->
                                                <button class="close-filter-sidebar" type="button"><i class="fa-solid fa-xmark"></i></button>
                                                <!-- button end -->
                                                <facet-filters-form class="facets">
                                                <form class="facets__form" id="FacetFiltersForm">
                                                    <div id="FacetsWrapperDesktop" class="facets__wrapper">
                                                        <div class="shop-sidebar sidebar-filter">
                                                            <h6 class="title">Filter</h6>
                                                            <div class="facets-header">
                                                                <span class="product-count-text">23 products</span>
                                                                <span class="loading-spinner"><svg aria-hidden="true" focusable="false" role="presentation" class="spinner" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="path" fill="none" stroke-width="6" cx="33" cy="33" r="30"></circle></svg></span>
                                                            </div>
                                                            <div class="active-filter active-facets-desktop">
                                                                <ul>
                                                                    <li>
                                                                        <facet-remove>
                                                                        <a href="javascript:void(0)" class="clear-all">Clear all</a>
                                                                        </facet-remove>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="shop-sidebar sidebar-wedget">
                                                            <h6 class="title">Availability</h6>
                                                            <a href="#collapse-1" class="title" data-bs-toggle="collapse">Availability</a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected no-js-hidden">0 selected</span>
                                                                <facet-remove>
                                                                <a href="collection.html" class="facets__reset">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-1">
                                                                <ul class="multiple-filters scrollbar">
                                                                    <li class="availability">
                                                                        <label class="cust-checkbox-label availability in-stock">
                                                                            <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                                            <span class="filter-name">In stock</span>
                                                                            <span class="count-check">(23)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                    <li class="availability">
                                                                        <label class="cust-checkbox-label availability in-stock">
                                                                            <input type="checkbox" name="filter.v.availability" value="1" class="cust-checkbox">
                                                                            <span class="filter-name">Out of stock</span>
                                                                            <span class="count-check">(1)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="shop-sidebar sidebar-wedget">
                                                            <h6 class="title">Brand</h6>
                                                            <a href="#collapse-2" data-bs-toggle="collapse" class="title"></a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected no-js-hidden">0 selected</span>
                                                                <facet-remove>
                                                                <a href="collection.html" class="facets__reset">Reset</a>
                                                                </facet-remove>
                                                            </div>
                                                            <div class="collapse filter-element" id="collapse-2">
                                                                <ul class="multiple-filters scrollbar">
                                                                    <li class="brand">
                                                                        <label class="cust-checkbox-label">
                                                                            <input type="checkbox" name="cust-checkbox" class="cust-checkbox">
                                                                            <span class="filter-name">Naturo</span>
                                                                            <span class="count-check">(23)</span>
                                                                            <span class="cust-check"></span>
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="shop-sidebar sidebar-wedget">
                                                            <h6 class="title">Price</h6>
                                                            <a href="#collapse-3" data-bs-toggle="collapse" class="title">Price</a>
                                                            <div class="facets-header">
                                                                <span class="facets__selected">The highest price is $89.00</span>
                                                                <facet-remove><a href="collection.html" class="facets__reset">Reset</a></facet-remove>
                                                            </div>
                                                            <!-- Product-price start -->
                                                            <div class="collapse filter-element" id="collapse-3">
                                                                <price-range class="price-range">
                                                                    <div class="price-range-group group-range">
                                                                        <input type="range" class="range" min="0" max="89" value="0" id="range1">
                                                                        <input type="range" class="range" min="0" max="89" value="89" id="range2">
                                                                    </div>
                                                                    <div class="price-input-group group-input">
                                                                        <div class="price-range-input input-prefix">
                                                                            <label class="input-prefix-label">From</label>
                                                                            <span class="input-prefix-value">$ <span id="demo1"></span></span>
                                                                        </div>
                                                                        <span class="price-range-delimeter">-</span>
                                                                        <div class="price-range-input input-prefix">
                                                                            <label class="input-prefix-label">To</label>
                                                                            <span class="input-prefix-value">$ <span id="demo2"></span></span>
                                                                        </div>
                                                                    </div>
                                                                </price-range>
                                                            </div>
                                                            <!-- Product-price end -->
                                                            <!-- Product-color start -->
                                                            <div class="shop-sidebar sidebar-wedget color">
                                                                <h6 class="title">Color</h6>
                                                                <a href="#collapse-4" data-bs-toggle="collapse" class="title">Color</a>
                                                                <div class="facets-header">
                                                                    <span class="facets__selected">0 selected</span>
                                                                    <facet-remove>
                                                                    <a href="collection.html" class="facets__reset">Reset</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse filter-element" id="collapse-4">
                                                                    <ul class="multiple-filters scrollbar">
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color darkcyan">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">DarkCyan</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color darkkhaki">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">DarkKhaki</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color indianred">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">IndianRed</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color lavender">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">Lavender</span>
                                                                                <span class="count-check">(3)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color lightblue">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">LightBlue</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color lightseagreen">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">LightSeaGreen</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color lightskyblue">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">LightSkyBlue</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color lightslategray">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">LightSlateGray</span>
                                                                                <span class="count-check">(14)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color navajowhite">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">NavajoWhite</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color oldlace">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">OldLace</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color peachpuff">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">PeachPuff</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color salmon">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">Salmon</span>
                                                                                <span class="count-check">(7)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color seashell">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">SeaShell</span>
                                                                                <span class="count-check">(5)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color silver">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">Silver</span>
                                                                                <span class="count-check">(18)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="color">
                                                                            <label class="cust-checkbox-label color steelblue">
                                                                                <input type="checkbox" class="cust-checkbox">
                                                                                <span class="filter-name">SteelBlue</span>
                                                                                <span class="count-check">(6)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Product-color end -->
                                                            <!-- Product-size start -->
                                                            <div class="shop-sidebar sidebar-wedget size">
                                                                <h6 class="title">Size</h6>
                                                                <a href="#collapse-5" data-bs-toggle="collapse" class="title">Size</a>
                                                                <div class="facets-header">
                                                                    <span class="facets__selected">0 selected</span>
                                                                    <facet-remove>
                                                                    <a href="collection.html" class="facets__reset">Reset</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse filter-element" id="collapse-5">
                                                                    <ul class="multiple-filters scrollbar">
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 16gb">
                                                                                <input type="checkbox" value="16gb" class="cust-checkbox">
                                                                                <span class="filter-name">16gb</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 32gb">
                                                                                <input type="checkbox" value="32gb" class="cust-checkbox">
                                                                                <span class="filter-name">32gb</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 64gb">
                                                                                <input type="checkbox" value="64gb" class="cust-checkbox">
                                                                                <span class="filter-name">64gb</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 500gb">
                                                                                <input type="checkbox" value="500gb" class="cust-checkbox">
                                                                                <span class="filter-name">500gb</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 1tb">
                                                                                <input type="checkbox" value="1tb" class="cust-checkbox">
                                                                                <span class="filter-name">1tb</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 2tb">
                                                                                <input type="checkbox" value="2tb" class="cust-checkbox">
                                                                                <span class="filter-name">2tb</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="size">
                                                                            <label class="cust-checkbox-label size 3tb">
                                                                                <input type="checkbox" value="3tb" class="cust-checkbox">
                                                                                <span class="filter-name">3tb</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Product-size end -->
                                                            <div class="shop-sidebar sidebar-wedget type">
                                                                <h6 class="title">Product type</h6>
                                                                <a href="#collapse-6" data-bs-toggle="collapse" class="title">Product type</a>
                                                                <div class="facets-header">
                                                                    <span class="facets__selected">0 selected</span>
                                                                    <facet-remove>
                                                                    <a href="collection.html" class="facets__reset">Reset</a>
                                                                    </facet-remove>
                                                                </div>
                                                                <div class="collapse filter-element" id="collapse-6">
                                                                    <ul class="multiple-filters scrollbar">
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type air-fryer">
                                                                                <input type="checkbox" value="Air Fryer" class="cust-checkbox">
                                                                                <span class="filter-name">Air fryer</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type car-charger">
                                                                                <input type="checkbox" value="Car charger" class="cust-checkbox">
                                                                                <span class="filter-name">Car charger</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type dslr-camera">
                                                                                <input type="checkbox" value="Air Fryer" class="cust-checkbox">
                                                                                <span class="filter-name">Dslr camera</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type earbuds">
                                                                                <input type="checkbox" value="Earbuds" class="cust-checkbox">
                                                                                <span class="filter-name">Earbuds</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type game">
                                                                                <input type="checkbox" value="Game" class="cust-checkbox">
                                                                                <span class="filter-name">Game</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type game-controller">
                                                                                <input type="checkbox" value="Air Fryer" class="cust-checkbox">
                                                                                <span class="filter-name">Game controller</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type gimbal">
                                                                                <input type="checkbox" value="Gimbal" class="cust-checkbox">
                                                                                <span class="filter-name">Gimbal</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type hand-mixer">
                                                                                <input type="checkbox" value="Hand mixer" class="cust-checkbox">
                                                                                <span class="filter-name">Hand mixer</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type hard-drive">
                                                                                <input type="checkbox" value="Hard drive" class="cust-checkbox">
                                                                                <span class="filter-name">Hard drive</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type headphone">
                                                                                <input type="checkbox" value="Headphone" class="cust-checkbox">
                                                                                <span class="filter-name">Headphone</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type juicer">
                                                                                <input type="checkbox" value="Juicer" class="cust-checkbox">
                                                                                <span class="filter-name">Juicer</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type keyboard">
                                                                                <input type="checkbox" value="Keyboard" class="cust-checkbox">
                                                                                <span class="filter-name">Keyboard</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type large-tablet">
                                                                                <input type="checkbox" value="Large tablet" class="cust-checkbox">
                                                                                <span class="filter-name">Large tablet</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type mixer-grinder">
                                                                                <input type="checkbox" value="Mixer grinder" class="cust-checkbox">
                                                                                <span class="filter-name">Mixer grinder</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type mouse">
                                                                                <input type="checkbox" value="Mouse" class="cust-checkbox">
                                                                                <span class="filter-name">Mouse</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type notebook">
                                                                                <input type="checkbox" value="Notebook" class="cust-checkbox">
                                                                                <span class="filter-name">Notebook</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type phoner">
                                                                                <input type="checkbox" value="Phone" class="cust-checkbox">
                                                                                <span class="filter-name">Phone</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type slr-camera">
                                                                                <input type="checkbox" value="Slr camera" class="cust-checkbox">
                                                                                <span class="filter-name">Slr camera</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type speaker">
                                                                                <input type="checkbox" value="Speaker" class="cust-checkbox">
                                                                                <span class="filter-name">Speaker</span>
                                                                                <span class="count-check">(2)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type trimmer">
                                                                                <input type="checkbox" value="Trimmer" class="cust-checkbox">
                                                                                <span class="filter-name">Air fryer</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                        <li class="product type">
                                                                            <label class="cust-checkbox-label product type watch">
                                                                                <input type="checkbox" value="Watch" class="cust-checkbox">
                                                                                <span class="filter-name">Watch</span>
                                                                                <span class="count-check">(1)</span>
                                                                                <span class="cust-check"></span>
                                                                            </label>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                                </facet-filters-form>
                                            </div>
                                        </div>
                                        <!-- sidebar image start -->
                                        <div class="sidebar-banner banner-hover">
                                            <a href="collection.html" class="sidebar-img banner-img">
                                                <span class="sidebar-banner-image">
                                                    <img src="<?php echo e(asset('assets/image/collection/side-image.jpg')); ?>" class="img-fluid" alt="side-image">
                                                </span>
                                                <span class="sidebar-banner-icon"><i class="feather-arrow-right"></i></span>
                                            </a>
                                        </div>
                                        <!-- sidebar image end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- shop-page start -->
</div>
<?php /**PATH C:\xampp\htdocs\TechWiz4\TechWiz\resources\views/livewire/shopcomponent.blade.php ENDPATH**/ ?>