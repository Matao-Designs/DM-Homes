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

        <h2>Pine Tree Apartments</h2>
        <div class="line2"></div>
<br><br>
    </div>

    <section id="autumnCreekMap" style="background-image: url('Media/Images/rentals/Rental/pinetree-bg.JPG'); background-position: center; min-height: 420px; padding-top: 100px; padding-bottom: 100px">
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">

            <h3 style="color: white; font-family: 'Crimson Text', serif"><span class="fa fa-map-marker fa-3x" style="color: orangered"></span><br>Located at:</h3>
            <h4 style="color: white; font-family: 'Crimson Text', serif">
                1385 North Main St.
               <br>
                Rochester Hills, Michigan
            </h4>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
            <!--Map-->
            <!--Google Map-->
            <script src="Scripts/jquery/googleMapPineTree.js"></script>

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
        <script src="Scripts/jquery/googleMapPineTree.js"></script>

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
                                    Located on Main Street in Rochester, Michigan, these apartments
                                    offer close proximity to downtown Rochester's shopping district
                                    and nearby parks and trails. The 625 sq. ft. apartments offer 1
                                    bedroom and 1 bath.
                                </p>
                                <p style="text-align: left">
                                    If you are interested in this or any other DM Homes rental property, please do not hesitate to
                                    <a href="#contact" class="page-scroll">contact us</a> and discuss your living space needs and available
                                    floor plans.
                                </p>

                            </div>

                            <div class="col-xs-12 col-md-6">
                                <img src="Media/Images/Pinetree/photo%201.JPG" class="img-responsive"/>
                            </div>



                        </div>

<br>
                        <div class="row">

                            <div class="col-xs-12 col-md-6">
                                <img src="Media/Images/Pinetree/photo%202.JPG" class="img-responsive"/>
                            </div>



                            <div class="col-xs-12 col-md-6">
                                <p style="text-align: left">
                                    DM Homes owns multiple residential rental properties in south eastern Michigan. Each of these
                                    properties are in great neighborhoods and are close to shopping, good schools, restaurants and bars.
                                    We pride ourselves on the upkeep of these properties and thoroughly screen all of our tenants to ensure
                                    a safe and trustworthy environment for all residents.
                                </p>


                            </div>
                        </div>

<br><br>

                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <img src="Media/Images/Pinetree/photo%203.JPG" class="img-responsive"/>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <img src="Media/Images/Pinetree/photo%204.JPG" class="img-responsive"/>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <img src="Media/Images/Pinetree/photo%205.JPG" class="img-responsive"/>
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



