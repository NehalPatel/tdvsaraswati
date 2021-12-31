<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="<?php echo base_url(); ?>/assets/teacher/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/teacher/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/quill.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/quill.snow.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/quill.bubble.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/style.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">

   


</head>
<body>
<div class="text-center topbar">
    <strong>Welcome ! Dont't forget to join Studio U -</strong> the best place to ask questions and learn from other
    instructors
</div>
<div class="icon-bar">
     <a  href="<?php echo base_url(); ?>/teacherzone/course"><i class="fa fa-address-card"></i></a>
        <a href="<?php echo base_url(); ?>/teacherzone/course_list" class="active-a"><i class="fa fa-list-alt "></i></a>
        <a href="#"><i class="fa fa-bar-chart"></i></a>
        <a href="#"><i class="fa fa-wrench"></i></a>
        <a href="#"><i class="fa fa-question-circle-o"></i></a>
</div>
<div class="main-content">
<div class="content-wrapper">
<div class="col-lg-12">
<?php if(isset($_SESSION['inserted'])) { ?>
<div class='alert alert-success text-left'><button class="close" data-dismiss="alert"></button><?php echo $_SESSION['message']; ?></div>
<?php unset($_SESSION['inserted']); } ?>
<?php if(isset($_SESSION['updated'])) { ?>
<div class='alert alert-success text-left'><button class="close" data-dismiss="alert"></button><?php echo $_SESSION['message']; ?></div>
<?php } ?>
 <table class="table table-bordered table-striped" id="example1">
<thead>
    <tr>
        <th>Sr No.</th>
        <th>Course Title</th>
        <th>Day To Complete</th>
        <th>Price</th>
        <th>Status</th>
        <th>Action</th>
 </tr>
 </thead>
     <tbody>
        <?php $cnt=1; foreach ($course as $c) {?>
        <tr id="row<?php echo $c['id']; ?>">
        <td><?php echo $cnt++; ?></td>
        <td><?php echo $c['course']; ?></td>
        <td><?php echo $c['day_to_complete']; ?></td>
        <td><?php echo $c['price']; ?></td>
        <td id="status<?php echo $c['id']; ?>">
            <a href="javascript:;" class="status_change" data-status="<?php echo $c['status']=="y"?"n":"y"; ?>" data-id="<?php echo $c['id']; ?>"><span class="label label-<?php echo $c['status']=='y'?"success":"danger"; ?>"><?php echo $c['status']=='y'?"<i class='fa fa-check'></i> Shown":"<i class='fa fa-ban'></i>  Hidden"; ?></span></a>
        </td>
        <td>
           <!--  <a title="Modify Information" href="javascript:;" class="modify_data" data-id="<?php echo $c['id']; ?>"><i class="fa fa-pen"></i></a> -->
           <!--  <a title="Delete Admin" href="javascript:;" class="remove_data" data-id="<?php echo $c['id']; ?>"><i class="fa fa-trash"></i></a> -->
             <a title="Course Video Add" href="javascript:;" class="video_add" data-id="<?php echo $c['id']; ?>"><i class="fa fa-video-camera"></i></a>
        </td>
        </tr>
        <?php } ?>
     </tbody>
 </table>
    </div>
</div>
</div>

<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>


<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap-quill.js"></script>

<!-- Datatable -->
<script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Datatable -->

<!-- <script type="text/javascript" src="j<?php echo base_url(); ?>/assets/teacher/s/sprite.svg.js"></script> -->

 <!-- <script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/jquery-3.2.1.js"></script> -->

 <!-- DataTables -->

<script>
    $(function () {
        $("#example1").DataTable();
    });
     var base_path='<?php echo base_url(); ?>/teacherzone/';
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

      $('#example1').on('click','.video_add',function () 
      {
            var id=$(this).data('id'); 
            window.open('<?php echo base_url(); ?>/teacherzone/course_video?course_id='+id, '_blank');
    });
</script>
</body>
</html>