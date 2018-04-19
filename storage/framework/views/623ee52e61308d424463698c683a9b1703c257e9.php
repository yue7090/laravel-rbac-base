<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard | Dashboard</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <!--Loading bootstrap css-->
    <!-- <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300"> -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/font-awesome/css/font-awesome.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap/css/bootstrap.min.css')); ?>">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/intro.js/introjs.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/calendar/zabuto_calendar.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/sco.message/sco.message.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/intro.js/introjs.css')); ?>">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/animate.css/animate.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-pace/pace.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/iCheck/skins/all.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-notific8/jquery.notific8.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap-daterangepicker/daterangepicker-bs3.css')); ?>">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/themes/style1/orange-blue.css')); ?>" class="default-style">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/themes/style1/orange-blue.css')); ?>" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('css/style-responsive.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-toastr/toastr.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-treetable/stylesheets/jquery.treetable.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/jquery-treetable/stylesheets/jquery.treetable.theme.custom.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('vendors/multi-select/css/multi-select-madmin.css')); ?>">
    <script src="<?php echo e(asset('js/jquery-1.10.2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-migrate-1.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery-ui.js')); ?>"></script>
    <!--loading bootstrap js-->
    <script src="<?php echo e(asset('vendors/bootstrap/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')); ?>"></script>
    <script src="<?php echo e(asset('js/html5shiv.js')); ?>"></script>
    <script src="<?php echo e(asset('js/respond.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/metisMenu/jquery.metisMenu.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/slimScroll/jquery.slimscroll.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery-cookie/jquery.cookie.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/iCheck/icheck.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/iCheck/custom.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery-notific8/jquery.notific8.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery-highcharts/highcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.menu.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery-pace/pace.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/holder/holder.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/responsive-tabs/responsive-tabs.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery-news-ticker/jquery.newsTicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/moment/moment.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <!--CORE JAVASCRIPT-->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <!--LOADING SCRIPTS FOR PAGE-->
    <script src="<?php echo e(asset('vendors/intro.js/intro.js')); ?>"></script>

    <script src="<?php echo e(asset('vendors/calendar/zabuto_calendar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/sco.message/sco.message.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/intro.js/intro.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/layer/layer.js')); ?>"></script>
    <script src="<?php echo e(asset('js/index.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/jquery-toastr/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendors/multi-select/js/jquery.multi-select.js')); ?>"></script>
</head>

<body class="">
<?php echo Toastr::render(); ?>

    <div>
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button><a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">myAdmin</span><span style="display: none" class="logo-text-icon">M</span></a>
                </div>
                <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                    <ul class="nav navbar-nav    ">
                        <li class="active"><a href="index.html">Dashboard</a>
                        </li>
                        <li><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Layouts
&nbsp;<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="layout-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li><a href="layout-right-sidebar.html">Right Sidebar</a>
                                </li>
                                <li><a href="layout-left-sidebar-collapsed.html">Left Sidebar Collasped</a>
                                </li>
                                <li><a href="layout-right-sidebar-collapsed.html">Right Sidebar Collasped</a>
                                </li>
                                <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">More Options</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Second level link</a>
                                        </li>
                                        <li class="dropdown-submenu"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">More Options</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Third level link</a>
                                                </li>
                                                <li><a href="#">Third level link</a>
                                                </li>
                                                <li><a href="#">Third level link</a>
                                                </li>
                                                <li><a href="#">Third level link</a>
                                                </li>
                                                <li><a href="#">Third level link</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Second level link</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-menu-dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">UI Elements
&nbsp;<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li>
                                                    <h3>Neque porro quisquam</h3>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a>
                                                </li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li>
                                                    <h3>Neque porro quisquam</h3>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a>
                                                </li>
                                            </ul>
                                            <ul class="col-md-4 mega-menu-submenu">
                                                <li>
                                                    <h3>Neque porro quisquam</h3>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="mega-menu-dropdown mega-menu-full"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle">Extras
&nbsp;<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="mega-menu-content">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <ul class="col-md-4 mega-menu-submenu">
                                                    <li>
                                                        <h3>Neque porro quisquam</h3>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a>
                                                    </li>
                                                </ul>
                                                <ul class="col-md-4 mega-menu-submenu">
                                                    <li>
                                                        <h3>Neque porro quisquam</h3>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a>
                                                    </li>
                                                </ul>
                                                <ul class="col-md-4 mega-menu-submenu">
                                                    <li>
                                                        <h3>Neque porro quisquam</h3>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Lorem ipsum dolor sit amet</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Consectetur adipisicing elit</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Sed ut perspiciatis unde omnis</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>At vero eos et accusamus et iusto</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Nam libero tempore cum soluta</a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-angle-right"></i>Et harum quidem rerum facilis est</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-5 document-demo">
                                                <ul class="col-md-4 mega-menu-submenu">
                                                    <li><a href="#"><i class="fa fa-info-circle"></i><span>Introduction</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-download"></i><span>Installation</span></a>
                                                    </li>
                                                </ul>
                                                <ul class="col-md-4 mega-menu-submenu">
                                                    <li><a href="#"><i class="fa fa-cog"></i><span>T3 Settings</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-desktop"></i><span>Layout System</span></a>
                                                    </li>
                                                </ul>
                                                <ul class="col-md-4 mega-menu-submenu">
                                                    <li><a href="#"><i class="fa fa-magic"></i><span>Customization</span></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-question-circle"></i><span>FAQs</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar navbar-top-links navbar-right mbn">
                        <li class="dropdown topbar-user">
                            <a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo e(asset('images/gallery/128.jpg')); ?>" alt="" class="img-responsive img-circle" />&nbsp;<span class="hidden-xs"><?php echo e(Auth::guard()->user()->name); ?></span>&nbsp;<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="/backend/loginOut"><i class="fa fa-key"></i>Log Out</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <?php echo $__env->make('backend::layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!--END SIDEBAR MENU-->
            <!--BEGIN CHAT FORM-->
            
            <!--END CHAT FORM-->
            <!--BEGIN PAGE WRAPPER-->
            <div id="page-wrapper">
                <!--BEGIN TITLE & BREADCRUMB PAGE-->
                <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                    <div class="page-header pull-left">
                        <div class="page-title">Dashboard</div>
                    </div>
                    <ol class="breadcrumb page-breadcrumb pull-left">
                        <li><i class="fa fa-home"></i>&nbsp;<a href="index.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="hidden"><a href="#">Dashboard</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;&nbsp;</li>
                        <li class="active">Dashboard</li>
                    </ol>
                    
                    <div class="clearfix"></div>
                </div>
                <!--END TITLE & BREADCRUMB PAGE-->
                <!--BEGIN CONTENT-->
                <div class="page-content">
                <?php echo $__env->yieldContent('content'); ?>
                </div>
    <!--END CONTENT-->
    </div>
    <!--BEGIN FOOTER-->
    <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
    <div id="footer">
        <div class="copyright"> power by <a href="http://www.it5art.com" target="_blank">it5art.com</a> </div>
    </div>
    <!--END FOOTER-->
    <!--END PAGE WRAPPER-->
    </div>
    </div>
</body>

</html>