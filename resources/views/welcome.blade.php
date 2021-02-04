<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rohim Store</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- all css here -->
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/pe-icon-7-stroke.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/bundle.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- header start -->
        <header>
            <div class="header-top-furniture wrapper-padding-2 res-header-sm">
                <div class="container-fluid">
                    <div class="header-bottom-wrapper">
                        <div class="logo-2 furniture-logo ptb-30">
                            <a href="index.html">
                                <img src="{{asset('frontend/assets/img/logo')}}" alt="">
                            </a>
                        </div>
                        <div class="menu-style-2 furniture-menu menu-hover">
                            <nav>
                                <ul>
                                    <li><a href="#">home</a>
                                        <ul class="single-dropdown">
                                            <li><a href="index.html">Fashion</a></li>
                                            <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                            <li><a href="index-fruits.html">fruits</a></li>
                                            <li><a href="index-book.html">book</a></li>
                                            <li><a href="index-electronics.html">electronics</a></li>
                                            <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                            <li><a href="index-food.html">food & drink</a></li>
                                            <li><a href="index-furniture.html">furniture</a></li>
                                            <li><a href="index-handicraft.html">handicraft</a></li>
                                            <li><a target="_blank" href="index-smart-watch.html">smart watch</a></li>
                                            <li><a href="index-sports.html">sports</a></li>
                                        </ul>
                                    </li>
                                   
                                   
                                    <li><a href="blog.html">blog</a></li>
                                    <li><a href="{{url('/ajaxproducts')}}">Show all Products</a></li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-cart">
                            <a class="icon-cart-furniture" href="#">
                                <i class="ti-shopping-cart"></i>
                                <span class="shop-count-furniture green">02</span>
                            </a>
                            <ul class="cart-dropdown">
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="{{asset('frontend/assets/img/cart/1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#"> Bits Headphone</a></h5>
                                        <h6><a href="#">Black</a></h6>
                                        <span>$80.00 x 1</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="{{asset('frontend/assets/img/cart/2.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#"> Bits Headphone</a></h5>
                                        <h6><a href="#">Black</a></h6>
                                        <span>$80.00 x 1</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="#"><img src="{{asset('frontend/assets/img/cart/3.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h5><a href="#"> Bits Headphone</a></h5>
                                        <h6><a href="#">Black</a></h6>
                                        <span>$80.00 x 1</span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#"><i class="ti-trash"></i></a>
                                    </div>
                                </li>
                                <li class="cart-space">
                                    <div class="cart-sub">
                                        <h4>Subtotal</h4>
                                    </div>
                                    <div class="cart-price">
                                        <h4>$240.00</h4>
                                    </div>
                                </li>
                                <li class="cart-btn-wrapper">
                                    <a class="cart-btn btn-hover" href="#">view cart</a>
                                    <a class="cart-btn btn-hover" href="#">checkout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mobile-menu-area d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                            <div class="mobile-menu">
                                <nav id="mobile-menu-active">
                                    <ul class="menu-overflow">
                                        <li><a href="#">HOME</a>
                                            <ul>
                                                <li><a href="index.html">Fashion</a></li>
                                                <li><a href="index-fashion-2.html">Fashion style 2</a></li>
                                                <li><a href="index-fruits.html">Fruits</a></li>
                                                <li><a href="index-book.html">book</a></li>
                                                <li><a href="index-electronics.html">electronics</a></li>
                                                <li><a href="index-electronics-2.html">electronics style 2</a></li>
                                                <li><a href="index-food.html">food & drink</a></li>
                                                <li><a href="index-furniture.html">furniture</a></li>
                                                <li><a href="index-handicraft.html">handicraft</a></li>
                                                <li><a href="index-smart-watch.html">smart watch</a></li>
                                                <li><a href="index-sports.html">sports</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about-us.html">about us</a></li>
                                                <li><a href="menu-list.html">menu list</a></li>
                                                <li><a href="login.html">login</a></li>
                                                <li><a href="register.html">register</a></li>
                                                <li><a href="cart.html">cart page</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">shop</a>
                                            <ul>
                                                <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                                <li><a href="shop-grid-3-col.html"> grid 3 column</a></li>
                                                <li><a href="shop.html">grid 4 column</a></li>
                                                <li><a href="shop-grid-box.html">grid box style</a></li>
                                                <li><a href="shop-list-1-col.html"> list 1 column</a></li>
                                                <li><a href="shop-list-2-col.html">list 2 column</a></li>
                                                <li><a href="shop-list-box.html">list box style</a></li>
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-3.html"> tab style 3</a></li>
                                                <li><a href="product-details-4.html">sticky style</a></li>
                                                <li><a href="product-details-5.html">sticky style 2</a></li>
                                                <li><a href="product-details-6.html">gallery style</a></li>
                                                <li><a href="product-details-7.html">gallery style 2</a></li>
                                                <li><a href="product-details-8.html">fixed image style</a></li>
                                                <li><a href="product-details-9.html">fixed image style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">BLOG</a>
                                            <ul>
                                                <li><a href="blog.html">blog 3 colunm</a></li>
                                                <li><a href="blog-2-col.html">blog 2 colunm</a></li>
                                                <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                <li><a href="blog-details.html">blog details</a></li>
                                                <li><a href="blog-details-sidebar.html">blog details 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html"> Contact  </a></li>
                                    </ul>
                                </nav>							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom-furniture wrapper-padding-2 border-top-3">
                <div class="container-fluid">
                    <div class="furniture-bottom-wrapper">
                        <div class="furniture-login">
                            <ul>
                                <li>Get Access: <a href="login.html">Login </a></li>
                                <li><a href="register.html">Reg </a></li>
                            </ul>
                        </div>
                        <div class="furniture-wishlist">
                            <ul>
                                <li><a data-toggle="modal" data-target="#exampleCompare" href="#"><i class="ti-reload"></i> Compare</a></li>
                                <li><a href="wishlist.html"><i class="ti-heart"></i> Wishlist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->

        <div class="shop-page-wrapper shop-page-padding ptb-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="shop-sidebar mr-50">
                            <div class="sidebar-widget mb-50">
                                <h3 class="sidebar-title">Search Products</h3>
                                <div class="sidebar-search">
                                    <form action="#">
                                        <input placeholder="Search Products..." type="text">
                                        <button><i class="ti-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget mb-40">
                                <h3 class="sidebar-title">Filter by Price</h3>
                                <div class="price_filter">
                                    {{-- <div id="slider-range"></div> --}}
                                    <form action="{{URL::current()}}">
                                    <div class="price_slider_amount">
                                        <div class="label-input">
                                            <label>Min: </label>
                                            <input style="border: 1px solid #ddd" type="text" name="min_price"  placeholder="1$" value="{{Input::get('min_price')}}" />
                                        </div>
                                        <div class="label-input" style="padding-top:10px ">
                                            <label>Max: </label>
                                            <input style="border: 1px solid #ddd" type="text" name="max_price"  placeholder="5000$" value="{{Input::get('max_price')}}"/>
                                        </div>
                                        <button>Filter</button> 
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-wrapper res-xl res-xl-btn">
                            <div class="shop-bar-area">
                                <div class="shop-bar pb-60">

                                    <div class="shop-filter-tab">
                                        <div class="shop-tab nav" role=tablist>
                                            <a class="active" href="#grid-sidebar1" data-toggle="tab" role="tab" aria-selected="false">
                                                <i class="ti-layout-grid4-alt"></i>
                                            </a>
                                            <a href="#grid-sidebar2" data-toggle="tab" role="tab" aria-selected="true">
                                                <i class="ti-menu"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="shop-product-content tab-content">
                                    <div id="grid-sidebar1" class="tab-pane fade active show">
                                        <div class="row">
                                            @foreach($products as $product)
                                            <div class="col-lg-6 col-md-6 col-xl-3">
                                                <div class="product-wrapper mb-30">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{asset('frontend/assets/img/product/fashion-colorful/1.jpg')}}" alt="">
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
                                                        <h4><a href="#">{{$product->name}} </a></h4>
                                                        <span>{{$product->price}} $</span>
                                                    </div>
                                                </div>
                                           </div>
                                           @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination-style mt-30 text-center">
                            <ul>
                                <li><a href="#"><i class="ti-angle-left"></i></a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">19</a></li>
                                <li class="active"><a href="#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<footer class="footer-area">
            <div class="footer-top-area bg-img pt-105 pb-65" style="background-image: url({{asset('frontend/assets/img/bg/1.jpg')}})" data-overlay="9">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Custom Service</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="register.html">My Account</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Track</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-3">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Categories</h3>
                                <div class="footer-widget-content">
                                    <ul>
                                        <li><a href="shop.html">Dress</a></li>
                                        <li><a href="shop.html">Shoes</a></li>
                                        <li><a href="shop.html">Shirt</a></li>
                                        <li><a href="shop.html">Baby Product</a></li>
                                        <li><a href="shop.html">Mans Product</a></li>
                                        <li><a href="shop.html">Leather</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="footer-widget mb-40">
                                <h3 class="footer-widget-title">Contact</h3>
                                <div class="footer-newsletter">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is dummy.</p>
                                    <div id="mc_embed_signup" class="subscribe-form pr-40">
                                        <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                            <div id="mc_embed_signup_scroll" class="mc-form">
                                                <input type="email" value="" name="EMAIL" class="email" placeholder="Enter Your E-mail" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div class="mc-news" aria-hidden="true">
                                                    <input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value="">
                                                </div>
                                                <div class="clear">
                                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
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
            <div class="footer-bottom black-bg ptb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="copyright">
                                <p>
                                    Copyright ©
                                    <a href="https://hastech.company/">HasTech</a> 2018 . All Right Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-quickview-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="{{asset('frontend/assets/img/quick-view/l1.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="{{asset('frontend/assets/img/quick-view/l2.jpg')}}" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="{{asset('frontend/assets/img/quick-view/l3.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="{{asset('frontend/assets/img/quick-view/s1.jpg')}}" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="{{asset('frontend/assets/img/quick-view/s2.jpg')}}" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="{{asset('frontend/assets/img/quick-view/s3.jpg')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Handcrafted Supper Mug</h3>
                                <div class="price">
                                    <span class="new">$90.00</span>
                                    <span class="old">$120.00  </span>
                                </div>
                                <div class="rating-number">
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
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">900</option>
                                            <option value="">700</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-hover-black" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- modal -->
        <div class="modal fade" id="exampleCompare" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="pe-7s-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog modal-compare-width" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="#">
                            <div class="table-content compare-style table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>
                                                <a href="#">Remove <span>x</span></a>
                                                <img src="{{asset('frontend/assets/img/cart/4.jpg')}}" alt="">
                                                <p>Blush Sequin Top </p>
                                                <span>$75.99</span>
                                                <a class="compare-btn" href="#">Add to cart</a>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="compare-title"><h4>Description </h4></td>
                                            <td class="compare-dec compare-common">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has beenin the stand ard dummy text ever since the 1500s, when an unknown printer took a galley</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Sku </h4></td>
                                            <td class="product-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Availability  </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>In stock</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Weight   </h4></td>
                                            <td class="compare-none compare-common">
                                                <p>-</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>Dimensions   </h4></td>
                                            <td class="compare-stock compare-common">
                                                <p>N/A</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>brand   </h4></td>
                                            <td class="compare-brand compare-common">
                                                <p>HasTech</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>color   </h4></td>
                                            <td class="compare-color compare-common">
                                                <p>Grey, Light Yellow, Green, Blue, Purple, Black </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"><h4>size    </h4></td>
                                            <td class="compare-size compare-common">
                                                <p>XS, S, M, L, XL, XXL </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="compare-title"></td>
                                            <td class="compare-price compare-common">
                                                <p>$75.99 </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- all js here -->
        <script src="{{asset('frontend/assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/popper.js')}}"></script>
        <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/waypoints.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/ajax-mail.js')}}"></script>
        <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
        <script src="{{asset('frontend/assets/js/main.js')}}"></script>
    </body>
</html>
