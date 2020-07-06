<?php include_once(APPPATH.'/Views/layout/header.php'); ?>
        <!-- Header Area End Here -->
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="img/figure/inner-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Contact With Us</h1>
                            <ul>
                                <li>
                                    <a href="home">Home</a>
                                </li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here -->
        <!-- Team Area Start Here -->
        <section class="inner-page-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="contact-page-box-layout1">
                            <div class="contact-location">
                                <div class="location-address">
                                    <h3 class="item-title">Plumbing and Heating</h3>
                                    <ul>
                                        <li>Majri Mafi, Mohkampur</li>
                                        <li>Dehradun</li>
                                        <li>+91-98086-48205</li>
                                    </ul>
                                </div>
                                <div class="location-address">
                                    <h3 class="item-title">Plumbing and Heating</h3>
                                    <ul>
                                    <li>Majri Mafi, Mohkampur</li>
                                        <li>Dehradun</li>
                                        <li>+91-98086-48205</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="google-map-area">
                                <div id="googleMap" class="google-map" style="width: 100%; height: 380px; border-radius: 4px; filter: grayscale(100%);"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 sidebar-break-md sidebar-widget-area">
                        <div class="widget widget-contact-form">
                            <div class="heading-layout3">
                                <h3 class="item-title">Have you Any Question?</h3>
                            </div>
                            <form class="contact-form-box" id="contact-form">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-user"></i></div>
                                        <input type="text" placeholder="Name" class="form-control" name="name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="far fa-envelope"></i></div>
                                        <input type="email" placeholder="E-mail" class="form-control" name="email" data-error="email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-phone-volume"></i></div>
                                        <input type="text" placeholder="Phone" class="form-control" name="phone" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="fas fa-question"></i></div>
                                        <input type="text" placeholder="Subject" class="form-control" name="phone" data-error="Phone field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <div class="form-icon"><i class="far fa-comments"></i></div>
                                        <textarea placeholder="Comments" class="textarea form-control" name="message" id="form-message" rows="4" cols="20" 
                                        data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-12 form-group">
                                        <button type="submit" class="item-btn">Submit Now<i class="fas fa-long-arrow-alt-right"></i></button>
                                    </div>
                                </div>
                                <div class="form-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area End Here -->
        <!-- Footer Area Start Here -->
        <?php include_once(APPPATH.'/Views/layout/footer.php ');  ?>