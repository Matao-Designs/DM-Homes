<?php
//Page Includes
$thePage = basename($_SERVER['PHP_SELF']);
include "Scripts/PHP/customFunctions.php";
include "Scripts/PHP/theTitle.php";
?>

<!DOCTYPE html>
<html>

<head>

    <!--Meta Tags-->

    <?php
    include "Scripts/PHP/metaTags.php";
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
    <link href="CSS/animate.css" rel="stylesheet" />
    <link href="CSS/Custom.css" rel="stylesheet" />


    <title><?php printf(theTitle($thePage)) ?></title>


</head>

<body id="page-top">


    <!--Header-->
    <div class="container-fluid">
        <div class="row" style="background: #333333">
            <?php include "Scripts/PHP/html/header2.php"; ?>
        </div>
    </div>


    <!--Main Content-->
    <div class="container-fluid" id="mainContent">
        <div class="filler"></div>

        <div class="row text-center" style="margin-top: 200px;">
            <!--<img src="Media/Images/oakland%20hunt%20logo%20_200w.png" alt="Autumn Creek logo" class="img-responsive" style="margin: auto; width: 100px"/>-->

            <h2>Preston Corners</h2>
            <div class="line2"></div>
            <br><br>
        </div>

        <!--<section id="autumnCreekMap" style="background-image: url('Media/Images/oaklandHunt-bg.png'); min-height: 420px; padding-top: 100px; padding-bottom: 100px">
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">

            <h3 style="color: white; font-family: 'Crimson Text', serif"><span class="fa fa-map-marker fa-3x" style="color: orangered"></span><br>Located at:</h3>
            <h4 style="color: white; font-family: 'Crimson Text', serif">
                East Buell rd. between Rochester Rd. &amp; Orion Rd.
               <br>
                Oakland Charter Township, Michigan
            </h4>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4">-->
        <!--Map-->
        <!--Google Map
            <script src="Scripts/jquery/googleMapOaklandHunt.js"></script>

                <div class="googleMapAC">
                    <div id="map" style="width: 100%; min-height: 300px; border-radius: 10px;box-shadow: 2px 2px 4px #333; margin-top: 70px;"></div>
                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6v2Wd5y-XvjiIoJbGrMVzGOVOl92tJx8&callback=initialize" >
                    </script>

                </div>
        </div>
    </section>-->
        <!--Mobile Map
    <div class="container-fluid">
    <div class="row col-xs-12 col-sm-12 hidden-md hidden-lg">
        <script src="Scripts/jquery/googleMapOaklandHunt.js"></script>

        <div class="googleMapAC">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2929.4927347589614!2d-83.00621321310261!3d42.75678348525958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e465514e7bc5%3A0xe159019d355c1aea!2s13598+29+Mile+Rd%2C+Washington%2C+MI+48094!5e0!3m2!1sen!2sus!4v1474082391201" width="100%" height="350" frameborder="0" style="border:0; margin: auto" allowfullscreen></iframe>
        </div>
    </div>
    </div>-->

        <section id="silverCreek" style="background-image: url('Media/Images/silverCreek-bg.png'); padding-top: 200px; padding-bottom: 200px;">
            <img src="Media/Images/largeLogo.png" class="img-responsive" style="margin: auto; width: 200px; height: auto" />
            <br>
            <div class="line"></div>

            <div class="row">
                <h1 style="text-align: center">Coming in 2024</h1>
            </div>

        </section>



        <section id="aboutAC">
            <div class="container-fluid">
                <div class="row text-center">
                    <h2>About</h2>
                    <div class="line2"></div>
                    <br><br>

                    <div class="row">
                        <div class="col-xs-12 col-md-10 col-md-push-1">

                            <div class="col-md-5">
                                <img src="Media/Images/largeLogoBlack.png" class="img-responsive" style="width: 50%; margin: auto" />
                                <br>

                                <link href="http://dmhomesinc.com/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoadCss" type="text/css" rel="stylesheet" />
                                <script type="text/javascript" src="http://dmhomesinc.com/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoad&id=11"></script>

                            </div>

                            <div class="col-md-5">
                                <img src="Media\Images\SilverCreekLotPlan.jpg" class="ing-responsive" />
                            </div>

                        </div>
                    </div>



                </div>

        </section>

        <!--  <section id="featuredModels">
        <div class="container-fluid">
            <div class="row">
                <div class="cols-xs-12 col-xs-12 col-md-10 col-md-push-1">
                    <div style="margin: 0 auto; text-align: center; position: relative; top: -40px;">
                        <h3>Featured Homes</h3>
                    </div>
                    <div id="owlCarousel" class="owl-carousel">

                        <div class="item text-center"><h5>The Bloomington II</h5><img src="Media/Images/Models/The_BloomingtonII.png" alt="The Bloomington II" style="margin: auto"><br><a href="Models/theBloomingtonII.html?prev=oaklandHunt"   class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Lancaster</h5><img src="Media/Images/Models/The_Lancaster.png" alt="The Lancaster" style="margin: auto"><br><a href="Models/theLancaster.html?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Manchester</h5><img src="Media/Images/Models/The_Manchester.png" alt="The Manchester" style="margin: auto"><br><a href="Models/theManchester.html?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Oxford</h5><img src="Media/Images/Models/The_Oxford.png" alt="The Oxford" style="margin: auto"><br><a href="Models/theOxford.html?prev=theVistas"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Wellington</h5><img src="Media/Images/Models/The_Wellington.png" alt="The Wellington" style="margin: auto"><br><a href="Models/theWellington.html?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Wellington II</h5><img src="Media/Images/Models/The_Wellington_II.png" alt="The Wellington II" style="margin: auto"><br><a href="Models/theWellingtonII.html?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>

                    </div>
                </div>
            </div>
        </div>

    </section>-->


        <!--<section id="communityMap" style="margin-left: -15px; margin-right: -15px;">
        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
            <div class="col-xs-12 col-md-6 autumnCreekMap text-center" style="background-image: url('Media/Images/oaklandHuntMap-bg.png'); height: 540px;">

                <img src="Media/Images/oakland%20hunt%20logo%20_200w.png" class="img-responsive" style="margin: auto;padding-top: 100px;"/>
                <h2 style="color: white; font-family: 'Crimson Text', serif; ">
                    Available Lots
                </h2>
                <h3 style="color: white;"></h3>
<br>
                <a href="#" class="btn btn-default"  data-toggle="modal" data-target="#myModal" style="margin-bottom: 100px"><span class="fa fa-map"></span> View Map</a>

            </div>


            <div id="specHomes" class="col-xs-12 col-md-6 text-center autumnCreekMap" style="background-image: url('Media/Images/specHomes-bg.png'); height: 540px;">

                <h2 style="color: white; font-family: 'Crimson Text', serif; padding-top: 80px; ">
                    Spec Homes
                </h2>

                <div style="color: white; height: 250px; overflow-y: auto; overflow-x: hidden">
                    <table style="margin:auto">
                        <tr>
                            <td>Lot Number</td>
                            <td>Model</td>
                            <td>Style</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Lancaster</td>
                            <td>Colonial</td>
                        </tr>
                        <tr>
                            <td>36</td>
                            <td>Manchester</td>
                            <td>Colonial</td>
                        </tr>
                    </table>
                </div>





                <br>
                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>

            </div>
        </div>
    </section>


-->


















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
        <?php include "Scripts/PHP/html/footer.php"; ?>
    </div>


    <!--Model Modals-->

    <?php include "Scripts/PHP/ModelModals.php" ?>





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
                    <img src="Media/Images/oaklandHuntMap.png" class="img-responsive" alt="autumn creek map" />

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