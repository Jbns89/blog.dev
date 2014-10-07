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

    <div class="container">
        <div class="row">
            <div class="span12">
                <form action="{{{ action('PostController@store') }}}" method="POST">
                    <div class="controls controls-row">
                        <h3>Title:</h3>
                        <input id="title" name="title" type="text" class="span12" placeholder="Blog Title" value="{{{ Input::old('title') }}}"> 
                        {{ $errors->first('title', '<span class="help-block alert alert-info" role="alert">:message</span>') }}
                    </div>
                    <div class="controls">
                        <h3>Content:</h3>
                        <textarea id="content" name="content" class="span12" placeholder="Blog Text Here" rows="5">{{{ Input::old('content') }}}</textarea>
                        {{ $errors->first('content', '<span class="help-block alert alert-info" role="alert">:message</span>') }}
                    </div>
                      
                    <div class="controls">
                        <button id="blog-submit" type="submit" class="btn btn-primary input-medium pull-right">Create</button>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>

@stop



