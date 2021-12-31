<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> <?= $modify['topic']; ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="eClass fills in as a stage that permits teachers from everywhere throughout the world to spread information.
Let’s allow us to explain our product.

Students take courses largely as a me" />
    <meta name="keywords" content="eClass">
    <meta name="author" content="Media City" />
    <meta name="MobileOptimized" content="320" />
    <?php echo view('web/pages/styles'); ?>
    <!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>
<!-- preloader -->
<div class="preloader">
    <div class="status">
        <div class="status-message">
            <img src="<?= base_url()."/".$config['logo']; ?>" alt="logo" class="img-fluid">
        </div>
    </div>
</div>

<?php echo view('web/pages/header'); ?>
<!-- side navigation  -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
<!-- top-nav bar end-->
<!-- home start -->
<!-- categories-tab start-->

<?php echo view('web/pages/menu'); ?>


<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h4 class="wishlist-home-heading text-white"><i class="fa fa-home"></i>&nbsp;/&nbsp;Child Category / <?= $modify['topic']; ?></h4>
    </div>
</section>

<section id="search-block" class="search-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">

                <div id="listStyle" class="prod list-view">
                    <div class="view">
                        <i class="list fa fa-list selected" data-view="list-view"></i>
                        <i class="list fa fa-th" data-view="grid-view"></i>
                    </div>
                    <?php if(count($course)!=0)  { foreach ($course as $c){ ?>

                        <div class="item first">
                            <div class="course-bought-section protip" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block3">

                                <a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><img src="<?= base_url()."/".$c['image']; ?>" alt="" class="img-fluid"></a>

                                <div class="view-heading btm-10"><a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><?= $c['course']; ?></a></div>

                                <div class="categories-popularity-dtl">
                                    <ul>
                                        <li>
                                            <?= intval($videos[$c['id']][0]['total']); ?> Classes
                                        </li>
                                    </ul>
                                    <p><?= $c['short']; ?></p>
                                </div>
                                <div class="rate-grid ">
                                    <ul>

                                        <li class="rate-r"><s><i class="fa fa-inr"></i><?= $c['old_amt']; ?></s>&nbsp;<i class="fa fa-inr"></i><?= $c['price']; ?></li>

                                    </ul>
                                    <div class="rating">
                                        <?php
                                            $rate=floatval($average[$c['id']][0]['total']);
                                            $per=($rate * 100) / 5;
                                        ?>
                                        <ul>
                                            <li>
                                                <div class="pull-left">
                                                    <div class="star-ratings-sprite"><span style="width:<?= $per; ?>%" class="star-ratings-sprite-rating"> </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul>
                                        <li>
                                            (<?= intval($total_rate[$c['id']][0]['total']); ?> ratings)
                                        </li>
                                    </ul>
                                </div>
                                <div id="prime-next-item-description-block3" class="prime-description-block">
                                    <div class="prime-description-under-block">
                                        <div class="prime-description-under-block">
                                            <h6><?= lang('app.what_will_you_learn'); ?></h6>
                                            <?= $c['what_learn']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } } else { echo "<center><h3>".lang('no_course_found')."</h3></center>"; } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php echo view('web/pages/footer'); ?>
<!-- jquery -->
<?php echo view('web/pages/scripts'); ?>
<script>
    $(document).ready(function () {
       $('.list').click(function () {
           var that=$(this);
           if(that.data('view')=='list-view'){
               $('#listStyle').removeClass('grid-view').addClass('list-view');
           }
           else
            $('#listStyle').removeClass('list-view').addClass('grid-view');
           $('.list').removeClass('selected');
           that.addClass('selected');
       });
    });
</script>
</body>
</html>
