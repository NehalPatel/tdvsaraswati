<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.invoice'); ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $config['meta_description']; ?>" />
    <meta name="keywords" content="<?= $config['meta_keywords']; ?>">
    <meta name="author" content="<?= $config['title']; ?>" />
    <meta name="MobileOptimized" content="320" />
    <?= view('web/pages/styles'); ?>
    <!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>
<!-- preloader -->
<?= view('web/pages/header'); ?>

<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading text-white"><?= lang('app.invoice'); ?></h1>
    </div>
</section>
<!-- about-home end -->
<section id="purchase-block" class="purchase-main-block">
    <div class="container">
        <div class="panel-body">

            <div id="printableArea">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="page-header">
                            <div class="invoice-logo">
                                <img src="<?= base_url()."/".$config['logo']; ?>" class="img-fluid" alt="logo">
                            </div>
                            <br>
                            <small class="purchase-date"><?= lang('app.purchased_on'); ?>: <?= date('d F,Y',strtotime($modify['enroll_date'])); ?></small>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="view-order">
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                            From:
                            <address>
                                <strong>Admin</strong><br>


                                Address:<?= nl2br($config['address']); ?>
                                <br>
                                Phone: <?= $config['contact']; ?><br>
                                Email: <?= $config['email']; ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                            To:
                            <address>
                                <strong><?= $_SESSION['student']['name']; ?></strong><br>
                                Address: <?= nl2br($_SESSION['student']['address']); ?>
                                <br>
                                Phone: <?= $_SESSION['student']['mobile']; ?><br>
                                Email: <?= $_SESSION['student']['email']; ?>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">

                            <br>
                            <b>OrderID:</b> #<?= str_pad($modify['id'],"7","0",STR_PAD_LEFT); ?><br>
                            <b>Transaction ID:</b> <?= crc32($modify['id']); ?><br>
                            <b>PaymentMode:</b> <?= $modify['payment_mode']; ?><br>
                            <b>Currency:</b> <?= $modify['currency']; ?><br>
                            <b>Payment Status:</b>
                            Recieved
                            <?php
                                $date=date('d',strtotime($modify['enroll_date']));
                                if($date % 10 == 1)
                                    $date.="st";
                                else if($date % 10 == 2)
                                    $date.="nd";
                                else if($date % 10 == 3)
                                    $date.="rd";
                                else
                                    $date.="th";
                                $suf=date(' F Y',strtotime($modify['enroll_date']));
                            ?>
                            </br>
                            <b>Enroll On:</b> <?= $date.$suf; ?><br>
                            <b>
                                Enroll End:</b> - <br>
                        </div>
                        <!-- /.col -->
                    </div>
                </div>
                <!-- /.row -->
                <div class="order-table table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Courses</th>
                            <th>Instructor</th>
                            <th>Currency</th>
                            <th class="txt-rgt">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <?= $course[0]['course']; ?>
                            </td>
                            <td><?= $teacher[0]['email']; ?></td>
                            <td><?= $modify['currency']; ?></td>


                            <td class="txt-rgt">
                                <i class="<?= $config['icon']; ?>"></i><?= $modify['amount']; ?>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="print-btn">
                <input type="button" class="btn btn-primary"  onclick="printDiv('printableArea')" value="Print" />
            </div>

        </div>
    </div>
</section>

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>
<!-- jquery -->
<?= view('web/pages/scripts'); ?>



<script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
<!-- end jquery -->
</body>
<!-- body end -->
</html> 
