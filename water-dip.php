<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Water Diplomacy</title>

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
        <div class="water-dip-page DiploCommon-page">
            <section class="DiploCommon-pageHeroTop">
                <div class="container-fluid">
                    <div class="DiploCommon-hero-img">
                        <img class="img-fluid" src="media/imgAll/bg/bg-big.jpg" alt="" title="">
                        <div class="hero-overlay"></div>
                        <div class="DiploCommon-hero-topContent">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <h1>Water Diplomacy</h1>
                                        <p>A Regional Hub for Water Cooperation and Diplomacy</p>
                                        <a href="<?php echo $sSiteURL; ?>water-diplomacy-details" class="ed-btn ed-btn-primary">
                                            Explore All
                                            <span>↗</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="DiploCommon-workshop-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-11 m-auto">
                            <div class="section-titleAll">
                                <div class="section-title-tag">
                                    <span></span>
                                    Workshop
                                </div>
                                <h2>
                                    Explore Water Diplomacy 
                                    <span>Workshop</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="DiploCommon-workshop-wrap">
                        <!-- <div class="DiploCommon-workshop-slider"> -->
                            <div class="row">
                                <div class="col-lg-6 m-auto">
                                     <div class="items">
                                        <a href="<?php echo $sSiteURL; ?>water-diplomacy-details">
                                            <div class="DiploCommon-workshop-Content">
                                                <img class="img-fluid" src="media/imgAll/bg/WCTWBN-scaled.jpg" alt="" title="">
                                                <div class="DiploCommon-workshop-ContentBox">
                                                    <h3>Renewal of the Ganges Water Treaty What Can Bangladesh Do Now?</h3>
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
                                </div>
                            </div>
                            <!-- <div class="items">
                                <a href="Workshops-details.php">
                                    <div class="DiploCommon-workshop-Content">
                                        <img class="img-fluid" src="media/imgAll/bg/World-Water-Day_966x752_.webp" alt="" title="">
                                        <div class="DiploCommon-workshop-ContentBox">
                                            <h3>A Theory-Practice Synthesis for Actionable Outcomes</h3>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p><strong>Loction:</strong> INT Buet Building</p>
                                                    <p><strong>Date:</strong> 21 Octobor 2027</p>
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
                            <div class="items">
                                <a href="Workshops-details.php">
                                    <div class="DiploCommon-workshop-Content">
                                        <img class="img-fluid" src="media/imgAll/bg/ImageAug.png" alt="" title="">
                                        <div class="DiploCommon-workshop-ContentBox">
                                            <h3>Renewal of the Ganges Water Treaty</h3>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p><strong>Loction:</strong> INT Buet Building</p>
                                                    <p><strong>Date:</strong> 21 Octobor 2027</p>
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
                            <div class="items">
                                <a href="Workshops-details.php">
                                    <div class="DiploCommon-workshop-Content">
                                        <img class="img-fluid" src="media/imgAll/bg/Water Conflict Water diplomacy-H.jpg" alt="" title="">
                                        <div class="DiploCommon-workshop-ContentBox">
                                            <h3>A Theory-Practice Synthesis for Actionable Outcomes</h3>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <p><strong>Loction:</strong> INT Buet Building</p>
                                                    <p><strong>Date:</strong> 21 Octobor 2027</p>
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
                        </div> -->
                        <!-- <div class="explore-btn d-none">
                            <a href="<?php echo $sSiteURL; ?>workshop" class="ed-btn ed-btn-primary">
                                Explore All
                                <span>↗</span>
                            </a>
                        </div> -->
                    </div>
                </div>
            </section>
            <section class="DiploCommon-banner-contentAll">
                <div class="container">
                    <div class="DiploCommon-event-wrapper">
                        <div class="row">
                            <div class="col-lg-11 m-auto">
                                <div class="section-titleAll">
                                    <div class="section-title-tag">
                                        <span></span>
                                        Event
                                    </div>
                                    <h2>
                                        Explore 
                                        <span>Event</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
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
                                            <h3>Remote Sensing for the Assessment of Groundwater Resources: Theory and Practical Applications</h3>
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
                                            <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Water Diplomacy Center at the Jordan University of Science and Technology.</p>
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
                                            <h3>Remote Sensing for the Assessment of Groundwater Resources: Theory and Practical Applications</h3>
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
                                            <p>In continuation of the Blue Peace Middle East Capacity-Building Project activities, supported by the Government of Switzerland, the Water Diplomacy Center at the Jordan University of Science and Technology.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div> -->
                        <div class="explore-btn">
                            <a href="<?php echo $sSiteURL; ?>events" class="ed-btn ed-btn-primary">
                                Explore All
                                <span>↗</span>
                            </a>
                        </div>
                    </div>
                    <div class="DiploCommon-count-warpper">
                        <div class="row">
                            <div class="col-lg-11 m-auto">
                                <div class="section-titleAll">
                                    <div class="section-title-tag">
                                        <span></span>
                                        Number Talks
                                    </div>
                                    <h2>
                                        ED in
                                        <span>Numbers</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="DiploCommon-count-itemsAll">
                             <div class="row">
                                <div class="col-lg-10 m-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                                            <div class="counter-box-wrap text-center">
                                                <div class="counter-box-img">
                                                    <img class="img-fluid" src="media/imgAll/bg/team-building.png" alt="" title="">
                                                </div>
                                                <div class="counter-box-items">
                                                    <h5>+<span class="counter" data-count="3">0</span></h5>
                                                    <p>Activities</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                                            <div class="counter-box-wrap text-center">
                                                <div class="counter-box-img">
                                                    <img class="img-fluid" src="media/imgAll/bg/participation.png" alt="" title="">
                                                </div>
                                                <div class="counter-box-items">
                                                    <h5>+<span class="counter" data-count="513">0</span></h5>
                                                    <p>Participants</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                                            <div class="counter-box-wrap text-center">
                                                <div class="counter-box-img">
                                                    <img class="img-fluid" src="media/imgAll/bg/partner.png" alt="" title="">
                                                </div>
                                                <div class="counter-box-items">
                                                    <h5><span class="counter" data-count="7">0</span></h5>
                                                    <p>Partners</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                                            <div class="counter-box-wrap text-center">
                                                <div class="counter-box-img">
                                                    <img class="img-fluid" src="media/imgAll/bg/graduated.png" alt="" title="">
                                                </div>
                                                <div class="counter-box-items">
                                                    <h5>+<span class="counter" data-count="27">0</span></h5>
                                                    <p>MSc Students</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                                            <div class="counter-box-wrap text-center">
                                                <div class="counter-box-img">
                                                    <img class="img-fluid" src="media/imgAll/bg/learning.png" alt="" title="">
                                                </div>
                                                <div class="counter-box-items">
                                                    <h5><span class="counter" data-count="7">0</span></h5>
                                                    <p>Studies</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-sm-6 d-flex justify-content-center">
                                            <div class="counter-box-wrap text-center">
                                                <div class="counter-box-img">
                                                    <img class="img-fluid" src="media/imgAll/bg/network.png" alt="" title="">
                                                </div>
                                                <div class="counter-box-items">
                                                    <h5>+<span class="counter" data-count="15">0</span></h5>
                                                    <p>Fellows</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="DiploCommon-speaker-sec">
                        <div class="row">
                            <div class="col-lg-11 m-auto">
                                <div class="section-titleAll">
                                    <div class="section-title-tag">
                                        <span></span>
                                        Speakers
                                    </div>
                                    <h2>
                                        Meet Our 
                                        <span>Speakers</span>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="DiploCommon-speaker-wrapper">
                           <div class="row gx-5 justify-content-center">
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/photo.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. Shafiqul Islam</h5>
                                            <p>Professor, Civil and Environmental Engineering</p>
                                            <p class="team-orga">Tufts University, USA</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/Sheikh-Rahman-5.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. Sheikh Mokhlesur Rahman</h5>
                                            <p>Director, Centre for Environmental & Resource Management (CERM) & Professor, Department of Civil Engineering </p>
                                            <p class="team-orga">Bangladesh Univeraity of Engineering & Technology (BUET)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/nrhndI.png" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. Md. Aman Uddin</h5>
                                            <p>Associate Professor</p>
                                             <p class="team-orga">Department of Mechanical Engineering, Bangladesh Univeraity of Engineering & Technology (BUET)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/mshohrabhossain.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. Md. Shohrab Hossain</h5>
                                            <p>Professor</p>
                                            <p class="team-orga">Department of Computer Science and Engineering, Bangladesh Univeraity of Engineering & Technology (BUET)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/Key7JIKpf.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. A K M Monjur Morshed</h5>
                                            <p>Professor</p>
                                            <p class="team-orga">Department of Mechanical Engineering, Bangladesh Univeraity of Engineering & Technology (BUET)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/Untitled.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. Ahmadul Hassan</h5>
                                            <p>Chairman</p>
                                            <p class="team-orga">Environment & Infrastructure Management Solution Limited (EIMS)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/citations.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Ahmed Ishtiaque Amin Chowdhury</h5>
                                            <p>Associate Professor</p>
                                            <p class="team-orga">Bangladesh Univeraity of Engineering & Technology (BUET)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/ProfileImage.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Prof. Dr. Abdul Hasib chowdhury</h5>
                                            <p>Professor</p>
                                            <p class="team-orga">Department of Electrical & Electronic Engineering, Bangladesh Univeraity of Engineering & Technology (BUET)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/Sharmin-2511201153.png" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Dr. Sharmin R. Ara</h5>
                                            <p>EMIS Specialist</p>
                                             <p class="team-orga">Centre for Environmental & Resource Management (CERM), BUET</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/1756188940446.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Kazi Mahmudur Rahman</h5>
                                            <p>Graduate Intern, Engineering Diplomacy Initiative, and MPA Candidate</p>
                                            <p class="team-orga">Princeton University</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                        <a href="#">
                                            <div class="DiploCommon-speaker-img">
                                                <img class="img-fluid" src="media/imgAll/bg/WhatsApp-Image-2026-06-22-at-33923-PM-2606220942.jpeg" alt="" title="">
                                            </div>
                                            <div class="DiploCommon-speaker-info">
                                                <h5>Rahnuma Nurine Tanha</h5>
                                                <p> Research Officer</p>
                                                <p class="team-orga">Centre for Environmental & Resource Management (CERM), BUET</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                        <a href="#">
                                            <div class="DiploCommon-speaker-img">
                                                <img class="img-fluid" src="media/imgAll/bg/1763040958233.jpg" alt="" title="">
                                            </div>
                                            <div class="DiploCommon-speaker-info">
                                                <h5>Tasnia Rahman</h5>
                                                <p> Research Officer</p>
                                                <p class="team-orga">Centre for Environmental & Resource Management (CERM), BUET</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/WhatsApp Image 2026-08-24 at 7.30.36 PM.jpeg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Yeasin Rahman Sheikh</h5>
                                            <p>Research Assistant</p>
                                            <p class="team-orga">Department of Mechanical Engineering, BUET</p>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/WhatsApp Image 2026-08-24 at 8.45.25 PM.jpeg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Tasnuba Chowdhury</h5>
                                            <p>Water Resources Engineer</p>
                                             <p class="team-orga"> Environment and Infrastructure Management Solution (EIMS)</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 d-flex">
                                    <div class="DiploCommon-speaker-items">
                                         <a href="#">
                                        <div class="DiploCommon-speaker-img">
                                            <img class="img-fluid" src="media/imgAll/bg/Kazi-Kader-4.jpg" alt="" title="">
                                        </div>
                                        <div class="DiploCommon-speaker-info">
                                            <h5>Samiul Kader</h5>
                                            <p>Research Assistant</p>
                                             <p class="team-orga"> Department of Computer Science and Engineering, BUET</p>
                                        </div>
                                         </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>

    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>

    <?php echo $sJSjQuery; ?>
    <script>
