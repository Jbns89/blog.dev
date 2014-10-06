

<html>
<head>
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.min.css">
    <script src="/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="whhg_font/css/whhg.css">
    @yield('title')
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
              <div class="navbar-brand navbar-brand-centered">JD</div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
              <ul class="nav navbar-nav">
                <li><a href="/landing_page.html">Home</a></li>
                <li><a href="/blog.html">Blog</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="/resume.html">Resume'</a></li>
                <li><a href="/portfolio.html">Portfolio</a></li>                
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
