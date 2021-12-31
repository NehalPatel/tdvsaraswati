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
                    <form id="msform" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <div class="form-card">
                            <h2 class="mt-4 step-titles">Course Video Add</h2>
                           <div class="row">
                            <div class="col-md-6">
                                <div class="course-detil">
                                <label class="label-title">Video Title</label>
                                   <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                                </div>
                                <div class="course-detil">
                                <label class="label-title">Thumbnail</label>
                                <input type="file" class="form-control" name="thumb" id="thumb">   
                                </div>
                                <div class="course-detil">
                                <label class="label-title">Course Video</label>
                                <input type="file" class="form-control" name="video" id="video">   
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                       <!--  <label class="label-title">Course Long descrition</label> -->
                                        <!-- <div class="editor-full">
                                          <div id="document-full" name="long_desc" class="ql-scroll-y" style="height: 300px;">
                                           
                                          </div>
                                        </div> -->

                                    <label class="label-title">Course Description</label>
                                    <textarea id="long_desc" name="long_desc" rows="9" class="form-control" placeholder="Write Course Description...."></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-6">
                                <input type="submit" style="float: left;" name="save" class="next action-button" value="Save" />
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

<div class="main-content" style="margin-top: -190px;">
<div class="content-wrapper">
<div class="col-lg-12">
    <table class="table table-bordered table-striped" id="example1">
<thead>
    <tr>
        <th>Sr No.</th>
        <th>Thumbnail</th>
        <th>Video Title</th>
        <th>Description</th>
        <th>Status</th>
        <th>Action</th>
 </tr>
 </thead>
     <tbody>
       <?php $cnt=1; foreach ($video as $v) {?>
       <tr id="row<?php echo $v['id']; ?>">
        <td><?php echo $cnt++; ?></td>
        <td><img src="<?php echo base_url($v['thumb']); ?>" style="width: 100px;height: 100px;"></td>
        <td><?php echo $v['title']; ?></td>
        <td><?php echo $v['description']; ?></td>
        <td id="status<?php echo $v['id']; ?>">
        <a href="javascript:;" class="status_change" data-status="<?php echo $v['status']=="y"?"n":"y"; ?>" data-id="<?php echo $v['id']; ?>"><span class="label label-<?php echo $v['status']=='y'?"success":"danger"; ?>"><?php echo $v['status']=='y'?"<i class='fa fa-check'></i> Shown":"<i class='fa fa-ban'></i>  Hidden"; ?></span>
        </a>
        </td>
        <td>
       <a title="Course Resource Add" href="javascript:;" class="resource_add" data-id="<?php echo $v['id']; ?>"><i class="fa fa-refresh"></i></a>&emsp;
       <a title="Add Subtitle" href="javascript:;" class="subtitle_add" data-id="<?php echo $v['id']; ?>"><i class="fa fa-paper-plane"></i></a>
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
                url : base_path + 'status_change_video',
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

      $('#example1').on('click','.resource_add',function () 
      {
            var id=$(this).data('id'); 
            window.open('<?php echo base_url(); ?>/teacherzone/course_resource?video_id='+id, '_blank');
    });

       $('#example1').on('click','.subtitle_add',function () 
      {
            var id=$(this).data('id'); 
            window.open('<?php echo base_url(); ?>/teacherzone/video_subtitle?video_id='+id, '_blank');
    });

</script>


</body>
</html>