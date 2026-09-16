<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>contact Us</title>

    <?php echo $sGAnalytics;
    echo $sGTagManagerHead;
    echo $sAddSense;
    echo $sDomainVerification;
    echo $sMSClarity; ?>

    <meta name="description" content="<?php echo $sSiteTitle; ?>,">
    <meta name="keywords" content="<?php echo $sSiteTitle; ?>,">

    <meta name="author" content="<?php echo $sAuthor; ?>">
    <meta name="Developer" content="<?php echo $sDeveloper; ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo $sEmail; ?>">
    <meta name="copyright"
        content="Copyright (c) <?php echo gmdate("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">

    <meta property="fb:app_id" content="<?php echo $sFBAppId; ?>">
    <meta property="fb:pages" content="<?php echo $sFBPageId; ?>">

    <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="<?php echo $sSiteURL; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
    <meta property="og:locale" content="en_US">

    <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">

    <?php echo $sCSSBootStrap;
    echo $sCSSFontAwesome;
    echo $sCSSGoogleFont;
    echo $sCSSEMM; ?>

</head>

<body>
    <?php echo $sFbRoot;
    echo $sGTagManagerBody; ?>


    <?php include_once("common/header.php"); ?>

    <!-- Back to top button -->
    <a id="button"><i class="fa-solid fa-turn-up"></i></a>

    <main>
        <section class="ed-inner-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ed-inner-hero-content">
                            <div class="ed-page-label">
                                <span></span>
                                CONTACT US
                            </div>
                            <h1>
                                Let’s Start a
                                <em>conversation.</em>
                            </h1>
                            <p class="ed-inner-hero-description">
                                Have a question, idea or opportunity?
                                Get in touch with Engineering Diplomacy and let’s explore
                                how we can connect, collaborate and create meaningful impact.
                            </p>
                        </div>
                    </div>
                </div>
<!-- 
                <div class="ed-breadcrumb">
                    <a href="<?php echo $sSiteURL; ?>">Home</a>
                    <span>/</span>
                    Contact Us
                </div> -->
            </div>
        </section>
        <!-- ================= CONTACT PAGE ================= -->
        <section class="contact-page common-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="ed-form-heading">
                            <span>GET IN TOUCH</span>
                            <h3> How can we <em>help you?</em> </h3>
                            <p>
                                Fill out the form below and our team will get back
                                to you as soon as possible.
                            </p>
                        </div>
                        <div class="ed-contact-info">
                            <div class="ed-contact-item">
                                <div class="ed-contact-icon"><i class="fa-solid fa-location-dot"></i></div>
                                <div>
                                    <h5>OUR OFFICE</h5>
                                    <p>Controller of Exam Building (4th Floor)
                                        BUET-1000, Dhaka, Bangladesh</p>
                                </div>
                            </div>
                            <div class="ed-contact-item">
                                <div class="ed-contact-icon">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <div>
                                    <h5>EMAIL US</h5>
                                    <p><a href="mailto:cermoffice@cerm.buet.ac.bd">cermoffice@cerm.buet.ac.bd</a></p>
                                </div>
                            </div>
                            <div class="ed-contact-item">
                                <div class="ed-contact-icon">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <h5>CALL US</h5>
                                    <p><a href="tel:+8802556660002">+880-2-55666000-2 (extension: 7182, 7564, 5037) </a></p>
                                    <p>Monday – Friday, 9:00 AM – 5:00 PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="ed-contact-social">
                            <h5>FOLLOW US</h5>
                            <div class="ed-social-links">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Right Form -->
                    <div class="col-lg-7">
                        <div class="ed-contact-form-box">
                            <form>
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="ed-form-group">
                                            <label>Your Name <sup>*</sup></label>
                                            <input type="text" class="form-control" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ed-form-group">
                                            <label>Email Address <sup>*</sup></label>
                                            <input type="email" class="form-control" placeholder="Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ed-form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Enter your phone number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ed-form-group">
                                            <label>Subject <sup>*</sup></label>
                                            <select class="form-select">
                                                <option selected>Select a subject</option>
                                                <option>General Inquiry</option>
                                                <option>Partnership</option>
                                                <option>Media & Press</option>
                                                <option>Research</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ed-form-group">
                                            <label>Your Message <sup>*</sup></label>
                                            <textarea class="form-control"
                                                rows="6"
                                                placeholder="Write your message here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="ed-submit-btn">Send Message<span><i class="fa-solid fa-arrow-right"></i></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <div class="map-area pt-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.6156697606707!2d90.3908471744068!3d23.725414989736834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9ea86b0bcff%3A0x588a6092949ed84e!2sCERM!5e0!3m2!1sen!2sbd!4v1787241341129!5m2!1sen!2sbd" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
        </section>
    </main>

    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>



    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSEMM; ?>

</body>

</html>