jQuery(document).ready(function ($) {

    // Bootstrap menu magic
    $(window).resize(function () {
        if ($(window).width() < 768) {
            $(".dropdown-toggle").attr('data-toggle', 'dropdown');
        } else {
            $(".dropdown-toggle").removeAttr('data-toggle dropdown');
        }
    });

    /** Drop down menu making link active (check nav walker) **/
    $('.navbar .dropdown').hover(function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
    }, function() {
        $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
    });
    $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });


    // show the book visit form
    $(".book-wrapper").on('click', function(){
        $('.book-form_content').addClass('show-content');
        $('.book-form_form').addClass('show-content-form');
       $('.book-form').animate({
           'right': '0'
       })
    });
    $(".close-form, .wrapper").on('click', function(){
        $('.book-form').animate({
            'right': '-400'
        });
        $('.book-form_content').removeClass('show-content');
        $('.book-form_form').removeClass('show-content-form');
    });



   // init carousel for home page
   $('.hero-slider').slick({
       arrows: false
   });
    var href = path.templateUrl;
    var left = href+'/assets/images/prev.png';
    var right = href+'/assets/images/next.png';

    $('.block_sec_carousel_images').slick({
        prevArrow:"<img class='a-left control-c prev slick-prev' src='"+left+"' width='50'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='"+right+"' width='50'>"
    });
    $('.half_slide').slick({
        prevArrow:"<img class='a-left control-c prev slick-prev' src='"+left+"' width='50'>",
        nextArrow:"<img class='a-right control-c next slick-next' src='"+right+"' width='50'>"
    });


    // init mmenu

    var logo = '<img src="'+href+'/assets/images/silcoates_logo.jpg"  width="245"/>';
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
        $('#menu').toggle();
    });


    //ajax filter posts by category
    $('#select').change(function(){
        $('.wrapper').append('<div class="loader"></div>');
        $('.wrapper').css({'opacity': '0.5'});
        var filter = $('#filter');;
        $.ajax({
            url:filter.attr('action'),
            data:filter.serialize(), // form data
            type:filter.attr('method'), // POST
            beforeSend:function(xhr){
                filter.find('button').text('Applying Filters...');          },
            success:function(data){
                $('.loader').hide();
                $('.wrapper').css({'opacity': '1'});
                filter.find('button').text('Apply filters');
                $('#lazyload').empty().html(data);

               // $('#lazyload').empty();
            }
        });
        return false;
    });

    // ajax load more posts

    // masonry
    $('.masonry').masonry({
        columnWidth: '.grid-sizer',
        gutter: '.gutter-sizer',
        itemSelector: '.item'
    });

    // popup for masonry
    $("[data-fancybox]").fancybox({
        // Options will go here
        selector : '[data-fancybox="images"]',
        loop     : true
    });

    /* Viewport animation */

   /* $('h1').viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
    });*/
    $('.main-title').viewportChecker({
        classToAdd: 'animated fadeInUp',
        offset: 0,
        removeClassAfterAnimation: false,
        repeat: false,
    });
    $('.js-fadeUp').addClass("hideme").viewportChecker({
        classToAdd: 'visible animated fadeInUp',
        offset: 100
    });

    // loading animation
    $(".animsition").animsition({
        inClass: 'zoom-in-sm',
        outClass: 'zoom-out-sm',
        inDuration: 1000,
        outDuration: 500,
        linkElement: '.animsition-link',
        // e.g. linkElement: 'a:not([target="_blank"]):not([href^="#"])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        loadingInner: '', // e.g '<img src="loading.svg" />'
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: [ 'animation-duration', '-webkit-animation-duration'],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay : false,
        overlayClass : 'animsition-overlay-slide',
        overlayParentElement : 'body',
        transition: function(url){ window.location.href = url; }
    });


    // twitter


           // $('.ff-item').unwrap();
    $(window).on('load, scroll', function(){
       //
       $('#ctf, .ctf-tweets').contents().unwrap();
        $('.ctf-item').addClass('block_posts_single');
      //  $('article').wrap('<div class="block_posts_single"></div>');

    })





});
