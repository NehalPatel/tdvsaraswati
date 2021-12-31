<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/bootstrap.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
      <link rel="icon" href="<?php echo base_url(); ?>/assets/web/img/logo.png" type="image/png" sizes="16x16">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/slick.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/slick-theme.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/style.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/responsive.css">
      <script src="<?php echo base_url(); ?>/assets/web/js/jquery-3.2.1.js"></script>


<!-- =========================alertify external use ================= -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/alertify.css">
<script src="<?php echo base_url(); ?>/assets/web/js/alertify.js"></script>
      <title>Index</title>
   </head>
   <body>
      <div class="mobile-menu-overlay"></div>
      <header>
         <div class="top_bar">
            <div class="container">
               <div class="row">
                  <div class="col-lg-5">
                     <div class="logo">
                        <a href="index.html">
                           <h1><img src="<?php echo base_url(); ?>/assets/web/img/logo.png" class="img-fluid"> LEARN</h1>
                        </a>
                     </div>
                     <button class="mobile-menu-toggler" type="button"> <i class="icon-menu"></i></button>
                     <div class="categorys">
                        <nav class="navbar navbar-expand-lg">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarNavDropdown">
                              <ul class="navbar-nav">
                                 <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>/assets/web/img/cate_icon.png" class="img-fluid"> Categories </a>
                                    <!-- ======================= Category menu=== -->
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                       <?php
                                          foreach ($category as $c)
                                          {
                                             
                                              if (count($subcategory) > 0)
                                              {
                                                  $sub = 0;
                                                  $cnt = 0;
                                              foreach ($subcategory as $s)
                                              {
                                                  $cnt++;
                                                  if ($c['id'] == $s['category_id'])
                                                  {
                                                      $sub++;
                                                  ?>
                                       <?php
                                          if ($sub == 1)
                                          {
                                          ?>
                                       <li class="dropdown-submenu">
                                          <a class="dropdown-item dropdown-toggle" href="<?php echo base_url(); ?>/web/category?category_id=<?php echo $c['id']; ?>"><?php echo $c['category']; ?></a>
                                          <ul class="dropdown-menu">
                                             <!--  <li><a class="dropdown-item" href="web/subcategory"><?php echo $s['subcategory']; ?></a></li> -->
                                             <!-- ==================Topic================= -->
                                             <?php
                                                if (count($topic) > 0)
                                                {
                                                    $sub1 = 0;
                                                    $cnt1 = 0;
                                                foreach ($topic as $t)
                                                {
                                                    $cnt1++;
                                                    if ($t['subcategory_id'] == $s['id'])
                                                    {
                                                        $sub1++;
                                                    if ($sub1 == 1)
                                                    {
                                                    ?>
                                             <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                <ul class="dropdown-menu">
                                                   <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a></li>
                                                   <?php
                                                      }
                                                      else
                                                      {
                                                      ?>
                                                   <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a></li>
                                                   <?php   
                                                      }
                                                      }
                                                      if ($cnt1 == count($topic) && $sub1 > 0)
                                                      {
                                                      ?>
                                                </ul>
                                             </li>
                                             <?php
                                                }
                                                
                                                if ($sub1 == 0 && $cnt1 == count($topic))
                                                {
                                                ?>
                                             <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a></li>
                                             <?php  
                                                }
                                                }
                                                }
                                                else
                                                {
                                                ?>
                                             <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a></li>
                                             <?php   
                                                }
                                                        ?> 
                                             <!-- ==================Topic================= -->
                                             <?php
                                                }
                                                else
                                                {
                                                ?>
                                             <!-- ==============topic============ -->
                                             <?php
                                                if (count($topic) > 0)
                                                {
                                                    $sub2 = 0;
                                                    $cnt2 = 0;
                                                foreach ($topic as $t)
                                                {
                                                    $cnt2++;
                                                    if ($t['subcategory_id'] == $s['id'])
                                                    {
                                                        $sub2++;
                                                    if ($sub2 == 1)
                                                    {
                                                    ?>
                                             <li class="dropdown-submenu">
                                                <a class="dropdown-item dropdown-toggle" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                <ul class="dropdown-menu">
                                                   <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a></li>
                                                   <?php
                                                      }
                                                      else
                                                      {
                                                      ?>
                                                   <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a></li>
                                                   <?php   
                                                      }
                                                      }
                                                      if ($cnt2 == count($topic) && $sub2 > 0)
                                                      {
                                                      ?>
                                                </ul>
                                             </li>
                                             <?php
                                                }
                                                
                                                if ($sub2 == 0 && $cnt2 == count($topic))
                                                {
                                                ?>
                                             <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a></li>
                                             <?php  
                                                }
                                                }
                                                }
                                                else
                                                {
                                                ?>
                                             <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a></li>
                                             <?php   
                                                }
                                                        ?> 
                                             <!-- ==============topic============ -->
                                             <?php    
                                                }
                                                ?>
                                             <?php
                                                }
                                                if ($cnt == count($subcategory) && $sub > 0)
                                                {
                                                ?>
                                          </ul>
                                       </li>
                                       <?php
                                          }
                                          
                                          if ($sub == 0 && $cnt == count($subcategory))
                                          {
                                          ?>
                                       <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/category?category_id=<?php echo $c['id']; ?>"><?php echo $c['category']; ?></a></li>
                                       <?php  
                                          }
                                          }
                                          }
                                          else
                                          {
                                          ?>
                                       <li><a class="dropdown-item" href="<?php echo base_url(); ?>/web/category?category_id=<?php echo $c['id']; ?>"><?php echo $c['category']; ?></a></li>
                                       <?php    
                                          }
                                          ?>
                                       <?php    
                                          }
                                          ?>
                                       <!--   <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="web/category">New Trending</a>
                                          <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="categories.html">New Trending</a></li>
                                          </ul>
                                          </li>
                                          <li><a class="dropdown-item" href="web/category">New Trending</a></li>
                                          <li><a class="dropdown-item" href="web/category">New Trending</a></li> -->
                                       <!--  <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="categories.html">Most Recent</a>
                                          <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="categories.html">Men Categories</a></li>
                                              <li><a class="dropdown-item" href="categories.html">Women Categories</a></li>
                                              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="categories.html">Kid's</a>
                                                  <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="categories.html">Small</a></li>
                                                      <li><a class="dropdown-item" href="categories.html">Long</a></li>
                                                  </ul>
                                              </li>
                                              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="categories.html">Kid's2</a>
                                                  <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="categories.html">Small1</a></li>
                                                      <li><a class="dropdown-item" href="categories.html">Long2</a></li>
                                                  </ul>
                                              </li>
                                          </ul>
                                          </li> -->
                                    </ul>
                                    <!-- ======================== Category close=================== -->
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
<!-- =================Search start========================= -->
                  <div class="col-lg-7">
                     <div class="top_right">
                        <div class="top_search">
                           <form method="post" id="searchform">
                              <input type="text" name="search"  placeholder="Search course..">
                              <i class="fa fa-search search_data" aria-hidden="true"></i>
                           </form>
                        </div>
                        <!-- ============= search end======= -->
                        <div class="user_login">
                          <ul>

                      <?php
                      if (isset($_SESSION['student']))
                      {
                      ?>
                                <li class="notifications pdg">
                                 <a href="#"><i class="fa fa-bell-o" aria-hidden="true"></i></a>
                                 <div class="notification_popup">
                                    <div class="notification_list">
                                       <div class="noti_img">
                                          <img src="<?php echo base_url(); ?>/assets/web/img/couse1.png">
                                       </div>
                                       <div class="notifi_text">
                                          <a href="#">
                                             <p>Mark peteron Mark peteron<strong>Lorem ipson</strong></p>
                                             <span>18days ago</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="notification_list">
                                       <div class="noti_img">
                                          <img src="<?php echo base_url(); ?>/assets/web/img/couse1.png">
                                       </div>
                                       <div class="notifi_text">
                                          <a href="#">
                                             <p>Mark peteron Mark peteron<strong>Lorem ipson</strong></p>
                                             <span>18days ago</span>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="showall_noti">
                                       <div class="mark-read">
                                          <a href="#">Mark all reads</a>
                                       </div>
                                       <div class="mark-read">
                                          <a href="#">Show all</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="cart-icon-pdg"><a href="cart.html" class="add_carts" id="menu-toggle" aria-hidden="true" data-toggle="main-side-bar"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>1</span></a></li>
                              <div class="subToggle">
                                 <div class="cart-info">
                                    <div class="block-cart-title">
                                       <h5>shopping bag</h5>
                                    </div>
                                    <div class="items cart-container">
                                       <div class="items_row">
                                          <div class="cart-left"><a class="cart-image" href="#"><img src="<?php echo base_url(); ?>/assets/web/img/couse3.png" class="img-fluid" alt="list_1"></a></div>
                                          <div class="cart-right">
                                             <div class="cart-title"><a href="#">The Complete Financial & Analyst Cource 2020</a></div>
                                             <div class="cart-price"> <span class="old_price">$138.00</span>    
                                                <span class="new_price">$120.00</span>
                                             </div>
                                             <div class="cart-qty"><span>QTY : 01</span></div>
                                          </div>
                                          <a class="fa fa-times fa-delete"></a>
                                       </div>
                                       <div class="items_row">
                                          <div class="cart-left"><a class="cart-image" href="#"><img src="<?php echo base_url(); ?>/assets/web/img/couse3.png" class="img-fluid" alt="list_1"></a></div>
                                          <div class="cart-right">
                                             <div class="cart-title"><a href="#">The Complete Financial & Analyst Cource 2020</a></div>
                                             <div class="cart-price"> <span class="old_price">$138.00</span>    
                                                <span class="new_price">$120.00</span>
                                             </div>
                                             <div class="cart-qty"><span>QTY : 01</span></div>
                                          </div>
                                          <a class="fa fa-times fa-delete"></a>
                                       </div>
                                    </div>
                                    <div class="subtotal"><span>subtotal</span><span class="cart-total-right money">$320.00</span></div>
                                    <div class="cart-footer"> <a href="cart.html" class="btn btn-border">view cart</a> <a href="checkout.html" class="btn btn-secondary">checkout</a> </div>
                                 </div>
                              </div>
                              <li class="notifications">
                                 <a href="#" class="signup_user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                <div class="notification_popup">
                                    <div class="notification_list">
                                       <div class="noti_img">
                                          <img src="<?php echo base_url(); ?>/<?php echo $_SESSION['student']['image']; ?>">
                                       </div>
                                       <div class="notifi_text">
                                          <p><?php echo $_SESSION['student']['name']; ?></p>
                                          <p><strong><?php echo $_SESSION['student']['email']; ?></strong></p>
                                          <br>
                                       </div>
                                    </div>
                                    <div class="notification_list">
                                       <div class="user_showing">
                                           <a href="<?php echo base_url(); ?>/web/profile?id=<?php echo $_SESSION['student']['id']; ?>">Profile</a>
                                          <a href="#">Meassage</a>
                                          <a href="#">Notification</a>
                                          <a href="#">Help</a>
                                          <a href="<?php echo base_url(); ?>/web/logout">Logout</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                      <?php
                      }
                      else
                      {
                      ?>
                      <li class="pdg" style="color: white;"><button class="btn btn-sm" id="login_button">Log In</button></li>
                      <?php 
                      }
                      ?>      
                         


                         
                          </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

 <!-- Login Modal Start-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
              <div class="user_login_wrap">
                  <form class="login_forms" id="hide_signin">
                      <div class="user_title">
                          <h3 class="login_title">Signin now</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> 
                      </div>
                      <div class="login_info">
                          <div class="user_fields">
                            <input type="text" name="email" id="email" placeholder="Enter email address">
                          </div>
                          <div class="user_fields">
                            <input type="password" name="password" id="password" placeholder="Enter password">
                          </div>
                          <div class="forgot_link">
                              <a href="#" id="hide_forgot">Forgot password</a>
                          </div>
                          <div class="login_btns">
                              <a href="javascript:void(0);" id="signin_button">Signin</a>
                          </div>
                          <div class="or">or with</div>
                          <div class="login_btns">
                              <a href="#" class="facebook"><img src="<?php echo base_url(); ?>/assets/web/img/facebook.png"> Continue with facebook</a>
                          </div>
                          <div class="login_btns">
                              <a id="login-button" href="<?= 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online' ?>" class="google"><img src="<?php echo base_url(); ?>/assets/web/img/google.png"> Continue with Google</a>
                          </div>
                          <div class="dont_have_ac">
                                  <p>Don't have an account? <a href="#" id="show_signup">Sign up</a></p>
                              </div>
                      </div>
                  </form>
                  <form class="login_forms" style="display: none;" id="show_signup_forms">
                      <div class="user_title">
                          <h3 class="login_title">SignUp</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> 
                      </div>
                      <div class="login_info">
                          <div class="user_fields">
                            <input type="text" name="fname" id="fname" placeholder="Full name">
                          </div>
                          <div class="user_fields">
                            <input type="text" name="email" id="email" placeholder="Enter email address">
                          </div>
                          <div class="user_fields">
                            <input type="text" name="phone" id="phone" placeholder="Phone number" maxlength="10">
                          </div>
                          <div class="user_fields">
                            <input type="password" name="password" id="password" placeholder="Enter password">
                          </div>
                           <div class="user_fields">
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password">
                            <label id="cnf_pwd" style="color: red;display: none;">confirm password not match</label>
                          </div>
                          <div class="login_btns">
                              <a href="javascript:void(0);" id="signup_button">Signup</a>
                          </div>
                          <div class="dont_have_ac">
                                  <p>Already have an account? <a href="#" id="show_signup2">SignIn</a></p>
                              </div>
                      </div>
                  </form>
                  
                  <form class="login_forms" style="display: none;" id="show_forgot_forms">
                      <div class="user_title">
                          <h3 class="login_title">Forgot password</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> 
                      </div>
                      <div class="login_info">
                          <div class="user_fields">
                            <input type="text" name="email" placeholder="Enter your email">
                          </div>
                          <div class="login_btns">
                              <a href="#">Reset password</a>
                          </div>
                          
                      </div>
                  </form>
              </div>
          </div>
          
        </div>
      </div>
    </div>
    <!-- Login Modal End-->


      <div class="mobile-menu-overlay"></div>
      <div class="mobile-menu-container">
         <!--mobile-menu-wrapper start-->
         <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <!--mobile-nav start-->
            <nav class="mobile-nav">
               <ul class="mobile-menu">
                  <li><a href="categories.html" class="sf-with-ul">Premium Course</a></li>
                  <li class="active">
                     <a href="categories.html" class="sf-with-ul">Sub Categories</a>
                     <ul>
                        <li><a href="categories.html">Categories 1</a>
                        </li>
                        <li><a href="categories.html">Categories 02</a>
                        </li>
                     </ul>
                  </li>
                  <li>
                     <a href="categories.html">Categories</a>
                     <ul>
                        <li>
                           <a href="categories.html">Premium Course</a>
                           <ul>
                              <li><a href="categories.html">Men</a>
                              </li>
                              <li><a href="categories.html">Women</a>
                              </li>
                              <li><a href="categories.html">Kid's</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="categories.html">New Trending</a>
                           <ul>
                              <li><a href="categories.html">Men</a>
                              </li>
                              <li><a href="categories.html">Women</a>
                              </li>
                              <li><a href="categories.html">Kid's</a>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="categories.html">Most Recent</a>
                           <ul>
                              <li><a href="categories.html">Men</a>
                              </li>
                              <li><a href="categories.html">Women</a>
                              </li>
                              <li><a href="categories.html">Kid's</a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <!--mobile-nav end-->
         </div>
         <!--mobile-menu-wrapper end-->
      </div>
      <section class="hero_banner">
         <div class="container">
            <div class="hero_slide">
               <div class="slide_item">
                  <div class="row d-flex align-items-center">
                     <div class="col-md-6">
                        <div class="hreo-text">
                           <h1><span>I</span>nside</h1>
                           <h2><span>L</span>earn</h2>
                           <p>Ex utamur fierent tacimates duis choro an</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <img src="<?php echo base_url(); ?>/assets/web/img/bane-img1.png" class="img-fluid" alt="banner1">
                     </div>
                  </div>
               </div>
               <div class="slide_item">
                  <div class="row d-flex align-items-center">
                     <div class="col-md-6">
                        <div class="hreo-text">
                           <h1><span>I</span>nside</h1>
                           <h2><span>L</span>earn</h2>
                           <p>Ex utamur fierent tacimates duis choro an</p>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <img src="<?php echo base_url(); ?>/assets/web/img/bane-img1.png" class="img-fluid" alt="banner1">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="course_product pt80">
         <div class="container">
            <h2 class="discover_title">Premium Course</h2>
            <div class="row">
