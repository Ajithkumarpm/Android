<?php $sitepath=request()->route()->getAction();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
@if($sitepath['controller']=="App\Http\Controllers\PagesController@index") 
<title>{{config('global.sitetitle')}}{{$settings['meta_title']}}</title>
<meta name="Title" content="{{$settings['meta_title']}}">
<meta name="description" content="{{$settings['meta_description']}}">
<meta name="keywords" content="{{$settings['meta_keyword']}}">
@elseif($sitepath['controller']=="App\Http\Controllers\PagesController@aboutus") 
<title>{{config('global.sitetitle')}}{{$settings['about_title']}}</title>
<meta name="Title" content="{{$settings['about_title']}}">
<meta name="description" content="{{$settings['about_description']}}">
<meta name="keywords" content="{{$settings['about_keyword']}}">
@elseif($sitepath['controller']=="App\Http\Controllers\PagesController@contactus") 
<title>{{config('global.sitetitle')}}{{$settings['contact_title']}}</title>
<meta name="Title" content="{{$settings['contact_title']}}">
<meta name="description" content="{{$settings['contact_description']}}">
<meta name="keywords" content="{{$settings['contact_keyword']}}">
@elseif($sitepath['controller']=="App\Http\Controllers\PagesController@details") 
    @if(empty($product_seos))
        <title>{{config('global.sitetitle')}}{{$products['title']}}</title>
        <meta name="Title" content="{{$products['title']}}">
        <meta name="description" content="{{$products['description']}}">
    @else
        <title>{{config('global.sitetitle')}}{{$product_seos[0]['meta_title']}}</title>
        <meta name="Title" content="{{$product_seos[0]['meta_title']}}">
        <meta name="description" content="{{$product_seos[0]['meta_description']}}">
        <meta name="keywords" content="{{$product_seos[0]['meta_keyword']}}">
    @endif
@else
<title>{{config('global.sitetitle')}}The largest suppliers of Tyre retreading materials in Asia.</title>
@endif
<!-- Bootstrap -->
<link href="https://fonts.googleapis.com/css?family=Exo:300,400,500,800,900|Open+Sans:400,600,700,800" rel="stylesheet">
<link href="{{ URL::asset('resources/assets/frontent/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('resources/assets/frontent/css/style.css') }}" rel="stylesheet">
<link href="{{ URL::asset('resources/assets/frontent/css/font-awesome.css') }}" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel=stylesheet href="{{ URL::asset('resources/assets/frontent/css/slippry.css')}}">
<link href="{{ URL::asset('resources/assets/frontent/css/owl.carousel.css') }}" rel=stylesheet>
<link href="{{ URL::asset('resources/assets/frontent/css/owl.theme.css') }}" rel=stylesheet>
<link href="{{ URL::asset('resources/assets/frontent/css/ionicons.css') }}" rel=stylesheet>
<link href="{{ URL::asset('resources/assets/frontent/css/custom.css') }}" rel=stylesheet>
<!-- <link href="{{ URL::asset('resources/assets/global/css/plugins.min.css') }}" rel=stylesheet> -->
<link href="{{ URL::asset('resources/assets/global/plugins/nouislider/nouislider.min.css') }}" rel=stylesheet>

<style>
.yamm-content a:hover{text-decoration:none!important;}
</style>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ URL::asset('resources/assets/frontent/js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/jquery.bootstrap.newsbox.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/zoombox.js')}}"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/jquery.validate.custom.rules.js') }}" type="text/javascript"></script>
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script> 
<script>
$(function() {
    $(window).on("scroll", function() {
        if($(window).scrollTop() > 50) {
            $(".outtertopdiv").addClass("activebg");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
           $(".outtertopdiv").removeClass("activebg");
        }
    });
});
</script>
<style>
</style>
</head>
<body>
<?php
use App\categories;
$navbar=categories::getNavBar();
?>

<div class="wrapper">   

  <div class="topseccontainer">
  <div class="container">
  <div class="row">
  <div class="col-md-6 icontoppadding"><div class="headerdiv phonetext"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;+91-481-2561215</div>
  <div class="headerdiv emailtext"><a href="mailto:info@midas.co.in"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; info@midas.co.in</a></div>
  </div>
  <div class="col-md-6 text-right icons-top">
  <a href="https://www.facebook.com/pages/category/Community/Midas-mileage-111360942308329/ " target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a> 
 </div>
  </div>
  </div>
  </div>


