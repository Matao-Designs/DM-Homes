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

    <div class="row text-center" style="margin-top: 200px;">
        <h2>DM Homes Administrator Login</h2>
        <div class="line2"></div>
        <p class="col-md-10 col-md-push-1">
            If you have accessed this page by accident, please click any of the links above or click back on your browsers navigation bar.
        </p>
    </div>


    <div class="row text-center">
        <div class="col-xs-12 col-md-4"></div>
        <div class="col-xs-12 col-md-4">
            <link href="http://dmhomesinc.com/Scripts/PHP/MemberLoginDev/index.php?controller=pjFront&action=pjActionLoadCss" type="text/css" rel="stylesheet" />
            <script type="text/javascript" src="http://dmhomesinc.com/Scripts/PHP/MemberLoginDev/index.php?controller=pjFront&action=pjActionLoginJs"></script>
            <script type="text/javascript" src="/Scripts/PHP/MemberLoginDev/index.php?controller=pjFront&action=pjActionLogin"></script>
        </div>
            <div class="col-xs-12 col-md-4"></div>
    </div>













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
<div class="container-fluid">
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
<script src="Scripts/jquery/contact_me.js"></script>
<script src="Scripts/jquery/jqBootstrapValidation.js"></script>



<script src="Scripts/jquery/Custom.js"></script>



</body>
</html>



