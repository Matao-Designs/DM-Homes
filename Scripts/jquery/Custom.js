
// Shorthand for $( document ).ready()
$(function() {

    var messageSent = getUrlParameter('messageSent');
    if(messageSent == undefined)messageSent = 2;

    console.log(messageSent);

    if(messageSent == "1")
    {
        $("#successForm").show("slow");

        setTimeout(hideMessage, 4000);


    }

    function hideMessage(){
        $("#successForm").hide("slow");
    }



    var pathname = window.location.pathname; // Returns path only

    //alert(pathname);

if(pathname == "/index.php" || pathname == "/")
{

        

    var elem = $('.whyImage');

    elem.mouseover(function () {
        TweenLite.to(elem, 1, {scale: 1.1, ease: Linear.easeOut});
    })

    elem.mouseout(function () {
        TweenLite.to(elem, 1, {scale: 1});
    })


$(window).scroll( function () {

    if(isElementInViewport($("#communities")))
    {
        if(!$("#communities").hasClass("firedAnimation"))
        {
            TweenLite.from($(".overLay1"), 1, {delay: 1, x:-700, ease: Linear.easeOut});
        }
            $("#communities").addClass("firedAnimation");
    }

    if(isElementInViewport($("#offSite")))
    {
        if(!$("#offSite").hasClass("firedAnimation"))
        {
            TweenLite.from($(".overLay2"), 1, {delay: 1, x:700, ease: Linear.easeOut});
        }
        $("#offSite").addClass("firedAnimation");
    }






})






}

switch(pathname)
{
    case "/communities.php":
        $('.communityListing').addClass("animated slideInLeft");
    break;

    case "/autumnCreek.php":
        $("#owlCarousel").owlCarousel({
            autoPlay : 3000
        });
        break;

    case "/theReserve.php":
        $("#owlCarousel").owlCarousel({
            autoPlay : 3000,
            items: 2
        });
        break;

    case "/theVistas.php":
        $("#owlCarousel").owlCarousel({
            autoPlay : 3000,
            items: 6
        });
        break;

    case "/valencia.php":
    case "/valencia2.php":
        $("#owlCarousel").owlCarousel({
            autoPlay : 3000,
            items: 6
        });
        break;

    case "/nottingham.php":
    case "/nottingham2.php":
        $("#owlCarousel").owlCarousel({
            autoPlay : 3000,
            items: 6
        });
        break;

    case "/oaklandHunt.php":
        $("#owlCarousel").owlCarousel({
            autoPlay : 3000,
            items: 5
        });
        break;
}


    $('#carousel').carousel( {pause: false});
    $('#bg-fade-carousel').carousel( {pause: false});

    console.log( "ready!" );

    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });


    //$('#about-header').animateCss('bounce');



    function isElementInViewport(elem) {
        var $elem = $(elem);

        // Get the scroll position of the page.
        var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
        var viewportTop = $(scrollElem).scrollTop();
        var viewportBottom = viewportTop + $(window).height();

        // Get the position of the element on the page.
        var elemTop = Math.round( $elem.offset().top );
        var elemBottom = elemTop + $elem.height();

        return ((elemTop < viewportBottom) && (elemBottom > viewportTop));
    }

// Check if it's time to start the animation.
    function checkAnimation() {
      if(pathname == "/index.php" || pathname == "/") {
          var $elem = $('#about-header');
          var $elem2 = $('#meetTheFam-header');
          var $elem3 = $('.meetPic');
          // If the animation has already been started
          if ($elem.hasClass('animated slideInLeft')) return;
          if (isElementInViewport($elem) && !$elem.hasClass('firedAnimation')) {
              // Start the animation
              $elem.animateCss('slideInLeft');
              $elem.addClass('firedAnimation');
          }
          // If the animation has already been started
          if ($elem2.hasClass('animated bounce')) return;
          if (isElementInViewport($elem2) && !$elem2.hasClass('firedAnimation')) {
              // Start the animation
              $elem2.animateCss('bounce');
              $elem2.addClass('firedAnimation');
          }
          // If the animation has already been started
          if ($elem3.hasClass('animated pulse')) return;
          if (isElementInViewport($elem3) && !$elem3.hasClass('firedAnimation')) {
              // Start the animation
              $elem3.animateCss('pulse');
              $elem3.addClass('firedAnimation');
          }

      }
      else if (pathname == '/communities.php') {

          var $elem4 = $('#callUs');
          // If the animation has already been started
          if ($elem4.hasClass('animated bounceInRight')) return;
          if (isElementInViewport($elem4) && !$elem4.hasClass('firedAnimation')) {
              // Start the animation
              $elem4.animateCss('bounceInRight');
              $elem4.addClass('firedAnimation');
          }

          if(isElementInViewport($('.googleMap')))
          {
              if(!$(".googleMap").hasClass("firedAnimation"))
              {
                  TweenLite.from($("#map"), 2, {autoAlpha: 0});
              }
              $(".googleMap").addClass("firedAnimation");

          }



      }





    }

