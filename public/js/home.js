$(function(){
   "use strict";


   /*------------ navigation --------
    $('.collapsed').click(function(){
        $(this).next('.sub-menu').show()
        .siblings('.sub-menu').hide();

    });

    

   //------------- end navigation ----------*/

    //************************************** userName ************
    
    $(".navbar-header .userName").click(function(){
       $(".navbar-header .userOptions").slideToggle(1000); 
    });
    
    
    
    //*************************************************************
    
    
    //*************************** add active class to links  *************
    $(".navbar .linksNav li a").click(function(){
       $(this).parent().addClass("active").siblings().removeClass("active"); 
    });
    
    
    
    
   var choose=$(".questions label input");
    var brand=$(".navbar-brand");
    
    var i;
    for(i=0 ; i<choose.length ; i++){
        $(choose[i]).change(function(){
           if(this.checked){
               $(".myQuestionModal .modal-footer #addBtn").attr("disabled",false);
               var myVal= (this).value;
                $(".myQuestionModal .modal-footer #addBtn").click(function(){
                    $(this).addClass(".nav-pills > li.active > ");
                    if(myVal=="trueFalse"){
                        //console.log("yes");
                         setTimeout(function(){
                            window.location.href="trueFalse.html"; 
                         },200);
                    }
                    
                    else if(myVal=="calcMulti"){
                         setTimeout(function(){
                            window.location.href="choice.html"; 
                         },200);
                    }
                    
                    
            });
           }
        });
            

    }
    
    brand.click(function(){
         setTimeout(function(){
            window.location.href="HomePage.html"; 
         },200);
    });
    
    
     // ******************************** types **********************
    
    $(".show .type").typed({
       // strings:["welcome to js","This is second statement"] 
        strings:["welcome doctors and students","We hope you like this website","And serves the university",""],
        typeSpeed:50,
        startDelay:1500,
        cursorChar: ""
    });
    
    
    //************************* login ************************
    
    $(".loginBtn").click(function(){
         setTimeout(function(){
            //window.location.href="profile.html"; 
         },200);
    });
    
    
    
    //*****************contact us **************************
    
     $(".footer .linksFooter .contact").click(function(){
        $("html,body").animate({
            scrollTop:$(".contact-us").offset().top-30
        },1000);
    });
    
//    // click on button scroll top
//        
//        $(".scrollBtn").click(function () {
//            "use strict";
//           $("html,body").animate({scrollTop:0},600); 
//        });
    
    
    // ************** social media *******************
    
     $(".footer a").attr("target","_blank");



    
});


   

 