<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Bob's Burgers House Warming</title>
        <link rel="stylesheet" type="text/css" href="/css/bb-invite.css">
            <link rel="stylesheet" href="/font_awesome_copy/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            // Theme music start
            $("#bbtheme").trigger("play");
            
            // Spinning Icons
            $(".icon1").mouseenter(function(){
                $(".fa-calendar").addClass("fa-spin");
            });
            $(".icon1").mouseleave(function(){
                $(".fa-calendar").removeClass("fa-spin");
            });
            $(".icon2").mouseenter(function(){
                $(".fa-home").addClass("fa-spin");
            });
            $(".icon2").mouseleave(function(){
                $(".fa-home").removeClass("fa-spin");
            });$(".icon3").mouseenter(function(){
                $(".fa-cutlery").addClass("fa-spin");
            });
            $(".icon3").mouseleave(function(){
                $(".fa-cutlery").removeClass("fa-spin");
            });
            
            // Random Videos
            $(".videos").click(function(e){
                e.preventDefault();
                $(".overlay").show();
                $("#bbtheme").trigger("pause");
                var videos = [
                "<iframe width='75%' height='90%' src='https://www.youtube.com/embed/t9TfgMM7Xto?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
                "<iframe width='75%' height='90%' src='https://www.youtube.com/embed/Dt8Z8yEaEV4?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
                "<iframe width='75%' height='90%' src='https://www.youtube.com/embed/hZ_EKHGgWJQ?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
                "<iframe width='75%' height='90%' src='https://www.youtube.com/embed/VOkaLDYp9dc?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>",
                "<iframe width='75%' height='90%' src='https://www.youtube.com/embed/ypqSHg1YvZA?rel=0&autoplay=1' frameborder='0' allowfullscreen></iframe>"
                ];
                
                var index = (Math.floor(Math.random()*5));
                
                $(".overlay").html(videos[index] + "<div><a id='close' href='#cls'>X</a></div>");
                $(".image-container").css('width', '0px', 'height', '0px');
            });
            $("#close").click(function(){
                $(".overlay").css("display","none");
                $("#bbtheme").trigger("play");
            });
            $("#mute").click(function(e){
                e.preventDefault();
                $("#bbtheme").trigger("pause");
            });
            
        });
        </script>
    </head>
    <body>
        <div class="overlay hide"></div>
        <main> 
            <a id="mute" href="#"><div><i class="fa fa-volume-off"></i>Mute</div></a>
            <audio class="audio-player" id="bbtheme" src="/img/bbtheme.mp3"></audio>
            <div class="invite content relative">
                <h1>You're Invited to the<br>GRAND-RE-RE-RE-OPENING!</h1>
                <p>What better way to throw a house warming party than one where you dress as your favorite Bob's Burgers character?</p>
                <ul>
                    <li class="icon1"><i class="fa fa-calendar"></i><strong> When : </strong>November 00 @ 6pm</li>
                    <li class="icon2"><i class="fa fa-home"></i><strong> Where : </strong>319 Chicago</li>
                    <li class="icon3"><i class="fa fa-cutlery"></i><strong> Why : </strong>Because why not?</li>
                </ul>
                <div class="images">
                    <div class="left">
                        <img class="bob" src="/img/bob.png">
                        <img class="linda" src="/img/Lindab.png">
                    </div>
                    <div class="right">
                        <img class="tina" src="/img/Tina_render.png">
                        <img class="gene" src="/img/Gene_Belcher.png">
                        <img class="louise" src="/img/louise_belcher.png">
                    </div>
                </div>
            </div>
            <div class="logo">
                <a class="videos" href="#"><img class="logo" src="/img/BobsBurger_Logo.jpg"></a>
            </div>
        </main>
    </body>
    
</html>
