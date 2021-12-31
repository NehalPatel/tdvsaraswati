<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->

    <a href="<?php echo base_url(); ?>assets/index3.html" class="brand-link">

        <img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png"

             alt="My3Skill"

             class="brand-image img-circle elevation-3"

             style="opacity: .8">

        <span class="brand-text font-weight-light">My3Skill</span>

    </a>

    <!-- Sidebar -->

    <div class="sidebar">

        <!-- Sidebar user (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img src="<?php echo base_url()."/".$_SESSION['my3skills']['image']; ?>" class="img-circle elevation-2" alt="User Image" style="height: 34px;width: 34px;border-radius: 50%;">

            </div>

            <div class="info">

                <a href="#" class="d-block"><?php echo $_SESSION['my3skills']['name']; ?></a>

            </div>

        </div>

        <?php

            $url=basename($_SERVER['REQUEST_URI']);

        ?>

        <!-- Sidebar Menu -->

        <nav class="mt-2">

            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- Add icons to the links using the .nav-icon class

                     with font-awesome or any other icon font library -->

                <li class="nav-item">

                    <a href="<?php echo base_url()."/teacher-dashboard"; ?>" class="nav-link <?php echo $url=="teacher-dashboard"?"active":""; ?>">

                    <i class="nav-icon fas fa-tachometer-alt"></i>

                    <p>

                        Dashboard

                    </p>

                    </a>

                </li>

                <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                      <i class="nav-icon fas fa-graduation-cap"></i>

                      <p>

                        Course

                        <i class="right fas fa-angle-left"></i>

                      </p>

                    </a>

                    <ul class="nav nav-treeview">  
                      <li class="nav-item">

                        <a href="<?php echo base_url(); ?>/teacher-course" class="nav-link">

                          <i class="far fa-circle nav-icon"></i>

                          <p>Course</p>

                        </a>

                      </li>  

                    </ul>

                  </li> 
                     <li class="nav-item ">

                        <a href="<?php echo base_url(); ?>/teacher/user-enrolled" class="nav-link">

                          <i class="far fa-user nav-icon"></i>

                          <p>User Enrolled</p>

                        </a>

                      </li> 

                      <li class="nav-item has-treeview">

                      <a href="#" class="nav-link">

                        <i class="nav-icon fas fa fa-question"></i>

                        <p>

                          Question/Answer

                          <i class="right fas fa-angle-left"></i>

                        </p>

                      </a>

                      <ul class="nav nav-treeview">  
                        <li class="nav-item">

                          <a href="<?php echo base_url(); ?>/teacher-question" class="nav-link">

                            <i class="far fa-circle nav-icon"></i>

                            <p>Questions</p>

                          </a>

                        </li>  
                          <li class="nav-item">

                          <a href="<?php echo base_url(); ?>/teacher-answer" class="nav-link">

                            <i class="far fa-circle nav-icon"></i>

                            <p>Answers</p>

                          </a>

                        </li>  

                      </ul>

                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>/teacher-announcement" class="nav-link">
                        <i class="fa  fa-bullhorn nav-icon"></i>
                        <p>Announcement </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="<?php echo base_url(); ?>/teacher-featurecourse" class="nav-link">
                        <i class="fa  fa-graduation-cap nav-icon"></i>
                        <p>Featured Course </p>
                      </a>
                    </li>
                  
                   <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                      <i class="nav-icon fas fa-question"></i>

                      <p>

                       Quiz

                        <i class="right fas fa-angle-left"></i>

                      </p>

                    </a>

                    <ul class="nav nav-treeview">  
                      <li class="nav-item">

                        <a href="<?php echo base_url(); ?>/teacher-quiz" class="nav-link">

                           <i class="far fa-circle nav-icon"></i>

                          <p>Quiz</p>

                        </a>

                      </li>  
                    </ul>

                  </li> 
                   <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                      <i class="nav-icon fas fa-users"></i>

                      <p>

                       Zoom Meetings

                        <i class="right fas fa-angle-left"></i>

                      </p>

                    </a>

                    <ul class="nav nav-treeview">  
                      <li class="nav-item">

                        <a href="<?php echo base_url(); ?>/teacher-meetings" class="nav-link">

                           <i class="far fa-circle nav-icon"></i>

                          <p>Zoom Meetings</p>

                        </a>

                      </li>  
                    </ul>

                  </li> 
                   <li class="nav-item has-treeview">

                    <a href="#" class="nav-link">

                      <i class="nav-icon fas fa-money-check-alt"></i>

                      <p>

                        My Revenue

                        <i class="right fas fa-angle-left"></i>

                      </p>

                    </a>

                    <ul class="nav nav-treeview">  
                      <li class="nav-item">

                        <a href="<?php echo base_url(); ?>/my-pending-payout" class="nav-link">

                           <i class="far fa-circle nav-icon"></i>

                          <p>Pending Payout</p>

                        </a>

                      </li> 
                      <li class="nav-item">

                        <a href="<?php echo base_url(); ?>/my-complete-payout" class="nav-link">

                              <i class="far fa-circle nav-icon"></i>

                          <p>Completed Payout</p>

                        </a>

                      </li>  

                    </ul>

                  </li> 
                      <li class="nav-item">

                        <a href="<?php echo base_url(); ?>/teacher/payout-setting" class="nav-link">

                          <i class="nav-icon fas fa-money-check-alt"></i>

                          <p>Payout Setting</p>

                        </a>

                      </li> 

                    

                <li class="nav-header">OTHER LINKS</li>

                <li class="nav-item">

                    <a href="<?php echo base_url()."/teacher-logout"; ?>" class="nav-link">

                        <i class="nav-icon far fa-circle text-danger"></i>

                        <p class="text">Logout</p>

                    </a>

                </li>

            </ul>

        </nav>

        <!-- /.sidebar-menu -->

    </div>

    <!-- /.sidebar -->

</aside>