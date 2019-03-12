@extends('designs::layouts.app')
@section('content') 
@include('sweet::alert')
            <!-- BEGIN LOGIN FORM -->
            {!! Form::open(array('route' => 'user.pass', 'class' => 'form-horizontal','id'=>'EditCategoriesForm','enctype'=>'multipart/form-data','method'=>'POST')) !!} 
            {{Form::token()}}
            <input type="hidden" name="rest" value="{{$token}}" />
                <h3 class="form-title">Reset your account password</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter new password. </span>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" required minlength="6" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                </div>

             <div class="form-actions fluid">
                <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn green">Submit</button>
                <button type="button" class="btn default" onclick="window.location='{{ url()->route('default')}}'" >Cancel</button>
                </div>
            </div>
             {!! Form::close() !!}

@endsection