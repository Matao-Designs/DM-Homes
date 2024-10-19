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
  <link href="CSS/animate.css" rel="stylesheet" />
  <link href="CSS/specHomes.css" rel="stylesheet" />
  <link href="CSS/Custom.css" rel="stylesheet" />
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0005.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0006.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0044_2.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0076.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0102.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/images/homeScreen/IMG_0224.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0228.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0233.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0629.jpg" media="(max-width: 1800px)">
  <link rel="preload" as="image" href="Media/Images/homeScreen/IMG_0782.jpg" media="(max-width: 1800px)">

  <title><?php printf(theTitle($thePage)) ?></title>
</head>

<body id="page-top">
<!--Header-->
<div class="container-fluid">
  <div class="row" style="background: #333333">
    <?php include "Scripts/PHP/html/header.php"; ?>
  </div>
</div>


<!--Main Content-->
<div class="container-fluid" id="mainContent">
  <!--Jumbotron-->
  <div class="row hidden-xs hidden-sm visible-md visible-lg">
    <?php include 'Scripts/homePageScroller.php';?>
  </div>

  <!--Phone Splash page-->
  <div class="row visible-xs visible-sm hidden-md hidden-lg">
    <div class="phoneSplash" style="position: relative; top: -50px;">
      <img src="Media/Images/PONECOVER.JPG" class="img-responsive" />
    </div>
  </div>

  <!--Opening Hook-->
  <section id="openingHook">
    <div class="container-fluid">
      <div class="row text-center">
        <h1>Why choose DM Homes Inc.</h1>
        <div class="line"></div>
        <div class="row">
          <div class="col-xs-12 col-md-10 col-md-push-1">
            <div class="row" style="margin-top: 20px;">
              <div class="col-xs-12 col-md-5">
                <img src="Media/Images/IMG_0044.JPG" class="whyImage img-responsive" style="padding: 20px;" alt="kitchenTable" />
              </div>
              <div class="col-xs-12 col-md-7">
                <p style="text-align: left; margin-top: 20px;">
                  DM Homes Inc. offers high quality home designs
                  that are built to stand the test of time. Our
                  diverse team provides a wide variety of home layout
                  options, as well as the ability to adapt any
                  layout you bring us. This allows us to be able
                  to make changes to any design ensuring that your
                  home will be something you see as unique every
                  time you open the door.
                </p>

                <p style="text-align: left">
                  We use only high quality materials and trusted
                  labor so that your DM Home will be the envy of
                  your friends and family. Experienced employees
                  guide you to create a home that compliments
                  any lifestyle whether traditional or modern.
                  Working closely with our customers, we strive to
                  create a strong bond to further enhance the
                  process.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Communities Section-->
  <section id="communities">
    <div class="overLay1">
      <div class="communitiesText">
        <img src="Media/Images/logo.png" style="float: left; padding-right: 40px; padding-bottom: 50px;" class="hidden-xs hidden-sm visible-md visible-lg" />
        <h3>Communities</h3>
        <ul>
          <li>Great neighborhoods</li>
          <li>Numerous amenities</li>
          <li>Your choice of available lots</li>
          <li>Spec homes available</li>
        </ul>
        <a href="communities.php" style="margin-left: 100px; margin-top: 20px;" class="btn btn-lg btn-default btn-outline">Learn More</a>
      </div>
    </div>
  </section>

  <!--Home Styles-->
  <section id="homeStyles" class="hidden-xs hidden-sm visible-md visible-lg">
    <div class="overLay3">
      <div class="communitiesText3">
        <h3>Home Styles</h3>
        <p>
          Your plans or ours, allow us to build your
          dream home.<br> You won't be disappointed.
        </p>
        <a href="homeStyles.php" style="margin-top: 20px;" class="btn btn-lg btn-default btn-outline">View Homes</a>
      </div>
    </div>
  </section>


  <!--Off site building-->
  <section id="offSite">
    <div class="overLay2">
      <div class="communitiesText2">
        <h3>Off-Site Building</h3>
        <p>
          Do you own your own land, <br>or are you looking to purchase<br> an empty
          lot somewhere? <br>We can help.
        </p>
        <a href="offSite.php" style="margin-left: 100px; margin-top: 20px;" class="btn btn-lg btn-default btn-outline">Learn More</a>
      </div>
    </div>
  </section>


  <!--Home Styles-->
  <section id="homeStyles" class="visible-xs visible-sm hidden-md hidden-lg">
    <div class="overLay1">
      <div class="communitiesText3">
        <h3>Home Styles</h3>
        <p>
          Your plans or ours, allow us to build your
          dream home,<br> you won't be disappointed.
        </p>
        <a href="homeStyles.php" style="margin-top: 20px;" class="btn btn-lg btn-default btn-outline">View Homes</a>
      </div>
    </div>
  </section>


  <!-- Spec Homes Section -->
  <section class="spec-homes">
    <div class="container-fluid">
      <div class="row text-center">
        <h1>Avaliable Spec Homes</h1>
        <div class="line"></div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <img src="./Media/Images/homeScreen/IMG_0224.jpg" class="img-responsive" alt="Spec Homes">
        </div>
        <div class="col-sm-12 col-md-6">

          <div class="specHomes" aria-label="Avaliable Spec Homes">
            <div style="display: flex; justify-content: center; align-items: center; height: 100%;">
              <h4>More spec homes coming soon.</h4>
            </div>

            <!--            &lt;!&ndash; Start Spec Home &ndash;&gt;-->
