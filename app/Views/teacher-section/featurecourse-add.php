

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Manage Featured Course  | My3Skills</title>

      <?php echo view('teacher-section/pages/styles'); ?>
      
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/plugins/summernote/summernote-bs4.css">
  <style type="text/css">.asteriskField{color:red;}</style>

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

                        <h1 class="m-0 text-dark">Manage Featured Course</h1>

                    </div><!-- /.col -->

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active">Manage Featured Course</li>

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

                            <h3 class="card-title">Manage Featured Course</h3>

                        </div>
                        <div class="card-body"> 
                        <!-- /.card-header -->

                        <!-- form start -->
                        <form enctype='multipart/form-data' id="cours_form" method="post" action="<?php echo base_url(); ?>/teacher-payment">
                        <div class="bootstrap-iso">
                            <div class="container-fluid">
                                <div class="row">
                                   <div class="col-lg-12">
                                       <div class="form-group ">
                                            <label class="control-label requiredField" for="selcourse">Course<span class="asteriskField">*</span></label>
                                            <select class="select form-control" id="selcourse" name="selcourse" required="">
                                                <option value="">Select Option</option>
                                                 <?php foreach ($course as $key => $value) { ?>
                                                     <option value="<?php echo $value['id']; ?>" ><?php echo $value['course']; ?></option>
                                                 <?php } ?>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-12">
                                      <label class="control-label">Amount to be paid to feature a course: &#x20b9; 100</label>
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
    jQuery(document).ready(function($) {
      $("#cours_form").validate({
        rules:{
          selcourse:{required:true}
        }
      });
    });
</script>
 
</body>

</html>

