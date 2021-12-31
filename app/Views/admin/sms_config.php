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
                        <h1>SMS Configurations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">SMS Configuration</li>
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
                            <h3 class="card-title">SMS Configurations</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?php echo base_url()."/configuration/save_sms"; ?>" role="form" method="post" enctype="multipart/form-data" id="form1">
                            <input type="hidden" name="id" id="hid">
                            <div class="card-body">
                                <h4>SMS Configuration</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_key">API Key</label>
                                            <input type="text" class="form-control" name="api_key" id="api_key" placeholder="API Key" required value="<?php echo $config['api_key']; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_secret_key">Sender ID</label>
                                            <input type="text" class="form-control" name="sender" id="sender" placeholder="Sender ID" required value="<?php echo $config['sender']; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_key">SMS Balance : <span id="sms_balance"></span></label>
                                        </div>
                                    </div>
                                </div>
                                <bR>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary right">Save Configurations</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>

            </div>
            <div class="row" id="form_div">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Test SMS</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="hid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_key">Mobile Number with Country Code</label>
                                            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="919898989898,919898989898">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_secret_key">Message</label>
                                            <textarea type="text" class="form-control" name="message" id="message" placeholder="Enter Test Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="stripe_secret_key">Response</label>
                                            <div id="responseText"></div>
                                        </div>
                                    </div>
                                </div>
                                <bR>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="button" id="send_message" class="btn btn-primary right">Send Message</button>
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
        get_balance();
       $('#send_message').click(function () {
           var that=$(this);
          var mobile=$('#mobile');
          var message=$('#message');
          if(mobile.val().trim()==''){
              toastr.error('Please enter mobile number');
              return false;
          }
          if(message.val().trim()==''){
              toastr.error('Enter some message');
              return false;
          }
          that.prop('disabled',true);
          that.html('<i class="fa fa-spinner fa-spin"></i>Please wait...');
          $.ajax({
              type : 'post',
              data : {
                  'mobile' : mobile.val(),
                  'message' : message.val()
              },
              url : '<?= base_url(); ?>/configuration/send_message',
              success : function(response){
                  that.prop('disabled',false);
                  that.html('Send Message');
                  $('#responseText').html(response);
                  get_balance();
              }
          });
       });
    });
    function get_balance() {
        $('#sms_balance').html('...loading');
        var urls='<?= base_url(); ?>/configuration/get_sms_balance';
        $.ajax({
            url : urls,
            success : function (response) {
                var info=JSON.parse(response);
                var sms=info.balance.sms;
               $('#sms_balance').html(sms);
            }

        });
    }
</script>

</body>
</html>
