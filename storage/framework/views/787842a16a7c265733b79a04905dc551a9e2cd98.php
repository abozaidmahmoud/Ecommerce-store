<!DOCTYPE html>
<html   lang="en">
<head>




    <title><?php echo e(trans('lang.title')); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href=<?php echo e(asset("images/icons/favicon.png")); ?>/>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/bootstrap/css/bootstrap.min.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("fonts/themify/themify-icons.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("fonts/Linearicons-Free-v1.0.0/icon-font.min.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("fonts/elegant-font/html-css/style.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/animate/animate.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/css-hamburgers/hamburgers.min.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/animsition/css/animsition.min.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/select2/select2.min.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/daterangepicker/daterangepicker.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/slick/slick.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("vendor/lightbox2/css/lightbox.min.css")); ?>>


    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("css/util.css")); ?>>
    <link rel="stylesheet" type="text/css" href=<?php echo e(asset("css/main.css")); ?>>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




<body class="animsition">

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header" dir="rtl">
        <div class="topbar">
            <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

            <span class="topbar-child1">
					<?php echo e(trans('lang.freeship')); ?>

				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						fashe@example.com
					</span>

                <div class="topbar-language rs1-select2">
                    <select class="selection-1" name="time">
                        <option><?php echo e(trans('lang.USD')); ?></option>
                        <option><?php echo e(trans('lang.EUR')); ?></option>
                    </select>
                </div>
                <!-- choose language -->
               <div class="topbar-language rs1-select2">
                     <select  onchange="location = this.value;">
                        <option value="<?php echo e(url('Lang/en')); ?>" <?php if(session('lang')=='en'): ?> selected <?php endif; ?> > English </option>
                        <option value="Lang/ar"  <?php if(session('lang')=='ar'): ?> selected <?php endif; ?>>عربى</option>
                     
                  </select>
              </div>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.blade.php" class="logo">
                <img src=<?php echo e(asset("images/icons/logo.png")); ?> alt="IMG-LOGO">
            </a>
            

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="index.blade.php"><?php echo e(trans('lang.home')); ?></a>
                            <ul class="sub_menu">
                                <li><a href="index.blade.php"><?php echo e(trans('lang.homev1')); ?></a></li>
                                <li><a href="home-02.blade.php"><?php echo e(trans('lang.homev2')); ?></a></li>
                                <li><a href="home-03.blade.php"><?php echo e(trans('lang.homev3')); ?></a></li>


                            </ul>
                        </li>

                        <li>
                            <a href="<?php echo e(route('product')); ?>"><?php echo e(trans('lang.products')); ?></a>
                        </li>

                        <li class="sale-noti">
                            <a href="<?php echo e(route('cart.index')); ?>"><?php echo e(trans('lang.viewcart')); ?></a>
                        </li>

                        <li>
                            <a href="cart.blade.php"><?php echo e(trans('lang.features')); ?></a>
                        </li>

                        <li>
                            <a href="blog.html"><?php echo e(trans('lang.blog')); ?></a>
                        </li>

                        <li>
                            <a href="about.html"><?php echo e(trans('lang.about')); ?></a>
                        </li>

                        <li>
                            <a href="contact.blade.php"><?php echo e(trans('lang.contact')); ?></a>
                        </li>
                    </ul>
                </nav>
            </div>



            <!-- Header Icon -->
            <div class="header-icons">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src=<?php echo e(asset("images/icons/icon-header-01.png")); ?> class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src=<?php echo e(asset("images/icons/icon-header-02.png")); ?> class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti"><?php echo e(Cart::count()); ?></span>
                      

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <?php if(Cart::count()==0): ?>
<li class="header-cart-item">
  <div class="alert alert-primary" role="alert">
    <?php echo e(trans('lang.noitem')); ?>

  </div>
</li>
<?php else: ?>
                            <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src=<?php echo e(asset("images/item-cart-01.jpg")); ?> alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                       <?php echo e($item->name); ?>

                                    </a>

                                    <span class="header-cart-item-info">
											<?php echo e($item->qty); ?> x $<?php echo e($item->price); ?>

										</span>
                                </div>
                            </li>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <?php endif; ?>

                        </ul>

                        <div class="header-cart-total">
                            <?php echo e(trans('lang.total')); ?>: <?php echo e(Cart::subtotal()); ?>

                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.blade.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    <?php echo e(trans('lang.viewcart')); ?>

                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    <?php echo e(trans('lang.checkout')); ?>

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
            <img src=<?php echo e(asset("images/icons/logo.png")); ?> alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src=<?php echo e(asset("images/icons/icon-header-01.png")); ?> class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src=<?php echo e(asset("images/icons/icon-header-02.png")); ?> class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti"><?php echo e(Cart::count()); ?></span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            
<?php if(Cart::count()==0): ?>
<li class="header-cart-item">
  <div class="alert alert-primary" role="alert">
    <?php echo e(trans('lang.noitem')); ?>

  </div>
</li>
<?php else: ?>
                            
                      <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src=<?php echo e(asset("images/item-cart-03.jpg")); ?> alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                       <?php echo e($item->name); ?>

                                    </a>

                                    <span class="header-cart-item-info">
											<?php echo e($item->qty); ?> x $<?php echo e($item->price); ?>

										</span>
                                </div>
                            </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>


                        </ul>

                        <div class="header-cart-total">
                            <?php echo e(trans('lang.total')); ?>: $<?php echo e(Cart::subtotal()); ?>

                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.blade.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    <?php echo e(trans('lang.viewcart')); ?>

                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    <?php echo e(trans('lang.checkout')); ?>

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
							<?php echo e(trans('lang.freeship')); ?>

						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								fashe@example.com
							</span>

                        <div class="topbar-language rs1-select2">
                            <select class="selection-1" name="time">
                                <option><?php echo e(trans('lang.USD')); ?></option>
                                <option><?php echo e(trans('lang.EUR')); ?></option>
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
                    <a href="index.blade.php"><?php echo e(trans('lang.home')); ?></a>
                    <ul class="sub-menu">
                        <li><a href="index.blade.php"><?php echo e(trans('lang.homev1')); ?></a></li>
                        <li><a href="home-02.blade.php"><?php echo e(trans('lang.homev2')); ?></a></li>
                        <li><a href="home-03.blade.php"><?php echo e(trans('lang.homev3')); ?></a></li>
                    </ul>
                    <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.blade.php"><?php echo e(trans('lang.shop')); ?></a>
                </li>

                <li class="item-menu-mobile">
                    <a href="product.blade.php"><?php echo e(trans('lang.sale')); ?></a>
                </li>

                <li class="item-menu-mobile">
                    <a href="cart.blade.php"><?php echo e(trans('lang.features')); ?></a>
                </li>

                <li class="item-menu-mobile">
                    <a href="blog.html"><?php echo e(trans('lang.blog')); ?></a>
                </li>

                <li class="item-menu-mobile">
                    <a href="about.html"><?php echo e(trans('lang.about')); ?></a>
                </li>

                <li class="item-menu-mobile">
                    <a href="contact.blade.php"><?php echo e(trans('lang.contact')); ?></a>
                </li>
            </ul>
        </nav>
    </div>



</header>



<?php echo $__env->yieldContent('section'); ?>


        <!-- Footer -->
            <footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
                <div class="flex-w p-b-90">
                    <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
                        <h4 class="s-text12 p-b-30">
                            <?php echo e(trans('lang.keep_in_touch')); ?>

                        </h4>

                        <div>
                            <p class="s-text7 w-size27">
                                Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us on (+1) 96 716 6879
                            </p>

                            <div class="flex-m p-t-30">
                                <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                                <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                                <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                                <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                                <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                            </div>
                        </div>
                    </div>

                    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                        <h4 class="s-text12 p-b-30">
                            <?php echo e(trans('lang.cateogeries')); ?>

                        </h4>

                        <ul>
                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.man')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.women')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.dresses')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.glasses')); ?>

                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                        <h4 class="s-text12 p-b-30">
                            <?php echo e(trans('lang.link')); ?>

                        </h4>

                        <ul>
                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.search')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.about_us')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.contact_us')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.returns')); ?>

                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
                        <h4 class="s-text12 p-b-30">
                            <?php echo e(trans('lang.help')); ?>

                        </h4>

                        <ul>
                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.trach_order')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.returns')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.shipping')); ?>

                                </a>
                            </li>

                            <li class="p-b-9">
                                <a href="#" class="s-text7">
                                    <?php echo e(trans('lang.faqs')); ?>

                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
                        <h4 class="s-text12 p-b-30">
                            <?php echo e(trans('lang.newsletter')); ?>

                        </h4>

                        <form>
                            <div class="effect1 w-size9">
                                <input class="s-text7 bg6 w-full p-b-5" type="text" name="email" placeholder="email@example.com">
                                <span class="effect1-line"></span>
                            </div>

                            <div class="w-size2 p-t-20">
                                <!-- Button -->
                                <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                                    <?php echo e(trans('lang.subscripe')); ?>

                                </button>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="t-center p-l-15 p-r-15">
                    <a href="#">
                        <img class="h-size2" src=<?php echo e(asset("images/icons/paypal.png")); ?> alt="IMG-PAYPAL">
                    </a>

                    <a href="#">
                        <img class="h-size2" src=<?php echo e(asset("images/icons/visa.png")); ?> alt="IMG-VISA">
                    </a>

                    <a href="#">
                        <img class="h-size2" src=<?php echo e(asset("images/icons/mastercard.png")); ?> alt="IMG-MASTERCARD">
                    </a>

                    <a href="#">
                        <img class="h-size2" src=<?php echo e(asset("images/icons/express.png")); ?> alt="IMG-EXPRESS">
                    </a>

                    <a href="#">
                        <img class="h-size2" src=<?php echo e(asset("images/icons/discover.png")); ?> alt="IMG-DISCOVER">
                    </a>

                    <div class="t-center s-text8 p-t-20">
                         
                            <?php echo e(trans('lang.copyright')); ?>

                        <i class="fa fa-heart-o " aria-hidden="true" ></i>by  <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </div>
                </div>
            </footer>



            <!-- Back to top -->
            <div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
            </div>

            <!-- Container Selection1 -->
            <div id="dropDownSelect1"></div>



            <script type="text/javascript" src=<?php echo e(asset("vendor/jquery/jquery-3.2.1.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/animsition/js/animsition.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/bootstrap/js/popper.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/bootstrap/js/bootstrap.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/select2/select2.min.js")); ?>></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<script type="text/javascript" src=<?php echo e(asset("vendor/slick/slick.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("js/slick-custom.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/countdowntime/countdowntime.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/lightbox2/js/lightbox.min.js")); ?>></script>
<script type="text/javascript" src=<?php echo e(asset("vendor/sweetalert/sweetalert.min.js")); ?>></script>
<script type="text/javascript">
   
</script>
<script src=<?php echo e(asset("js/main.js")); ?>></script>
<script src=<?php echo e(asset("js/extention.js")); ?>></script>


</body>

</html>
