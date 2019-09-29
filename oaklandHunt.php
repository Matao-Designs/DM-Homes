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
        <img src="Media/Images/oakland%20hunt%20logo%20_200w.png" alt="Autumn Creek logo" class="img-responsive" style="margin: auto; width: 100px"/>

        <h2>Oakland Hunt</h2>
        <div class="line2"></div>
        <h2 style="color: red">SOLD OUT</h2>

        <br><br>
    </div>

    <section id="autumnCreekMap" style="background-image: url('Media/Images/oaklandHunt-bg.png'); min-height: 420px; padding-top: 100px; padding-bottom: 100px">
        <div class="col-xs-12 col-sm-12 col-md-8 text-center">

            <h3 style="color: white; font-family: 'Crimson Text', serif"><span class="fa fa-map-marker fa-3x" style="color: orangered"></span><br>Located at:</h3>
            <h4 style="color: white; font-family: 'Crimson Text', serif">
                East Buell rd. between Rochester Rd. &amp; Orion Rd.
               <br>
                Oakland Charter Township, Michigan
            </h4>
        </div>

        <div class="hidden-xs hidden-sm col-md-4 col-lg-4">
            <!--Map-->
            <!--Google Map-->
            <script src="Scripts/jquery/googleMapOaklandHunt.js"></script>

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
        <script src="Scripts/jquery/googleMapOaklandHunt.js"></script>

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
                    Oakland Hunt is a community that stands out from the rest. Located in the prestigious Township of Oakland, and within the excellent Rochester Community School District, Oakland Hunt features many community amenities, such as a clubhouse with a fitness center, an outdoor swimming pool, playscape and tennis courts.                 </p>
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

                        <div class="item text-center"><h5>The Bloomington II</h5><img src="Media/Images/Models/The_BloomingtonII.png" alt="The Bloomington II" style="margin: auto"><br><a href="Models/theBloomingtonII.php?prev=oaklandHunt"   class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Lancaster</h5><img src="Media/Images/Models/The_Lancaster.png" alt="The Lancaster" style="margin: auto"><br><a href="Models/theLancaster.php?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Manchester</h5><img src="Media/Images/Models/The_Manchester.png" alt="The Manchester" style="margin: auto"><br><a href="Models/theManchester.php?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Oxford</h5><img src="Media/Images/Models/The_Oxford.png" alt="The Oxford" style="margin: auto"><br><a href="Models/theOxford.php?prev=theVistas"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Wellington</h5><img src="Media/Images/Models/The_Wellington.png" alt="The Wellington" style="margin: auto"><br><a href="Models/theWellington.php?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>
                        <div class="item text-center"><h5>The Wellington II</h5><img src="Media/Images/Models/The_Wellington_II.png" alt="The Wellington II" style="margin: auto"><br><a href="Models/theWellingtonII.php?prev=oaklandHunt"  class="btn btn-default"><span class="fa fa-search"></span> View Details</a></div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <section id="communityMap" style="margin-left: -15px; margin-right: -15px;">
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
                    <link href="/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoadCss" type="text/css" rel="stylesheet" />
                    <script type="text/javascript" src="/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoad&id=1&hide=1"></script>
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
                        <h3 class="text-center">Exterior Amenities</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>*$</sup>50</span> / year</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Beautiful architectural elevations and plans</li>
                            <li class="list-group-item">First floor brick on all four sides</li>
                            <li class="list-group-item">Three car side entrance garage, fully dry walled with curbs, sectional overhead doors and opener circuit</li>
                            <li class="list-group-item">Decorator muntin bars on front windows</li>
                            <li class="list-group-item">Continuous aluminum gutters and downspouts</li>
                            <li class="list-group-item">Limestone address stone</li>
                            <li class="list-group-item">Two electrical outlets</li>
                            <li class="list-group-item">Two exterior water spigots</li>
                            <li class="list-group-item">Dimensional shingles with 30 year warranty</li>
                            <li class="list-group-item">Egress window in basement- per site</li>


                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 2 -->
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3 class="text-center">Interior Amenities</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>50</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">9 ft. ceilings on first floor</li>
                            <li class="list-group-item">Volume ceilings at foyer, great room and master bedroom- per plan</li>
                            <li class="list-group-item">Hardwood flooring at foyer, hallway, powder room, kitchen and nook- per plan</li>
                            <li class="list-group-item">Ceramic tiled floor in laundry room</li>
                            <li class="list-group-item">Crown moldings at foyer, dining and library</li>
                            <li class="list-group-item">Recessed lighting package(15 cans)</li>
                            <li class="list-group-item">Ceiling fan preps at master bedroom and great room</li>
                            <li class="list-group-item">Choice of interior trim and wall colors from standard selection</li>
                            <li class="list-group-item">Lever style door handles</li>
                            <li class="list-group-item">Custom wood staircase and hand railing</li>
                            <li class="list-group-item">Iron spindles and wood end caps</li>
                            <li class="list-group-item">Elegant gas fireplace with wood mantle and tiled surround</li>
                            <li class="list-group-item">Laundry tub set in cabinet with washer box set in wall</li>
                            <li class="list-group-item">Electric smoke detectors with battery backup</li>
                            <li class="list-group-item">Carpeting throughout with 5 pound pad</li>

                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 3 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3 class="text-center">Luxury Baths</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>150</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Ceramic tiled floors and walls in all baths</li>
                            <li class="list-group-item">Master bath garden tub with tile surround</li>
                            <li class="list-group-item">Washerless single lever faucets in all baths</li>
                            <li class="list-group-item">Full vanity mirrors in all baths</li>
                            <li class="list-group-item">Chrome shower door in master bath</li>
                            <li class="list-group-item">Exhaust fans in all baths vented to outside</li>
                            <li class="list-group-item">Granite countertops with under mount sinks</li>

                        </ul>
                    </div>



                </div>
            </div>

            <div class="row content-row">
                <!-- Pricing Table 1 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-first">
                        <h3 class="text-center">Gourmet Kitchens</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>*$</sup>50</span> / year</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">Granite countertops throughout kitchen and island- per plan</li>
                            <li class="list-group-item">Premium maple or oak raised panel cabinetry throughout</li>
                            <li class="list-group-item">Staggered 36" and 42" upper cabinets with crown molding</li>
                            <li class="list-group-item">Powered garbage disposal</li>
                            <li class="list-group-item">Exhaust hood fan</li>
                            <li class="list-group-item">Chrome faucet with vegetable sprayer</li>
                            <li class="list-group-item">Under mounted stainless steel sink</li>
                            <li class="list-group-item">G.E. electric cooktop</li>
                            <li class="list-group-item">G.E. double oven</li>
                            <li class="list-group-item">G.E. dishwasher</li>


                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 2 -->
                <div class="col-md-4">
                    <div class="pricing-item featured">
                        <h3 class="text-center">Energy Efficiency &amp; Security</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>50</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">R-38 insulation in ceilings- per energy code</li>
                            <li class="list-group-item">R-13 and R-19 insulation in exterior walls</li>
                            <li class="list-group-item">R-11 basement wall blanket</li>
                            <li class="list-group-item">50 gallon high efficiency hot water heater</li>
                            <li class="list-group-item">95% energy efficient furnace</li>
                            <li class="list-group-item">13 SEER energy efficient air conditioner</li>
                            <li class="list-group-item">Programmable thermostat</li>
                            <li class="list-group-item">Power humidifier</li>
                            <li class="list-group-item">Insulated metal entry doors with magnetic weather stripping</li>
                            <li class="list-group-item">Insulated wood windows with vinyl clad exterior and exterior screens</li>
                            <li class="list-group-item">Low E glass windows</li>
                            <li class="list-group-item">Nelson Energy Seal® package</li>

                        </ul>
                    </div>
                </div>
                <!-- Pricing Table 3 -->
                <div class="col-md-4">
                    <div class="pricing-item featured-last">
                        <h3 class="text-center">Structural Qualities</h3>
                        <hr class="colored">
                        <!--<div class="price"><span class="number"><sup>$</sup>150</span> / month</div>-->
                        <ul class="list-group">
                            <li class="list-group-item">7' 10" basement walls</li>
                            <li class="list-group-item">3/4" T&G wood flooring glued and screwed throughout</li>
                            <li class="list-group-item">Drywall nailed, glued and screwed throughout</li>
                            <li class="list-group-item">150 amp electrical service</li>
                            <li class="list-group-item">Full basement with automatic sump</li>
                            <li class="list-group-item">Pex® piping water supply</li>


                        </ul>
                    </div>



                </div>
            </div>


        </div>
    </section>











    <!--End Main Content-->
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



