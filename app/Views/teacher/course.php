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
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/jquery-3.2.1.js"></script>


</head>

<body>
     <div class="text-center topbar">
        <strong>Welcome ! Dont't forget to join Studio U -</strong> the best place to ask questions and learn from other
        instructors
    </div>
     <div class="icon-bar">
        <a href="<?php echo base_url(); ?>/teacherzone/course_list"><i class="fa fa-list-alt "></i></a>
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
                                <h2 class="mt-4 step-titles">First, let's find out what type of course you're macking.</h2>
                                <div class="step-1-grid">
                                    <div class="grid-1">
                                        <h5><b>Course</b></h5>
                                        <p>Create rich learning experiences with the help of video lectures, quizzes,
                                            coding exerises, etc.</p>
                                    </div>
                                    <div class="grid-1">
                                        <h5><b>Practice Test</b></h5>
                                        <p>Help students prepare for cerification exams by providing practice question.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url(); ?>/teacherzone" class="prebtns">Previous</a>    
                            <input type="button" name="next" class="next action-button" value="Continue" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <h2 class="mt-4 mb-2  step-titles">How about a working title?</h2>
                                <p class="sub-titles">It's ok if you can't think of a good title now. You can change it later.</p>
                                <div class="step_2_area">
                                    <textarea id="course" name="course" formcontrolname="message" rows="5" class="form-control" placeholder="e.g. Learn Photoshop CS6 form Scratch"></textarea>
                                </div>
                                <br>
                                <br>
                            </div>
                            
                            <input type="button" name="next" class="next action-button" value="Continue" /> 
                            <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <h2 class="mt-4 mb-2 step-titles">What Category best fits the knowledge you'll share ?</h2>
                                <p class="step-titles">If you're not sure about the right category, you can changes it later.</p>
                                <div class="step_2_area">
                                <div class="form-group">
                                <select id="category" class="form-control" name="category">
                                <option>Choose a category</option>
                                <?php
                                foreach ($category as $cat)
                                {
                                ?>
                                <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category']; ?></option>
                                <?php  
                                }
                                ?>
                                </select>
                                </div>
                                </div>
                                <div class="step_2_area">
                                <div class="form-group">
                                <select id="subcategory" class="form-control" name="subcategory">
                                    <option>First Select category</option>
                                    </select>
                                    </div>
                                </div>
                                 <div class="step_2_area">
                                <div class="form-group">
                                <select id="topic" class="form-control" name="topic">
                                <option>First Select category & sub category</option>
                                </select>
                                </div>
                                </div>
                                <br>
                                <br>
                            </div>
                            
                            <input type="button" name="next" class="next action-button" value="Continue" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                        </fieldset>
                      <!--   <fieldset>
                            <div class="form-card">
                                <h2 class="mt-4 mb-2 step-titles">How much time can you spend creating your course per week?</h2>
                                <p class="step-titles">There's no wrong answe. We can help you achieve your goals even if you don't have
                                    much time.</p>
                                <div class="step_2_area">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio"
                                            name="example1">
                                        <label class="custom-control-label" for="customRadio">I'm very busy right now
                                            (0-2 hours)
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio1"
                                            name="example1">
                                        <label class="custom-control-label" for="customRadio1">I'll work on this on the
                                            side (2-4 hours)
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio2"
                                            name="example1">
                                        <label class="custom-control-label" for="customRadio2">I have lost of flexibility
                                            (5+ hours)
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio3"
                                            name="example1">
                                        <label class="custom-control-label" for="customRadio3">
                                            I haven't yet decided it i have time
                                        </label>
                                    </div>
                                </div>
                            </div>
                          <input type="button" name="next" class="next action-button" value="Continue" /> <input
                                type="button" name="previous" class="previous action-button-previous"
                                value="Previous" />
                            
                        </fieldset> -->
                         <fieldset>
                            <div class="form-card newhirght">
                                <h2 class="mt-4 mb-2 step-titles">Course landing page</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="course-detil">
                                            <label class="label-title">Course Short Description</label>
                                    <textarea id="short_desc" name="short_desc" formcontrolname="message" rows="4" class="form-control"></textarea>
                                </div>
                                    <div class="course-detil">
                                        <label class="label-title">What Learn</label>
                                    <textarea id="what_learn" name="what_learn" formcontrolname="message" rows="4" class="form-control"></textarea>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                       <!--  <label class="label-title">Course Long descrition</label> -->
                                        <!-- <div class="editor-full">
                                          <div id="document-full" name="long_desc" class="ql-scroll-y" style="height: 300px;">
                                           
                                          </div>
                                        </div> -->

                                    <label class="label-title">Course Long Description</label>
                                    <textarea id="long_desc" name="long_desc" formcontrolname="message" rows="4" class="form-control"></textarea>
                                    </div>
                                </div>
                                 <h2 class="mt-4 mb-2 step-titles">Basic info</h2>
                                <div class="row">
                                    <div class="col-lg-3">
                                     <div class="form-group">
                                       <!--  <select id="company" class="form-control">
                                            <option>English(US)</option>
                                            <option>medium</option>
                                            <option>large</option>
                                        </select> -->
                                        <input type="text" class="form-control" name="price" id="price" placeholder="Course Price">
                                    </div>
                                    </div>
                                    <div class="col-lg-3">
                                     <div class="form-group">
                                        <!-- <select id="company" class="form-control">
                                            <option>Select Level</option>
                                            <option>medium</option>
                                            <option>large</option>
                                        </select> -->
                                        <input type="number" class="form-control" name="day_to_complete" id="day_to_complete" placeholder="Day To Complete">

                                    </div>
                                    </div>
                                  <!--   <div class="col-lg-3">
                                     <div class="form-group">
                                        <select id="company" class="form-control">
                                            <option>Select Level</option>
                                            <option>medium</option>
                                            <option>large</option>
                                        </select>
                                    </div>
                                    </div> -->
                                    <!-- <div class="col-lg-3">
                                     <div class="form-group">
                                        <select id="company" class="form-control">
                                            <option>Select Level</option>
                                            <option>medium</option>
                                            <option>large</option>
                                        </select>
                                    </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                    <label class="label-title">Course image</label>
                                        <div class="upload_wraper">
                                            <div class="picture-container">
                                              <div class="picture">
                                                <img src="images/upload.png" class="picture-src" id="wizardPicturePreview" title="">
                                                <input type="file" id="course_image" class="" name="course_image">
                                              </div>
                                             
                                                <h6 class="Add-Item-Image"><p style="color: #2eafa5; display: inline-block;">Choose</p> a file</h6>
                                              <p class="include-possible">(600 X 400 up to 2MB)
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    <label class="label-title">Promotional video</label>
                                        <div class="upload_wraper">
                                            <div class="picture-container">
                                              <div class="picture">
                                                <img src="images/upload.png" class="picture-src" id="wizardPicturePreview2" title="">
                                                <input type="file" id="course_video" class="" name="course_video">
                                              </div>
                                             
                                                <h6 class="Add-Item-Image"><p style="color: #2eafa5; display: inline-block;">Choose</p> a file</h6>
                                              <p class="include-possible">(600 X 400 up to 2MB)
                                              </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                      <div class="course-detil">
                                            <label class="label-title">Requirement</label>
                                    <textarea id="requirement" name="requirement" formcontrolname="message" rows="4" class="form-control"></textarea>
                                </div>
                                    </div>
                                    <div class="col-md-6">
                                     <div class="course-detil">
                                            <label class="label-title">Includes</label>
                                    <textarea id="includes" name="includes" formcontrolname="message" rows="4" class="form-control"></textarea>
                                </div>
                                    </div>
                                </div>
                                
                            </div>
                            <input type="submit" name="next" class="action-button" value="Submit" /> 
                             
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap-quill.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/sprite.svg.js"></script>