<?php

if (count($course) > 0)
{
    foreach ($course as $c)
    {
    ?>
            <div class="col-lg-3 col-md-6">
                  <div class="discoverd_box">
                     <div class="discoverd_img">
                        <img src="<?php echo base_url(); ?>/<?php echo $c['image']; ?>" class="img-fluid discoverd_card_img" alt="list_1">
                     </div>
                     <div class="discoverd_content">
                        <a href="#"><?php echo $c['short']; ?></a>
                        <p><?php echo $c['course']; ?></p>
                        <div class="price_list">
                           <div class="rating">
                              <p><i class="fa fa-star"></i><?php echo $c['rating']; ?></p>
                           </div>
                           <div class="old-new-price">
                              <span class="old_price"><?php echo "₹".$c['price'].".00" ?></span>    
                              <span class="new_price"><?php echo "₹".$c['price'].".00" ?></span>    
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
    <?php  
    }
}
else
{
?>
<div class="col-lg-12 col-md-12">
                  <div class='alert alert-danger text-left'><button class="close" data-dismiss="alert"></button>Sorry Not Course Found Yet..</div>
</div>
<?php
}
?>

              



            </div>
         </div>
      </section>




      <section class="course_product">
         <div class="container">
            <h2 class="discover_title">New Trending</h2>
            <div class="row">