// counter-js
$(document).ready(function ($) {
  //Check if an element was in a screen
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();
    return ((elemBottom <= docViewBottom));
  }
  //Count up code
  function countUp() {
    $('.counter').each(function () {
      var $this = $(this), // <- Don't touch this variable. It's pure magic.
        countTo = $this.attr('data-count');
      ended = $this.attr('ended');

      if (ended != "true" && isScrolledIntoView($this)) {
        $({ countNum: $this.text() }).animate({
          countNum: countTo
        },
          {
            duration: 2500, //duration of counting
            easing: 'swing',
            step: function () {
              $this.text(Math.floor(this.countNum));
            },
            complete: function () {
              $this.text(this.countNum);
            }
          });
        $this.attr('ended', 'true');
      }
    });
  }
  //Start animation on page-load
  if (isScrolledIntoView(".counter")) {
    countUp();
  }
  //Start animation on screen
  $(document).scroll(function () {
    if (isScrolledIntoView(".counter")) {
      countUp();
    }
  });
});

    </script>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSPopper; ?>
    <?php echo $sJSSlick; ?>
    <?php echo $sJSAnimate ?>
    <?php echo $sWowjs ?>
    <?php echo $sJSFancyBox; ?>
    <?php echo $sJSEMM; ?>

</body>

</html>