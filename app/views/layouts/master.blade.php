

<html>
<head>
    
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="/bootstrap_copy/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/bootstrap_copy/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/bootstrap_copy/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/font_awesome_copy/css/font-awesome.min.css">
    <link rel="stylesheet" href="/whhg_font_copy/css/whhg.css">
    <link rel="stylesheet" type="text/css" href="/css/res_style.css">
    <link rel="stylesheet" type="text/css" href="/css/nav_bar.css">
    
    <style>

        a:hover, a:focus {
            color: #FDF8F8;
            background-color: #B3C5CF;
            text-decoration: none;
        }
        a {
            color: #005788;
            font-family: monospace;
            font-size: 14px;
            font-weight: 800;
        }
        
        label{
            font-size: medium;
        }
        
        .form-group>input {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;

            color: aliceblue;
        }
        
        .btn-small {
            width: 75px;
            color: #fff;
            margin-left: -110%;
            background-color: #1B3C83;
            border-color: #7C96FF;
            margin-top: 8%;
        }
        
        #jdbrand {
            color: white;
            font-size: 40px;
            font-family: serif;
        }

        .navbar-default {
            background-color: ghostwhite;
            border: 2px dashed darkkhaki;
        }

        .navbar-default .navbar-nav>li>a {
            color: #005788;
            font-family: monospace;
            font-size: 14px;
            font-weight: 800;
        }
        
        .searchbars {
            color: blue;
            width: 65%;
            margin-top: 5%;
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
              <button type="button" class="navbar-toggle" media="(max-width: 950px)" data-toggle="collapse" data-target="#navbar-brand-centered">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div  class="navbar-brand navbar-brand-centered"><a id="jdbrand" href="{{{ action('HomeController@resume') }}}">JD</a></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-brand-centered">
                <ul class="nav navbar-nav navbar-left">
                    
                    <li >{{ Form::open(array('action' => 'PostController@index', 'method' => 'GET')) }}</li>
                        
                            <!-- must be null there because its expecting a value -->
                            <li>
                            {{ Form::text('search', Input::get('search'), array('class' => 'navbar-form navbar-left searchbars', 'placeholder' => 'search')) }}</li>
                        
                    <li class="searchbar">{{Form::submit('Search', ['class' => 'btn btn-small btn-primary openbutton'])}}
                    {{ Form::close() }}
                    </li>
                </ul>
                <div class="rightlinks">
                <ul class="nav navbar-nav navbar-right"> 
                    
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> About Me <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{{ action('HomeController@resume') }}}">Resume</a></li>
                        <li><a href="{{{ action('HomeController@portfolio') }}}">Portfolio</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Blogs <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{{ action('PostController@create') }}}">Create Blog</a></li>
                        <li><a href="{{{ action('PostController@index') }}}">View All Blogs</a></li>
                      </ul>
                    </li>
                    
                    @if (Auth::check())
                        <li>{{ link_to_action('HomeController@doLogout', 'Logout') }} </li>
                    
                    @else 
                        <li>{{ link_to_action('HomeController@showLogin', 'Login') }} </li>
                    @endif
                    
                </ul>
            </div>
            
            </div><!-- /.navbar-collapse -->
            
        </div><!-- /.container-fluid -->
    </nav>
        <div class="container">
            <div class="row">
                <div class="span12">
                    
                    @if (Session::has('successMessage'))
                        <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
                    @endif
                    @if (Session::has('errorMessage'))
                        <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
                    @endif
                    @if (Session::has('infoMessage'))
                        <div class="alert alert-info">{{{ Session::get('infoMessage') }}}</div>
                    @endif
                    @if (Session::has('warningMessage'))
                        <div class="alert alert-warning">{{{ Session::get('warningMessage') }}}</div>
                    @endif
                    
                    
                    
    <!-- install blade syntax highlighter -->
    @yield('content')
    
                </div>
            </div>
        </div>
    
    <!-- footer -->
    @yield('footer')
</body>
        @yield('bottom-script')
</html>
