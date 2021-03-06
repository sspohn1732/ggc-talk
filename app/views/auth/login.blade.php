@extends('layout')

@section('content')

<div class="jumbotron">
  {{ Form::open(array('action' => 'UsersController@login', 'id' => 'logInForm', 'class' => 'form-horizontal')) }}
  <fieldset>
    <legend>
      <h2>Login</h2>
    </legend>
    <div class="form-group">
      {{ Form::label('email', 'Email', array('class' => 'col-lg-2 control-label')) }}
      <div class="col-lg-5">
        {{ Form::text('email', '', array('class' => 'form-control input-lg')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('password', 'Password', array('class' => 'col-lg-2 control-label')) }}
      <div class="col-lg-5">
        {{ Form::password('password', array('class' => 'form-control input-lg')) }}
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-offset-2 col-lg-5">
          {{ Form::checkbox('remember', 'remember', false, array('class' => 'checkbox-inline')) }}
          {{ Form::label('remember', 'Remember me', array('style' => 'font-weight: normal')) }}
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button class="btn btn-default">
          Cancel
        </button>
        <button type="submit" class="btn btn-primary">
          Login
        </button>
      </div>
    </div>
  </fieldset>
  {{ Form::close() }}

</div>

@stop