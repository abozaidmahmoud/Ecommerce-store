@extends('Template.indextemplate')

@section('section')



                <!-- Header Icon -->
                <div class="header-icons">
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src={{asset("images/icons/icon-header-01.png")}} class="header-icon1" alt="ICON">
                    </a>

                    <span class="linedivide1"></span>

                    <div class="header-wrapicon2">
                        <img src={{asset("images/icons/icon-header-02.png")}} class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src={{asset("images/item-cart-01.jpg")}} alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>

                                        <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src={{asset("images/item-cart-02.jpg")}} alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>

                                        <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src={{asset("images/item-cart-03.jpg")}} alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>

                                        <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-cart-total">
                                Total: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.blade.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{trans('lang.viewcart')}}
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{trans('lang.checkout')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Mobile -->
        <div class="wrap_header_mobile">
            <!-- Logo moblie -->
            <a href="index.blade.php" class="logo-mobile">
                <img src={{asset("images/icons/logo.png")}} alt="IMG-LOGO">
            </a>

            <!-- Button show menu -->
            <div class="btn-show-menu">
                <!-- Header Icon mobile -->
                <div class="header-icons-mobile">
                    <a href="#" class="header-wrapicon1 dis-block">
                        <img src={{asset("images/icons/icon-header-01.png")}} class="header-icon1" alt="ICON">
                    </a>

                    <span class="linedivide2"></span>

                    <div class="header-wrapicon2">
                        <img src={{asset("images/icons/icon-header-02.png")}} class="header-icon1 js-show-header-dropdown" alt="ICON">
                        <span class="header-icons-noti">0</span>

                        <!-- Header cart noti -->
                        <div class="header-cart header-dropdown">
                            <ul class="header-cart-wrapitem">
                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src={{asset("images/item-cart-01.jpg")}} alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            White Shirt With Pleat Detail Back
                                        </a>

                                        <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src={{asset("images/item-cart-02.jpg")}} alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Converse All Star Hi Black Canvas
                                        </a>

                                        <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                    </div>
                                </li>

                                <li class="header-cart-item">
                                    <div class="header-cart-item-img">
                                        <img src={{asset("images/item-cart-03.jpg")}} alt="IMG">
                                    </div>

                                    <div class="header-cart-item-txt">
                                        <a href="#" class="header-cart-item-name">
                                            Nixon Porter Leather Watch In Tan
                                        </a>

                                        <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="header-cart-total">
                                {{trans('lang.total')}}: $75.00
                            </div>

                            <div class="header-cart-buttons">
                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="cart.blade.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{trans('lang.viewcart')}}
                                    </a>
                                </div>

                                <div class="header-cart-wrapbtn">
                                    <!-- Button -->
                                    <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                        {{trans('lang.checkout')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
                </div>
            </div>
        </div>

        <!-- Menu Mobile -->
        <div class="wrap-side-menu" >
            <nav class="side-menu">
                <ul class="main-menu">
                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							{{trans('lang.freeship')}}
						</span>
                    </li>

                    <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                        <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                            <div class="topbar-language rs1-select2">
                                <select class="selection-1" name="time">
                                    <option>{{trans('lang.USD')}}</option>
                                    <option>{{trans('lang.EUR')}}</option>
                                </select>
                            </div>
                        </div>
                    </li>

                    <li class="item-topbar-mobile p-l-10">
                        <div class="topbar-social-mobile">
                            <a href="#" class="topbar-social-item fa fa-facebook"></a>
                            <a href="#" class="topbar-social-item fa fa-instagram"></a>
                            <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                            <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                            <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                        </div>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="index.blade.php">{{trans('lang.home')}}</a>
                        <ul class="sub-menu">
                            <li><a href="index.blade.php">{{trans('lang.homev1')}}</a></li>
                            <li><a href="home-02.blade.php">{{trans('lang.homev2')}}</a></li>
                            <li><a href="home-03.blade.php">{{trans('lang.homev3')}} </a></li>
                        </ul>
                        <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="product.blade.php">{{trans('lang.shop')}}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="product.blade.php">{{trans('lang.sale')}}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="cart.blade.php">{{trans('lang.features')}}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="blog.html">{{trans('lang.blog')}}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="about.html">{{trans('lang.about')}}</a>
                    </li>

                    <li class="item-menu-mobile">
                        <a href="contact.blade.php">{{trans('lang.contact')}}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Slide1 -->
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1" style="background-image: url(images/banners/banner-1.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
							{{trans('lang.women_collection')}}
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            {{trans('lang.new_arrival')}}
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="product.blade.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                {{trans('lang.shop')}}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1" style="background-image: url(images/banners/banner-2.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
							{{trans('lang.fur.collection')}}
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
                            {{trans('lang.new_arrival')}}
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                            <a href="product.blade.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                {{trans('lang.shop')}}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1" style="background-image: url(images/banners/banner-3.jpg);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
							{{trans('lang.childern_collection')}}
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
                            {{trans('lang.new_arrival')}}
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="product.blade.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                {{trans('lang.shop')}}
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Banner -->
    <section class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src={{asset("images/banners/sm-banner-01.jpg")}} alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                {{trans('lang.dresses')}}
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src={{asset("images/banners/sm-banner-03.jpg")}} alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                {{trans('lang.bags')}}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src={{asset("images/banners/sm-banner-02.jpg")}} alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                {{trans('lang.watches')}}
                            </a>
                        </div>
                    </div>

                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src={{asset("images/banners/sm-banner-04.jpg")}} alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                {{trans('lang.footwear')}}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                    <!-- block1 -->
                    <div class="block1 hov-img-zoom pos-relative m-b-30">
                        <img src={{asset("images/banners/sm-banner-05.jpg")}} alt="IMG-BENNER">

                        <div class="block1-wrapbtn w-size2">
                            <!-- Button -->
                            <a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                {{trans('lang.glasses')}}
                            </a>
                        </div>
                    </div>

                    <!-- block2 -->
                    <div class="block2 wrap-pic-w pos-relative m-b-30">
                        <img src={{asset("images/icons/bg-01.jpg")}} alt="IMG">

                        <div class="block2-content sizefull ab-t-l flex-col-c-m">
                            <h4 class="m-text4 t-center w-size3 p-b-8">
                               {{trans('lang.signup_and_get_offer')}}
                            </h4>

                            <p class="t-center w-size4">
                                {{trans('lang.be_first')}}
                            </p>

                            <div class="w-size2 p-t-25">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    {{trans('lang.signup')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Product -->
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    {{trans('lang.best_products')}}
                </h3>
            </div>

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">




@foreach($products as $product)
                    <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                <img src={{asset("images/item-05.jpg")}} alt="IMG-PRODUCT">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            {{trans('lang.add_to_cart')}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="product/{{$product->id}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$product->name}}
                                </a>

                                <span class="block2-price m-text6 p-r-5">
									{{$product->price}}.00 $
								</span>
                            </div>
                        </div>
                    </div>
@endforeach




                </div>
            </div>

        </div>
    </section>

    <!-- Banner2 -->
    <section class="banner2 bg5 p-t-55 p-b-55">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="hov-img-zoom pos-relative">
                        <img src={{asset("images/banners/lg-banner-01.jpg")}} alt="IMG-BANNER">

                        <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
							     {{trans('lang.beauty')}}
							</span>

                            <h3 class="l-text1 fs-35-sm">
                                {{trans('lang.lookbook')}}
                            </h3>

                            <a href="#" class="s-text4 hov2 p-t-20 ">
                                {{trans('lang.view_collection')}}n
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
                    <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
                        <img src={{asset("images/banners/lg-banner-02.jpg")}} alt="IMG-BANNER">

                        <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
                            <div class="t-center">
                                <a href="product-detail.blade.php" class="dis-block s-text3 p-b-5">
                                    Gafas sol Hawkers one
                                </a>

                                <span class="block2-oldprice m-text7 p-r-5">
									$29.50
								</span>

                                <span class="block2-newprice m-text8">
									$15.90
								</span>
                            </div>

                            <div class="flex-c-m p-t-44 p-t-30-xl">
                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 days">
										69
									</span>

                                    <span class="s-text5">
										{{trans('lang.days')}}
									</span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 hours">
										04
									</span>

                                    <span class="s-text5">
										{{trans('lang.hours')}}
									</span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 minutes">
										32
									</span>

                                    <span class="s-text5">
										{{trans('lang.mins')}}
									</span>
                                </div>

                                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
									<span class="m-text10 p-b-1 seconds">
										05
									</span>

                                    <span class="s-text5">
										{{trans('lang.secs')}}
									</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog -->
    <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="sec-title p-b-52">
                <h3 class="m-text5 t-center">
                    {{trans('lang.blog')}}
                </h3>
            </div>

            <div class="row">
                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src={{asset("images/blog-01.jpg")}} alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    Black Friday Guide: Best Sales & Discount Codes
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

                            <p class="s-text8 p-t-16">
                                Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src={{asset("images/blog-02.jpg")}} alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    The White Sneakers Nearly Every Fashion Girls Own
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

                            <p class="s-text8 p-t-16">
                                Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
                    <!-- Block3 -->
                    <div class="block3">
                        <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
                            <img src={{asset("images/blog-03.jpg")}} alt="IMG-BLOG">
                        </a>

                        <div class="block3-txt p-t-14">
                            <h4 class="p-b-7">
                                <a href="blog-detail.html" class="m-text11">
                                    New York SS 2018 Street Style: Annina Mislin
                                </a>
                            </h4>

                            <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
                            <span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

                            <p class="s-text8 p-t-16">
                                Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Instagram -->
    <section class="instagram p-t-20">
        <div class="sec-title p-b-52 p-l-15 p-r-15">
            <h3 class="m-text5 t-center">
                @ {{trans('lang.instragm')}}
            </h3>
        </div>

        <div class="flex-w">
            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src={{asset("images/gallery-03.jpg")}} alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
							{{trans('lang.photo_by')}} @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src={{asset("images/gallery-07.jpg")}} alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
							{{trans('lang.photo_by')}} @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src={{asset("images/gallery-09.jpg")}} alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
							{{trans('lang.photo_by')}} @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src={{asset("images/gallery-13.jpg")}} alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
							{{trans('lang.photo_by')}} @nancyward
						</span>
                    </div>
                </a>
            </div>

            <!-- Block4 -->
            <div class="block4 wrap-pic-w">
                <img src={{asset("images/gallery-15.jpg")}} alt="IMG-INSTAGRAM">

                <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
					<span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
						<i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
						<span class="p-t-2">39</span>
					</span>

                    <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
                        <p class="s-text10 m-b-15 h-size1 of-hidden">
                            Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
                        </p>

                        <span class="s-text9">
							{{trans('lang.photo_by')}} @nancyward
						</span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Shipping -->
    <section class="shipping bgwhite p-t-62 p-b-46">
        <div class="flex-w p-l-15 p-r-15">
            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    {{trans('lang.free_delivery')}}
                </h4>

                <a href="#" class="s-text11 t-center">
                    {{trans('lang.for_more_info')}}
                </a>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
                <h4 class="m-text12 t-center">
                    {{trans('lang.return_item')}}
                </h4>

                <span class="s-text11 t-center">
                    {{trans('lang.exchange_item')}}
				</span>
            </div>

            <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
                <h4 class="m-text12 t-center">
                    {{trans('lang.store_open')}}
                </h4>

                <span class="s-text11 t-center">
                    {{trans('lang.shop_open_days')}}
				</span>
            </div>
        </div>
    </section>






@endsection