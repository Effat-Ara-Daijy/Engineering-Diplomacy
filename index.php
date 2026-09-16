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

        <!-- hero-area-start -->
         <section class="hero-banner">
            <img class="img-fluid" src="media/imgAll/bg/hero.jpg" alt="" title="">
         </section>
        <!-- <section class="ed-hero">
            <div class="ed-hero-bg"></div>
            <div class="ed-hero-overlay"></div>
            <div class="ed-orbit ed-orbit-1"></div>
            <div class="ed-orbit ed-orbit-2"></div>
            <div class="container">
                <div class="ed-hero-container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="ed-hero-content">
                                <div class="ed-hero-content-top">
                                    ENGINEERING DIPLOMACY
                                    <span class="ed-eyebrow-location">BANGLADESH</span>
                                </div>
                                <h1>
                                    Engineering Diplomacy
                                    <span>for Bangladesh</span>
                                </h1>
                                <p class="ed-hero-description">
                                    Where Rigor Meets Reality for Desirable Outcomes
                                </p>
                                <div class="ed-hero-actions">
                                    <a href="about-us.php" class="ed-btn ed-btn-primary">
                                        Explore the Initiative
                                        <span>↗</span>
                                    </a>
                                    <a href="workshop-list.php" class="ed-btn ed-btn-secondary">
                                        August 2026 Workshops
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="ed-hero-panel">
                                <div class="ed-panel-label">
                                    HOW IT WORKS
                                </div>
                                <div class="ed-step">

                                    <div class="ed-step-number">01</div>

                                    <div>
                                        <h3>Understand</h3>
                                        <p>
                                            Evidence, systems, competing interests
                                            and uncertainty.
                                        </p>
                                    </div>

                                </div>
                                <div class="ed-step">

                                    <div class="ed-step-number">02</div>

                                    <div>
                                        <h3>Connect</h3>
                                        <p>
                                            Government, academia, industry,
                                            civil society and practitioners.
                                        </p>
                                    </div>

                                </div>
                                <div class="ed-step">

                                    <div class="ed-step-number">03</div>

                                    <div>
                                        <h3>Act</h3>
                                        <p>
                                            Move from diagnosis to decision
                                            and implementation.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="ed-hero-bottom">
            <div class="container">
                    <ul class="ed-topics">
                        <li>
                            <a href="<?php echo $sSiteURL; ?>water-diplomacy">WATER <span>↗</span></a>
                        </li>
                        <li>
                            <a href="<?php echo $sSiteURL; ?>energy-diplomacy">ENERGY <span>↗</span></a>
                        </li>
                        <li>
                            <a href="<?php echo $sSiteURL; ?>cybersecurity-diplomacy">CYBERSECURITY <span>↗</span></a>
                        </li>
                    </ul>
                </div>
        </section>

