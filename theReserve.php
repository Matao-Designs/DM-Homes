<?php
//Page Includes
$thePage = basename($_SERVER['PHP_SELF']);
include"Scripts/PHP/customFunctions.php";
include"Scripts/PHP/theTitle.php";
?>

<!DOCTYPE html>
<html>
<head>

    <!--Meta Tags-->

    <?php
    include"Scripts/PHP/metaTags.php";
    printf(metaDescription($thePage));
    ?>


    <!--Style Sheets-->
    <link href="CSS/bootstrap.css" rel="stylesheet" />
    <link href="CSS/primary.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">
    <link href="Scripts/jquery/owl.carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="Scripts/jquery/owl.carousel/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="CSS/animate.css" rel="stylesheet"/>
    <link href="CSS/Custom.css" rel="stylesheet" />


    <title><?php printf(theTitle($thePage))?></title>


</head>
<body id="page-top">


<!--Header-->
<div class="container-fluid">
    <div class="row" style="background: #333333">
        <?php include"Scripts/PHP/html/header2.php"; ?>
    </div>
</div>


<!--Main Content-->
<div class="container-fluid" id="mainContent">
    <div class="filler"></div>

    <div class="row text-center" style="margin-top: 200px;">
        <img src="Media/Images/Reserve%20at%20Cass%20Lake%20Logo_Big.png" alt="The Reserve at Cass Lake logo" class="img-responsive" style="margin: auto; width: 100px"/>

        <h2>The Reserve at Cass Lake</h2>
        <div class="line2"></div>
<br><br>
    </div>

    <section id="autumnCreekMap" style="background-image: url('Media/Images/theReserve-bg.png'); min-height: 420px; padding-top: 100px; padding-bottom: 100px">
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">

            <h3 style="color: white; font-family: 'Crimson Text', serif"><span class="fa fa-map-marker fa-3x" style="color: orangered"></span><br>Located at:</h3>
            <h4 style="color: white; font-family: 'Crimson Text', serif">
                1518 Wayward Drive
               <br>
                Keego Harbor, Michigan
            </h4>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
            <!--Map-->
            <!--Google Map-->
            <script src="Scripts/jquery/googleMapTheReserve.js"></script>

                <div class="googleMapAC">
                    <div id="map" style="width: 100%; min-height: 300px; border-radius: 10px;box-shadow: 2px 2px 4px #333; margin-top: 70px;"></div>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6v2Wd5y-XvjiIoJbGrMVzGOVOl92tJx8&callback=initialize" >
                    </script>

                </div>
        </div>
    </section>
    <!--Mobile Map-->
    <div class="container-fluid">
    <div class="row col-xs-12 col-sm-12 hidden-md hidden-lg">
        <!--Map-->
        <!--Google Map-->
        <script src="Scripts/jquery/googleMapTheReserve.js"></script>

        <div class="googleMapAC">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2929.4927347589614!2d-83.00621321310261!3d42.75678348525958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e465514e7bc5%3A0xe159019d355c1aea!2s13598+29+Mile+Rd%2C+Washington%2C+MI+48094!5e0!3m2!1sen!2sus!4v1474082391201" width="100%" height="350" frameborder="0" style="border:0; margin: auto" allowfullscreen></iframe>
        </div>
    </div>
    </div>





    <section id="aboutAC">
        <div class="container-fluid">
            <div class="row text-center">
                <h2>About</h2>
                <div class="line2"></div>
                <br><br>
                <p class="col-md-6 col-md-push-3">
                    The Reserve at Cass Lake is a new luxury condominium community located on all sport Cass Lake,
                    one of southeast Michigan's finest shorelines, resplendent with tall trees, long stretches of
                    lazy beaches, breathtaking sunsets and all the fun a lake can conjure up. Along with all the
                    watersports from water-skiing to kayaking, sail boating to canoeing, windsurfing to ice boating
                    can be yours in your own private condominium home.
                    <br><br>
                    You will enjoy your own privately owned boat well, and private entrance. Your home will feature the
                    latest designer-coordinated open floor plan with the latest cabinetry designs, flooring, window design,
                    appliances and only the finest quality is good enough. Your neighborhood includes the quaint village of
                    Keego Harbor with its specialty shops, services and restaurants. Come see The Reserve at Cass Lake!
                </p>
            </div>
        </div>

    </section>

    <section id="featuredModels">
        <div class="container-fluid">
            <div class="row">
                <div class="cols-xs-12 col-xs-12 col-md-10 col-md-push-1">
                    <div style="margin: 0 auto; text-align: center; position: relative; top: -40px;">
                        <h3>Featured Units</h3>
                    </div>
                    <div id="owlCarousel" class="owl-carousel text-center">

                        <div class="item text-center"><h5>The Bridgeport</h5><img src="Media/Images/Models/The_Catalina.png" alt="The Bridgeport" style="margin: auto"><br><a href="Models/theBridgeport.php?prev=theReserve"   class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Catalina</h5><img src="Media/Images/Models/The_Catalina.png" alt="The Catalina" style="margin: auto"><br><a href="Models/theCatalina.php?prev=theReserve"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="communityMap" style="margin-left: -15px; margin-right: -15px;">
        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
            <div class="col-xs-12 col-md-6 autumnCreekMap text-center" style="background-image: url('Media/Images/theReserveMap-bg.png'); height: 540px;">

                <img src="Media/Images/Reserve%20at%20Cass%20Lake%20Logo_Big.png" class="img-responsive" style="margin: auto;padding-top: 100px;"/>
                <h2 style="color: white; font-family: 'Crimson Text', serif; ">
                    Available Units
                </h2>
                <h3 style="color: white;">1, 2, 3, 4, 5, 8, 9, 13, 14, 15</h3>
