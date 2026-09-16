<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>The Idea</title>

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
           <section class="ed-inner-hero about-us-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ed-inner-hero-content">
                            <!-- <div class="ed-page-label">
                                <span></span>
                                ABOUT Us
                            </div>
                            <h1>
                                Please read, watch, and review to get an overview of
                                <em> Engineering Diplomacy.</em>
                            </h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="ed-section about-page the-idea-page">
        <div class="container">
            <div class="ed-intro">
                <div class="ed-intro-text">
                      <p>Hard problems are rarely solved by more theory, methods, or tools alone. They are solved when <strong>rigorous analysis meets shared understanding</strong> —and when evidence is translated into pathways that are <strong>credible, acceptable, and feasible.</strong></p>
                      <p><strong>Engineering Diplomacy is a problem-focused, action-oriented approach to solving complex problems.</strong> It brings the precision of engineering and scientific reasoning together with the realities of people, institutions, politics, incentives, and context.
                        It connects numbers and narratives. It treats truth not simply as something to establish, but as something to make useful, actionable, and implementable across multiple perspectives.</p>
                        <p>It connects <strong>numbers and narratives.</strong>  It treats truth not simply as something to establish, but as something to make <strong> useful, actionable, and implementable</strong> across multiple perspectives.</p>
                        <p>The goal is not the perfect answer in theory. It is the <strong>best defensible pathway that can work in practice</strong> —with rigor without rigidity.</p>
                         <h2 class="ed-section-title">
                             The Engineering Diplomacy <em>Logic </em>
                        </h2>
                        <h5 class="mb-3">Diagnose → Understand → Decide → Design → Measure → Act</h5>
                        <ul>
                            <li>1. <strong>Diagnose</strong> — Define the problem, evidence, uncertainties, and root causes.</li>
                            <li>2. <strong>Understand</strong> — Identify conditions, capacity, constraints, interests, incentives, and perspectives.</li>
                            <li>3. <strong>Decide</strong> — Explore and evaluate credible pathways and trade-offs.</li>
                            <li>4. <strong>Design</strong> — Build the tools, processes, agreements, and institutional arrangements needed to move forward.</li>
                            <li>5. <strong>Measure</strong> — Establish meaningful metrics for progress, performance, and adaptation.</li>
                            <li>6. <strong>Act</strong> — Convert analysis into decisions and decisions into implementation.</li>
                        </ul>
                        <p><strong>A defensible pathway must pass three tests:</strong></p>
                        <p><strong>Credible.</strong>  Is it supported by defensible evidence, analysis, and reasoning?</p>
                        <p><strong>Acceptable.</strong>  Does it recognize relevant interests and perspectives well enough to build understanding, legitimacy, and agreement?</p>
                        <p><strong>Feasible.</strong> Can it actually work within political, institutional, technical, financial, and practical constraints?</p>
                        <h5>Engineering Diplomacy is where evidence meets interests, rigor meets reality, and analysis becomes action.</h5>
                </div>
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