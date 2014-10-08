@extends('layouts.master')


@section('header')

<style>
.blogs{
    background-color: rgba(255, 255, 255, 0.71);
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
            <a href="{{{ action('PostController@edit', $post->id) }}}"><button id="blog-submit" type="submit" class="btn btn-primary input-medium pull-right">Edit</button></a>
        </div>


    </div>


@stop