<!--            <div class="specHome">-->
<!--              <div class="specImage">-->
<!--                <img src="./Media/Images/specHomes/lot2/IMG_6633.JPG" alt="Spec Homes">-->
<!--              </div>-->
<!--              <div class="info">-->
<!--                <h3 class="title">Model: Claire Colonial</h3>-->
<!--                <p class="community">Community: Saddlebrook</p>-->
<!--                <div class="flexRow">-->
<!--                  <div class="squareFootage">2,653 sq. ft.</div>-->
<!--                  <div class="lotNumber">Lot 1</div>-->
<!--                  <a href="https://dmhomesinc.com/valencia.php?valencia" class="communityButton">View Community</a>-->
<!--                  <a href="https://dmhomesinc.com/gallery.php" class="communityButton">View Gallery</a>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            &lt;!&ndash; End Spec Home &ndash;&gt;-->

          </div>


          <!-- <div style="margin-top: 70px;"> -->
          <!-- Spec Homes CMS section here -->
          <!-- <link href="http://dmhomesinc.com/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoadCss" type="text/css" rel="stylesheet" /> -->
          <!-- <script type="text/javascript" src="http://dmhomesinc.com/Scripts/PHP/CMS/index.php?controller=pjFront&action=pjActionLoad&id=1"></script> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </section>


  <!--Island Progression video-->
  <section id="openingHook">
    <div class="container-fluid">
      <div class="row text-center">
        <h1>Island/Kitchen Progression</h1>
        <div class="line"></div>
        <div class="row">
          <div class="col-xs-12 col-md-10 col-md-push-1">
            <div class="row" style="margin-top: 20px;">
              <div class="col-xs-12 col-md-12 col-lg-6">
                <!--Video-->
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/fsNJxuon29E?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
              </div>
              <div class="col-xs-12 col-md-12 col-lg-6">
                <p style="text-align: left; margin-top: 20px;">
                  Watch as we built a custom island as the masterpiece and focal point of a
                  beautiful kitchen. This custom island features dark walnut stained
                  finishes and polished metal trim in between. With the other cabinets
                  finished in white, the island pops out of the room and becomes the
                  common meeting ground for anyone in the kitchen.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!--Meet the Family-->
  <section id="meetTheFam" style="padding-bottom: 100px;" class="hidden-xs hidden-sm visible-md visible-lg">
    <div class="container-fluid">
      <div class="row text-center" style="background: #e3e3e3">
        <div class="col-xs-12 col-sm-12 col-md-10 col-md-push-1 col-lg-10 col-lg-push-1">
          <h1 id="meetTheFam-header">Meet the Family</h1>
          <hr class="colored">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <img src="Media/Images/dominic_sr.png" class="img-responsive img-circle img-centered meetPic" alt="Dominic Sr." />
              <p>Dominic Mattina Sr. emigrated from Italy in 1965 with his wife Rosalia Mattina. In pursuit of the American dream, he worked diligently as a skilled finish carpenter and progressed to build his first residential home in 1975. Dominic and Rosalia have three children, Dominic, Anthony and Francesca, who all work in the family business.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <img src="Media/Images/dom.jpg" class="img-responsive img-circle img-centered meetPic" alt="Dominic" />
              <p>Dominic has been around the construction industry for over 30 years. He started by going to work with his father on weekends and also working through many summers of his youth. Working with his dad taught him not only great skills as a finish carpenter, but the importance of respecting clients and their needs. Dominic received a degree in Construction Engineering from Lawrence Technological University in 1990 and shortly after became a partner with his father.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <img src="Media/Images/nino.jpg" class="img-responsive img-circle img-centered meetPic" alt="Nino" />
              <p>Like his brother Dominic, Anthony Mattina grew up around the building industry, working with his father as a finish carpenter. He received a degree in Finance from Oakland University in 1991 before joining his dad and brother at DM Homes Inc. Anthony has a creative and modern approach to home design. He pays close attention to new products and trends and implements them in model homes to make cutting-edge design accessible to his clients.</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
              <img src="Media/Images/francesca.png" class="img-responsive img-circle img-centered meetPic" alt="Francesca" />
              <p>Francesca received an Accounting degree from Oakland University in 1995 and now manages the main office. Like her father and two brothers, she takes great pride in being a part of a family business that fulfills people's dreams of owning a new home.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Testimonial Call out-->
  <section id="testimonialsSetup" class="hidden-xs visible-sm visible-md visible-lg" style="padding-top: 0px; padding-bottom: 0px;">
    <aside class="testimonialsQuote" style="background-image: url('Media/Images/testimonial-bg.JPG');">
      <div class="container-fluid">
        <div class="row text-center">
          <div class="col-md-10 col-md-push-1">
            <h2>
              "Great <span style="color: red; font-style: italic">home</span> design starts by thinking how the family <span style="color: red; font-style: italic">living</span> in it, is going to <span style="color: red; font-style: italic">enjoy</span> it"
            </h2>
            <div class="line"></div>
          </div>
        </div>
        <div class="row text-center" style="position: relative; top: 20px;">
          <a class="btn btn-lg btn-default page-scroll" href="about.php" id="learnMore">
            Testimonials
          </a>
        </div>
      </div>
    </aside>
  </section>

  <!--About Section-->
  <section id="about">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
          <h1 id="about-header">About DM Homes</h1>
          <hr class="colored">
          <img src="Media/Images/dominic_sr.png" class="img-responsive img-circle img-centered" alt="Dominic Sr." />
          <br>
          <p class="about-text col-md-12 col-lg-10 col-lg-push-1">
            D.M. Homes Inc. was established by Dominic Mattina Sr. in 1986, in Rochester, Michigan. With the
            help of his two sons, Dominic and Anthony, the company has expanded into various neighborhoods
            throughout southeast Michigan. We can meet all of your home building needs, from on-site luxury
            homes built in one of our communities, or off-site building where we design and build your dream home on your property. Much of our success stems from our commitment to building quality custom homes, our attention to detail, and establishing personal relationships with our clients.
          </p>
          <p class="about-text col-md-12 col-lg-10 col-lg-push-1">
            As builders, we feel it is of the utmost importance to provide you with personal supervision when constructing your home. We monitor the building process on a daily basis to ensure the quality of work exceeds your expectations, and the progress on your home is on track with the construction timeline.
          </p>
          <p class="about-text col-md-12 col-lg-10 col-lg-push-1">
            We believe in direct communication and are available daily to discuss the progress of your home. By choosing D.M. Homes Inc., you are ensuring that your dream home will be built to your specifications, constructed with the finest materials, and have the highest quality workmanship.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!--End Main Content-->