<?php

if (count($course) > 0)
{
    foreach ($course as $c)
    {
    ?>


              <div class="col-lg-3 col-md-6">
                  <div class="discoverd_box">
                     <div class="discoverd_img">
                        <img src="<?php echo base_url(); ?>/<?php echo $c['image']; ?>" class="img-fluid discoverd_card_img" alt="list_1">
                     </div>
                     <div class="discoverd_content">
                        <a href="#"><?php echo $c['short']; ?></a>
                        <p><?php echo $c['course']; ?></p>
                        <div class="price_list">
                           <div class="rating">
                              <p><i class="fa fa-star"></i><?php echo $c['rating']; ?></p>
                           </div>
                           <div class="old-new-price">
                              <span class="old_price"><?php echo "₹".$c['price'].".00" ?></span>    
                              <span class="new_price"><?php echo "₹".$c['price'].".00" ?></span>    
                           </div>
                        </div>
                     </div>
                  </div>
            </div>

<?php  
    }
}
else
{
?>
<div class="col-lg-12 col-md-12">
                  <div class='alert alert-danger text-left'><button class="close" data-dismiss="alert"></button>Sorry Not Course Found Yet..</div>
</div>
<?php
}
?>

                   
            </div>
         </div>
      </section>



      <section class="course_product">
         <div class="container">
            <h2 class="discover_title">Most Recent</h2>
            <div class="row">

