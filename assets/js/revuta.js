$(document).ready(function () {
    $('.holder').hover(function () {
        $('img', this).stop().animate({
            "opacity": "1",
                "width": "283px",
                "height": "185px",
                "brightness": "100%"
        }, 1500);
        $('.r-caption', this).stop().animate({
            "width": "240px",
                "margin-left": "20px"
        }, 2000, function () {
            $("p", this).fadeIn();
        });
    }, function () {
        $('img', this).stop().animate({
            "opacity": "0.8",
                "width": "500px",
                "height": "316px"
        }, 2000);

        $("p", this).fadeOut();

        $('.r-caption', this).stop().animate({
            "width": "0px",
                "margin-left": "140px",

        }, 2000);
    });

});