$(document).ready(function() {
            $('#logo').hover(function(){
                $('#logo-hover', this).fadeIn();
            }, function(){ 
                $('#logo-hover', this).stop().fadeOut();
            });
           
        });