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
                        <em>Workshop</em>
                    </h1>
                    <p class="ed-inner-hero-description">
                        The Water, Energy and Cybersecurity workshops are
                        the first step in a longer institutional journey.
                    </p>
                </div>
            </div>
        </section>
        <section class="workshopList-page">
            <div class="container">
                 <div class="row justify-content-center">
                    <div class="col-lg-6">
                       <a href="<?php echo $sSiteURL; ?>water-diplomacy-details">
                            <div class="DiploCommon-workshop-Content">
                                <img class="img-fluid" src="media/imgAll/bg/WCTWBN-scaled.jpg" alt="" title="">
                                <div class="DiploCommon-workshop-ContentBox">
                                    <h3> Renewal of the Ganges Water Treaty What Can Bangladesh Do Now?</h3>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p><strong>Loction:</strong> ITN-BUET Seminar Room, Dhaka.</p>
                                            <p><strong>Date:</strong> 25 August, 2026</p>
                                        </div>
                                        <span class="ed-arrow-link">
                                            Explore workshop
                                            <span>↗</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?php echo $sSiteURL; ?>energy-diplomacy-details">
                            <div class="DiploCommon-workshop-Content">
                                <img class="img-fluid" src="media/imgAll/bg/46079617-cms.jpg" alt="" title="">
                                <div class="DiploCommon-workshop-ContentBox">
                                    <h3> Shaping Bangladesh's Energy Diplomacy for a Sustainable Future</h3>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p><strong>Loction:</strong> ITN-BUET Seminar Room, Dhaka.</p>
                                            <p><strong>Date:</strong> 27 August, 2026</p>
                                        </div>
                                        <span class="ed-arrow-link">
                                            Explore workshop
                                            <span>↗</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6">
                         <a href="<?php echo $sSiteURL; ?>cybersecurity-diplomacy-details">
                            <div class="DiploCommon-workshop-Content">
                                <img class="img-fluid" src="media/imgAll/bg/cybesec.png" alt="" title="">
                                <div class="DiploCommon-workshop-ContentBox">
                                    <h3>Cyber Security Startups: Challenges and Opportunities in Bangladesh</h3>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <p><strong>Loction:</strong> RISE Seminar Room, BUET, Dhaka.</p>
                                            <p><strong>Date:</strong> 27 August, 2026</p>
                                        </div>
                                        <span class="ed-arrow-link">
                                            Explore workshop
                                            <span>↗</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
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