<?php

/**
 * Created by PhpStorm.
 * User: Matao Designs
 * Date: 7/4/2017
 * Time: 10:34 PM
 */

//Variables
$pageID = "";
$thePage = basename($_SERVER['PHP_SELF']);
//$thePage = substr($thePage,8);
$floorplans = array();
$thisFloorPlan = "";
$thumbnails = array();
$largePics = array();

if ($thePage == "modelTemplate.php") $thePage = "The_Glenwood";


//Sets the page id for the floor plan
switch ($thePage) {
    case "theGlenwood.php":
        $pageID = "1";
        break;
    case "theBrookfield.php":
        $pageID = "2";
        break;
    case "theLancaster.php":
        $pageID = "3";
        break;
    case "theNottingham.php":
        $pageID = "4";
        break;
    case "theSherwood.php":
        $pageID = "5";
        break;
    case "theBridgeport.php":
        $pageID = "6";
        break;
    case "theCatalina.php":
        $pageID = "7";
        break;
    case "theManchester.php":
        $pageID = "8";
        break;
    case "theOxford.php":
        $pageID = "9";
        break;
    case "theWellington.php":
        $pageID = "10";
        break;
    case "theWellingtonII.php":
        $pageID = "11";
        break;
    case "theBloomingtonII.php":
        $pageID = "12";
        break;
    case "narrowLot.php":
        $pageID = "13";
        break;
    case "theAlexis.php":
        $pageID = "14";
        break;
    case "theClaire.php":
        $pageID = "15";
        break;
    case "theWynwood.php":
        $pageID = "16";
        break;
}





//Grabs the floor plan names.
foreach (glob('../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/floorplans/*.*') as $filename) {
    $filename = substr($filename, 65);
    $floorplans[] = $filename;
}
//Sets the current floor plan
foreach ($floorplans as $value) {
    if ($value[0] == $pageID && $value[1] == "_") {
        $thisFloorPlan = "../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/floorplans/" . $value;
    } elseif (substr($value, 0, 2) == $pageID) {
        $thisFloorPlan = "../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/floorplans/" . $value;
    }
}

//Grab the thumbnails
foreach (glob('../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/small/*.*') as $thumb) {
    $thumb = substr($thumb, 60);
    if ($thumb[0] == $pageID && $thumb[1] == "_") {
        $thumbnails[] = $thumb;
    } elseif (substr($thumb, 0, 2) == $pageID) {
        $thumbnails[] = $thumb;
    }
}


//Grab the Large
foreach (glob('../Scripts/PHP/InteractiveFloorPlanDev/app/web/upload/large/*.*') as $large) {
    $large = substr($large, 60);
    if ($large[0] == $pageID && $large[1] == "_") {
        $largePics[] = $large;
    } elseif (substr($large, 0, 2) == $pageID) {
        $largePics[] = $large;
    }
}