@if($sitepath['controller']=="App\Http\Controllers\PagesController@index") 
<div class="outtertopdiv fixed-top">
@else
<div class="outtertopdiv innerheader"> 
 @endif
<!-- <div class="outtertopdiv innerheader"> -->
<div class="container">
<div class="clearfix"></div>
<div class="navbar-wrapper">
<div class="container">

<div class="navbar navbar-default yamm">
<div class=navbar-header>
<button type=button data-toggle=collapse data-target="#navbar-collapse-2" class=navbar-toggle><span class=icon-bar></span><span class=icon-bar></span><span class=icon-bar></span></button>
<a class="navbar-brand" href="{{ config('global.basepath') }}"><img src="{{ URL::asset('resources/assets/frontent/images/logo.png') }}"alt="" class="img-responsive"></a>
</div>

<div id=navbar-collapse-2 class="navbar-collapse collapse">
<ul class="nav navbar-nav">
@if($sitepath['controller']=="App\Http\Controllers\PagesController@index") 
<li class="active1"><a href="{{ config('global.basepath') }}">HOME</a></li>
@else
<li><a href="{{ config('global.basepath') }}">HOME</a></li>
@endif

@if($sitepath['controller']=="App\Http\Controllers\PagesController@aboutus") 
<li class="active1"><a href="{{ config('global.basepath') }}">ABOUT US</a></li>
@else
<li><a href="{{ config('global.basepath') }}./about-us">ABOUT US</a></li>
@endif
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS <b class="caret"></b></a>
<ul class="dropdown-menu">
@foreach($navbar as $cat) 
<li><a href="{{url('categories/').'/'.$cat['sefurl']}}"> <span class="shtext">{{$cat['name']}}</span></a></li>
<li class="divider"></li>
@endforeach            
</ul>
</li>
@if($sitepath['controller']=="App\Http\Controllers\PagesController@contactus") 
<li class="active1"><a href="{{ config('global.basepath') }}">CONTACT US</a></li>
@else
<li><a href="{{ config('global.basepath') }}./contact-us">CONTACT US</a></li>
@endif



<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">BROCHURES <b class="caret"></b></a>
<ul class="dropdown-menu">

<li><a href="https://drive.google.com/file/d/0B6z9ymLI_gTUei03dWdna0Y1ZzA/view" target="_blank">Domestic Designs</a></li>
<li class="divider"></li>
<li><a  href="https://drive.google.com/file/d/0B6z9ymLI_gTUSU1aX285WVlfcjA/view" target="_blank">Export Designs</a></li>
<li class="divider"></li>
<li><a href="https://drive.google.com/file/d/0B6z9ymLI_gTUcE5LczdLWjU2Vmc/view" target="_blank">Envelopes Curing Bags</a></li>
<li class="divider"></li>
        
</ul>
</li>

</ul>
</div>
</div>   
    </div>
  </div><!-- /container -->
</div><!-- /navbar wrapper --><div style="clear:both;"></div>
 </div><div style="clear:both;"></div>
<!-- Header Section Ends --> 
</div>

@yield('content')


<div class="footer"> 
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 footer-padding-bottom"><span class="footertitle">Company</span><br/><br/>
<span class="fmenutxt">
<a href="{{url('/')}}">Home</a><br/>
<a href="{{url('/about-us')}}">About Us</a><br/>
<a href="{{url('/categories')}}">Products</a><br/>
<a href="{{url('/contact-us')}}">Contact Us</a><br/>
<a href="{{url('/privacy-policy')}}">Privacy Policy</a><br/>
<a href="{{url('/terms-of-use')}}">Terms of Use</a><br/>
</span>
</div>
{!! Form::open(array('url' => '/pages/quickcontact', 'class' => 'form-horizontal','id'=>'ConcactForm','enctype'=>'multipart/form-data','method'=>'POST')) !!} 
{{Form::token()}}