// Capture scroll events
    $(window).scroll(function(){
        checkAnimation();
    });
});

// Initialize affix and add an offset to add affix class on scroll
var cbpAnimatedHeader = (function() {

    var docElem = document.documentElement,
        header = document.querySelector( '.navbar-fixed-top' ),
        didScroll = false,
        changeHeaderOn = 200;

    function init() {
        window.addEventListener( 'scroll', function( event ) {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 250 );
            }
        }, false );
    }


        function scrollPage() {

            var pathname = window.location.pathname; // Returns path only


            var sy = scrollY();
            if (sy >= changeHeaderOn) {
                classie.remove(header, 'navbar-expanded');
                var myElement = document.querySelector(".navbar-fixed-top");
                if(pathname == '/index.php' || pathname == "/") {
                    myElement.style.backgroundImage = "url(http://www.mataodesigns.com/DM_Homes_Phase2/Media/Images/bg-header2.jpg)";
                }
            }
            else {
                classie.add(header, 'navbar-expanded');
                var myElement = document.querySelector(".navbar-fixed-top");
                if(pathname == '/index.php' || pathname == "/") {
                    myElement.style.backgroundImage = "";
                }
            }
            didScroll = false;
        }




    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }

    init();

})();

// Load WOW.js on non-touch devices
var isPhoneDevice = "ontouchstart" in document.documentElement;
$(document).ready(function() {
    if (isPhoneDevice) {
//mobile
    }
    //else {
//desktop
// Initialize WOW.js
//        wow = new WOW({
//            offset: 50
//        })
//        wow.init();
//    }
});

(function($) {
    "use strict"; // Start of use strict

// Smooth Scrolling: Smooth scrolls to an ID on the current page.
// To use this feature, add a link on your page that links to an ID, and add the .page-scroll class to the link itself. See the docs for more details.
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

// Activates floating label headings for the contact form.
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
        $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
        $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
        $(this).removeClass("floating-label-form-group-with-focus");
    });

// Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
       $('.navbar-toggle:visible').click();
    });

// Owl Carousel Settings
//    $(".about-carousel").owlCarousel({
//        items: 3,
//        navigation: true,
//        pagination: false,
//        navigationText: [
//            "<i class='fa fa-angle-left'></i>",
//            "<i class='fa fa-angle-right'></i>"
//        ],
//    });

//    $(".portfolio-carousel").owlCarousel({
//        singleItem: true,
//        navigation: true,
//        pagination: false,
//        navigationText: [
//            "<i class='fa fa-angle-left'></i>",
//            "<i class='fa fa-angle-right'></i>"
//        ],
//        autoHeight: true,
//        mouseDrag: false,
//        touchDrag: false,
//        transitionStyle: "fadeUp"
//    });
//
//    $(".testimonials-carousel, .mockup-carousel").owlCarousel({
//        singleItem: true,
//        navigation: true,
//        pagination: true,
//        autoHeight: true,
//        navigationText: [
//            "<i class='fa fa-angle-left'></i>",
//            "<i class='fa fa-angle-right'></i>"
//        ],
//        transitionStyle: "backSlide"
//    })/;

//    $(".portfolio-gallery").owlCarousel({
//        items: 3,
//    });





// Scrollspy: Highlights the navigation menu items while scrolling.
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    })





})(jQuery); // End of use strict



function setFloorPlan(theModel) {
    console.log(theModel);

    var theID = "";

    switch(theModel)
    {
        case "theGlenwood":
            theID = "1";
            break;
    }
    var theSection = "#" + theModel + "fp";

    $('#' + theModel + 'fp').append('<script type="text/javascript" src="http://www.mataodesigns.com/DM_Homes_Phase2/Scripts/PHP/InteractiveFloorPlanDev/index.php?controller=pjFront&action=pjActionLoad&floorplan_id=1></span>"></script>')






}


