<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Press Details</title>

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
                                PRESS & MEDIA
                            </div>
                            <h1>
                                Media Coverage of 
                                <em>Engineering Diplomacy.</em>
                            </h1>
                            <p class="ed-inner-hero-description">
                               25 & 27 August 2026
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= PRESS DETAILS ================= -->
        <section class="ed-press-details-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <video width="800" controls>
                            <source src="media/imgAll/videos/program.mp4" type="video/mp4">
                            Your browser does not support HTML video.
                        </video>

                    </div>
                </div>
                <!-- <div class="row g-4">
                    <div class="col-lg-8">
                        <article class="ed-press-details">
                            <h2> Study finds emergency room visits rise sharply with hotter days in California </h2>
                            <div class="ed-press-main-img">
                                <img src="media/imgAll/bg/Bangladesh-Biodiversity-and-the-Built-Environment.jpg" class="img-fluid" alt="Emergency room visits rise with hotter days">
                            </div>
                            <div class="ed-press-content">
                                <p class="lead"> While rising temperatures in California are causing fewer cold-related deaths, new research shows hotter temperatures significantly increase emergency department visits — a previously overlooked consequence of extreme heat. </p>
                                <p> The latest findings highlight the growing impact of climate-related challenges on communities and public infrastructure. As temperatures continue to rise, healthcare systems are increasingly required to respond to heat-related emergencies. </p>
                                <p> Researchers examined patterns in emergency department visits and found a strong relationship between periods of extreme heat and increased demand for urgent medical services. </p>
                                <blockquote> <i class="fa-solid fa-quote-left"></i> Understanding the wider impact of extreme temperatures is essential for building resilient communities and preparing infrastructure for a changing climate. </blockquote>
                                <p> These findings reinforce the importance of coordinated planning between engineers, policymakers, healthcare professionals and communities. Engineering Diplomacy works at the intersection of technical expertise and international cooperation to help address complex challenges such as climate resilience and sustainable development. </p>
                                <p> The research also points to the need for stronger preparedness strategies, improved infrastructure and greater public awareness as communities adapt to increasingly challenging environmental conditions. </p>
                            </div>
                            <div class="ed-blog-share">
                                <div class="product-details-sharelist">
                                    <div class="sharethis-inline-share-buttons st-center  st-inline-share-buttons st-animated" id="st-1">
                                        <div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
                                            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
                                        </div>
                                        <div class="st-btn" data-network="twitter" style="display: inline-block;">
                                            <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
                                        </div>
                                        <div class="st-btn" data-network="email" style="display: inline-block;">
                                            <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">
                                        </div>
                                        <div class="st-btn" data-network="whatsapp" style="display: inline-block;">
                                            <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">
                                        </div>
                                        <div class="st-btn st-last" data-network="sharethis" style="display: inline-block;">
                                            <img alt="sharethis sharing button" src="https://platform-cdn.sharethis.com/img/sharethis.svg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <aside class="ed-press-sidebar">
                             <div class="ed-sidebar-box">
                                <div class="ed-sidebar-title"> <span></span>Latest Press</div>
                                 <div class="featured-news-wrapper">
                                     <div class="row  g-4 justify-content-center">
                                         <div class="col-sm-6 col-lg-12">
                                             <div class="featured-news-items">
                                                 <a href="http://localhost/Engineering-Diplomacy/press-details.php">
                                                     <div class="featured-news-img">
                                                         <img class="img-fluid" src="media/imgAll/bg/post-11.jpg" alt="" title="">
                                                     </div>
                                                     <div class="featured-news-content">
                                                         <h3>Study finds emergency room visits rise sharply with hotter days in California</h3>
                                                         <p>While rising temperatures in California are causing fewer cold-related deaths, new research shows hotter temperatures significantly increase emergency department visits – a previously overlooked consequence of climate </p>
                                                     </div>
                                                 </a>
                                                 <div class="lMore">
                                                     <a href="http://localhost/Engineering-Diplomacy/press-details.php">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-sm-6 col-lg-12">
                                             <div class="featured-news-items">
                                                 <a href="http://localhost/Engineering-Diplomacy/press-details.php">
                                                     <div class="featured-news-img">
                                                         <img class="img-fluid" src="media/imgAll/bg/windmill.jpg" alt="" title="">
                                                     </div>
                                                     <div class="featured-news-content">
                                                         <h3>For city dwellers, even 15 minutes in nature can improve mental health</h3>
                                                         <p>A new study clarifies the importance of nature for mental health in urban settings and provides low-cost recommendations for improving public health in cities. </p>
                                                     </div>
                                                 </a>
                                                 <div class="lMore">
                                                     <a href="http://localhost/Engineering-Diplomacy/press-details.php">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                        </aside>
                    </div>
                </div> -->
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