@extends('layouts.master')

@section('content')

{{Form::open(array('action' => 'HomeController@doLogin'))}}
    <div class="controls">
        
        {{ Form::label('email', 'Email') }}
        
        {{ Form::text('email', Input::old('email'), array('class' => 'span12', 'placeholder' => 'Email'))}}
        
    </div>
    <div class="controls">
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password', array('class' => 'span12'))}}

    </div>
    

    {{Form::submit('Log In')}}
        
{{ Form::close() }}

@stop




