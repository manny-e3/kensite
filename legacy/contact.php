<?php include"inc/header.php";  ?>

        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>/</span>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <div class="contact-area two pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h3>Drop us message for any query</h3>
                           <div class="row">
                                    <div class="col-12">
                                        <div class="contact__msg" style="display: none">
                                            <p>Your message was sent successfully.</p>
                                        </div>
                                    </div>
                                </div>
    
                            <form class="contact__form" method="post" action="mail.php">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
    
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" id="phone_number" required data-error="Please enter your number" class="form-control">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
            
                                   
        
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-12 form-group">
                                        <div class="g-recaptcha" data-sitekey="6Ld1B80ZAAAAAEp6_qPiRV7Q-EwaOInfB7Tquv77"></div> 
                                    </div>
        
                                    <div class="col-md-12 col-lg-12">
                                        <button type="submit" style="float: left;" class="cmn-btn btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="contact-place">
                            <div class="contact-item">
                                <i class="flaticon-call"></i>
                                <h4>Call us</h4>
                                <ul>
                                    <li>
                                        <span>Phone:</span>
                                        <a href="">+2348153512680</a>
                                    </li>
                                    <!-- <li>
                                        <span>Mobile:</span>
                                        <a href="tel:+15143126688">+1 (514) 312-6688</a>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-placeholder"></i>
                                <h4>Our location</h4>
                                <span>14, Adegbola Street, Airport - Ikeja‎ Lagos. Plot 1, Onne Refinery Road, Port Harcourt.</span>
                                <br>
                                <span>NAHCO Cargo Warehouse, NA, IA Airport - Abuja</span>
                            </div>
                            <div class="contact-item">
                                <i class="flaticon-email"></i>
                                <h4>Email</h4>
                                <ul>
                                    <li>
                                        <span>Mail:</span>
                                        <a href="">info@kenrelocationcomltd.com</a>
                                    </li>
                                    <li>
                                        <span>Gmail:</span>
                                        <a href="">kenrelocation@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.4009340040857!2d3.335494565040474!3d6.596991349029091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9188e6187af1%3A0x8b3bdcfa88fe4bc1!2s14+Adegbola+Street%2C+Ikeja!5e0!3m2!1sen!2sng!4v1548242614482" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- End Map -->

      

<?php include"inc/footer.php";  ?>