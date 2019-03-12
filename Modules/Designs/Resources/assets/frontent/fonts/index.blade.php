@extends('layouts.frontent_layout')
@section('content')
<!-- @include('alertify::alertify') -->

<!-- Carousel slider Start
================================================== -->
<?php //dd($slider);?>
<div class="bannercontainer">
 <ul id=demo1>
     @foreach($slider as $sliders)
     <li><a href="{{$sliders['url']}}"><img src="{{ config('global.sliderimagepath') }}{{$sliders['image']}}" class=img-responsive alt=""></a></li>
     @endforeach
  </ul>
  </div>
<!-- Carousel slider End
================================================== -->
  <!-- About Section Start
================================================== --> 
<div class="aboutsec">
<div class="container">
  <div class="aboutsectioncontainer">
  <div class="container">
  <div class="row">
  <div class="col-md-7">
  <h3 class="h3text">Midas - The largest supplier of Tyre retreading materials in Asia</h3>
  <!-- <h5 class="h5text">The largest supplier of Tyre retreading materials in Asia.</h5> -->
  <div class="info-text">George Varughese founded General Rubbers, with its Midas brand of retreading materials, in 1969. Since then Midas has been supplying Tread Rubber, Precured Tread Rubber and other retreading materials to India and the rest of the world.<br /><br />
  	Midas is now India's most popular brand of Tyre Retreading Materials with more than 24000 tons sold every year. Besides India, Midas currently has satisfied customers all over the world from South America to Africa and from Europe to Australia.<br /><br />
  <a class="readmorebutton" href="{{url('/about-us')}}"> READ MORE</a></div> 
  <!-- <div class="col-md-12 brochuretext" ><img src="{{ URL::asset('resources/assets/frontent/images/pdf-icon.png')}}"  alt="pdf-icon" />&nbsp;&nbsp;Download Brochure</div> -->
<!--   <div class="row"> 
  <div class="col-md-4"><a class="designbutton" href="https://drive.google.com/file/d/0B6z9ymLI_gTUei03dWdna0Y1ZzA/view" target="_blank">
Domestic Designs</a></div>
  <div class="col-md-4"><a class="designbutton" href="https://drive.google.com/file/d/0B6z9ymLI_gTUSU1aX285WVlfcjA/view" target="_blank">
 Export Designs</a></div>
  <div class="col-md-4"><a class="designbutton" href="https://drive.google.com/file/d/0B6z9ymLI_gTUcE5LczdLWjU2Vmc/view" target="_blank">
  Envelopes Curing Bags</a></div>  
  </div> -->
  </div>
  <div class="col-md-5"><img src="{{ URL::asset('resources/assets/frontent/images/about-img-01.png')}}" width="576" height="520" alt="" class="img-responsive" /></div>
  </div>
  </div>
  </div>
</div>
</div>
  <!-- About Section End
================================================== --> 
 <!-- category Section Start
================================================== -->
<div class="catacontainer">
<div class="container">
<div class="catasec">
<div class="row">
<div class="row">
<div class="col-md-12 text-center">
<span class="homesub">Our Products</span><br/>View our product categories<br/><br/>
</div>
</div>
<div class="row">
<div class="col-md-12 lounchsecmargin catitem">

          <div class=customNavigation><a class="rbtn prev">
            <img src="{{ URL::asset('resources/assets/frontent/images/arrow-prev.png') }}"  alt=""></a>&nbsp;&nbsp;<a class="rbtn next">
                <img src="{{ URL::asset('resources/assets/frontent/images/arrow-next.png') }}"  alt=""></a> </div>
          <div id="owl-demo" class="owl-carousel">            
              @foreach($categories as $category)
            <div class="item">
            <a href="{{ config('global.basepath') }}categories/{{$category['sefurl']}}">
              <div class="productbox2">
                <div class="imgcontainer">
                <img src="{{ config('global.categoryimagepath') }}{{$category['image']}}" class="img-responsive center-block" alt="">
                 </div>
                <div class="descriptiomsec">{{$category['name']}} </div>
                
                <div class="clearfix"></div>
              </div></a>
            </div>
           @endforeach
        
         
           
          </div>
        </div>
</div>
</div>
</div>
</div>
</div>
 <!-- category Section End
================================================== -->
<div class="testisec">
<div class="container">
<div class="row">

