<section>
    <div class="ed-mob-menu">
        <div class="ed-mob-menu-con">
            <div class="ed-mm-left">
                <div class="wed-logo">
                    <a href="<?= base_url(); ?>"><img src="<?= base_url()."/".$config['logo']; ?>" alt="" style="height:56px;" />
                    </a>
                </div>
            </div>
            <div class="ed-mm-right">
                <div class="ed-mm-menu">
                    <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                    <div class="ed-mm-inn">
                        <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                        <h4>All Pages</h4>
                        <ul>
                            <li><a href="<?= base_url(); ?>">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>/web/trust">About Trust</a></li>
                            <li><a href="<?php echo base_url(); ?>/web/infrastructure">Infrastructure</a></li>
                            <li><a href="<?php echo base_url(); ?>/web/about_us">About School</a></li>
                            <li><a href="<?php echo base_url(); ?>/web/trustee_message">Trustee's Message</a></li>
                            <li>
                                <a href="<?= base_url()."/web/all_facilities"; ?>" class="mm-arr">Facilities</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li>
                                <a href="<?= base_url()."/web/teachers"; ?>" class="mm-arr">Our Teachers</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li>
                                <a href="<?= base_url()."/web/downloads"; ?>" class="mm-arr">Downloads</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li>
                                <a href="<?= base_url()."/web/all_news"; ?>" class="mm-arr">News</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li>
                                <a href="<?= base_url()."/web/all_events"; ?>" class="mm-arr">Events</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            <li><a href="<?= base_url()."/web/contact_us"; ?>">Contact us</a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">Contact: <?= $config['address']; ?></a>
                            </li>
                            <li><a href="#">Phone: <?= $config['contact']; ?></a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <?php foreach ($social as $s) { ?>
                            <li><a target="_blank" href="<?= $s['link']; ?>"><i class="<?= $s['class']; ?>" aria-hidden="true"></i></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">
                        <a href="<?= base_url(); ?>"><img src="<?= base_url()."/".$config['logo']; ?>" style="height:62px;" alt="" />
                        </a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="<?= base_url(); ?>">Home</a>
                            </li>
                            <li class="about-menu">
                                <a href="#" class="submenu">About us</a>
                                <!-- MEGA MENU 1 -->
                                <div>
                                    <div class="about-mm m-menu" style="background-color:#fff;width: 250px;padding: 0px;background-image: none;">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s3" style="width:100% !important;">
                                                <ul>
                                                    <li><a href="<?php echo base_url(); ?>/web/trust">About Trust</a></li>
                                                    <li><a href="<?php echo base_url(); ?>/web/infrastructure">Infrastructure</a></li>
                                                    <li><a href="<?php echo base_url(); ?>/web/about_us">About School</a></li>
                                                    <li><a href="<?php echo base_url(); ?>/web/trustee_message">Trustee's Message</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="admi-menu">
                                <a href="<?= base_url()."/web/all_facilities"; ?>" class="mm-arr">Facilities</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li class="admi-menu">
                                <a href="<?= base_url()."/web/teachers"; ?>" class="mm-arr">Our Teachers</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li class="admi-menu">
                                <a href="<?= base_url()."/web/downloads"; ?>" class="mm-arr">Downloads</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li class="admi-menu">
                                <a href="<?= base_url()."/web/all_news"; ?>" class="mm-arr">News</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <li class="admi-menu">
                                <a href="<?= base_url()."/web/all_events"; ?>" class="mm-arr">Events</a>
                                <!-- MEGA MENU 1 -->
                            </li>
                            <!--<li><a class='dropdown-button ed-sub-menu' href='#' data-activates='dropdown1'>Courses</a></li>-->
                            <li><a href="<?= base_url()."/web/contact_us"; ?>">Contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="all-drop-down-menu">

                </div>

            </div>
        </div>
    </div>
</section>