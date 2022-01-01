
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> Help | <?= $config['title']; ?></title>
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
<section id="help" class="help-main-block">
    <div class="container">
        <h1 class="help-heading text-white text-center"></h1>
        <div class="nav-search help-search text">
            <form action="<?= base_url()."/web/search"; ?>" class="form-inline search-form" method="GET">
                <div class="offset-lg-3 col-lg-6">
                    <div class="form-group">
                        <input type="text" class="form-control" id="search" name="searchTerm" placeholder="Search for courses" value="">
                        <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- about-home end -->
<section id="help-tab" class="help-tab-main-block">
    <div class="container">
        <div class="offset-lg-4 col-lg-6">
            <nav>
                <div class="nav nav-tabs btm-40" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Students </a>
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Teacher </a>
                </div>
            </nav>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="help-tab-heading btm-40">Frequently Asked Questions</div>
                <div class="help-tab-block btm-30">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php foreach ($sfaq as $s) { ?>
                                <div class="col-lg-4">
                                    <a href="<?= base_url()."/web/faq_detail/".$s['id']; ?>"><div class="categories-block help-tab"><?= $s['title']; ?></div></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="help-tab-heading btm-40">Select a topic to search for help</div>
                <div class="help-tab-block btm-30">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="categories-block help-tab-one text-center">
                                <a href="<?= base_url()."/web/purchase"; ?>">
                                    <ul>
                                        <li class="btm-10"><img src="https://mediacity.co.in/eclass/demo/public/images/icons/05.png"></li>
                                        <li class="btm-5"><span><?= lang('app.purchase_history'); ?></span></li>
                                        <li>See your purchase history &amp; explore more Courses</li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="categories-block help-tab-one text-center">
                                <a href="<?= base_url()."/web/profile"; ?>">
                                    <ul>
                                        <li class="btm-10"><img src="https://mediacity.co.in/eclass/demo/public/images/icons/02.png"></li>
                                        <li class="btm-5"><span><?= lang('app.my_profile'); ?></span></li>
                                        <li>Manage your account settings.</li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="categories-block help-contact text-center text-white">
                                <a href="<?= base_url()."/web/user_contact"; ?>">
                                    <ul>
                                        <li class="btm-10"><img src="https://mediacity.co.in/eclass/demo/public/images/icons/contact.png"></li>
                                        <br>
                                        <li class="text-white"><span>Contact us</span></li>
                                        <li class="text-white">Open a support ticket</li>
                                    </ul>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                <div class="help-tab-heading btm-40">Frequently Asked Questions</div>
                <div class="help-tab-block btm-30">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <?php foreach ($tfaq as $s) { ?>
                                    <div class="col-lg-4">
                                        <a href="<?= base_url()."/web/faq_detail/".$s['id']; ?>"><div class="categories-block help-tab"><?= $s['title']; ?></div></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="help-tab-heading btm-40">Select a topic to search for help</div>
                <div class="help-tab-block btm-30">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="categories-block help-tab-one text-center">
                                <a href="#" data-toggle="modal" data-target="#myModalinstructor" title="Become An Instructor">
                                    <ul>
                                        <li class="btm-10"><img src="https://mediacity.co.in/eclass/demo/public/images/icons/08.png"></li>
                                        <li class="btm-5"><span><?= lang('app.become_an_instructor'); ?></span></li>
                                        <li>To Become An Online Instructor</li>
                                    </ul>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="categories-block help-contact text-center text-white">
                                <a href="<?= base_url()."/web/user_contact"; ?>">
                                    <ul>
                                        <li class="btm-10"><img src="https://mediacity.co.in/eclass/demo/public/images/icons/contact.png"></li>
                                        <br>
                                        <li class="text-white"><span>Contact us</span></li>
                                        <li class="text-white">Open a support ticket</li>
                                    </ul>
                                </a>

                            </div>
                        </div>
                    </div>
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
<script type="text/javascript">
    $(document).ready(function () {
    });
</script>
<!-- body end -->
</html> 
