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
        <img src="Media/Images/Autumn%20Creek%20logo_big.png" alt="Autumn Creek logo" class="img-responsive" style="margin: auto; width: 100px"/>

        <h2>Autumn Creek</h2>
        <div class="line2"></div>
<br><br>
    </div>

    <section id="autumnCreekMap" style="background-image: url('Media/Images/autumnCreek-bg.png'); min-height: 420px; padding-top: 100px; padding-bottom: 100px">
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">

            <h3 style="color: white; font-family: 'Crimson Text', serif"><span class="fa fa-map-marker fa-3x" style="color: orangered"></span><br>Located at:</h3>
            <h4 style="color: white; font-family: 'Crimson Text', serif">
                29 Mile between Jewell rd. &amp; Schoenherr Rd.
               <br>
                Washington Township, Michigan
            </h4>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
            <!--Map-->
            <!--Google Map-->
            <script src="Scripts/jquery/googleMapAutumnCreek.js"></script>

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
        <script src="Scripts/jquery/googleMapAutumnCreek.js"></script>

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
                    The Autumn Creek neighborhood is located in the well-desired Washington Township.
                    The community has many site amenities including ponds, open spaces and walking paths.
                    Easy access to M-53, shopping and recreational opportunities within easy reach.
                </p>
            </div>
        </div>

    </section>

    <section id="featuredModels">
        <div class="container-fluid">
            <div class="row">
                <div class="cols-xs-12 col-xs-12 col-md-10 col-md-push-1">
                    <div style="margin: 0 auto; text-align: center; position: relative; top: -40px;">
                        <h3>Featured Homes</h3>
                    </div>
                    <div id="owlCarousel" class="owl-carousel">

                        <div class="item text-center"><h5>The Glenwood</h5><img src="Media/Images/Models/The_Glenwood.png" alt="The Glenwood" style="margin: auto"><br><a href="Models/theGlenwood.php?prev=autumnCreek"   class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Brookfield</h5><img src="Media/Images/Models/The_Brookfield.png" alt="The Brookfield" style="margin: auto"><br><a href="Models/theBrookfield.php?prev=autumnCreek"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Lancaster</h5><img src="Media/Images/Models/The_Lancaster.png" alt="The Lancaster" style="margin: auto"><br><a href="Models/theLancaster.php?prev=autumnCreek"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Nottingham</h5><img src="Media/Images/Models/The_Nottingham.png" alt="The Nottingham" style="margin: auto"><br><a href="Models/theNottingham.php?prev=autumnCreek"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Sherwood</h5><img src="Media/Images/Models/The_Sherwood.png" alt="The Sherwood" style="margin: auto"><br><a href="Models/theSherwood.php?prev=autumnCreek"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="communityMap" style="margin-left: -15px; margin-right: -15px;">
        <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
            <div class="col-xs-12 col-md-6 autumnCreekMap text-center" style="background-image: url('Media/Images/autumnCreekMap-bg.png'); height: 540px;">

                <img src="Media/Images/Autumn%20Creek%20logo_big.png" class="img-responsive" style="margin: auto;padding-top: 100px;"/>
                <h2 style="color: white; font-family: 'Crimson Text', serif; ">
                    Available Lots
                </h2>

                    <br>
                <a href="#" class="btn btn-default"  data-toggle="modal" data-target="#myModal" style="margin-bottom: 100px"><span class="fa fa-map"></span> View Map</a>

            </div>


            <div class="col-xs-12 col-md-6 text-center autumnCreekMap" style="background-image: url('Media/Images/specHomes-bg.png'); height: 540px;">

                <h2 style="color: white; font-family: 'Crimson Text', serif; padding-top: 80px; ">
                    Spec Homes
                </h2>

                <div style="color: white; height: 250px; overflow-y: auto; overflow-x: hidden">
                    <link href="/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoadCss" type="text/css" rel="stylesheet" />
                    <script type="text/javascript" src="/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoad&id=3&hide=1"></script>
                </div>




                <br>
                <a href="#contact" class="btn btn-default page-scroll" style="margin-bottom: 100px"><span class="fa fa-pencil"></span> Contact Us</a>

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
                        <h3 class="text-center">Exterior</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>*$</sup>50</span> / year</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Brick exterior on front, sides & rear - 1st level
                                and "Hardi-Plank" lap siding (Per Plan - second level)</li>
                            <li class="list-group-item">Fully excavated basement - 7'10" poured walls spray painted & 10 year warranty waterproofing system</li>
                            <li class="list-group-item">Aluminum gutters and downspouts (choice of colors)</li>
                            <li class="list-group-item">Large choice of exterior stain colors</li>
                            <li class="list-group-item">Insulated steel front door and garage service door</li>
                            <li class="list-group-item">Bay window at nook</li>
                            <li class="list-group-item">Concrete walkway to front entrance</li>
                            <li class="list-group-item">Vinyl insulated windows and screens</li>
                            <li class="list-group-item">Vinyl doorwall with tempered glass</li>
                            <li class="list-group-item">Two weatherproof exterior electrical outlets</li>
                            <li class="list-group-item">Two hose bibs</li>
                            <li class="list-group-item">Dimensional shingles with 30-year warranty</li>
                            <li class="list-group-item">Cement driveway and 3' walk to front door entrance</li>
                            <li class="list-group-item">Coachlight openings at porch and garage</li>
                            <li class="list-group-item">Limestone address block</li>

                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 2 -->
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3 class="text-center">Interior</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>50</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Choice of interior paint(standard selection)</li>
                            <li class="list-group-item">Painted 6-panel masonite or stained flush birch doors</li>
                            <li class="list-group-item">Choice of painted or stained woodwork throughout</li>
                            <li class="list-group-item">Upgraded style casing and baseboard moldings</li>
                            <li class="list-group-item">T&G 3/4" plywood flooring - glued, nailed & screwed</li>
                            <li class="list-group-item">Direct vent gas fireplace with flush ceramic tile hearth and pine mantel (complete w/ gas logs and glass door)</li>
                            <li class="list-group-item">1st floor laundry room with laundry tub in cabinet and dryer vent</li>
                            <li class="list-group-item">Gas line or 220 line to dryer</li>
                            <li class="list-group-item">Choice of countertop laminates</li>
                            <li class="list-group-item">Custom oak, maple or white cabinets throughout</li>
                            <li class="list-group-item">Prepped for ceiling lights in all bedrooms</li>
                            <li class="list-group-item">9' ceilings on first floor</li>

                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 3 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3 class="text-center">Master Suite &amp; Baths</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>150</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Master bath features garden tub & separate stall shower with custom glass shower enclosure (chrome trim)</li>
                            <li class="list-group-item">Bathroom vanities with full mirrors (36" height)</li>
                            <li class="list-group-item">Color choice of plumbing fixtures (builder standard selection)</li>
                            <li class="list-group-item">Moen (or equal) chrome faucets</li>
                            <li class="list-group-item">Double vanity sinks in master bath</li>
                            <li class="list-group-item">Ceramic tile on stall shower, walls, tub and floors in all baths (std choice selection (6"x6")</li>
                        </ul>
                    </div>

                    <div class="pricing-item featured-last">
                        <h3 class="text-center">Impressive Kitchen &amp; Nook</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>150</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Ductless hood fan (2 speed)</li>
                            <li class="list-group-item">Brand name garbage disposal</li>
                            <li class="list-group-item">Gas line or 220 line to range</li>
                            <li class="list-group-item">30" upper cabinets</li>
                            <li class="list-group-item">Island work center (per plan)</li>
                            <li class="list-group-item">Double bowl kitchen sink, stainless steel or white</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row content-row">
                <!-- Pricing Table 1 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-first">
                        <h3 class="text-center">Three Car Garages</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>*$</sup>50</span> / year</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Steel insulated side service door</li>
                            <li class="list-group-item">Side entrance with cement curb</li>
                            <li class="list-group-item">Fully drywalled & fire taped</li>
                            <li class="list-group-item">Quality steel sectional roll-up door</li>
                            <li class="list-group-item">Prep for garage door openers</li>

                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 2 -->
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3 class="text-center">Energy Savings &amp; Mechanical</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>50</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">High Efficiency - Bryant Plus-90 Furnace</li>
                            <li class="list-group-item">High Efficiency 50 gallon hot water tank</li>
                            <li class="list-group-item">Anti-scald shower control faucet</li>
                            <li class="list-group-item">Ceiling exhaust fan at all baths</li>
                            <li class="list-group-item">Automatic sump pump</li>
                            <li class="list-group-item">Smoke detectors on all levels and in all bedrooms</li>
                            <li class="list-group-item">150 AMP electrical service</li>
                            <li class="list-group-item">Copper/PVC water lines</li>
                            <li class="list-group-item">Energy efficient insulation with 1/2" styrofoam on exterior walls and fiberglass insulation in all exterior heat bearing walls R-17</li>
                            <li class="list-group-item">Fiberglass insulation in ceilings - R-38</li>

                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 3 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3 class="text-center">Subdivision Features</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>150</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Romeo School District</li>
                            <li class="list-group-item">Easy access to M-53</li>
                            <li class="list-group-item">Near Stony Creek Metropark</li>
                            <li class="list-group-item">Sidewalks</li>
                            <li class="list-group-item">City water and sewer</li>
                            <li class="list-group-item">Underground utilities</li>
                            <li class="list-group-item">Finish grade for sod</li>
                            <li class="list-group-item">Numerous treed areas</li>

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
                <h4 class="modal-title">Autumn Creek Subdivision Map</h4>
            </div>
            <div class="modal-body">
                <img src="Media/Images/autumnCreekMap.png" class="img-responsive" alt="autumn creek map"/>

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



