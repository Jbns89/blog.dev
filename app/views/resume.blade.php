@extends('layouts.master')

@section('header')

<script>
$(document).ready(function()
{
    $(".hover").mouseover(function(){
    $(this).addClass('fa-spin');
    });

    $(".hover").mouseout(function(){
         $(this).removeClass('fa-spin');
    });
});

</script>
<title>My Resume</title>
@stop

@section('content')
<div class="content"> 
    <h1>
        Jillian Donovan
        <br>
        <small>
            Full Stack Developer
        </small>
    </h1>
    <div id="contact">
        <h4>
            <u>
                <strong>Contact Info</strong>
            </u>
        </h4>
        <p>
            <i class="hover fa fa-envelope-o fa-2x"></i><!-- fa-spin -->
            Jbns89@gmail.com
        </p>
        <p>
            <i class="hover fa fa-github-alt fa-2x"></i><!--fa-spin-->
            <a href="https://github.com/Jbns89" class="btn btn-default btn-xs active" role="button">GitHub</a>
        </p>
        <p>
            <i class="hover fa fa-twitter-square fa-2x"></i><!-- fa-spin -->
            <a href="https://twitter.com/N3rdyB3an" class="btn btn-default btn-xs active" role="button">Twitter</a>
        </p>
    </div>
    
        <div id="work">
            <h3>
                <u>
                    Work Experience
                </u>
            </h3>
            <br>
            <ul>
                <li>
                    Dusting Dolls 2013-present
                </li>
                <br>
                <li>
                    Home Care Companion 2012-2014
                </li>
                <br>
                <li>
                    Nanny 2009-2011
                </li>
                <br>
                <li>
                    Administrative Assistant 2008
                </li>
                <br>
                <li>
                    Teaching Assistant 2007
                </li>
                <br>
                <li>
                    Sales Assistant 2005
                </li>
            </ul>
            
        </div>
        <div id="edu">
            <h3>
                <u>
                    Education
                </u>
            </h3>
            <br>
            <ul>
                <li>
                    CodeUp - Graduating Fall 2014
                </li>
                <br>
                <li>
                    Austin Community College - 2006-2007
                </li>
                <br>
                <li>
                    Blanco High School - Graduated 2007
                </li>
            </ul>
        </div>
        <div id="skillz">
            <h3>
                <u>
                    Skills
                </u>
            </h3>
            <br>
            <ul>
                <li>
                    American Sign Language
                </li>
                <br>
                <li>
                    PHP
                </li>
                <br>
                <li>
                    HTML & CSS
                </li>
                <br>
                <li>
                    JavaScript
                </li>
            </ul>
        </div>
    
</div>
@stop

@section('footer')

@stop

    
