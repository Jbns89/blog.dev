@extends('layouts.master')


@section('header')

<style>
.blogs{
    background-color: rgba(255, 255, 255, 0.57);
    width: 75%;
    margin-left: auto;
    margin-right: auto;
}
</style>

<title>Newly Added Blog</title>

@stop


@section('content')

    <div class="container">


        <div class="blogs">
          <h3>{{{ $post->title }}}</h3>
          <p> {{{ $post->content }}} <p>
        </div>


    </div>


@stop


