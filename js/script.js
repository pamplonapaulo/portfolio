$(document).ready(function (){
    
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
    
    $('#hamb-nav').click(function(){
        $(this).toggleClass('open');
        $('.menu').fadeToggle('400');
	   });
	if ($(window).width() < 1170){
        $('.menu').hide();
    } else {
        $('.menu').show();
    }
});
$(window).resize(function() {
    if ($(window).width() < 1170){
        $('#hamb-nav').removeClass('open');
        $('.menu').hide();
    } else {
        $('.menu').show();
    }
});

