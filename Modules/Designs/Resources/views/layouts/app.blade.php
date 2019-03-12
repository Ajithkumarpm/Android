<!DOCTYPE html>
<link rel="shortcut icon" type="image/png') }}" sizes="56x56" href="{{asset('Modules/Frontend/Resources/assets/images/icons/icon.png') }}">

<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> {{ config('global.appname')}} Admin Panel :: Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
       <!--  <script src="{{asset('Modules/Designs/Resources/assets/plugins/jquery-1.10.2.min.js') }}" type="text/javascript"></script> -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> 


       
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap/css/bootstrap.min.css') }}"rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}"rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/plugins.min.css') }}"rel="stylesheet" type="text/css" />

        <!-- Rain background -->
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/rain.css') }}"rel="stylesheet" type="text/css" />

        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset('Modules/Designs/Resources/assets/pages/css/login-4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/global/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('Modules/Designs/Resources/assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <script src="{{asset('Modules/Designs/Resources/assets/js/sweetalert.min.js') }}"type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery.min.js') }}"type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/js/jquery.base64.js') }}"type="text/javascript"></script>
        <!-- <script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script> -->
        </head>
    <!-- END HEAD -->

    <body class=" login">
        
        <!-- BEGIN LOGIN -->
      
        <div class="content">
          <!-- BEGIN LOGO -->

            <div class="logo">
           <a href="{{url()->route('login')}}">
                  <img src="{{asset(config('global.logo_admin')) }}" alt="logo" class="img-responsive logo-default" /></a> 
        </div>
        <section class="rain">
            
           @yield('content')
           
        </section> 

        <!-- END LOGO -->
        
        
        </div>
        <!-- END LOGIN -->
        <!-- BEGIN COPYRIGHT -->
        <div class="copyright"> <?php echo date('Y');?> &copy; {{ config('global.appname')}} Admin Panel.   </div>
        <!-- END COPYRIGHT -->
        <!--[if lt IE 9]>
<script src="{{asset('Modules/Designs/Resources/assets/global/plugins/respond.min.js') }}"></script>
<script src="{{asset('Modules/Designs/Resources/assets/global/plugins/excanvas.min.js') }}"></script> 
<script src="{{asset('Modules/Designs/Resources/assets/global/plugins/ie8.fix.min.js') }}"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <!-- rain js -->
        <!-- <script src="{{asset('Modules/Designs/Resources/assets/global/scripts/rain.js') }}" type="text/javascript"></script> -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript') }}"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript') }}"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
        <script src="{{asset('Modules/Designs/Resources/assets/global/plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('Modules/Designs/Resources/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!-- <script src="{{asset('Modules/Designs/Resources/assets/pages/scripts/login-4.min.js') }}" type="text/javascript"></script> -->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
            $(document).ready(function()
            {
                $('#clickmewow').click(function()
                {
                    $('#radio1003').attr('checked', 'checked');
                });
            })
        </script>
    </body>

</html>