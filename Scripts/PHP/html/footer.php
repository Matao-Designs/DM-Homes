
<div class="row text-center" id="contact" style="margin-left: 0px; margin-right: 0px;">
    <footer>
            <!--Mobile-->
            <div class="row hidden-md hidden-lg" id="contactInfo" >
           <div id="theOverlay">
            <h1 style="color: white">Contact Us</h1>
            <div class="line"></div>
               <div class="col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1 col-md-6 col-lg-6">
                   <span style="margin-top: 100px;" class="hidden-xs hidden-sm visible-md visible-lg"></span>
<br><br>
                   <div class="row text-center">
                    <h4><i class="fa fa-phone"></i> Call</h4>
                    <p>586.336.6800</p>
                </div>
<!--                <div class="row text-center">-->
<!--                    <h4><i class="fa fa-fax"></i> Fax</h4>-->
<!--                    <p>586.336.6817</p>-->
<!--                </div>-->
                <div class="row text-center">
                    <h4><i class="fa fa-envelope-o"></i> Email</h4>
                    <p><a href="mailto:customerservice@dmhomesinc.com">customerservice@dmhomesinc.com</a></p>
                </div>
<!--                <div class="row text-center">-->
<!--                    <h4><i class="fa fa-map-marker"></i> Location</h4>-->
<!--                    <p>66691 Van Dyke Ave.<br>Washington Township, Michigan 48095</p>-->
<!--                </div>-->
            </div>
            <div class="col-xs-10 col-xs-push-1 col-sm-10 col-sm-push-1 col-md-6 col-lg-6">
                <div class="row text-center">

                </div>
            </div>
        </div>
        </div>




        <!--Desktop-->
        <div class="row hidden-xs hidden-sm" id="contactInfo" style="background-image: url('Media/Images/manchester elevation.JPG')">
            <div id="theOverlay">
                <h1 style="color: white">Contact Us</h1>
                <div class="line"></div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <span style="margin-top: 100px;" class="hidden-xs hidden-sm visible-md visible-lg"></span>
                    <br><br>
                    <div class="row text-center">
                        <h4><i class="fa fa-phone"></i> Call</h4>
                        <p>586.336.6800</p>
                    </div>
<!--                    <div class="row text-center">-->
<!--                        <h4><i class="fa fa-fax"></i> Fax</h4>-->
<!--                        <p>586.336.6817</p>-->
<!--                    </div>-->
                    <div class="row text-center">
                        <h4><i class="fa fa-envelope-o"></i> Email</h4>
                        <p><a href="mailto:customerservice@dmhomesinc.com">customerservice@dmhomesinc.com</a></p>
                    </div>
<!--                    <div class="row text-center">-->
<!--                        <h4><i class="fa fa-map-marker"></i> Location</h4>-->
<!--                        <p>66691 Van Dyke Ave.<br>Washington Township, Michigan 48095</p>-->
<!--                    </div>-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="row text-center">
                        <h4><i class="fa fa-comments"></i> Send us a message</h4>

                        <form action="Scripts/PHP/formmail.php" id="formoid" method="post" onsubmit="MM validateform('name','','phone','','email','','message','');return document.MM_returnValue">

                            <input type="hidden" name="subject" value="Form Submission from DM Homes Inc. Website" />

<!--                         <input type="hidden" name="redirect" value="thankyou.html" />-->


                            <div class="row control-group">
                                <div class="form-group col-xs-12 col-lg-6 col-lg-push-3 floating-label-form-group controls">
                                    <label>Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 col-lg-6 col-lg-push-3 floating-label-form-group controls">
                                    <label>Email Address</label>
                                    <input type="email" class="form-control" placeholder="Email Address" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 col-lg-6 col-lg-push-3 floating-label-form-group controls">
                                    <label>Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="row control-group">
                                <div class="form-group col-xs-12 col-lg-6 col-lg-push-3 floating-label-form-group controls">
                                    <label>Message</label>
                                    <textarea rows="3" class="form-control" placeholder="Message" name="message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <div class="row control-group">
                                <div class="form-group col-xs-12 col-lg-6 col-lg-push-3 floating-label-form-group controls">
                                    <label>No Robots</label>
                                    <input type="text" class="form-control" placeholder="What is 6 + 4?" name="robots" id="robots" required data-validation-required-message="Please enter the correct answer.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>

                            <br>
                            <div id="success"></div>
                            <div class="row">
                                <div class="form-group col-xs-12">
                                    <label onclick="validateForm()" class="btn btn-outline-light">Send Message</label>
                                </div>
                            </div>
                        </form>

                        <script>


                            var getUrlParameter = function getUrlParameter(sParam) {
                                var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                                    sURLVariables = sPageURL.split('&'),
                                    sParameterName,
                                    i;

                                for (i = 0; i < sURLVariables.length; i++) {
                                    sParameterName = sURLVariables[i].split('=');

                                    if (sParameterName[0] === sParam) {
                                        return sParameterName[1] === undefined ? true : sParameterName[1];
                                    }
                                }
                            };

                                function validateForm() {

                                var theVal = $("#robots").val();
                                if(theVal == "10")
                                {
                                    $("#formoid").submit();
                                }
                                else {
                                    alert("Please enter the correct answer to submit the form.");
                                }


                            }

                        </script>



<!--                        <iframe src="contactForm2.html" style="overflow: hidden; width: 100%; height: 650px; border: 0"></iframe>-->


                    </div>
                </div>
            </div>
        </div>


<!--        <div class="row" style="-webkit-filter: grayscale(100%); filter: grayscale(100%)">-->
<!--            <iframe id="theMap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5856.34254329741!2d-83.013086!3d42.784729!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8824e4951ef05c11%3A0x5bd6c5cceaefdf79!2s66691+Van+Dyke%2C+Washington%2C+MI+48095!5e0!3m2!1sen!2sus!4v1474432236208"  frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!--        </div>-->
    </footer>
</div>


<div class="alert alert-success" id="successForm" role="alert" style="display: none; position: fixed; bottom: 0; z-index: 9999;">
    <strong>Thank You!</strong> Your message has been sent. Someone will contact you as soon as possible.
</div>