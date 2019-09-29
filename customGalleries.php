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
    <!--Page Name-->
    <div class="row text-center" style="margin-top: 200px;">
        <h2>Photo Gallery</h2>
            <div class="line2"></div>
                <br><br>
    </div>

    <section class="galleryHeader" style="background-image: url('Media/Images/gallery-bg.jpeg')">
        <h3 style="color: white; text-align: right; margin-right: 50px; text-shadow: 2px 2px 4px #333">Explore our work and get inspiration for your new home.</h3>
    </section>

    <div class="row text-center" style="margin-top: 30px;">
        <div class="col-xs-12 col-md-10 col-md-push-1">
            <ul style="list-style-type: none;">
                <li style="display: inline;"><a href="gallery.php" class="btn btn-sm btn-default btn-outline-dark">All</a></li>
                <li style="display: inline;"><a href="elevationGalleries.php" class="btn btn-sm btn-default btn-outline-dark">Elevations / Exteriors</a></li>
                <li style="display: inline;"><a href="kitchenGalleries.php" class="btn btn-sm btn-default btn-outline-dark">Kitchens</a></li>
                <li style="display: inline;"><a href="staircasesGalleries.php" class="btn btn-sm btn-default btn-outline-dark">Staircases</a></li>
                <li style="display: inline;"><a href="fireplaceGalleries.php" class="btn btn-sm btn-default btn-outline-dark">Fireplaces</a></li>
                <li style="display: inline;"><a href="bathroomGalleries.php" class="btn btn-sm btn-default btn-outline-dark">Bathrooms</a></li>
                <li style="display: inline;"><a href="customGalleries.php" class="btn btn-sm btn-default btn-outline-dark">Custom Details / Woodwork</a></li>
            </ul>
        </div>
    </div>


<h4 class="text-center">Custom Details / Woodwork</h4>
    <div class="row" style="margin-top: 30px">
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1">
            <!--Gallery-->
            <link href="http://dmhomesinc.com/Scripts/PHP/Gallery/index.php?controller=pjFront&action=pjActionLoadCss&id=7" type="text/css" rel="stylesheet" />
            <script type="text/javascript" src="/Scripts/PHP/Gallery/index.php?controller=pjFront&action=pjActionLoad&id=7"></script>
        </div>
    </div>

    <!--End Main Content-->
</div>

<!--Footer-->
<div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
    <?php include"Scripts/PHP/html/footer.php"; ?>
</div>

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
<script src="Scripts/jquery/Custom.js"></script>
</body>
</html>







