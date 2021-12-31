

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Manage Featured Course  | My3Skills</title>

    <!-- Tell the browser to be responsive to screen width -->

     <?php echo view('teacher-section/pages/styles'); ?>

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
                
                        <!-- /.card-header -->

                        <!-- form start --> 
                        <div class="card-body"> 
                          <div class="row">
                            <div class="col-5">
                                <a href="<?php echo base_url(); ?>/teacher-new-featured-course-add" class='btn btn-primary'>Add Featured Course</a>

                            </div>

                          </div>
                           <br>
                            <table id="data-table" class='table table-bordered table-striped' style="width: 100%">
                                <thead>
                                <tr>
                                    <th>#</th>  
                                    <th>Courses</th>
                                    <th>Transaction ID</th>   
                                    <th>Total Ammount</th>  
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $sr = 0; foreach ($course as $key => $value) { $sr++; ?>
                                        <tr id="row<?php echo $value['cid']; ?>">
                                            <td><?php echo $sr; ?></td> 
                                            <td><?php echo $value['course']; ?></td>  
                                            <td><?php echo $value['token']; ?></td> 
                                            <td>&#x20b9; <?php echo $value['amount']; ?></td>  
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        <!-- Form end --> 
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
    
    <?php if(isset($_SESSION['psuccess'])) { ?>

        toastr.success("Payment made successfully.");

    <?php unset($_SESSION['psuccess']); } ?>

    <?php if(isset($_SESSION['updated'])) { ?>

        toastr.success("Information updated successfully");

    <?php unset($_SESSION['updated']); } ?>
        $('#data-table').on('click','.remove_data_course',function () {
          var that=$(this);
          if(confirm('Are you sure to remove data?')){
              $.ajax({
                  type : 'post',
                  url : base_url + 'course-delete/' + that.data('id'),
                  success : function (response) {
                      toastr.success('Information removed successfully.');
                      $('#row'+that.data('id')).remove();
                  },
                  error : function (response) {
                      toastr.error('Something went wrong please reload the page and try again.');
                  }
              });
          }
       });
</script>
</body>

</html>

