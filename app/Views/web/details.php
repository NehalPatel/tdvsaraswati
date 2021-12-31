
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> <?= $modify['title']; ?> | <?= $config['title']; ?></title>
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
        <h1 class="wishlist-home-heading text-white"><?= $modify['title']; ?> </h1>
    </div>
</section>
<!-- about-home end -->
<section id="faq-detail-block" class="faq-detail-main-block">
    <div class="container">
        <div class="blog-link btm-30">
            <a href="<?= base_url(); ?>" title="back to Home"><i class="fa fa-chevron-left"></i>Back to Home</a>
        </div>
        <?= $modify['detail']; ?>
    </div>
</section>

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>

<!-- jquery -->
<?= view('web/pages/scripts'); ?>


<!-- end jquery -->
</body>
<!-- body end -->
</html> 