<?php

if (count($coursedesc) > 0)
{
    foreach ($coursedesc as $cd)
    {
    ?>


               <div class="col-lg-3 col-md-6">
                  <div class="discoverd_box">
                     <div class="discoverd_img">
                        <img src="<?php echo base_url(); ?>/<?php echo $cd['image']; ?>" class="img-fluid discoverd_card_img" alt="list_1">
                     </div>
                     <div class="discoverd_content">
                        <a href="#"><?php echo $cd['short']; ?></a>
                        <p><?php echo $cd['course']; ?></p>
                        <div class="price_list">
                           <div class="rating">
                              <p><i class="fa fa-star"></i><?php echo $cd['rating']; ?></p>
                           </div>
                           <div class="old-new-price">
                              <span class="old_price"><?php echo "₹".$cd['price'].".00" ?></span>    
                              <span class="new_price"><?php echo "₹".$cd['price'].".00" ?></span>    
                           </div>
                        </div>
                     </div>
                  </div>
            </div>

<?php  
    }
}
else
{
?>
<div class="col-lg-12 col-md-12">
                  <div class='alert alert-danger text-left'><button class="close" data-dismiss="alert"></button>Sorry Not Course Found Yet..</div>
</div>
<?php
}
?>


              
              
               
            </div>
         </div>
      </section>
      <footer>
         <div class="container">
            <div class="footer_wraper">
               <div class="foot_wiget">
                  <div class="foot_logo">
                     <a href="index.html"><img src="<?php echo base_url(); ?>/assets/web/img/logo.png" class="img-fluid"></a>
                     <p>Copyright © Fortressofinca<br>
                        All Right Reserved.
                     </p>
                  </div>
               </div>
               <div class="foot_wiget">
                  <div class="quick_title">BROWSE</div>
                  <ul class="quick_link">
                     <li><a href="#">Price</a></li>
                     <li><a href="#">Courses</a></li>
                     <li><a href="#">Blog</a></li>
                     <li><a href="#">Contact</a></li>
                  </ul>
               </div>
               <div class="foot_wiget">
                  <div class="quick_title">NEXT COURSES</div>
                  <ul class="quick_link">
                     <li><a href="#">Biology</a></li>
                     <li><a href="#">Management</a></li>
                     <li><a href="#">History</a></li>
                     <li><a href="#">Litterature</a></li>
                  </ul>
               </div>
               <div class="foot_wiget">
                  <div class="quick_title">ABOUT LEARN</div>
                  <ul class="quick_link">
                     <li><a href="#">About Us</a></li>
                     <li><a href="#">Apply</a></li>
                     <li><a href="#">Terms and conditions</a></li>
                     <li><a href="#">Register</a></li>
                  </ul>
               </div>
               <div class="foot_wiget">
                  <ul class="foot_languges">
                     <li>
                        <img src="<?php echo base_url(); ?>/assets/web/img/language.png" alt=""><a href="#">English</a>
                        <ul>
                           <li><a href="#">English</a></li>
                           <li><a href="#">English</a></li>
                           <li><a href="#">English</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <div class="copy_right">Copyright © My3School All Right Reserved.</div>
      <script src="<?php echo base_url(); ?>/assets/web/js/popper.min.js"></script>
      <script src="<?php echo base_url(); ?>/assets/web/js/bootstrap.js"></script>
      <script src="<?php echo base_url(); ?>/assets/web/js/slick.js"></script>
      <script src="<?php echo base_url(); ?>/assets/web/js/main.min.js"></script>
      <script>
         //Toggle menu responsive
         
         $("#menu-toggle").click(function(e) {
             e.preventDefault();
             $("body").toggleClass("active");
         });
         
         
         $(".mobile-menu-overlay").click(function(){
         $("body").removeClass("active");
         });
      </script>
      <script>
         $('.hero_slide').slick({
         infinite: true,
         autoplay:true,
         dots: true,
         arrows:false,
         speed: 300,
         });
      </script>


