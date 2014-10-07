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

<title>All The Blogs</title>

@stop


@section('content')

    <div class="container">

    @forelse($posts as $post)
        <div class="blogs">
          <h3>{{{ $post->title }}}</h3>
          <p> {{{ $post->content }}} <p>
        </div>
    @empty
          <p>No Blogs</p>
    @endforelse

    </div>


@stop