</div>

<!--Testimonial 1 Modal-->
<div class="modal fade" id="testimonial1Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Testimonial</h4>
      </div>
      <div class="modal-body">
        <p>My name is Sarah Hudson, formerly Sarah Hosey. I was walking along Collins Road in Oakland Township and saw that you are currently building homes in the Oakland Hunt Subdivision off of Mead Road. I was so excited to see that you are still building in this area. Dominic Sr. built a home for us many years ago on a lot at 1531 Chevy Circuit in Rochester Hills. I just have to tell you what a wonderful experience it was for us. We had never purchased a home before that, much less know anything about new construction. I have been in three homes since then, one new build and two previously owned homes. None have felt so much like home and no where have we met so many life long friends as in the Chevy Circuit home.</p>
        <p>Our daughters were 4 and 1 1/2 years old when we bought that home. I still have a picture of them sitting on the tractor. Dominic was so nice and let them sit on it. Our son was born when we lived there. They are all grown, out of school and starting new lives of their own. Rachel is in California, married, has a 1 year old daughter and is working in sales. Kelly is living in Madison Heights and working in Marketing. Eric is working for OnStar and looking to live in Royal Oak. Since our experience was so wonderful on Chevy Circuit, I am defiantly not to proud to beg you to build him a house in Royal Oak!!! (Seriously!)</p>
        <p>I hope all is well with your family. I really wanted to let you know it put a huge smile on my face when I saw DM Homes on the sign around the corner. I have always enjoyed building our homes or remodeling the others. I could do it every day. I am sure I have our experience on Chevy Circuit to thank for that.</p>
        <p>Thank-you so much for the great experience!</p>
        ` <p>Sincerely,<br>
        Sarah Hudson</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!--Testimonial 2 Modal-->
<div class="modal fade" id="testimonial2Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Testimonial</h4>
      </div>
      <div class="modal-body">
        <p>Bob and I would like to take this opportunity to thank everyone at DM Homes for the beautiful home that you built for us.</p>
        <p>Everyone was so helpful, Dominic and Nino were always around. If we had questions regarding anything they would always give us an answer. If we just happened to stop by to see what was going on, one of them was usually there. They always treated us with respect; not just from a customer/builder respect, but more like a friendship.</p>
        <p>We would also like to thank Janet in your sales office for helping us with all of our selections and work orders. She was very helpful and always stayed upbeat. Her enthusiasm excited amd motivated us when another new phase in the development was complete.</p>
        <p>And, not to forget Mr. D. Sr., who throughout the signing and closing was very friendly.</p>
        <p>So thank-you to everyone for such a quality built home. We just love it, and the subdivision. If we ever decide to do this again, we know exactly who will build our next home - DM Homes.</p>
        <p>Bob, Patti, Nicolas and Courtney Watson</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<!--Testimonial 3 Modal-->
<div class="modal fade" id="testimonial3Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Testimonial</h4>
      </div>
      <div class="modal-body">
        <p>Dear Mattina Family,</p>
        <p>We would like to thank all of you (Dominic, Domenico and Nino) for providing a pleasant home building experience. We especially appreciate your attention to quality in the design and construction of our home. We also appreciate your quick responses to our questions and concerns. We are totally satisfied with our new home and our great working relationship with you.</p>
        <p>Mr. Mattina, you must really be proud of your sons, Domenico and Nino. They are very professional in their work, yet very polite and personable. It is a pleasure dealing with such pleasant young men.</p>
        <p>We would also like to thank Ed Masha and Janet Regan of Real Estate One for helping make the entire transaction, from the sale of our previous home to the closing of our new home, a smooth and enjoyable experience. Ed stated it very precisely when he said they were there to take the bumps out of the road.</p>
        <p>We will highly recommend DM Homes and Real Estate One to our family and friends. You complement each other very well and form a great team. In our short time in our new home, we have met many of our new neighbors. The typical first questions are, "How is your builder?" and "How are your realtors?". We can only respond by saying "Great!". This is not always the same response we get from our neighbors, when relaying their experiences. These conversations further confirm that our choice in the team of DM Homes and Real Estate One was the right one.</p>
        <p>We would like to close by saying thank-you. We thoroughly enjoy our new home!</p>
        <p>Pete & Kathy Jonko</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!--Footer-->
<div class="container-fluid">
  <?php include "Scripts/PHP/html/footer.php"; ?>
</div>

<!--Javascript-->
<script src="Scripts/jquery/jquery-1.9.1.js"></script>
<script src="Scripts/js/bootstrap.js"></script>
<script src="Scripts/jquery/classie.js"></script>
<script src="Scripts/jquery/jquery.easing.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--Greensock-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenLite.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/easing/EasePack.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/CSSPlugin.min.js"></script>
<script src="Scripts/imageSlider.js"></script>
<script src="Scripts/jquery/Custom.js"></script>
<script>
  $(document).ready(function() {
    $('.dropdown-toggle').dropdown()
  });
</script>
</body>

</html>