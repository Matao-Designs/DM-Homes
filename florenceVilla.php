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

    <div class="row text-center" style="margin-top: 150px;">
        <img src="Media/Images/rentalLogo.png" alt="Rental logo" class="img-responsive" style="margin: auto; width: 200px"/>

        <h2>Florence Villa Townhomes</h2>
        <div class="line2"></div>
<br><br>
    </div>

    <section id="autumnCreekMap" style="background-image: url('Media/Images/rentals/Rental/florenceVilla-bg.JPG'); background-position: center; min-height: 420px; padding-top: 100px; padding-bottom: 100px">
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">

            <h3 style="color: white; font-family: 'Crimson Text', serif"><span class="fa fa-map-marker fa-3x" style="color: orangered"></span><br>Located at:</h3>
            <h4 style="color: white; font-family: 'Crimson Text', serif">
                15220 Arno Drive
                <br>
                Clinton Township, Michigan
            </h4>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
            <!--Map-->
            <!--Google Map-->
            <script src="Scripts/jquery/googleMapFlorenceVilla.js"></script>

                <div class="googleMapAC">
                    <div id="map" style="width: 100%; min-height: 300px; border-radius: 10px;box-shadow: 2px 2px 4px #333; margin-top: 70px;"></div>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6v2Wd5y-XvjiIoJbGrMVzGOVOl92tJx8&callback=initialize" style="border-radius: 10px;">
                    </script>

                </div>
        </div>
    </section>
    <!--Mobile Map-->
    <div class="container-fluid">
    <div class="row col-xs-12 col-sm-12 hidden-md hidden-lg">
        <!--Map-->
        <!--Google Map-->
        <script src="Scripts/jquery/googleMapFlorenceVilla.js"></script>

        <div class="googleMapAC">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2929.4927347589614!2d-83.00621321310261!3d42.75678348525958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e465514e7bc5%3A0xe159019d355c1aea!2s13598+29+Mile+Rd%2C+Washington%2C+MI+48094!5e0!3m2!1sen!2sus!4v1474082391201" width="100%" height="350" frameborder="0" style="border-radius: 10px; margin: auto" allowfullscreen></iframe>
        </div>
    </div>
    </div>





    <section id="aboutAC">
        <div class="container-fluid">
            <div class="row text-center">
                <h2>About</h2>
                <div class="line2"></div>
                <br><br>
                <div class="row">
                    <div class="col-xs-12 col-md-8 col-md-push-2">

                        <div class="row">




                            <div class="col-xs-12 col-md-6">
                                <p style="text-align: left">
                                    Located in Clinton Township, Florence Villa Townhomes are located minutes away from three major golf courses and Freedom Hill Park and Event Center. Explore the many shops and restaurants the area has to offer as well as the great Chippewa Valley School District.
                                    <br><br>
                                    The Florence Villa Townhomes offer 2 bedrooms, 1 full bath and 1 half bath, a full basement, 1 car attached garage, and your own private front entry. The spacious 1,250 sq. ft. of living space also includes a first floor laundry.
                                </p>
                                <p style="text-align: left">
                                    If you are interested in this or any other DM Custom Homes rental property, please do not hesitate to
                                    <a href="#contact" class="page-scroll">contact us</a> and discuss your living space needs and available
                                    floor plans.
                                </p>

                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div id="carousel-example-generic" class="carousel slide col-xs-12 col-md-6" data-ride="carousel" style="width: 100%; ">
                                    <!-- Indicators -->


                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img src="Media/Images/FlorenceVilla/IMG_3016.jpg" alt="...">


                                        </div>
                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3017.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3020.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3021.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3024.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3026.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3027.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3028.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3029.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3030.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/IMG_3031.jpg" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20129.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20130.JPG" alt="...">


                                        </div>
                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20135.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20136.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20137.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20139.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20145.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20147.JPG" alt="...">


                                        </div>

                                        <div class="item">
                                            <img src="Media/Images/FlorenceVilla/2014%20148.JPG" alt="...">

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








<!--Testimonials Modals-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Oakland Hunt Subdivision Map</h4>
            </div>
            <div class="modal-body">
                <img src="Media/Images/oaklandHuntMap.png" class="img-responsive" alt="autumn creek map"/>

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



</body>
</html>