<section class="single-workshop-sec">
    <div class="container">
         <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="section-titleAll">
                        <div class="section-title-tag">
                            <span></span>
                            Workshop
                        </div>
                        <h2>
                            Explore Our All 
                            <span>Workshop</span>
                        </h2>
                    </div>
                </div>
            </div>
        <div class="single-workshop-wrapper">
            <a href="<?php echo $sSiteURL; ?>water-diplomacy-details">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="single-workshop-img">
                            <img class="img-fluid" src="media/imgAll/bg/WCTWBN-scaled.jpg" alt="" title="">
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-first">
                        <div class="single-workshop-content">
                            <span>Upcomming workshop</span>
                            <h3>
                                Renewal of the Ganges Water Treaty What Can Bangladesh Do Now?
                            </h3>
                            <p>Exploring the engineering, diplomatic and institutional
                                dimensions of Bangladesh's transboundary water challenge
                                and identifying practical pathways for action.
                            </p>
                            <p><strong>Date: </strong> 25 August, 2026 | 9:00 AM - 5:00 PM </p>
                            <p><strong>Location:</strong> ITN-BUET Seminar Room, Dhaka</p>
                            <div class="ed-hero-actions mt-4">
                                <div class="ed-btn ed-btn-primary">
                                    Explore the Workshop
                                    <span>↗</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="upcoming-event-wrapper">
            <div class="row gx-5">
                <div class="col-lg-4">
                    <div class="upcoming-event-big">
                        <a href="<?php echo $sSiteURL; ?>cybersecurity-diplomacy-details">
                            <div class="research-section-img">
                                <img class="img-fluid" src="media/imgAll/bg/1686737482762.jpg" alt="" title="">
                            </div>
                            <div class="event-title-content">
                                <p>27 August, 2026 | 9:00 AM - 5:00 PM </p>
                                <h3>Cyber Security Startups: Challenges and Opportunities in Bangladesh</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="upcoming-event-big">
                        <a href="<?php echo $sSiteURL; ?>energy-diplomacy-details">
                            <div class="research-section-img">
                                <img class="img-fluid" src="media/imgAll/bg/46079617-cms.jpg" alt="" title="">
                            </div>
                            <div class="event-title-content">
                                <p>27 August, 2026 | 9:00 AM - 5:00 PM </p>
                                <h3>Shaping Bangladesh's Energy Diplomacy for a Sustainable Future </h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="upcoming-event-big">
                        <a href="<?php echo $sSiteURL; ?>water-diplomacy-details">
                            <div class="research-section-img">
                                <img class="img-fluid" src="media/imgAll/bg/farakka-unb.jpg" alt="" title="">
                            </div>
                            <div class="event-title-content">
                                <p>25 August, 2026 | 9:00 AM - 5:00 PM </p>
                                <h3>Renewal of the Ganges Water Treaty What Can Bangladesh Do Now?</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ed-hero-actions mt-5 text-center">
                <a href="<?php echo $sSiteURL; ?>workshop" class="ed-btn ed-btn-primary">
                    Explore All Workshop
                    <span>↗</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Long Vision section -->
