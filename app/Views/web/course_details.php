<!DOCTYPE html>
<html lang="en">

<style type="text/css">
  #fade {
  display: none;
  position: fixed;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}

#light {
  display: none;
  position: absolute;
  top: 50%;
  left: 50%;
  max-width: 600px;
  max-height: 360px;
  margin-left: -300px;
  margin-top: -180px;
  border: 2px solid #FFF;
  background: #FFF;
  z-index: 1002;
  overflow: visible;
}

#boxclose {
  float: right;
  cursor: pointer;
  color: #fff;
  border: 1px solid #AEAEAE;
  border-radius: 3px;
  background: #222222;
  font-size: 31px;
  font-weight: bold;
  display: inline-block;
  line-height: 0px;
  padding: 11px 3px;
  position: absolute;
  right: 2px;
  top: 2px;
  z-index: 1002;
  opacity: 0.9;
}

.boxclose:before {
  content: "×";
}

#fade:hover ~ #boxclose {
  display:none;
}

.test:hover ~ .test2 {
  display: none;
}
</style>
<?php
echo view('web/header');
?>
<section class="inner_bredcrum">
        <div class="container">
            <p>/Course</p>
            <h2><?php echo $course['course']; ?></h2>
        </div>
    </section>
    <section class="cart_wraper pb80">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9">
                    <div class="title_details">
                    <h2 class="discover_title"><?php echo $course['course']; ?></h2>
                     <p><?php echo $course['short']; ?></p>        
                    <div class="price_list">
                     <div class="rating">
                        <p style="width: 62px;"><i class="fa fa-star"></i><?php echo $course['rating']; ?></p>
                     </div>
                        </div>
                        <div class="what_you_box">
                            <h3 class="what_lear_title">What you'll learn</h3>
                            <ul>
                                <li><?php echo $course['what_learn']; ?></li>
                            </ul>
                        </div>  
                        <div class="what_you_box what_you_box2">
                            <h3 class="what_lear_title">Requirements</h3>
                            <ul>
                                <li><?php echo $course['requirement']; ?></li>
                            </ul>
                        </div>  
                        <div class="title_details">
                    <h2 class="what_lear_title">Description</h2>
                    <p><?php echo $course['long']; ?></p>   
                  </div>
                        <div class="title_details">
                    <h2 class="what_lear_title">Don't Miss Out!</h2>
                            <p><?php echo $course['seller_type']; ?></p>       
                    
                  </div>
                        <div class="what_you_box what_you_box2">
                            <h3 class="what_lear_title">Who this course is for:</h3>
                            <ul>
                                <li><?php echo $course['includes']; ?></li>
                            </ul>
                         
                        </div>  
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="checkout_box">
                        <div class="discoverd_img">
                              <img src="<?php echo base_url(); ?>/<?php echo $course['image']; ?>" class="img-fluid discoverd_card_img" alt="list_1" onclick="lightbox_open();" style="cursor: pointer;">
                           </div>
                        
                        <span class="new_price" style="display: inline-block;"><?php echo "₹".$_SESSION['rate'] * $course['price'].".00" ?></span>  
                        <span class="old_price" style="display: inline-block;"><?php echo "₹". $_SESSION['rate'] * $course['old_amt'].".00" ?></span>
                        <?php
                        if (isset($_SESSION['student']))
                        {
                        ?>
                          <a href="javascript:void(0);" course_id="<?php echo $course['id']; ?>" id="add_to_cart" >Add to Cart</a>
                        <?php
                        }
                        else
                        {
                        ?>
                           <a href="javascript:void(0)" id="add_cart_login">Add to Cart</a>
                        <?php
                        }
                        ?>
                        <a href="#" class="buynow">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
<!-- ====================================Preview Video==================== -->
<div id="light">
  <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
  <video id="VisaChipCardVideo" width="600" controls>
      <source src="<?php echo base_url(); ?>/<?php echo $course['preview']; ?>" type="video/mp4">
      <!--Browser does not support <video> tag -->
    </video>
</div>

