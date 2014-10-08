<div class="controls controls-row">
    
    {{ Form::label('title', 'Title') }}
    
    {{ Form::text('title', Input::old('title'), array('class' => 'span12', 'placeholder' => 'Blog Title'))}}
    
    {{ $errors->first('title', '<span class="help-block alert alert-info" role="alert">:message</span>') }}
</div>
<div class="controls">
    {{ Form::label('content', 'Content') }}
    {{ Form::textarea('content', Input::old('content'), array('class' => 'span12', 'placeholder' => 'Blog Content', 'rows' => '3'))}}
    
   
    <!-- Using the errors first is the easiest one to use because all you need is one error -->
    {{ $errors->first('content', '<span class="help-block alert alert-info" role="alert">:message</span>') }}

</div>
  

