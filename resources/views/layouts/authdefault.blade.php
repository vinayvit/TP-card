<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}-->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css"/>

    <link href="{{ asset('frontend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('frontend/css/footer.css') }}" rel='stylesheet' type='text/css' />



    <!--<style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>-->

    <style>
        #showdept
        {
            display:none;
        }
    </style>


    <script>$('#flash-overlay-modal').modal()</script>
    <script>
        $('document').ready(function(){
            $("#showdept").hide();
            $('#option1').click(function(){
                $("#showdept").show();
            });
            $('#option2').click(function(){
                $("#showdept").hide();
            });

        })
    </script>

    <script>

        $(function()
        {
            $('.add').click(function ()
            {
                var n = ($('.body tr').length - 0) + 1;

                var tr = '<tr><td>' + n + '</td>' +

                        '<td><input type="text" class=" form-control" name="dept[]" ></td>' +

                        '<td><a href="#" class="delete btn btn-default " ><i class="fa fa-trash"></i></a></td>' +

                        '</tr>';
                $('.body').append(tr);
            });

            $('.body').delegate('.delete','click',function(){
                $(this).parent().parent().remove();

            });

        });

    </script>

</head>
<body id="app-layout">
<nav class="navbar navbar-inverse navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a href="/" ><div class="navbar-brand" style="color:white;">TIMEPUG</div></a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">

                @if(Auth::user())
                    <li class=""><a href="timesheet">Timesheet</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Organization<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="organization">Organization Profile</a></li>
                            <li><a href="departments">Departments</a></li>

                        </ul>

                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            User<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="employee">Create User</a></li>
                            <li><a href="allemployee">Show Users</a></li>

                        </ul>

                    </li>
                @else
                    <li class=""><a href="#">About</a></li>
                    <li class=""><a href="#">Contact</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <!-- <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                    </ul>-->
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::user())
                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Auth::user()->username }}<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">My Profile</a></li>
                            <li><a href="#">Setting</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('logout') }}">Sign out</a></li>
                        </ul>

                    </li>
                @else
                    <li><a href="{{ url('/adminregister') }}">Register</a></li>

                    <li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Login<span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/adminlogin">Admin Login</a></li>
                            <li class="divider"></li>
                            <li><a href="/employeelogin">Employee Login</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>


</nav><br><br><br><br>

@yield('content')

        <!-- JavaScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}-->
@include('layouts.partials.footer')
</body>
</html>
