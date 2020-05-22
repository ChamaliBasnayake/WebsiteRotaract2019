<!DOCTYPE html>
<html lang="en">
    <head>
       
        <!--meta tag-->
        <meta charset="utf-8">
        <meta http-equlv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width,initial-scale=1">
        
          <!--Title-->
        <title>Rotaract Club</title>
        
        <!--google font-->
         <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet"> 
         
        <link href="">    
                    
          <!--Style CSS-->
        <link rel="stylesheet" href="css/style.css">
        
         <!--font awesome-->
        <link rel="stylesheet" href="css/font/css/font-awesome.min.css">
        
            <!--bootstrap css-->
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        
        <!--animate css-->
         <link rel="stylesheet" href="css/animate/animate.css" >
        
            <!--magnificpopup css-->
        <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css">
        
         <!--owlcarousel css-->
        <link rel="stylesheet" href="css/owlcarousel/owl.carousel.min.css">
                
        <link rel="stylesheet" href="css/owlcarousel/owl.theme.default.min.css">
       
        
            <!--style css-->
        <link rel="stylesheet" href="css/style.css">
                
         <!--responsive css-->
        <link rel="stylesheet" href="css/responsive.css">

        <style>
        .form-group{
            color:white;
            padding-top:25px;
            font-size:22px;
        }
        #contact-right{
            margin-top:125px;
            color:white;
        }
        #body{
            background-image: url("/images/reg.jpg");
        
            height:100%;
            background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           background-attachment: fixed;
        }
        </style>
            
    </head>
            
            
            
<body id="body" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65" id="reg-body" >
  
  
  
      <!--NavBar-->
        <header>
            
            <nav role="navigation" class="navbar  navbar-fixed-top">
            
               <div class="container-fluid">
               
                  <div class="nav-wrapper">
                  
                    <div class="navbar-header">
                      
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                            
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                         </button>
                      
                        <a class="navbar-brand" href="#home">
                            <img src="/images/logo1.jpg" >
                        </a>
                      </div>
                      
                      <div id="menu" class="collapse navbar-collapse">
                         <ul class="nav navbar-nav">
                        <li><a class="smooth-scrol " href="{{ route('contact') }}">Home</a></li>
                             <li><a class="smooth-scrol"  href="{{ route('contact') }}">Services</a></li>
                             <li><a class="smooth-scrol "  href="{{ route('contact') }}">Work</a></li>
                             <li><a  class="smooth-scrol " href="{{ route('contact') }}">Team</a></li>
                             <li><a  class="smooth-scrol " href="{{ route('contact') }}">Stats</a></li>
                             <li><a class="smooth-scrol " href="{{ route('contact') }}">Contact</a></li>
                             <li><a  class="smooth-scrol " href="{{ route('logo') }}">Login</a></li>
                              <li><a  class="smooth-scrol " href="#" id="{{ route('form') }}">Register</a></li>
                               <li><a  class="smooth-scroll " href="#" id="home-btn">Donate</a></li>
                             <li><a  class="smooth-scrol " href="{{ route('login') }}">Live Chat</a></li>
                         </ul>
                      
                      </div>
                   
                   </div>
               
                </div>
                 
  
  
            </nav>
    </header>
  
  
   <!--Reg form-->
   
   <div>
       <div class="container">
       <div class="row"> 
     <div class="col-md-6">
                        
                        <div id="contact-right" >
                        
                            <h2>Account Registration</h2>
                         @if(count($errors) > 0)
                               <div class="alert alert-danger">
                               <a href="{{route('form')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                  <ul>
                                  @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                  @endforeach
                                  </ul>
                            @endif
                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                         <a href="{{route('form')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <p>{{ \Session::get('success')}}</p>
                            </div>

                            @endif
                            </div>

                            <form method="post" action="/form" id="form">
                             {{csrf_field()}}
                                 <div class="form-group"> First Name:
                                  <input type="text" name="firstname" placeholder="First Name" class="form-control">
                                  </div>

                                  <div class="form-group">
                                  Last Name:
                                  <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                                  </div>

                                  <div class="form-group">
                                  Email:
                                 <input type="text" name="email" placeholder="Email Address" class="form-control">
                                 </div>

                                 <div class="form-group">
                                  User Name:
                                  <input type="text" name="username" placeholder="User Name" class="form-control">
                                  </div>

                                  <div class="form-group">
                                 Password:
                                 <input type="password" name="password" placeholder="Min 8 characters" class="form-control">
                                  </div>

                               
                                 

                                <div class="form-group" style="padding-left:px">
                                    <input type="submit" class="btn btn-primary" value="Submit" id="log-btn">
                                </div>
                                <br>
                                
                                <p style="color:#ffffff;align:center">
                                    By creating an account, you are agreeing to Rotary's<strong> Privacy Policy</strong>and <strong>Terms of Use.</strong> Your privacy is important to Rotary and the personal data you share with Rotary will only be used for essential activities or legitimate interests that do not unduly interfere with your privacy rights. These uses include financial processing, supporting The Rotary Foundation, facilitating event planning, communicating key organizational messages and responding to your inquiries. Rotary's privacy policy can be found at <a>https://my.rotary.org/privacy-policy.</a>
                                </p>
                                
                           </form>
                        
        </div>
     </div>
   
           </div>
    </div>
    </div>
   
   
   
   <!--Footer-->
   
     <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                                  
                      <div id="footer-copyrights">
                        
                          <p style="color:">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
                    
                    </div>
                   
                </div>
            </div>
        </div>
   
   
   
   
   
   
   
        <!--JQuery-->
        <script src="js/jquery.js"></script>
        
            <!--bootstrap js-->
        <script src="js/bootstrap/bootstrap.min.js"></script> 
        
        
            <!--easing js-->
        <script src="js/easing/jquery.easing.1.3.js"></script>
        
        
          <!--customjs-->
            <script src="js/custom.js"></script>
   
 </body>
</html>