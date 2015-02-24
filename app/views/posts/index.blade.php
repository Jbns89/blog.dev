@extends('layouts.master')


@section('header')

<style>

.blogs{
    background-color: rgba(255, 255, 255, 0.71);
    width: 75%;
    margin-left: auto;
    margin-right: auto;
}

.posted{
    font-size: .9em;;
    float: right;
    font-weight: normal;
    font-style: oblique;
}

h3 {
font-weight: bolder;
color: #0A2A8F;
text-align: center;
}


.imgalign {
    text-align: right;
}

.info {
    width: 50%;
    margin-right: 50%;
}

</style>

<title>All The Blogs</title>

@stop


@section('content')

    <div class="container">

    @forelse($posts as $post)
        <div class="posts">
            <p> {{{ $post->content }}} </p>
        </div>
    @empty
        <div class="posts">
            <p>You haven't Written any posts yet...</p>
        <div class="posts">
    @endforelse


    </div>


@stop


