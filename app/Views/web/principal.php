<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trustee's Message | <?= $config['title']; ?></title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?= $config['meta_description']; ?>">
    <meta name="keyword" content="<?= $config['meta_keywords']; ?>">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <?= view('web/pages/styles'); ?>
    <style>
        div.gallery {
            margin: 5px;
            border: 1px solid #ccc;
            float: left;
            width: 250px;
            height: 320px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: 255px;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }
    </style>
</head>

<body>

<!-- MOBILE MENU -->
<?= view('web/pages/header'); ?>
<!--END HEADER SECTION-->

<!--SECTION START-->
<section>
    <div class="container com-sp pad-bot-70 pg-inn">
        <div class="row">
            <div class="cor">
                <div class="col-md-6">
                    <div class="cor-mid-img">
                        <h3 style="margin-top: 0px;">Message From Trustee</h3>
                        <img src="<?= base_url()."/".$config['principal_image']; ?>" alt="">
                    </div>
                    <div class="cor-con-mid">
                        <div class="cor-p4">
                            <br>
                            <h4>Name : </h4>
                            <p><?= $config['principal_name']; ?></p>
                            <h4>Education : </h4>
                            <p><?= $config['principal_education']; ?></p>
                            <h5>Message</h5>
                            <p><?= $config['principal_msg']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 style="margin-top: 0px;">OUR TRUSTEE</h3>
                    <?php foreach ($trustee as $t) {?>
                        <div class="gallery">
                            <a href="#">
                                <img src="<?= base_url()."/".$t['image']; ?>" alt="Cinque Terre" width="600" height="400">
                            </a>
                            <div class="desc"><?= $t['name'] ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--SECTION END-->


<!--HEADER SECTION-->
<?= view('web/pages/footer');  ?>
<!--END HEADER SECTION-->

<!--HEADER SECTION-->
<?= view('web/pages/copyright'); ?>
<!--END HEADER SECTION-->

<!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->


<!--Import jQuery before materialize.js-->
<?= view('web/pages/scripts'); ?>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/education-master/course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:13:49 GMT -->
</html>