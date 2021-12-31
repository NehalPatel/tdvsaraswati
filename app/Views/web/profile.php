
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->


<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= lang('app.my_profile'); ?> | <?= $config['title']; ?></title>
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

<!-- home start -->


<!-- about-home start -->
<section id="wishlist-home" class="wishlist-home-main-block">
    <div class="container">
        <h1 class="wishlist-home-heading text-white"><?= lang('app.my_profile'); ?></h1>
    </div>
</section>
<!-- about-home end -->
<section id="profile-item" class="profile-item-block">
    <div class="container">
        <form action="<?= base_url()."/web/update_profile"; ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="dashboard-author-block text-center">
                        <div class="author-image">
                            <div class="avatar-upload">
                                <div class="avatar-edit">
                                    <input type="file" id="imageUpload" name="user_img" accept=".png, .jpg, .jpeg">
                                    <label for="imageUpload"><i class="fa fa-pencil"></i></label>
                                </div>
                                <div class="avatar-preview">
                                    <div class="avatar-preview-img" id="imagePreview" style="background-image: url(<?= base_url()."/".$_SESSION['student']['image']; ?>);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="author-name"><?= $_SESSION['student']['name']; ?></div>
                    </div>
                    <div class="dashboard-items">
                        <ul>
                            <li><i class="fa fa-bookmark"></i><a href="<?= base_url()."/web/mycourses"; ?>" title="Dashboard">My Courses</a></li>
                            <li><i class="fa fa-heart"></i><a href="<?= base_url()."/web/wishlist"; ?>" title="Profile Update">My Wishlist</a></li>
                            <li><i class="fa fa-history"></i><a href="<?= base_url()."/web/purchase"; ?>" title="Followers">Purchase History</a></li>
                            <li><i class="fa fa-user"></i><a href="<?= base_url()."/web/profile"; ?>" title="Upload Items">My Profile</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">

                    <div class="profile-info-block">
                        <div class="profile-heading"><?= lang('app.personal_info'); ?></div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name"><?= lang('app.full_name'); ?></label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter First Name" value="<?= $_SESSION['student']['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email"><?= lang('app.email'); ?></label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="info@example.com" value="<?= $_SESSION['student']['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email"><?= lang('app.date_of_birth'); ?></label>
                                    <input type="date" id="date" name="dob" class="form-control" placeholder="" value="<?= $_SESSION['student']['dob']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="mobile"><?= lang('app.mobile'); ?></label>
                                    <input type="text" name="mobile" id="mobile" value="<?= $_SESSION['student']['mobile']; ?>" class="form-control" placeholder="Enter Mobile No.">
                                </div>
                                <div class="form-group">
                                    <label for="gender"><?= lang('app.choose_gender'); ?>:</label>
                                    <br>
                                    <input type="radio" name="gender" id="ch1" value="m" <?= $_SESSION['student']['gender']=="m"?"checked":""; ?>> <?= lang('app.male'); ?>
                                    <br>
                                    <input type="radio" name="gender" id="ch2" value="f" <?= $_SESSION['student']['gender']=="f"?"checked":""; ?>> <?= lang('app.female'); ?>
                                    <br>
                                    <input type="radio" name="gender" id="ch3" value="o" <?= $_SESSION['student']['gender']=="o"?"checked":""; ?>> <?= lang('app.other'); ?>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bio"><?= lang('app.address'); ?></label>
                            <textarea id="address" name="address" class="form-control" placeholder="Enter your Address"><?= $_SESSION['student']['address']; ?></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="bio"><?= lang('app.your_detail'); ?></label>
                            <textarea id="detail" name="detail" class="form-control" placeholder="Enter your details" aria-hidden="true"><?= $_SESSION['student']['headline']; ?></textarea>
                        </div>
                        <br>
                    </div>
                    <div class="social-profile-block">
                        <div class="social-profile-heading">Social Profile</div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="social-block">
                                    <div class="form-group">
                                        <label for="facebook">Facebook Url</label><br>
                                        <div class="row">
                                            <div class="col-lg-2 col-2">
                                                <div class="profile-update-icon">
                                                    <div class="product-update-social-icons"><a href="<?= $_SESSION['student']['facebook']; ?>" target="_blank" title="facebook"><i class="fa fa-facebook facebook"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-10">
                                                <input type="text" name="fb_url" value="<?= $_SESSION['student']['facebook']; ?>" id="facebook" class="form-control" placeholder="Facebook.com/">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-block">
                                    <div class="form-group">
                                        <label for="behance2">Youtube Url</label><br>
                                        <div class="row">
                                            <div class="col-lg-2 col-2">
                                                <div class="profile-update-icon">
                                                    <div class="product-update-social-icons"><a href="<?= $_SESSION['student']['youtube']; ?>" target="_blank" title="googleplus"><i class="fab fa-youtube youtube"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-10">
                                                <input type="text" name="youtube_url" value="<?= $_SESSION['student']['youtube']; ?>" id="behance2" class="form-control" placeholder="youtube.com/">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="social-block">
                                    <div class="form-group">
                                        <label for="twitter">Twitter Url</label><br>
                                        <div class="row">
                                            <div class="col-lg-2 col-2">
                                                <div class="profile-update-icon">
                                                    <div class="product-update-social-icons"><a href="<?= $_SESSION['student']['twitter']; ?>" target="_blank" title="twitter"><i class="fab fa-twitter twitter"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-10">
                                                <input type="text" name="twitter_url" value="<?= $_SESSION['student']['twitter']; ?>" id="twitter" class="form-control" placeholder="Twitter.com/">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="social-block">
                                    <div class="form-group">
                                        <label for="dribbble2">LinkedIn Url</label><br>
                                        <div class="row">
                                            <div class="col-lg-2 col-2">
                                                <div class="profile-update-icon">
                                                    <div class="product-update-social-icons"><a href="<?= $_SESSION['student']['linkedin']; ?>" target="_blank" title="linkedin"><i class="fab fa-linkedin-in linkedin"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-10 col-10">
                                                <input type="text" name="linkedin_url" value="<?= $_SESSION['student']['linkedin']; ?>" id="dribbble2" class="form-control" placeholder="Linkedin.com/">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="upload-items text-right">
                        <button type="submit" class="btn btn-primary" title="upload items"><?= lang('app.update_profile'); ?></button>
                    </div>

                </div>
            </div>

        </form>
    </div>
</section>

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>

<!-- jquery -->
<?= view('web/pages/scripts'); ?>
<script>
    $(document).ready(function () {
        tinymce.init({selector:'#detail'});
    });
</script>

<!-- end jquery -->
</body>
<!-- body end -->
</html> 
