<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>RFID Access</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="/css/style4.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>RFID Dashboard</h3>
                    <strong>BS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                            <a href="{{ url('home') }}">Home </a>
                    </li>
                    <li>

                            <a href="{{ route('users.index') }}">
                              <i class="fa fa-users"></i>
                              Users
                             </a>
                    </li>
                    <li>
                        <a href="{{ url('logs') }}">
                            <i class="glyphicon glyphicon-list"></i>
                            Access Logs
                        </a>
                       
                    </li>
                    <li>
                        <a href="{{ route('departments.index') }}">
                            <i class="glyphicon glyphicon-link"></i>
                            Departments
                        </a>
                    </li>
                   
                </ul>

                
            </nav>

            <!-- Page Content Holder -->
            <div id="content" class="container-fluid">
              <div class="row">
                <div class="col-md-11">


                  <nav class="navbar navbar-default navbar-static-top">
                      <div class="container-fluid">
                          <div class="navbar-header">

                              <!-- Collapsed Hamburger -->
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                                  <span class="sr-only">Toggle Navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>

                              <!-- Branding Image -->
                              <a class="navbar-brand" href="{{ url('/') }}">
                                  RFID
                              </a>
                          </div>

                          <div class="collapse navbar-collapse" id="app-navbar-collapse">
                              <!-- Left Side Of Navbar -->
                              <ul class="nav navbar-nav">
                                  &nbsp;
                              </ul>

                              <!-- Right Side Of Navbar -->
                              <ul class="nav navbar-nav navbar-right">
                                  <!-- Authentication Links -->
                                  @guest
                                      <li><a href="{{ route('login') }}">Login</a></li>
                                      <li><a href="{{ route('register') }}">Register</a></li>
                                      @else
                                          @if (Auth::user()->role == "Admin")
                                          <li><a href="{{ route('admin.index') }}">Admin</a></li>
                                          @endif
                                      
                                      <li class="dropdown">
                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                              {{ Auth::user()->name }} <span class="caret"></span>
                                          </a>

                                          <ul class="dropdown-menu">
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
                                      </li>
                                  @endguest
                              </ul>
                          </div>
                      </div>
                  </nav>


               @yield('content')

             </div>
           </div>

            </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
