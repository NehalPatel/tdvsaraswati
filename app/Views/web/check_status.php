
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title> Check Ticket Status | <?= $config['title']; ?></title>
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
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading text-white">Check Ticket Status</h1>
    </div>
</section>
<!-- about-home end -->
<section id="contact-us" class="contact-us-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <?php if($modify['ticket_no']=="") { ?>
                <img src="<?= base_url(); ?>/assets/images/contact1.png" class="img-fluid">
                <?php } else { ?>
                    <h3>Ticket Details</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Ticket Number</th>
                            <td><?= $modify['ticket_no']; ?></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td><?= $modify['name']; ?></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?= $modify['email']; ?></td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td><?= $modify['mobile']; ?></td>
                        </tr>
                        <tr>
                            <th>Ticket Status</th>
                            <th><span style="color:<?= $modify['status']=="n"?"red":"green"; ?>"><?= $modify['status']=="n"?"Closed":"Open"; ?></span></th>
                        </tr>
                    </table>
                    <br>
                    <h3>Messages</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Sr.No</th>
                            <th>Message</th>
                            <th>Replied</th>
                        </tr>
                        <?php $cnt=1; foreach ($messages as $m) { ?>
                            <tr>
                                <td><?= $cnt++; ?></td>
                                <td><?= $m['message']; ?></td>
                                <td><?= date('d-m-Y h:i A',strtotime($m['added'])); ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                <?php } ?>
            </div>
            <div class="col-lg-5 col-md-6">
                <h4 class="contact-us-heading">Check Ticket Status</h4>
                <form id="demo-form2" method="post" data-parsley-validate="" class="form-horizontal form-label-left" enctype="multipart/form-data">

                    <div class="form-group">
                        <input type="text" class="form-control" name="ticket" id="ticket" placeholder="Ticket Number" required value="<?= $modify['ticket_no']; ?>" <?= $modify['ticket_no']!=""?"disabled":""; ?>>
                    </div>
                    <div class="contact-form-btn">
                        <button type="submit" class="btn btn-outline-primary" title="Check Status" <?= $modify['ticket_no']!=""?"disabled":""; ?>>Check Ticket Status</button>
                        <?php if($modify['ticket_no']!="") { ?><button type="button" onclick="window.location='<?= base_url()."/web/check_status"; ?>'" class="btn btn-outline-info" title="Check Another Ticket">Check Another Ticket</button><?php } ?>
                    </div>
                </form>
            </div>
        </div>
        <br><br>
        <div class="contact-dtl">
            <h4 class="contact-us-heading btm-40">Contact Details</h4>
            <div class="row">
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-map-marker"></i></li>
                        <li class="btm-10 caps">Address</li>
                        <li class="btm-40"><?= $config['address']; ?></li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-envelope"></i></li>
                        <li class="btm-10 caps">Email </li>
                        <li class="btm-40"><?= $config['email']; ?></li>
                    </ul>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <ul>
                        <li class="btm-10"><i class="fa fa-phone"></i></li>
                        <li class="btm-10 caps">Phone</li>
                        <li class="btm-40"><?= $config['contact']; ?></li>
                    </ul>
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
<!-- body end -->
</html> 
