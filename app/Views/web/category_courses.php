<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= $modify['category']; ?> | <?= $config['title']; ?></title>
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
<!-- categories-tab end-->
<!-- category-title start -->
<section id="business-home" class="business-home-main-block">
    <div class="container">
        <h1 class="text-white"><?= $modify['category']; ?></h1>
    </div>
</section>
<!-- category-title end -->
<!-- category-slider start -->
<section id="business-home-slider" class="business-home-slider-main-block">
    <div class="container">
        <div id="business-home-slider-two" class="business-home-slider owl-carousel">
            <?php foreach ($featured as $f){ ?>
            <div class="item business-home-slider-block">
                <div class="row">
                    <div class="col-md-5">
                        <div class="business-home-slider-img">
                            <a href="<?= base_url()."/web/course/".$f['id']."/".clean($f['course']); ?>"><img src="<?= base_url()."/".$f['image']; ?>" class="img-fluid" alt="course"></a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="categories-popularity-dtl">
                            <ul>
                                <li><?= lang('app.featured_courses'); ?></li>
                                <li class="heart float-rgt">
                                    <div class="heart">
                                        <form id="demo-form2" method="post" action="<?= base_url()."/web/add_wishlist"; ?>" data-parsley-validate
                                              class="form-horizontal form-label-left">
                                            <input type="hidden" name="_token" value="eHktRB8j9KwiEyFU05PEsDVS0aJbWvqiPC8L7Joj">
                                            <input type="hidden" name="course_id"  value="<?= $f['id']; ?>" />
                                            <button class="wishlisht-btn heart-category" title="Add to wishlist" type="submit"><i class="fa fa-heart rgt-10"></i></button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                            <div class="view-heading btm-10"><a href="<?= base_url()."/web/course/".$f['id']."/".clean($f['course']); ?>"><?= $f['course']; ?></a></div>
                            <div class="last-updated btm-10">Last Updated <?= date('d F Y',strtotime($f['modified'])); ?></div>
                            <ul>
                                <li class="rgt-5">
                                    4
                                    classes
                                </li>
                                <li class="rgt-5">All Levels</li>
                                <li class="rgt-5">
                                    <ul class="rating">
                                        <li>

                                            <div class="pull-left"><p>No Ratings</p></div>
                                        </li>
                                    </ul>
                                </li>
                                <!-- overall rating -->


                                <li>
                                    (0 ratings)
                                </li>
                            </ul>
                            <p class="btm-20"><?= $f['short']; ?></p>
                            <div class="business-home-slider-btn btm-20">
                                <a href="<?= base_url()."/web/course/".$f['id']."/".clean($f['course']); ?>" type="button" class="btn btn-info">Explore course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- category sliderslider end -->
<!-- sub categories start -->
<section id="categories" class="categories-main-block categories-main-block-one">
    <div class="container">
        <h4 class="categories-heading">Sub Categories</h4>
        <div class="row">
            <?php foreach ($subs as $s) { ?>
            <div class="col-lg-4 col-sm-6">
                <div class="categories-block">
                    <ul>
                        <li>
                            <a href="#" title="<?= $s['subcategory']; ?>"><i class="<?= $s['icon']==""?"fa fa-bars":$s['icon']; ?>"></i></a>
                        </li>
                        <li><a href="<?= base_url(); ?>/web/gotosubcategory/<?= $s['id']."/".clean($s['subcategory']); ?>"><?= $s['subcategory']; ?></a></li>
                    </ul>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>



<!-- sub categories end -->
<!-- instructor profiles start -->
<section id="instructors" class="instructors-main-block btm-40">
    <div class="container">
        <h4 class="btm-40">Popular Instructors</h4>
        <div id="testimonial-slider-one" class="testimonial-slider-main-block owl-carousel">
            <div class="item testimonial-block text-center btm-30">
                <div class="instructors-img-block btm-20">
                    <a href="https://mediacity.co.in/eclass/demo/public/instructor/2" title="instructor"><img src="https://mediacity.co.in/eclass/demo/public/images/user_img/159116551043.jpg" alt="User"></a>
                </div>
                <div class="instructors-dtl">
                    <ul>
                        <li>Instructor</li>
                        <li>
                            0                                    Course
                        </li>
                        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry....
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instructor profiles end -->
<!-- categories start -->
<section id="categories-popularity" class="categories-popularity-main-block">
    <div class="container">
        <h2 class="btm-40"><?= $modify['category']; ?> Courses</h2>
        <div class="row">
            <div class="col-lg-9">
                <div class="students-bought btm-30">
                    <?php foreach ($courses as $c) { ?>
                    <div class="course-bought-block protip" data-pt-placement="outside" data-pt-interactive="false" data-pt-title="#prime-next-item-description-block14">
                        <div class="row">
                            <div class="col-lg-4 col-md-4">
                                <a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><img src="<?= base_url()."/".$c['image']; ?>" alt="course" class="img-fluid"></a>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="categories-popularity-dtl">
                                    <div class="view-heading btm-10"><a href="<?= base_url()."/web/course/".$c['id']."/".clean($c['course']); ?>"><?= $c['course']; ?></a></div>
                                    <ul>
                                        <li>
                                            4 Classes
                                        </li>
                                        <li>
                                            0 Students
                                        </li>
                                        <li>All Levels</li>
                                    </ul>
                                    <p><?= $c['short']; ?></p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2">
                                <div class="rate text-right">
                                    <ul>

                                        <li class="rate-r"><i class="fa fa-inr"></i><?= $c['price'] * $_SESSION['rate']; ?>&nbsp;<s><i class="fa fa-inr"></i><?= $c['old_price'] * $_SESSION['rate']; ?></s> </li>
                                    </ul>
                                    <div class="rating">
                                        <ul>
                                            <li>
                                                <!-- star rating -->

                                                <div class="pull-left"><p>No Ratings</p></div>
                                            </li>

                                            <!-- overall rating -->


                                        </ul>
                                    </div>
                                    <ul>
                                        <li>
                                            (0 ratings)
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <hr>
                    <?php } ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="top-20"></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- categories end -->
<!-- testimonial end -->
<!-- footer start -->
<?php echo view('web/pages/footer'); ?>
<!-- jquery -->
<?php echo view('web/pages/scripts'); ?>

<script>
    $('.prime-cat').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('.sub-cate').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });

    $('.child-cate').on('click',function(){

        var url = $(this).data('url');

        location.href = url;

    });
</script>

<!-- end jquery -->
</body>
<!-- body end -->
</html> 