<div class="col-md-12">
<div class="sellercontainer">
<div class="row">
<div class="col-md-12 text-center">
<span class="homesubwhite">Testimonials</span><br/>View our Client testimonials<br/><br/>
</div>
</div>
<div class="row">


	<div class="col-md-12 lounchsecmargin">

       
          <div id="owl-demo4" class="owl-carousel">            
              @foreach($testimonials as $testimonial)
            <div class="item">     

  <div class="testimonilas-banner">
  <div class="row">
  <div class="col-md-4"><img src="{{ config('global.testimonialsimagepath')}}{{$testimonial['image']}}" class="img-responsive" /></div>
  <div class="col-md-8">
  <div class="col-md-12 testiheading">{{ $testimonial['title']}}</div>
  <div class="col-md-12 testinormal-text">{{ $testimonial['description']}}</div>
 <div class="col-md-12 testinormal-big-1"> {{ $testimonial['username']}}</div>
 <div class="col-md-12 testinormal-big-2">{{ $testimonial['place']}} </div>
</div>  
  </div>  
  </div>

  




            </div>
           @endforeach             
          </div>
        </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!-- newsssssssssssssssssssssssssss -->

 <!-- category Section Start
================================================== -->
<div class="catacontainer">
<div class="container">
<div class="catasec1">
<div class="row">
<div class="row">
<div class="col-md-12 text-center">
<span class="homesub">Latest News</span><br/>View our news and events<br/><br/>
</div>
</div>
<div class="row">
<div class="col-md-12 lounchsecmargin">


          <div class=customNavigation><a class="rbtn prev3">
            <img src="{{ URL::asset('resources/assets/frontent/images/arrow-prev.png') }}"  alt=""></a>&nbsp;&nbsp;<a class="rbtn next3">
                <img src="{{ URL::asset('resources/assets/frontent/images/arrow-next.png') }}"  alt=""></a> </div>
          <div id="owl-demo3" class="owl-carousel">            
              @foreach($news as $new)
            <div class="item">

            		  <div class="wpb_wrapper"><div class="qode-info-card">
			<div class="qode-info-card-image ">
			<img class ="img-center" src="{{config('global.newsimagepath')}}{{$new['image']}}" alt="" draggable="false" class="img-responsive">
		</div>
		<div class="qode-info-card-text-holder">
					<h4 class="qode-info-card-title">
				{{substr(strip_tags($new['title']),0,50)}}		</h4>
							<p class="qode-info-card-text">
              {{substr(strip_tags($new['description']),0,80)}}<br /><br />
                
                <a id="{{ $new['sefurl']}}" href="{{url('/news').'/'.$new['sefurl']}}" class="readnorelinkbutton">Read More</a>			</p>
			</div>		
	</div>	
</div>       


            </div>
           @endforeach             
          </div>
        </div>
</div>
</div>
</div>
</div>
</div>
 <!-- category Section End
================================================== -->

<!-- news enddddddddddddddddddddddd -->

















 <!-- Sub Header Section
================================================== -->
<!-- <div class="newssection">
<div class="container">
<div class="row">
<div class="col-md-6 brochuresec">
<div class="brochurebg">
<div class="row">
<div class="buttonbox">
<div class="row">
<div class="col-md-12 text-center"><span class="homesubwhite">Brochure Downloads</span><br/><br/></div>
</div>
<div class="row">
<div class="col-md-12 text-cente mtop">
<a href="https://drive.google.com/file/d/0B6z9ymLI_gTUei03dWdna0Y1ZzA/view" target="_blank">
<img src="{{ URL::asset('resources/assets/frontent/images/but_domestic.png') }}" alt=""></a><br/><br/>

  <a href="https://drive.google.com/file/d/0B6z9ymLI_gTUSU1aX285WVlfcjA/view" target="_blank">
  <img src="{{ URL::asset('resources/assets/frontent/images/but_Export.png') }}" alt=""></a><br/><br/>
  
  <a href="https://drive.google.com/file/d/0B6z9ymLI_gTUcE5LczdLWjU2Vmc/view" target="_blank">
  <img src="{{ URL::asset('resources/assets/frontent/images/but_developer.png') }}" alt=""></a><br/><br/>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="col-md-6 newssec">
<div class="newsbg120">
<div class="row">
<div class="col-md-12 text-left leftp"><span class="homesub">Latest News</span><br/><br/></div>
</div>
<div class="row">
<div class="col-md-12">
<div class="holder">
<ul id="ticker01">
@foreach($news as $new)
<li>{!!$new['description']!!}</li>
@endforeach
</ul>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
</div>-->
<script>
jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
				});			
		});	
};

$(function(){
    $("ul#ticker01").liScroll();
});</script>
<script type="application/ld+json">
{
"@context" : "http://schema.org",
"@type" : "WebSite",
"name" : "{{config('global.sitetitle')}}{{$settings['meta_title']}}",
"description" : "{{$settings['meta_description']}}",
"url" : "{{config('global.basepath')}}"
}
</script>

@endsection