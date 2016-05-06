
<!DOCTYPE html>
<html class=" ">
    
<head>
        
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>NRHM Admin : Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />

        <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
        <link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">  <!-- For iPhone -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->


        <!-- CORE CSS FRAMEWORK - START -->
        <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/graph.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/detail.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/legend.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/extensions.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/rickshaw.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/lines.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE CSS TEMPLATE - START -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
        <link href="css/map.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->

    </head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
    <body class=" "><!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>

            </div>
            

        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid">

            <!-- SIDEBAR - START -->
            <div class="page-sidebar ">


                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                    <!-- USER INFO - START -->
                    <div class="profile-info row">

                        <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                            <a href="ui-profile.html">
                                <img src="images/user.png" class="img-responsive img-circle">
                            </a>
                        </div>

                        <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                            <h3>
                                <a href="dashboard.php">Admin</a>

                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>

                            <p class="profile-title">Admin</p>

                        </div>

                    </div>
                    <!-- USER INFO - END -->



                    <ul class='wraplist'>   

                        <li class=""> 
                            <a href="patients.php">
                                <i class="fa fa-user-plus"></i>
                                <span class="title">New Patients</span>
                            </a>
                        </li>

                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-edit"></i>
                                <span class="title">New Report</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="mis_report.php">MIS Report</a>
                                </li>
                                <li>
                                    <a class="" href="DMHPFORM1.php">Monitoring of DMHP Report</a>
                                </li>
                                <li>
                                    <a class="" href="epilepsy.php">Epilepsy Report</a>
                                </li>
                                <li>
                                    <a class="" href="suicide.php">Suicide Prevention Clinic Report</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-users"></i>
                                <span class="title">Patients ID</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="patientID.php">Patients List</a>
                                </li>
                                <li>
                                    <a class="" href="OPD.php">OPD Paper</a>
                                </li>
                            </ul>
                        </li>
                        <li class=""> 
                            <a href="javascript:;" onclick="openPage('hr_report.php', 'HR Report')">
                                <i class="fa fa-user-md"></i>
                                <span class="title">HR Report</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="expenditure.php">
                                <i class="fa fa-calculator"></i>
                                <span class="title">Expenditure Report</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="prerna_project/reporting.php">
                                <i class="fa fa-calculator"></i>
                                <span class="title">Prerna Project</span>
                            </a>
                        </li>
                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-gear"></i>
                                <span class="title">Users Settings</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="javascript:;" id="add_user" onclick="openPage('forms/register.html', 'Add New User');">Add User</a>
                                </li>
                                <li>
                                    <a class="" href="javascript:;" id="update_user" onclick="openPage('forms/updateuser.html', 'Update User Data');">Update User</a>
                                </li>
                                <li>
                                    <a class="" href="#" id="user_list" onclick="openPage('forms/users.php', 'Users List');">User List</a>
                                </li>
                            </ul>
                        </li>

                        <li class=""> 
                            <a href="javascript:;">
                                <i class="fa fa-file"></i>
                                <span class="title">Check Reports</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="javascript:;" id="mis_report_link" onclick="openPage('reports/mis_report.php', 'MIS REPORT');">MIS Report</a>
                                </li>
                                <li>
                                    <a class="" href="javascript:;" id="DMHP_report_link" onclick="openPage('reports/DMHP_report.php', 'DMHP REPORT');">Monitoring of DMHP</a>
                                </li>
                                <li>
                                    <a class="" href="javascript:;" id="SPCR_link" onclick="openPage('reports/SPCR.php', 'Suicide Prevention Clinic Report');">Suicide Prevention Clinic Report</a>
                                </li>
                                <li>
                                    <a class="" href="javascript:;" id="epilepsy_report_link" onclick="openPage('reports/epilepsy.php', 'Epilepsy');">Epilepsy Report</a>
                                </li>
                            </ul>
                        </li>

                        <li class=""> 
                            <a href="javascript:;" onclick="openPage('templates/contactus.html', '');">
                                <i class="fa fa-phone"></i>
                                <span class="title">Contact Us</span>
                            </a>
                        </li>

                    </ul>

                </div>
                <!-- MAIN MENU - END -->

            </div>
            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:15px 0 0 15px;'>

                    <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                        <div class="page-title">

                            <div class="pull-left">
                                <h1 class="title">Dashboard</h1>                            </div>


                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="col-lg-12">
                        <section class="box nobox">
                            <div class="content-body">
                                <div class="row">

                                    <div class="col-md-3 col-sm-6 col-xs-12">

                                        <div class="r1_graph1 db_box" id="OPD_chart" style="height:150px">
                                            <!-- <span class='bold'>98.95%</span>
                                            <span class='pull-right'><small>SERVER UP</small></span>
                                            <div class="clearfix"></div>
                                            <span class="db_dynamicbar">Loading...</span> -->
                                        </div>

                                    </div>



                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="r1_graph3 db_box hidden-xs" id="IPD_chart" style="height:150px">
                                           <!--  <span class='bold'>342/123</span>
                                            <span class='pull-right'><small>ORDERS / SALES</small></span>
                                            <div class="clearfix"></div>
                                            <span class="db_compositebar">Loading...</span> -->
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="r1_graph2 db_box" id="IPD_chart" style="height:150px">
                                            <!-- <span class='bold'>2332</span>
                                            <span class='pull-right'><small>USERS ONLINE</small></span>
                                            <div class="clearfix"></div>
                                            <span class="db_linesparkline">Loading...</span> -->
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="r1_graph2 db_box" id="IPD_chart" style="height:150px">
                                            <!-- <span class='bold'>2332</span>
                                            <span class='pull-right'><small>USERS ONLINE</small></span>
                                            <div class="clearfix"></div>
                                            <span class="db_linesparkline">Loading...</span> -->
                                        </div>
                                    </div>

                                </div> <!-- End .row -->

                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                    </div>
                                </div> <!-- End .row -->    



                                <div class="row">
                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                        <div class="r3_notification db_box">
                                            <h4>Notifications <a href="javascript:;" class="pull-right" id="write_msg" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope"></i></a></h4>

                                            <ul class="list-unstyled notification-widget">


                                                <li class="unread status-available">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="data/profile/avatar-1.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Clarine Vassar</strong>
                                                                <span class="time small">- 15 mins ago</span>
                                                                <span class="profile-status available pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-away">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Brooks Latshaw</strong>
                                                                <span class="time small">- 45 mins ago</span>
                                                                <span class="profile-status away pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-busy">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Clementina Brodeur</strong>
                                                                <span class="time small">- 1 hour ago</span>
                                                                <span class="profile-status busy pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-offline">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Carri Busey</strong>
                                                                <span class="time small">- 5 hours ago</span>
                                                                <span class="profile-status offline pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-offline">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Melissa Dock</strong>
                                                                <span class="time small">- Yesterday</span>
                                                                <span class="profile-status offline pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-available">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Verdell Rea</strong>
                                                                <span class="time small">- 14th Mar</span>
                                                                <span class="profile-status available pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-busy">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Linette Lheureux</strong>
                                                                <span class="time small">- 16th Mar</span>
                                                                <span class="profile-status busy pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                                <li class=" status-away">
                                                    <a href="javascript:;">
                                                        <div class="user-img">
                                                            <img src="images/user.png" alt="user-image" class="img-circle img-inline">
                                                        </div>
                                                        <div>
                                                            <span class="name">
                                                                <strong>Araceli Boatright</strong>
                                                                <span class="time small">- 16th Mar</span>
                                                                <span class="profile-status away pull-right"></span>
                                                            </span>
                                                            <span class="desc small">
                                                                Sometimes it takes a lifetime to win a battle.
                                                            </span>
                                                        </div>
                                                    </a>
                                                </li>


                                            </ul>

                                        </div>
                                    </div>      

                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <div class="r3_weather">
                                            <div class="wid-weather wid-weather-small">
                                                <div class="">

                                                    <div class="location">
                                                        <h3>Wardha, India</h3>
                                                        <span>Today, 17<sup>th</sup> March 2016</span>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="degree">
                                                        <i class='fa fa-cloud icon-lg text-white'></i><span>Now</span><h3>29°</h3>
                                                        <div class="clearfix"></div>
                                                        <h4 class="text-white text-center">Sunny</h4>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="weekdays bg-white">
                                                        <ul class="list-unstyled">
                                                            <li><span class='day'>Friday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>37° - 24°</span></li>
                                                            <li><span class='day'>Saturday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>37° - 24°</span></li>
                                                            <li><span class='day'>Sunday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>38° - 28°</span></li>
                                                            <li><span class='day'>Monday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>39° - 26°</span></li>
                                                            <li><span class='day'>Tuesday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>39° - 25°</span></li>
                                                            <li><span class='day'>Wednesday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>38° - 28°</span></li>
                                                            <li><span class='day'>Thursday</span><i class='fa fa-cloud icon-xs'></i><span class='temp'>40° - 29°</span></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>      

                                    <div class="col-md-4 col-sm-6 col-xs-12">

                                        <div class="ultra-widget ultra-todo-task bg-primary">
                                            <div class="wid-task-header">
                                                <div class="wid-icon">
                                                    <i class="fa fa-tasks"></i>
                                                </div>
                                                <div class="wid-text">
                                                    <h4>To do Tasks</h4>
                                                    <span>Wed, <small>11<sup>th</sup> March 2015</small></span>
                                                </div>
                                            </div>
                                            <div class="wid-all-tasks">

                                                <ul class="list-unstyled">

                                                    <li class="checked">
                                                        <input type="checkbox" id="task-1" class="icheck-minimal-white todo-task" checked>
                                                        <label class="icheck-label form-label" for="task-1">Office Projects</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-2" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-2">Generate Invoice</label>
                                                    </li>  

                                                    <li>
                                                        <input type="checkbox" id="task-3" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-3">Ecommerce Theme</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-4" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-4">PHP and jQuery</label>
                                                    </li> 
                                                    <li>
                                                        <input type="checkbox" id="task-5" class="icheck-minimal-white todo-task" >
                                                        <label class="icheck-label form-label" for="task-5">Allocate&nbsp;Resource</label>
                                                    </li> 
                                                </ul>

                                            </div>
                                            <div class="wid-add-task">
                                                <input type="text" class="form-control" placeholder="Add task" />
                                            </div>
                                        </div>


                                    </div>      

                                </div> <!-- End .row -->


                            </div>
                        </section></div>



                </section>
            </section>
            <!-- END CONTENT -->
            <div class="page-chatapi hideit">

                <div class="search-bar">
                    <input type="text" placeholder="Search" class="form-control">
                </div>

                <div class="chat-wrapper">
                    <h4 class="group-head">Groups</h4>
                    <ul class="group-list list-unstyled">
                        <li class="group-row">
                            <div class="group-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Work</a></h4>
                            </div>
                        </li>
                        <li class="group-row">
                            <div class="group-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                            <div class="group-info">
                                <h4><a href="#">Friends</a></h4>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">Favourites</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_1' data-user-id='1'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clarine Vassar</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_2' data-user-id='2'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Brooks Latshaw</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_3' data-user-id='3'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clementina Brodeur</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>


                    <h4 class="group-head">More Contacts</h4>
                    <ul class="contact-list">

                        <li class="user-row" id='chat_user_4' data-user-id='4'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Carri Busey</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_5' data-user-id='5'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Melissa Dock</a></h4>
                                <span class="status offline" data-status="offline"> Offline</span>
                            </div>
                            <div class="user-status offline">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_6' data-user-id='6'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Verdell Rea</a></h4>
                                <span class="status available" data-status="available"> Available</span>
                            </div>
                            <div class="user-status available">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_7' data-user-id='7'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Linette Lheureux</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_8' data-user-id='8'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-3.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Araceli Boatright</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_9' data-user-id='9'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-4.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Clay Peskin</a></h4>
                                <span class="status busy" data-status="busy"> Busy</span>
                            </div>
                            <div class="user-status busy">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_10' data-user-id='10'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-5.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Loni Tindall</a></h4>
                                <span class="status away" data-status="away"> Away</span>
                            </div>
                            <div class="user-status away">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_11' data-user-id='11'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-1.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Tanisha Kimbro</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>
                        <li class="user-row" id='chat_user_12' data-user-id='12'>
                            <div class="user-img">
                                <a href="#"><img src="data/profile/avatar-2.png" alt=""></a>
                            </div>
                            <div class="user-info">
                                <h4><a href="#">Jovita Tisdale</a></h4>
                                <span class="status idle" data-status="idle"> Idle</span>
                            </div>
                            <div class="user-status idle">
                                <i class="fa fa-circle"></i>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>


            <div class="chatapi-windows ">


            </div>    </div>
        <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="assets/js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 

        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->


        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button> -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Write your message</h4>
              </div>
              <div class="modal-body">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-6 col-md-offset-1">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" name="username_email" id="username_email" placeholder="Username / email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control">
                                </div>
                                <div class="form-group">
                                    <textarea name="message_body" id="message_body" placeholder="Your message" class="form-control"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>

        <script type="text/javascript" src="script/common.js"></script>
        <script>
            function openPage(page, title){
                $('.page-title .pull-left .title').html(title);
                $('.content-body').load(page);
            }
        </script>
        <script src="script/canvasjs.min.js"></script>
        <script>
            window.onload = function () {

                CanvasJS.addColorSet("greenShades",
                [//colorSet Array
                    "#fff"          
                ]);

                var OPD_chart = new CanvasJS.Chart("OPD_chart", {
                    colorSet: "greenShades",
                    theme: "theme2",//theme1
                    title:{
                        text: "OPD"              
                    },
                    animationEnabled: false,   // change to true
                    backgroundColor:  "transparent",
                    data: [              
                    {
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [
                            { label: "male",  y: 10  },
                            { label: "female", y: 15  },
                            { label: "child", y: 25  }
                        ]
                    }
                    ]
                });
                OPD_chart.render();
            
                var IPD_chart = new CanvasJS.Chart("IPD_chart", {
                    colorSet: "greenShades",
                    theme: "theme2",//theme1
                    title:{
                        text: "IPD"              
                    },
                    animationEnabled: false,   // change to true
                    backgroundColor:  "transparent",
                    data: [              
                    {
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [
                            { label: "male",  y: 10  },
                            { label: "female", y: 15  },
                            { label: "child", y: 25  }
                        ]
                    }
                    ]
                });
                IPD_chart.render();
            }
        </script>
    </body>

<!-- Mirrored from jaybabani.com/ultra-admin-html/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 06 Oct 2015 08:57:39 GMT -->
</html>
<!-- 
    The objective of this project is to check if the developed web application
    is secure or not.
    The program will test the site against various attacks such as MySql Injection,
    XSS attack, CSRF, etc.
    The program will report if the attacks are successful or not.
 -->
