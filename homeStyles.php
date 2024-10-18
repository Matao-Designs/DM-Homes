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

    <style>
        .responsive {
            width: 100%;
            height: 0;
            padding-bottom: 56.25%;
            position: relative;

        }

        .responsive iframe {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;

        }
    </style>

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
        <!--Page Name-->
        <div class="row text-center" style="margin-top: 200px;">
            <h2>Home Styles</h2>
            <div class="line2"></div>
            <br><br>
        </div>

        <section class="text-center" id="homeStylesHeader" style="background-image:url('Media/Images/homeStyles-bg.jpeg')">
            <h1 style="color: darkorange; text-shadow: 2px 2px 4px #000">Allow us to build your dream home</h1>
            <h3 style="color: white; text-shadow: 2px 2px 4px #000">Browse our models or bring your own plans</h3>
            <a href="#models" class="page-scroll btn btn-outline-dark" style="margin-top: 20px;text-shadow: none; background-color: rgba(250,250,250,0.8)">View Models <span class="fa fa-arrow-circle-o-down"></span></a>
        </section>


        <section id="models">
            <div class="row text-center">
                <div class="col-xs-12 col-md-8 col-md-push-2">
                    <h2>DM Homes Inc. Models</h2>
                    <div class="line"></div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 col-lg-10 col-lg-push-1">
                            <h4 style="margin-top: 40px">The DM Homes Guarantee</h4>
                            <!--The Movie-->
                            <div class="responsive">
                                <iframe width="100%" height="290" src="https://www.youtube.com/embed/IhFYi3sXWP4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <p style="text-align: left; margin-top: 20px">
                                At DM Homes Inc., we strive to design and build you a home that is built to stand the
                                test of time. We want your home to be your family home. We want to build you the home that you are proud to have family
                                dinners at, to celebrate birthdays, holidays, and graduations. We want your home to be a safe and comfortable
                                place to weather storms and keep you warm at night during cold Michigan winters. At DM Homes Inc.
                                we aren't building you a house, we're building you a home.
                            </p>
                            <p style="text-align: left">
                                DM Homes Inc. uses only the highest quality materials. We order products that meet our high standards
                                to ensure the quality that people have come to expect from DM Homes Inc.
                            </p>
                        </div>
                        <div class="col-xs-12 col-md-12 col-lg-12">
                            <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <h4 style="margin-top: 40px;">The Glenwood</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Glenwood.jpg" alt="The Glenwood" style="margin: auto"><br><a href="Models/theGlenwood.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                            </div>
                            <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <h4 style="margin-top: 40px;">The Lancaster</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Lancaster.jpg" alt="The Lancaster" style="margin: auto"><br><a href="Models/theLancaster.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                            </div>
                            <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <h4 style="margin-top: 40px;">The Manchester</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Manchester.jpg" alt="The Manchester" style="margin: auto"><br><a href="Models/theManchester.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                            </div>
                        </div>
                    </div>


                    <!--Models-->

                    <div class="row">
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Oxford</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Oxford.jpg" alt="The Oxford" style="margin: auto"><br><a href="Models/theOxford.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Nottingham</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Nottingham.jpg" alt="The Nottingham" style="margin: auto"><br><a href="Models/theNottingham.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Sherwood</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Sherwood.jpg" alt="The Sherwood" style="margin: auto"><br><a href="Models/theSherwood.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Bloomington II</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_BloomingtonII.jpg" alt="The Bloomington II" style="margin: auto"><br><a href="Models/theBloomingtonII.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Wellington</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Wellington.jpg" alt="The Wellington" style="margin: auto"><br><a href="Models/theWellington.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Wellington II</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Wellington_II.jpg" alt="The Wellington II" style="margin: auto"><br><a href="Models/theWellingtonII.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Brookfield</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Brookfield.jpg" alt="The Brookfield" style="margin: auto"><br><a href="Models/theBrookfield.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">Narrow Lot</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/Narrow_Lot.jpg" alt="Narrow Lot" style="margin: auto"><br><a href="Models/narrowLot.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Alexis</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Alexis.jpg" alt="The Alexis" style="margin: auto"><br><a href="Models/theAlexis.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Claire</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Claire.jpg" alt="The Claire" style="margin: auto"><br><a href="Models/theClaire.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
                        </div>
                        <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <h4 style="margin-top: 40px;">The Wynwood</h4><img class="offSiteModels img-responsive" src="Media/Images/Models/The_Wynwood.jpg" alt="The Wynwood" style="margin: auto"><br><a href="Models/theWynwood.php?prev=homeStyles" class="btn btn-default"><span class="fa fa-search"></span> View Details</a>
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

        <?php include "Scripts/PHP/html/footer.php"; ?>

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