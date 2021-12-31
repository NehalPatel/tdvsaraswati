<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Zoom Meetings | My3Skills</title>

    <?php echo view('teacher-section/pages/styles'); ?>

</head>

<body class="hold-transition sidebar-mini">

<div class="wrapper">

    <!-- Navbar -->

    <?php echo view('teacher-section/pages/header'); ?>



    <!-- /.navbar -->



    <!-- Main Sidebar Container -->

    <?php echo view('teacher-section/pages/sidebar'); ?>



    <!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">

        <!-- Content Header (Page header) -->

        <section class="content-header">

            <div class="container-fluid">

                <div class="row mb-2">

                    <div class="col-sm-6">

                        <h1>Zoom Meetings</h1>

                    </div>

                    <div class="col-sm-6">

                        <ol class="breadcrumb float-sm-right">

                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active">Zoom Meetings</li>

                        </ol>

                    </div>

                </div>

            </div><!-- /.container-fluid -->

        </section>

        <!-- Main content -->

        <section class="content">

            <div class="row" id="data_div">

                <div class="col-12">

                    <!-- /.card -->

                    <div class="card">

                        <div class="card-header">

                            <h3 class="card-title">All Meetings</h3>

                        </div>

                        <!-- /.card-header -->

                        <div class="card-body">
                           
                          <div class="row">
                            <div class="col-5">
                               <a href="<?php echo base_url(); ?>/teacher-add-meetings" class='btn btn-primary'>Add Meetings</a>

                            </div>

                          </div>
                           <br>
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>

                                <tr>

                                    <th>Sr.No</th>

                                    <th>Teacher</th>

                                    <th>Meeting Details</th>
                                    <th>Edit</th>
                                    <th>Delete</th>

                                </tr>

                                </thead>

                                <tbody>

                                <?php $cnt=1; foreach ($meetings as $a) {?>

                                    <tr id="row<?php echo $a['id']; ?>">

                                        <td><?php echo $cnt++; ?></td>

                                        <td><?php echo $a['teacher_id']==0?"Admin":$a['teacher']['name']; ?></td>

                                        <td>

                                            <b>Meeting ID : </b><?php echo $a['meeting_id']; ?><br>

                                            <b>Owner ID : </b><?php echo $a['owner_id']; ?><br>

                                            <b>Topic : </b><?php echo $a['meeting_title']; ?><br>

                                            <b>Start Time : </b><?php echo date('d-m-Y h:i A',strtotime($a['start_time'])); ?><br>

                                        </td>
                                         <td><a href="<?php echo base_url(); ?>/teacher-edit-meetings/<?php echo $a['id']; ?>"  class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                         </td>
                                         <td><a href="javascript:void(0)" data-id="<?php echo $a['id']; ?>"  class="btn btn-danger remove_data"><i class="fa fa-trash"></i></a></td>


                                    </tr>

                                <?php } ?>

                                </tbody>

                            </table>

                        </div>

                        <!-- /.card-body -->

                    </div>

                    <!-- /.card -->

                </div>

                <!-- /.col -->

            </div>

            <!-- /.row -->

        </section>

        <!-- /.content -->

    </div>

    <!-- /.content-wrapper -->

    <?php echo view('teacher-section/pages/footer'); ?>

    <!-- Control Sidebar -->

    <aside class="control-sidebar control-sidebar-dark">

        <!-- Control sidebar content goes here -->

    </aside>

    <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->

<?php echo view('teacher-section/pages/scripts'); ?>

<!-- jQuery -->

<script type="text/javascript">

    var base_path='<?php echo base_url(); ?>/';

    $(document).ready(function () {

       $('#example1').on('click','.remove_data',function () {

          var that=$(this);

          if(confirm('Are you sure to remove data??')){

              $.ajax({

                  type : 'post',

                  url : base_path + 'teacher-delete-meetings/' + that.data('id'),

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
    });
    <?php if(isset($_SESSION['inserted'])) { ?>

        toastr.success("Information added successfully");

    <?php unset($_SESSION['inserted']); } ?>

    <?php if(isset($_SESSION['updated'])) { ?>

        toastr.success("Information updated successfully");

    <?php unset($_SESSION['updated']); } ?>
</script>

</body>

</html>

