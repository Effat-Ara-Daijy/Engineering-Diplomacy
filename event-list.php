<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sSiteTitle; ?></title>

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
    echo $sCSSAnimate;
    echo $sCSSSlick;
    echo $sCSSSlickTheme;
    echo $sCSSGoogleFont;
    echo $sFancyBox;
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
                <div class="ed-inner-hero-content">
                    <h1>
                        Explore Our All
                        <em>Event</em>
                    </h1>
                    <p class="ed-inner-hero-description">
                        The Water, Energy and Cybersecurity workshops are
                        the first step in a longer institutional journey.
                    </p>
                </div>
                <!-- <div class="ed-breadcrumb">
                    <a href="<?php echo $sSiteURL; ?>">Home</a>
                    <span>/</span>
                    event
                </div> -->
            </div>
        </section>
        <section class="eventList-page">
            <div class="container">
                <div class="DiploCommon-event-items">
                    <a href="<?php echo $sSiteURL; ?>workshop">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="DiploCommon-event-img">
                                    <img class="img-fluid" src="media/imgAll/bg/44.jpg.jpeg" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="DiploCommon-event-content">
                                    <h3> Engineering Diplomacy Event in 2026</h3>
                                    <div class="DiploCommon-event-meta">
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <span>
                                                <p><strong>Date:</strong></p>
                                                <p>25 to 27 August, 2026</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                <p><strong>Time:</strong></p>
                                                <p>9:00 AM - 5:00 PM</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>
                                                <p><strong>Location:</strong></p>
                                                <p>ITN-BUET Seminar Room, Dhaka. |  RISE Seminar Room, BUET, Dhaka.</p>
                                            </span>
                                        </div>
                                    </div>
                                    <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Water Diplomacy Center at the Jordan University of Science and Technology.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- <div class="DiploCommon-event-items">
                    <a href="event-details.php">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="DiploCommon-event-img">
                                    <img class="img-fluid" src="media/imgAll/bg/task-cover-15YZUY02BC.png" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="DiploCommon-event-content">
                                    <h3>Remote Sensing for the Assessment of GroundCybersecurity Resources: Theory and Practical Applications</h3>
                                    <div class="DiploCommon-event-meta">
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <span>
                                                <p><strong>Date:</strong></p>
                                                <p>Octobor 24, 2026</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                <p><strong>Time:</strong></p>
                                                <p>10:00am to 5:00pm</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>
                                                <p><strong>Location:</strong></p>
                                                <p>ITN BUET Building</p>
                                            </span>
                                        </div>
                                    </div>
                                    <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Cybersecurity Diplomacy Center at the Jordan University of Science and Technology.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="DiploCommon-event-items">
                    <a href="event-details.php">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="DiploCommon-event-img">
                                    <img class="img-fluid" src="media/imgAll/bg/task-cover-XWCDY8M921.png" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="DiploCommon-event-content">
                                    <h3>Remote Sensing for the Assessment of GroundCybersecurity Resources: Theory and Practical Applications</h3>
                                    <div class="DiploCommon-event-meta">
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <span>
                                                <p><strong>Date:</strong></p>
                                                <p>Octobor 24, 2026</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                <p><strong>Time:</strong></p>
                                                <p>10:00am to 5:00pm</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>
                                                <p><strong>Location:</strong></p>
                                                <p>ITN BUET Building</p>
                                            </span>
                                        </div>
                                    </div>
                                    <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Cybersecurity Diplomacy Center at the Jordan University of Science and Technology.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                  <div class="DiploCommon-event-items">
                    <a href="event-details.php">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="DiploCommon-event-img">
                                    <img class="img-fluid" src="media/imgAll/bg/imagescfsdf.jpg" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="DiploCommon-event-content">
                                    <h3>Opening Ceremony of the Training Course on “Cybersecurity Governance in Uncertain Times”</h3>
                                    <div class="DiploCommon-event-meta">
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <span>
                                                <p><strong>Date:</strong></p>
                                                <p>Octobor 24, 2026</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                <p><strong>Time:</strong></p>
                                                <p>10:00am to 5:00pm</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>
                                                <p><strong>Location:</strong></p>
                                                <p>ITN BUET Building</p>
                                            </span>
                                        </div>
                                    </div>
                                    <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Cybersecurity Diplomacy Center at the Jordan University of Science and Technology.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="DiploCommon-event-items">
                    <a href="event-details.php">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="DiploCommon-event-img">
                                    <img class="img-fluid" src="media/imgAll/bg/task-cover-15YZUY02BC.png" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="DiploCommon-event-content">
                                    <h3>Remote Sensing for the Assessment of GroundCybersecurity Resources: Theory and Practical Applications</h3>
                                    <div class="DiploCommon-event-meta">
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <span>
                                                <p><strong>Date:</strong></p>
                                                <p>Octobor 24, 2026</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                <p><strong>Time:</strong></p>
                                                <p>10:00am to 5:00pm</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>
                                                <p><strong>Location:</strong></p>
                                                <p>ITN BUET Building</p>
                                            </span>
                                        </div>
                                    </div>
                                    <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Cybersecurity Diplomacy Center at the Jordan University of Science and Technology.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="DiploCommon-event-items">
                    <a href="event-details.php">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="DiploCommon-event-img">
                                    <img class="img-fluid" src="media/imgAll/bg/task-cover-XWCDY8M921.png" alt="" title="">
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="DiploCommon-event-content">
                                    <h3>Remote Sensing for the Assessment of GroundCybersecurity Resources: Theory and Practical Applications</h3>
                                    <div class="DiploCommon-event-meta">
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-calendar-days"></i>
                                            <span>
                                                <p><strong>Date:</strong></p>
                                                <p>Octobor 24, 2026</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-regular fa-clock"></i>
                                            <span>
                                                <p><strong>Time:</strong></p>
                                                <p>10:00am to 5:00pm</p>
                                            </span>
                                        </div>
                                        <div class="DiploCommon-event-meta-flx">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <span>
                                                <p><strong>Location:</strong></p>
                                                <p>ITN BUET Building</p>
                                            </span>
                                        </div>
                                    </div>
                                    <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Cybersecurity Diplomacy Center at the Jordan University of Science and Technology.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->
            </div>
        </section>



    </main>

    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>

    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSPopper; ?>
    <?php echo $sJSSlick; ?>
    <?php echo $sJSAnimate ?>
    <?php echo $sWowjs ?>
    <?php echo $sJSFancyBox; ?>
    <?php echo $sJSEMM; ?>

</body>

</html>