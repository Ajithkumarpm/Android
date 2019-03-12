@extends('designs::layouts.admin_layout')
@section('content')  
<h2>Dashboard</h2>
<ul class="page-breadcrumb breadcrumb">
  <li>
    <i class="fa fa-home"></i>
    <a href="{{ url()->route('dashboard')}}">Home</a>
    <i class="fa fa-angle-right"></i>
    <a href="#">Dashboard</a>
  </li>                       
</ul>

<div class="row">
<div class="col-md-12">
<div class="portlet box green">
<div class="portlet-title">
<div class="caption">
<i class="fa fa-globe"></i>Dashboard
</div>
<div class="tools">
<a href="javascript:;" class="collapse"> </a>                                           
<a href="javascript:;" class="reload"> </a>                                           
</div>
</div>
</div>



<div class="row">


<!-- Today Sales -->
<div class="col-md-6 ">
<div class="dashboard-stat purple">
<div class="visual">
<i class="fas fa-money-bill-alt fa-3x"></i>
</div>
<div class="details">
<div class="number">
<?php ?>
</div>
<div class="desc">
Today Sales <br>
</div>
</br>
</div>
</div>
</div>


<div class="col-md-6 ">
<div class="dashboard-stat" style="background: #65a02c;">
<div class="visual">
<i class="fas fa-money-bill-alt fa-3x"></i>
</div>
<div class="details">
<div class="number">

</div>
<div class="desc" style="color: #fff;opacity: 1;">
Today Sales Amount <br> <i><i class="fas fa-rupee-sign"></i>  </i> <strong></strong>
</div>
</br>
</div>
</div>
</div>

<!-- Today Sales -->





<div class="col-md-6 ">
<div class="dashboard-stat blue">
<div class="visual">
<i class="fas fa-money-bill-alt fa-3x"></i>
</div>
<div class="details">
<div class="number">
<?php ?>
</div>

<div class="desc">
Sales Amount <br> <i><i class="fas fa-rupee-sign"></i>  </i>
</div>
</br>
</div>

View more <i class="m-icon-swapright m-icon-white"></i>
 
</div>
</div>


<div class="col-md-6 ">
<div class="dashboard-stat green">
<div class="visual">
<i class="fa fa-cogs fa-3x "></i>
</div>

<div class="details">
<div class="number">
<?php ?>
</div>

<div class="desc">
Orders Delivered  <br>
</div></br>
</div>


View more <i class="m-icon-swapright m-icon-white"></i>


</div>
</div>
<div class="col-md-6 ">
<div class="dashboard-stat yellow">
<div class="visual">
<i class="fab fa-jedi-order  fa-3x"></i>
</div>
<div class="details">
<div class="number">
<?php ?>
</div>
<div class="desc">
Number of Orders <br>
</div></br>
</div>

View more <i class="m-icon-swapright m-icon-white"></i>
          
</div>
</div>


<div class="col-md-6 ">
<div class="dashboard-stat blue">
<div class="visual">
<i class="fa fa-users fa-3x"></i>
</div>
<div class="details">
<div class="number" style="font-size: 28px;">
<!-- &#x20B9; -->
</div>
<div class="desc">
Number of  Customers <br> 
</div></br>
</div>


</div>
</div>
</div>

</div>
</div>
</div>










<!-- END DASHBOARD STATS -->
<div class="clearfix">
</div>

@stop
