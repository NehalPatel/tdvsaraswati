<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Teachers | <?= $config['title']; ?> </title>
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
                <h1>Our Teachers</h1>
            </div>
        </div>
    </div>
</section>

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <?php foreach ($department as $d) { ?>
                <div class="row">
                    <div class="cor about-sp h-gal ed-pho-gal">
                        <h3 style="text-align: center;"><?= $d['department']; ?></h3>
                        <br><br>
                        <ul>
                            <?php $cnt=0; foreach ($teacher[$d['id']] as $t){ $cnt++; ?>
                                <li style="align-content: center;text-align: center;width:auto !important;padding:2%;">
                                    <center>
                                        <img class="materialboxed" data-caption="Education master image captions" src="<?= base_url()."/".$t['image']; ?>" alt="" style="height: 225px;width: 225px;">
                                    </center>
                                    <h3 style="text-align: center;"><?= $t['name']; ?></h3>
                                    <p>Education : <?= $t['education']; ?></p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
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