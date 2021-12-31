

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title> Manage Questions  | My3Skills</title>

    <!-- Tell the browser to be responsive to screen width -->

     <?php echo view('teacher-section/pages/styles'); ?>

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

                        <!-- /.card-header -->

                        <!-- form start --> 
                       <div class="card-body"> 
                          <div class="row">
                            <div class="col-5">
                               &emsp; <a href="<?php echo base_url(); ?>/teacher-add-question" class='btn btn-primary'>Add Question</a>

                            </div>

                          </div>
                           <br>
                            <table id="data-table" class='table table-bordered table-striped' style="width: 100%">
                                <thead>
                                <tr>
                                    <th>#</th> 
                                    <th>Answer</th>
                                    <th>Question</th>  
                                    <th>Course</th>  
                                    <th>Give Answer</th>  
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $sr = 0; foreach ($questions as $key => $value) { $sr++; ?>
                                        <tr id="row<?php echo $value['question_id']; ?>">
                                            <td><?php echo $sr; ?></td>
                                            <td><?php echo $value['answer']; ?></td>
                                            <td><?php echo $value['question']; ?></td>
                                            <td><?php echo $value['course']; ?></td>  
                                            <td><a href="javascript:void(0);" data-id="<?php echo $value['question_id']; ?>" id="question-answer" class="btn question-answer btn-primary" title="answer"><i class="fa fa-reply"></i></a></td> 
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
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

         <div class="modal fade" id="modal-default" aria-hidden="true">
          <form action="<?php echo base_url(); ?>/add-answer" method="post">
            <input type="hidden" name="hdnid" id="hdnid">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Give Answer</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="col-12">
                      <div class="form-group">
                        <label class="label-control">Answer</label>
                          <textarea class="form-control" name="txtanswer" id="txtanswer" required="" rows="5"></textarea>
                      </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            </form>
          </div>

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

    
    jQuery(document).ready(function($) {
        $(".question-answer").click(function(event) {
            /* Act on the event */
              $.ajax({
                  type : 'post',
                  url : base_url + 'get-answer/' + $(this).data('id'),
                  beforeSend: function() {
                        $('#cover-spin').show();
                    },
                  success : function (response) {
                    var data = JSON.parse(response);
                      $("#txtanswer").empty().append(data.answer);
                      $("#hdnid").val(data.id);
                      $("#modal-default").modal('show');
                      $('#cover-spin').hide();
                  },
                  error : function (response) {
                     $('#cover-spin').hide();
                      toastr.error('Something went wrong please reload the page and try again.');
                  }
              });
            
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

