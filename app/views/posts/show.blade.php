@extends('layouts.master')


@section('header')

<style>
.blogs {
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
            {{link_to_action('PostController@edit','Edit', array($post->id))}}
            
            {{Form::open(['method' => 'Delete', 'action' => ['PostController@destroy', $post->id], 'id' => 'delete-form'])}}
                <button type="submit" class="btn btn-link">Delete</button>
            {{Form::close()}}
            
        </div>


    </div>


@stop

@section('bottom-script')

<script>
    $("#delete-form").submit(function(e)
    {
        if (!confirm('You really wanna delete this??')) {
            event.preventDefault();
        }
    });
</script>

@stop
