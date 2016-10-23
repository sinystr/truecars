$(document).ready(function() {
    $('.gallery-image').hover(function(){
        $('.g-img-hover', this).fadeIn();
    }, function(){ 
        $('.g-img-hover', this).stop().fadeOut();
    });
   
});