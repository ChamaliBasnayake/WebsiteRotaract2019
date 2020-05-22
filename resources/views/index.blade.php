<!DOCTYPE html>
<html lang="en">
    <head>
       
        <!--meta tag-->
        <meta charset="utf-8">
        <meta http-equlv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width,initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <script src="https://maxcdn.bootstrapcdn.com/boostrap/3.3.7/js/boostrap.min.js"></script>
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
            
    </head>
            
    
    <body data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65" >
    
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
                             <li><a class="smooth-scroll " href="i/">Home</a></li>
                             <li><a class="smooth-scroll "  href="#services">Services</a></li>
                             <li><a class="smooth-scroll "  href="#work">Work</a></li>
                             <li><a  class="smooth-scroll " href="#team">Team</a></li>
                             
                             <li><a class="smooth-scroll " href="#contact">Contact</a></li>
                             <li><a  class="smooth-scrol " href="/viewdonation" id="home-btn">Donate</a></li>
                              <li><a class="smooth-scrol " href="/userview">Events</a></li>
                             <li><a class="smooth-scrol " href="{{ route('register') }}">Register</a></li>
                           
                             <li><a  class="smooth-scrol " href="{{ route('login') }}" >Login</a></li>
                         </ul>
                      
                      </div>
                   
                   </div>
               
                </div>
                 
                  
                   
           
                   
            </nav>
            
        </header>
    
    
    
    <!--Home-->
    <section id="home" >
        
        <div id="home-cover" class="bg-parallex animated fadeIn">
        
              <div id="home-content-box">
                  
                  <div id="home-content-box-inner">
                      <div id="home-heading" class="animated zoomIn">
                          
                          <h1>People of Action</h1>
                          <p>Rotary is where neighbors, friends, and problem-solvers share ideas,
                              join leaders, and take action to create lasting change.</p>
                    
                        </div>
                      <div id="home-btn" class="animated zoomIn">
                          <a class="btn smooth-scroll btn-lg btn-general btn-white" href="#services" role="button" 
                             title="View our work">View our Work</a>
                      </div>
                  </div>
                  
              </div>
        
        </div>
    
    
    
    </section>
        
        
       
    <!--Services-->
        <section id="services" style="background-color:#0a0619">
            
            <div class="content-box">
                
                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h2>Our Services</h2>
              
                <div class="content-title-underline"></div>
              </div>
                
                <div class="container">
                    <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                        
                        <div class="row">
                @foreach($posts->all() as $row)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="service-item">
                           
                                <div class="service-item-icon">
                                  <i class="fa fa-edit fa-3x"></i>
                                </div>
                                
                                <div class="service-item-title">
                                    <h3 style="color:#FFFFFF">{{$row->title}}</h3>
                                    
                                </div>
                                <div class="service-item-desc">
                                    <p style="color:#C0C0C0">{{ substr($row->body,0,150)}}</p>
                                    
                                    <a href="/view/{{$row['id']}}">
                                        <span class=" fa fa-eye" style="color:#66f4be" >View more</span>
                                    </a>
                                   <br/>
                                    <cite style="color:#66f4be;">Posted On:{{date('M j, Y H:i',strtotime($row->updated_at))}}</cite>
                               </div>
                            </div>
                                
                        </div>
                           
                           
                @endforeach
                       
                </div>        
                      
                      
                       
                        
                    </div>
                </div>        
            </div>
            
            
        </section>
        
        
               
    <!--About-->
        <section id="about">
            
            <div id="about-bg-diagonal" class="bg-parallex" ></div>
            
            <div class="container">
                
                <div class="row">
                   <div id="about-content-box"> 
                    <div class="col-md-4">
                        
                        <div id="about-content-box-outer">
                            
                              <div id="about-content-box-inner">
                            
                                   <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                    <h3>About Us</h3>
              
                                   <div class="content-title-underline"></div>
                               </div>
                                  
                               <div id="about-desc" class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                                   
                                  <p>Rotaract clubs bring together people ages 18-30 to exchange ideas with leaders in the community, develop leadership and professional skills, and have fun through service.</p>
                                  </div>
                                   
                                  <div id="about-btn " class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                      
                                      <a class="btn smooth-scroll btn-lg btn-general btn-blue" href="#work">Our Work</a>
                                  </div>
                                  
                                
                             </div>
                            
                          </div>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            
           
        </section>
        
        
        
        
        <!--Work-->
        <section id="work" style="background-color: rgba(0,0,26)">
            
            <div id="work" class="content-box">
                
                <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h2>Gallery</h2>
              
                <div class="content-title-underline"></div>
               </div>
            
            
                 <div class="container">
                  <div class="row no-gutters wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                     <div class="row">
                  
                  @foreach($post->all() as $row)
                  
                     
                          <div class="col-md-4 col-sm-6 ">
                           
                              <div class="img-wrapper" style="width:380px;height:272px;">
                             
                                    <a href="/storage/{{$row->image}}" >
                                    <img src="/storage/{{$row->image}}" alt="Image">
                                    </a>
                            
                              </div>
                            
                          </div>
                          
                             
                            
                          @endforeach 
                          
                            
                          </div>
                          
                          
                      </div>
                     
                      </div>
                          
                         
                          
                          
                              
