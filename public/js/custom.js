$(function(){
    
    new WOW().init();
    
});


$(function(){
    
    $("#work").magnificPopup({
        delegate:'a',
        type:'image',
        gallery:{
            enabled: true
        }
    });
});


//carousel
$(function(){
    
    $("#team-members").owlCarousel({  
        
        item:3,
        autoplay: true,
        smartSpeed:700,
        loop:true,
        autoplayHoverPause:true,
        responsive : {
            
             0 : {
                 items: 1
             },
            
            480 : {
                 items: 2
             },
            768 : {
                 items: 3
             }
            
        }
    });
    
});


$(function(){
    
    $('.counter').counterUp({
         dealay:10,
         time:2000
        
    });
    
});



//navigation show
$(function(){
    
    $(window).scroll(function(){
        
        
        if($(this).scrollTop()<50){
            
            $("nav").removeClass("top-nav");
            $("#back-to-top").fadeOut();
        }
        else{
            
            $("nav").addClass("top-nav");
            $("#back-to-top").fadeIn();
        }
        
    });
    
});



//scroll
$(function(){
    
    $("a.smooth-scroll").click(function(event){
        
        event.preventDefault();
        var section= $(this).attr("href");
        
        $('html,body').animate({
            
            scrollTop:$(section).offset().top - 64
        },1250,"easeInOutExpo");
        
    });
       
        
        
    });
    
$(function(){
    
   $(".navbar-collapse ul li a").on("click touch",function(){
       
       $(".navbar-toggle").click();
   });
    
});


//popup-login

document.getElementById('home-btn').addEventListener('click',
                                                  
        function(){
        document.querySelector('.bg-model').style.display='flex';
    
});

document.querySelector('.close').addEventListener('click',
                                                  
        function(){
        document.querySelector('.bg-model').style.display='none';
    
});
