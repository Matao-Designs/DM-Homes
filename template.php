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
        <link href="CSS/Custom.css" rel="stylesheet" />


    <title><?php printf(theTitle($thePage))?></title>


</head>
<body>


<!--Header-->
    <div class="container-fluid">
        <?php include"Scripts/PHP/html/header.php"; ?>
    </div>



<!--Main Content-->
    <div class="container-fluid">

        <div class="row">

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6" style="background-color: #e3e3e3">
               This is one div to show responsive.
            </div>

            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-6" style="background-color: #f6f6f6">
                This is another
            </div>

        </div>


    </div>



<!--Footer-->
    <div class="container-fluid">
        <?php include"Scripts/PHP/html/footer.php"; ?>
    </div>



<!--Javascript-->
    <script src="Scripts/jquery/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="Scripts/js/bootstrap.js"></script>
    <script src="Scripts/jquery/Custom.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</body>
</html>



