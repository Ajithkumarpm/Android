<?php $sitepath=request()->route()->getAction();  //print_r($sitepath); ?> 

<li class="nav-item start <?php if($sitepath['controller']=="Modules\Dashboard\Http\Controllers\DashboardController@dashboard")echo 'active';?>">
<a href="{{ url()->route('dashboard')}}" class="nav-link nav-toggle">
<i class="fa fa-home"></i>
<span class="title">Dashboard</span>
<span class="selected"></span>                                  
</a>                             
</li> 
