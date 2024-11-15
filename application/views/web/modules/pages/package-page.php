    <!--==============================
    Breadcumb
    ============================== -->
    <div
      class="breadcumb-wrapper"
      data-bg-src="<?php echo base_url() ?>assets/web/img/breadcumb/breadcumb-bg1.jpg"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Our Destinations</h1>
        </div>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Our Destinations</li>
          </ul>
        </div>
      </div>
    </div>

    <!--==============================
    Package Area
    ============================== -->

    <div class="service-layout1 space mt-0">
        <div class="container">
            <div class="row" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false">
            <?php foreach ($packages as $pac) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-style1">
                        <div class="service-img-t"><img src="<?php echo base_url('uploads/package/' . $pac->image); ?>" alt="service thumbnail"></div>

                        <div class="service-content">
                            <div class="service-inner">
                            
                                <h3 class="service-title h5"><a href="<?php echo base_url('explore/' . $pac->id) ?>"><?php echo $pac->package_heading; ?></a></h3>
                                <p class="service-text"><?php echo $pac->day_plans; ?></p>
                            </div>
                            <div class="link-btn">
                                <a href="<?php echo base_url('explore/' . $pac->id) ?>" style="background-color: #dede3e;">View Details <i class="far fa-eye"></i></a>
                                <a href="#">Request <i class="far fa-phone-alt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
               
            </div>
        </div>
    </div>