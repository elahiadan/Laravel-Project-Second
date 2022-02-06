<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard Page</title>

    <link href="{{ asset('assets/css/normalize.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/themify-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/pe-icon-7-filled.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/cs-skin-elastic.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>



<body>

    <aside id="left-panel" class="left-panel">

        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">

                <ul class="nav navbar-nav">

                    <li class="menu-title">Menu</li>

                    <li class="menu-item-has-children dropdown">

                        <a href="{{url('dashboard')}}">Dashboard</a>

                    </li>

                    <li class="menu-item-has-children dropdown">

                        <a href="{{url('product')}}">Products</a>

                    </li>

                    <li class="menu-item-has-children dropdown">

                        <a href="{{url('category')}}">Categories</a>

                    </li>

                    <li class="menu-item-has-children dropdown">

                        <a href="#">Customers</a>

                    </li>

                    <li class="menu-item-has-children dropdown">

                        <a href="#">Orders</a>

                    </li>

                    <li class="menu-item-has-children dropdown">

                        <a href="{{url('adminuser')}}">Users List</a>

                    </li>

                </ul>

            </div>

        </nav>

    </aside>

    <div id="right-panel" class="right-panel">

        <header id="header" class="header">

            <div class="top-left">

                <div class="navbar-header">

                    <a class="navbar-brand" href="http://localhost/laravel/three/dashboard">Matchless@Dashboard</a>

                    <a class="navbar-brand hidden" href="index.html"><img src="images/logo2.png" alt="Logo"></a>

                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>

                </div>

            </div>

            <div class="top-right">

                <div class="header-menu">

                    <div class="user-area dropdown float-right">

                    <p>{{ Auth::user()->email }} : <b> <a href="{{url('home')}}">Logout</a></b></p>

                    </div>

                </div>

            </div>

        </header>



        @yield('dashboard')

        @yield('product')

        @yield('category')

        @yield('admin')

        <div class="clearfix"></div>

        <footer class="site-footer">

            <div class="footer-inner bg-white">

                <div class="row">

                    <div class="col-sm-6">

                        Copyright &copy; Matchless@D

                    </div>

                    <div class="col-sm-6 text-right">

                        Designed by <a href="https://colorlib.com/">Colorlib</a>

                    </div>

                </div>

            </div>

        </footer>

    </div>

    <script src="{{ asset('public/assets/js/main.js') }}" ></script>

    <script src="{{ asset('public/assets/js/plugins.js') }}" ></script>

    <script src="{{ asset('public/assets/js/popper.min.js') }}" ></script>

    <script src="{{ asset('public/assets/js/widgets.js') }}" ></script>

</body>



</html>