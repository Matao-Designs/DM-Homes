<?php
/**
 * Created by PhpStorm.
 * User: Matt
 * Date: 7/31/2016
 * Time: 1:18 AM
 */
function theTitle($theCurrentPage)
{
    $theClient = "DM Homes Inc.";
    $title = "";

    switch ($theCurrentPage) {
        case "index.php":
            $title = $theClient . ' | Home';
            break;

        default:
            $title = $theClient;
            break;
    }
    return $title;
}