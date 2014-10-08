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

<title>All The Blogs</title>

@stop


@section('content')

    <div class="container">

    @forelse($posts as $post)
        <div class="blogs">
            <h3>{{{ $post->title }}}</h3>
            <p> {{{ $post->content }}} <p>
            <a href="{{{ action('PostController@show', $post->id) }}}">Read Blog</a>
        </div>
    @empty
          <p>No Blogs</p>
    @endforelse
    {{ $posts->links() }}

    </div>


@stop


