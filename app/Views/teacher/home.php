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
     <a class="active-a" href="<?php echo base_url(); ?>/teacherzone/course"><i class="fa fa-address-card"></i></a>
        <a href="<?php echo base_url(); ?>/teacherzone/course_list"><i class="fa fa-list-alt "></i></a>
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
            <div class="row">
                <div class="coruse-section shadow">
                    <h3>Jumb Into Course Creation</h3>
                    <a href="<?php echo base_url(); ?>/teacherzone/insert" class="btn-desin">Create Your Course</a>
                </div>
            </div>

        </div>
    </div>

     <div class="course_listing">
            <div class="course_box shadow">
            <div class="course_title">
                <div class="course_img"> 
                    <img src="<?php echo base_url(); ?>/assets/teacher/images/audience.png">
                </div>
                <div class="courser_draft">
                    <h4>Lorem</h4>
                    <p><strong>DRAFT:</strong> Public</p>
                </div>
            </div>
            <div class="course_skill">
                <p>Finish your course</p>
                <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
            </div>
        </div>
            <div class="course_box shadow">
            <div class="course_title">
                <div class="course_img"> 
                    <img src="<?php echo base_url(); ?>/assets/teacher/images/audience.png">
                </div>
                <div class="courser_draft">
                    <h4>Lorem</h4>
                    <p><strong>DRAFT:</strong> Public</p>
                </div>
            </div>
            <div class="course_skill">
                <p>Finish your course</p>
                <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
            </div>
        </div>
        </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/teacher/js/bootstrap-quill.js"></script>
<script type="text/javascript" src="j<?php echo base_url(); ?>/assets/teacher/s/sprite.svg.js"></script>


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
</body>
</html>