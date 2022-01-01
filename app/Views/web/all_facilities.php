<!DOCTYPE html>
<html lang="en">
<head>
    <title>Our Facilities | <?= $config['title']; ?></title>
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
                <h1>List of School Facilities</h1>
            </div>
        </div>
    </div>
</section>

<!--SECTION START-->
<section>
    <div class="ed-res-bg">
        <div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-rsear">
                        <div class="ed-rsear-in">
                            <ul>
                                <?php foreach ($facility as $f) {?>
                                <li>
                                    <div class="ed-rese-grid" style="width: 416px;">
                                        <div class="ed-rsear-img ed-faci-full-top">
                                            <center>
                                            <img src="<?= base_url()."/".$f['image']; ?>" alt="" style="max-width: 200px;">
                                            </center>
                                        </div>
                                        <div class="ed-rsear-dec ed-faci-full-bot">
                                            <h4><a href="<?= base_url(); ?>/web/facilities/<?= $f['id']; ?>"><?= $f['title']; ?></a></h4>
                                            <p><?= $f['short']; ?></p>
                                            <a href="<?= base_url(); ?>/web/facilities/<?= $f['id']; ?>" class="read-line-btn">Read more</a>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="ed-about-sec1">
                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
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


<!-- Mirrored from rn53themes.net/themes/demo/education-master/facilities.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:15:04 GMT -->
</html>