<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Details | <?= $config['title']; ?></title>
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
                        <h2><?= $modify['title']; ?></h2>
                        <p><?= $modify['short']; ?></p>
                    </div>
                    <div>
                        <div class="ho-event pg-eve-main pg-blog">
                            <ul>
                                <li>
                                    <div class="ho-ev-date pg-eve-date"><span><?= date('d',strtotime($modify['date'])); ?></span><span><?= date('M,Y',strtotime($modify['date'])); ?></span>
                                    </div>
                                    <div class="pg-eve-desc pg-blog-desc">
                                        <img src="<?= base_url()."/".$modify['image'] ?>" alt="" style="height: 343px;width: 687px;">
                                        <p><?= $modify['long']; ?></p>
                                        <br>
                                        <br>
                                        <centeR>
                                            <a href="<?= base_url()."/web/event_gallery/".$modify['id']; ?>" class="btn btn-warning">View Events Gallery</a>
                                        </centeR>
                                    </div>
                                </li>
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

<!--Import jQuery before materialize.js-->
<?= view('web/pages/scripts'); ?>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/education-master/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:14:38 GMT -->
</html>