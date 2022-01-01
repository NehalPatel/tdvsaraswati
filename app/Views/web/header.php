<?php

use App\Models\Course_model;
use App\Models\Category_model;
use App\Models\Subcategory_model;
use App\Models\Topic_model;
use App\Models\Student_model;
use App\Models\Cart_model;

$category1 = new Category_model();
$subcategory1 = new Subcategory_model();
$topic1  = new Topic_model();
$cart_data = new Cart_model();

  $category=$category1->query("select * from category where status = 'y' ")->getResult('array');

  $subcategory=$subcategory1->query("select * from subcategory where status = 'y' ")->getResult('array');

  $topic=$topic1->query("select * from topic where status = 'y' ")->getResult('array');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/font-awesome.min.css" />
        <link href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet" />
        <link rel="icon" href="<?php echo base_url(); ?>/assets/web/img/logo.png" type="image/png" sizes="16x16" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/slick.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/slick-theme.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/responsive.css" />
        <script src="<?php echo base_url(); ?>/assets/web/js/jquery-3.2.1.js"></script>

        <!-- =========================alertify external use ================= -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/web/css/alertify.css" />
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
                                <a href="<?php echo base_url(); ?>/web">
                                    <h1><img src="<?php echo base_url(); ?>/assets/web/img/logo.png" class="img-fluid" /> LEARN</h1>
                                </a>
                            </div>
                            <button class="mobile-menu-toggler" type="button"><i class="icon-menu"></i></button>
                            <div class="categorys">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="<?php echo base_url(); ?>/assets/web/img/cate_icon.png" class="img-fluid" /> Categories
                                                </a>
                                                <!-- ======================= Category menu=== -->
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <?php
                                          foreach ($category as $c)
                                          {
                                             
                                              if (count($subcategory) >
                                                    0) { $sub = 0; $cnt = 0; foreach ($subcategory as $s) { $cnt++; if ($c['id'] == $s['category_id']) { $sub++; ?>
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
                                                if (count($topic) >
                                                            0) { $sub1 = 0; $cnt1 = 0; foreach ($topic as $t) { $cnt1++; if ($t['subcategory_id'] == $s['id']) { $sub1++; if ($sub1 == 1) { ?>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item dropdown-toggle" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a>
                                                                    </li>
                                                                    <?php
                                                      }
                                                      else
                                                      {
                                                      ?>
                                                                    <li>
                                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a>
                                                                    </li>
                                                                    <?php   
                                                      }
                                                      }
                                                      if ($cnt1 == count($topic) && $sub1 >
                                                                    0) { ?>
                                                                </ul>
                                                            </li>
                                                            <?php
                                                }
                                                
                                                if ($sub1 == 0 && $cnt1 == count($topic))
                                                {
                                                ?>
                                                            <li>
                                                                <a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                            </li>
                                                            <?php  
                                                }
                                                }
                                                }
                                                else
                                                {
                                                ?>
                                                            <li>
                                                                <a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                            </li>
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
                                                if (count($topic) >
                                                            0) { $sub2 = 0; $cnt2 = 0; foreach ($topic as $t) { $cnt2++; if ($t['subcategory_id'] == $s['id']) { $sub2++; if ($sub2 == 1) { ?>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item dropdown-toggle" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a>
                                                                    </li>
                                                                    <?php
                                                      }
                                                      else
                                                      {
                                                      ?>
                                                                    <li>
                                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/web/topic?topic_id=<?php echo $t['id']; ?>"><?php echo $t['topic']; ?></a>
                                                                    </li>
                                                                    <?php   
                                                      }
                                                      }
                                                      if ($cnt2 == count($topic) && $sub2 >
                                                                    0) { ?>
                                                                </ul>
                                                            </li>
                                                            <?php
                                                }
                                                
                                                if ($sub2 == 0 && $cnt2 == count($topic))
                                                {
                                                ?>
                                                            <li>
                                                                <a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                            </li>
                                                            <?php  
                                                }
                                                }
                                                }
                                                else
                                                {
                                                ?>
                                                            <li>
                                                                <a class="dropdown-item" href="<?php echo base_url(); ?>/web/subcategory?subcategory_id=<?php echo $s['id']; ?>"><?php echo $s['subcategory']; ?></a>
                                                            </li>
                                                            <?php   
                                                }
                                                        ?>
                                                            <!-- ==============topic============ -->
                                                            <?php    
                                                }
                                                ?>
                                                            <?php
                                                }
                                                if ($cnt == count($subcategory) && $sub >
                                                            0) { ?>
                                                        </ul>
                                                    </li>
                                                    <?php
                                          }
                                          
                                          if ($sub == 0 && $cnt == count($subcategory))
                                          {
                                          ?>
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/web/category?category_id=<?php echo $c['id']; ?>"><?php echo $c['category']; ?></a>
                                                    </li>
                                                    <?php  
                                          }
                                          }
                                          }
                                          else
                                          {
                                          ?>
                                                    <li>
                                                        <a class="dropdown-item" href="<?php echo base_url(); ?>/web/category?category_id=<?php echo $c['id']; ?>"><?php echo $c['category']; ?></a>
                                                    </li>
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
                                        <input type="text" name="search" placeholder="Search course.." />
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
                                                        <img src="<?php echo base_url(); ?>/assets/web/img/couse1.png" />
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
                                                        <img src="<?php echo base_url(); ?>/assets/web/img/couse1.png" />
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

<!-- ====================== cart data========================= -->
<?php
                                    $student = $_SESSION['student']['id'];
                                    $cart_bag=$cart_data->query("select *,cart.id as cart_id from cart left join course on  course.id = cart.course_id where cart.status = 'y' and student_id = '$student' ")->getResult('array');
                            ?>

                                        <li class="cart-icon-pdg">
                                            <a href="cart.html" class="add_carts" id="menu-toggle" aria-hidden="true" data-toggle="main-side-bar"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><?php echo count($cart_bag); ?></span></a>
                                        </li>
                                        <div class="subToggle">
                                            <div class="cart-info">
                                                <div class="block-cart-title">
                                                    <h5>shopping bag</h5>
                                                </div>
                                                <div class="items cart-container">

                                                  <?php
                                                  $sum = 0;
                                                  foreach ($cart_bag as $cb)
                                                  {
                                                    $sum+= $cb['price'];
                                                  ?>
                                                    <div class="items_row">
                                                        <div class="cart-left">
                                                            <a class="cart-image" href="#"><img src="<?php echo base_url(); ?>/<?php echo $cb['image']; ?>" class="img-fluid" alt="list_1" /></a>
                                                        </div>
                                                        <div class="cart-right">
                                                            <div class="cart-title"><a href="javascript:void(0);"><?php echo $cb['course']; ?></a></div>
                                                            <div class="cart-price">
                                                                <span class="old_price"><?php echo $_SESSION['rate'] * $cb['old_amt'] ?></span>
                                                                <span class="new_price"><?php echo $_SESSION['rate'] * $cb['price'] ?></span>
                                                            </div>
                                                            <div class="cart-qty"><span>QTY : 01</span></div>
                                                        </div>
                                                        <a class="fa fa-times fa-delete remove_course" id="remove_course" style="cursor: pointer;" cart_id="<?php echo $cb['cart_id']; ?>"></a>
                                                    </div>

                                                <?php
                                                }
                                                ?>
                                                    
                                                </div>

                                                <div class="subtotal"><span>subtotal</span><span class="cart-total-right money"><?php echo "₹".$_SESSION['rate'] * $sum ?></span></div>
                                                <!-- ============== Total Amt =========== -->
                                                <?php
                                                 $total_amt = $_SESSION['rate'] * $sum;
                                                 $_SESSION['tot_amt'] = $total_amt; 
                                                ?>
                                                <!-- ============== Total Amt =========== -->

                                                <div class="cart-footer"><a href="<?php echo base_url(); ?>/web/add_cart" class="btn btn-border">view cart</a> <a href="<?php echo base_url(); ?>/web/checkout" class="btn btn-secondary">checkout</a></div>
                                            </div>
                                        </div>

<!-- ================================= cart data===============-->
                                        <li class="notifications">
                                            <a href="#" class="signup_user"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                                            <div class="notification_popup">
                                                <div class="notification_list">
                                                    <div class="noti_img">
                                                        <img src="<?php echo base_url(); ?>/<?php echo $_SESSION['student']['image']; ?>" />
                                                    </div>
                                                    <div class="notifi_text">
                                                        <p><?php echo $_SESSION['student']['name']; ?></p>
                                                        <p>
                                                            <strong><?php echo $_SESSION['student']['email']; ?></strong>
                                                        </p>
                                                        <br />
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
                                         <li class="pdg teacher_btn" style="color: white;">
                                          <a href="<?php echo base_url(); ?>/teacherzone"><button class="btn btn-sm">Teacher</button></a>
                                        </li>
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
                            <input type="text" name="email" id="email_login" placeholder="Enter email address">
                          </div>
                          <div class="user_fields">
                            <input type="password" name="password" id="password_login" placeholder="Enter password">
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
                       
                                <a href="#" class="google"><img src="<?php echo base_url(); ?>/assets/web/img/google.png"> Continue with Google</a>
                              
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