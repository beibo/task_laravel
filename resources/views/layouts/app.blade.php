<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
   <link rel="stylesheet" href="/css/normalize.css">

    <link rel="stylesheet" href="/css/bootstrap.css">
   <link rel="stylesheet" href="/css/home.css">
   <link rel="stylesheet" href="/css/questions.css">
   <link rel="stylesheet" href="/css/hover-min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/profile.css">
<link href="https://fonts.googleapis.com/css?family=Barrio" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Caveat+Brush" rel="stylesheet">
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
      <script src="{{ asset('js/map.js') }}"></script>
      <style type="text/css">
          #map{ width:600px; height:200px;margin:auto ;}
            #divmap{margin: auto; margin-top:100px}
        </style>
</head>
<body class="body">
    <div class=" header container-fluid" id="app">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                              data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand hvr-grow" href="#"><span>admin</span> panel</a>

                    <!-- Branding Image -->


                </div>


                        @guest

                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="linksNav nav navbar-nav">

                            <li class="active"><a href="/home">Home
                             <span class="sr-only">(current)</span></a></li>
                            <li><a href="/addEmployee">Add Employee</a></li>
                            <li>

                              <div class="search-container">
<form action="/searchContent" method="get">
<input type="text" placeholder="Search.." name="title" onkeydown="down()" onkeyup="up()" id="search">
<button type="submit"><i class="fa fa-search"></i></button>
</form>
<div id="search_results">

</div>
</div>

                            </li>


                            </ul>



                            <div class="dropdown">

                                <button class="userName btn btn-link dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"  style="text-decoration: none;">

{{ Auth::user()->user_name }}
                                    <i class="fa fa-lg fa-user-circle fa-2" aria-hidden="true"></i>
                                    <span class="caret"></span>
                                </button>
                                <ul class="userOptions dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="background-color: #eeeeee;">




                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>

                            </div>


                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
