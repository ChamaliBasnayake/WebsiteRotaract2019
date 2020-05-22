 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rotaract
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />


           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    

    <link rel="stylesheet" href="/css/eventscalendar.css" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" style="background-image: url('/images/a.jpg')" style="background-image: url('/images/a.jpg')">
     
      <div class="logo"style="background-color:#002230">
        <a href="" class="simple-text logo-mini">
         
        </a>
        <a href="" class="simple-text logo-normal">
       Rotaract Badulla
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper"style="background-color:#002230">
        <ul class="nav">
         <li class="{{'dashboard'== request()->path() ? 'active' :''}}">
            <a href="/home">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="{{'dashboard'== request()->path() ? 'active' :''}}">
            <a href=" /abcd/{{ Auth::user()->id }}">
              <i class="now-ui-icons users_single-02"></i>
              <p>My Profile</p>
            </a>
          </li>
          
          <li class="{{'reportgeneration'== request()->path() ? 'active' :''}}">
            <a href="/payment">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>Membership Payment</p>
            </a>
          </li>
          <li class="{{'sendemail'== request()->path() ? 'active' :''}}">
            <a href="/reguserview">
             <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Events</p>
            </a>
          </li>
         
           <li class="{{''== request()->path() ? 'active' :''}}">
            <a href="/viewdonation">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Donations</p>
            </a>
          </li>
           <li class="{{'registered-users'== request()->path() ? 'active' :''}}">
            <a href="/chats">
              <i class="now-ui-icons ui-2_chat-round"></i>
              <p>Chat</p>
            </a>
          </li> 
          
           <li class="">
            <a href="/showpost">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>View Job Vacancies</p>
          </li>
           
          <li class="" style="color:orange">
            <a href="/userviewgeneratedreports">
          <i class="now-ui-icons files_single-copy-04"></i>
              <p>Generated Reports</p>
            </a>
          </li>
           
           <li class="">
            <a href="/">
              <i class="now-ui-icons tech_tv"></i>
              <p>View Projects</p>
          </li>
          <li class="{{'registered-users'== request()->path() ? 'active' :''}}">
            <a href="/addpro">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Add Projects</p>
            </a>
          </li>
          <li class="{{'registered-users'== request()->path() ? 'active' :''}}">
            <a href="/accptpro">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Accepted Projects</p>
            </a>
          </li>  
            
            
           
         
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" style="margin-left:1050px" >
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
          
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav" >
            
             
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li> -->
                   <li class="nav-item dropdown" >
                                <a id="navbarDropdown" style="color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"  ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style= "background-color:black">
                                    <a class="dropdown-item" style="color:white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm"style="background-color:#002230">
      </div>
      <div class="content" style="background-image: url('/images/a.jpg')">
      
     <div class="container" style="margin-top:-85px">
      <h1 style="margin-top:145px;margin-left:435px;color:white;margin-top:25px">Events Calendar </h1>
       <br> 
    <br> 
    <br> 
    <br> <br>
   
  
     <div class="row" style="margin-top:-65px">
       <div class="col-md-8 col-md-offset-2">
         <div class="panel panel-default">
           <div class="panel-heading" style="background: #2e6da4; color:white">
           Events Calendar 
          </div>

          <div class="panel-body">
           {!! $calendar->calendar() !!} 
           {!! $calendar->script() !!}

           </div>
        </div>
      </div>
    </div>     
  
  </div>    
   
    
      </div>
      <footer class="footer"style="background-color:#002230">
        <div class="container-fluid">
          <nav>
            <div class="col-md-12">
                                  
                      <div id="footer-copyrights">
                        
                          <p style="padding-left:358px;color:white">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
                    
                    </div>
          </nav>
          
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->

  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('scripts')
</body>

</html>