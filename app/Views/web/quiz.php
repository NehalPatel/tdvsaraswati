<?php
$options=array(
    0 => 'A',
    1 => 'B',
    2 => 'C',
    3 => 'D'
);
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= $modify['title']; ?> | <?= $config['title']; ?></title>
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
        <h1 class="wishlist-home-heading text-white"><?= $modify['title']; ?></h1>
    </div>
</section>
<!-- about-home end -->
<section id="cart-block" class="cart-main-block">
    <div class="container">
        <div class="cart-items btm-30">
            <h4 class="cart-heading">
               Test Your Knowledge
            </h4>
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <hr>
                    <form method="post" name="frm1" id="frm1" action="<?php echo base_url(); ?>/web/submit_quiz">
                        <input type="hidden" name="quiz" value="<?php echo $modify['id']; ?>">
                        <?php $cnt=1; foreach ($question as $q) { ?>
                            <input type="checkbox" name="questions[]" value="<?php echo $q['id']; ?>" style="display: none;" checked>
                            <div id="questions<?php echo $cnt; ?>" style="display:<?php echo $cnt==1?"block":"none"; ?>">
                                <h6 style="color: #002b5e; font-weight: bold">QUE <?php echo $cnt; ?> : <?php echo $q['question']; ?></h6>
                                <div style="font-weight: bold;margin-left: 10px">
                                    <?php $opt=0; foreach ($answer[$q['id']] as $a) { ?>
                                        <input class="my_question" data-val="<?php echo $q['id']; ?>" name="question<?php echo $q['id']; ?>" type="radio" value="<?php echo $a['id'] ?>" style="margin: 8px;"> <?php echo $options[$opt++]; ?>. <?php echo $a['answer']; ?> <br>
                                    <?php } ?>
                                </div>
                                <br>
                                <?php if($cnt==count($question)) { ?>
                                    <button id="submitButton" type="button" class="btn">Submit</button>
                                <?php } else { ?>
                                    <button data-cur="<?php echo $cnt; ?>" data-next="<?php echo $cnt+1; ?>" type="button" class="btn btnNext">Next</button>
                                <?php } ?>
                            </div>
                            <?php $cnt++; } ?>
                    </form>
                </div>
                <?php  ?>
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
    $(document).ready(function () {
        $('.btnNext').click(function () {
            var that=$(this);
            $('#questions'+that.data('cur')).hide();
            $('#questions'+that.data('next')).fadeIn();
        });
        $('#submitButton').click(function () {
            var that=$(this);
            if(confirm('Are you sure to submit quiz??')){
                that.prop('disabled',true);
                document.frm1.submit();
            }
        });
    });
</script>


<!-- end jquery -->
</body>
<!-- body end -->
</html> 
