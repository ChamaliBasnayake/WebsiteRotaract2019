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

           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    
    <link rel="stylesheet" href="/css/eventscalendar.css" type="text/css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

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
            background-image: url("/images/a.jpg");
        
            height:100%;
            background-repeat: no-repeat;
           background-size: cover;
           background-position: center;
           background-attachment: fixed;
        }
  .navbar-nav>li>a:hover,.navbar-nav>li>a:focus{
    
    background: none;
    color:#34c6d3;
    
}
        
        </style>
            
    </head>
            
            
            
<body id="body" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="65" id="reg-body" >
  
  
  
     
  
   <!--Reg form-->
   
  
     <div class="container">
      <h1 style="margin-top:45px;margin-left:435px;color:white">Events Calendar </h1>
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
   
    
            <!--bootstrap js-->
        <script src="js/bootstrap/bootstrap.min.js"></script> 
         <!--easing js-->
        <script src="js/easing/jquery.easing.1.3.js"></script>
        
        
          <!--customjs-->
            <script src="js/custom.js"></script>
        
 </body>
</html>