<script>
    $(document).ready(function () {

        var current_fs, next_fs, previous_fs; //fieldsets
        var opacity;
        var current = 1;
        var steps = $("fieldset").length;

        setProgressBar(current);

        $(".next").click(function () {

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //show the next fieldset
            next_fs.show();
            $(".step-num").html(parseInt($(".step-num").html())+1);
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
            setProgressBar(++current);
        });

        $(".previous").click(function () {

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();
            $(".step-num").html(parseInt($(".step-num").html())-1);
            //hide the current fieldset with style
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    // for making fielset appear animation
                    opacity = 1 - now;

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    previous_fs.css({ 'opacity': opacity });
                },
                duration: 500
            });
            setProgressBar(--current);
        });

        function setProgressBar(curStep) {
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
                .css("width", percent + "%")
        }

        $(".submit").click(function () {
            return false;
        })

    });
</script>
<script type="text/javascript">

$("#wizard-picture").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#wizardPicturePreview";
  readURL(this, imgControlName);
  $('.preview1').addClass('it');
  $('.btn-rmv1').addClass('rmv');
});

</script>

    <script type="text/javascript">

$("#wizard-picture2").change(function() {
  // add your logic to decide which image control you'll use
  var imgControlName = "#wizardPicturePreview2";
  readURL(this, imgControlName);
  $('.preview1').addClass('it');
  $('.btn-rmv1').addClass('rmv');
});