<div class="col-md-3 col-sm-6 footer-padding-bottom"><span class="footertitle">Quick Contact</span><br/><br/>
<input name="name" type="text" class="ftxtfield" placeholder="Name*">
<input name="email" type="text" class="ftxtfield" placeholder="Email*">
<textarea name="message" cols="" rows="" class="txtarea" placeholder="Message*"></textarea><br/>
<input type="submit" class="butsubmit" value="Submit">
</div>
{!! Form::close() !!}


<div class="col-md-3 col-sm-6 footer-padding-bottom"><span class="footertitle">Address</span><br/><br/>
<span class="fmenutxt">
Midas Mileage,<br/>
Midas Marketing Building<br/>
V/796A Mariathuruthu P.O,<br/> 
Kottayam, Kerala, <br/>
INDIA - 686 017<br/>
Tel: +91-481-2561215<br/>
Fax: +91-481-2561155<br/>
Email: info@midastreads.com<br/>
</span><br/><br/>

<!--<span class="footertitle">Customer Support</span><br/><br/>
<div class="socialicons"> <a href="https://www.facebook.com/QRSRetail/" target="_blank"> <i class="fa fa-facebook" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp; <a href="https://twitter.com/QRSRetailLtd" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp; <i class="fa fa-google-plus" aria-hidden="true"></i> </div>-->
</div>
<div class="col-md-3 col-sm-6 footer-padding-bottom"><span class="footertitle">Certifications</span><br/><br/>
<span class="fmenutxt">

<img src="{{ URL::asset('resources/assets/frontent/images/cert1.jpg') }}" alt=""> <br/><br/><img src="{{ URL::asset('resources/assets/frontent/images/cert2.jpg') }}" alt=""> </span>
</div>
</div>
</div>
</div>
 <!--Footer Section Starts-->      
<div class="footerstep2">
  <div class="container">
    <div class="row">
    <div class="col-md-6 text-left">
     Copyright @ {{date('Y')}}- Midas Mileage, All rights reserved.
     
     </div>
     <div class="col-md-6 text-right">
     Powered by <a href="http://www.tarjima.com/" target="_blank"><img src="{{ URL::asset('resources/assets/frontent/images/tarjima_logo.png') }}" width="70" height="22" alt=""></a>
     
     </div>
     </div>
     </div>
     </div>
     
     

<!--Footer Section Ends-->
</div>

<script src="{{ URL::asset('resources/assets/frontent/js/megamenu.js') }}"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/slippry.min.js') }}"></script>
<script>$(function(){var demo1=$("#demo1").slippry({});$('.stop').click(function(){demo1.stopAuto();});$('.start').click(function(){demo1.startAuto();});$('.prev').click(function(){demo1.goToPrevSlide();return false;});$('.next').click(function(){demo1.goToNextSlide();return false;});$('.reset').click(function(){demo1.destroySlider();return false;});$('.reload').click(function(){demo1.reloadSlider();return false;});$('.init').click(function(){demo1=$("#demo1").slippry();return false;});});</script>
<script src="{{ URL::asset('resources/assets/frontent/js/owl.carousel.js') }}"></script> 
<script>
$(document).ready(function(){var owl=$("#owl-demo");owl.owlCarousel({autoPlay : 5000,});$(".next5").click(function(){owl.trigger('owl.next');})
$(".prev5").click(function(){owl.trigger('owl.prev');})
$(".play").click(function(){owl.trigger('owl.play',1000);})
$(".stop").click(function(){owl.trigger('owl.stop');})});

// $(document).ready(function(){var owl=$("#owl-demo3");owl.owlCarousel();$(".next").click(function(){owl.trigger('owl.next');})
// $(".prev3").click(function(){owl.trigger('owl.prev');})
// $(".play").click(function(){owl.trigger('owl.play',1000);})
// $(".stop").click(function(){owl.trigger('owl.stop');})});


$(document).ready(function(){var owl=$("#owl-demo3");owl.owlCarousel({items : 4,
        itemsCustom : false,
        autoPlay : 5000,
        itemsDesktop : [1199, 3],
        itemsDesktopSmall : [991, 2],
        itemsTablet : [767, 2],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,
        itemsScaleUp : false});$(".next3").click(function(){owl.trigger('owl.next');})
$(".prev3").click(function(){owl.trigger('owl.prev');})
$(".play").click(function(){owl.trigger('owl.play',1000);})
$(".stop").click(function(){owl.trigger('owl.stop');})});