</div>
                          
                          
                      </div>
                      
                      
              
            
        </section>
        
        
        
        
        <!--Team-->
        
               
<section id="team"> 
    <div class="content-box">
                
        <div class="content-title wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3>Our Team</h3>
              
                <div class="content-title-underline"></div>
        </div>
            
            
    <div class="container">
    <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
    <div id="team-members" class="owl-carousel owl-theme">
    
                  @foreach($team->all() as $row)
                      
                          
                          <div class="col-md-12">
                             
                                  
                                  
                                    <img src="/storage/{{$row->image}}" alt="Image"class="img-responsive">
                                    
                                    
                                      
                                      <div class="team-member-info text-center">
                                          <h4 class="team-member-name">{{$row->name}}</h4>
                                          <h4 class="team-member-designation">{{$row->position}}</h4>
                                          <h4 class="social-list">
                                              <i class="fa fa-envelope">{{$row->email}}</i>
                                              
                                          </h4>
                                           
                                      </div>
                                  
                                  </div>
                                  
                             
                              
                              
                          
                          
                 
                @endforeach 
                </div> 
                </div>          
         
                      
                      
        </div>
                
    </div>
</section>
         
        
    <!--   
        
      
        
 <section id="stats" >
     
     <div id="stats-cover" class="bg-parallex">
            
    <div class="content-box">
                
         <div class="content-title content-title-white wow animated fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                    <h3 style="color:white">We Never Stop Imroving</h3>
              
             <div class="content-title-underline"></div>
             
          </div>
            
            
            <div class="container">
                     
               <div class="row text-center wow animated bounceInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                          
                    <div class="col-md-6 col-sm-4">
                           
                         <div class="stats-item">
                                 
                             <i class="fa fa-star-o fa-5x">  </i>
                             <h2><span class="counter">33</span><span>+</span></h2>
                             <p>Members</p>
                        </div>
                                        
                     </div>
                   
                    
                      <div class="col-md-6 col-sm-4">
                           
                         <div class="stats-item">
                                 
                             <i class="fa fa-check fa-5x">  </i>
                             <h2><span class="counter">3</span><span>+</span></h2>
                             <p>Awards</p>
                        </div>
                                        
                     </div>
                   
                   
                </div>
            </div>
       </div>
     </div>         
