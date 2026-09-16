<?php include_once("common/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Photo Gallery</title>

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
                <div class="row">
                    <div class="col-lg-9">
                        <div class="ed-inner-hero-content">
                            <div class="ed-page-label">
                                <span></span>
                                PHOTO GALLERY
                            </div>
                            <h1>
                                Engineering Diplomacy
                                <em>through the lens.</em>
                            </h1>
                            <p class="ed-inner-hero-description">
                                Explore moments, events, activities and highlights
                                from the Engineering Diplomacy initiative through our photo gallery.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- <div class="ed-breadcrumb">
                    <a href="<?php echo $sSiteURL; ?>">Home</a>
                    <span>/</span>
                    Photo Gallery
                </div> -->
            </div>
        </section>
        <section class="photo-gallery-page-area common-padding">
            <div class="container">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0730.jpg.jpeg">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0735.jpg.jpeg">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0772.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0772.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0820.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0820.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0881.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0881.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0891.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0891.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0926.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0926.jpg.jpeg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Water Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="All Photos Goes Here who have come together to brainstorm" href="media/imgAll/water/DSC_0943.jpg.jpeg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/water/DSC_0943.jpg.jpeg" alt="" title="">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1608.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1608.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1613.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1613.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1615.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1615.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1634.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1634.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1641.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1641.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1642.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1642.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1647.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1647.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1649.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1649.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1652.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1652.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1757.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1757.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1758.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1758.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1760.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1760.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1763.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1763.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1765.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1765.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1778.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1778.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1779.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1779.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/DSC_1790.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/DSC_1790.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/WhatsApp Image 2026-08-29 at 1.23.58 PM.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/WhatsApp Image 2026-08-29 at 1.23.58 PM.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/WhatsApp-Image-2026-08-29-at-1.23.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/WhatsApp-Image-2026-08-29-at-1.23.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Energy Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Energy Diplomacy Workshop 2026" href="media/imgAll/energy/WhatsApp-Image-2026-08-29-at-1.23.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/energy/WhatsApp-Image-2026-08-29-at-1.23.jpg" alt="" title="">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1681.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1681.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1685.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1685.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1688.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1688.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1694.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1694.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1708.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1708.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1714.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1714.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1722.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1722.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1726.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1726.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1734.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1734.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/DSC_1742.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/DSC_1742.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.48 AM (1).jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.48 AM (1).jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.48 AM.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.48 AM.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.49 AM (1).jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.49 AM (1).jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.49 AM (2).jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.49 AM (2).jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.49 AM.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.49 AM.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.50 AM (1).jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.50 AM (1).jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.50 AM.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.50 AM.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.51 AM (1).jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.51 AM (1).jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.51 AM.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp Image 2026-08-30 at 11.18.51 AM.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Cybersecurity Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Cybersecurity Diplomacy Workshop 2026" href="media/imgAll/cybersecurity/WhatsApp-Image-2026-08-30-at-11.18.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/cybersecurity/WhatsApp-Image-2026-08-30-at-11.18.jpg" alt="" title="">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
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
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1017.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1017.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1019.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1019.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1020.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1020.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1024.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1024.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1025.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1025.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1026.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1026.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1027.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1027.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1030.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1030.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1031.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1031.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1032.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1032.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1033.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1033.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1034.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1034.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1035.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1035.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1037.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1037.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1038.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1038.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1039.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1039.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1040.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1040.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1043.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1043.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1044.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1044.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1045.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1045.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1046.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1046.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1049.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1049.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1050.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1050.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1054.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1054.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1055.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1055.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1058.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1058.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                 <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1060.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1060.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1061.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1061.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1063.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1063.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1065.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1065.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1066.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1066.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1067.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1067.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1068.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1068.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1069.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1069.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1071.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1071.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1072.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1072.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1075.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1075.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1076.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1076.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1079.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1079.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1081.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1081.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1082.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1082.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1084.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1084.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1086.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1086.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1087.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1087.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1088.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1088.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1089.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1089.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1090.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1090.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1091.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1091.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1092.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1092.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1093.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1093.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1094.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1094.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1095.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1095.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1097.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1097.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1098.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1098.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1101.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1101.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1104.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1104.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1106.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1106.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1113.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1113.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1114.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1114.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1116.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1116.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1118.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1118.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1119.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1119.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1120.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1120.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1124.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1124.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1126.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1126.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1127.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1127.jpg" alt="" title="">
                                            </div>
                                            <div class="gallary-text-box">
                                                <h3>Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026</h3>
                                            </div>
                                            <span class="view-icon">+</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3 d-flex grid-item">
                                    <div class="gallary-wrapper-info">
                                        <a data-fancybox="gallery" data-caption="Closing Ceremony of Dhaka Engineering Diplomacy Workshop 2026" href="media/imgAll/closing-program/DSC_1128.jpg">
                                            <div class="gallary-img-box">
                                                <img class="img-fluid" src="media/imgAll/closing-program/DSC_1128.jpg" alt="" title="">
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
                </div>
            </div>
        </section>
    </main>

    <!-- footer-area -->
    <?php include_once("common/footer.php"); ?>



    <?php echo $sJSjQuery; ?>
    <?php echo $sJSBootStrap; ?>
    <?php echo $sJSFancyBox; ?>
    <?php echo $sJSEMM; ?>

</body>

</html>