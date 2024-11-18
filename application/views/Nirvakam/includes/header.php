<?php
$username = $_SESSION['username'];
?>
<!-- Layout container -->
<div class="layout-page">
  <!-- Navbar -->

  <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

      <!-- Search -->
      <div class="navbar-nav align-items-center">
        <div class="nav-item d-flex align-items-center">

        </div>
      </div>
      <!-- /Search -->

      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <!-- Place this tag where you want the button to render. -->

        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex">
              <div class="flex-grow-1">
                <span class="fw-semibold d-block">Date :
                  <small class="text-muted"></small><?= date('d-m-Y'); ?></small></span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex">
              <div class="flex-grow-1">
                <span class="fw-semibold d-block"><?php echo $username; ?></span>
              </div>
            </div>
          </a>
        </li>

        <!-- User -->
        <li class="nav-item navbar-dropdown dropdown-user dropdown">
          <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
            <div class="avatar avatar-online">
              <img src="<?php echo base_url(); ?>assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
            </div>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="<?= base_url() . 'changepassword' ?>">
                <i class="bx bx-lock me-2"></i>
                <span class="align-middle">Change Password</span>
              </a>
            </li>
            <li>
              <a class="dropdown-item" href="<?= base_url() . 'Logout' ?>">
                <i class="bx bx-power-off me-2"></i>
                <span class="align-middle">Log Out</span>
              </a>
            </li>
          </ul>
        </li>
        <!--/ User -->
        <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert fade show flash-message_success text-white p-3 mt-3" style="z-index: 1111;position: absolute;right: 30px; background-color:#40db6c ">
            <?php echo $this->session->flashdata('success'); ?>

          </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')) : ?>
          <div class="alert fade show flash-message_error text-white p-3 mt-3" style="z-index: 11111;position: absolute;right: 30px;background-color:#d33434">
            <?php echo $this->session->flashdata('error'); ?>

          </div>
        <?php endif; ?>
      </ul>
    </div>
  </nav>