</script>
    
    
    <script>
    var toolbarOptions = [
      [{
        'header': [1, 2, 3, 4, 5, 6, false]
      }],
      ['bold', 'italic', 'underline', 'strike'], // toggled buttons
      ['blockquote', 'code-block'],

      [{
        'header': 1
      }, {
        'header': 2
      }], // custom button values
      [{
        'list': 'ordered'
      }, {
        'list': 'bullet'
      }],
      [{
        'script': 'sub'
      }, {
        'script': 'super'
      }], // superscript/subscript
      [{
        'indent': '-1'
      }, {
        'indent': '+1'
      }], // outdent/indent
      [{
        'direction': 'rtl'
      }], // text direction

      [{
        'size': ['small', false, 'large', 'huge']
      }], // custom dropdown

      [{
        'color': []
      }, {
        'background': []
      }], // dropdown with defaults from theme
      [{
        'font': []
      }],
      [{
        'align': []
      }],
      ['link', 'image'],

      ['clean'] // remove formatting button
    ];

    var quillFull = new Quill('#document-full', {
      modules: {
        toolbar: toolbarOptions,
        autoformat: true
      },
      theme: 'snow',
      placeholder: "Write something..."
    });

    var quillCompact = new Quill('#document-compact', {
      modules: {
        form: {
          submitKey: {
            key: 'Enter',
            shortKey: true
          }
        },
        autoformat: true
      },
      theme: 'bubble',
      placeholder: "Type a message. " + (/mac/i.test(navigator.platform) ? "⌘" : "Ctrl") + "+Enter to send."
    });

  </script>
 

 <!-- ============================ Suraj Code ========================    -->
<script type="text/javascript">
    $("#category").on('change',function()
    {
        var category = $("#category").val();
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('/teacherzone/subcategory'); ?>",
                data: {category:category}, // <--- THIS IS THE CHANGE
                dataType: "html",
                success: function(data)
                {
                    $("#subcategory").html(data);
                }
            })
    });

    $("#subcategory").on('change',function()
    {
        var category = $("#category").val();
        var subcategory = $("#subcategory").val();
         $.ajax({
                type: "POST",
                url: "<?php echo base_url('/teacherzone/topic'); ?>",
                data: {category:category,subcategory:subcategory}, // <--- THIS IS THE CHANGE
                dataType: "html",
                success: function(data)
                {
                    $("#topic").html(data);
                }
            })
    });
</script>

 <!-- ============================ Suraj Code ========================    -->
  

</body>
</html>