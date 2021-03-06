@extends('frontend.layouts.master')

@section('content')
<!--product-details-area start-->
<div class="product-details-area mt-20">
    <div class="container-fluid">
        <div class="product-details">
            <div class="row">
                <div class="col-lg-1 col-md-2">
                    <ul class="nav nav-tabs products-nav-tabs">
                        <li><a class="active" data-toggle="tab" href="#product-1"><img src="{{ asset('/')}}frontendAssets/images/products/product-details/thumb-1.jpg" alt="" /></a></li>
                        <li><a data-toggle="tab" href="#product-2"><img src="{{ asset('/')}}frontendAssets/images/products/product-details/thumb-2.jpg" alt="" /></a></li>
                        <li><a data-toggle="tab" href="#product-3"><img src="{{ asset('/')}}frontendAssets/images/products/product-details/thumb-3.jpg" alt="" /></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tab-content">
                        <div id="product-1" class="tab-pane fade in show active">
                            <div class="product-details-thumb">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('/')}}frontendAssets/images/products/product-details/1.jpg"><i class="fa fa-search-plus"></i></a>
                                <img src="{{ asset('/')}}frontendAssets/images/products/product-details/1.jpg" alt="" />
                            </div>
                        </div>
                        <div id="product-2" class="tab-pane fade">
                            <div class="product-details-thumb">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('/')}}frontendAssets/images/products/product-details/2.jpg"><i class="fa fa-search-plus"></i></a>
                                <img src="{{ asset('/')}}frontendAssets/images/products/product-details/2.jpg" alt="" />
                            </div>
                        </div>
                        <div id="product-3" class="tab-pane fade">
                            <div class="product-details-thumb">
                                <a class="venobox" data-gall="myGallery" href="{{ asset('/')}}frontendAssets/images/products/product-details/3.jpg"><i class="fa fa-search-plus"></i></a>
                                <img src="{{ asset('/')}}frontendAssets/images/products/product-details/3.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-sm-50">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="product-details-desc">
                                <h2>Apple The New MacBook Retina 2016 MLHA2 12 inches</h2>
                                <ul>
                                    <li>1.6 GHz dual-core Intel Core i5 (Turbo Boost up to 2.7 GHz) with 3 MB shared L3 cache 8 GB of 1600 MHz LPDDR3 RAM; 128 GB PCIe-based flash storage</li>
                                    <li>13.3-Inch (diagonal) LED-backlit Glossy Widescreen Display, 1440 x 900 resolution Intel HD Graphics 6000</li>
                                    <li>OS X El Capitan, Up to 12 Hours of Battery Life Macbook Air does not have a Retina display on any model.</li>
                                    <li>Dimensions (W x H x D): TV without stand: 43.5??? x 25.4??? x 3.0???, TV with stand: 43.5??? x 27.6??? x 8.5???</li>
                                    <li>Inputs: 3 HMDI, 2 USB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 EthernetMultimedia Speakers 120 watts peak</li>
                                    <li>Inputs: 3 HMDI, 2 U SB, 1 RF, 1 Component, 1 Composite, 1 Optical, 1 RS232C, 1 Ethernet</li>
                                </ul>
                                <div class="product-meta">
                                    <ul class="list-none">
                                        <li>SKU: 00012 <span>|</span></li>
                                        <li>Categories:
                                            <a href="#">Tech</a>
                                            <a href="#">Macbook</a>
                                            <a href="#">Laptop</a>
                                            <span>|</span>
                                        </li>
                                        <li>Tags:
                                            <a href="#">Tech,</a>
                                            <a href="#">Apple</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-icons style-5">
                                    <span>Share Link:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="product-action stuck text-left">
                                <div class="free-delivery">
                                    <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                </div>
                                <div class="product-price-rating">
                                    <div>
                                        <del>629.99</del>
                                    </div>
                                    <span>$495.00</span>
                                    <div class="pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <div class="product-colors mt-20">
                                    <label>Select Color:</label>
                                    <ul class="list-none">
                                        <li>Red</li>
                                        <li>Black</li>
                                        <li>Blue</li>
                                    </ul>
                                    
                                </div>
                                <div class="product-quantity mt-15">
                                    <label>Quatity:</label>
                                    <input type="number" value="1" />
                                </div>
                                <div class="add-to-get mt-50">
                                    <a href="#" class="add-to-cart">Add to Cart</a>
                                    <a href="#" class="add-to-cart compare">+ ADD to Compare</a>
                                </div>
                                <div class="product-features mt-50">
                                    <ul class="list-none">
                                        <li>Satisfaction 100% Guaranteed</li>
                                        <li>Free shipping on orders over $99</li>
                                        <li>14 day easy Return</li>
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
<!--product-details-area end-->

