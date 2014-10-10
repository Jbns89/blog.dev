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

</style>

<title>All The Blogs</title>

@stop


@section('content')

    <div class="container">

    @forelse($posts as $post)
        <div class="blogs">
            <h3>{{{ $post->title }}}</h3>
            <p> {{{ $post->content }}} <p>
            {{link_to_action('PostController@show','Read Blog', array($post->id))}}
            <span class="posted">{{{ $post->created_at->format(Post::DATE_FORMAT)}}}</span>
        </div>
    @empty
          <p>No Blogs</p>
    @endforelse
    {{ $posts->links() }}

    </div>


@stop


