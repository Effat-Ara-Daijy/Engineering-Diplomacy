<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Blogs</title>

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
                                BLOGS
                            </div>
                            <h1>
                                Engineering Diplomacy
                                <em>insights and perspectives.</em>
                            </h1>
                            <p class="ed-inner-hero-description">
                                Explore insights, ideas, perspectives and stories
                                on engineering, diplomacy and complex global challenges.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-page-area common-padding">
            <div class="container">
                <div class="ed-blog-grid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/blog/blog-1.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span><i class="fa-regular fa-calendar"></i> Dec 25, 2025</span>
                                                    <span class="separator">•</span>
                                                    <span><i class="fa-regular fa-user"></i> Shafiqul Islam</span>
                                                </div>
                                                <h3>How Superforecasters Think and What the Engineer-Diplomat Can Learn</h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/blog/blog-2.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span><i class="fa-regular fa-calendar"></i>Nov 19, 2025</span>
                                                    <span class="separator">•</span>
                                                    <span><i class="fa-regular fa-user"></i>Shafiqul Islam</span>
                                                </div>
                                                <h3>The Road Not Built: Inside an Engineer’s Mindset</h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/blog/blog-3.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span><i class="fa-regular fa-calendar"></i>Oct 8, 2025</span>
                                                    <span class="separator">•</span>
                                                    <span><i class="fa-regular fa-user"></i> Shafiqul Islam</span>
                                                </div>
                                                <h3>Is There a Difference Between Science and Scientific Method</h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/blog/blog-4.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span><i class="fa-regular fa-calendar"></i>Sep 24, 2025</span>
                                                    <span class="separator">•</span>
                                                    <span><i class="fa-regular fa-user"></i> Shafiqul Islam</span>
                                                </div>
                                                <h3>From Possible to Actionable in Engineering Diplomacy</h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/blog/blog-5.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span><i class="fa-regular fa-calendar"></i>Sep 17, 2025</span>
                                                    <span class="separator">•</span>
                                                    <span><i class="fa-regular fa-user"></i>Shafiqul Islam</span>
                                                </div>
                                                <h3>Engineering Diplomacy Playbook</h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/blog/blog-6.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span><i class="fa-regular fa-calendar"></i>Jul 23, 2025</span>
                                                    <span class="separator">•</span>
                                                    <span><i class="fa-regular fa-user"></i> Shafiqul Islam</span>
                                                </div>
                                                <h3>Engineering Diplomacy in Action</h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
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
    <?php echo $sJSEMM; ?>

</body>

</html>