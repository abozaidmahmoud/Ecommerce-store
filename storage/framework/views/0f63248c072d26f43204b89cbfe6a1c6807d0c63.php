<?php $__env->startSection('section'); ?>

    <!-- breadcrumb
    <div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
        <a href="index.blade.php" class="s-text16">
            Home
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="product.blade.php" class="s-text16">
            Women
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <a href="#" class="s-text16">
            T-Shirt
            <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
        </a>

        <span class="s-text17">
                $product->name
		</span>
    </div>
-->
    <!-- Product Detail -->
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">
                        <div class="item-slick3" data-thumb=<?php echo e(asset("images/thumb-item-01.jpg")); ?>>
                            <div class="wrap-pic-w">
                                <img src=<?php echo e(asset("images/product-detail-01.jpg")); ?> alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb=<?php echo e(asset("images/thumb-item-02.jpg")); ?>>
                            <div class="wrap-pic-w">
                                <img src=<?php echo e(asset("images/product-detail-02.jpg")); ?> alt="IMG-PRODUCT">
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb=<?php echo e(asset("images/thumb-item-03.jpg")); ?>>
                            <div class="wrap-pic-w">
                                <img src=<?php echo e(asset("images/product-detail-03.jpg")); ?> alt="IMG-PRODUCT">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    <?php echo e($product->name); ?>

                </h4>

                <span class="m-text17">

                    $ <?php echo e($product->price); ?>.00

				</span>

                <p class="s-text8 p-t-10">
                    <?php echo e($product->descreption); ?>

                </p>


                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">

                    </div>

                    <div class="flex-m flex-w">


                    </div>

                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>
                               
                                 <input class="qty size8 m-text18 t-center num-product" type="number" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                 <form id="buy" method="post" action="<?php echo e(route('cart.index')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
                                    <input type="hidden" name="name" value="<?php echo e($product->name); ?>">
                                    <input type="hidden" name="price" value="<?php echo e($product->price); ?>">
                                    <input name="qty" class="size8 m-text18 t-center num-product" type="hidden"  value="1">

                                </form>
                                <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-b-45">
                    <span class="s-text8 m-r-35">SKU: <?php echo e($product->id); ?>

</span>
                    <span class="s-text8">Categories:

                        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($category->name); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </span>
                </div>

                <!--  -->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Description
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                        <?php echo e($product->details); ?>


                        </p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Additional information
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8"><!--here you would add additional things---></p>
                    </div>
                </div>

                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Reviews (0)
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            Fusce ornare mi vel risus porttitor dignissim. Nunc eget risus at ipsum blandit ornare vel sed velit. Proin gravida arcu nisl, a dignissim mauris placerat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Relate Product -->
    <section class="relateproduct bgwhite p-t-45 p-b-138">
        <div class="container">

            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">

            <?php $__currentLoopData = $otherProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item-slick2 p-l-15 p-r-15">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                            <img src=<?php echo e(asset("images/item-05.jpg")); ?> alt="IMG-PRODUCT">

                            <div class="block2-overlay trans-0-4">
                                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                </a>

                                <div class="block2-btn-addcart w-size1 trans-0-4">
                                    <!-- Button -->
                                    <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="block2-txt p-t-20">
                            <a href="category/<?php echo e($product->id); ?>" class="block2-name dis-block s-text3 p-b-5">
                                <?php echo e($product->name); ?>

                            </a>

                            <span class="block2-price m-text6 p-r-5">
									<?php echo e($product->price); ?>.00 $
								</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
            </div>
        </div>
    </section>









<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template.indextemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>