<script type="text/javascript">
    var base_path='<?php echo base_url(); ?>/web/';
    $(".search_data").on('click',function()
    {
        $('#searchform').prop('action',base_path + 'search');
                $('#searchform').submit();
    });
    
</script> 

<script>
      $("#show_signup").on("click",function(){
            $("#hide_signin").css("display","none")
            $("#show_signup_forms").css("display","block")
        });  
        $("#show_signup2").on("click",function(){
            $("#show_signup_forms").css("display","none")
            $("#hide_signin").css("display","block")
        });
        $("#hide_forgot").on("click",function(){
            $("#hide_signin").css("display","none")
            $("#show_forgot_forms").css("display","block")
        });
</script>   
<script type="text/javascript">
    $("#login_button").on('click',function()
    {
        $("#exampleModalCenter").modal('show');
    });
// ======================Signup start ===================

$("#signup_button").on('click',function()
{

    var fname = $("#fname").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    var email_pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    var phone_pattern = /^\d{10}$/

    if (fname == '')
    {
        alertify.error('Please Enter Your Full Name..');
        return false;
    }
    if (!email_pattern.test(email))
    {
       alertify.error('Please Enter Valid Email Id..');
        return false;
    }
    if (!phone_pattern.test(phone))
    {
       alertify.error('Please Enter Valid Phone..');
        return false;
    }
    if (password == '')
    {
       alertify.error('Please Enter password..');
        return false;
    }

    if (cpassword == '')
    {
       alertify.error('Please Enter confirm password..');
        return false;
    }

    if (password == cpassword)
    {
        $("#cnf_pwd").hide();
    }
    else
    {
        $("#cnf_pwd").show();
        return false;
    }

    var form_data = new FormData();
    form_data.append('fname',fname);
    form_data.append('email',email);
    form_data.append('phone',phone);
    form_data.append('password',password);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('/web/student_registration'); ?>",
                data: form_data,
                contentType: false,
                processData: false,
                success: function(data)
                {
                      var obj = JSON.parse(data);
                      if(obj.is_success == "yes")
                      {
                          alertify.success(obj.is_message);
                          // $("#exampleModalCenter").modal('hide');
                          $("#fname").val('');
                          $("#email").val('');
                          $("#phone").val('');
                          $("#password").val('');
                          $("#cpassword").val('');
                          $("#show_signup_forms").css("display","none")
                          $("#hide_signin").css("display","block")
                          
                      }
                      else
                      {
                           alertify.error(obj.is_message);
                      }                            
                }
        })
    
    // alert(phone.length);
 
    //     alertify.success('suc');
        
});

