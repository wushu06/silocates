jQuery(document).ready(function ($) {
   // init carousel for home page
   $('.block_carousel_images').slick({
       arrows: false
   });
    var href = path.templateUrl;
    var left = href+'/assets/images/arrow-prev.png';
    var right = href+'/assets/images/arrow-next.png';

    $('.block_sec_carousel_images').slick({
        prevArrow:"<img class='a-left control-c prev slick-prev' src='"+left+"' width='50'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='"+right+"' width='50'>"
    });

    // init mmenu


    $("#menu").mmenu({
        offCanvas: {
            pageNodetype: "section"
        },
        navbar: {
            title: logo
        },
        navbars: [{
            position: "top"
        }]
        // configuration



    });
    $('.click, .mm-slideout').on('click', function() {
        $('.click').toggleClass('open');
    });

});
