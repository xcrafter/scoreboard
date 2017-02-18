$(window).load(function()
                 {  
       $("#loadx").slideUp(2000);
       $("div").removeClass("begin");
       $("#barin").show();
       
     
       
      
  }
                );

 $(document).keyup(function(e) {
  if (e.keyCode == 27) { 
  
   $("#cover").css("display","none");
                              ($("#absolute_frame").css("display","none")).slideUp();
      $("#fk1").css("display","none");
      $("#fk2").css("display","none");
      $("#fk3").css("display","none");
      $("#fk4").css("display","none");
      $("#fk5").css("display","none");
      $("#fk6").css("display","none");
      
  }   // esc
});
//coded by jijojohn@singlelinelogics
$(document).ready(function(){
    
     $("#tk1").click(function()
                                        
                                           {
            
            $("#cover").css("display","block");
                              $("#absolute_frame").fadeIn("slow");
                              
                              $("#fk1").fadeIn("slow");
                              
        });
           
           
           
                          $("#tk2").click(function()
                                        
                                           {
            
            $("#cover").css("display","block");
                              $("#absolute_frame").fadeIn("slow");
                              
                              $("#fk2").fadeIn("slow");
                              
        });
           
           
           
                          $("#tk3").click(function()
                                        
                                           {
            
            $("#cover").css("display","block");
                              $("#absolute_frame").fadeIn("slow");
                              
                              $("#fk3").fadeIn("slow");
                              
        });
           
           
           
                          $("#tk4").click(function()
                                        
                                           {
            
            $("#cover").css("display","block");
                              $("#absolute_frame").fadeIn("slow");
                              
                              $("#fk4").fadeIn("slow");
                              
        });
           
           
                          $("#tk5").click(function()
                                        
                                           {
            
            $("#cover").css("display","block");
                              $("#absolute_frame").fadeIn("slow");
                              
                              $("#fk5").fadeIn("slow");
                              
        });
           
           
           
                          $("#tk6").click(function()
                                        
                                           {
            
            $("#cover").css("display","block");
                               $("#absolute_frame").fadeIn("slow");
                              
                              $("#fk6").fadeIn("slow");
                              
        });
setInterval(anim('.scroll'),2000);    
setInterval(anim('#fluid_cont_1 img'),3000);

$('.tlt').textillate({ autoStart:true,loop:true, in: { effect: 'tada'},out: { effect: 'bounceOut'}});

  
    
$('#s_roll_link').click(function(e){  e.preventDefault();


$('html,body').animate({
          scrollTop: $("#container_fluid_2").offset().top
        }, 2000);


});
        

 $(".tlt_2,.tlt_3,#sponsor_img,.holder,#chart,#icon_holder,.profile_holder").smoove({
    offset  : '30%',
    moveX   : '100px',
    moveY   : '100px',
  });
    

$(".scroll").mouseenter(function(){
$(".scroll").fadeOut().fadeIn();
	

});

$(".scroll").click(function(){

$('html,body').animate({
          scrollTop: $("#container_fluid_2").offset().top
        }, 2000);

});
    
    $(".scroll1").click(function(){

$('html,body').animate({
          scrollTop: $("#container_fluid_3").offset().top
        }, 2000);

});
    
     
    $(".scroll2").click(function(){

$('html,body').animate({
          scrollTop: $("#container_fluid_4").offset().top
        }, 2000);

});
    
     $(".scroll3").click(function(){

$('html,body').animate({
          scrollTop: $("#container_fluid_5").offset().top
        }, 2000);

});
         $(".scrollx").click(function(){

$('html,body').animate({
          scrollTop: $("#container_fluid_1").offset().top
        }, 2000);

});
});

function anim(elementr)
{
    $(elementr).fadeOut().fadeIn();
    
}
	
		
		
	



