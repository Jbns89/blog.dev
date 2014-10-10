<?php


class Post extends BaseModel 
{   
    const DATE_FORMAT = 'l jS \\of M \\@ Y g:i a';
    public static $rules = array(
        'title' => 'required | max:255',
        'content' => 'required'
        
        );
    
    

    protected $table = 'posts';
}


?>
