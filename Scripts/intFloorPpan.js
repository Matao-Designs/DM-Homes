/**
 * Created by Matao Designs on 6/30/2017.
 */
$(function(){
    console.log("ready!");
    var theFloorplan = $("#theFloorplan img");
    var floorPLanHeight = $("#theFloorplan img").height();
console.log(floorPLanHeight);

    TweenMax.set($(".largeContainer"),{alpha: 0});
    TweenMax.set($(".closeLarge"),{alpha: 0});
    TweenMax.set($(".carouselNav"),{alpha: 0});


    floorplan(theFloorplan);
    thumbnails();

    //Thumb hover
    $(".fpThumb").hover(function() {
          // TweenMax.to($(this), .5, {scale: 1.2});
        }, function() {
           // TweenMax.to($(this), .5, {scale: 1});
        }
    );

    //click event
    $(".fpThumb").click(function(){
        showLargeImage($(this), floorPLanHeight);
    });

    $(".closeLarge").click(function () {
        TweenMax.to($(".largeContainer"),1, {alpha: 0});
        TweenMax.to($(".closeLarge"),0.5, {alpha: 0});
        TweenMax.to($(".carouselNav"),1,{alpha: 0});

        $(".image").html("");
        floorplan(theFloorplan);
    })

    $(".navmodelcarouselright").click(function () {
        var currentSlide = $(".currentSlide").attr("id");
        var largeImages = $(".large");
        var nextSlide = parseInt(currentSlide) + 1;

            if(nextSlide >= largeImages.length)
            {
                nextSlide = "0";
            }

        var imageId = nextSlide;
            largeImages = $(".large"),
            imageClicked = largeImages[imageId].src,
            theHeight = $(".intFloorPlan").height();
        console.log(theHeight);


        //    $(".image").html("<img style='max-height: 500px; width: auto' src='"+imageClicked+"' class='img-responsive'/>");
        $(".intFloorPlan").html("<img style='height:" + floorPLanHeight + "px; width: auto; margin: auto; text-align: center' src='"+imageClicked+"' class='img-responsive currentSlide' id='"+imageId+"'/>");

        TweenMax.to($(".largeContainer"),1, {alpha: 1});
        TweenMax.to($(".closeLarge"),1, {alpha: 1});
        TweenMax.to($(".carouselNav"),1, {alpha: 1});






    })


    $(".navmodelcarouselleft").click(function () {
        var currentSlide = $(".currentSlide").attr("id");
        var largeImages = $(".large");
        var nextSlide = parseInt(currentSlide) - 1;

        if(nextSlide < 0)
        {
            nextSlide = largeImages.length - 1;
        }

        var imageId = nextSlide;
        largeImages = $(".large"),
            imageClicked = largeImages[imageId].src,
            theHeight = $(".intFloorPlan").height();
        console.log(theHeight);


        //    $(".image").html("<img style='max-height: 500px; width: auto' src='"+imageClicked+"' class='img-responsive'/>");
        $(".intFloorPlan").html("<img style='height:" + floorPLanHeight + "px; width: auto; margin: auto; text-align: center' src='"+imageClicked+"' class='img-responsive currentSlide' id='"+imageId+"'/>");

        TweenMax.to($(".largeContainer"),1, {alpha: 1});
        TweenMax.to($(".closeLarge"),1, {alpha: 1});
        TweenMax.to($(".carouselNav"),1, {alpha: 1});






    })


});

    //Sets the floorplan
   function floorplan(theFloorplan) {
       //var theFloorplan = $("#theFloorplan img");
       $(".intFloorPlan").html(theFloorplan);
       $("#theFloorPlan").html(theFloorplan);

   }

    //The Thumbnails
    function thumbnails() {
        var thumbs = $(".thumb"),
            carousel = "<div id='owlCarousel'' class='owl-carousel'>";

        $.each( thumbs, function( key, value ) {
            carousel += '<div class="item" style="background-color: white"><img class="fpThumb" id="' + key  + '" src="'+ value.src +'" style="margin:auto; width: 200px; height: 200px; border: 4px white solid; margin-left: 5px; overflow: hidden; cursor: pointer" /></div>';
        });

        carousel += "</div>"

        $(".thumbs").html(carousel);

        $("#owlCarousel").owlCarousel({
            autoPlay : 3000,
            center:true,
            items: 5

        });

    }

    //Shows the large image
    function showLargeImage(currentThumb, floorplanHeight) {
       var imageId = currentThumb.attr("id"),
           largeImages = $(".large"),
           imageClicked = largeImages[imageId].src,
           theHeight = $(".intFloorPlan").height() + 100;
console.log(theHeight);


        //    $(".image").html("<img style='max-height: 500px; width: auto' src='"+imageClicked+"' class='img-responsive'/>");
        $(".intFloorPlan").html("<img style='height:" + floorplanHeight + "px; width: auto; margin: auto; text-align: center' src='"+imageClicked+"' class='img-responsive currentSlide' id='"+imageId+"'/>");

        TweenMax.to($(".largeContainer"),1, {alpha: 1});
            TweenMax.to($(".closeLarge"),1, {alpha: 1});
        TweenMax.to($(".carouselNav"),1, {alpha: 1});






    }





