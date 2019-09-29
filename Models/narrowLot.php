<?php
    include '../Scripts/PHP/interactiveFloorPlanCode.php';
    $modelName = "Narrow Lot";
    $sqFt = "2,450";
    $folderName = "Narrow_Lot";
?>

<!DOCTYPE html>
<html>
<head>
    <!--Meta Tags-->
    <?php
        include"../Scripts/PHP/metaTags.php";
        printf(metaDescription($thePage));
    ?>
    <!--Style Sheets-->
    <link href="../CSS/bootstrap.css" rel="stylesheet" />
    <link href="../CSS/primary.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="../font-awesome-4.6.3/css/font-awesome.css">
    <link href="../Scripts/jquery/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../Scripts/jquery/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="../CSS/animate.css" rel="stylesheet"/>
    <link href="CSS/Custom.css" rel="stylesheet" />
    <title>DM Homes Inc.</title>
    <style>
        .largeContainer {
            position: absolute;
            top: 50%;
            margin-top: -312px;
            left: 50%;
            margin-left: -233px;
        }
        .closeLarge {
            background-color: rgba(0,0,0,0.8);
            color: white;
        }
            .closeLarge:hover {
            cursor: pointer;

            }
        .theBody {
            background: no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .intFloorPlan img {
            border-radius: 10px;
        }
    </style>
</head>
<body class="theBody" style="background-image: url('../Media/Images/Models/Narrow_Lot/slide1-bg.png');">
    <?php
    //print floorplan on page for jquery
    echo '<div class="hidden" id="theFloorplan"><img src="'.$thisFloorPlan.'" class="img-responsive" style="height: 500px; width: auto; margin: auto"/></div>';
    //print thumbs
    echo "<div class='hidden' id='thumbs'>";
        foreach ($thumbnails as $x)
        {
        echo '<img class="thumb" src="../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/small/'.$x.'"/>';
        }
    echo"</div>";
    //print thumbs
    echo "<div class='hidden' id='large'>";
        foreach ($largePics as $x)
        {
            echo '<img class="large" src="../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/large/'.$x.'"/>';
        }
    echo"</div>";
    ?>

<div style="position: fixed; top: 50px; left: 50px; z-index: 99999">
    <a href="#" class="close-button"><span class="fa fa-arrow-circle-left fa-4x" style="color: white"></span> </a>
</div>
<div class="container-fluid">
    <div class="row text-center">
        <div class="col-xs-12 col-md-8 col-md-push-2">
            <h2 id="modelName">
               <?php echo $modelName ?>
            </h2>
            <p id="details">
                <strong>Model: </strong><?php echo $modelName ?> || <strong>Sq. Ft. </strong><?php echo $sqFt ?>
            </p>

            <div class="row elevationImage text-center" style="margin-bottom: 20px;">
                <div class="col-sm-12 col-md-6 col-md-push-3">
                    <img src="../Media/Images/Models/Narrow_Lot.jpg" class="img-responsive" style="margin: auto; text-align: center;"/>
                </div>
            </div>

            <div class="line"></div>
            <?php
                include "../Scripts/modelContainers.php";
            ?>
            <br>
            <a href="../Media/Images/Models/<?php echo $folderName ?>/theNarrowLot.pdf" class="btn btn-default close-buttons" target="_blank"><span class="fa fa-download"></span> Download Plan</a>
            <a href="getLink()" class="btn btn-default close-button close-buttons"><span class="fa fa-close"></span> Close</a>



        </div>
    </div>
</div>


<!--Javascript-->
<script src="../Scripts/jquery/jquery-1.9.1.js"></script>
<script src="../Scripts/js/bootstrap.js"></script>
<script src="../Scripts/jquery/classie.js"></script>
<script src="../Scripts/jquery/jquery.easing.js"></script>
<script type="text/javascript" src="../Scripts/jquery/retinajs/dist/retina.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!--Contact Form Scripts-->
<script src="../Scripts/jquery/contact_me.js"></script>
<script src="../Scripts/jquery/jqBootstrapValidation.js"></script>
<!--Greensock-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.1/TweenMax.min.js"></script>
<!--Owl Carousel-->
<script src="../Scripts/jquery/owl.carousel/owl-carousel/owl.carousel.js"></script>

<script src="../Scripts/intFloorPpan.js"></script>

<script>

    $(function() {

        var getUrlParameter = function getUrlParameter(sParam) {
            var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                    sURLVariables = sPageURL.split('&'),
                    sParameterName,
                    i;

            for (i = 0; i < sURLVariables.length; i++) {
                sParameterName = sURLVariables[i].split('=');

                if (sParameterName[0] === sParam) {
                    return sParameterName[1] === undefined ? true : sParameterName[1];
                }
            }
        };


        var comingFrom = getUrlParameter('prev');
        var theLink = $('.close-button').attr('href');
        console.log(comingFrom);
        console.log(theLink);

        $('.close-button').attr('href','../'+ comingFrom +'.php');

    });

</script>

</body>
</html>