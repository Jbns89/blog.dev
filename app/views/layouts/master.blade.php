

<html>
    <head>

        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="bootstrap_copy/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/bootstrap_copy/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap_copy/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/font_awesome_copy/css/font-awesome.min.css">
        <link rel="stylesheet" href="whhg_font_copy/css/whhg.css">
        <link rel="stylesheet" type="text/css" href="/css/res_style.css">
        <link rel="stylesheet" type="text/css" href="/css/nav_bar.css">

        <style>

.navbar-brand {
  float: none;
  }

.navbar-center
{
    position: absolute;
    width: 100%;
    left: 0;
    top: 0;
    text-align: center;
    margin: auto;
  height:100%;
}


        </style>

        @yield('header')
    </head>
    <body>

<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      &nbsp;
    </div>

  <div class="navbar-center navbar-brand"><a href="{{{ action('HomeController@resume') }}}" class="navbar-brand">JD</a></div>

    <div class="collapse navbar-collapse" id="navbar-collapse-1">


    {{ Form::open(array('action' => 'PostController@index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'search')) }}
        <div class="form-group">
            <!-- must be null there because its expecting a value -->
            {{ Form::text('search', Input::get('search'), array('class' => 'form-control', 'placeholder' => 'Search')) }}
        </div>
    {{Form::submit('Search', array('class' => 'btn btn-default', 'src' => 'glyphicon glyphicon-search' ))}}
    {{ Form::close() }}

    @if (Auth::check())
        <button class="navbar-left">{{ link_to_action('HomeController@doLogout', 'Logout') }} </button>

     @else 
        <button class="navbar-left">{{ link_to_action('HomeController@showLogin', 'Login') }} </button>
    @endif


      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
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

                        @if (Auth::check())
                            <button>{{ link_to_action('HomeController@doLogout', 'Logout') }} </button>

                         @else 
                            <button>{{ link_to_action('HomeController@showLogin', 'Login') }} </button>
                        @endif

        <!-- install blade syntax highlighter -->
        @yield('content')
                    </div>
                </div>
            </div>

        @yield('footer')
    </body>
        @yield('bottom-script')
</html>