<section class="ed-long-vision" id="vision">
    <div class="ed-vision-bg"></div>
    <div class="container">
        <div class="ed-vision-heading">
            <div class="ed-vision-heading-grid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ed-eyebrow">
                            <span></span>
                            LONG-TERM VISION · 3–5 YEARS
                        </div>
                        <h2>
                            From demonstration
                            <span>to lasting capability.</span>
                        </h2>
                    </div>
                    <div class="col-lg-6">
                        <p>
                            The shared goal is to build a sustainable BUET-led
                            Engineering Diplomacy program serving Bangladesh and
                            South Asia. It will develop a new generation of problem
                            solvers, supporting government and industry, advancing
                            actionable research, and becoming a trusted partner for
                            national and international institutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Three Strategic Phases -->
        <div class="ed-vision-phases-wrapper">
            <div class="row">
                <div class="col-lg-4 d-flex">
                    <div class="ed-vision-phase">
                        <div class="ed-phase-top">
                            <span class="ed-phase-number">01</span>
                            <span class="ed-phase-year">
                                2026
                            </span>
                        </div>
                        <div class="ed-phase-line"></div>
                        <span class="ed-phase-label">
                            DEMONSTRATION
                        </span>
                        <h3>
                            Demonstrate
                            <br>
                            the model.
                        </h3>
                        <p>
                            Prove the Engineering Diplomacy approach through
                            real Bangladesh challenges and create a foundation
                            for future growth.
                        </p>
                        <ul>
                            <li>
                                Demonstrate the workshop model
                            </li>
                            <li>
                                Build a national network
                            </li>
                            <li>
                                Create reusable materials
                            </li>
                            <li>
                                Identify future partners
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="ed-vision-phase">
                        <div class="ed-phase-top">
                            <span class="ed-phase-number">02</span>
                            <span class="ed-phase-year">
                                2027
                            </span>
                        </div>
                        <div class="ed-phase-line"></div>
                        <span class="ed-phase-label">
                            PARTNERSHIP
                        </span>
                        <h3>
                            Build
                            <br>
                            partnerships.
                        </h3>
                        <p>
                            Move toward institutional ownership and establish
                            a strong network of organizations working together
                            on complex national challenges.
                        </p>
                        <ul>
                            <li>
                                Shift to a BUET-led initiative
                            </li>
                            <li>
                                Secure institutional commitments
                            </li>
                            <li>
                                Build multi-partner collaborations
                            </li>
                            <li>
                                Develop diversified funding
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="ed-vision-phase">
                        <div class="ed-phase-top">
                            <span class="ed-phase-number">03</span>
                            <span class="ed-phase-year">
                                2028+
                            </span>
                        </div>
                        <div class="ed-phase-line"></div>
                        <span class="ed-phase-label">
                            SUSTAINABILITY
                        </span>
                        <h3>
                            Build a
                            <br>
                            lasting institution.
                        </h3>
                        <p>
                            Establish Engineering Diplomacy as a sustainable
                            capability for Bangladesh and South Asia through
                            education, research and international collaboration.
                        </p>
                        <ul>
                            <li>
                                Engineering Diplomacy Center
                            </li>
                            <li>
                                Certificate & executive education
                            </li>
                            <li>
                                Annual workshops & applied research
                            </li>
                            <li>
                                International partnerships & multi-source funding
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="ed-blog">
    <div class="container">
        <div class="ed-blog-container">
            <div class="row">
                <div class="col-lg-12 m-auto text-start">
                    <div class="ed-blog-header">
                        <div class="section-titleAll">
                            <div class="section-title-tag">
                                <span></span>
                                Blogs
                            </div>
                            <h2>
                            Thinking across
                                <span>boundaries.</span>
                            </h2>
                        </div>
                       <a href="<?php echo $sSiteURL; ?>blogs-and-resources" class="ed-blog-view">
                            Explore all Blogs
                            <span>↗</span>
                        </a>

                    </div>
                </div>
            </div>
            <div class="ed-blog-grid">
                <div class="row">
                    <div class="col-lg-7">
                        <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details" class="ed-blog-image">
                            <div class="ed-blog-featured">
                                    <img class="img-fluid" src="media/imgAll/blog/blog-2.webp" alt="" title="">
                                    <div class="ed-blog-image-arrow">
                                        ↗
                                    </div>
                                <div class="ed-blog-featured-content">
                                    <div class="ed-blog-meta">
                                        <span>
                                            ENGINEERING DIPLOMACY
                                        </span>
                                    </div>
                                    <h3>
                                       The Road Not Built: Inside an Engineer’s Mindset
                                    </h3>
                                </div>
                            </div>
                         </a>
                    </div>
                    <div class="col-lg-5">
                        <div class="ed-blog-list">
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="media/imgAll/blog/blog-8.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span>
                                                        WATER
                                                    </span>
                                                </div>
                                                <h3>
                                                    Prevent Day Zero Before It Happens
                                                </h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="media/imgAll/blog/blog-7.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span>
                                                        ENERGY
                                                    </span>
                                                </div>
                                                <h3>
                                                    Prevent Day Zero Block by Block
                                                </h3>
                                                <div class="blog-link">
                                                    Read insight
                                                    <span>↗</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="ed-blog-item">
                                <a href="<?php echo $sSiteURL; ?>blogs-and-resources-details">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ed-blog-small-image">
                                                <img class="img-fluid" src="media/imgAll/blog/blog-9.webp" alt="" title="">
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ed-blog-item-content">
                                                <div class="ed-blog-item-top">
                                                    <span>
                                                        CYBERSECURITY
                                                    </span>
                                                </div>
                                                <h3>
                                                    My Life on the Bridge Between East and West
                                                </h3>
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

        </div>
    </div>
</section>

