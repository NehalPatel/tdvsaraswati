
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.my_cart'); ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $config['meta_description']; ?>" />
    <meta name="keywords" content="<?= $config['meta_keywords']; ?>">
    <meta name="author" content="<?= $config['title']; ?>" />
    <meta name="MobileOptimized" content="320" />
    <?= view('web/pages/styles'); ?>
</head><!-- end head -->
<!-- body start-->
<body>
<!-- preloader -->

<!-- end preloader -->
<?= view('web/pages/header'); ?>

<?= view('web/pages/menu'); ?>

<!-- home start -->


<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading text-white"><?= lang('app.my_cart'); ?></h1>
    </div>
</section>
<!-- about-home end -->
<section id="cart-block" class="cart-main-block">
    <div class="container">
        <?php if(count($cart)!=0){ ?>
        <div class="cart-items btm-30">
            <h4 class="cart-heading">
                <?= count($cart); ?> <?= lang('app.courses_in_cart'); ?>
            </h4>
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <?php $gt=0; $dis=0; $total=0; $cnt=0;  foreach ($cart as $c){ $cnt++; $course_id=$c['id']; $category_id=$c['category_id']; ?>
                    <div class="cart-add-block">
                        <div class="row no-gutters">
                            <div class="col-lg-2 col-sm-6 col-5">
                                <div class="cart-img">
                                    <a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><img src="<?= base_url()."/".$c['image']; ?>" class="img-fluid" alt="blog"></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-6 col-6">
                                <div class="cart-course-detail">
                                    <div class="cart-course-name"><a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><?= $c['course']; ?></a></div>

                                    <div class="cart-course-update">  <?= $c['inserted_by']==0?"Admin":$teacher[$c['id']][0]['name']; ?></div>

                                </div>
                            </div>
                            <div class="col-lg-2 offset-lg-1 col-sm-6 col-6">
                                <div class="cart-actions">
                                    <span>
                                          <a href="<?= base_url()."/web/remove_cart/".$c['id']; ?>" class="cart-remove-btn display-inline" title="Remove From cart">Remove</a>
                                    </span>
                                    <br>
                                    <span>
                                        <a href="<?= base_url()."/web/add_wishlist/".$c['id']; ?>" class="cart-wishlisht-btn" title="Add to wishlist">Add to Wishlist</a>
                                    </span>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6 col-6">
                                <div class="row">
                                    <div class="col-lg-10 col-10">
                                        <div class="cart-course-amount">
                                            <ul>
                                                <li><i class="<?= $config['icon']; ?>"></i><?= $c['price']; $total+=$c['price']; ?></li>
                                                <li><s><i class="fa <?= $config['icon']; ?>"></i><?= $c['old_amt']; $gt+=$c['old_amt']; $dis+=($c['old_amt'] - $c['price']); ?></s></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="cart-total">

                        <div class="cart-price-detail">
                            <h4 class="cart-heading"><?= lang('app.total'); ?>:</h4>
                            <ul>
                                <li><?= lang('app.total_price'); ?><span class="categories-count"><i class="<?= $config['icon']; ?>"></i><?= $gt; ?></span></li>
                                <li><?= lang('app.offer_discount'); ?><span class="categories-count">-&nbsp;<i class="<?= $config['icon']; ?>"></i><?= $dis; ?></span></li>
                                <li class="wallet_div" id="wallet_display1">
                                    <?= lang('app.wallet_balance'); ?>
                                    <span class="categories-count"><i class="fa fa-inr"></i> <a href="javascript:;" title="report" id="getBalanceButton">Use M-Wallet</a></span>
                                </li>
                                <li class="wallet_div" id="wallet_display" style="display: none;">
                                    Redeemable (<?= $config['student_redeem']; ?>%)
                                    <span class="categories-count">- <i class="fa fa-inr"></i> <a href="#" title="report" id="redeem_amount"></a></span>
                                </li>
                                <li class="coupon_div" style="display: none;">
                                    Coupon Discount
                                    <span class="categories-count">- <i class="fa fa-inr"></i> <a href="#" title="report" id="coupon_amount"></a></span>
                                </li>
                                <li class="redeem_divs" style="display: none;color: red;">
                                    <i class="<?= $config['icon']; ?>"></i> <tm id="redeem_final_amount">100</tm> will be debited from your wallet on successful transaction
                                </li>
                                <li class="coupon_divs" style="display: none;color: green;">
                                    <i class="<?= $config['icon']; ?>"></i> <tm id="coupon_final_amount">100</tm> will be added to your wallet on successful transaction
                                </li>
                                <hr>
                                <li class="cart-total-two"><b><?= lang('app.total'); ?>:<span class="categories-count"><i class="<?= $config['icon']; ?>"></i><span id="totalAmountDisplay"><?= $total; ?></span></b></span></li>
                            </ul>
                        </div>


                        <div class="course-rate">


                            <div class="checkout-btn">
                                <form id="cart-form" method="post" action="<?= base_url()."/web/checkout"; ?>"
                                      data-parsley-validate class="form-horizontal form-label-left">
                                    <?php
                                        $_SESSION['pay_amount']=$total;
                                        $_SESSION['grand_total']=$gt;
                                    ?>

                                    <a href="<?= base_url()."/web/checkout"; ?>" class="btn btn-outline-primary" title="checkout"><?= lang('app.checkout'); ?></a>
                                </form>

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="coupon-apply">
                        <form id="cart-form" method="post"
                              data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="_token" value="MBvCIbFxQVUxpudFzOQctPY5NCqrka11HoN2Wq8y">
                            <div class="row no-gutters">
                                <div class="col-lg-9 col-9">
                                    <input type="hidden" name="user_id"  value="2" />
                                    <input type="text" id="coupon" name="coupon" value="" placeholder="<?= lang('app.enter_coupon'); ?>" />
                                </div>
                                <div class="col-lg-3 col-3">
                                    <button type="button" id="checkCouponButton" class="btn btn-outline-primary"><span><?= lang('app.apply'); ?></span></button>
                                    <button style="display: none;" type="button" id="cancelCouponButton" class="btn btn-outline-danger"><span>Cancel</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <?php  ?>
            </div>
        </div>
        <?php } else { ?>

            <center style="width: 100%;">
                <div class="no-result-courses btm-10"><?= lang('app.cart_empty'); ?> </div>
                <div class="recommendation-btn text-white text-center">
                    <a href="<?= base_url(); ?>" class="btn btn-primary" title="search"><b><?= lang('app.browse_course'); ?></b></a>
                </div>
            </center>
        <?php } ?>
    </div>

    <!--Model start-->
    <!--Model close -->
</section>

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>

<!-- jquery -->
<?= view('web/pages/scripts'); ?>


<!-- end jquery -->
</body>
<script type="text/javascript">
    var final=<?= $total; ?>;
    $(document).ready(function () {
        $('#getBalanceButton').click(function () {
            var that=$(this);
            that.html('Loading...');
            $.ajax({
               type : 'post',
               data : {
                   'student' : <?= $_SESSION['student']['id']; ?>,
                   'total' : final
               },
               url : '<?= base_url(); ?>/web/get_balance',
               success : function (response) {
                   var info=JSON.parse(response);
                   that.html(info.balance);
                   if(info.redeem > 0 )
                   {
                       $('#redeem_amount').html(info.redeem);
                       $('#redeem_final_amount').html(info.redeem);
                       $('.redeem_divs').show();
                       $('.coupon_div').hide();
                       $('.wallet_div').fadeIn();
                       var total=final;
                       var minus=parseInt(info.redeem);
                       var balance=total - minus;
                       $('#totalAmountDisplay').html(balance);
                   }

               }
            });
        });
        $('#checkCouponButton').click(function () {
           var that=$(this);
           that.html('<i class="fa fa-spinner fa-spin"></i> Checking...');
           $.ajax({
               type : 'post',
               data : {
                   'amount' : <?= $_SESSION['pay_amount']; ?>,
                   'code' : $('#coupon').val(),
                   'course_id' : <?= $course_id; ?>,
                   'category_id' : <?= $category_id; ?>,
                   'item_count' : <?= $cnt; ?>
               },
               url : '<?= base_url(); ?>/web/check_coupon',
               success : function (response) {
                   var info=JSON.parse(response);
                   that.html('Apply');
                   if(info.status=='true'){
                       $('.wallet_div').hide();
                       $('.coupon_div').fadeIn();
                       $('#totalAmountDisplay').html('<?= $_SESSION['pay_amount'] ?>');
                       var amount=parseInt(info.amount);
                       $('#coupon_final_amount').html(amount);
                       $('#coupon_amount').html(amount);
                       if(info.coupon_type=='c'){
                           var total=parseInt($('#totalAmountDisplay').html());
                            $('.coupon_divs').show();
                       }
                       else
                           var total=parseInt($('#totalAmountDisplay').html()) - parseInt(info.amount);
                       var balance=total;
                       $('#totalAmountDisplay').html(balance);
                       $('#coupon').prop('disabled',true);
                       $('.redeem_divs').hide();
                       that.hide();
                       $('#cancelCouponButton').fadeIn();
                   }
                   else{
                       alert(info.message);
                   }
               }
           });
        });
        $('#cancelCouponButton').click(function () {
            var that=$(this);
            $.ajax({
                url : '<?= base_url(); ?>/web/clear_coupons',
                success : function (response) {
                    $('#coupon').prop('disabled',false);
                    that.hide();
                    $('#checkCouponButton').fadeIn();
                    $('#getBalanceButton').html('Use M-Wallet');
                    $('.coupon_div').hide();
                    $('#wallet_display1').fadeIn();
                    $('#totalAmountDisplay').html('<?= $_SESSION['pay_amount']; ?>');
                }
            });
        });
    });
</script>
<!-- body end -->
</html> 