<div id="fade" onClick="lightbox_close();"></div>
<!-- ========================= preview video====================== -->

  <!-- Login Modal Start-->
    <div class="modal fade" id="exampleModalCenter_cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          
          <div class="modal-body">
              <div class="user_login_wrap">
                  <form class="login_forms" id="hide_signin_cart">
                      <div class="user_title">
                          <h3 class="login_title">Signin now</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> 
                      </div>
                      <div class="login_info">
                          <div class="user_fields">
                            <input type="text" name="email" id="email_cart" placeholder="Enter email address">
                          </div>
                          <div class="user_fields">
                            <input type="password" name="password_cart" id="password_cart" placeholder="Enter password">
                          </div>
                          <div class="forgot_link">
                              <a href="#" id="hide_forgot_cart">Forgot password</a>
                          </div>
                          <div class="login_btns">
                              <a href="javascript:void(0);" id="signin_button_cart">Signin</a>
                          </div>
                          <div class="or">or with</div>
                          <div class="login_btns">
                              <a href="#" class="facebook"><img src="<?php echo base_url(); ?>/assets/web/img/facebook.png"> Continue with facebook</a>
                          </div>
                          <div class="login_btns">
                       
                                 <a href="#" class="google"><img src="<?php echo base_url(); ?>/assets/web/img/google.png"> Continue with Google</a>
                              
                          </div>
                          <div class="dont_have_ac">
                                  <p>Don't have an account? <a href="#" id="show_signup_cart">Sign up</a></p>
                              </div>
                      </div>
                  </form>
                  <form class="login_forms" style="display: none;" id="show_signup_forms_cart">
                      <div class="user_title">
                          <h3 class="login_title">SignUp</h3>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button> 
                      </div>
                      <div class="login_info">
                          <div class="user_fields">
                            <input type="text" name="fname_cart" id="fname_cart" placeholder="Full name">
                          </div>
                          <div class="user_fields">
                            <input type="text" name="email_cart_reg" id="email_cart_reg" placeholder="Enter email address">
                          </div>
                          <div class="user_fields">
                            <input type="text" name="phone_cart" id="phone_cart" placeholder="Phone number" maxlength="10">
                          </div>
                          <div class="user_fields">
                            <input type="password" name="password_cart" id="password_cart_reg" placeholder="Enter password">
                          </div>
                           <div class="user_fields">
                            <input type="password" name="cpassword_cart" id="cpassword_cart" placeholder="Confirm password">
                            <label id="cnf_pwd_cart" style="color: red;display: none;">confirm password not match</label>
                          </div>
                          <div class="login_btns">
                              <a href="javascript:void(0);" id="signup_button_cart">Signup</a>
                          </div>
                          <div class="dont_have_ac">
                                  <p>Already have an account? <a href="#" id="show_signup2_cart">SignIn</a></p>
                              </div>
                      </div>
                  </form>
                  
                  <form class="login_forms" style="display: none;" id="show_forgot_forms_cart">
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
<script type="text/javascript">
  $("#add_cart_login").on('click',function()
  {
      $("#exampleModalCenter_cart").modal('show');
  });
</script>
<script>
      $("#show_signup_cart").on("click",function(){
            $("#hide_signin_cart").css("display","none")
            $("#show_signup_forms_cart").css("display","block")
        });  
        $("#show_signup2_cart").on("click",function(){
            $("#show_signup_forms_cart").css("display","none")
            $("#hide_signin_cart").css("display","block")
        });
        $("#hide_forgot_cart").on("click",function(){
            $("#hide_signin_cart").css("display","none")
            $("#show_forgot_forms_cart").css("display","block")
        });
</script>   

<?php echo view('web/footer'); ?>

<script type="text/javascript">
  window.document.onkeydown = function(e) {
  
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
}
</script>
<script type="text/javascript">
// ======================Signup start ===================

$("#signup_button_cart").on('click',function()
{

    var fname = $("#fname_cart").val();
    var email = $("#email_cart_reg").val();
    var phone = $("#phone_cart").val();
    var password = $("#password_cart_reg").val();
    var cpassword = $("#cpassword_cart").val();
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
        $("#cnf_pwd_cart").hide();
    }
    else
    {
        $("#cnf_pwd_cart").show();
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
                          $("#fname_cart").val('');
                          $("#email_cart_reg").val('');
                          $("#phone_cart").val('');
                          $("#password_cart_reg").val('');
                          $("#cpassword_cart").val('');
                          $("#show_signup_forms_cart").css("display","none")
                          $("#hide_signin_cart").css("display","block")
                          
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

$("#cpassword_cart").on('keyup',function()
{
    var password = $("#password_cart_reg").val();
    var cpassword = $("#cpassword_cart").val();

    if (password == cpassword)
    {
        $("#cnf_pwd_cart").hide();
    }
    else
    {
        $("#cnf_pwd_cart").show();
    }

});

// ======================Signup end ===================



// =====================Sign In======================
$("#signin_button_cart").on('click',function()
{

    var email = $("#email_cart").val();
    var password = $("#password_cart").val();

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
                          $("#email_cart").val('');
                          $("#password_cart").val('');
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

<script type="text/javascript">
// =======================Add to cart====================

$("#add_to_cart").on('click',function()
{

    var course_id = $(this).attr('course_id');

    var form_data = new FormData();
    form_data.append('course_id',course_id);
      $.ajax({
        type: "POST",
        url: "<?php echo base_url('/web/add_to_cart'); ?>",
                data: form_data,
                contentType: false,
                processData: false,
                success: function(data)
                {
                      var obj = JSON.parse(data);
                      if(obj.is_success == "yes")
                      {
                          window.location.replace('<?php echo base_url(); ?>/web/add_cart?course_id='+course_id);
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
</script>
         