<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us | <?= $config['title']; ?></title>
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
<section class="c-all p-semi">
    <div class="semi-inn">
        <div class="semi-com semi-left">
            <div class="all-title quote-title qu-new semi-text">
                <h2>Contact Us</h2>
                <p>Address: <?= nl2br($config['address']); ?></p>
                <p>Phone: <?= $config['contact']; ?></p>
                <p>Email: <?= $config['email']; ?></p>
            </div>
        </div>
        <div class="semi-com semi-right">
            <div class="n-form-com semi-form">
                <div class="col s12">
                    <form class="form-horizontal" method="post" action="<?= base_url()."/web/submit_contact"; ?>">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Name" required name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="number" class="form-control" placeholder="Phone number" required name="mobile">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email id" required name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" name="message" placeholder="Enter Message" rows="4"></textarea>
                            </div>
                        </div>
                        <?php if($_SESSION['success']) { ?>
                        <div class="form-group">
                            <div class="col-md-12">
                                <p class="label label-success">Your Message has been sent successfully</p>
                            </div>
                        </div>
                        <?php unset($_SESSION['success']); } ?>
                        <div class="form-group mar-bot-0">
                            <div class="col-md-12">
                                <i class="waves-effect waves-light light-btn waves-input-wrapper" style=""><input type="submit" value="Send Message" class="waves-button-input"></i>
                            </div>
                        </div>
                    </form>
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


<!-- Mirrored from rn53themes.net/themes/demo/education-master/seminar.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 10:14:02 GMT -->
</html>