<!--product-specifications-area start-->
<div class="product-review-area mt-45">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs product-review-nav">
                    <li><a class="active" data-toggle="tab" href="#description">Description</a></li>
                    <li><a data-toggle="tab" href="#specifications">Specifications</a></li>
                    <li><a data-toggle="tab" href="#reviews">Reviews (02)</a></li>
                </ul>
                <div class="tab-content">
                    <div id="description" class="tab-pane fade in show active">
                        <div class="product-description">
                            <h2>Product information</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="site-image mb-25">
                                <h3>Wake up on your own private island in an almost <br/> untouched part of the world</h3>
                                <img src="{{ asset('/')}}frontendAssets/images/products/product-details/4.jpg" alt="" />
                                <a class="venobox video-play" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://youtu.be/ScMzIvxBSi4"><i class="ti-control-play"></i></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
                            <div class="row align-items-center mt-20">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/')}}frontendAssets/images/products/product-details/5.jpg" alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <h2>Product information</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="row align-items-center mt-30">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/')}}frontendAssets/images/products/product-details/6.jpg" alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <h2>An incredible view</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="row align-items-center mt-30">
                                <div class="col-lg-6">
                                    <img src="{{ asset('/')}}frontendAssets/images/products/product-details/7.jpg" alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <h2>Best option for you!</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="specifications" class="tab-pane fade specifications">
                        <table class="table table-bordered">
                            <tr>
                                <td>Customer Rating</td>
                                <td>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <span>(05)</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><strong class="price">$495.00</strong></td>
                            </tr>
                            <tr>
                                <td>RAM Size</td>
                                <td>8 GB</td>
                            </tr>
                            <tr>
                                <td>Screen Size</td>
                                <td>13 in</td>
                            </tr>
                            <tr>
                                <td>Display Technology</td>
                                <td>LED</td>
                            </tr>
                            <tr>
                                <td>Hard-Drive Size</td>
                                <td>128 GB</td>
                            </tr>
                            <tr>
                                <td>Operating System</td>
                                <td>Mac OS X</td>
                            </tr>
                            <tr>
                                <td>Wireless Compatibility</td>
                                <td>802.11abg, 802.11 A/C, 802.11 a/b/g/n, 802.11A</td>
                            </tr>
                        </table>
                    </div>
                    <div id="reviews" class="tab-pane fade">
                        <div class="blog-comments product-comments mt-0">
                            <ul class="list-none">
                                <li>
                                    <div class="comment-avatar text-center">
                                        <img src="{{ asset('/')}}frontendAssets/images/blog/comment/4.jpg" alt="" />
                                        <div class="product-rating mt-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="comment-desc">
                                        <span>27 Aug 2019</span>
                                        <h4>Jenney Kelley</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="comment-avatar text-center">
                                        <img src="{{ asset('/')}}frontendAssets/images/blog/comment/5.jpg" alt="" />
                                        <div class="product-rating mt-10">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </div>
                                    <div class="comment-desc">
                                        <span>27 Aug 2019</span>
                                        <h4>Brandon William</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-comment-form product-comment-form mt-05">
                            <h4><span>Add Review</span></h4>
                            <div class="row mt-30">
                                <div class="col-sm-6 single-form">
                                    <input type="text" placeholder="Name" />
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" placeholder="Email" />
                                </div>
                                <div class="col-sm-12">
                                    <div class="product-rating style-2">
                                        <span>Your Rating:</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <textarea placeholder="Messages"></textarea>
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn-common mt-25">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product-specifications-area end-->

<!--products-area start-->
<div class="best-sellers mt-45">
    <div class="container-fluid fix">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Latest Products</h3>
                </div>
            </div>
        </div>
        <div class="row four-items cv-visible">
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Aquaracer</a></small>
                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring Robot</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/1.jpg" alt="" /></a>
                        <div class="downsale"><span>-</span>$35</div>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$395.00</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Iphone</a></small>
                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/2.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Camera</a></small>
                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/3.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$345.00</span>
                            <del>429.99</del>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Macbook</a></small>
                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/4.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Aquaracer</a></small>
                        <h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/5.jpg" alt="" /></a>
                        <div class="downsale"><span>-</span>$35</div>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$395.00</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Iphone</a></small>
                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/6.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Camera</a></small>
                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/3.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$345.00</span>
                            <del>429.99</del>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Macbook</a></small>
                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="{{ asset('/')}}frontendAssets/images/products/shop/4.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
                        </div>
                        <div class="pull-right">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                    </div>
                    <div class="product-action">
                        <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
                        <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                        <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--products-area end-->

<!--brands-area start-->
<div class="container-fluid mt-60">
    <div class="brands-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-items">
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/1.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/2.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/3.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/4.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/5.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/6.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/7.jpg" alt="" />
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{ asset('/')}}frontendAssets/images/brands/8.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brands-area end-->
@endsection

@section('js')
<script>
    $( document ).ready(function() {
        
        $('#menu').addClass("d-hidden");
    });
    
</script>

@endsection