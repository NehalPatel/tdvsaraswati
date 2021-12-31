
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> <?= lang('app.my_courses'); ?> | <?= $config['title']; ?></title>
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
        <h1 class="wishlist-home-heading text-white">My Courses</h1>
    </div>
</section>
<!-- about-home end -->
<section id="learning-courses" class="learning-courses-main-block">
    <div class="container">
        <div class="row">
                <?php if(count($course)!=0) { foreach ($course as $c) { ?>
            <div class="col-lg-3 col-sm-6 col-md-4">
                <div class="view-block">
                    <div class="view-img">
                        <a href="<?= base_url()."/web/course_content/".$c['id']."/".clean($c['course']); ?>"><img src="<?= base_url()."/".$c['image']; ?>" class="img-fluid" alt="course">
                        </a>
                    </div>
                    <div class="view-dtl">
                        <div class="view-heading btm-10"><a href="<?= base_url()."/web/course_content/".$c['id']."/".clean($c['course']); ?>"><?= $c['course']; ?></a></div>
                        <p class="btm-10"><a href="#">by  <?= $c['inserted_by']==0?"Admin":$teacher[$c['id']][0]['name']; ?></a></p>
                        <div class="rating">
                            <ul>
                                <?php
                                $rate=floatval($average[$c['id']][0]['total']);
                                $per=($rate * 100) / 5;
                                ?>
                                <li>
                                    <div class="pull-left">
                                        <div class="star-ratings-sprite"><span style="width:<?= $per; ?>%" class="star-ratings-sprite-rating"></span>
                                        </div>
                                    </div>
                                </li>


                                <li>
                                    <b><?= round($average[$c['id']][0]['total'],1); ?></b>
                                </li>

                                <li>(<?= intval($total_rate[$c['id']][0]['total']); ?>)</li>
                            </ul>
                        </div>
                        <?php
                            $total=intval($total_video[$c['id']][0]['total']);
                            $played=count($played_video[$c['id']]);
                            if($total==0)
                                $per=0;
                            else
                                $per=($played * 100)/$total;
                        ?>
                        <div class="mycourse-progress">
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: <?= $per; ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <div class="complete"><?= lang('app.start_course'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } } else { ?>
                <center style="width: 100%;">
                    <div class="no-result-courses btm-10"><?= lang('app.course_empty'); ?> </div>
                    <div class="recommendation-btn text-white text-center">
                        <a href="<?= base_url(); ?>" class="btn btn-primary" title="search"><b><?= lang('app.browse_course'); ?></b></a>
                    </div>
                </center>
            <?php } ?>
        </div>
    </div>
    <div class="container-fluid" id="adsense">
        <!-- google adsense code -->
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
