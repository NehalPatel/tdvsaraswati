

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Manage Course  | My3Skills</title>

      <?php echo view('teacher-section/pages/styles'); ?>
      
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/summernote/summernote-bs4.css">
  <style type="text/css">.asteriskField{color:red;}.note-editable.card-block {  height: 150px; }</style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div id="cover-spin" class="cover-spin"></div>
<div class="wrapper">



    <!-- Navbar -->

    <?php echo view('teacher-section/pages/header'); ?>

    <!-- /.navbar -->



    <!-- Main Sidebar Container -->

    <?php echo view('teacher-section/pages/sidebar'); ?>



    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <div class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1 class="m-0 text-dark">Manage Course</h1>

                    </div><!-- /.col -->

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active">Manage Course</li>

                        </ol>

                    </div><!-- /.col -->

                </div><!-- /.row -->

            </div><!-- /.container-fluid -->

        </div>

        <!-- /.content-header --> 

        <!-- Main content -->

        <section class="content"> 

                <div class="col-md-12">

                    <!-- general form elements -->

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">Manage Course</h3>

                        </div>
                        <div class="card-body"> 
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form enctype='multipart/form-data' id="cours_form" method="post" action="<?php echo base_url(); ?>/teacher-update-course/<?php echo $modify['id']; ?>">
                        <div class="bootstrap-iso">
                            <div class="container-fluid">
                                <div class="row">
                                   <div class="col-lg-4">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="selcourse">Categories<span class="asteriskField">*</span></label>
                                            <select class="select form-control" id="selcourse" name="selcourse" required="">
                                                <option value="">Select Option</option>
                                                 <?php foreach ($category as $key => $value) { ?>
                                                     <option <?php if($modify['category_id']==$value['id']){ echo "selected";} ?> value="<?php echo $value['id']; ?>" ><?php echo $value['category']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="selsubcat">Sub Categories<span class="asteriskField">*</span></label>
                                            <select class="select form-control" id="selsubcat" name="selsubcat" required="">
                                                <option value="">Select Option</option> 
                                                 <?php foreach ($subcat as $key => $value) { ?>
                                                     <option  <?php if($modify['subcategory_id']==$value['id']){ echo "selected";} ?> value="<?php echo $value['id']; ?>" ><?php echo $value['subcategory']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="selchildcat"> Child Categories</label>
                                            <select class="select form-control" id="selchildcat" name="selchildcat">
                                                <option value="">Select Option</option> 
                                                  <?php foreach ($childcat as $key => $value) { ?>
                                                     <option <?php if($modify['topic_id']==$value['id']){ echo "selected";} ?> value="<?php echo $value['id']; ?>" ><?php echo $value['topic']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="sellanguage">Language<span class="asteriskField">*</span></label>
                                            <select class="select form-control" id="sellanguage" name="sellanguage" required="">
                                                <option value="">Select Option</option>
                                                 <?php foreach ($language as $key => $value) { ?>
                                                     <option  <?php if($modify['language_id']==$value['id']){ echo "selected"; } ?>  value="<?php echo $value['id']; ?>" ><?php echo $value['title']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txttitle">Title<span class="asteriskField">*</span></label>
                                            <input type="text" class="form-control"  name="txttitle" id="txttitle" value="<?php echo $modify['course']; ?>">

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txtslug">Slug<span class="asteriskField">*</span></label>
                                            <input type="text" name='txtslug' id="txtslug" class="form-control" value="<?php echo $modify['slug']; ?>" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txtshortdetail">Short Detail<span class="asteriskField">*</span></label>
                                            <textarea class="form-control" name="txtshortdetail" id="txtshortdetail"><?php echo $modify['short']; ?></textarea>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txtrequirement">Requirments<span class="asteriskField">*</span></label>
                                            <textarea class="textarea"  name="txtrequirement" id='txtrequirement'><?php echo $modify['requirement']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txtincludes">Includes</label>
                                            <textarea class="textarea" name="txtincludes" id='txtincludes' ><?php echo $modify['includes']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txtwhatleran">What Learn</label>
                                            <textarea class="textarea"  name="txtwhatleran" id="txtwhatleran"  ><?php echo $modify['what_learn']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="txtdetails">Details</label>
                                            <textarea class="textarea"  name="txtdetails" id="txtdetails"
                                            style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $modify['long']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="control-label">Free<span class="asteriskField">*</span></label>
                                            <input type="checkbox" class="form-control" name="free" <?php if($modify['price']==0){ echo "checked" ; } ?> data-bootstrap-switch value = "1" data-on-text="Free" data-off-text="Paid">
                                        </div>
                                    </div>
                                     <div class="col-lg-6 paid"  style="display: <?php if($modify['price']==0){ echo "none" ; } else { echo "block"; } ?>;">
                                        <div class="form-group">
                                            <label class="control-label" for="txtprice">Price:<span class="asteriskField">*</span></label></label>
                                            <input type="text" class="form-control"  name="txtprice" id="txtprice" value="<?php echo $modify['old_amt']; ?>">
                                        </div>
                                     </div>
                                     <div class="col-lg-6 paid"  style="display: <?php if($modify['price']==0){ echo "none" ; } else { echo "block"; } ?>;">
                                        <div class="form-group">
                                            <label class="control-label" for="txtdprice">Discount Price:</label></label>
                                            <input type="text" class="form-control"  name="txtdprice" id="txtdprice" value="<?php echo $modify['price']; ?>">
                                        </div>
                                    </div> 
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label" for="filepriviewvideo">Preview Video</label>
                                                 <input type="file" class="form-control"  name="filepriviewvideo" id="filepriviewvideo" accept="video/*">
                                             
                                                <video width="320" height="240" controls>
                                                    <source src="<?php echo base_url(); ?>/<?php echo $modify['preview']; ?>" type="video/mp4"> 
                                                    Your browser does not support the video tag.
                                                  </video> 
                                                  <br> <br>
                                                   <input type="hidden" name="hdn-video" value="<?php echo $modify['preview']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="control-label" for="filepriviewimage">Preview Image</label>
                                                 <input type="file" class="form-control"  name="filepriviewimage" id="filepriviewimage" accept="image/*">
                                                 <br><br>
                                                 <img src="<?php echo base_url(); ?>/<?php echo $modify['image']; ?>" height="200" width="320">
                                                 <input type="hidden" name="hdn-image" value="<?php echo $modify['image']; ?>">
                                            </div>

                                        </div> 
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary " name="submit" type="submit"> Submit </button>
                                         </div>    
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                        </form>
                        
                        

                        <!-- Form End --> 
                    </div>
                    </div>

                    <!-- /.card -->

                </div>

           

            <!-- /.row -->

        </section>

        <!-- /.content -->

        </div> 

    <!-- /.content-wrapper -->

    <footer class="main-footer">

        <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>

        All rights reserved.

        <div class="float-right d-none d-sm-inline-block">

            <b>Version</b> 3.0.5

        </div>

    </footer>



    <!-- Control Sidebar -->

    <aside class="control-sidebar control-sidebar-dark">

        <!-- Control sidebar content goes here -->

    </aside>

    <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->

<?php echo view('teacher-section/pages/scripts'); ?>
  
 
<script src="<?php echo base_url(); ?>/assets/custom_teacher_section.js?v=1.0"></script> 
 <script>
   var base_url = '<?php echo base_url(); ?>/';

    <?php if(isset($_SESSION['inserted'])) { ?>

        toastr.success("Information added successfully");

    <?php unset($_SESSION['inserted']); } ?>

    <?php if(isset($_SESSION['updated'])) { ?>

        toastr.success("Information updated successfully");

    <?php unset($_SESSION['updated']); } ?>

</script>
<script src="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
     $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));

    });
     $('input[data-bootstrap-switch]').on('switchChange.bootstrapSwitch', function (event, state) {
            var x = $(this).data('on-text');
            var y = $(this).data('off-text'); 
            if($(this).is(':checked') && y=="Paid") { 
                $("div.paid").hide(250);
                $(this).val(1);
            } else {
                $(this).val(0);
                $("div.paid").show(250);
            }
    });

  });
  jQuery(document).ready(function($) {
    jQuery.validator.addMethod("noSpace", function(value, element) { 
          return value.indexOf(" ") < 0 && value != ""; 
        }, "No space please and don't leave it empty");
         $("#cours_form").validate({
          rules:{
            txtslug: { noSpace:true, required :true }
          }
         })
  });
  $("#selcourse").change(function(event) {
            /* Act on the event */
            if($(this).val()!==""){
              $.ajax({
                  type : 'post',
                  url : base_url + 'teacher-get-sub-category/' + $(this).val(),
                  beforeSend: function() {
                        $('#cover-spin').show();
                    },
                  success : function (response) {
                      $("#selsubcat").empty().append(response);
                      $("#selchildcat").empty().append('<option value="">Select Option</option>');  
                      $('#cover-spin').hide();
                  },
                  error : function (response) {
                     $('#cover-spin').hide();
                      toastr.error('Something went wrong please reload the page and try again.');
                  }
              });
            }else{
                $("#selsubcat").empty().append('<option value="">Select Option</option>');
                $("#selchildcat").empty().append('<option value="">Select Option</option>');
            }
        });
   $("#selsubcat").change(function(event) {
            /* Act on the event */
            if($("#selcourse").val()==""){
                toastr.error('Please select category.');
                return false;
            }
            if($(this).val()!==""){
              $.ajax({
                  type : 'post',
                  url : base_url + 'teacher-get-child-sub-category/' + $(this).val()+'/'+ $("#selcourse").val(),
                  beforeSend: function() {
                        $('#cover-spin').show();
                    },
                  success : function (response) {
                      $("#selchildcat").empty().append(response);  
                      $('#cover-spin').hide();
                  },
                  error : function (response) {
                     $('#cover-spin').hide();
                      toastr.error('Something went wrong please reload the page and try again.');
                  }
              });
            }else{ 
                $("#selchildcat").empty().append('<option value="">Select Option</option>');
            }
        });
  $("#txttitle").on('keyup',function(){
     var slug = $(this).val().replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-');
     $("#txtslug").val(slug);
  });
</script>
</body>

</html>

