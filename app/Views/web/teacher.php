
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> <?= $modify['name']; ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $config['meta_description']; ?>" />
    <meta name="keywords" content="<?= $config['meta_keywords']; ?>">
    <meta name="author" content="<?= $config['title']; ?>" />
    <meta name="MobileOptimized" content="320" />
    <!-- theme styles -->
    <link rel="icon" type="image/icon" href="<?php echo base_url()."/".$config['favicon']; ?>"> <!-- favicon-icon -->

    <link href="https://mediacity.co.in/eclass/demo/public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/> <!-- bootstrap css -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:300,400,500,700" rel="stylesheet"> <!--  google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap:400,500,600,700" rel="stylesheet"><!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/all.css" /> <!--  fontawesome css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/flaticon.css" /> <!-- fontawesome css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/menumaker.css" /> <!-- navigation css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/owl.carousel.min.css" /> <!-- owl carousel css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/protip.css" /> <!-- menu css -->


    <link href="<?php echo base_url(); ?>/assets/web/css/style.css" rel="stylesheet" type="text/css"> <!-- custom css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/colorbox.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/font-awesome.min.css"><!-- fontawesome css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/select2.min.css"> <!-- select2 css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/pace.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/custom-style.css">

    <!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>
<!-- preloader -->

<!-- end preloader -->
<?= view('web/pages/header'); ?>
<!-- home start -->

<section id="instructor-block" class="instructor-main-block instructor-profile">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="instructor-block" style="font-weight: normal;">
                    <div class="instructor-small-heading"><?= lang('app.teacher'); ?></div>
                    <br>
                    <p style="color:#0284A2;"><?= $modify['name']; ?></p>
                    <div class="sub-heading"><?= $modify['tagline']; ?></div>
                    <div>
                        <div class="instructor-student">
                            <div class="row">
                                <div class="col">
                                    <?= lang('app.total_students'); ?>
                                    <div class="total-number">
                                        <?= $total[0]['total']; ?>
                                    </div>
                                </div>
                                <div class="col">
                                    Total Reviews
                                    <div class="total-number">
                                        <?= $rtotal[0]['total']; ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="about-instructor">
                        <div class="heading" style="font-weight: normal;padding-top:10px;"><?= lang('app.about_me'); ?></div>
                        <div id="section">
                            <div class="article">
                                <?= $modify['description']; ?>
                            </div>
                        </div>
                        <div class="about-instructor">
                            <div class="heading" style="font-weight: normal;"><?= lang('app.my_courses'); ?>
                                (<?= count($course); ?>)
                            </div>
                            <div class="row">
                                <?php foreach ($course as $co) { ?>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="student-view-block">
                                        <div class="view-block">
                                            <div class="view-img">
                                                <a href="<?php echo base_url()."/web/course/".$co['id']."/".clean($co['course']); ?>"><img src="<?php echo base_url()."/".$co['image']; ?>" alt="<?= $co['course']; ?>" class="img-fluid"></a>
                                            </div>
                                            <div class="view-dtl">
                                                <div class="view-heading btm-10"><a href="<?php echo base_url()."/web/course/".$co['id']."/".clean($co['course']); ?>"><?= $co['course']; ?></a></div>
                                                <?php
                                                $rate=floatval($average[$co['id']][0]['total']);
                                                $per=($rate * 100) / 5;
                                                ?>
                                                <div class="rating">
                                                    <ul>
                                                        <li>
                                                            <div class="pull-left">
                                                                <div class="star-ratings-sprite"><span style="width:<?= round($per,1); ?>%" class="star-ratings-sprite-rating"></span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <b><?= round($average[$co['id']][0]['total'],1); ?></b>
                                                        </li>
                                                        <li>(<?= $total_rate[$co['id']][0]['total']; ?>)</li>
                                                    </ul>
                                                </div>
                                                <div class="rate text-right">
                                                    <ul>
                                                        <li><a><b>Free</b></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="pull-right"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="instructor-img">
                    <img style="width: 200px;" src="<?= base_url()."/".$modify['image']; ?>" alt="img" class="img-fluid">
                </div>
                <div class="instructor-link">
                    <ul>
                        <a href="<?= $modify['twitter']; ?>" target="_blank"><li><i class="fa fa-twitter"></i>Twitter</li></a>
                        <a href="<?= $modify['facebook']; ?>" target="_blank"><li><i class="fa fa-facebook-f"></i>Facebook</li></a>
                        <a href="<?= $modify['youtube']; ?>" target="_blank"><li><i class="fa fa-youtube"></i>Youtube</li></a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-home start -->
<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>
<!-- jquery -->
<?= view('web/pages/scripts'); ?>
<!-- end jquery -->
</body>
<!-- body end -->
</html> 
