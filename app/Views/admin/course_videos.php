<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $course['course']; ?> | My3Skills </title>
    <?php echo view('admin/pages/styles'); ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <?php echo view('admin/pages/header'); ?>

    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php echo view('admin/pages/sidebar'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo $course['course']; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $course['course']; ?></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row" id="form_div" style="display: none;">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Manage Videos</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="id" id="hid">
                            <input type="hidden" name="course" value="<?= $iid; ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Slider Title">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Description</label>
                                            <textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Thumb Image (600 * 300)</label>
                                            <input type="file" class="form-control" name="thumb" id="image" accept="image/*">
                                            <bR>
                                            <img src="" style="display: none;height: 150px;width: 300px;" id="image_div">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Choose Video</label>
                                            <input type="file" class="form-control" name="video" id="video" accept="video/*">
                                            <br>
                                            <video type="video/mp4" src="" id="video_div" style="display: none;height: 150px;width: 300px;" controls></video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Save Video</button>
                                <button type="button" id="cancelBtn" class="btn btn-danger right">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>

            <div class="row" id="data_div">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo $course['course']; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" id="addBtn" class="btn btn-info"><i class="fa fa-plus"></i> Add Video</button><br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Preview</th>
                                    <th>Course</th>
                                    <th>Description</th>
                                    <th>Video</th>
                                    <th>Upload</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $cnt=1; foreach ($videos as $a) {?>
                                    <tr id="row<?php echo $a['id']; ?>">
                                        <td><?php echo $cnt++; ?></td>
                                        <td><img src="<?php echo base_url()."/".$a['thumb']; ?>" style="width: 100px;height: 100px;"></td>
                                        <td><?php echo $a['title']; ?></td>
                                        <td><?php echo $a['description']; ?></td>
                                        <td><a target="_blank" href="<?php echo base_url()."/".$a['video']; ?>">Watch</a> </td>
                                        <td>
                                            <a target="_blank" title="Different Video Qualities" href="<?= base_url()."/courses/quality/".$a['id']; ?>"><i class="fa fa-video"></i></a>&nbsp;&nbsp;
                                            <a target="_blank" title="Upload Resources" href="<?= base_url()."/courses/resources/".$a['id']; ?>"><i class="fa fa-upload"></i></a>&nbsp;&nbsp;
                                            <a target="_blank" title="Upload Subtitles" href="<?= base_url()."/courses/subtitles/".$a['id']; ?>"><i class="fa fa-language"></i></a>
                                        </td>
                                        <td>
                                            <a title="Modify Information" href="javascript:;" class="modify_data" data-id="<?php echo $a['id']; ?>"><i class="fa fa-pen"></i></a>&nbsp;
                                            <a title="Delete Video" href="javascript:;" class="remove_data" data-id="<?php echo $a['id']; ?>"><i class="fa fa-trash"></i></a>
                                        </td>
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
    <?php echo view('admin/pages/footer'); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php echo view('admin/pages/scripts'); ?>
<!-- jQuery -->
<script type="text/javascript">
    var root_path='<?php echo base_url(); ?>/';
    var base_path='<?php echo base_url(); ?>/courses/';
    $(document).ready(function () {
        <?php if(isset($_SESSION['inserted'])) { ?>
            toastr.success("Information added successfully");
        <?php unset($_SESSION['inserted']); } ?>
        <?php if(isset($_SESSION['updated'])) { ?>
            toastr.success("Information updated successfully");
        <?php unset($_SESSION['updated']); } ?>
       $('#addBtn').click(function () {
            $('#form1').prop('action',base_path + 'insert_video');
            $('#data_div').hide();
            $('#form_div').fadeIn();
       });
       $('#cancelBtn').click(function () {
            $('#form1').prop('action',base_path + 'insert_video');
            $('#form_div').hide();
            $('#data_div').fadeIn();
       });
       $('#example1').on('click','.remove_data',function () {
          var that=$(this);
          if(confirm('Are you sure to remove course??')){
              $.ajax({
                  type : 'post',
                  url : base_path + 'delete_video/' + that.data('id'),
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
        $('#example1').on('click','.modify_data',function () {
            var that=$(this);
            $.ajax({
                type : 'post',
                url : base_path + 'modify_video/' + that.data('id'),
                success : function (response) {
                    //toastr.info(response);
                    var info=JSON.parse(response);
                    $('#hid').val(info.id);
                    $('#title').val(info.title);
                    $('#description').val(info.description);
                    $('#video_div').prop('src',root_path + info.video).fadeIn();
                    $('#image_div').prop('src',root_path + info.thumb).fadeIn();
                    $('#form1').prop('action',base_path + 'update_video');
                    $('#data_div').hide();
                    $('#form_div').fadeIn();
                },
                error : function (response) {
                    toastr.error('Something went wrong please reload the page and try again.');
                }
            });
        });
    });
</script>
</body>
</html>
