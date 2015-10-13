@extends('masterPage')
@section('content')

{!! Form::open(array('url' => 'login')) !!}
<h1>Login</h1>

<!-- if there are login errors, show them here -->
<p>
    {!! $errors->first('email') !!}
    {!! $errors->first('password') !!}
</p>

<p>
<div class="form-group">
    
    {!! Form::label('email', 'Email Address') !!}
    {!! Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class'=> 'form-control')) !!}
</p>

<p>
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password') !!}
</p>

<p>{!! Form::submit('Submit!') !!}</p>
</div>
{!! Form::close() !!}
@stop