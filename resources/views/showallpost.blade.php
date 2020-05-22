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
  
  
 <!--chamali-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style type ="text/css">
    .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
          background-color:#1c1d1e;
          margin-top:105px;
          color:white;
         
    }
    .has-error
    {
        border-color:#cc0000;
        background-color:#ffff99;
        


    }
    #email{
      
       background-repeat:no-repeat;
       background-size:cover;
       height:100%;
       background-position:center;
       background-attachment:fixed;
    }
.form-group.hover{
 backcolor:orange;
}<style type ="text/css">
    .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;
          background-color:#1c1d1e;
          margin-top:105px;
          color:white;
         
    }
    .has-error
    {
        border-color:#cc0000;
        background-color:#ffff99;
        


    }
    #email{
        background-image:url("/images/email.jpg");
       background-repeat:no-repeat;
       background-size:cover;
       height:100%;
       background-position:center;
       background-attachment:fixed;
    }

    .form-control{
        color:black;
    }
    .form-group{
        font-size:15px;
        padding-top:10px;
        padding-left:25px;
        padding-right:25px;
    }
    .close{
        
    }
    </style>


</head>

<body class="">
  <div class="wrapper " style="background-color:#1cb8b1">
    <div class="sidebar"style="background-color:#1cb8b1">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo" style="background-color:#024744">
        <a href="" class="simple-text logo-mini">
         
        </a>
        <a href="" class="simple-text logo-normal">
       Rotaract Badulla
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper"style="background-color:#044240">
        <ul class="nav">
             <li class="{{'dashboard'== request()->path() ? 'active' :''}}">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="{{'reportgeneration'== request()->path() ? 'active' :''}}">
            <a href="/reportgeneration">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Report Generation</p>
            </a>
          </li>
          <li class="{{'sendemail'== request()->path() ? 'active' :''}}">
            <a href="/sendemail">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Send Email</p>
            </a>
          </li>
         
          </li>
          <li class="{{'registered-users'== request()->path() ? 'active' :''}}">
            <a href="/registered-users">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
           <li class="{{''== request()->path() ? 'active' :''}}">
            <a href="/adddetails">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Add Donations</p>
            </a>
          </li>
          <li class="{{''== request()->path() ? 'active' :''}}">
            <a href="/view_all">
              <i class="now-ui-icons shopping_cart-simple"></i>
              <p>View Donations</p>
            </a>
          </li>
           <li class="">
            <a href="/post">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Add Job Vacancies</p>
          </li>
           
          <li class="" style="color:orange">
            <a href="/allpayments">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>View Membership Payments</p>
            </a>
          </li>
           
           <li class="">
            <a href="/postpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Publish Projects</p>
          </li>
          <li class="">
            <a href="/adminaddpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Add Projects</p>
          </li>
           <li class="">
            <a href="/viwnwpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Accept Projects</p>
          </li>
          <li class="">
            <a href="/events">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Publish Events</p>
            </a>
          </li>
            <li class="">
            <a href="/uploadimg">
              <i class="now-ui-icons media-1_album"></i>
              <p>Update Gallery</p>
            </a>
          </li>
           <li class="">
            <a href="/uploadteam">
              <i class="now-ui-icons users_circle-08"></i>
              <p>Update Team</p>
            </a>
          </li>
         
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" style="background-colour:orange">
        <div class="container-fluid">
         
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation"style="margin-bottom:-25px" >
            
            <ul class="navbar-nav" >
                 
              <li class="nav-item" >
                  <i class="now-ui-icons users_single-02"></i>
              </li>
              <li class="nav-item dropdown" >
                               
                                <a id="navbarDropdown" style="color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"  ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"style= "background-color:#0b7574">
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
            </ul>
         
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm" style="height:0px">
      </div>
       <div class="content">
        <div class="container">
          <div class="text-center">
            <h1 style="color:white;padding-top:40px;margin-left:185px">
                  Submitted Job Vacancies 
                           <a href="/post" class="btn btn-success" role="button" style="float: right;margin-top:45px"> Add New Vacancy </a>
              </h1>

              <br><br>

            
              <div style="overflow-x:auto;">
                <table class="table" style="background-color:white;margin-top:5px">
                  <thead class="thead-dark">
                     
                      <th>
                          Description
                      </th>

                      <th>
                          Files
                      </th>

                      <th>
                          Delete Posts
                      </th>
                  </thead>         
                  @foreach($de as $v)
                  <tr >  
                      

                      <td>{{$v->description}}</td>

                      <td> <img src="/storage/{{$v->image}}" alt="Image" style="width:200px; height:150px;"></td>

                      <td>
                          <a href="/deletePost/{{$v->id}}" class="btn btn-danger"onclick="return confirm('Are you sure you want to delete this record?')"> Delete </a>
                      </td>
                      
                  </tr>
                  @endforeach
                   {{ $de->links() }}
              </table>
              
              </div>
            

          </div>
 
      </div>

      </div>
      <footer class="footer" style="background-color:#024744">
        <div class="container-fluid" >
          <nav >
            <div class="col-md-12">
                                  
                      <div id="footer-copyrights" >
                        
                          <p style="padding-left:358px;color:white">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
                    
                    </div>
          </nav>
          
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
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