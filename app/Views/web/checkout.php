<?php
require_once APPPATH.'/Libraries/razorpay/Razorpay.php';
use Razorpay\Api\Api;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.checkout'); ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $config['meta_description']; ?>" />
    <meta name="keywords" content="<?= $config['meta_keywords']; ?>">
    <meta name="author" content="<?= $config['title']; ?>" />
    <meta name="MobileOptimized" content="320" />
    <?= view('web/pages/styles'); ?>
    <style type="text/css">
        .hide{
            display: none;
        }
    </style>
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
        <h1 class="wishlist-home-heading text-white"><?= lang('app.checkout'); ?></h1>
    </div>
</section>
<!-- about-home end -->
<section id="checkout-block" class="checkout-main-block">
    <div class="container">
        <div class="cart-items btm-30">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h4 class="cart-heading"><?= lang('app.your_items'); ?>
                        (<?= count($cart); ?>)
                    </h4>
                    <hr>
                    <?php foreach ($cart as $c) { ?>
                    <div class="checkout-items">
                        <div class="row btm-10">
                            <div class="col-lg-3 col-4">
                                <div class="checkout-course-img">
                                    <a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><img src="<?= base_url()."/".$c['image']; ?>" class="img-fluid" alt="course"></a>
                                </div>
                            </div>
                            <div class="col-lg-9 col-8">
                                <ul>
                                    <li class="checkout-course-title"><a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><?= $c['course']; ?></a></li>
                                    <li class="checkout-course-price"><b><i class="<?= $config['icon']; ?>"></i><?= $c['price']; ?></b>  <s><i class="<?= $config['icon']; ?>"></i><?= $c['old_amt']; ?></s></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <div class="checkout-pricelist">
                        <ul>
                            <li><h1 class="checkout-total">Total: <i class="<?= $config['icon']; ?>"></i><?= $payable=$_SESSION['pay_amount'] - $_SESSION['redeem'] - $_SESSION['coupon_value']; ?></h1></li>
                            <li><div class="checkout-price"><s><i class="<?= $config['icon']; ?>"></i><?= $_SESSION['grand_total']; ?></s></div></li>
<!--                            <li><div class="checkout-percent">20% Off</div></li>-->
                        </ul>
                    </div>
                    <div class="payment-gateways">
                        <div id="accordion" class="second-accordion">
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="headingOne">-->
<!--                                    <div class="panel-title">-->
<!--                                        <label for="r11">-->
<!--                                            <input type="radio" id="r11" name="occupation" value="Working" required="">-->
<!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" class="collapsed"></a>-->
<!--                                            <img src="https://mediacity.co.in/eclass/demo/public/images/payment/paypal2.png" class="img-fluid" alt="course">-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="collapseOne" class="panel-collapse in collapse" style="">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="payment-proceed-btn">-->
<!--                                            <form action="https://mediacity.co.in/eclass/demo/public/paywithpaypal" method="POST" autocomplete="off">-->
<!--                                                <input type="hidden" name="_token" value="WJ012wAVsX03kAMOGsM2RsQy97kQhc3g33CNkSf0">-->
<!--                                                <input type="hidden" name="amount" value="eyJpdiI6IlFNemcrZmtnMXRkUnZId3RjeFQ5NGc9PSIsInZhbHVlIjoiUmRRaW0yR2wxd2pESGJOV2tGTkxndz09IiwibWFjIjoiMzkyYzk5ZGU5NjYyZjJhNDU2MmFiMmU4ZjA2MTM0NTkwOWUwMTRiZTcyOTgxM2FjNDRjZTc1YzY5ZjllZWY4NCJ9">-->
<!--                                                <button class="btn btn-primary" title="checkout" type="submit">Proceed</button>-->
<!--                                            </form>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="headingTwo">-->
<!--                                    <div class="panel-title">-->
<!--                                        <label for="r12">-->
<!--                                            <input type="radio" id="r12" name="occupation" value="Working" required="">-->
<!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"></a>-->
<!---->
<!--                                            <img src="https://mediacity.co.in/eclass/demo/public/images/payment/instamojo.png" class="img-fluid-img" alt="course">-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="collapseTwo" class="panel-collapse collapse in">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="payment-proceed-btn">-->
<!---->
<!--                                            <form action="https://mediacity.co.in/eclass/demo/public/pay" method="POST" name="laravel_instamojo" autocomplete="off">-->
<!--                                                <input type="hidden" name="_token" value="WJ012wAVsX03kAMOGsM2RsQy97kQhc3g33CNkSf0">-->
<!---->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <strong>Name</strong>-->
<!--                                                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <strong>Mobile Number</strong>-->
<!--                                                            <input type="text" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required="" autocomplete="off">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <strong>Email Id</strong>-->
<!--                                                            <input type="email" name="email" class="form-control" placeholder="Enter Email id" required="">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <input type="hidden" name="amount" class="form-control" placeholder="" value="800" readonly="">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <button class="btn btn-primary" title="checkout" type="submit">Proceed</button>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!---->
<!--                                            </form>-->
<!---->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                            <?php if($payment['stripe_status']=='y') { ?>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <div class="panel-title">
                                        <label for="r13">
                                            <input type="radio" id="r13" name="occupation" value="Working" required="">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" class="collapsed"></a>
                                            <img src="https://mediacity.co.in/eclass/demo/public/images/payment/stripe.png" class="img-fluid" alt="course">
                                        </label>
                                    </div>
                                </div>
                                <div id="collapseThree" class="panel-collapse in collapse" style="">
                                    <div class="card-body">

                                        <div class="creditCardForm">

                                            <div class="payment">
                                                <form accept-charset="UTF-8" action="<?= base_url()."/web/paywithstripe"; ?>" method="POST" autocomplete="off" class="require-validation"
                                                      data-cc-on-file="false"
                                                      data-stripe-publishable-key="<?= $payment['stripe_key']; ?>"
                                                      id="payment-form">
                                                    <div class="form-group owner">
                                                        <label for="owner"><?= lang('app.name_on_card'); ?></label>
                                                        <input name="name" type="text" class="form-control" id="owner" required="">
                                                    </div>
                                                    <div class="form-group CVV">
                                                        <label for="cvv">CVV</label>
                                                        <input type="number" class="form-control card-cvc" id="cvv" name="cvv" required="">
                                                    </div>
                                                    <div class="form-group" id="card-number-field">
                                                        <label for="cardNumber"><?= lang('app.card_number'); ?></label>
                                                        <input type="number" class="form-control card-number" id="cardNumber" name="card_no" required="">
                                                    </div>
                                                    <div class="form-group" id="expiration-date">
                                                        <label><?= lang('app.expiry_date'); ?></label>
                                                        <select name="expiry_month" required="" class="card-expiry-month">
                                                            <option value="01">January</option>
                                                            <option value="02">February </option>
                                                            <option value="03">March</option>
                                                            <option value="04">April</option>
                                                            <option value="05">May</option>
                                                            <option value="06">June</option>
                                                            <option value="07">July</option>
                                                            <option value="08">August</option>
                                                            <option value="09">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>
                                                        <select name="expiry_year" required="" class="card-expiry-year">
                                                            <option value="2019">2019</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group" id="credit_cards">
                                                        <img src="https://mediacity.co.in/eclass/demo/public/images/payment/visa.jpg" id="visa">
                                                        <img src="https://mediacity.co.in/eclass/demo/public/images/payment/mastercard.jpg" id="mastercard">
                                                        <img src="https://mediacity.co.in/eclass/demo/public/images/payment/amex.jpg" id="amex">
                                                    </div>
                                                    <br>
                                                    <div class='row' style="width: 100%;">
                                                        <div class='col-md-12 error form-group hide'>
                                                            <div class='alert-danger alert'><?= lang('app.correct_details'); ?>.</div>
                                                        </div>
                                                    </div>

                                                    <input type="hidden" name="amount" value="<?= $payable; ?>">

                                                    <button class="form-control btn btn-outline-primary" type="submit"><?= lang('app.proceed'); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if($payment['razor_status']=='y') { ?>
                            <div class="card">
                                <div class="card-header" id="headingSix">
                                    <div class="panel-title">
                                        <label for="r16">
                                            <input type="radio" id="r16" name="occupation" value="Working" required="">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"></a>
                                            <img src="https://mediacity.co.in/eclass/demo/public/images/payment/razorpay.png" class="img-fluid" alt="course">
                                        </label>

                                    </div>
                                </div>
                                <div id="collapseSix" class="panel-collapse collapse in">
                                    <div class="card-body">
                                        <div class="payment-proceed-btn">
                                            <?php
                                            $_SESSION['orderId']=date('YmdHis').$_SESSION['student']['id'];
                                            $_SESSION['amount']=$payable;
                                            if($config['currency']=="INR")
                                                $_SESSION['payamount']=$_SESSION['amount'] * 100;
                                            $keyId=$payment['razor_key_id'];
                                            $secretKey=$payment['razor_secret_key'];
                                            $api=new Api($keyId,$secretKey);
                                            $order=$api->order->create(
                                                array(
                                                    'receipt' => $_SESSION['orderId'],
                                                    'amount' => $_SESSION['payamount'],
                                                    'payment_capture' => 1,
                                                    'currency' => $config['currency']
                                                )
                                            );
                                            ?>
                                            <form action="<?= base_url()."/web/razorpay_success"; ?>" method="post">
                                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                                        data-key="rzp_test_PwpFtLmDKvQqI7"
                                                        data-amount="<?= $_SESSION['payamount']; ?>"
                                                        data-currency="<?= $config['currency']; ?>"
                                                        data-order-id="<?= $_SESSION['orderId']; ?>"
                                                        data-button-text="Pay Using Razorpay"
                                                        data-name="My3Skills"
                                                        data-description="Course Enrollment Fees"
                                                        data-image="<?= base_url()."/".$config['logo']; ?>"
                                                        data-prefill.name="<?= $_SESSION['student']['name']; ?>"
                                                        data-prefill.email="<?= $_SESSION['student']['email']; ?>"
                                                        data-prefill.contact="<?= $_SESSION['student']['mobile']; ?>"
                                                        data-theme.color="#f0a43c"></script>
                                                <input type="hidden" value="<?= $_SESSION['orderId'] ?>" name="orderId">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="headingSeven">-->
<!--                                    <div class="panel-title">-->
<!--                                        <label for="r14">-->
<!--                                            <input type="radio" id="r14" name="occupation" value="Working" required="">-->
<!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"></a>-->
<!--                                            <img src="https://mediacity.co.in/eclass/demo/public/images/payment/paystack.png" class="img-fluid" alt="course">-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="collapseSeven" class="panel-collapse collapse in">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="payment-proceed-btn">-->
<!--                                            <form method="POST" action="https://mediacity.co.in/eclass/demo/public/paywithpaystack" accept-charset="UTF-8" class="form-horizontal" role="form">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-md-8 col-md-offset-2">-->
<!---->
<!--                                                        <input type="hidden" name="email" value="instructor@mediacity.co.in">-->
<!--                                                        <input type="hidden" name="amount" value="80000">-->
<!--                                                        <input type="hidden" name="metadata" value="{&quot;key_name&quot;:&quot;value&quot;}">-->
<!--                                                        <input type="hidden" name="reference" value="4ydFdiEKdSuA9KEUWJFM4k34d">-->
<!--                                                        <input type="hidden" name="key" value="sk_test_8c914b3f9e178d3c589965c35ec4e209230f5d6c">-->
<!--                                                        <input type="hidden" name="_token" value="WJ012wAVsX03kAMOGsM2RsQy97kQhc3g33CNkSf0">-->
<!---->
<!--                                                        <input type="hidden" name="_token" value="WJ012wAVsX03kAMOGsM2RsQy97kQhc3g33CNkSf0">-->
<!---->
<!--                                                        <p>-->
<!--                                                            <button class="btn btn-primary " type="submit" value="Pay Now">Proceed</button>-->
<!--                                                        </p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </form>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="card">-->
<!--                                <div class="card-header" id="headingFour">-->
<!--                                    <div class="panel-title">-->
<!--                                        <label for="r17">-->
<!--                                            <input type="radio" id="r17" name="occupation" value="Working" required="">-->
<!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"></a>-->
<!--                                            <img src="https://mediacity.co.in/eclass/demo/public/images/payment/paytm.png" class="img-fluid" alt="course">-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="collapseFour" class="panel-collapse collapse in">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="payment-proceed-btn">-->
<!--                                            <form method="post" action="https://mediacity.co.in/eclass/demo/public/paywithpayment" accept-charset="UTF-8" class="form-horizontal" role="form">-->
<!--                                                <input type="hidden" name="_token" value="WJ012wAVsX03kAMOGsM2RsQy97kQhc3g33CNkSf0">-->
<!--                                                <input type="hidden" name="user_id" value="2">-->
<!---->
<!---->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <strong>Name</strong>-->
<!--                                                            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="Instructor" required="">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <strong>Mobile Number</strong>-->
<!--                                                            <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile Number" value="9123456789" required="" autocomplete="off">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <strong>Email Id</strong>-->
<!--                                                            <input type="email" name="email" class="form-control" value="instructor@mediacity.co.in" placeholder="Enter Email id" required="">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <div class="form-group">-->
<!--                                                            <input type="hidden" name="amount" class="form-control" placeholder="" value="800" readonly="">-->
<!--                                                        </div>-->
<!--                                                    </div>-->
<!--                                                    <div class="col-md-12">-->
<!--                                                        <button class="btn btn-primary" title="checkout" type="submit">Proceed</button>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!---->
<!--                                            </form>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

<!--                            <div class="card">-->
<!--                                <div class="card-header" id="headingEight">-->
<!--                                    <div class="panel-title">-->
<!--                                        <label for="r18">-->
<!--                                            <input type="radio" id="r18" name="occupation" value="Working" required="">-->
<!--                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseEight"></a>-->
<!--                                             <b>Bank Transfer</b>-->
<!--                                        </label>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div id="collapseEight" class="panel-collapse collapse in">-->
<!--                                    <div class="card-body">-->
<!--                                        <div class="payment-proceed-btn">-->
<!--                                            <form method="POST" action="https://mediacity.co.in/eclass/demo/public/process/banktransfer" accept-charset="UTF-8" class="form-horizontal" role="form" enctype="multipart/form-data">-->
<!--                                                <input type="hidden" name="_token" value="WJ012wAVsX03kAMOGsM2RsQy97kQhc3g33CNkSf0">										        <div class="row">-->
<!--                                                    <div class="col-md-8 col-md-offset-2">-->
<!---->
<!--                                                        <input type="file" name="proof" required="">-->
<!--                                                        <br>-->
<!--                                                        <small>(Please upload Proof Document)</small>-->
<!---->
<!--                                                        <input type="hidden" name="amount" value="800">-->
<!---->
<!--                                                        <input type="hidden" name="user_id" value="2">-->
<!---->
<!--                                                        <input type="hidden" name="fname" value="Instructor">-->
<!---->
<!--                                                        <input type="hidden" name="mobile" value="9123456789">-->
<!---->
<!--                                                        <input type="hidden" name="email" value="instructor@mediacity.co.in">-->
<!---->
<!---->
<!--                                                        <p>-->
<!--                                                            <button class="btn btn-primary " type="submit" value="Pay Now">Proceed</button>-->
<!--                                                        </p>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </form>-->
<!---->
<!--                                            <div class="card">-->
<!--                                                <div class="card-header">-->
<!--                                                    <h5 class="card-title">Bank Transfer details</h5>-->
<!--                                                </div>-->
<!--                                                <ul class="list-group list-group-flush">-->
<!--                                                    <li class="list-group-item"><b>Account holder name:</b>&nbsp;admin</li>-->
<!--                                                    <li class="list-group-item"><b>Bank name:</b>&nbsp;your bank name</li>-->
<!--                                                    <li class="list-group-item"><b>Bank cccount number:</b>&nbsp;Your account number</li>-->
<!--                                                    <li class="list-group-item"><b>IFCS Code</b>:&nbsp;Your IFCS code</li>-->
<!--                                                    <li class="list-group-item"><b>Swift Code</b>:&nbsp;your swift code</li>-->
<!--                                                </ul>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>

<!-- jquery -->
<?= view('web/pages/scripts'); ?>


<!-- end jquery -->
</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        var $form = $(".require-validation");
        $('form.require-validation').bind('submit', function(e) {
            var $form         = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid         = true;
            $errorMessage.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorMessage.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-number').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeResponseHandler);
            }

        });

        function stripeResponseHandler(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
<!-- body end -->
</html> 
