<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Payment Configurations | My3Skills</title>
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
                        <h1>Payment Configurations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Payment Configuration</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row" id="form_div">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Payment Configurations</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url()."/configuration/save_payment"; ?>" role="form" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="id" id="hid">
                            <div class="card-body">
                                <h4>Stripe Payment Status</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_status">Stripe Status</label>
                                            <select type="text" class="form-control" name="stripe_status" id="stripe_status" required>
                                                <option value="y" <?php echo $config['stripe_status']=="y"?"selected":""; ?>>Active</option>
                                                <option value="n" <?php echo $config['stripe_status']=="n"?"selected":""; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_key">Stripe Key</label>
                                            <input type="text" class="form-control" name="stripe_key" id="stripe_key" placeholder="Stripe Key" required value="<?php echo $config['stripe_key']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_secret_key">Stripe Secret Key</label>
                                            <input type="text" class="form-control" name="stripe_secret_key" id="stripe_secret_key" placeholder="Stripe Secret Key" required value="<?php echo $config['stripe_secret_key']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <bR>
                                <h4>Razorpay Payment Status</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_status">Razorpay Status</label>
                                            <select type="text" class="form-control" name="razor_status" id="razor_status" required>
                                                <option value="y" <?php echo $config['razor_status']=="y"?"selected":""; ?>>Active</option>
                                                <option value="n" <?php echo $config['razor_status']=="n"?"selected":""; ?>>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_key">Razorpay KeyId</label>
                                            <input type="text" class="form-control" name="razor_key_id" id="razor_key_id" placeholder="Razorpay Key Id" required value="<?php echo $config['razor_key_id']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_secret_key">Razorpay Secret Key</label>
                                            <input type="text" class="form-control" name="razor_secret_key" id="razor_secret_key" placeholder="Razorpay Secret Key" required value="<?php echo $config['razor_secret_key']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <bR>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Save Configurations</button>
                                <button type="button" id="cancelBtn" class="btn btn-danger right">Cancel</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>

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
<script>
    var password=$('#password');
    <?php if(isset($_SESSION['inserted'])) { ?>
    toastr.success("Configurations saved successfully");
    <?php unset($_SESSION['inserted']); } ?>
    $(document).ready(function () {
       password.dblclick(function () {
           password.prop('type','text');
       });
       password.blur(function () {
          password.prop('type','password');
       });
    });
</script>

</body>
</html>
