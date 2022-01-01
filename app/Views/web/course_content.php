<?php
    $total=intval($total_video[0]['total']);
    $played=count($played_video);
    if($total==0)
        $per=0;
    else
        $per=($played * 100)/$total;
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]> -->
<html lang="en" >
<!-- <![endif]-->
<!-- head -->
<head>
    <meta charset="utf-8" />
    <title><?= $modify['course']; ?> | <?= $config['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?= $config['meta_description']; ?>" />
    <meta name="keywords" content="<?= $config['meta_keywords']; ?>">
    <meta name="author" content="<?= $config['title']; ?>" />
    <meta name="MobileOptimized" content="320" />
    <!-- theme styles -->
    <?= view('web/pages/styles'); ?>

    <style>
        .hidden {position:absolute;visibility:hidden;opacity:0;}
        input[type=checkbox] + label {
            color: #ccc;
            font-style: italic;
        }
        input[type=checkbox]:checked + label {
            color: #f00;
            font-style: normal;
        }
    </style>

    <!-- end theme styles -->
</head><!-- end head -->
<!-- body start-->
<body>
<!-- preloader -->

<!-- end preloader -->
<!-- top-nav bar start-->
<?= view('web/pages/header'); ?>
<!-- side navigation  -->

<!-- top-nav bar end-->
<!-- home start -->

<!-- courses content header start -->
<section id="class-nav" class="class-nav-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-12">

                <div class="class-nav-heading"><?= $modify['course']; ?></div>
            </div>
            <div class="col-lg-5 col-md-6 col-12">
                <div class="class-button certificate-button">
                    <ul>
                        <li>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-trophy"></i>&nbsp; <?= lang('app.get_certificate'); ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item">
                                        <?= $played; ?> of <?= $total; ?>
                                        <?= lang('app.complete'); ?>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="<?= base_url()."/web/course/".$modify['id']."/".clean($modify['course']); ?>" class="course_btn"> <?= lang('app.course_details'); ?> <i class="fa fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="learning-courses-home" class="learning-courses-home-main-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="learning-courses-home-video text-white btm-30">
                    <div class="video-item hidden-xs">
                        <div class="video-device">
                            <img src="<?= base_url()."/".$modify['image']; ?>" class="img-fluid" alt="Background">
                            <div class="video-preview">
                                <a href="<?= base_url()."/web/watch/".$modify['id']; ?>" class="btn-video-play iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="learning-courses-home-block text-white">
                    <h3 class="learning-courses-home-heading btm-20">
                        <a href="<?= base_url()."/web/course/".$modify['id']."/".clean($modify['course']); ?>" title="heading"><?= $modify['course']; ?></a></h3>
                    <div class="learning-courses btm-20"><?= $modify['inserted_by']==0?"Admin":$teacher[0]['name']; ?></div>
                    <div class="learning-courses btm-20"><?= $modify['short']; ?></div>

                    <div class="progress-block">
                        <div class="one histo-rate">
                            <span class="bar-block" style="width: 100%">
                                <span id="bar-one" style="width: <?= $per; ?>%" class="bar bar-clr bar-radius">&nbsp;</span>
                            </span>
                        </div>
                        <i class="fa fa-trophy lft-7"></i>
                    </div>

                    <div class="learning-courses-home-btn">
                        <a href="<?= base_url()."/web/watch/".$modify['id']; ?>" class="iframe btn btn-primary" title="Continue"><?= lang('app.continue_lecture'); ?></a>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- courses content header end -->
<!-- courses-content start -->
<section id="learning-courses" class="learning-courses-about-main-block">
    <div class="container">
        <div class="about-block">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active text-center" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                    <a class="nav-item nav-link text-center" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Course Content</a>
                    <a class="nav-item nav-link text-center" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Q &amp; A</a>
                    <a class="nav-item nav-link text-center" id="nav-announcement-tab" data-toggle="tab" href="#nav-announcement" role="tab" aria-controls="nav-announcement" aria-selected="false">Announcements</a>
                    <a class="nav-item nav-link text-center" id="nav-quiz-tab" data-toggle="tab" href="#nav-quiz" role="tab" aria-controls="nav-quiz" aria-selected="false">Quiz</a>
                    <a class="nav-item nav-link text-center" id="nav-assign-tab" data-toggle="tab" href="#nav-assign" role="tab" aria-controls="nav-assign" aria-selected="false">Assignment</a>
                    <a class="nav-item nav-link text-center" id="nav-appoint-tab" data-toggle="tab" href="#nav-appoint" role="tab" aria-controls="nav-appoint" aria-selected="false">Appointment</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="overview-block">
                        <h4>Recent Activity</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="learning-questions-block btm-40">
                                    <h5 class="learning-questions-heading"><?= lang('app.recent_question'); ?></h5>
                                        <?php if(count($questions)!=0) { ?>
                                        <div class="learning-questions-dtl-block">
                                        <?php
                                        $cnt=1;
                                        foreach ($questions as $q){ if($cnt++>5) { break; } ?>
                                            <div class="learning-questions-img rgt-20">AE</div>
                                            <div class="learning-questions-dtl"><a href="#" title="questions"><?= $q['question']; ?></a>
                                            </div>
                                        <?php } ?> </div> <?php  } else { ?>
                                        <div class="learning-questions-content text-center">
                                            <h3 class="text-center"><?= lang('app.no_recent_question'); ?></h3>
                                        </div>
                                        <?php } ?>
                                    <div class="learning-questions-heading"><a href="#" id="goTab3" title="browse"><?= lang('app.browse_all_question'); ?></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="learning-questions-block btm-40">
                                    <h5 class="learning-questions-heading"><?= lang('app.recent_announcement'); ?></h5>
                                    <?php if(count($announcement)==0) { ?>
                                        <div class="learning-questions-content text-center">
                                            <h3 class="text-center"><?= lang('app.no_recent_announcement'); ?></h3>
                                        </div>
                                    <?php } else { ?>
                                        <div id="accordion" class="second-accordion">
                                            <?php $cnt=1; foreach ($announcement as $a) { if($cnt++>3) { break; } ?>
                                            <div class="card">
                                                <div class="card-header" id="headingFour<?= $a['id']; ?>">
                                                    <div class="mb-0">
                                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour<?= $a['id']; ?>" aria-expanded="true" aria-controls="collapseFour">
                                                            <div class="learning-questions-img rgt-20">AE
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="section"><a href="#" title="questions"><?= $modify['inserted_by']==0?"Admin":$teacher[0]['name']; ?></a> <a href="#" title="questions"><?= date('d F,Y',strtotime($a['datetime'])); ?></a></div>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="section-dividation text-right">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 offset-3 col-9 offset-sm-0">
                                                                    <div class="profile-heading"><?= $a['title']; ?></div>
                                                                </div>

                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div id="collapseFour<?= $a['id']; ?>" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion" style="">

                                                    <div class="card-body">
                                                        <p class="announsment-text"><?= $a['detail'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="learning-questions-heading"><a id="goTab4" href="" title="browse"><?= lang('app.browse_announcement'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-course-block">
                            <h4 class="content-course"><?= lang('app.about_this_course'); ?></h4>
                            <p class="btm-40"><?= $modify['short']; ?></p>
                        </div>
                        <hr>
                        <div class="content-course-number-block">
                            <div class="row">
                                <div class="col-lg-3 col-sm-4">
                                    <div class="content-course-number"><?= lang('app.by_the_numbers'); ?></div>
                                </div>
                                <div class="col-lg-6 col-sm-5">
                                    <div class="content-course-number">
                                        <ul>
                                            <li>
                                                <?= lang('app.students_enrolled'); ?>: <?= intval($enrolled[0]['total']); ?>
                                            </li>
                                            <li>Languages: English</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <div class="content-course-number">
                                        <ul>
                                            <li>Classes: <?= intval($videos[0]['total']); ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="content-course-number"><?= lang('app.description'); ?></div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="content-course-number content-course-one">
                                        <h5 class="content-course-number-heading"><?= lang('app.about_this_course'); ?></h5>
                                        <p><?= $modify['short']; ?><p>
                                        <h5 class="content-course-number-heading"><?= lang('app.description'); ?></h5>
                                        <p><?= $modify['long']; ?><p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-3 col-sm-3">
                                    <div class="content-course-number"><?= lang('app.teacher'); ?></div>
                                </div>
                                <div class="col-lg-9 col-sm-9">
                                    <div class="content-course-number content-course-number-one">
                                        <div class="content-img-block btm-20">
                                            <div class="content-img">
                                                <a href="<?= base_url()."web/teacher/".$teacher[0]['id']; ?>" title="profile"><img src="<?= base_url()."/".$teacher[0]['image']; ?>" class="img-fluid"  alt="instructor" ></a>
                                            </div>
                                            <div class="content-img-dtl">
                                                <div class="profile"><a href="<?= base_url()."web/teacher/".$teacher[0]['id']; ?>" title="profile"><?= $modify['inserted_by']==0?"Admin":$teacher[0]['name']; ?>
                                                    </a></div>
                                                <p><a href="#" class="__cf_email__" data-cfemail="9cfdf8f1f5f2dcf1f9f8f5fdfff5e8e5b2fff3b2f5f2"><?= $teacher[0]['email']; ?></a></p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li class="rgt-10"><a href="<?= $teacher[0]['linkedin']; ?>" target="_blank" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="rgt-10"><a href="<?= $teacher[0]['youtube']; ?>" target="_blank" title="twitter"><i class="fa fa-youtube"></i></a></li>

                                        </ul>
                                        <p><?= $teacher[0]['description']; ?><p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="profile-block">
                        <form  method="post" action="https://mediacity.co.in/eclass/demo/public/course/checked/5" data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="_token" value="MBvCIbFxQVUxpudFzOQctPY5NCqrka11HoN2Wq8y">

                            <div id="ck-button">
                                <label>
                                    <input type="checkbox" name="select-all" class="hidden" id="select-all" /><span>Select All</span>
                                </label>
                            </div>

                            <div id="accordion" class="second-accordion">
                                <?php foreach ($cvideos as $v) { ?>
                                <div class="card btm-10">
                                    <div class="card-header" id="headingOne15">
                                        <div class="mb-0">
                                            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne15" aria-expanded="true" aria-controls="collapseOne">
                                                <div class="course-check-table">
                                                    <table class="table">
                                                        <tbody>
                                                        <tr>
                                                            <td width="10px">
                                                                <div class="form-check">
                                                                    <input class="form-check-input filled-in material-checkbox-input" type="checkbox" name="checked[]" value="15" id="checkbox15"   >
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-6">
                                                                        <div class="section"><?= $v['title']; ?></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-10 col-8">

                                                                        <div class=""><?= $v['description']; ?>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-lg-2 col-4">
                                                                        <div class="text-right">
                                                                            30                                                                    min

                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>

                            <div class="mark-read-button">
                                <button type="submit" class="btn btn-md btn-primary">
                                    Mark as Complete
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <div class="learning-contact-block">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="contact-search-block btm-40">
                                    <div class="learning-contact-search">
                                        <h4 class="question-text"><?= count($questions)==0?"No Recent Questions":count($questions)." questions in this course"; ?></h4>

                                    </div>
                                    <div class="learning-contact-btn">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ask a new question
                                        </button>


                                        <!--Model start-->
                                        <div id="myModal" class="modal fade" role="dialog">
                                            <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Ask a new question</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <div class="modal-body">

                                                        <form id="demo-form2" method="post" action="<?php echo base_url()."/web/add_question"; ?>"
                                                              class="form-horizontal form-label-left">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <input type="hidden" name="course_id" class="form-control" value="<?= $modify['id']; ?>"  />
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label for="detail">Question:<sup class="redstar">*</sup></label>
                                                                    <textarea name="question" rows="4"  class="form-control" placeholder=""></textarea>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="box-footer">
                                                                <button type="submit" class="btn btn-lg col-md-3 btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Model end-->
                                    </div>
                                </div>

                                <div id="accordion" class="second-accordion">
                                    <?php foreach ($questions as $q) { ?>
                                    <div class="card btm-10">
                                        <div class="card-header" id="headingThree<?= $q['id']; ?>">
                                            <div class="mb-0">
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree<?= $q['id']; ?>" aria-expanded="true" aria-controls="collapseThree">
                                                    <div class="learning-questions-img rgt-10">AE
                                                    </div>
                                                    <div class="row no-gutters">
                                                        <div class="col-lg-6 col-8">
                                                            <div class="section">
                                                                <a href="#" title="questions"><?= $q['name']; ?> </a>
                                                                <a href="#" title="questions"><?= strtotime('d F,Y',strtotime($q['date'])); ?></a>
                                                                <div class="author-tag">
                                                                    Student
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-3">
                                                            <div class="section-dividation text-right">
                                                                <?= count($answers[$q['id']]); ?> Answer
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-1">
                                                            <div class="question-report txt-rgt">
                                                                <a href="#" data-toggle="modal" data-target="#myModalquesReport<?= $q['id']; ?>" title="response"><i class="fa fa-flag" aria-hidden="true"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row no-gutters">
                                                        <div class="col-lg-8 col-8">
                                                            <div class="profile-heading profile-heading-two"><?= $q['question']; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3 col-3">
                                                            <div class="profile-heading txt-rgt"><a href="#" data-toggle="modal" data-target="#myModalanswer<?= $q['id']; ?>" title="response">Add Answer</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                        <!--Model start-->
                                        <div class="modal fade" id="myModalanswer<?= $q['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Answer</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="box box-primary">
                                                        <div class="panel panel-sum">
                                                            <div class="modal-body">
                                                                <form id="demo-form2" method="post" action="<?= base_url(); ?>/web/add_answer/<?= $q['id']; ?>" data-parsley-validate="" class="form-horizontal form-label-left">
                                                                    <input type="hidden" name="question_id" value="<?= $q['id']; ?>">
                                                                    <input type="hidden" name="course" value="<?= $modify['id']; ?>">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <?= $q['question']; ?>
                                                                            <br>
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="detail">Answer:<sup class="redstar">*</sup></label>
                                                                            <textarea name="answer" rows="4" class="form-control" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="box-footer">
                                                                        <button type="submit" class="btn btn-lg col-md-3 btn-primary"><?= lang('app.submit'); ?></button>
                                                                    </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Model close -->

                                        <!--Model start Question Report-->

                                        <div class="modal fade" id="myModalquesReport<?= $q['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">

                                                        <h4 class="modal-title" id="myModalLabel">Report Question</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    </div>
                                                    <div class="box box-primary">
                                                        <div class="panel panel-sum">
                                                            <div class="modal-body">

                                                                <form id="demo-form2" method="post" action="https://mediacity.co.in/eclass/demo/public/question/reports/2" data-parsley-validate="" class="form-horizontal form-label-left">
                                                                    <input type="hidden" name="_token" value="5fNdEjEgJjvds2E9DHDxTZFx3zW5KCUU4gxKJCC0">

                                                                    <input type="hidden" name="course_id" value="1">

                                                                    <input type="hidden" name="question_id" value="2">

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="title">Title:<sup class="redstar">*</sup></label>
                                                                                <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title" value="" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="email">Email:<sup class="redstar">*</sup></label>
                                                                                <input type="email" class="form-control" name="email" id="title" placeholder="Please Enter Email" value="admin@mediacity.co.in" required="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="detail">Detail:<sup class="redstar">*</sup></label>
                                                                                <textarea name="detail" rows="4" class="form-control" placeholder="Enter Detail" required=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="box-footer">
                                                                        <button type="submit" class="btn btn-lg col-md-3 btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Model close -->


                                        <div id="collapseThree<?= $q['id']; ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <?php foreach ($answers[$q['id']] as $a){ ?>
                                            <div class="card-body">
                                                <div class="answer-block">
                                                    <div class="row no-gutters">
                                                        <div class="col-lg-1 col-2">
                                                            <div class="learning-questions-img-two">AE
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-11 col-10">

                                                            <div class="section">
                                                                <a href="#" title="questions"><?= $a['name']; ?></a> <a href="#" title="questions"><?= date('d F,Y',strtotime($a['datetime'])); ?></a>
                                                                <div class="author-tag">
                                                                    student
                                                                </div>
                                                            </div>
                                                            <br>

                                                            <div class="section-answer">
                                                                <a href="#" title="Course"><?= $a['answer']; ?></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-announcement" role="tabpanel" aria-labelledby="nav-announcement-tab">
                   <?php if(count($announcement)==0) { ?>
                    <div class="learning-announcement-null text-center">
                        <div class="offset-lg-2 col-lg-8">
                            <h1><?= lang('app.no_announcement_posted'); ?></h1>
                            <p>The instructor hasn’t added any announcements to this course yet. Announcements are used to inform you of updates or additions to the course.</p>
                        </div>
                    </div>
                    <?php } else { ?>
                       <div class="learning-announcement text-center">
                           <div class="col-lg-12">
                               <div id="accordion" class="second-accordion">
                                   <?php foreach($announcement as $a) { ?>
                                   <div class="card btm-30">
                                       <div class="card-header" id="headingFive<?= $a['id']; ?>">
                                           <div class="mb-0">
                                               <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive<?= $a['id']; ?>" aria-expanded="true" aria-controls="collapseFive">
                                                   <div class="learning-questions-img rgt-20">AE
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-lg-6">
                                                           <div class="section"><a href="#" title="questions"><?= $modify['inserted_by']==0?"Admin":$teacher[0]['name']; ?></a> <a href="#" title="questions"><?= date('d F,Y',strtotime($a['datetime'])); ?></a></div>
                                                       </div>
                                                       <div class="col-lg-6">
                                                           <div class="section-dividation text-right">
                                                           </div>
                                                       </div>
                                                   </div>
                                                   <div class="row">
                                                       <div class="col-lg-12 offset-3 col-9 offset-sm-0 col-sm-12 offset-md-0 col-md-12">
                                                           <div class="profile-heading profile-heading-one">
                                                               <?= $a['title']; ?>
                                                           </div>
                                                       </div>

                                                   </div>
                                               </button>
                                           </div>
                                       </div>
                                       <div id="collapseFive<?= $a['id']; ?>" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                           <div class="card-body">
                                               <p><?= $a['detail']; ?></p>
                                           </div>
                                       </div>
                                   </div>
                                   <?php } ?>
                               </div>
                           </div>
                       </div>
                    <?php } ?>
                </div>
                <div class="tab-pane fade" id="nav-quiz" role="tabpanel" aria-labelledby="nav-quiz-tab">
                    <div class="container">
                        <div class="quiz-main-block">
                            <div class="row">

                                <div class="learning-quiz-null text-center">
                                    <?php if(count($quiz)==0) { ?>
                                    <div class="col-lg-12">
                                        <h1><?= lang('app.no_quiz_posted'); ?>.</h1>
                                        <p>The teacher hasn’t added any quiz to this course yet.</p>
                                    </div>
                                    <?php } else { ?>
                                        <div class="col-lg-12">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Title</th>
                                                    <th>Total</th>
                                                    <th>Passing</th>
                                                    <th>Give Quiz</th>
                                                </tr>
                                                <?php $cnt=1; foreach ($quiz as $q) { ?>
                                                <tr>
                                                    <td><?= $cnt++; ?></td>
                                                    <td><?= $q['title']; ?></td>
                                                    <td><?= $q['total']; ?></td>
                                                    <td><?= $q['passing']; ?></td>
                                                    <td><a href="<?= base_url()."/web/give_quiz/".$q['id']."/".clean($q['title']); ?>" target="_blank">Give Quiz</a> </td>
                                                </tr>
                                                <?php } ?>
                                            </table>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-assign" role="tabpanel" aria-labelledby="nav-assign-tab">
                    <div class="container">
                        <div class="assignment-main-block">
                            <h3>Your Assignments</h3>
                            <div class="row">

                                <div class="col-md-8">

                                    <div class="row">
                                    </div>
                                </div>
                                <div class="col-md-4">

                                    <div class="contact-search-block btm-40">

                                        <div class="udemy-contact-btn text-center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#assignmodel">Submit Assignment
                                            </button>
                                        </div>
                                        <div class="modal fade" id="assignmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog modal-sm" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Submit Assignment</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="box box-primary">
                                                        <div class="panel panel-sum">
                                                            <div class="modal-body">
                                                                <form id="demo-form2" method="post" action="" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                                    <input type="hidden" name="_token" value="MBvCIbFxQVUxpudFzOQctPY5NCqrka11HoN2Wq8y">

                                                                    <input type="hidden" name="user_id"  value="2" />

                                                                    <input type="hidden" name="instructor_id"  value="1" />

                                                                    <div class="row text-center">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="title">Title:<sup class="redstar">*</sup></label>
                                                                                <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title" value="">
                                                                            </div>

                                                                            <div class="form-group">

                                                                                <div class="wrapper">
                                                                                    <label for="detail">Assignment Upload:<sup class="redstar">*</sup></label>
                                                                                    <div class="file-upload">
                                                                                        <input type="file" name="assignment" class="form-control" />
                                                                                        <i class="fa fa-arrow-up"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>

                                                                    </div>

                                                                    <hr>
                                                                    <div class="box-footer text-center">
                                                                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-appoint" role="tabpanel" aria-labelledby="nav-appoint-tab">
                    <div class="container">
                        <div class="appointment-main-block">
                            <h3>YourAppointment</h3>
                            <div class="row">

                                <div class="col-md-8">
                                </div>
                                <div class="col-md-4">
                                    <div class="contact-search-block btm-40">
                                        <div class="udemy-contact-btn text-center">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#appointmodel">Request Appointment
                                            </button>
                                        </div>
                                        <div class="modal fade" id="appointmodel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Request Appointment</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="box box-primary">
                                                        <div class="panel panel-sum">
                                                            <div class="modal-body">
                                                                <form id="demo-form2" method="post" action="https://mediacity.co.in/eclass/demo/public/course/appointment/5" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                                                                    <input type="hidden" name="_token" value="MBvCIbFxQVUxpudFzOQctPY5NCqrka11HoN2Wq8y">

                                                                    <input type="hidden" name="user_id"  value="2" />

                                                                    <input type="hidden" name="instructor_id"  value="1" />


                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="title">User:<sup class="redstar">*</sup></label>
                                                                                <input type="text" name="fname" value="instructor@mediacity.co.in" class="form-control" disabled />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="title">Instructor:<sup class="redstar">*</sup></label>
                                                                                <input type="text" name="instructor" value="admin@mediacity.co.in" class="form-control" disabled/>
                                                                            </div>
                                                                        </div>
                                                                    </div>



                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="title">Title:<sup class="redstar">*</sup></label>
                                                                                <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title" value="">
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <label for="title">Date:<sup class="redstar">*</sup></label>
                                                                                <input type="datetime-local" class="form-control" id="date_time" name="date_time" placeholder="Please Enter Title" value="">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <label for="detail">Title:<sup class="redstar">*</sup></label>
                                                                                <textarea id="detail" name="detail" class="form-control" placeholder="Enter your details" value=""></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <hr>
                                                                    <div class="box-footer">
                                                                        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- courses-content end -->

<!-- testimonial end -->
<!-- footer start -->
<?= view('web/pages/footer'); ?>
<!-- jquery -->
<?= view('web/pages/scripts'); ?>

<!-- iframe script -->
<script>
    (function($) {
        "use strict";
        $(document).ready(function(){

            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2', transition:"fade"});
            $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
            $(".group4").colorbox({rel:'group4', slideshow:true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
            $(".iframe").colorbox({iframe:true, width:"100%", height:"100%"});
            $(".inline").colorbox({inline:true, width:"50%"});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });

            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});


            $("#click").click(function(){
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    })(jQuery);
</script>
<!-- script to remain on active tab -->
<script>
    (function($) {
        "use strict";
        $(document).ready(function(){
            $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
                localStorage.setItem('activeTab', $(e.target).attr('href'));
            });
            var activeTab = localStorage.getItem('activeTab');
            if(activeTab){
                $('#nav-tab a[href="' + activeTab + '"]').tab('show');
            }
        });
    })(jQuery);
</script>
<!-- link for another tab -->
<script>
    (function($) {
        "use strict";
        $("#goTab4").click(function(){
            $("#nav-tab a:nth-child(4)").click();
            return false;
        });

        $("#goTab3").click(function(){
            $("#nav-tab a:nth-child(3)").click();
            return false;
        });
    })(jQuery);
</script>

<script type="text/javascript">
    $('#select-all').click(function(event) {
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
    });
</script>

<script>
    (function($) {
        "use strict";
        tinymce.init({selector:'textarea'});
    })(jQuery);
</script>

<!-- end jquery -->
</body>
<!-- body end -->
</html> 
