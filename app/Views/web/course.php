<html lang="en"><!-- <![endif]--><!-- head -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> <?= $modify['course']; ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $config['meta_description']; ?>">
    <meta name="keywords" content="<?= $config['meta_keywords']; ?>">
    <meta name="author" content="My3Skills">
    <meta name="MobileOptimized" content="320">
    <?php echo view('web/pages/styles'); ?>

    <!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body class="pace-done" style="position: relative;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
        <div class="pace-progress-inner"></div>
    </div>
    <div class="pace-activity"></div></div>
<!-- top-nav bar start-->
<?php echo view('web/pages/header'); ?>

<!-- start search -->
<!-- start end -->

<!-- categories-tab start-->
<?php echo view('web/pages/menu'); ?>
<!-- categories-tab end-->

<section id="about-home" class="about-home-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about-home-block text-white">
                    <h1 class="about-home-heading text-white"><?= $modify['course']; ?></h1>
                    <p><?= $modify['short']; ?></p>
                    <?php
                        $rate=floatval($average[0]['total']);
                        $per=($rate * 100) / 5;
                    ?>
                    <ul>
                        <li>
                            <div class="pull-left">
                                <div class="star-ratings-sprite"><span style="width:<?= $per; ?>%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                        </li>



                        <li>
                            <?= round($average[0]['total'],1); ?> Rating
                        </li>
                        <li>
                            (<?= $total_rate[0]['total']; ?> <?= lang('app.reviews'); ?>)
                        </li>
                        <li>
                            <?= $enrolled[0]['total']; ?>
                            <?= lang('app.students_enrolled'); ?>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="#" title="about"><?= lang('app.created_by'); ?>: <?= $modify['inserted_by']==0?"Admin":$teacher[0]['name']; ?> </a></li>
                        <li><a href="#" title="about"><?= lang('app.last_updated'); ?>: <?= date('d F,Y',strtotime($modify['modified'])); ?></a></li>
                        <li><a href="#" title="about"><i class="fa fa-comment"></i></a> English</li>
                    </ul>
                </div>
            </div>
            <!-- course preview -->
            <div class="col-lg-4">
                <div class="about-home-icon text-white text-right">
                    <ul>
                        <?php if(in_array($modify['id'],$wishlists)) { ?>
                            <li class="about-icon-two">
                                <a href="<?php echo base_url()."/web/remove_wishlist/".$modify['id']; ?>" title="heart"><i class="fa fa-heart rgt-10"></i><?= lang('app.wishlist'); ?></a>
                            </li>

                        <?php } else { ?>
                            <li class="about-icon-one">
                                <a href="<?php echo base_url()."/web/add_wishlist/".$modify['id']; ?>" title="heart"><i class="fa fa-heart rgt-10"></i><?= lang('app.wishlist'); ?></a>
                            </li>

                        <?php } ?>
                    </ul>
                </div>

                <div class="about-home-product">
                    <div class="video-item hidden-xs">
                        <script type="text/javascript">
                            var video_url = '<iframe src="<?= base_url()."/".$modify['preview']; ?>" frameborder="0" allowfullscreen></iframe>';
                        </script>

                        <div class="video-device">
                            <img src="<?= base_url()."/".$modify['image']; ?>" class="bg_img img-fluid" alt="Background">
                            <div class="video-preview">
                                <a href="javascript:void(0);" class="btn-video-play"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class="about-home-dtl-training">
                        <div class="about-home-dtl-block btm-10">
                            <div class="about-home-rate">
                                <ul>

                                    <li><i class="fa fa-inr"></i><?= round($_SESSION['rate'] * $modify['price'],2); ?></li>
                                    <li><span><s><i class="fa fa-inr"></i><?= round($_SESSION['rate'] * $modify['old_amt'],2); ?></s></span></li>

                                </ul>
                            </div>
                            <div class="about-home-btn btm-20">
                                <?php if(in_array($modify['id'],$courses)) { ?>
                                <a href="<?= base_url()."/web/course_content/".$modify['id']; ?>" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Go To Course</a>
                                <?php } else if(in_array($modify['id'],$carts)) { ?>
                                <a href="<?= base_url()."/web/remove_cart/".$modify['id']; ?>" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Remove From Cart</a>
                                <?php } else { ?>
                                    <a href="<?= base_url()."/web/add_cart/".$modify['id']; ?>" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Add To Cart</a>
                                <?php  } ?>
                            </div>
                            <div class="about-home-includes-list btm-40">
                                <?= $modify['includes']; ?>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="container-fluid" id="adsense">
                        <!-- google adsense code -->
                    </div>
                </div>
                <br>

            </div>
        </div>
    </div>
</section>

