<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Manage Meetings  | My3Skills</title>

      <?php echo view('teacher-section/pages/styles'); ?>
      <style type="text/css">.asteriskField{color:red;}</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

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

                        <h1 class="m-0 text-dark">Manage Meetings</h1>

                    </div><!-- /.col -->

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active">Manage Meetings</li>

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

                            <h3 class="card-title">Manage Meetings</h3>

                        </div>
                        <div class="card-body"> 
                        <!-- /.card-header -->

                        <!-- form start --> 
                         <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
                         

                        <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
                        <div class="bootstrap-iso">
                         <div class="container-fluid">
                          <div class="row">
                           <div class="col-12">
                            <form method="post" action="<?php echo base_url(); ?>/teacher-meetings-add-data" id="add-meeting-form">
                             <div class="form-group ">
                              <label class="control-label requiredField" for="selcourse">
                               Course
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <select class="select form-control" id="selcourse" name="selcourse" required="">
                               <option value="">
                                Select Course
                               </option>
                               <?php foreach($course as $c){ ?>
                                    <option value="<?php echo $c['id']; ?>"><?php echo $c['course']; ?></option>
                               <?php } ?>
                              </select>
                             </div> 
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtmeeting_title">
                               Meeting Title
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input type='text' class="form-control"  id="txtmeeting_title" name="txtmeeting_title"  required=""></textarea>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtmeetingid">
                               Meeting Id
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input type='text' class="form-control"  id="txtmeetingid" name="txtmeetingid"  required=""></textarea>
                             </div>
                              <div class="form-group ">
                              <label class="control-label requiredField" for="txtownerid">
                               Your Zoom Email ID
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input type="email" class="form-control"  id="txtownerid" name="txtownerid"  required=""> 
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtmtypes">
                               Meeting Type
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input type="text" class="form-control"  id="txtmtypes" name="txtmtypes"  required=""> 
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtmtimedate">
                               Metting Date and Time
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input type="datetime-local" class="form-control"  id="txtmtimedate" name="txtmtimedate"  required=""> 
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtzoomurl">
                               Zoom URL
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <input type="datetime" class="form-control"  id="txtzoomurl" name="txtzoomurl"  required=""> 
                             </div>
                             <div class="form-group">
                              <div>
                               <button class="btn btn-primary " name="submit" type="submit">
                                Submit
                               </button>
                              </div>
                             </div>
                            </form>
                           </div>
                          </div>
                         </div>
                        </div> 
                        </div> 
                        <!-- Form end --> 
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
  jQuery(document).ready(function($) {
    $("#add-meeting-form").validate();
  });
</script>
</body>

</html>

