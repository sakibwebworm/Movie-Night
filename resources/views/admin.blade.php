<!DOCTYPE html>
<html lang="en" @yield('angularApp')><head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Movie Night Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ URL::asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ URL::asset('admin/css/sb-admin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ URL::asset('admin/css/plugins/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ URL::asset('admin/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
     @yield('head')
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/admin/quick_add_movie') }}">Movie Night</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                
                <li class="dropdown">
                    <a href="{{ url('/logout') }}" class=""><i class="fa fa-user"></i>{{ Auth::user()->name}}||Logout</a>
                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="{{ url('/admin/quick_add_movie') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-arrows-v"></i> User <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse" aria-expanded="false" style="height: 0px;">
                            <li>
                                <a href="{{ url('/admin/api') }}">Api</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/wishlist') }}">Wishlist</a>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->hasRole('admin'))
  <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#Slider" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-arrows-v"></i> Slider <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="Slider" class="collapse">
                            <li>
                                <a href="{{ url('/admin/add_slider') }}">Add slider</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/update_delete_slider') }}">Update/Delete Slider</a>
                            </li>
                        </ul>
                    </li>
                    
                    
                    
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#movie" class="collapsed" aria-expanded="false"><i class="fa fa-fw fa-arrows-v"></i> Movie <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="movie" class="collapse">
                            <li>
                                <a href="{{ url('/admin/add_movie') }}">Add Movie</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/all_movies') }}">Update/delete Movie</a>
                            </li>
                            <li>
                                <a href="{{ url('/admin/quick_add_movie') }}">Quick Add Movie</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid" @yield('angularcontroller')>

                <!-- Page Heading -->
                
                @yield('advice')

                
                @yield('content')

                
                

                
                

                
                

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ URL::asset('admin/js/jquery.js') }}"></script>
     @yield('footer')
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('admin/js/bootstrap.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
   




</body></html>
