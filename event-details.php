<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Event Details</title>

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
                                EVENT DETAILS
                            </div>
                            <h1>
                                Engineering Diplomacy
                                <em>events and engagements.</em>
                            </h1>
                            <p class="ed-inner-hero-description">
                                Explore events, conferences, seminars and engagements
                                that bring together engineering, diplomacy, innovation
                                and global collaboration.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="ed-breadcrumb">
                    <a href="<?php echo $sSiteURL; ?>">Home</a>
                    <span>/</span>
                    Event Details
                </div> -->
            </div>
        </section>
        <!-- Event Details Content -->
        <section class="event-details-page common-padding">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-8">
                        <div class="ed-event-main-card">
                            <div class="ed-event-image">
                                <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/Farraka bridge.jpg" alt="Engineering Diplomacy Event">
                                <div class="ed-event-badge">
                                    <span>UPCOMING EVENT</span>
                                </div>
                            </div>
                            <div class="ed-event-content">
                                <div class="ed-event-meta">
                                    <span>
                                        <i class="fa-regular fa-calendar"></i>
                                        August 25, 2026
                                    </span>
                                    <span>
                                        <i class="fa-regular fa-clock"></i>
                                        10:00 AM – 4:00 PM
                                    </span>
                                </div>
                                <h2>
                                    Engineering Diplomacy:
                                    <span>Building Global Connections</span>
                                </h2>
                                <p>
                                    Join us for an engaging event bringing together
                                    engineers, professionals, policymakers and industry
                                    leaders to explore the role of engineering in
                                    strengthening international cooperation and
                                    sustainable development.
                                </p>
                                <p>
                                    The event will feature insightful discussions,
                                    expert presentations and meaningful networking
                                    opportunities focused on innovation, technology
                                    and global collaboration.
                                </p>
                                <p>
                                    Join us for an engaging event bringing together
                                    engineers, professionals, policymakers and industry
                                    leaders to explore the role of engineering in
                                    strengthening international cooperation and
                                    sustainable development.
                                </p>
                                <p>
                                    The event will feature insightful discussions,
                                    expert presentations and meaningful networking
                                    opportunities focused on innovation, technology
                                    and global collaboration.
                                </p>
                                <p>
                                    Join us for an engaging event bringing together
                                    engineers, professionals, policymakers and industry
                                    leaders to explore the role of engineering in
                                    strengthening international cooperation and
                                    sustainable development.
                                </p>
                                <p>
                                    The event will feature insightful discussions,
                                    expert presentations and meaningful networking
                                    opportunities focused on innovation, technology
                                    and global collaboration.
                                </p>
                                <p>
                                    Join us for an engaging event bringing together
                                    engineers, professionals, policymakers and industry
                                    leaders to explore the role of engineering in
                                    strengthening international cooperation and
                                    sustainable development.
                                </p>
                                <p>
                                    The event will feature insightful discussions,
                                    expert presentations and meaningful networking
                                    opportunities focused on innovation, technology
                                    and global collaboration.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Sidebar -->
                    <div class="col-lg-4">
                        <div class="ed-event-info-card">
                            <div class="ed-event-info-title">
                                <span></span>
                                EVENT INFORMATION
                            </div>
                            <div class="ed-info-item">
                                <div class="ed-info-icon">
                                    <i class="fa-regular fa-calendar"></i>
                                </div>
                                <div>
                                    <small>Date</small>
                                    <strong>August 25, 2026</strong>
                                </div>
                            </div>
                            <div class="ed-info-item">
                                <div class="ed-info-icon">
                                    <i class="fa-regular fa-clock"></i>
                                </div>
                                <div>
                                    <small>Time</small>
                                    <strong>10:00 AM – 4:00 PM</strong>
                                </div>
                            </div>
                            <div class="ed-info-item">
                                <div class="ed-info-icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                </div>
                                <div>
                                    <small>Location</small>
                                    <strong>Dhaka, Bangladesh</strong>
                                </div>
                            </div>
                            <div class="ed-info-item">
                                <div class="ed-info-icon">
                                    <i class="fa-solid fa-user-group"></i>
                                </div>
                                <div>
                                    <small>Participants</small>
                                    <strong>Engineers & Professionals</strong>
                                </div>
                            </div>
                            <a href="#" class="ed-register-btn">
                                Register for Event
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related Events -->
        <section class="ed-related-events common-padding">
            <div class="container">
                <div class="ed-section-heading text-center">
                    <div class="ed-page-label justify-content-center">
                        <span></span>
                        RELATED EVENTS
                    </div>
                    <h2>Explore more <em>events.</em> </h2>
                </div>
                <div class="row g-3">
                    <div class="col-lg-3 col-md-6">
                        <div class="ed-related-event-card">
                            <a href="#">
                                <div class="ed-related-event-img">
                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/1700453520053.jpg" alt="Event">
                                </div>
                                <div class="ed-related-event-content">
                                    <span class="ed-related-event-date"> August 12, 2026 </span>
                                    <h3> Engineering Innovation & Global Cooperation </h3>
                                    <p>A new study clarifies the importance of nature for mental health in urban settings and provides low-cost recommendations.</p>
                                    <button href="#">
                                        View Event
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ed-related-event-card">
                            <a href="#">
                                <div class="ed-related-event-img">
                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/52828296024_0c2d3ddd9a_c_0.jpg.webp" alt="Event">
                                </div>
                                <div class="ed-related-event-content">
                                    <span class="ed-related-event-date"> August 12, 2026 </span>
                                    <h3> Engineering Innovation & Global Cooperation </h3>
                                    <p>A new study clarifies the importance of nature for mental health in urban settings and provides low-cost recommendations.</p>
                                    <button href="#">
                                        View Event
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ed-related-event-card">
                            <a href="#">
                                <div class="ed-related-event-img">
                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/hero_banner6.JPG" alt="Event">
                                </div>
                                <div class="ed-related-event-content">
                                    <span class="ed-related-event-date"> August 12, 2026 </span>
                                    <h3> Engineering Innovation & Global Cooperation </h3>
                                    <p>A new study clarifies the importance of nature for mental health in urban settings and provides low-cost recommendations.</p>
                                    <button href="#">
                                        View Event
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="ed-related-event-card">
                            <a href="#">
                                <div class="ed-related-event-img">
                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/windmill.jpg" alt="Event">
                                </div>
                                <div class="ed-related-event-content">
                                    <span class="ed-related-event-date"> August 12, 2026 </span>
                                    <h3> Engineering Innovation & Global Cooperation </h3>
                                    <p>A new study clarifies the importance of nature for mental health in urban settings and provides low-cost recommendations.</p>
                                    <button href="#">
                                        View Event
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>



    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=67ad9e6e67f47b001298d58b&product=inline-share-buttons&source=platform"
        async="async"></script>
    <?php echo $sJSEMM; ?>

</body>

</html>