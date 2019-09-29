/**
 * Created by Matao Designs on 7/14/2017.
 */
$(function() {
    console.log( "ready!" );
    window.setInterval(cycleCarousel, 5000);
});



    function cycleCarousel(){
        TweenMax.set(".image",{alpha: 1});
        var images = $(".image");
        var first = images[0];
        var indexStart = images.length;

        for(var i = 0; i <= images.length; i++)
        {
            $(images[i]).css("zIndex",indexStart);
            indexStart--;
        }
        TweenMax.to(first, 2, {alpha: 0});
        images.splice(0,1);
        images.push(first);
         $(".imageContainer").html(images);


        }