<section id="about-product" class="about-product-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product-learn-block">
                    <h3 class="product-learn-heading">W<?= lang('app.what_will_you_learn'); ?></h3>
                    <div class="row" style="padding-left: 3%;padding-right: 3%;">
                        <?= $modify['what_learn']; ?>
                    </div>
                </div>
                <div class="requirements">
                    <h3><?= lang('app.requirement'); ?></h3>
                    <?= $modify['requirement']; ?>
                </div>
                <div class="description-block btm-30">
                    <h3><?= lang('app.description'); ?></h3>

                    <?= $modify['long']; ?>
                </div>


                <div class="course-content-block btm-30">
                    <h3><?= lang('app.course_content'); ?></h3>
                    <div class="faq-block">
                        <div class="faq-dtl">
                            <div id="accordion" class="second-accordion">

                                <div class="card">
                                    <div class="card-header" id="headingTwo19">
                                        <div class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo19" aria-expanded="false" aria-controls="collapseTwo">

                                                <div class="row">
                                                    <div class="col-lg-8 col-6">
                                                        <?= $modify['course'] ?>
                                                    </div>
                                                </div>

                                            </button>
                                        </div>

                                    </div>
                                    <div id="collapseTwo19" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            <table class="table">
                                                <tbody>
                                                <?php foreach ($cvideos as $v) { ?>
                                                    <tr>
                                                        <th class="class-icon">
                                                            <a href="#" title="Course"><i class="fa fa-play-circle"></i></a>
                                                        </th>

                                                        <td>

                                                            <div class="koh-tab-content">
                                                                <div class="koh-tab-content-body">
                                                                    <div class="koh-faq">
                                                                        <div class="koh-faq-question">

                                                                            <span class="koh-faq-question-span"> <?= $v['title']; ?>  </span>
                                                                            <i class="fa fa-sort-down" aria-hidden="true"></i>
                                                                        </div>
                                                                        <div class="koh-faq-answer" style="display: none;">
                                                                            <?= $v['description']; ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>

                                                        </td>

                                                        <td class="txt-rgt">
                                                            11:36 min
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="students-bought btm-30">
                    <h3><?= lang('app.recent_courses'); ?></h3>
                    <?php foreach ($recent as $r) { ?>
                    <div class="course-bought-block">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-12">
                                <div class="row">
                                    <div class="col-lg-4 col-sm-4 col-5">
                                        <div class="course-bought-img">

                                            <a href="<?= base_url()."/web/course/".$r['id']."/".clean($r['course']); ?>"><img src="<?= base_url()."/".$r['image']; ?>" class="img-fluid" alt="blog"></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-8 col-7">
                                        <div class="course-name"><a href="<?= base_url()."/web/course/".$r['id']."/".clean($r['course']); ?>"><?= $r['course']; ?></a></div>
                                        <div class="course-update"><?= lang('app.last_updated'); ?> <?= date('d M,Y',strtotime($r['modified'])); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-1 col-4">
                                <div class="course-user">
                                    <ul>
                                        <li><i class="fa fa-user"></i></li>
                                        <li>0</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-4">

                                <div class="course-currency txt-rgt">
                                    <ul>
                                        <li class="rate"><i class="fa fa-inr"></i><?= round($_SESSION['rate'] * $r['price'],2); ?></li>
                                        <li class="rate"><s><i class="fa fa-inr"></i><?= round($_SESSION['rate'] * $r['old_amt'],2); ?></s></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-2 col-4">
                                <div class="course-rate txt-rgt">
                                    <ul>
                                        <li>
                                            <div class="heart"><a href="<?= base_url()."/web/add_wishlist/".$r['id']; ?>" title="heart"><i class="fa fa-heart rgt-10"></i></a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="about-instructor-block">
                    <h3><?= lang('app.about_the_teacher'); ?></h3>
                    <h4><a href="<?php if(isset($teacher[0]['id'])) { echo  base_url()."/web/teacher/".$teacher[0]['id']; } else echo "#noAction"; ?>" title="instructor-name"><?= isset($teacher[0]['name'])?$teacher[0]['name']:"Admin"; ?></a></h4>
                    <div class="about-instructor btm-40">
                        <div class="row">
                            <div class="col">
                                <div class="instructor-img btm-30">
                                    <a href="<?php if(isset($teacher[0]['id'])) { echo base_url()."/web/teacher/".$teacher[0]['id'];  } else { echo "#"; } ?>" title="instructor"><img style="width: 150px;" src="<?php if(isset($teacher[0]['image'])) { echo base_url()."/".$teacher[0]['image']; } else { echo base_url()."/assets/images/noimage.png"; } ?>" class="img-fluid" alt="instructor"></a>
                                </div>
                            </div>
                            <div class="col">
                                <br>
                                <i class="fa fa-star"></i> <?= $trating[0]['total']; ?> Instuctor Rating<br>
                                <i class="fa fa-certificate"></i> <?= $treview[0]['total']; ?> Reviews<bR>
                                <i class="fa fa-users"></i> <?= $tstudent[0]['total']; ?> Students<br>
                                <i class="fa fa-video"></i> <?= $tcourse[0]['total']; ?> Courses<br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-sm-12">
                                <div class="instructor-block">
                                    <div class="instructor-name btm-10"></div>
                                    <div class="instructor-post btm-20"><?= lang('app.about_the_teacher'); ?></div>
                                    <?= $teacher[0]['description']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="student-feedback btm-40">
                    <h3 class="student-feedback-heading"><?= lang('app.student_feedback'); ?></h3>
                    <div class="student-feedback-block">

                        <div class="rating">

                            <div class="rating-num"><?= round($average[0]['total'],1); ?></div>


                            <div class="pull-left">
                                <div class="star-ratings-sprite star-ratings-center"><span style="width:<?= $per; ?>%" class="star-ratings-sprite-rating"></span>
                                </div>
                            </div>
                            <div class="rating-users"><?= lang('app.course_rating'); ?></div>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="report-abuse text-center btm-20">
                    <a href="#" title="report"><i class="fa fa-flag rgt-10"></i><?= lang('app.report'); ?></a>
                </div>

                <!--Model start-->
                <!--Model close -->
            </div>

        </div>
    </div>
</section>

<!-- footer start -->
<?= view('web/pages/footer'); ?>

<?= view('web/pages/scripts'); ?>
</body>
</html>