$(document).ready(function(){var owl=$("#owl-demo4");owl.owlCarousel({items : 1,
        itemsCustom : false,
        autoPlay : 5000,
        itemsDesktop : [1199, 1],
        itemsDesktopSmall : [991, 1],
        itemsTablet : [767, 1],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,
        itemsScaleUp : false});$(".next4").click(function(){owl.trigger('owl.next');})
$(".prev4").click(function(){owl.trigger('owl.prev');})
$(".play").click(function(){owl.trigger('owl.play',1000);})
$(".stop").click(function(){owl.trigger('owl.stop');})});





$(document).ready(function(){var owl=$("#owl-demo1");owl.owlCarousel({items : 2,
        itemsCustom : false,
        itemsDesktop : [1199, 2],
        itemsDesktopSmall : [991, 2],
        itemsTablet : [767, 2],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,
        itemsScaleUp : false});$(".next1").click(function(){owl.trigger('owl.next');})
$(".prev1").click(function(){owl.trigger('owl.prev');})
$(".play").click(function(){owl.trigger('owl.play',1000);})
$(".stop").click(function(){owl.trigger('owl.stop');})});

$(document).ready(function(){var owl=$("#owl-demo2");owl.owlCarousel({items : 2,
        itemsCustom : false,
        itemsDesktop : [1199, 2],
        itemsDesktopSmall : [991, 2],
        itemsTablet : [767, 2],
        itemsTabletSmall : false,
        itemsMobile : [480, 1],
        singleItem : false,
        itemsScaleUp : false});$(".next2").click(function(){owl.trigger('owl.next');})
$(".prev2").click(function(){owl.trigger('owl.prev');})
$(".play").click(function(){owl.trigger('owl.play',1000);})
$(".stop").click(function(){owl.trigger('owl.stop');})});

</script> 
<script type="text/javascript">
    $(function () {
      
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

       
    });
</script>


<!-- <script>$(window).load(function(){$("#flexiselDemo2").flexisel({visibleItems:10,itemsToScroll:3,animationSpeed:200,infinite:true,navigationTargetSelector:null,autoPlay:{enable:true,interval:5000,pauseOnHover:true},responsiveBreakpoints:{portrait:{changePoint:481,visibleItems:3,itemsToScroll:1},landscape:{changePoint:641,visibleItems:4,itemsToScroll:2},tablet:{changePoint:769,visibleItems:6,itemsToScroll:3}},loaded:function(object){console.log('Slider loaded...');},before:function(object){console.log('Before transition...');},after:function(object){console.log('After transition...');}});});
</script> -->
<script type="text/javascript">
     $(document).ready(function() {     
       $(".dropdown-menu").hover(function(){
        $("#bgcolor01").css("background-color", "#f58220");
        }, function(){
        $("#bgcolor01").css("background-color", "transparent");
       });
    });   
</script>

<script type="text/javascript">
$(document).ready(function(){  
    var error1 = $('.alert-danger');
    $('#ConcactForm').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules:{       

"email" : {required : true, email:true},
"name" : {required : true},
"message" : {required : true},
        },
        messages:{
        

"email" : {required :"Please enter email address.",email : "Please enter a valid email address."},
"name" : {required :"Please enter your name."},
"message" : {required :"Please enter your message."},
        },

        invalidHandler: function (event, validator) { //display error alert on form submit              
            //success1.hide();
            error1.show();
            //App.scrollTo(error1, -200);
        },

        highlight: function (element) { // hightlight error inputs
            $(element)
                .closest('.textboxspace').addClass('has-error'); // set error class to the control group
        },

        unhighlight: function (element) { // revert the change done by hightlight
            $(element)
                .closest('.textboxspace').removeClass('has-error'); // set error class to the control group
        },

        success: function (label) {
            label
                .closest('.textboxspace').removeClass('has-error'); // set success class to the control group
            label
                .closest('.textboxspace').removeClass('error');
        },
    });

});

</script>


<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bb5adedb033e9743d0235d2/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>
