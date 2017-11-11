$(document).ready(function(){
           $('#less').hide();
            $('.additional').hide();
               $('#more').click(function(){
                   $('.additional').toggle();
                   $('#less').show();
                   $('#more').hide();
               });
                $('#less').click(function(){
                    $('.additional').hide();
                    $('#more').show();
                    $('#less').hide();
                });
            /*toggle*/
            $("#menu-toggle").mouseover(function(){
              
                 $('#wrapper').toggleClass("menuDisplayed");
                
                
            });
    
    /* see more*/
                    $(".seemore").click(function(){
                $(this).hide();
                $(".part_two").show();
                $(".seeless").show();
            });
                        $(".seeless").click(function(){
                $(this).hide();
                $(".part_two").hide();
                $(".seemore").show();
            });
                

            
           
           
            
    
            /* TT */
            $('[data-toggle="tooltip"]').tooltip();
    
    
    /*form  warnings  */
    $('#std_pwd').mouseover(function(){
        $('#talkbubbleA').hide();
         $('#talkbubbleB').hide();
         $('#talkbubbleC').hide();
        
    });
    $('#std_pwd').mouseout(function(){
        $('#talkbubbleA').show();
         $('#talkbubbleB').show();
        $('#talkbubbleC').show();
        
    });
    
    $('#std_uname').mouseover(function(){
        $('#talkbubble').hide();
         
    });
    $('#std_uname').mouseout(function(){
        $('#talkbubble').show();
         
        
    });
    
    
            
        });



