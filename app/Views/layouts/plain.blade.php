<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Avenxo Admin Theme - shared on themelock.com</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="KaijuThemes">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600'
        rel='stylesheet'>

    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet"> <!-- Themify Icons -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet"> <!-- Core CSS with all styles -->

    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet"> <!-- Code Prettifier -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet"> <!-- iCheck -->

    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->

    <link type="text/css" href="assets/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet">
    <link type="text/css" href="assets/plugins/datatables/dataTables.themify.css" rel="stylesheet">

</head>

<body class="animated-content">

    <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

        <div class="logo-area">
            <span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
                <a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
                    <span class="icon-bg">
                        <i class="ti ti-menu"></i>
                    </span>
                </a>
            </span>

            <a class="navbar-brand" href="index.html">Avenxo</a>

            <div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
                <div class="input-group">
                    <span class="input-group-btn"><button class="btn" type="button"><i
                                class="ti ti-search"></i></button></span>
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn"><button class="btn" type="button"><i
                                class="ti ti-close"></i></button></span>
                </div>
            </div>

        </div><!-- logo-area -->

        <ul class="nav navbar-nav toolbar pull-right">

            <li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
                <a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
            </li>

            <li class="toolbar-icon-bg hidden-xs">
                <a href="#"><span class="icon-bg"><i class="ti ti-world"></i></span></i></a>
            </li>

            <li class="toolbar-icon-bg hidden-xs">
                <a href="#"><span class="icon-bg"><i class="ti ti-view-grid"></i></span></i></a>
            </li>

            <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
                <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i
                            class="ti ti-fullscreen"></i></span></i></a>
            </li>

            <li class="dropdown toolbar-icon-bg hidden-xs">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span
                        class="icon-bg"><i class="ti ti-email"></i></span><span
                        class="badge badge-deeporange">2</span></a>
                <div class="dropdown-menu notifications arrow">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="scroll-pane">
                        <ul class="media-list scroll-content">
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Vincent Keller</strong> <span
                                                class="text-gray">‒ Design should be ...</span></h4>
                                        <span class="notification-time">2 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Frend Pratt</strong> <span
                                                class="text-gray">‒ I will start with the ...</span></h4>
                                        <span class="notification-time">40 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Cynthia Hines</strong> <span
                                                class="text-gray">‒ Interior bits are ...</span></h4>
                                        <span class="notification-time">6 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Robin Horton</strong> <span
                                                class="text-gray">‒ Are you even ...</span></h4>
                                        <span class="notification-time">8 days ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Amanda Torrez</strong> <span
                                                class="text-gray">‒ The message is ...</span></h4>
                                        <span class="notification-time">16 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Khan Farhan</strong> <span
                                                class="text-gray">‒ Expected the stuff ...</span></h4>
                                        <span class="notification-time">2 days ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-message">
                                <a href="#">
                                    <div class="media-left">
                                        <img class="img-circle avatar" src="http://placehold.it/300&text=Placeholder"
                                            alt="" />
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading"><strong>Will Whedon</strong> <span
                                                class="text-gray">‒ The movie of this ...</span></h4>
                                        <span class="notification-time">4 days ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">See all messages</a>
                    </div>
                </div>
            </li>

            <li class="dropdown toolbar-icon-bg">
                <a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span
                        class="icon-bg"><i class="ti ti-bell"></i></span><span
                        class="badge badge-deeporange">2</span></a>
                <div class="dropdown-menu notifications arrow">
                    <div class="topnav-dropdown-header">
                        <span>Notifications</span>
                    </div>
                    <div class="scroll-pane">
                        <ul class="media-list scroll-content">
                            <li class="media notification-success">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="ti ti-check"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Update 1.0.4 successfully pushed</h4>
                                        <span class="notification-time">8 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-info">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="ti ti-check"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Update 1.0.3 successfully pushed</h4>
                                        <span class="notification-time">24 mins ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-teal">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="ti ti-check"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Update 1.0.2 successfully pushed</h4>
                                        <span class="notification-time">16 hours ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-indigo">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="ti ti-check"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Update 1.0.1 successfully pushed</h4>
                                        <span class="notification-time">2 days ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="media notification-danger">
                                <a href="#">
                                    <div class="media-left">
                                        <span class="notification-icon"><i class="ti ti-arrow-up"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="notification-heading">Initial Release 1.0</h4>
                                        <span class="notification-time">4 days ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="#">See all notifications</a>
                    </div>
                </div>
            </li>

            <li class="dropdown toolbar-icon-bg">
                <a href="#" class="dropdown-toggle username" data-toggle="dropdown">
                    <img class="img-circle" src="http://placehold.it/300&text=Placeholder" alt="" />
                </a>
                <ul class="dropdown-menu userinfo arrow">
                    <li><a href="#/"><i class="ti ti-user"></i><span>Profile</span><span
                                class="badge badge-info pull-right">80%</span></a></li>
                    <li><a href="#/"><i class="ti ti-panel"></i><span>Account</span></a></li>
                    <li><a href="#/"><i class="ti ti-settings"></i><span>Settings</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#/"><i class="ti ti-stats-up"></i><span>Earnings</span></a></li>
                    <li><a href="#/"><i class="ti ti-view-list-alt"></i><span>Statement</span></a></li>
                    <li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#/"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
                </ul>
            </li>

        </ul>

    </header>

    <div id="wrapper">
        <div id="layout-static">
            <div class="static-sidebar-wrapper sidebar-default">
                <div class="static-sidebar">
                    <div class="sidebar">
                        <div class="widget">
                            <div class="widget-body">
                                <div class="userinfo">
                                    <div class="avatar">
                                        <img src="http://placehold.it/300&text=Placeholder"
                                            class="img-responsive img-circle">
                                    </div>
                                    <div class="info">
                                        <span class="username">Jonathan Smith</span>
                                        <span class="useremail">jon@avenxo.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget stay-on-collapse" id="widget-sidebar">
                            <nav role="navigation" class="widget-body">
                                <ul class="acc-menu">
                                    <li class="nav-separator"><span>Explore</span></li>
                                    <li><a href="index.html"><i class="ti ti-home"></i><span>Dashboard</span><span
                                                class="badge badge-teal">2</span></a></li>
                                    <li><a href="angular/app/"><i
                                                class="ti ti-shield"></i><span>AngularJS</span></span></a></li>
                                    <li><a href="javascript:;"><i class="ti ti-layout"></i><span>Layout</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="layout-grids.html">Grid Scaffolding</a></li>
                                            <li><a href="layout-static-leftbar.html">Static Sidebar</a></li>
                                            <li><a href="layout-sidebar-scroll.html">Scroll Sidebar</a></li>
                                            <li><a href="layout-horizontal.html">Horizontal Nav</a></li>
                                            <li><a href="layout-boxed.html">Boxed</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i class="ti ti-view-list-alt"></i><span>UI
                                                Kit</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="ui-typography.html">Typography</a></li>
                                            <li><a href="ui-buttons.html">Buttons</a></li>
                                            <li><a href="ui-modals.html">Modal</a></li>
                                            <li><a href="ui-progress.html">Progress</a></li>
                                            <li><a href="ui-paginations.html">Paginations</a></li>
                                            <li><a href="ui-breadcrumbs.html">Breadcrumbs</a></li>
                                            <li><a href="ui-labelsbadges.html">Labels &amp; Badges</a></li>
                                            <li><a href="ui-alerts.html">Alerts</a></li>
                                            <li><a href="ui-tabs.html">Tabs</a></li>
                                            <li><a href="ui-wells.html">Wells</a></li>
                                            <li><a href="ui-icons-fontawesome.html">FontAwesome Icons</a></li>
                                            <li><a href="ui-icons-themify.html">Themify Icons</a></li>
                                            <li><a href="ui-helpers.html">Helpers</a></li>
                                            <li><a href="ui-imagecarousel.html">Images &amp; Carousel</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i
                                                class="ti ti-control-shuffle"></i><span>Components</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="ui-tiles.html">Tiles</a></li>
                                            <li><a href="custom-skylo.html">Page Progress</a></li>
                                            <li><a href="custom-bootbox.html">Bootbox</a></li>
                                            <li><a href="custom-pines.html">Pines Notification</a></li>
                                            <li><a href="custom-pulsate.html">Pulsate</a></li>
                                            <li><a href="custom-knob.html">jQuery Knob</a></li>
                                            <li><a href="custom-ionrange.html">Ion Range Slider</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i class="ti ti-pencil"></i><span>Forms</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="ui-forms.html">Form Layout</a></li>
                                            <li><a href="form-components.html">Form Components</a></li>
                                            <li><a href="form-pickers.html">Pickers</a></li>
                                            <li><a href="form-wizard.html">Form Wizard</a></li>
                                            <li><a href="form-validation.html">Form Validation</a></li>
                                            <li><a href="form-masks.html">Form Masks</a></li>
                                            <li><a href="form-dropzone.html">Dropzone Uploader</a></li>
                                            <li><a href="form-summernote.html">Summernote</a></li>
                                            <li><a href="form-markdown.html">Markdown Editor</a></li>
                                            <li><a href="form-xeditable.html">Inline Editor</a></li>
                                            <li><a href="form-gridforms.html">Grid Forms</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:;"><i class="ti ti-settings"></i><span>Panels</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="ui-panels.html">Panels</a></li>
                                            <li><a href="ui-advancedpanels.html">Draggable Panels</a></li>
                                        </ul>
                                    <li><a href="javascript:;"><i
                                                class="ti ti-layout-grid3"></i><span>Tables</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="ui-tables.html">Basic Tables</a></li>
                                            <li><a href="tables-responsive.html">Responsive Tables</a></li>
                                            <li><a href="tables-editable.html">Editable Tables</a></li>
                                            <li><a href="tables-data.html">Data Tables</a></li>
                                            <li><a href="tables-fixedheader.html">Fixed Header Tables</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i
                                                class="ti ti-stats-up"></i><span>Analytics</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="charts-flot.html">Flot</a></li>
                                            <li><a href="charts-sparklines.html">Sparklines</a></li>
                                            <li><a href="charts-morris.html">Morris.js</a></li>
                                            <li><a href="charts-easypiechart.html">Easy Pie Chart</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i class="ti ti-map-alt"></i><span>Maps</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="maps-google.html">Google Maps</a></li>
                                            <li><a href="maps-jvectormap.html">jVectorMap</a></li>
                                            <li><a href="maps-mapael.html">Mapael</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:;"><i class="ti ti-file"></i><span>Pages</span></a>
                                        <ul class="acc-menu">
                                            <li><a href="extras-profile.html">Profile</a></li>
                                            <li><a href="extras-invoice.html">Invoice</a></li>
                                            <li><a href="javascript:;">Email Templates</a>
                                                <ul class="acc-menu">
                                                    <li><a href="responsive-email/basic.html">Basic</a></li>
                                                    <li><a href="responsive-email/hero.html">Hero</a></li>
                                                    <li><a href="responsive-email/sidebar.html">Sidebar</a></li>
                                                    <li><a href="responsive-email/sidebar-hero.html">Sidebar Hero</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="extras-faq.html">FAQ</a></li>
                                            <li><a href="extras-registration.html">Registration</a></li>
                                            <li><a href="extras-forgotpassword.html">Password Reset</a></li>
                                            <li><a href="extras-login.html">Login</a></li>
                                            <li><a href="extras-404.html">404 Page</a></li>
                                            <li><a href="extras-500.html">500 Page</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-separator"><span>Extras</span></li>
                                    <li><a href="app-inbox.html"><i class="ti ti-email"></i><span>Inbox</span><span
                                                class="badge badge-danger">3</span></a></li>
                                    <li><a href="extras-calendar.html"><i
                                                class="ti ti-calendar	"></i><span>Calendar</span><span
                                                class="badge badge-orange">1</span></a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="widget" id="widget-progress">
                            <div class="widget-heading">
                                Progress
                            </div>
                            <div class="widget-body">

                                <div class="mini-progressbar">
                                    <div class="clearfix mb-sm">
                                        <div class="pull-left">Bandwidth</div>
                                        <div class="pull-right">50%</div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-lime" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="mini-progressbar">
                                    <div class="clearfix mb-sm">
                                        <div class="pull-left">Storage</div>
                                        <div class="pull-right">25%</div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="static-content-wrapper">
                <div class="static-content">
                    <div class="page-content">
                        <ol class="breadcrumb">

                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Advanced Tables</a></li>
                            <li class="active"><a href="tables-data.html">Data Tables</a></li>

                        </ol>
                        <div class="container-fluid">


                            <div class="alert alert-info">
                                <h3>DataTables <small>Table plug-in for jQuery</small></h3>
                                <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible
                                    tool, based upon the foundations of progressive enhancement, and will add advanced
                                    interaction controls to any HTML table.</p>
                            </div>
                            <div data-widget-group="group1">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h2>Data Tables</h2>
                                                <div class="panel-ctrls"></div>
                                            </div>
                                            <div class="panel-body no-padding">
                                                <table id="example" class="table table-striped table-bordered"
                                                    cellspacing="0" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Rendering engine</th>
                                                            <th>Browser</th>
                                                            <th>Platform(s)</th>
                                                            <th>Engine version</th>
                                                            <th>CSS grade</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="odd gradeX">
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 4.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center"> 4</td>
                                                            <td class="center">X</td>
                                                        </tr>
                                                        <tr class="even gradeC">
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 5.0</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 5.5</td>
                                                            <td>Win 95+</td>
                                                            <td class="center">5.5</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>Trident</td>
                                                            <td>Internet
                                                                Explorer 6</td>
                                                            <td>Win 98+</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="odd gradeA">
                                                            <td>Trident</td>
                                                            <td>Internet Explorer 7</td>
                                                            <td>Win XP SP2+</td>
                                                            <td class="center">7</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="even gradeA">
                                                            <td>Trident</td>
                                                            <td>AOL browser (AOL desktop)</td>
                                                            <td>Win XP</td>
                                                            <td class="center">6</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td class="center">1.7</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 1.5</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 2.0</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Firefox 3.0</td>
                                                            <td>Win 2k+ / OSX.3+</td>
                                                            <td class="center">1.9</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Camino 1.0</td>
                                                            <td>OSX.2+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Camino 1.5</td>
                                                            <td>OSX.3+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Netscape 7.2</td>
                                                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                                                            <td class="center">1.7</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Netscape Browser 8</td>
                                                            <td>Win 98SE+</td>
                                                            <td class="center">1.7</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Netscape Navigator 9</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.1</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1.1</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.2</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1.2</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.3</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1.3</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.4</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1.4</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.5</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1.5</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.6</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">1.6</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.7</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td class="center">1.7</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Mozilla 1.8</td>
                                                            <td>Win 98+ / OSX.1+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Seamonkey 1.1</td>
                                                            <td>Win 98+ / OSX.2+</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Gecko</td>
                                                            <td>Epiphany 2.20</td>
                                                            <td>Gnome</td>
                                                            <td class="center">1.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 1.2</td>
                                                            <td>OSX.3</td>
                                                            <td class="center">125.5</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 1.3</td>
                                                            <td>OSX.3</td>
                                                            <td class="center">312.8</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 2.0</td>
                                                            <td>OSX.4+</td>
                                                            <td class="center">419.3</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>Safari 3.0</td>
                                                            <td>OSX.4+</td>
                                                            <td class="center">522.1</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>OmniWeb 5.5</td>
                                                            <td>OSX.4+</td>
                                                            <td class="center">420</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>iPod Touch / iPhone</td>
                                                            <td>iPod</td>
                                                            <td class="center">420.1</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Webkit</td>
                                                            <td>S60</td>
                                                            <td>S60</td>
                                                            <td class="center">413</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 7.0</td>
                                                            <td>Win 95+ / OSX.1+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 7.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 8.0</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 8.5</td>
                                                            <td>Win 95+ / OSX.2+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 9.0</td>
                                                            <td>Win 95+ / OSX.3+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 9.2</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera 9.5</td>
                                                            <td>Win 88+ / OSX.3+</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Opera for Wii</td>
                                                            <td>Wii</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Nokia N800</td>
                                                            <td>N800</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Presto</td>
                                                            <td>Nintendo DS browser</td>
                                                            <td>Nintendo DS</td>
                                                            <td class="center">8.5</td>
                                                            <td class="center">C/A<sup>1</sup></td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.1</td>
                                                            <td>KDE 3.1</td>
                                                            <td class="center">3.1</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.3</td>
                                                            <td>KDE 3.3</td>
                                                            <td class="center">3.3</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>KHTML</td>
                                                            <td>Konqureror 3.5</td>
                                                            <td>KDE 3.5</td>
                                                            <td class="center">3.5</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 4.5</td>
                                                            <td>Mac OS 8-9</td>
                                                            <td class="center">-</td>
                                                            <td class="center">X</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.1</td>
                                                            <td>Mac OS 7.6-9</td>
                                                            <td class="center">1</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Tasman</td>
                                                            <td>Internet Explorer 5.2</td>
                                                            <td>Mac OS 8-X</td>
                                                            <td class="center">1</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Misc</td>
                                                            <td>NetFront 3.1</td>
                                                            <td>Embedded devices</td>
                                                            <td class="center">-</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="gradeA">
                                                            <td>Misc</td>
                                                            <td>NetFront 3.4</td>
                                                            <td>Embedded devices</td>
                                                            <td class="center">-</td>
                                                            <td class="center">A</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Misc</td>
                                                            <td>Dillo 0.8</td>
                                                            <td>Embedded devices</td>
                                                            <td class="center">-</td>
                                                            <td class="center">X</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Misc</td>
                                                            <td>Links</td>
                                                            <td>Text only</td>
                                                            <td class="center">-</td>
                                                            <td class="center">X</td>
                                                        </tr>
                                                        <tr class="gradeX">
                                                            <td>Misc</td>
                                                            <td>Lynx</td>
                                                            <td>Text only</td>
                                                            <td class="center">-</td>
                                                            <td class="center">X</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Misc</td>
                                                            <td>IE Mobile</td>
                                                            <td>Windows Mobile 6</td>
                                                            <td class="center">-</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="gradeC">
                                                            <td>Misc</td>
                                                            <td>PSP browser</td>
                                                            <td>PSP</td>
                                                            <td class="center">-</td>
                                                            <td class="center">C</td>
                                                        </tr>
                                                        <tr class="gradeU">
                                                            <td>Other browsers</td>
                                                            <td>All others</td>
                                                            <td>-</td>
                                                            <td class="center">-</td>
                                                            <td class="center">U</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="panel-footer"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- .container-fluid -->
                    </div> <!-- #page-content -->
                </div>
                <footer role="contentinfo">
                    <div class="clearfix">
                        <ul class="list-unstyled list-inline pull-left">
                            <li>
                                <h6 style="margin: 0;">&copy; 2015 Avenxo</h6>
                            </li>
                        </ul>
                        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i
                                class="ti ti-arrow-up"></i></button>
                    </div>
                </footer>

            </div>
        </div>
    </div>


    <!-- Switcher -->
    <div class="demo-options">
        <div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
        <div class="demo-heading">Demo Settings</div>

        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Fixed Header</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked
                            data-size="mini" data-on-color="success" data-off-color="default"
                            name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Boxed Layout</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox"
                            data-size="mini" data-on-color="success" data-off-color="default"
                            name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Collapse Leftbar</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox"
                            data-size="mini" data-on-color="success" data-off-color="default"
                            name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
            </div>
        </div>

        <div class="demo-body">
            <div class="option-title">Topnav</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li>
                <li><span class="demo-purple"></span></li>
                <li><span class="demo-pink"></span></li>
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li>
                <li><span class="demo-gray"></span></li>
                <li><span class="demo-graylight"></span></li>
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Sidebar</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li>
                <li><span class="demo-purple"></span></li>
                <li><span class="demo-pink"></span></li>
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li>
                <li><span class="demo-gray"></span></li>
                <li><span class="demo-graylight"></span></li>
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>



    </div>
    <!-- /Switcher -->
    <!-- Load site level scripts -->

    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

    <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> <!-- Load jQuery -->
    <script type="text/javascript" src="assets/js/jqueryui-1.10.3.min.js"></script> <!-- Load jQueryUI -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> <!-- Load Bootstrap -->
    <script type="text/javascript" src="assets/js/enquire.min.js"></script> <!-- Load Enquire -->

    <script type="text/javascript" src="assets/plugins/velocityjs/velocity.min.js"></script> <!-- Load Velocity for Animated Content -->
    <script type="text/javascript" src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

    <script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script> <!-- Wijet -->

    <script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> <!-- Code Prettifier  -->
    <script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> <!-- Swith/Toggle Button -->

    <script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script> <!-- Bootstrap Tabdrop -->

    <script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script> <!-- iCheck -->

    <script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

    <script type="text/javascript" src="assets/js/application.js"></script>
    <script type="text/javascript" src="assets/demo/demo.js"></script>
    <script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

    <!-- End loading site level scripts -->

    <!-- Load page level scripts-->

    <script type="text/javascript" src="assets/plugins/datatables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="assets/demo/demo-datatables.js"></script>

    <!-- End loading page level scripts-->

</body>

</html>
