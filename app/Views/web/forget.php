
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.login'); ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <?php echo view('web/pages/styles'); ?>
</head>

<!-- end head -->
<!-- body start-->
<body>
<!-- top-nav bar start-->
<section id="nav-bar" class="nav-bar-main-block nav-bar-main-block-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="nav-bar-btn btm-20">
                    <a href="<?= base_url(); ?>" class="btn btn-secondary" title="Home"><i class="fa fa-chevron-left"></i><?= lang('app.back_to_home'); ?></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo text-center btm-10">
                    <a href="<?= base_url(); ?>" title="logo"><img src="<?= base_url()."/".$config['logo']; ?>" class="img-fluid" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="Login-btn txt-rgt">
                    <a href="<?= base_url()."/web/login"; ?>" class="btn btn-outline-primary" title="Login to System"><?= lang('app.login'); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top-nav bar end-->
<!-- Signup start-->
<section id="signup" class="signup-block-main-block">
    <?php
    if(isset($_SESSION['notification'])){
        ?>
        <div class="offset-md-3 col-md-offset-3 col-md-6 animated fadeInDown alert alert-<?= $_SESSION['notification']['type']; ?>" role="alert">
            <?= $_SESSION['notification']['message']; ?>
        </div>
        <?php unset($_SESSION['notification']); } ?>
    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="signup-heading">
                <?= lang('app.login_to_your'); ?> <?= $config['title']; ?> <?= lang('app.account'); ?>!
            </div>

            <div class="signup-block">

                <div class="signin-link btm-10">
<!--                    <a href="--><?//= base_url()."/auth/facebook"; ?><!--" title="facebook" class="btn btn-info btm-10"><i class="fa fa-facebook"></i>--><?//= lang('app.continue_facebook'); ?><!--</a>-->

<!--                    <div class="google">-->
<!--                        <a href="--><?//= base_url()."/auth/google"; ?><!--" title="google" class="btn btn-white btm-10"><i class="fa fa-google-plus-g"></i>--><?//= lang('app.continue_google'); ?><!--</a>-->
<!--                    </div>-->
                    <form method="POST" id="mobile_login" class="signup-form">
                        <div class="form-group">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <input id="mobile" type="text" class="form-control" placeholder="Enter Mobile or Email" name="mobile" value="" required autofocus>
                        </div>
                        <div class="form-group" id="otp_div" style="display: none;">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <input id="otp" type="number" class="form-control" placeholder="OTP Password" name="otp">
                        </div>
                        <div class="form-group">
                            <button type="submit" id="LoginBtn" class="btn btn-outline-primary">
                                Get Password
                            </button>
                            <br>

                        </div>
                        <hr>
                        <div class="sign-up text-center"><?= lang('app.do_not_have_account'); ?>?
                            <a href="<?= base_url()."/web/login"; ?>" title="Login to System"> <?= lang('app.login'); ?></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</section>
<!--  Signup end-->
<!-- jquery -->
<?= view('web/pages/scripts'); ?>

<script>
    var count=0,mobile=$('#mobile'),otp='',login_id='';
    var base_path='<?= base_url()."/web/"; ?>';
    (function($) {
        "use strict";
        document.onkeydown = function(e) {
            if(event.keyCode == 123) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                return false;
            }
            if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                return false;
            }
        }
    })(jQuery);
    $(document).ready(function () {
        $('#userLoginButton').click(function () {
           $('#mobile_login').hide();
           $('#username_login').fadeIn();
        });
        $('#mobileLoginButton').click(function () {
           $('#username_login').hide();
            $('#mobile_login').fadeIn();
        });
       $('#submitButton').click(function () {
           var that=$(this);
           mobile=$('#mobile');
           if(mobile.val().trim().length<10){
               mobile.addClass('is-invalid');
               mobile.focus();
               return false;
           }
           mobile.removeClass('is-invalid');
           if(count==0){
               $.ajax({
                   type : 'post',
                   data : {
                       'mobile' : $('#mobile').val().trim()
                   },
                   url : base_path + 'send_otp',
                   success : function (response) {
                       var info=JSON.parse(response);
                       if(info.status=='false')
                           alert("Mobile number not found");
                       else{
                           $('#otp_div').fadeIn();
                           $('#LoginBtn').hide();
                           $('#password').hide();
                           mobile.prop('disabled',true);
                           otp=info.otp;
                           login_id=info.id;
                           count=1;
                       }
                   }
               });
           }
           else{
               var otpCode=$('#otp');
               if(otpCode.val().trim()==''){
                   otpCode.addClass('is-invalid').focus();
                   return false;
               }
               if(otpCode.val().trim()!=otp){
                   alert('Invalid OTP Code');
                   return false;
               }
               $.ajax({
                   type : 'post',
                   data : {
                       'id' : login_id
                   },
                   url : base_path + 'logined_student',
                   success : function (response) {
                       var info=JSON.parse(response);
                       if(info.status=='true')
                       {
                           window.location='<?php echo base_url(); ?>';
                       }
                   }
               });
           }
       });
       // $(mobile).blur(function () {
       //     if(mobile.val().trim().length<10){
       //         mobile.addClass('is-invalid');
       //         mobile.focus();
       //         return false;
       //     }else{
       //         mobile.removeClass('is-invalid');
       //     }
       // });
    });
</script>

<!-- end jquery -->
</body>
<!-- body end -->
</html>