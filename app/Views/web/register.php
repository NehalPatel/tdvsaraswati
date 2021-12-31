
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.register'); ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <?php echo view('web/pages/styles'); ?>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/intl/build/css/intlTelInput.min1.css">
    <style type="text/css">
        .error{
            border: solid 1px red;
            color: red;
        }
        .error:hover{
            border: solid 1px red;
            color: red;
        }
        .errorAlert{
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }
    </style>
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
                    <a href="<?= base_url(); ?>" class="btn btn-outline-info" title="Home"><i class="fa fa-chevron-left"></i> Back to home</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="logo text-center btm-10">
                    <a href="<?= base_url(); ?>" title="logo"><img src="<?= base_url()."/".$config['logo']; ?>" class="img-fluid" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="Login-btn txt-rgt">
                    <a href="<?= base_url()."/web/login"; ?>" class="btn btn-outline-primary" title="instructor">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top-nav bar end-->
<!-- Signup start-->
<section id="signup" class="signup-block-main-block">
    <div class="container">
        <div class="col-lg-6 col-md-8 offset-md-3">
            <div class="signup-heading">
                <?= lang('app.sign_up_and'); ?>
            </div>

            <div class="signup-block">
                <form class="signup-form" method="POST" action="<?= base_url()."/web/submit_register"; ?>">
                    <input type="hidden" name="code" id="code" value="91">
                    <div class="form-group">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="name" id="name" placeholder="<?= lang('app.full_name'); ?>">
                        <span class="errorAlert" id="errorName" style="display: none;">
                            <strong>The name field is required.</strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" class="form-control" name="email" value="" id="email" placeholder="<?= lang('app.email'); ?>">
                        <span class="errorAlert" id="errorEmail" style="display: none;">
                            <strong>The email field is required.</strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="mobile" value="" id="mobile" placeholder="Mobile with Country code">
                        <span class="errorAlert" id="errorMobile" style="display: none;">
                            <strong>The mobile field is required.</strong>
                        </span>
                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        <span class="errorAlert" id="errorPassword" style="display: none;">
                            <strong>The password field is required.</strong>
                        </span>

                    </div>
                    <div class="form-group">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input id="confirm_password" type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
                        <span class="errorAlert" id="confirmPassword" style="display: none;">
                            <strong>Passwords do not match</strong>
                        </span>
                    </div>
                    <centeR>
                    <button onclick="return verify();" type="submit" title="Sign Up" class="btn btn-outline-primary btm-20">Signup</button>
                    </centeR>
                    <div class="signin-link text-center btm-20">
                        <?= lang('app.by_sign_up'); ?> <a href="<?= base_url(); ?>web/terms_condition" title="Policy">Terms &amp; Condition </a>, <a href="<?= base_url(); ?>web/privacy_policy" title="Policy">Privacy Policy.</a>
                    </div>
                    <hr>
                    <div class="sign-up text-center"><?= lang('app.already_have_account'); ?>?<a href="<?= base_url()."/web/login"; ?>" title="sign-up"> <?= lang('app.login'); ?></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--  Signup end-->
<!-- jquery -->
<?= view('web/pages/scripts'); ?>
<script src="<?= base_url(); ?>/assets/intl/build/js/intlTelInput.min.js"></script>
<script src="<?= base_url(); ?>/assets/intl/build/js/intlTelInput-jquery.min.js"></script>

<script>
    var count=0,mobile=$('#mobile'),sname=$('#name'),email=$('#email'),password=$('#password'),cpassword=$('#confirm_password');
    var base_path='<?= base_url()."/web/"; ?>';
    $(document).ready(function () {
        var input = document.querySelector("#telephone");

        $("#mobile").intlTelInput({
            preferredCountries: ["in"],
            autoHideDialCode : false,
            separateDialCode:true
        });
        $('#mobile').on('countrychange',function (iti) {
            var countryData = $("#mobile").intlTelInput("getSelectedCountryData");
            $('#code').val(countryData.dialCode);
        });
        mobile.blur(function () {
            if(mobile.val().trim()!=""){
                $.ajax({
                    type : 'post',
                    data : {
                        'mobile' : mobile.val().trim()
                    },
                    url : base_path + 'check_mobile',
                    success : function (response) {
                        var info=JSON.parse(response);
                        if(info.status=='false'){
                            $('#errorMobile').html('<strong>Mobile number is already registered with us please use different mobile number</strong>').fadeIn();
                            mobile.val('');
                        }
                        else{
                            $('#errorMobile').hide();
                        }
                    }
                });
            }
        });
    });
    function verify() {
        if(sname.val().trim()==""){
            $('#errorName').fadeIn();
            return false;
        }
        if(email.val().trim()==""){
            $('#errorEmail').fadeIn();
            return false;
        }
        if(mobile.val().trim()==""){
            $('#errorMobile').html('<strong>The mobile field is required.</strong>').fadeIn();
            return false;
        }
        if(password.val().trim()==""){
            $('#errorPassword').fadeIn();
            return false;
        }
        if(cpassword.val().trim()==""){
            $('#confirmPassword').fadeIn();
            return false;
        }
        return true;
    }
</script>

<!-- end jquery -->
</body>
<!-- body end -->
</html>