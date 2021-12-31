<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Dashboard  | My3Skills</title>

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

                        <h1 class="m-0 text-dark">Dashboard</h1>

                    </div><!-- /.col -->

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active">Dashboard</li>

                        </ol>

                    </div><!-- /.col -->

                </div><!-- /.row -->

            </div><!-- /.container-fluid -->

        </div>

        <!-- /.content-header -->



        <!-- Main content -->

        <section class="content">

            <div class="container-fluid">

                <!-- Small boxes (Stat box) -->

                <div class="row"> 
                    <div class="col-lg-3 col-6">

                        <!-- small box -->

                        <div class="small-box bg-danger">

                            <div class="inner">

                                <h3><?= intval($course[0]['total']); ?></h3>

                                <p>Total Courses</p>

                            </div>

                            <div class="icon">

                                <i class="ion ion-pie-graph"></i>

                            </div>

                            <a href="<?php echo base_url(); ?>/teacher-course" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small box -->

                        <div class="small-box bg-warning">

                            <div class="inner">

                                <h3><?= intval($students[0]['total']); ?></h3>

                                <p>User Enrolled</p>

                            </div>

                            <div class="icon">

                                <i class="ion ion-person-add"></i>

                            </div>

                            <a href="<?php echo base_url(); ?>/teacher/user-enrolled" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small box -->

                        <div class="small-box bg-success">

                            <div class="inner">

                                <h3><?= intval($questions[0]['total']); ?></h3>

                                <p>Total Questions</p>

                            </div>

                            <div class="icon">

                                <i class="ion ion-stats-bars"></i>

                            </div>

                            <a href="<?php echo base_url(); ?>/teacher-question" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                        </div>

                    </div>

                    <div class="col-lg-3 col-6">

                        <!-- small box -->

                        <div class="small-box bg-info">

                            <div class="inner">

                                <h3><?php echo intval($ans[0]['total']); ?></h3>

                                <p>Total Answers</p>

                            </div>

                            <div class="icon">

                                <i class="ion ion-bag"></i>

                            </div>

                            <a href="<?php echo base_url(); ?>/teacher-answer" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>

                        </div>

                    </div>



                    <!-- ./col -->

                </div>

                <!-- /.row -->

                <!-- Main row -->

                 
                <!-- /.row (main row) -->

            </div><!-- /.container-fluid -->

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

<script src="<?php echo base_url(); ?>/assets/dist/js/adminlte.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="<?php echo base_url(); ?>/assets/dist/js/pages/dashboard.js"></script>

<!-- AdminLTE for demo purposes -->

<script src="<?php echo base_url(); ?>/assets/dist/js/demo.js"></script>

</body>

</html>

