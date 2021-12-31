<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Manage Questions  | My3Skills</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- iCheck -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/dist/css/adminlte.min.css">

    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.css">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Inline CSS based on choices in "Settings" tab -->
    <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>
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

                        <h1 class="m-0 text-dark">Manage Questions</h1>

                    </div><!-- /.col -->

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active">Manage Questions</li>

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

                            <h3 class="card-title">Manage Questions</h3>

                        </div>
                        <div class="card-body">
                     <div class="bootstrap-iso">
                         <div class="container-fluid">
                          <div class="row">
                           <div class="col-12">
                            <form method="post" action="<?php echo base_url(); ?>/add-teacher-questions">
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
                              <label class="control-label requiredField" for="selvideo">
                               Video
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <select class="select form-control" id="selvideo" name="selvideo" required="">
                               <option value="">
                                Select Video
                               </option>
                              </select>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="txtquestion">
                               Question
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <textarea class="form-control" cols="40" id="txtquestion" name="txtquestion" rows="10" required=""></textarea>
                             </div>
                             <div class="form-group ">
                              <label class="control-label requiredField" for="selstatus">
                               Status
                               <span class="asteriskField">
                                *
                               </span>
                              </label>
                              <select class="select form-control" id="selstatus" name="selstatus" required="">
                               <option value="">
                                Select Status
                               </option>
                               <option selected="" value="n">Deactive</option>
                               <option value="y">Active</option>
                              </select>
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
                        <!-- /.card-header -->

                        



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



<!-- jQuery -->

<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>

<!-- jQuery UI 1.11.4 -->

<script src="<?php echo base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<script>

    $.widget.bridge('uibutton', $.ui.button)

</script>

<!-- Bootstrap 4 -->

<script src="<?php echo base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- ChartJS -->

<script src="<?php echo base_url(); ?>/assets/plugins/chart.js/Chart.min.js"></script>

<!-- Sparkline -->

<script src="<?php echo base_url(); ?>/assets/plugins/sparklines/sparkline.js"></script>

<!-- JQVMap -->

<script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<!-- jQuery Knob Chart -->

<script src="<?php echo base_url(); ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>

<!-- daterangepicker -->

<script src="<?php echo base_url(); ?>/assets/plugins/moment/moment.min.js"></script>

<script src="<?php echo base_url(); ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->

<script src="<?php echo base_url(); ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Summernote -->

<script src="<?php echo base_url(); ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>

<!-- overlayScrollbars -->

<script src="<?php echo base_url(); ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<!-- AdminLTE App -->

<script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->

<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>
<script src="<?php echo base_url(); ?>/assets/custom_teacher_section.js?v=1.0"></script> 
 <script>
   var base_url = '<?php echo base_url(); ?>/';
</script>
</body>

</html>

