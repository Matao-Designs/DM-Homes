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
        <!--<img src="Media/Images/oakland%20hunt%20logo%20_200w.png" alt="Autumn Creek logo" class="img-responsive" style="margin: auto; width: 100px"/>-->
        <h2>Saddlebrook Orchards</h2>
        <div class="line2"></div>
        <br><br>
    </div>

    <section id="saddlebrookOrchards" style="background-image: url('Media/Images/silverCreek-bg.png'); padding-top: 200px; padding-bottom: 200px;">
        <img src="Media/Images/largeLogo.png" class="img-responsive" style="margin: auto; width: 200px; height: auto"/>
       <br>
        <div class="line"></div>
        <div class="row">
            <h1 style="text-align: center">Coming Soon</h1>
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
                            <img src="Media/Images/largeLogoBlack.png" class="img-responsive" style="width: 50%; margin: auto"/>
                            <br>
                            <link href="/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoadCss" type="text/css" rel="stylesheet" />
                            <script type="text/javascript" src="/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoad&id=4&hide=1"></script>
                        </div>
                        <div class="col-md-5">
                            <img src="Media\Images\SaddlebrookOrchards/sitemap.jpg" class="img-responsive"/>
                        </div>
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


<!--Model Modals-->
<?php include"Scripts/PHP/ModelModals.php"?>

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



