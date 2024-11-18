   <section class="counter-layout1  background-image" style="background-image: url(&quot;<?php echo base_url() ?>assets/web/img/bg/counter-bg.jpg&quot;);">
       <div class="space" style="background: linear-gradient(to top, #ffffff, transparent);">
           <div class="container">
               <div class="row justify-content-center ">
                   <div class="col-lg-7">
                       <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                           <?php foreach ($package as $pac): ?>
                               <h2 class="sec-title text-dark"><?php echo $pac->package_heading; ?></h2>
                           <?php endforeach; ?>
                           <span class="sec-subtitle text-dark">Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</span>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </section>

   <!--==============================
    Selling Area
    ============================== -->
   <section class="selling-layout1 bg-white space-bottom">
       <div class="container">
           <div class="row gx-5">
               <div class="col-lg-6">
                   <div class="row">

                       <div class="col-lg-12">
                           <div class="about-style1 border1">
                               <div class="about-inner">
                                   <div class="about-icon"><img src="<?php echo base_url() ?>assets/web/img/icon/about-icon-1-1.png" alt="icon"></div>
                                   <?php foreach ($package as $pac): ?>
                                       <h3 class="about-title"><a href="#"><?php echo $pac->day_plans; ?></a></h3>
                                       <p class="about-text"><?php echo $pac->place; ?></p>
                                   <?php endforeach; ?>
                               </div>
                           </div>
                       </div>

                   </div>
               </div>
               <div class="col-lg-6 m-auto">
                   <div class="selling-style1">

                       <div class="row g-3 vs-carousel" data-arrows="false" data-dots="true" data-autoplay="true" data-slide-show="2">
                           <?php $image_bundle = explode(',', $pac->image_bundle);
                            foreach ($image_bundle as $image) : ?>
                               <div class="col-auto">
                                   <a href="#"><img src="<?php echo base_url('uploads/package/' . trim($image)); ?>" alt="Blog Image"></a>
                               </div>
                           <?php endforeach; ?>
                       </div>
                   </div>
               </div>

           </div>
       </div>
   </section>

   <section class="selling-layout1 bg-white space-bottom">
       <div class="container">
           <div class="row gx-5">
               <div class="col-lg-6">
                   <div class="selling-style1">
                       <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                           <h2 class="sec-title">Package inclusions</h2>
                       </div>
                       <div class="list-style1">
                           <ul class="list-unstyled">
                               <?php foreach ($package as $pac): ?>
                                   <?php
                                    $contentWithIcons = str_replace(
                                        '<li>',
                                        '<li><span class="icon"><i class="far fa-check-circle"></i></span> ',
                                        $pac->package_inclusion
                                    );
                                    ?>
                                   <?php echo $contentWithIcons; ?>
                               <?php endforeach; ?>
                           </ul>
                       </div>

                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="about-content">
                       <h1>Travel Journey</h1>
                       <div class="accordion-style2">
                           <div class="accordion" id="accordionExample">
                               <?php if (!empty($plans)) : ?>
                                   <?php foreach ($plans as $index => $list) : ?>
                                       <div class="accordion-item">
                                           <h2 class="accordion-header" id="heading<?php echo $index; ?>">
                                               <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $index; ?>" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>" aria-controls="collapse<?php echo $index; ?>">
                                                   Day <?php echo $index + 1; ?>
                                               </button>
                                           </h2>
                                           <div id="collapse<?php echo $index; ?>" class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>" data-bs-parent="#accordionExample">
                                               <div class="accordion-body">
                                                   <h6><?php echo $list->plan_title; ?></h6>
                                                   <?php echo $list->plan_description; ?>
                                               </div>
                                           </div>
                                       </div>
                                   <?php endforeach; ?>
                               <?php else : ?>
                                   <p>No plans available.</p>
                               <?php endif; ?>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
   </section>




   <!--==============================
    Brand Area
    ============================== -->
   <div class="brand-layout1 space about-deal pt-0">
       <div class="container">
           <div class="row vs-carousel z-index-common" data-arrows="false" data-wow-delay="0.4s" data-slide-show="6"
               data-lg-slide-show="4" data-md-slide-show="4" data-xs-slide-show="2" data-center-mode="true" data-autoplay="true">
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-1.png" alt="product">
                           <p class="deal-title">Island</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-2.png" alt="product">
                           <p class="deal-title">Water Ride</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-3.png" alt="product">
                           <p class="deal-title">Pickup Drop</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-4.png" alt="product">
                           <p class="deal-title">Breakfast</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-5.png" alt="product">
                           <p class="deal-title">Hotel</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-6.png" alt="product">
                           <p class="deal-title">Cab Facility</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-7.png" alt="product">
                           <p class="deal-title">Sight Seeing</p>
                       </a>
                   </div>
               </div>
               <div class="col-auto">
                   <div class="deal-item">
                       <a href="#">
                           <img src="<?php echo base_url() ?>assets/web/img/about/deal-1-8.png" alt="product">
                           <p class="deal-title">Co-ordinator</p>
                       </a>
                   </div>
               </div>
           </div>
       </div>
   </div>


   <section class="product-layout1 bg-smoke space">
       <div class="container">
           <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">

               <span class="sec-subtitle">Anything which is not included in the Package</span>
               <h2 class="sec-title">Package exclusions</h2>
           </div>
           <div class="row" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-dots="true" data-center-mode="true">
           <?php foreach ($package as $pac) : ?>
               <div class="col-lg-4 mb-2 p-0 ">
                   <div class="product-style1">

                       <div class="product-meta">30% Off</div>
                       <div class="product-about pt-3">
                           <h2 class=""><a href="" tabindex="-1">Standard cost</a></h2>
                           <p class="text ">Standard category hotel with all basic ammenities -
                           </p>
                           <div class="list-style1">
                               <ul class="list-unstyled">
                               <?php foreach ($package as $pac): ?>
                                   <?php
                                    $contentWithIcons = str_replace(
                                        '<li>',
                                        '<li><span class="icon"><i class="far fa-check-circle"></i></span> ',
                                        $pac->standard_description
                                    );
                                    ?>
                                   <?php echo $contentWithIcons; ?>
                               <?php endforeach; ?>


                               </ul>
                           </div>
                           <a href="#" class="vs-btn bt1 fs-2" tabindex="-1">₹<?php echo $pac->standard_cost; ?> <span class="fs-5"><del>₹<?php echo $pac->standard_price; ?></del></span></a>

                       </div>

                   </div>
               </div>
               <div class="col-lg-4 mb-2 p-0">
                   <div class="product-style1">

                       <div class="product-meta">30% Off</div>
                       <div class="product-about pt-3">
                           <h2 class=""><a href="" tabindex="-1">Royal Cost</a></h2>
                           <p class="text ">Standard category hotel with all basic ammenities -
                           </p>
                           <div class="list-style1">
                               <ul class="list-unstyled">
                               <?php foreach ($package as $pac): ?>
                                   <?php
                                    $contentWithIcons = str_replace(
                                        '<li>',
                                        '<li><span class="icon"><i class="far fa-check-circle"></i></span> ',
                                        $pac->royal_description
                                    );
                                    ?>
                                   <?php echo $contentWithIcons; ?>
                               <?php endforeach; ?>

                               </ul>
                           </div>
                           <a href="#" class="vs-btn bt2 fs-2" tabindex="-1">₹<?php echo $pac->royal_cost; ?> <span class="fs-5"><del>₹<?php echo $pac->royal_price; ?></del></span></a>

                       </div>

                   </div>
               </div>
               <div class="col-lg-4 p-0 mb-2">
                   <div class="product-style1">

                       <div class="product-meta">30% Off</div>
                       <div class="product-about pt-3">
                           <h2 class=""><a href="" tabindex="-1">Luxury Cost</a></h2>
                           <p class="text ">Standard category hotel with all basic ammenities -
                           </p>
                           <div class="list-style1">
                               <ul class="list-unstyled">
                               <?php foreach ($package as $pac): ?>
                                   <?php
                                    $contentWithIcons = str_replace(
                                        '<li>',
                                        '<li><span class="icon"><i class="far fa-check-circle"></i></span> ',
                                        $pac->luxury_description
                                    );
                                    ?>
                                   <?php echo $contentWithIcons; ?>
                               <?php endforeach; ?>

                               </ul>
                           </div>
                           <a href="#" class="vs-btn bt3 fs-2" tabindex="-1">₹<?php echo $pac->luxury_cost; ?> <span class="fs-5"><del>₹<?php echo $pac->luxury_price; ?></del></span></a>

                       </div>

                   </div>
               </div>




               <ul class="slick-dots" role="tablist">
                   <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 1" tabindex="0" aria-selected="true">1</button></li>
               </ul>
           </div>
           <?php endforeach; ?>
       </div>
   </section>