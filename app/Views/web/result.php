
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title>Result | <?= $config['title']; ?></title>
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
        <h1 class="wishlist-home-heading text-white">Quiz Result</h1>
    </div>
</section>
<!-- about-home end -->
<section id="cart-block" class="cart-main-block">
    <div class="container">
        <div class="cart-items btm-30">
            <h3 class="cart-heading">
                Quiz Result
            </h3>
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    Your Name : <?= $_SESSION['student']['name']; ?><br>
                    Total Question : <?= $_SESSION['total_question']; ?><br>
                    Attempted : <?= $_SESSION['attempted']; ?><bR>
                    Score : <?= $_SESSION['obtain']; ?><br>
                    Status : <?= $_SESSION['obtain']>=$_SESSION['passing']?"Pass":"Fail"; ?>
                </div>
            </div>
        </div
    </div>

    <!--Model start-->
    <!--Model close -->
</section>

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>

<!-- jquery -->
<?php
    unset($_SESSION['total_question']);
    unset($_SESSION['attempted']);
    unset($_SESSION['obtain']);
    unset($_SESSION['passing']);
?>
<!-- end jquery -->
</body>
<!-- body end -->
</html> 
