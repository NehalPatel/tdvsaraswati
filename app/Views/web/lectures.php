<?php echo view('web/header'); ?>

    <section class="lectures ptb80">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <?php
                    if (count($my_course) > 0)
                    {
                        // echo "<pre>"; print_r($my_course);die;
                    ?>
                        <div class="lecture_videos">
                        <div class="embed-responsive embed-responsive-16by9">
                        
                        <iframe src="<?php echo base_url(); ?>/<?php echo $my_course[0]['video']; ?>"></iframe>
                        </div>
                    </div>
                   
                   
                    <div class="lecture_overview">
                        <h2 class="discover_title">About this course</h2>
                        <p><?php echo $my_course[0]['long']; ?></p>
                    </div>
                     <?php
                     } 
                     else
                     {
                     ?>
                      <div class='alert alert-danger text-left'><button class="close" data-dismiss="alert"></button>Sorry Not Video Found Yet..</div>
                     <?php  
                     }
                     ?>
                </div>
                <div class="col-md-4">
                    <div class="course_content_list">
                        <div class="course_content">
                        <h2 class="discover_title">Course content</h2>
                    </div>
                     <div class="course_content_count scrollbar" id="style-1">
                    <?php
                    $no=0;
                    $cn=0;
                    foreach ($my_course_list as $mc)
                    {
                        $no++;
                       if ($no >= 1)
                       {
                        $cn++;
                        ?>

                         <a href="<?php echo base_url(); ?>/web/course_video?course_id=<?php echo $mc['course_id']; ?>&video_id=<?php echo $mc['video_id']; ?>"><div class="form-group">
                                <input type="checkbox" id="lec1">
                                <label for="lec1">
                                    <p><?php  echo $cn .".". $mc['title'];  ?></p>
                                    <span><i class="fa fa-play-circle" aria-hidden="true"></i> 1min</span>
                                </label>
                            </div></a>
                          
                        <?php
                       }
                        ?>
                        
                           
                      

                         

                        <?php   
                      
                        
                    }
                    ?>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
        <?php echo view('web/footer'); ?>

<script type="text/javascript">
$(document).ready(function()
{
    // alert('jiui');
    var vid = document.getElementById("myVideo");


  alert(vid.duration);
})

</script>
</body>

</html>