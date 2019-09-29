<?php
    $theClient = "Matao Designs";
?>


 <!-- Global site tag (gtag.js) - Google Analytics -->
 <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148785259-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-148785259-1');
    </script>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="author" content="Matao Desisgn"/>
    <meta name="web_author" content="Matao Designs"/>
    <meta name="robots" content="index, follow"/>
    <meta name="copyright" content="All logos and content on this site are property of <?php echo $theClient?> unless specified, and
          are not to be used by anyone without written permission.">
    <meta name="googlebot" content="noodp"/>
    <meta name="language" content="english"/>
    <meta name="reply-to" content="matt@mataodesigns.com"/>

    <?php
        function metaDescription($theCurrentPage)
        {
            $meta = "";

            switch ($theCurrentPage) {
                case "index.php":
                    $meta = '<meta name="description" content="DM Homes Inc. builds high quality homes at affordable prices. 
                            Offering properties in sub-divisions, off-site building and commercial properties."/>
                            <meta name="keywords" content="Michigan, Construction, Homes, Home Builders, Residential, Commercial, House, Contractor, Real Estate, Real Estate One, Homes For Sale"/>';
                    break;

                default:
                    $meta = '<meta name="description" content="DM Homes Inc. builds high quality homes at affordable prices. 
                    Offering properties in sub-divisions, off-site building and commercial properties."/>
                    <meta name="keywords" content="Michigan, Construction, Homes, Home Builders, Residential, Commercial, House, Contractor, Real Estate, Real Estate One, Homes For Sale">';
                break;
            }
            return $meta;

        }
    ?>