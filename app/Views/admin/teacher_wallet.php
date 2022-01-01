<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Manage Teachers | My3Skills </title>
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
                        <h1>Teacher Wallet</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Teacher Transactions</li>
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
                            <h3 class="card-title">Add Money to Wallet</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data" id="form1" action="<?= base_url().'/dashboard/add_money_teacher'; ?>">
                            <input type="hidden" name="id" id="hid" value="<?= $teacher_id; ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Amount to Add</label>
                                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Add Amount</button>
                                <button type="button" id="cancelBtn" class="btn btn-danger right">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row" id="remove_div" style="display: none;">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Deduct Money from Wallet</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data" id="form1" action="<?= base_url().'/dashboard/less_money_teacher'; ?>">
                            <input type="hidden" name="id" id="hid" value="<?= $teacher_id; ?>">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Amount to Reduce</label>
                                            <input type="number" class="form-control" name="amount" id="amount" placeholder="Enter Amount" max="<?= $teacher[0]['balance']; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Deduct Amount</button>
                                <button type="button" id="cancelBtn1" class="btn btn-danger right">Cancel</button>
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
                            <h3 class="card-title">Wallet Transactions</h3>
                        </div>
                        <div class="col-6" style="padding-left: 1%">
                            <br>
                            <b>Teacher Name : </b> <?= $teacher[0]['name']; ?><br>
                            <b> Balance : </b> <?= $teacher[0]['balance']; ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <button id="addMoneyButton" class="btn btn-primary"><i class="fa fa-plus"></i> Add Amount</button>
                            <button id="reduceMoneyButton" class="btn btn-primary"><i class="fa fa-minus"></i> Deduct Amount</button>
                            <bR>
                            <bR>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Spec.</th>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $cnt=1; foreach ($trans as $a) {?>
                                    <tr id="row<?php echo $a['id']; ?>">
                                        <td><?php echo $cnt++; ?></td>
                                        <td><?php echo $a['payment_no']; ?></td>
                                        <td><?php echo $a['type']=="c"?"Deposited":"Withdrawn"; ?></td>
                                        <td style="color: <?= $a['type']=="c"?"green":"red"; ?>"> <?php echo $a['type']=="c"?"+":"-"; echo " ".$a['amount']; ?></td>
                                        <td><?php echo date('d M Y',strtotime($a['trans_date'])); ?></td>
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
    var base_path='<?php echo base_url(); ?>/dashboard/';
    $(document).ready(function () {
        <?php if(isset($_SESSION['inserted'])) { ?>
            toastr.success("Information added successfully");
        <?php unset($_SESSION['inserted']); } ?>
        <?php if(isset($_SESSION['updated'])) { ?>
            toastr.success("Information updated successfully");
        <?php unset($_SESSION['updated']); } ?>
       $('#addMoneyButton').click(function () {
            $('#data_div').hide();
            $('#form_div').fadeIn();
       });
       $('#reduceMoneyButton').click(function () {
            $('#data_div').hide();
            $('#remove_div').fadeIn();
       });
       $('#cancelBtn').click(function () {
            $('#form1').prop('action',base_path + 'insert');
            $('#form_div').hide();
            $('#data_div').fadeIn();
       });
        $('#cancelBtn1').click(function () {
            $('#remove_div').hide();
            $('#data_div').fadeIn();
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
        $('#example1').on('click','.status_change',function () {
            var id=$(this).data('id');
            var status=$(this).data('status');
            if(status=='y'){
                if(confirm('Are you sure to Approve this teacher??')){
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
                                    $('#status'+id).html('<a href="javascript:;" class="status_change" data-status="n" data-id="'+id+'"><span class="label label-success"><i class="fa fa-check"></i> Approved </span></a>');
                                else
                                    $('#status'+id).html('<a href="javascript:;" class="status_change" data-status="y" data-id="'+id+'"><span class="label label-danger"><i class="fa fa-ban"></i> Pending Approval</span></a>');
                            }
                            successNotification("Teacher Approved Successfully");
                        },
                        error : function () {
                            errorAlert('Something went wrong please try again..');
                        }
                    });
                }
            }
        });
    });
</script>
</body>
</html>
