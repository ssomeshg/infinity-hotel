<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>The Infinnity Hotel</title>
    <meta name="author" content="Vecuro">
    <meta name="robots" content="INDEX,FOLLOW">
    <?php if ($page == 'blog_view' && isset($meta)): ?>
        <meta name="keywords" content="<?= $meta['meta_tag']; ?>">
        <meta name="description" content="<?= $meta['meta_description']; ?>">
        <meta property="og:title" content="<?= $meta['meta_title']; ?>" />
        <meta property="og:description" content="<?= $meta['meta_description']; ?>" />
    <?php else: ?>
        <meta name="description" content="The Infinnity Hotel || Best Hotel in Port Blair">
    <meta name="keywords" content="The Infinnity Hotel || Best Hotel in Port Blair">
        <meta property="og:title" content="The Infinnity Hotel || Best Hotel in Port Blair" />
        <meta property="og:description" content="The Infinnity Hotel || Best Hotel in Port Blair" />
    <?php endif; ?>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon in the root directory -->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/web/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/web/assets/img/favicon.png" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/bootstrap.min.css">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/fontawesome.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/magnific-popup.min.css">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/slick.min.css">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/web/css/style.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<style>
       .recaptcha-container {
           transform: scale(0.85);
           transform-origin: 0 0;
       }

       .recaptcha-container iframe {
           height: 78px !important;
           width: 300px !important;
       }
   </style>

<body>

    <!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo base_url() .'' ?>"><img src="<?php echo base_url() ?>assets/web/img/logo-infinity.png" alt="infinity-hotel" style="width: 150px;"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li>
                        <a href="<?php echo base_url() .'' ?>"> Home</a>
                        
                    </li>
                    <li>
                        <a href="<?php echo base_url() .'about-us' ?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() .'rooms-tariff' ?>">Rooms & Tariff</a>
                        
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Tour Packages</a>
						
						 <ul class="sub-menu">
                         <?php $i = 1;
                foreach ($pack as $menu) : ?>
                            <li><a href="<?php echo base_url('package/' .url_title($menu->category_name, '-', TRUE)); ?>"><?php echo $menu->category_name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        
                    </li>
                    <li>
                        <a href="<?php echo base_url() .'gallery' ?>">Gallery</a>
                        
                    </li>
                    <li>
                        <a href="<?php echo base_url() .'blog' ?>">Blog</a>
                        
                    </li>
                  
                    <li>
                        <a href="<?php echo base_url() .'contact' ?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--==============================
    Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><i class="far fa-map-marker-alt"></i>Port Blair, A&N Islands</li>
                                <li><i class="far fa-envelope"></i><a href="mailto:booking@innfinityandaman.com">booking@innfinityandaman.com</a></li>
                                <li><i class="far fa-phone-alt"></i><a href="tel: +91-3192-235888"> +91-3192-235888</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="social-style1">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="menu-area rounded">
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <div class="header-logo">
                                    <a href="<?php echo base_url() .'' ?>">
                                        <img src="<?php echo base_url() ?>assets/web/img/logo-infinity.png " style="width: 100%;" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url() .'' ?>"> Home</a>
                                            
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() .'about-us' ?>">About Us</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() .'rooms-tariff' ?>">Rooms & Tariff</a>
                                            
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Tour Packages</a>
											 <ul class="sub-menu">
                                             <?php $i = 1;
                foreach ($pack as $menu) : ?>
                            <li><a href="<?php echo base_url('package/' .url_title($menu->category_name, '-', TRUE)); ?>"><?php echo $menu->category_name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                                            
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() .'gallery' ?>">Gallery</a>
                                            
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url() .'blog' ?>">Blog</a>
                                            
                                        </li>
                                      
                                        <li>
                                            <a href="<?php echo base_url() .'contact' ?>">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-auto d-lg-none">
                                <button class="vs-menu-toggle d-inline-block">
                                    <i class="fal fa-bars"></i>                                           
                               </button>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>