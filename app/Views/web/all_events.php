<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Events | <?= $config['title']; ?></title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $config['meta_description']; ?>">
    <meta name="keyword" content="<?= $config['meta_keywords']; ?>">
    <!-- FAV ICON(BROWSER TAB ICON) -->
   <?= view('web/pages/styles'); ?>
</head>

<body>

<!-- MOBILE MENU -->
<?= view('web/pages/header'); ?>
<!--END HEADER SECTION-->

<!--SECTION START-->
<section>
    <div class="container com-sp">
        <div class="row">
            <div class="cor about-sp">
                <div class="ed-about-tit">
                    <div class="con-title">
                        <h2>School <span> Events</span></h2>
                    </div>
                    <div>
                        <div class="ho-event pg-eve-main">
                            <ul>
                                <?php foreach ($event as $e) {?>
                                <li>
                                    <div class="ho-ev-date pg-eve-date"><span><?= date('d',strtotime($e['date'])); ?></span><span><?= date('M,Y',strtotime($e['date'])); ?></span>
                                    </div>
                                    <div class="ho-ev-link pg-eve-desc">
                                        <a href="#">
                                            <h4><?= $e['title']; ?></h4>
                                        </a>
                                        <p><?= $e['short']; ?></p>
                                    </div>
                                    <div class="pg-eve-reg">
                                        <a href="<?= base_url()."/web/events/".$e['id']; ?>">Read more</a>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->

<!--HEADER SECTION-->
<?= view('web/pages/footer'); ?>
<!--END HEADER SECTION-->

<!--HEADER SECTION-->
<?= view('web/pages/copyright'); ?>
<!--END HEADER SECTION-->

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->

<!--Import jQuery before materialize.js-->
<?= view('web/pages/scripts'); ?>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/education-master/events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:14:02 GMT -->
</html>