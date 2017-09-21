$(document).ready(function (){

// Light Box
    $('.galleryItem').on('click',function (e) {
        e.preventDefault();
        var numero = $(this).attr("name");
        $("#overlay").fadeTo(300, .85);
        $('#galleryItemContent' + numero).delay(300).fadeIn(300);

        $("#overlay, #close").click(function(event){
            event.preventDefault();
            $("#overlay").hide();
            $('#galleryItemContent' + numero).hide();
        });
    });

// Scroll Down on Click
    
   $('a[href^="#"]').on('click',function (e) {
      e.preventDefault();
       
       var target = this.hash;
       var $target = $(target);
       
       $('html, body').animate({
           'scrollTop': $target.offset().top
       }, 1000, 'swing', function () {
           window.location.hash = target;
       });
   });
    
//    Hide Scroll Down Arrows
    
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
//    Challenge: I need make it DRY
$(window).resize(function() {
    if ($(window).width() < 1170){
        $('#hamb-nav').removeClass('open');
        $('.menu').hide();
    } else {
        $('.menu').show();
    }
});




