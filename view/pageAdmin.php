<html lang="en" class=" ">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin page</title>
    
    <!-- Bootstrap -->
    <!-- <link href="./view/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link href="./view/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="./view/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="./view/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="./view/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="./view/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="./view/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="./view/build/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="./view/css/maps/style.css">
    <style>
        .hide {
            display: none;
            opacity: 0;
            transition: 1s;
        }

        .show {
            display: block;
            opacity: 1;
            transition: 1s;
        }
    </style>


    <body class="nav-md">
    <?php
   
  

    ?>
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>Welcome Admin</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">

                                <img src="./view/images/img.jpg" alt=".." class="img-circle profile_img">
                            </div>

                            <div class="profile_info">
                                <span>Welcome,</span>
                                <h2><?php
                               echo $rows["UserName"];
                                
                                ?></h2>
                            </div>
                        </div>
                        <!-- /menu profile quick info -->

                        <br>

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section active">
                                <h3>General</h3>
                                <ul class="nav side-menu" style="">
                                    <li class=""><a><i class="fa fa-home"></i>Confessions<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none;">

                                            <li><a class="showConfession" data-toggle="pill" href="#menu1">Menu 1</a></li>

                                        </ul>
                                    </li>
                                    <li class=""><a><i class="fa fa-edit"></i>Post <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="display: none;">
                                            <li><a class="PostConfessions" href="#">Post Confessions</a></li>
                                              <li><a href="#" class="ShowPostHistory">Post History</a></li>
                                              <li><a href="#" class="CheckPost"> Check Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-desktop"></i>Infomation User<span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="">
                                            <li><a class="InfoMation" href="#">Infomation Admin</a></li>
                                            <li><a class="GrantRight" href="#">Grant Rights Accout</a></li>
                                            GrantRight InfoMation
                                        </ul>
                                    </li>
                                    <li><a><i class="fa fa-table"></i> Post History <span class="fa fa-chevron-down"></span></a>
                                        <ul class="nav child_menu" style="">
                                            <l

                                        </ul>
                                    </li>


                                </ul>
                            </div>
                            <div class="menu_section">


                            </div>

                        </div>
                        <!-- /sidebar menu -->

                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">



                            <a data-toggle="tooltip" data-placement="top" title="" href="./helper/helpAjAx.php" data-original-title="Logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>

                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <img src="./view/images/img.jpg" alt="">John Doe
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="javascript:;"> Profile</a></li>
                                        <li>
                                            <a href="javascript:;">
                                                <span class="badge bg-red pull-right">50%</span>
                                                <span>Settings</span>
                                            </a>
                                        </li>
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="./helper/helpAjAx.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>

                                <li role="presentation" class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-envelope-o"></i>
                                        <span class="badge bg-green">6</span>
                                    </a>
                                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                        <li>
                                            <a>
                                                <span class="image"><img src="./view/images/img.jpg" alt="Profile Image"></span>
                                                <span>
                    <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="./view/images/img.jpg" alt="Profile Image"></span>
                                                <span>
                    <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="./view/images/img.jpg" alt="Profile Image"></span>
                                                <span>
                    <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <span class="image"><img src="./view/images/img.jpg" alt="Profile Image"></span>
                                                <span>
                    <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                                </span>
                                                <span class="message">
                    Film festivals used to be do-or-die moments for movie makers. They were where...
                  </span>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="text-center">
                                                <a>
                                                    <strong>See All Alerts</strong>
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main" style="min-height: 1381px;">

                    <div class="hide Confession">

                    <?php include "./view/includeView/newConfresssion.php"; ?>



                    </div>
                    <!--end  feature Confession -->
                    <div class="hide InfomationUser">
                    vávsavsavsavsa

                        <?php 
                        include "./view/includeView/InformationUser.php";
                         ?>
                    </div>
                    <!--end  feature InfomationUser -->
                    <div class="hide PostHistory ">
                    <?php 
                    
                    include "./view/includeView/HistoryPost.php";
                    ?>
                    
                    
                    </div>
                    <!--end  feature postHistory -->
                    <div class="hide CheckPostContainer">
                    <?php 
                    
                    include "./view/includeView/CheckPost.php";
                    ?>
                    
                    
                    </div>

                    <div class="hide PostConfession ">
                        <h1>Name post:<?php 
                       echo $rows["Name"];
                        
                        ?></h1>
                        <form action="">
                            <div class="row">
                                
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <div class="form-group">
                            <label for="comment">Title:</label>
                            <input name="tilte" type="text" class="form-control" id="TitleConfession">
                        </div>
                       
                                </div>
                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                                <div class="form-group">
                            <label for="comment">Category:</label>
                            <input name="Category" type="text" class="form-control" id="Category">
                        </div>
                                </div>
                                
                        
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea name="Content" class="form-control" rows="5" id="Content"></textarea>
                        </div>
                        <input <?php
                        echo "IdUser='".$rows["id"]."' UserName='".$rows["UserName"]."' id_post='".$_SESSION["id_post"]."' ";
                        ?> type="button" class="btn btn-primary btn-post" value="Post">
                        </form>
                        
                        <div class="alert alert-success success">
                           
                        </div>
                        


                    </div>



                </div>
                <!--end  feature PostConfession -->

            </div>
        </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>


            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        </div>
        </div>

        <!-- jQuery -->

        <script src="./view/vendors/jquery/dist/jquery.js"></script>

        <script src="./view/js/script.js"></script>
        <!-- Bootstrap -->
        <script src="./view/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="./view/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="./view/vendors/nprogress/nprogress.js"></script>
        <!-- Chart.js -->
        <script src="./view/vendors/Chart.js/dist/Chart.min.js"></script>
        <!-- gauge.js -->
        <script src="./view/vendors/gauge.js/dist/gauge.min.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="./view/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="./view/vendors/iCheck/icheck.min.js"></script>
        <!-- Skycons -->
        <script src="./view/vendors/skycons/skycons.js"></script>
        <!-- Flot -->
        <script src="./view/vendors/Flot/jquery.flot.js"></script>
        <script src="./view/vendors/Flot/jquery.flot.pie.js"></script>
        <script src="./view/vendors/Flot/jquery.flot.time.js"></script>
        <script src="./view/vendors/Flot/jquery.flot.stack.js"></script>
        <script src="./view/vendors/Flot/jquery.flot.resize.js"></script>
        <!-- Flot plugins -->
        <script src="./view/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="./view/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
        <script src="./view/vendors/flot.curvedlines/curvedLines.js"></script>
        <!-- DateJS -->
        <script src="./view/vendors/DateJS/build/date.js"></script>
        <!-- JQVMap -->
        <script src="./view/vendors/jqvmap/dist/jquery.vmap.js"></script>
        <script src="./view/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
        <script src="./view/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
        <!-- bootstrap-daterangepicker -->
        <script src="./view/vendors/moment/min/moment.min.js"></script>
        <script src="./view/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="./view/build/js/custom.js"></script>



        <div class="jqvmap-label" style="display: none;"></div>
        <div class="daterangepicker dropdown-menu ltr opensleft">
            <div class="calendar left">
                <div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_start" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i>
                    <div class="calendar-time" style="display: none;">
                        <div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                </div>
                <div class="calendar-table"></div>
            </div>
            <div class="calendar right">
                <div class="daterangepicker_input"><input class="input-mini form-control" type="text" name="daterangepicker_end" value=""><i class="fa fa-calendar glyphicon glyphicon-calendar"></i>
                    <div class="calendar-time" style="display: none;">
                        <div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div>
                </div>
                <div class="calendar-table"></div>
            </div>
            <div class="ranges">
                <ul>
                    <li data-range-key="Today">Today</li>
                    <li data-range-key="Yesterday">Yesterday</li>
                    <li data-range-key="Last 7 Days">Last 7 Days</li>
                    <li data-range-key="Last 30 Days">Last 30 Days</li>
                    <li data-range-key="This Month">This Month</li>
                    <li data-range-key="Last Month">Last Month</li>
                    <li data-range-key="Custom">Custom</li>
                </ul>
                <div class="range_inputs"><button class="applyBtn btn btn-default btn-small btn-primary" disabled="disabled" type="button">Submit</button>                    <button class="cancelBtn btn btn-default btn-small" type="button">Clear</button></div>
            </div>
        </div>




    </body>

</html>