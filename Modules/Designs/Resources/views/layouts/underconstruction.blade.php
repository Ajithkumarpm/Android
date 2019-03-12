<?php $sitepath=request()->route()->getAction(); //dd($product_seos)?> 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Bootstrap -->
<link href="{{ URL::asset('resources/assets/frontent/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ URL::asset('resources/assets/frontent/css/style.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
<link href="{{ URL::asset('resources/assets/frontent/css/font-awesome.css') }}" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
<link rel=stylesheet href="{{ URL::asset('resources/assets/frontent/css/slippry.css')}}">
<link href="{{ URL::asset('resources/assets/frontent/css/owl.carousel.css') }}" rel=stylesheet>
<link href="{{ URL::asset('resources/assets/frontent/css/owl.theme.css') }}" rel=stylesheet>
<link href="{{ URL::asset('resources/assets/frontent/css/ionicons.css') }}" rel=stylesheet>
<link href="{{ URL::asset('resources/assets/frontent/css/custom.css') }}" rel=stylesheet>

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

<!-- <div class="outtertopdiv innerheader"> -->

 </div><div style="clear:both;"></div>
<!-- Header Section Ends --> 
</div>
<img src="{{ config('global.basepath') }}resources/assets/frontent/images/page-under-construction.jpg" width="100%" ></a> 



@yield('content')


   
     

<!--Footer Section Ends-->
</div>

<script src="{{ URL::asset('resources/assets/frontent/js/megamenu.js') }}"></script>
<script src="{{ URL::asset('resources/assets/frontent/js/slippry.min.js') }}"></script>
<script>$(function(){var demo1=$("#demo1").slippry({});$('.stop').click(function(){demo1.stopAuto();});$('.start').click(function(){demo1.startAuto();});$('.prev').click(function(){demo1.goToPrevSlide();return false;});$('.next').click(function(){demo1.goToNextSlide();return false;});$('.reset').click(function(){demo1.destroySlider();return false;});$('.reload').click(function(){demo1.reloadSlider();return false;});$('.init').click(function(){demo1=$("#demo1").slippry();return false;});});</script>
<script src="{{ URL::asset('resources/assets/frontent/js/owl.carousel.js') }}"></script> 
<script>
$(document).ready(function(){var owl=$("#owl-demo");owl.owlCarousel();$(".next").click(function(){owl.trigger('owl.next');})
$(".prev").click(function(){owl.trigger('owl.prev');})
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

</body>
</html>
