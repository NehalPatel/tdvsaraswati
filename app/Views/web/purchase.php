
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.purchase_history'); ?> | <?= $config['title']; ?></title>
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
        <h1 class="wishlist-home-heading text-white"><?= lang('app.purchase_history'); ?></h1>
    </div>
</section>
<!-- about-home end -->
<section id="purchase-block" class="purchase-main-block">
    <div class="container">
        <div class="purchase-table table-responsive">
            <div class="purchase-history-table">
            </div><div class="purchase-history-table">
            </div><div class="purchase-history-table">
            </div><div class="purchase-history-table">
            </div><table class="table">
                <thead>
                <tr>
                    <th class="purchase-history-heading"><?= lang('app.purchase_history'); ?></th>
                    <th class="purchase-text">Enroll On</th>
                    <th class="purchase-text">Enroll End</th>
                    <th class="purchase-text">PaymentMode</th>
                    <th class="purchase-text">Total Price</th>
                    <th class="purchase-text">Payment Statuss</th>
                    <th class="purchase-text">Actions</th>

                </tr>
                </thead>
                <?php foreach ($purchase as $p) { ?>
                <tbody>
                <tr>
                    <td>
                        <div class="purchase-history-course-img">
                            <a href="<?= base_url()."/web/course/".$p['id']."/".clean($p['course']); ?>"><img src="<?= base_url()."/".$p['image']; ?>" class="img-fluid" alt="course"></a>
                        </div>
                        <div class="purchase-history-course-title">
                            <a href="<?= base_url()."/web/course/".$p['id']."/".clean($p['course']); ?>"><?= $p['course']; ?></a>
                        </div>
                    </td>
                    <td>
                        <div class="purchase-text"><?= date('d F,Y',strtotime($p['enroll_date'])); ?></div>
                    </td>
                    <td>
                        <div class="purchase-text">
                            -
                        </div>
                    </td>
                    <td>
                        <div class="purchase-text"><?= $p['payment_mode']; ?></div>
                    </td>
                    <td>
                        <div class="purchase-text"><b><i class="<?= $config['icon']; ?>"></i><?= $p['amount']; ?></b></div>
                    </td>
                    <td>
                        <div class="purchase-text">
                            Recieved
                        </div>
                    </td>
                    <td>
                        <div class="invoice-btn">
                            <a target="_blank" href="<?= base_url()."/web/invoice/".$p['id']; ?>" class="btn btn-secondary"><?= lang('app.invoice'); ?></a>
                        </div>
                    </td>
                </tr>
                </tbody>
                <?php } ?>
            </table>
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
