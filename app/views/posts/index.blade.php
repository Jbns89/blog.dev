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
        <div class="blogs">
            <h3>{{{ $post->title }}}</h3>
            <p class="info"> {{{ $post->content }}} </p>
            <p class="info"> by: {{{ $post->user->first_name }}} {{{ $post->user->last_name }}} </p>
            {{link_to_action('PostController@show','Read Blog', array($post->id))}}
            <span class="posted" style="text-align:left">{{{ $post->created_at->format(Post::DATE_FORMAT)}}}</span>
            @if ($post->img_path)
            <p style="text-align:right"><img class="img-upload" src="{{ $post->img_path }}" style="max-width: 25%">
        @endif
        </div>
    @empty
          <p>No Blogs</p>
    @endforelse
    {{ $posts->links() }}

    </div>


@stop


