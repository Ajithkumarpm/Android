@extends('auth::layouts.app')
@section('content') 

<script type="text/javascript">
$(document).ready(function(){
    $("#submit").click(function(event) 
    {
        event.preventDefault();
        //alert("in");
        var password=$("#password").val();
        var newpass=$.base64.encode(password);
        $("#password").val(newpass);
        $("#submit").unbind('click').click();
        
    });
});
</script>
{!! Form::open(array('url'=>('android-admin/login') ,'namespace' =>'Modules\Auth\Http' , 'class' => 'login-form','id'=>'login-form','enctype'=>'multipart/form-data','method'=>'POST','type'=>'file')) !!} 
{{Form::token()}}

	<div style='padding-bottom:10px;'></div>
    <h3 class="form-title">Login to your account</h3>
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button>
        <span> Enter any username and password. </span>
    </div>
    <div class="form-group">
       
        <label class="control-label visible-ie8 visible-ie9">Username</label>
        <div class="input-icon">
            <i class="fa fa-user"></i>
            <input class="form-control placeholder-no-fix" type="text" id="email" autocomplete="off" placeholder="Username" name="email"  /> </div>
    </div>
 


    <div class="form-group">
        <label class="control-label visible-ie8 visible-ie9">Password</label>
        <div class="input-icon">
            <i class="fa fa-lock"></i>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" value="{{ old('password') }}" /> </div>
    </div>

 


    <div class="form-actions">
        <label class="rememberme mt-checkbox mt-checkbox-outline">
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            <span></span>
        </label>
        <button type="submit" id="submit" class="btn green pull-right"> Login </button>
    </div>




{!! Form::close() !!}
@endsection