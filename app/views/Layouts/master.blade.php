

<html>
<head>
    <link rel="stylesheet" type="text/css" href="/bootstrap_copy/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap_copy/css/bootstrap-theme.min.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="bootstrap_copy/JS/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/font_awesome_copy/css/font-awesome.min.css">
    <link rel="stylesheet" href="whhg_font_copy/css/whhg.css">
    <link rel="stylesheet" type="text/css" href="/css/res_style.css">
    <link rel="stylesheet" type="text/css" href="/css/nav_bar.css">
    
    <style>
        a:hover, a:focus {
            color: #FDF8F8;
            background-color: #B3C5CF;
            text-decoration: none;
        }
        a {
            color: #094170;
            text-decoration: none;
        }
    </style>

    @yield('header')
</head>
<body>
    <!-- header -->
    <!-- navbar -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-brand navbar-brand-centered"><a href="{{{ action('HomeController@resume') }}}">JD</a></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
              <ul class="nav navbar-nav">
                <li><a href="{{{ action('PostController@create') }}}">Create Blog</a></li>
                <li><a href="{{{ action('PostController@index') }}}">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{{ action('HomeController@resume') }}}">Resume</a></li>
                <li><a href="{{{ action('HomeController@portfolio') }}}">Portfolio</a></li>                
              </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    
    <!-- install blade syntax highlighter -->
    @yield('content')
    
    
    <!-- footer -->
    @yield('footer')
</body>
</html>