$("#cpassword").on('keyup',function()
{
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();

    if (password == cpassword)
    {
        $("#cnf_pwd").hide();
    }
    else
    {
        $("#cnf_pwd").show();
    }

});

// ======================Signup end ===================



// =====================Sign In======================
$("#signin_button").on('click',function()
{

    var email = $("#email").val();
    var password = $("#password").val();
    var email_pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

    if (!email_pattern.test(email))
    {
       alertify.error('Please Enter Valid Email Id..');
        return false;
    }

    if (password == '')
    {
       alertify.error('Please Enter password..');
        return false;
    }


    var form_data = new FormData();
    form_data.append('email',email);
    form_data.append('password',password);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('/web/student_login'); ?>",
                data: form_data,
                contentType: false,
                processData: false,
                success: function(data)
                {
                      var obj = JSON.parse(data);
                      if(obj.is_success == "yes")
                      {
                          alertify.success(obj.is_message);
                          // $("#exampleModalCenter").modal('hide');
                          $("#email").val('');
                          $("#password").val('');
                          location.reload();
                          
                      }
                      else
                      {
                           alertify.error(obj.is_message);
                      }                            
                }
        })
    
    // alert(phone.length);
 
    //     alertify.success('suc');
        
});
// =====================Sign In======================





</script>  
</body>
</html>