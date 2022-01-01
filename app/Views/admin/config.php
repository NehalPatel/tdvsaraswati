<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Manage Configurations | My3Skills</title>
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
                        <h1>Configurations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Configurations</li>
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
                            <h3 class="card-title">Manage Configurations</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url()."/configuration/insert"; ?>" role="form" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="id" id="hid">
                            <div class="card-body">
                                <bR>
                                <h4>Website Configurations</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="title">Project Title</label>
                                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $config[0]['title']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Choose Logo</label>
                                            <input type="file" class="form-control" name="logo" placeholder="2">
                                            <img src="<?php echo base_url()."/".$config[0]['logo']; ?>" style="height: 75px;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="contact">Contact Number</label>
                                            <input type="text" class="form-control" name="contact" id="contact" value="<?php echo $config[0]['contact']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $config[0]['email']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="copyright">Copyright Text</label>
                                            <input type="text" class="form-control" name="copyright" id="copyright" placeholder="&copy; 2020 ABC" value="<?php echo $config[0]['copyright']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <textarea type="text" class="form-control" name="address" id="address"><?php echo $config[0]['address']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Choose Fav Icon</label>
                                            <input type="file" class="form-control" name="fav" placeholder="2">
                                            <img src="<?php echo base_url()."/".$config[0]['favicon']; ?>" style="height: 25px;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Choose Footer Logo</label>
                                            <input type="file" class="form-control" name="footer_logo" placeholder="2">
                                            <img src="<?php echo base_url()."/".$config[0]['footer_logo']; ?>" style="height: 25px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Choose Principal Image</label>
                                            <input type="file" class="form-control" name="principal_image" placeholder="2" accept="image/*">
                                            <img src="<?php echo base_url()."/".$config[0]['principal_image']; ?>" style="height: 25px;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Principal Name</label>
                                            <input type="text" class="form-control" name="principal_name" placeholder="Enter Pricipal Name" value="<?php echo $config[0]['principal_name']; ?>">
                                        </div>
                                    </div><div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Principal Education</label>
                                            <input type="text" class="form-control" name="principal_education" placeholder="BCA,Bcom" value="<?php echo $config[0]['principal_education']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Principal Message</label>
                                            <textarea class="form-control" name="principal_msg"><?php echo $config[0]['principal_msg']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="watch">Choose About Image</label>
                                            <input type="file" class="form-control" name="about_image">
                                            <img src="<?php echo base_url()."/".$config[0]['about_image']; ?>" style="height: 25px;">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="watch">Trust Details</label>
                                            <textarea class="form-control" name="trust" placeholder="Enter Trust Details"><?php echo $config[0]['trust']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="about">Infrastructure Details</label>
                                            <textarea class="form-control" name="infrastructure" id="infrastructure"><?php echo $config[0]['infrastructure']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h4>SEO Configurations</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="keywords">Meta Keywords</label>
                                            <textarea class="form-control" name="keywords" id="keywords"><?php echo $config[0]['meta_keywords']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="description">Meta Description</label>
                                            <textarea class="form-control" name="description" id="description"><?php echo $config[0]['meta_description']; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<!-- jQuery -->
<script>
    var password=$('#password');
    <?php if(isset($_SESSION['inserted'])) { ?>
    toastr.success("Configurations saved successfully");
    <?php unset($_SESSION['inserted']); } ?>
    $(document).ready(function () {
        CKEDITOR.replace('infrastructure');
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
