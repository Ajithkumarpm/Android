<!DOCTYPE html>
<!-- <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico"> -->
<link rel="icon" type="image/png" sizes="56x56" href="{{asset('Modules/Frontend/Resources/assets/images/icons/icon.png') }}">
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php $sitepath=request()->route()->getAction(); //print_r($sitepath['controller']); 
?> 


<!-- @if($sitepath['controller']=="App\Http\Controllers\PagesController@view") 


@else


@endif -->

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>

        <style>
        .alert1 {
          padding: 20px;
          background-color: #f44336;
          color: white;
        }

        .closebtn1 {
          margin-left: 15px;
          color: white;
          font-weight: bold;
          float: right;
          font-size: 22px;
          line-height: 20px;
          cursor: pointer;
          transition: 0.3s;
        }

        .closebtn1:hover {
          color: black;
        }
        </style>
        <meta charset="utf-8" />
        <title>{{ config('global.sitetitle')}} Admin Panel </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />

        <!-- <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" /> -->


        <!-- font awsome -->
        <link href="{{asset('Modules/Designs/Resources/assets/fontawsome/css/all.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{asset('Modules/Designs/Resources/assets/fontawsome/css/fontawesome.css') }}" rel="stylesheet">



        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/sliderbutton.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/cubeportfolio/css/cubeportfolio.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{asset('Modules/Designs/Resources/assets/global/timepicker/jquery.timepicker.css') }}" rel="stylesheet" type="text/css" />


        <!---custom css -->
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/custom-admin.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->         
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->

        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('Modules/Designs/Resources/assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('Modules/Designs/Resources/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{asset('Modules/Designs/Resources/assets/global/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />


        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.css') }}" rel="stylesheet" type="text/css" />

        <!-- jquery table row sortable-->
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-ui/jquery-ui.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('Modules/Designs/Resources/assets/pages/css/profile.min.css') }}" rel="stylesheet" type="text/css" />
        


        
        
        <!-- jquery table row sortable-->
        <script src="{{asset('Modules/Designs/Resources/assets/js/sweetalert.min.js') }}"type="text/javascript"></script>
      
        <!-- END THEME LAYOUT STYLES -->
        <!-- <link rel="shortcut icon" href="favicon.ico" />  -->
    </head>
         <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
         

    <!-- END HEAD -->


    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="#">
                            <img src="{{asset(config('global.logo')) }}" alt="logo" style="margin-top: -1px;" class="logo-default"/> </a>
                        <div class="menu-toggler sidebar-toggler" style="padding-top: 0px;">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"  data-target=".navbar-collapse">
                        <span></span>
                    </a>

            <!-- END RESPONSIVE MENU TOGGLER -->


            <!--- dashboard user profile and logout-->


                   <!--  <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                       <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                              

                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="#"><i class="icon-user"></i> My Profile
                                        </a>
                                    </li>
                                     <li>
                                        <a href="#"><i class="icon-key"></i> Logout</a>
                                    </li>
                                 
                                   
                                </ul>
                            </li>
                       </ul>
                   </div> -->
            <!--- dashboard user profile and logout-->





                    <!-- BEGIN TOP NAVIGATION MENU -->    


                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element --> 
                    <!--  <?php  //echo $this->element('admin-sidebarleft'); ?>  -->
                    
                 
                    
                     @include('designs::layouts.admin-sidebarleft')
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                   
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">                       


</div>


                        <!-- BEGIN DASHBOARD STATS 1-->

       

             @yield('content')
                      
                        <!-- END DASHBOARD STATS 1-->                      
                     
                     
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                <!-- BEGIN QUICK SIDEBAR -->  
                <!-- END QUICK SIDEBAR -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> <?php echo date('Y');?> &copy; {!! config('global.appname') !!} Online Admin Panel.        
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
        </div>


        <!-- BEGIN QUICK NAV -->
       <!--  <nav class="quick-nav">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>               
             
                <li>
                    <a href="http://keenthemes.com/metronic-theme/changelog/" target="_blank">
                        <span>Changelog</span>
                        <i class="icon-graph"></i>
                    </a>
                </li>
            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav> -->


            <nav class="quick-nav" style="    margin-top: -316px !important;">
            <a class="quick-nav-trigger" href="#0">
                <span aria-hidden="true"></span>
            </a>
            <ul>              
               
                
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                       <span>Logout</span>
                        <i class="icon-graph"></i>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>

            </ul>
            <span aria-hidden="true" class="quick-nav-bg"></span>
        </nav>
      <!-- BEGIN QUICK NAV -->  
        <div class="quick-nav-overlay"></div>
        <!-- END QUICK NAV -->
        <!--[if lt IE 9]>
<script src="<?php //echo $this->request->webroot; ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php //echo $this->request->webroot; ?>assets/global/plugins/excanvas.min.js"></script> 
<script src="<?php //echo $this->request->webroot; ?>assets/global/plugins/ie8.fix.min.js"></script> 
<![endif]-->

        <!-- Font awsome -->

        <script defer src="{{asset('Modules/Designs/Resources/assets/fontawsome/js/all.js') }}"></script> 
        <script defer src="{{asset('Modules/Designs/Resources/assets/fontawsome/js/fontawesome.js') }}"></script>

        <!--load all styles -->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/morris/morris.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/morris/raphael-min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>

        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>

        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>

         <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/ckeditor/ckeditor.js') }}" type="text/javascript"></script>
         <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
         <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('Modules/Designs/Resources/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/pages/scripts/form-validation.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/pages/scripts/jquery.validate.custom.rules.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/pages/scripts/components-bootstrap-select.min.js') }}" type="text/javascript"></script>

        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{asset('Modules/Designs/Resources/assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/layouts/layout/scripts/demo.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>

        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js') }}" type="text/javascript"></script>

        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootbox/bootbox.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/fancybox/source/jquery.fancybox.pack.js') }}" type="text/javascript"></script>


        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}" type="text/javascript">
        </script>

        <!-- jquery table row sortable-->
         <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
        <!-- jquery table row sortable-->
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/pages/scripts/portfolio-1.min.js') }}" type="text/javascript"></script>

        <script src="{{asset('Modules/Designs/Resources/assets/global/timepicker/jquery.timepicker.js') }}" type="text/javascript"></script>



        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function(){
                $('#clickmewow').click(function(){
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>
</html>