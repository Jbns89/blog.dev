@extends('layouts.master')

@section('header')
<style>
input {
    line-height: normal;
    width: 55%;
}

textarea{
    width:75%;
}

.alert-info{
    border-left: 3px solid #eee;
    background-image: linear-gradient(to bottom,#DFE4E1 0,#E2F2FA 100%);
    border-color: #7B8A69;
    font-family: inherit;
    font-weight: bolder;
    color: darkblue;
    width: 50%;
}
</style>


<title>Create a Blog</title>
@stop


@section('content')
                
    {{Form::open(array('action' => 'PostController@store'))}}
        @include('posts.form')
        
        
         {{Form::submit('Blog Me')}}
        
    {{ Form::close() }}

@stop



