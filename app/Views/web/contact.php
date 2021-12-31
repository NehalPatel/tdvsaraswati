
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> Contact Us | <?= $config['title']; ?></title>
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
        <h1 class="wishlist-home-heading text-white">Contact Us</h1>
    </div>
</section>
<!-- about-home end -->
<section id="contact-us" class="contact-us-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <img src="<?= base_url(); ?>/assets/images/contact1.png" class="img-fluid">
            </div>
            <div class="col-lg-5 col-md-6">
                <h4 class="contact-us-heading">Generate a Ticket</h4>
                <form id="demo-form2" method="post" action="<?= base_url()."/web/submit_contact"; ?>" data-parsley-validate="" class="form-horizontal form-label-left" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="mobile" id="mobile" placeholder="919898767676">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail">
                    </div>
                    <div class="comment btm-20">
                        <textarea id="comment" name="message" rows="6" placeholder="Your Message"></textarea>
                    </div>
                    <div class="contact-form-btn">
                        <button type="submit" class="btn btn-outline-primary" title="Send Message">Generate Ticket</button>
                        <a href="<?= base_url()."/web/check_status"; ?>" class="btn btn-outline-info" title="Send Message">Check Ticket Status</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="contact-dtl">
            <h4 class="contact-us-heading btm-40">Contact Details</h4>
            <div class="row">
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-map-marker"></i></li>
                        <li class="btm-10 caps">Address</li>
                        <li class="btm-40"><?= $config['address']; ?></li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-envelope"></i></li>
                        <li class="btm-10 caps">Email </li>
                        <li class="btm-40"><?= $config['email']; ?></li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-phone"></i></li>
                        <li class="btm-10 caps">Phone</li>
                        <li class="btm-40"><?= $config['contact']; ?></li>
                    </ul>
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
<!-- body end -->
</html> 
