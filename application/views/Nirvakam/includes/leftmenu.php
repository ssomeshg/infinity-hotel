<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="./assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>The Infinnity Hotel</title>

  <meta name="description" content="" />
  <!-- Fonts -->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/web/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/web/assets/img/favicon.png" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/fonts/boxicons.css" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/libs/apex-charts/apex-charts.css" />

  <?php //echo "aabbcc ".$this->uri->segment(2);
  if (!empty($this->uri->segment(2)) && (($this->uri->segment(2) == 'package') || ($this->uri->segment(2) == 'salesquote'))) : ?>
    <!-- Include DataTables CSS -->
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTable/bootstrap.css" /> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTable/dataTables.bootstrap4.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTable/dataTables.css" />
    <script src="<?php echo base_url(); ?>assets/js/dataTable/jquery-3.7.1.js"></script>

    <!-- Include SelectBox CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="<?php //echo base_url();
                                      ?>assets/bootstrap-select/css/bootstrap-select.css" /> -->



    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2/css/select2.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/multiselect/dist/css/bootstrap-multiselect.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/toastr/css/toastr.css">



    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/multiselect/dist/css/bootstrap-multiselect.css"> -->

  <?php endif; ?>

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="<?php echo base_url(); ?>assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    setTimeout(function() {
      $('.flash-message_success').fadeOut('fast');
    }, 2000);
  </script>
  <script type="text/javascript">
    setTimeout(function() {
      $('.flash-message_error').fadeOut('fast');
    }, 2000);
  </script>

</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <div class="layout-start">
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo" style="height:100px;">
          <a href="<?= base_url() . 'dashboard' ?>" class="app-brand-link">
            <img src="<?php echo base_url() ?>assets/web/img/logo-infinity.png" alt="" style="width:100%;height:95px;">
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1" style="background: #073A3D;">

          <!-- Dashboard -->
          <li class="menu-item active mt-3">
            <a href="<?= base_url() . 'dashboard' ?>" class="menu-link text-white">
              <i class="menu-icon tf-icons bx bxs-dashboard"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>

          <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle text-white">
                <i class="menu-icon tf-icons bx bx-package"></i>
                <div data-i18n="Authentications">Package</div>
              </a>
              <ul class="menu-sub"> 
                <li class="menu-item">
                  <a href="<?= base_url() . 'package_category' ?>" class="menu-link text-white" >
                    <div>Package Category</div>
                  </a>
                </li> 
                <li class="menu-item">
                  <a href="<?= base_url() . 'package_type' ?>" class="menu-link text-white" >
                    <div>Package Type</div>
                  </a>
                </li> 				
                <li class="menu-item">
                  <a href="<?= base_url() . 'package' ?>" class="menu-link text-white" >
                    <div>Create Package</div>
                  </a>
                </li>
				
                <li class="menu-item">
                  <a href="<?= base_url() . 'package_list' ?>" class="menu-link text-white" >
                    <div>package List</div>
                  </a>
                </li>
              </ul>
            </li>
            <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle text-white">
              <i class="menu-icon tf-icons bx bxl-blogger"></i>
              <div data-i18n="Authentications">Blog</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?= base_url() . 'blog_create' ?>" class="menu-link text-white">
                  <div>create</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?= base_url() . 'blog_list' ?>" class="menu-link text-white">
                  <div>List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle text-white">
            <i class="menu-icon tf-icons bx bxs-photo-album"></i>
              <div data-i18n="Authentications">Banner</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?= base_url() . 'banner_create' ?>" class="menu-link text-white">
                  <div>create</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?= base_url() . 'banner_list' ?>" class="menu-link text-white">
                  <div>List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle text-white">
            <i class="menu-icon tf-icons bx bxs-photo-album"></i>
              <div data-i18n="Authentications">Gallery</div>
            </a>
            <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?= base_url() . 'gallery_category' ?>" class="menu-link text-white">
                  <div>Category</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?= base_url() . 'gallery_create' ?>" class="menu-link text-white">
                  <div>create</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?= base_url() . 'gallery_list' ?>" class="menu-link text-white">
                  <div>List</div>
                </a>
              </li>
            </ul>
          </li>
            <li class="menu-item mt-2">
            <a href="<?= base_url() . 'hotel_enqury_list' ?>" class="menu-link text-white">
              <i class="menu-icon tf-icons bx bxs-food-menu"></i>
              <div>Hotel Enqury List</div>
            </a>
          </li>
          <li class="menu-item mt-2">
            <a href="<?= base_url() . 'contact_list' ?>" class="menu-link text-white">
              <i class="menu-icon tf-icons bx bxs-contact"></i>
              <div>Contact Us Enquery</div>
            </a>
          </li>
          <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle text-white">
            <i class="menu-icon tf-icons bx bxs-photo-album"></i>
              <div data-i18n="Authentications">Testimonial</div>
            </a>
            <ul class="menu-sub">
              <li class="menu-item">
                <a href="<?= base_url() . 'testimonial_create' ?>" class="menu-link text-white">
                  <div>create</div>
                </a>
              </li>
              <li class="menu-item">
                <a href="<?= base_url() . 'testimonial_list' ?>" class="menu-link text-white">
                  <div>List</div>
                </a>
              </li>
            </ul>
          </li>
          <li class="menu-item mt-2">
            <a href="<?= base_url() . 'tour_enqury_list' ?>" class="menu-link text-white">
              <i class="menu-icon tf-icons bx bxs-food-menu"></i>
              <div>Tour Enqury List</div>
            </a>
          </li>
        </ul>
        <div class="menu-bar">
            <img src="<?php echo base_url() ?>assets/img/blue-icon.png" alt="menu">
          </div>
        </div>
      </aside>
      
      <!-- / Menu -->