<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $title; ?> | My3Skills </title>
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
                        <h1><?php echo $title; ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
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
                            <h3 class="card-title">Manage Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="id" id="hid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category">Select Category</label>
                                            <select name="category" id="category" class="form-control" required>
                                                <option value="">Select Category</option>
                                                <?php foreach ($category  as $c) { ?>
                                                <option value="<?= $c['id']; ?>"><?= $c['category']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="subcategory">Select Subcategory</label>
                                            <select name="subcategory" id="subcategory" class="form-control" required>
                                               <option value="">Select Subcategory</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="topic">Select Child Category</label>
                                            <select name="topic" id="topic" class="form-control" required>
                                               <option value="">Select Child Category</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="category">Select Language</label>
                                            <select name="language" id="language" class="form-control" required>
                                                <option value="">Select Language</option>
                                                <?php foreach ($language  as $c) { ?>
                                                <option value="<?= $c['id']; ?>"><?= $c['title']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Course Title</label>
                                            <input type="text" class="form-control" name="title" id="title" placeholder="Course Title" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Course Slug</label>
                                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Course Slug" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Short Details</label>
                                            <textarea class="form-control" name="short" id="short" placeholder="Short Details of the Course" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Requirements</label>
                                            <textarea class="form-control" name="requirements" id="requirements" placeholder="Requirements of the Course" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Description of the Course</label>
                                            <textarea class="form-control" name="long" id="long" placeholder="Description of the Course" rows="5"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Course Includes</label>
                                            <textarea class="form-control" name="includes" id="includes" placeholder="This Course Includes" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="mobile">What will you learn?</label>
                                            <textarea class="form-control" name="what_learn" id="what_learn" placeholder="What will you learn?" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <label for="isFree">Free</label><bR>
                                                <input type="checkbox" name="isFree" id="isFree">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 prices">
                                        <div class="form-group">
                                            <label for="name">Course Price</label>
                                            <input type="number" class="form-control" name="amt" id="amt" placeholder="Course Price">
                                        </div>
                                    </div>
                                    <div class="col-md-4 prices">
                                        <div class="form-group">
                                            <label for="name">Discounted Price</label>
                                            <input type="number" class="form-control" name="price" id="price" placeholder="Discounted Price">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Preview Video<span class="asteriskField">*</span></label>
                                            <input type="file" class="form-control" name="preview" id="preview">
                                            <br>
                                            <video type="video/mp4" src="" id="video_div" style="display: none;height: 150px;width: 300px;" controls></video>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Preview Image<span class="asteriskField">*</span></label>
                                            <input type="file" class="form-control" name="image" id="image">
                                            <bR>
                                            <img src="" style="display: none;height: 150px;width: 300px;" id="image_div">
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Save Course</button>
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
                            <h3 class="card-title"><?php echo $title; ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" id="addBtn" class="btn btn-info"><i class="fa fa-plus"></i> Add Course</button>
                            <button type="button" id="deleteSelectedButton" class="btn btn-warning" style="display: none;"><i class="fa fa-times"></i> Remove Selected</button><br><bR>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll"></th>
                                    <th>Sr.No</th>
                                    <th>Preview</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $cnt=1; foreach ($course as $a) {?>
                                    <tr id="row<?php echo $a['id']; ?>">
                                        <td><input type="checkbox" class="delete_check" data-id="<?= $a['id']; ?>"></td>
                                        <td><?php echo $cnt++; ?></td>
                                        <td><img src="<?php echo base_url()."/".$a['image']; ?>" style="width: 100px;height: 100px;"></td>
                                        <td><?php echo $a['course']; ?></td>
                                        <td><?php echo $a['inserted_by']==0?"Admin":$teacher[$a['id']][0]['name']; ?></td>
                                        <td>
                                            Discounted Price : <?php echo $a['price']; ?><br>
                                            List Price : <?php echo $a['old_amt']; ?><br>
                                        </td>
                                        <td id="status<?php echo $a['id']; ?>">
                                            <a href="javascript:;" class="status_change" data-status="<?php echo $a['status']=="y"?"n":"y"; ?>" data-id="<?php echo $a['id']; ?>"><span class="label label-<?php echo $a['status']=='y'?"success":"danger"; ?>"><?php echo $a['status']=='y'?"<i class='fa fa-check'></i> Shown":"<i class='fa fa-ban'></i>  Hidden"; ?></span></a>
                                        </td>
                                        <td>
                                            <a target="_blank" title="Upload Videos" href="<?php echo base_url()."/courses/videos/".$a['id']; ?>"><i class="fa fa-upload fa-2x"></i></a>
                                            <a title="Modify Information" href="javascript:;" class="modify_data" data-id="<?php echo $a['id']; ?>"><i class="fa fa-pen"></i></a>
                                            <a title="Delete Course" href="javascript:;" class="remove_data" data-id="<?php echo $a['id']; ?>"><i class="fa fa-trash"></i></a>
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- jQuery -->
<script type="text/javascript">
    var subcategory='',topic='';
    var root_path='<?php echo base_url(); ?>/';
    var base_path='<?php echo base_url(); ?>/courses/';
    $(document).ready(function () {
        CKEDITOR.replace('long');
        CKEDITOR.replace('what_learn');
        CKEDITOR.replace('requirements');
        CKEDITOR.replace('includes');
        <?php if(isset($_SESSION['inserted'])) { ?>
            toastr.success("Information added successfully");
        <?php unset($_SESSION['inserted']); } ?>
        <?php if(isset($_SESSION['updated'])) { ?>
            toastr.success("Information updated successfully");
        <?php unset($_SESSION['updated']); } ?>
       $('#addBtn').click(function () {
            $('#form1').prop('action',base_path + 'insert');
            $('#data_div').hide();
            $('#form_div').fadeIn();
       });
        $('#isFree').on('click', function () {
            var state=$(this).prop('checked');
            if(state){
                $('#price').val(0);
                $('.prices').fadeOut();
            }
            else{
                $('.prices').fadeIn();
            }
        });
        $('#cancelBtn').click(function () {
            $('#form1').prop('action',base_path + 'insert');
            $('#form_div').hide();
            $('#data_div').fadeIn();
       });
        $('#title').keyup(function () {
            var that=$(this);
            $('#slug').val(convertToSlug(that.val()));
        });
       $('#category').change(function () {
          var that=$(this);
          if(that.val()!=''){
              $.ajax({
                  type  : 'post',
                  url : base_path + 'get_subcategory/'+that.val(),
                  success : function (response) {
                      $('#subcategory').html(response);
                      if(subcategory!=''){
                          $('#subcategory').val(subcategory);
                          $('#subcategory').change();
                      }
                  }
              });
          }
       });
        $('#example1').on('click','.status_change',function () {
            var id=$(this).data('id');
            var status=$(this).data('status');
            var conf=true;
            if(status=='y')
            {
                var conf=confirm('Are you sure to make live this course have you uploaded all videos??');
            }
            if(conf){
                $.ajax({
                    type : 'post',
                    data : {
                        'id' : id,
                        'status' : status
                    },
                    url : base_path + 'status_change',
                    success : function (response) {
                        if(response=='yes'){
                            if(status=='y')
                                $('#status'+id).html('<a href="javascript:;" class="status_change" data-status="n" data-id="'+id+'"><span class="label label-success"><i class="fa fa-check"></i> Shown</span></a>');
                            else
                                $('#status'+id).html('<a href="javascript:;" class="status_change" data-status="y" data-id="'+id+'"><span class="label label-danger"><i class="fa fa-ban"></i> Hidden</span></a>');
                        }
                        successNotification("Status Changed Successfully");
                    },
                    error : function () {
                        errorAlert('Something went wrong please try again..');
                    }
                });
            }
        });
        $('#example1').on('click','.featured_change',function () {
            var id=$(this).data('id');
            var status=$(this).data('status');
            var conf=true;
            if(status=='y')
            {
                conf=confirm('Are you sure to make this course featured??');
            }
            if(conf){
                $.ajax({
                    type : 'post',
                    data : {
                        'id' : id,
                        'status' : status
                    },
                    url : base_path + 'featured_course',
                    success : function (response) {
                        if(response=='yes'){
                            if(status=='y')
                                $('#featured'+id).html('<a href="javascript:;" class="featured_change" data-status="n" data-id="'+id+'"><span class="label label-success"><i class="fa fa-check"></i> Shown</span></a>');
                            else
                                $('#featured'+id).html('<a href="javascript:;" class="featured_change" data-status="y" data-id="'+id+'"><span class="label label-danger"><i class="fa fa-ban"></i> Hidden</span></a>');
                        }
                        successNotification("Status Changed Successfully");
                    },
                    error : function () {
                        errorAlert('Something went wrong please try again..');
                    }
                });
            }
        });
        $('#example1').on('click','.modify_data',function () {
            var that=$(this);
            $.ajax({
                type : 'post',
                url : base_path + 'modify/' + that.data('id'),
                success : function (response) {
                    //toastr.info(response);
                    var info=JSON.parse(response);
                    subcategory=info.subcategory_id;
                    topic=info.topic_id;
                    $('#hid').val(info.id);
                    $('#category').val(info.category_id);
                    $('#category').change();
                    $('#language').val(info.language_id);
                    $('#title').val(info.course);
                    $('#language').val(info.language_id);
                    $('#slug').val(info.slug);
                    $('#short').val(info.short);
                    CKEDITOR.instances.long.setData(info.long);
                    CKEDITOR.instances.requirements.setData(info.requirement);
                    CKEDITOR.instances.includes.setData(info.includes);
                    CKEDITOR.instances.what_learn.setData(info.what_learn);
                    $('#price').val(info.price);
                    $('#language').val(info.language_id);
                    $('#amt').val(info.old_amt);
                    if(parseInt(info.price)==0){
                        $('#isFree').prop('checked',true);
                        $('#price').val(0);
                        $('.prices').fadeOut();
                    }
                    $('#video_div').prop('src',root_path + info.preview).fadeIn();
                    $('#image_div').prop('src',root_path + info.image).fadeIn();
                    $('#form1').prop('action',base_path + 'update');
                    $('#data_div').hide();
                    $('#form_div').fadeIn();
                },
                error : function (response) {
                    toastr.error('Something went wrong please reload the page and try again.');
                }
            });
        });
       $('#subcategory').change(function () {
          var that=$(this);
          if(that.val()!=''){
              $.ajax({
                  type  : 'post',
                  url : base_path + 'get_topic/'+that.val(),
                  success : function (response) {
                      $('#topic').html(response);
                      if(topic!=''){
                          $('#topic').val(topic);
                      }
                  }
              });
          }
       });
       $('#example1').on('click','.remove_data',function () {
          var that=$(this);
          if(confirm('Are you sure to remove course??')){
              $.ajax({
                  type : 'post',
                  url : base_path + 'delete/' + that.data('id'),
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
    function convertToSlug(Text)
    {
        return Text
            .toLowerCase()
            .replace(/[^\w ]+/g,'')
            .replace(/ +/g,'-')
            ;
    }
</script>
</body>
</html>
