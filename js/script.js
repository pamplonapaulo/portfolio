$(document).ready(function (){
    
//    Scroll Down Arrows
    
   $(window).scroll(function() {
    if ($(this).scrollTop()>80) {
        $('.arrow-wrapper').fadeOut();
     } else {
      $('.arrow-wrapper').fadeIn();
     }
 }); 
    
//    Responsive Hero Slider
  
   function fullScreen() {
       $("#hero").css({
           width:$(window).width(),
           height:$(window).height()*.4
       });
   } 
    fullScreen();

    $(window).resize(function(){
        fullScreen();
    });
    
    
//    Hamburguer Menu Icon Animation
    
    $('#hamb-nav').click(function(){
        $(this).toggleClass('open');
        $('.menu').fadeToggle('400');
	   });
	if ($(window).width() < 1170){
        $('.menu').hide();
    } else {
        $('.menu').show();
    }
    
//    SubMenu DropDown for Touch Screen
    
    $('.subMenu').click(function(){
        $('.touchDropDown').toggleClass('expand');
    });
  
});


//    Resize Hamburguer Menu Icon Animation
//    Problem: I need make it DRY
$(window).resize(function() {
    if ($(window).width() < 1170){
        $('#hamb-nav').removeClass('open');
        $('.menu').hide();
    } else {
        $('.menu').show();
    }
});




