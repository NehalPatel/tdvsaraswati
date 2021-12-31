<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome Page | <?= $config['title']; ?> </title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $config['meta_description']; ?>">
    <meta name="keyword" content="<?= $config['meta_keywords']; ?>">
    <?= view('web/pages/styles'); ?>
</head>

<body>

<!-- MOBILE MENU -->
<?= view('web/pages/header'); ?>
<!--END HEADER SECTION-->

<!-- SLIDER -->
<section>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="max-height: 500px;">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $cnt=1; foreach ($slider as $s) { ?>
            <div class="item slider1 <?php echo $cnt++==1?"active":""; ?>">
                <img src="<?= base_url()."/".$s['image']; ?>" alt="" style="height:500px;">
                <div class="carousel-caption slider-con">
                    <h2><?= $s['title']; ?></h2>
                    <p><?= $s['description']; ?></p>
                </div>
            </div>
            <?php } ?>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left slider-arr"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right slider-arr"></i>
        </a>
    </div>
</section>

<!-- QUICK LINKS -->

<!-- DISCOVER MORE -->

<!-- POPULAR COURSES -->
<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>Our <span>Facilities</span></h2>
                <p>We offer such facilities to our students</p>
            </div>
        </div>
        <div class="row">
            <?php $cnt=0; foreach ($facility as $f) { $cnt++; ?>
            <div class="col-md-6">
                <div>
                    <!--POPULAR COURSES-->
                    <div class="home-top-cour">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3"> <img src="<?= base_url()."/".$f['image']; ?>" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="<?= base_url()."/web/facilities/".$f['id']; ?>">
                                <h3><?= $f['title']; ?></h3>
                            </a>
                            <p><?= $f['short']; ?></p>

                            <div class="hom-list-share" style="width: 100%;">
                                <center>
                                <a class="btn btn-primary" href="<?= base_url()."/web/facilities/".$f['id']; ?>"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if($cnt%2==0) echo "</div><div class='row'>"; } ?>
        </div>
    </div>
</section>

<!-- UPCOMING EVENTS -->
<section>
    <div class="container com-sp pad-bot-0">
        <div class="row">
            <div class="col-md-6">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>Upcoming Event</h4>
                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <?php foreach ($upcoming as $u) { ?>
                        <li>
                            <div class="ho-ev-date"><span><?= date('d',strtotime($u['date'])); ?></span><span><?= date('M,Y',strtotime($u['date'])); ?></span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="<?= base_url()."/web/events/".$u['id']; ?>">
                                    <h4><?= $u['title']; ?></h4>
                                </a>
                                <p><?= $u['short']; ?></p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <br>
                    <br>
                    <centeR>
                        <a href="<?= base_url()."/web/all_events"; ?>" class="btn btn-warning">View All Events</a>
                    </centeR>
                </div>
            </div>
            <div class="col-md-6">
                <!--<div class="ho-ex-title">
                        <h4>Upcoming Event</h4>
                    </div>-->
                <div class="ho-ev-latest ho-ev-latest-bg-1">
                    <div class="ho-lat-ev">
                        <h4>News from School</h4>
                    </div>
                </div>
                <div class="ho-event ho-event-mob-bot-sp">
                    <ul>
                        <?php foreach ($news as $u) { ?>
                        <li>
                            <div class="ho-ev-date"><span><?= date('d',strtotime($u['date'])); ?></span><span><?= date('M,Y',strtotime($u['date'])); ?></span>
                            </div>
                            <div class="ho-ev-link">
                                <a href="<?= base_url()."/web/news/".$f['id']; ?>">
                                    <h4><?= $u['title']; ?></h4>
                                </a>
                                <p><?= $u['description']; ?></p>
                                <span>9:15 am – 5:00 pm</span>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                    <br><br>
                    <centeR>
                        <a href="<?= base_url()."/web/all_news"; ?>" class="btn btn-warning">View All News</a>
                    </centeR>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWS AND EVENTS -->
<section>
    <div class="container com-sp">
        <div class="row">
            <div class="con-title">
                <h2>News and <span>Events</span></h2>
                <p>All Recent Events will be display here.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="bot-gal h-gal ho-event-mob-bot-sp">
                    <h4>Photo Gallery</h4>
                    <div class="row">
                        <?php foreach ($gallery as $g) { ?>
                        <div class="col-md-3 col-xs-4" style="padding: 2%;">
                            <img style="width: 100%;height: 100%;" class="materialboxed" data-caption="<?= $g['title']; ?>" src="<?= base_url()."/".$g['image']; ?>" alt="">
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bot-gal h-blog ho-event">
                    <h4>Recent Events</h4>
                    <div class="ho-event">
                        <ul>
                            <?php foreach ($recent as $u) { ?>
                                <li>
                                    <div class="ho-ev-date"><span><?= date('d',strtotime($u['date'])); ?></span><span><?= date('M,Y',strtotime($u['date'])); ?></span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="<?= base_url()."/web/events/".$f['id']; ?>">
                                            <h4><?= $u['title']; ?></h4>
                                        </a>
                                        <p><?= $u['short']; ?></p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER COURSE BOOKING -->

<!-- FOOTER -->
<?= view('web/pages/footer'); ?>

<!-- COPY RIGHTS -->
<?= view('web/pages/copyright'); ?>

<!-- SOCIAL MEDIA SHARE -->
<?= view('web/pages/scripts'); ?>


</body>


<!-- Mirrored from rn53themes.net/themes/demo/education-master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:12:25 GMT -->
</html>