<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: Manage Course ::</title>
    <link href="<?php echo base_url(); ?>/assets/teacher/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/teacher/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/quill.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/quill.snow.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/quill.bubble.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/teacher/css/style.css">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/jquery-3.2.1.js"></script>

     <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">


</head>
<style type="text/css">
    #msform fieldset {
    background: none;
    }
</style>

<body>
     <div class="text-center topbar">
        <strong>Welcome ! Dont't forget to join Studio U -</strong> the best place to ask questions and learn from other
        instructors
    </div>
     <div class="icon-bar">
        <a href="<?php echo base_url(); ?>/teacherzone/course_list" class="active-a"><i class="fa fa-list-alt "></i></a>
        <a href="#"><i class="fa fa-bar-chart"></i></a>
        <a href="#"><i class="fa fa-wrench"></i></a>
        <a href="#"><i class="fa fa-question-circle-o"></i></a>
     </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 p-0 text-center">
                <div class="card px-0">
                    <form id="msform" role="form" method="post" action="" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-card">
                            <h2 class="mt-4 step-titles">Subtitle Add</h2>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="course-detil">
                                <label class="label-title">Title</label>
                                   <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                   <input type="hidden" class="form-control" name="video_id" id="video_id" placeholder="Title" value="<?php if(isset($_GET['video_id'])){ echo $_GET['video_id']; }?>">
                                </div>
                                <div class="course-detil">
                                <label class="label-title">Subtitle File</label>
                                <input type="file" class="form-control" name="sub_file" id="sub_file" >   
                                </div>
                               
                                    </div>
                                   
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                              <!--   <input type="submit" style="float: left;" name="save" class="next action-button" value="Save" /> -->
                                 <button type="button" id="addBtn" class="next action-button" style="float: left;">Save</button>
                                </div>
                                </div>
                            </div>
                        </fieldset>
             </form>
<!-- <fieldset style="margin-top: -120px;"> -->
 

<!-- </fieldset> -->
</div>


</div>

</div>
</div>

<div class="main-content" style="margin-top: -270px;">
<div class="content-wrapper">
<div class="col-lg-12">
    <table class="table table-bordered table-striped" id="example1">
<thead>
    <tr>
        <th>Sr No.</th>
        <th>Title</th>
        <th>Subtitle File</th>
        <th>Status</th>
 </tr>
 </thead>
     <tbody>
       <?php $cnt=1; foreach ($subtitle as $s) {?>
       <tr id="row<?php echo $s['id']; ?>">
        <td><?php echo $cnt++; ?></td>
        <td><?php echo $s['title']; ?></td>
        <td><a href="<?php echo base_url($s['file']); ?>"><u>Download</u></a></td>
        <td id="status<?php echo $s['id']; ?>">
        <a href="javascript:;" class="status_change" data-status="<?php echo $s['status']=="y"?"n":"y"; ?>" data-id="<?php echo $s['id']; ?>"><span class="label label-<?php echo $s['status']=='y'?"success":"danger"; ?>"><?php echo $s['status']=='y'?"<i class='fa fa-check'></i> Shown":"<i class='fa fa-ban'></i>  Hidden"; ?></span>
        </a>
        </td>
        </tr>
        <?php } ?>
     </tbody>
 </table>
</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap-quill.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/sprite.svg.js"></script>

<!-- Datatable -->
<script src="<?php echo base_url(); ?>/assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- Datatable -->
<script type="text/javascript">
var base_path='<?php echo base_url(); ?>/teacherzone/';
  $('#addBtn').click(function ()
   {
        myfile=$('#sub_file').val();
        var ext = myfile.split('.').pop();
            //var extension = myfile.substr( (myfile.lastIndexOf('.') +1) );
            if(ext=="vtt" || myfile=="")
            {
                $('#msform').prop('action',base_path + 'video_subtitle');
                $('#msform').submit();
            }
            else
            {
                alert('Not Accept ' + ext + ' File');
            }
       });


     $(function () {
        $("#example1").DataTable();
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
                url : base_path + 'status_change_subtitle',
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

</script>


</body>
</html>