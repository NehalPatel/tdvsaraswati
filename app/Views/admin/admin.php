<?php
$title= new \Config\App();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Manage Admin | <?= $title->appTitle; ?></title>
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
                        <h1>Admin Management</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Admin</li>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Admin Name</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter Admin Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Contact Number</label>
                                            <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Contact Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Choose Password</label>
                                            <input type="text" class="form-control" name="password" id="password" placeholder="Choose Password for Admin">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="image">Choose Image</label>
                                            <input type="file" class="form-control" name="image" id="image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="type">Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="admin">Administrator</option>
                                                <option value="user">Admin User</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="y">Allowed</option>
                                                <option value="n">Blocked</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Save Admin</button>
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
                            <h3 class="card-title">Manage Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button type="button" id="addBtn" class="btn btn-info"><i class="fa fa-plus"></i> Add Admin</button><br><br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Image</th>
                                    <th>Details</th>
                                    <th>Password</th>
                                    <th>Status</th>
                                    <th>Rights</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $cnt=1; foreach ($admin as $a) {?>
                                    <tr id="row<?php echo $a['id']; ?>">
                                        <td><?php echo $cnt++; ?></td>
                                        <td><img src="<?php echo $a['image']; ?>" style="width: 100px;height: 100px;"></td>
                                        <td>
                                            Name : <?php echo $a['name']; ?><br>
                                            Mobile : <?php echo $a['mobile']; ?><br>
                                            Type : <?php echo $a['type']=="admin"?"Administrator":"Admin User"; ?><br>
                                            Email : <?php echo $a['email']; ?><br>
                                        </td>
                                        <td><?php echo $a['password']; ?></td>
                                        <td id="status<?php echo $a['id']; ?>">
                                            <a href="javascript:;" class="status_change" data-status="<?php echo $a['status']=="y"?"n":"y"; ?>" data-id="<?php echo $a['id']; ?>"><span class="label label-<?php echo $a['status']=='y'?"success":"danger"; ?>"><?php echo $a['status']=='y'?"<i class='fa fa-check'></i> Shown":"<i class='fa fa-ban'></i>  Hidden"; ?></span></a>
                                        </td>
                                        <td>
                                            <?php if($a['type']=="user") { ?>
                                                <a href="javascript:;" class="change_rights" data-id="<?php echo $a['id']; ?>"><i class="fa fa-eye"></i></a>
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <a title="Modify Information" href="javascript:;" class="modify_data" data-id="<?php echo $a['id']; ?>"><i class="fa fa-pen"></i></a>
                                            <a title="Delete Admin" href="javascript:;" class="remove_data" data-id="<?php echo $a['id']; ?>"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Change Rights</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <input type="checkbox" id="ins"> Insert Permission
                    </div>
                    <div class="col-md-4 text-center">
                        <input type="checkbox" id="del"> Delete Permission
                    </div>
                    <div class="col-md-4 text-center">
                        <input type="checkbox" id="modi"> Modify Permission
                    </div>
                </div>
                <br>
                <br>
                <?php foreach ($master as $m) { ?>
                    <input type="button" id="rights<?php echo $m['id']; ?>" data-id="<?php echo $m['id']; ?>" data-color="red" class="btn btn-danger all_rights" value="<?php echo $m['title']; ?>" style="margin: 5px;">
                <?php } ?>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="save_rights_btn" class="btn btn-primary waves-effect waves-light">Save Rights</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- ./wrapper -->
<?php echo view('admin/pages/scripts'); ?>
<!-- jQuery -->
<script type="text/javascript">
    var base_path='<?php echo base_url(); ?>/admin/';
    $(document).ready(function () {
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
       $('#cancelBtn').click(function () {
            $('#form1').prop('action',base_path + 'insert');
            $('#form_div').hide();
            $('#data_div').fadeIn();
       });
        $('.all_rights').click(function () {
            var that=$(this);
            if(that.data('color')=='white')
            {
                that.data('color','red');
                that.removeClass('btn-success');
                that.addClass('btn-danger');
            }
            else{
                that.data('color','white');
                that.removeClass('btn-danger');
                that.addClass('btn-success');
            }
        });
       $('#example1').on('click','.remove_data',function () {
          var that=$(this);
          if(confirm('Are you sure to remove data??')){
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
        $('#save_rights_btn').click(function () {
            var rights=Array();
            $('.all_rights').each(function () {
                var that=$(this);
                if(that.data('color')=='white')
                    rights.push(that.data('id'));
            });
            var ins,del,modi;
            ins=$('#ins').prop('checked')?'y':'n';
            del=$('#del').prop('checked')?'y':'n';
            modi=$('#modi').prop('checked')?'y':'n';
            $.ajax({
                type : 'post',
                data : {
                    'admin' : admin_id,
                    'ins' : ins,
                    'del' : ins,
                    'modi' : modi,
                    'rights' : rights
                },
                url : base_path + 'save_rights',
                success : function (response) {
                    successAlert('Admin Rights saved Successfully');
                    $('#modal-default').modal('hide');
                },
                error : function () {
                    errorAlert('Something went wrong please try again..');
                }
            });
        });
        $('#example1').on('click','.modify_data',function () {
          var that=$(this);
          $.ajax({
              type : 'post',
              url : base_path + 'modify/' + that.data('id'),
              success : function (response) {
                  //toastr.info(response);
                  var info=JSON.parse(response);
                  $('#hid').val(info.id);
                  $('#name').val(info.name);
                  $('#type').val(info.type);
                  $('#mobile').val(info.mobile);
                  $('#email').val(info.email);
                  $('#password').val(info.password);
                  $('#status').val(info.status);
                  $('#form1').prop('action',base_path + 'update');
                  $('#data_div').hide();
                  $('#form_div').fadeIn();
              },
              error : function (response) {
                  toastr.error('Something went wrong please reload the page and try again.');
              }
          });
        });
        $('#example1').on('click','.change_rights',function () {
            $('.all_rights').removeClass('btn-success');
            $('.all_rights').addClass('btn-danger');
            admin_id=$(this).data('id');
            $.ajax({
                type : 'post',
                url : base_path + 'get_admin_rights/' + admin_id,
                success : function (response) {
                    var info=JSON.parse(response);
                    if(info.ins=='y')
                        $('#ins').prop('checked',true);
                    else
                        $('#ins').prop('checked',false);
                    if(info.del=='y')
                        $('#del').prop('checked',true);
                    else
                        $('#del').prop('checked',false);
                    if(info.modi=='y')
                        $('#modi').prop('checked',true);
                    else
                        $('#modi').prop('checked',false);

                    var ids=info.rights.split('^');
                    for(var i=0;i<ids.length;i++){
                        $('#rights'+ids[i]).data('color','white');
                        $('#rights'+ids[i]).removeClass('btn-danger');
                        $('#rights'+ids[i]).addClass('btn-success');
                        $('#modal-default').modal('show');

                    }
                },
                error : function () {
                    errorAlert('Something went wrong please try again later.');
                }
            });
        });
        $('#example1').on('click','.status_change',function () {
            var id=$(this).data('id');
            var status=$(this).data('status');
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
        });
    });
</script>
</body>
</html>