</section>
    
    
        -->
           
         <!---Contact--->
        
        <footer>
        
          <div id="contact">
              
              
              <div class="container">

              
                <div class="row">
                  
                    <div class="col-md-6">
                        <div id="contact-left">
                            
                        <h4>Rotaract Badulla</h4>
                        <p>Rotaract clubs bring together people ages 18-30 to exchange ideaswith leaders in the community, develop leadership and professional skills, and have fun through service.</p>
                            
                            <div id="contact-info">
                                <address>
                                    <strong>Address</strong><br>
                                    <p>Rotaract Club,<br>Passara Road,<br>Badulla.</p>
                                </address>
                                
                                <div id="phone-fax-email">
                                    <p>
                                        <strong>Phone:</strong><span>(055)5552356</span><br>
                                        <strong>Fax:</strong><span>(055)5452356</span><br>
                                        <strong>Email:</strong><span>Rotaract@badulla.com</span><br>
                                    </p>
                                </div>
                                           
                                
                            </div>
                            
                              <ul class="social-list">
                                     <li><a href="#" class="social-icon icon-white"><i class="fa fa-facebook"></i></a></li>
                                     <li><a href="#" class="social-icon icon-white"><i class="fa fa-twitter"></i></a></li>
                                      <li><a href="#" class="social-icon icon-white"><i class="fa fa-google-plus"></i></a></li>
                                      <li><a href="#" class="social-icon icon-white"><i class="fa fa-youtube-play"></i></a></li>
                                  </ul>
                            
                        </div>    
                    </div>
                  
                    
                    <div class="col-md-6">
                        
                       <div id="contact-right">
                        
                            <h4>Contact us</h4>
                            @if(count($errors) > 0)
                            <div class="alert alert-danger">
                              <a href="{{route('contact')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <ul>
                                @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                
                                @endforeach
                                </ul>
                                </div>
                            @endif

                            @if(\Session::has('success'))
                            <div class="alert alert-success">
                              <a href="{{route('contact')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <p>{{ \Session::get('success') }} </p>
                           
                            </div>
                            
                            @endif
                            <form method="post" action="/contact">
                                  {{csrf_field()}}
                                  <input type="text" name="fullname" placeholder="Full Name" class="form-control">
                                 <input type="text" name="email" placeholder="Email Address" class="form-control">
                                 <input type="text" name="contact" placeholder="Contact Number" class="form-control">
                                <textarea rows="5" name="message" placeholder="Message...." class="form-control"></textarea>
                                
                                
                                <div id="send-btn">
                                    <input type="submit" value="send" class="btn btn-lg btn-general btn-black" style="background-color:#DCDCDC;border-radius:5px">
                                </div>
                                
                           </form>
                        
                        </div>
                    </div>
                    
                  </div>
              
              </div>      
              
            </div>
        
        
        <div id="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                                  
                      <div id="footer-copyrights">
                        
                          <p>Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
                    
                    </div>
                    <div class="col-md-6 hidden-sm hidden-xs">
                        
                        <div id="footer-menu">
                            <ul>
                                <li><a class="smooth-scroll " href="#home">Home</a>/</li>
                                <li><a class="smooth-scroll " href="#services">Services</a>/</li>
                                <li><a class="smooth-scroll " href="#work">Work</a>/</li>
                                <li><a class="smooth-scroll " href="#team">Team</a>/</li>
                               
                                <li><a class="smooth-scroll " href="#contact">Contact</a></li>
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
        <a href="#home" id="back-to-top" class="btn btn-blue btn-back-to-top smooth-scroll"><i class="fa fa-angle-up"></i></a>
        
        </footer>
        
        
        
        
        
        
        <!--JQuery-->
        <script src="js/jquery.js"></script>
        
            <!--bootstrap js-->
        <script src="js/bootstrap/bootstrap.min.js"></script> 
        
        
         <!--wow js-->
        
        <script src="js/wow/wow.min.js"></script>
        
        
          <!--magnificpopup js-->
        <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
        
            
           <!--owlcarousel js-->
        
        <script src="js/owlcarousel/owl.carousel.min.js"></script>
        
          <!--counter js-->
        <script src="js/counter/jquery.waypoints.min.js"></script>
        <script src="js/counter/jquery.counterup.min.js"></script>
        
            <!--easing js-->
        <script src="js/easing/jquery.easing.1.3.js"></script>
        
         
         <!--customjs-->
            <script src="js/custom.js"></script>
            
    </body>



</html>
    