<section class="ed-partnership">
    <div class="container">
        <div class="ed-partnership-container">
            <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="section-titleAll">
                        <div class="section-title-tag">
                            <span></span>
                            PARTNERSHIP FRAMEWORK
                        </div>
                        <h2>
                            What We Need From
                            <span>Leaders & Partners Now</span>
                        </h2>
                        <!-- <p>
                            Building a sustainable Engineering Diplomacy program
                            requires commitment, collaboration, resources and
                            measurable progress.
                        </p> -->
                    </div>
                </div>
            </div>

            <div class="ed-partnership-map">
                <div class="row">
                    <div class="col-lg-9 m-auto">
                        <!-- Center -->

                <div class="ed-center-node">

                    <div class="ed-center-inner">

                        <small>SHARED GOAL</small>

                        <h3>
                            BUET-led
                            Engineering
                            Diplomacy
                            Program
                        </h3>

                    </div>

                </div>


                <!-- 01 -->

                <div class="ed-node node-top">

                    <span>01</span>

                    <h4>
                        Institutional
                        Commitment
                    </h4>

                    <p>
                        Identify people, expertise, facilities,
                        coordination capacity and institutional
                        resources to support the initiative.
                    </p>

                </div>


                <!-- 02 -->

                <div class="ed-node node-left">

                    <span>02</span>

                    <h4>
                        Strategic
                        Partnerships
                    </h4>

                    <p>
                        Engage government ministries,
                        universities, development partners,
                        industry and international organizations.
                    </p>

                </div>


                <!-- 03 -->

                <div class="ed-node node-right">

                    <span>03</span>

                    <h4>
                        Sustainable
                        Funding
                    </h4>

                    <p>
                        Transition from Tufts/NSF seed support
                        toward a Bangladesh-led funding model.
                    </p>

                </div>


                <!-- 04 -->

                <div class="ed-node node-bottom">

                    <span>04</span>

                    <h4>
                        Accountability
                    </h4>

                    <p>
                        Establish clear 12-month milestones
                        with measurable outcomes and progress.
                    </p>

                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

        <!-- Featured News area start -->
         <section class="featured-news-area">
            <div class="container">
                 <div class="row">
                <div class="col-lg-11 m-auto">
                    <div class="section-titleAll">
                        <div class="section-title-tag">
                            <span></span>
                            press
                        </div>
                        <h2>
                            All Our
                            <span>Press Release</span>
                        </h2>
                    </div>
                </div>
            </div>
                <div class="featured-news-wrapper">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="featured-news-items">
                                <a href="<?php echo $sSiteURL; ?>press-details2">
                                <div class="featured-news-img">
                                    <img class="img-fluid" src="media/imgAll/bg/sfs11.18.47 AM.jpeg" alt="" title="">
                                </div>
                                <div class="featured-news-content">
                                    <span>28 August 2026 | BUET-Tufts University (USA)</span>
                                    <h3>BUET Advances a First-of-Its-Kind Engineering Diplomacy Initiative from Dialogue to Action</h3>
                                </div>
                                </a>
                                <div class="lMore">
                                    <a href="<?php echo $sSiteURL; ?>press-details">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="featured-news-items">
                                <a href="https://thedailycampus.com/engineering-university/271092" target="_blank">
                                <div class="featured-news-img">
                                    <img class="img-fluid" src="media/imgAll/bg/1787991948_6af9879417c97a8be84f.jpg" alt="" title="">
                                </div>
                                <div class="featured-news-content bn">
                                    <span>২৯ আগস্ট ২০২৬, ০২:২৫ PM | টিডিসি রিপোর্ট </span>
                                    <h3>বুয়েটে ঢাকা ইঞ্জিনিয়ারিং ডিপ্লোমেসি ওয়ার্কশপ অনুষ্ঠিত </h3>
                                </div>
                                </a>
                                <div class="lMore">
                                    <a href="https://thedailycampus.com/engineering-university/271092" target="_blank">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="featured-news-items">
                                <a href="<?php echo $sSiteURL; ?>press-details">
                                <div class="featured-news-img">
                                    <img class="img-fluid" src="media/imgAll/bg/DSC_0943.JPG" alt="" title="">
                                </div>
                                <div class="featured-news-content">
                                    <span>27 August 2026, 10:30 PM | BVNEWS24 </span>
                                    <h3>Media Coverage of Engineering Diplomacy</h3>
                                </div>
                                </a>
                                <div class="lMore">
                                    <a href="<?php echo $sSiteURL; ?>press-details">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="featured-news-items">
                                <a href="https://www.alokitobangladesh.com/press-release/347209/" target="_blank">
                                <div class="featured-news-img">
                                    <img class="img-fluid" src="media/imgAll/bg/DSC_1045.JPG" alt="" title="">
                                </div>
                                <div class="featured-news-content bn">
                                    <span>১৪:৩৫, ২৯ আগস্ট, ২০২৬ | আলোকিত বাংলাদেশ </span>
                                    <h3>বুয়েটে ঢাকা ইঞ্জিনিয়ারিং ডিপ্লোম্যাসি ওয়ার্কশপ-২০২৬ সম্পন্ন </h3>
                                </div>
                                </a>
                                <div class="lMore">
                                    <a href="https://www.alokitobangladesh.com/press-release/347209/" target="_blank">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="featured-news-items">
                                <a href="https://mohona.tv/bangladesh/dhaka-news/2026/08/53531/" target="_blank">
                                <div class="featured-news-img">
                                    <img class="img-fluid" src="media/imgAll/bg/IMG-20260828-WA0000.jpg" alt="" title="">
                                </div>
                                <div class="featured-news-content bn">
                                    <span>১৪:৩৫, ২৮ আগস্ট, ২০২৬ | মোহনা টিভি </span>
                                    <h3>সংলাপ থেকে বাস্তব কর্মপরিকল্পনায় ‘ইঞ্জিনিয়ারিং ডিপ্লোম্যাসি’, নেতৃত্বে বুয়েট</h3>
                                </div>
                                </a>
                                <div class="lMore">
                                    <a href="https://mohona.tv/bangladesh/dhaka-news/2026/08/53531/" target="_blank">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="featured-news-items">
                                <a href="https://jaijaidin.news/news/354442" target="_blank">
                                <div class="featured-news-img">
                                    <img class="img-fluid" src="media/imgAll/bg/DSC_1067.JPG" alt="" title="">
                                </div>
                                <div class="featured-news-content bn">
                                    <span>১২:০০ এএম, ৩০ আগস্ট, ২০২৬ | যায়যায়দিন </span>
                                    <h3>ঢাকা ইঞ্জিনিয়ারিং ডিপ্লোম্যাসি ওয়ার্কশপ </h3>
                                </div>
                                </a>
                                <div class="lMore">
                                    <a href="https://jaijaidin.news/news/354442" target="_blank">learn more <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ed-hero-actions text-center">
                    <a href="<?php echo $sSiteURL; ?>press" class="ed-btn ed-btn-primary">
                        Explore All Press
                        <span>↗</span>
                    </a>
                </div>
            </div>
         </section>
        <!-- Featured News area end -->

         <!-- Common BG2 Area Start  -->
          <!-- <section class="commonBG2-home">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-lg-7 m-auto">
                        <div class="commonBG2-title">
                            <h3>The Way You Help Us</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam a quasi laboriosam hic dolor? Inventore doloribus accusamus totam illum vero velit dolore</p>
                        </div>
                        <div class="commonBG-video-item">
                                <img class="img-fluid" src="media/imgAll/bg/post-12.jpg" alt="" title="">
                                <div class="video-btn">
                                    <div class="icon-wrap">
                                        <i class="fa-solid fa-play"></i>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

            </div>
          </section> -->
         <!-- Common BG2 Area end -->

         <section class="gallery-area">
            <div class="container">
               <div class="row">
                    <div class="col-lg-12 m-auto text-start">
                            <div class="section-titleAll">
                                <div class="section-title-tag">
                                    <span></span>
                                    Photos
                                </div>
                                <h2>
                                Our
                                    <span>Photo gallery</span>
                                </h2>
                            </div>
                    </div>
                </div>
                <div class="gallary-wrapper">
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Water Diplomacy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Energy Diplomacy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cybersecurity Diplomacy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ClosingCeremony-tab" data-bs-toggle="pill" data-bs-target="#pills-ClosingCeremony" type="button" role="tab" aria-controls="pills-ClosingCeremony" aria-selected="false">Closing Ceremony</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                             <div class="row gx-2">
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0686.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0686.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0690.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0690.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0703.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0703.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0712.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0712.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/bg/DSC_0730.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0730.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/bg/DSC_0735.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0735.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                             <div class="row gx-2">
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_0955.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_0955.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_0962.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_0962.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_0965.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_0965.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_0972.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_0972.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_0975.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_0975.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_0980.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_0980.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                             <div class="row gx-2">
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_0997.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_0997.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1657.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1657.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1661.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1661.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1663.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1663.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1674.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1674.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1676.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1676.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-ClosingCeremony" role="tabpanel" aria-labelledby="pills-ClosingCeremony-tab">
                             <div class="row gx-2">
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1006.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1006.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1007.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1007.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1010.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1010.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1012.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1012.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1013.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1013.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1015.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1015.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row gx-2">
                        <div class="col-sm-6 col-md-4 d-flex grid-item">
                            <div class="gallary-wrapper-info">
                                <a data-fancybox="gallery" data-caption="Water Diplomacy Workshop 2026" href="media/imgAll/bg/DSC_0686.JPG">
                                    <div class="gallary-img-box">
                                         <img class="img-fluid" src="media/imgAll/bg/DSC_0686.JPG" alt="" title="">
                                    </div>
                                    <div class="gallary-text-box">
                                        <h3>Water Diplomacy Workshop 2026</h3>
                                    </div>
                                    <span class="view-icon">+</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 d-flex grid-item">
                            <div class="gallary-wrapper-info">
                                <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/bg/DSC_0997.JPG">
                                    <div class="gallary-img-box">
                                         <img class="img-fluid" src="media/imgAll/bg/DSC_0997.JPG" alt="" title="">
                                    </div>
                                    <div class="gallary-text-box">
                                        <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                    </div>
                                    <span class="view-icon">+</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 d-flex grid-item">
                            <div class="gallary-wrapper-info">
                                <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/bg/sfs11.18.47%20AM.jpeg">
                                    <div class="gallary-img-box">
                                         <img class="img-fluid" src="media/imgAll/bg/sfs11.18.47%20AM.jpeg" alt="" title="">
                                    </div>
                                    <div class="gallary-text-box">
                                        <h3>Energy Diplomacy Workshop 2026</h3>
                                    </div>
                                    <span class="view-icon">+</span>
                                </a>
                            </div>
                        </div>
                    </div> -->
                    <div class="ed-hero-actions mt-5 text-center">
                        <a href="<?php echo $sSiteURL; ?>photo-gallery" class="ed-btn ed-btn-primary">
                            Explore All Photos
                            <span>↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

         <!-- Subscribe Us Area Start -->
          <!-- <section class="subscribe-area">
            <div class="container">
                <div class="subscribe-area-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="subscribe-contant">
                                <div class="subscribe-icon">
                                    <img class="img-fluid" src="media/imgAll/bg/letter.png" alt="" title="">
                                </div>
                                <div class="subscribe-contantItems">
                                    <h5>Subscribe And Follow</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-5 d-flex align-items-center">
                            <form>
                                <div class="input-area">
                                    <input type="text" class="form-control" placeholder="Your Email Address">
                                    <button class="btn btn-primary">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </section> -->
         <!-- Subscribe Us Area End-->

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
    
    <script>
        new WOW().init();
    </script>


</script>
    <?php echo $sJSEMM; ?>

</body>

</html>