<br>
                <a href="#" class="btn btn-default"  data-toggle="modal" data-target="#myModal" style="margin-bottom: 100px"><span class="fa fa-map"></span> View Map</a>

            </div>


            <div class="hidden-xs hidden-sm col-md-6 text-center autumnCreekMap" style=" height: 540px;">

                <div id="carousel-example-generic" class="carousel slide col-xs-12 col-md-6" data-ride="carousel" style="width: 100%; height: 540px">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active" >
                            <img src="Media/Images/cassLake/IMG_0080.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0087.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>
                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0089.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0090.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0091.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0094.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0095.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0097.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0098.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0134_2.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0226.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>

                       

                        <div class="item">
                            <img src="Media/Images/cassLake/IMG_0229.jpg" alt="..." style="width: 100%; height: 540px" class="img-responsive text-center">

                            <div class="carousel-caption">
                                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>
                            </div>
                        </div>






                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>




            </div>
        </div>
    </section>










    <section id="communityFeatures">
        <div class="container wow fadeIn">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Standard Features</h2>
                    <div class="line2"></div>
                </div>
            </div>


            <div class="row content-row">
                <!-- Pricing Table 1 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-first">
                        <h3 class="text-center">Exclusive Community Features</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>*$</sup>50</span> / year</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Nestled along the shores of Cass Lake</li>
                            <li class="list-group-item">Private individual boat slip on all-sports lake</li>
                            <li class="list-group-item">Unparalleled natural beauty, with scenic water views & gorgeous sunsets</li>
                            <li class="list-group-item">Classic Atlantic seaboard architecture</li>
                            <li class="list-group-item">City water & sewer</li>
                            <li class="list-group-item">Highly acclaimed West Bloomfield schools</li>


                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 2 -->
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3 class="text-center">Elegantly Crafted Exteriors</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>50</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Private front entries with covered porches</li>
                            <li class="list-group-item">Fabulous balconies</li>
                            <li class="list-group-item">Finished lower level with walk-out</li>
                            <li class="list-group-item">Two car attached finished garages</li>
                            <li class="list-group-item">Professionally designed & installed landscaping & irrigation</li>


                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 3 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3 class="text-center">Finely Appointed Interiors</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>150</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">2 & 3 bedroom homes</li>
                            <li class="list-group-item">Distinctive 9' high volume ceilings</li>
                            <li class="list-group-item">Custom crafted kitchens with elegant wood cabinetry</li>
                            <li class="list-group-item">G.E. appliances, including range and dishwasher</li>
                            <li class="list-group-item">Hardwood foyers & powder room</li>
                            <li class="list-group-item">Cozy, direct vent fireplaces with ceramic tile surround</li>
                            <li class="list-group-item">Grand master suites with his and hers closets</li>
                            <li class="list-group-item">Luxurious master baths</li>
                            <li class="list-group-item">Ceramic tile floors in baths</li>
                            <li class="list-group-item">Full width mirrors above vanities</li>
                            <li class="list-group-item">Designer interior lighting</li>
                            <li class="list-group-item">Central Air</li>

                        </ul>
                    </div>




                </div>
            </div>


        </div>
    </section>











    <!--End Main Content-->
</div>




<!--Modal-->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Modal Header</h4>
            </div>
            <div class="modal-body">
                <p>Modal Body</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--Footer-->
<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
    <?php include"Scripts/PHP/html/footer.php"; ?>
</div>


<!--Model Modals-->

<?php include"Scripts/PHP/ModelModals.php"?>





<!--Testimonials Modals-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">The Reserve at Cass lake<br> Subdivision Map</h4>
            </div>
            <div class="modal-body">
                <img src="Media/Images/theReserveMap.png" class="img-responsive" alt="The Reserve at Cass Lake Map"/>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!--Javascript-->
<script src="Scripts/jquery/jquery-1.9.1.js"></script>
<script src="Scripts/js/bootstrap.js"></script>
<script src="Scripts/jquery/classie.js"></script>
<script src="Scripts/jquery/jquery.easing.js"></script>
<script type="text/javascript" src="Scripts/jquery/retinajs/dist/retina.min.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!--Contact Form Scripts-->
<script src="js/contact_me.js"></script>
<script src="js/jqBootstrapValidation.js"></script>


<script src="Scripts/jquery/owl.carousel/owl-carousel/owl.carousel.js"></script>

<script src="Scripts/jquery/Custom.js"></script>

<script type="text/javascript">
    $('.carousel').carousel();
</script>


</body>
</html>



