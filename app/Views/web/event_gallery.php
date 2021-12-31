<!DOCTYPE html>
<html lang="en">
<head>
    <title>Event Gallery | <?= $config['title']; ?></title>
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

<section>
    <div class="head-2">
        <div class="container">
            <div class="head-2-inn head-2-inn-padd-top">
                <h1><?= $event[0]['title']; ?></h1>
                <p><?= $event[0]['short']; ?></p>
            </div>
        </div>
    </div>
</section>

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp h-gal ed-pho-gal">
                    <ul>
                        <?php foreach ($event_gallery as $g){?>
                        <li><img class="materialboxed" data-caption="Education master image captions" src="<?= base_url()."/".$g['image']; ?>" alt="">
                        </li>
                        <?php } ?>
                    </ul>
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


<!-- Mirrored from rn53themes.net/themes/demo/education-master/gallery-photo.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:15:04 GMT -->
</html>