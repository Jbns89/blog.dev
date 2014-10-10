@extends('layouts.master')

@section('header')

<script>

$(document).ready(function() 
{
    var videos = [
    "<iframe width='560' height='415' src='//www.youtube.com/embed/-w-58hQ9dLk?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
    "<iframe width='560' height='415' src='//www.youtube.com/embed/TO5wryDdEI0?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
    "<iframe width='560' height='415' src='//www.youtube.com/embed/GUtC4niLkmI?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
    "<iframe width='560' height='415' src='//www.youtube.com/embed/uJ-jY7-iS40?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
    "<iframe width='560' height='415' src='//www.youtube.com/embed/ZlPoPMbiffU?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>"
    ];
    var index = (Math.floor(Math.random()*5));
    $(".video").html(videos[index]);
    $(".image-container").css('width', '0px', 'height', '0px');
});

</script>

<style>
h3 {
font-weight: bolder;
color: #0A2A8F;
text-align: -webkit-center;
}

</style>


@stop


@section('content')
    <h1>404 Page Not Found</h1>
    <h3>Enjoy some Jurassic Park while you're here :)<h3>
    <p class='video'></p>
    
@stop
