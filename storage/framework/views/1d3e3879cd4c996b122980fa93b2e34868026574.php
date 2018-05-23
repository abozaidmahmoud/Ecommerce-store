<?php $__env->startSection('section'); ?>

    <!-- Cart -->
    <section class="cart bgwhite p-t-70 p-b-100">
        <div class="container">
            <!-- Cart item -->
            <div class="container-table-cart pos-relative">
                <div class="wrap-table-shopping-cart bgwhite">
                    <table class="table-shopping-cart">
                        <tr class="table-head">
                            <th class="column-1"></th>
                            <th class="column-2">Product</th>
                            <th class="column-3">Price</th>
                            <th class="column-4 p-l-70">Quantity</th>
                        </tr>
<?php if(Cart::count()==0): ?>

        <div class="alert alert-primary" role="alert">
          There is 0 Item on your cart !
        </div>
  


<?php else: ?>

                                  <?php if(session()->has('sucess_message')): ?>
                                      <div class="alert alert-warning" role="alert">
                                         <?php echo e(session()->get('sucess_message')); ?>

                                     </div>
                                  <?php endif; ?>

                  <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table-row">
                            <td class="column-1">
                                <div class="cart-img-product b-rad-4 o-f-hidden" data-form="<?php echo e($item->rowId); ?>">

                                    <form id="<?php echo e($item->rowId); ?>" action="<?php echo e(route('cart.delete',$item->rowId)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo e(method_field('DELETE')); ?>

                                        </form>





                                      <img src="<?php echo e(asset("images/item-10.jpg")); ?>" class="IMG-PRODUCT">
                                    
                                
                              

                                </div>

                                
                                    <form id="<?php echo e($item->rowId); ?>" action="<?php echo e(route('cart.wishlist',$item->rowId)); ?>" method="POST">
                                        <?php echo csrf_field(); ?>
                                        <input type="submit" name="submit" >
                                        </form>
                            </td>
                            <td class="column-2"><?php echo e($item->name); ?></td>
                            <td class="column-3"><?php echo e($item->price); ?></td>
                            <td class="column-4">
                                <div class="flex-w bo5 of-hidden w-size17">
                                    
                                    <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="<?php echo e($item->qty); ?>">

                                  
                                </div>
                            </td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

                    </table>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                <div class="flex-w flex-m w-full-sm">
                    <div class="size11 bo4 m-r-10">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
                    </div>

                    <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                        <!-- Button -->
                        <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Apply coupon
                        </button>
                    </div>
                </div>

                <div class="size10 trans-0-4 m-t-10 m-b-10">
                    <!-- Button -->
                <a href="<?php echo e(asset('cart/destroy')); ?>">
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Destroy Card
                    </button>
                </a> 
                </div>
            </div>

            <!-- Total -->
            <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                <h5 class="m-text20 p-b-24">
                    Cart Totals
                </h5>

                <!--  -->
                <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						$<?php echo e(Cart::subtotal()); ?>

					</span>
                </div>

                <!--  -->
                <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

                    <div class="w-size20 w-full-sm">
                        <p class="s-text8 p-b-23">
                            There are no shipping methods available. Please double check your address, or contact us if you need any help.
                        </p>

                        <span class="s-text19">
							Calculate Shipping
						</span>

                        <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                            <select class="selection-2" name="country">
                                <option>Select a country...</option>
                                <option>US</option>
                                <option>UK</option>
                                <option>Japan</option>
                            </select>
                        </div>

                        <div class="size13 bo4 m-b-12">
                            <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State /  country">
                        </div>

                        <div class="size13 bo4 m-b-22">
                            <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
                        </div>

                        <div class="size14 trans-0-4 m-b-10">
                            <!-- Button -->
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Update Totals
                            </button>
                        </div>
                    </div>
                </div>

                <!--  -->
                <div class="flex-w flex-sb-m p-t-26 p-b-30">

                   <span class="m-text22 w-size19 w-full-sm">
                        Tax (5%):
                    </span>

                    <span class="m-text21 w-size20 w-full-sm">
                        $<?php echo e(Cart::tax()); ?>

                    </span>


					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

                    <span class="m-text21 w-size20 w-full-sm">
						$<?php echo e(Cart::total()); ?>

					</span>
                </div>

                <div class="size15 trans-0-4">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Proceed to Checkout
                    </button>
                </div>
            </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('Template.indextemplate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>