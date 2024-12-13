   <!--==============================
    Hero Area
    ============================== -->
   <div class="hero-layout1">
       <div class="position-relative">
           <div class="vs-carousel hero-slider1" data-slide-show="1" data-autoplay="true" data-fade="true">
               <!-- First Slide with Video Background -->
               <div class="hero-slide">
                   <video autoplay muted loop playsinline class="video-bg">
                       <source src="<?php echo base_url() ?>assets/web/img/videos/hero-video.mp4" type="video/mp4">
                       Your browser does not support the video tag.
                   </video>
                   <div class="container">
                       <div class="row align-items-center justify-content-between">
                           <div class="col-lg-7 mx-auto">
                               <div class="hero-content text-center">
                                   <h1 class="hero-title">Discover the Beauty of Andaman Islands</h1>
                                   <p class="hero-text">Your Gateway to Andaman’s Tropical Paradise</p>
                                   <a href="#" class="vs-btn">Discover More</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- Second Slide with Image Background -->
               <div class="hero-slide" data-bg-src="<?php echo base_url() ?>assets/web/img/bg/hero-bg-1-2.jpg">
                   <div class="container">
                       <div class="row align-items-center justify-content-between">
                           <div class="col-lg-7 mx-auto">
                               <div class="hero-content text-center">
                                   <h1 class="hero-title">Discover the Beauty of Andaman Islands</h1>
                                   <p class="hero-text">Explore the Wonders of Andaman: Nature, Adventure & Relaxation</p>
                                   <a href="#" class="vs-btn">Discover More</a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

           </div>
           <div>
               <button class="icon-btn slick-prev" data-slick-prev=".hero-slider1"><i class="fas fa-angle-double-left"></i></button>
               <button class="icon-btn slick-next" data-slick-next=".hero-slider1"><i class="fas fa-angle-double-right"></i></button>
           </div>
       </div>
   </div>


   <!-- Form Section -->
   <div class="service-layout1">
       <div class="container">
           <div class="">
               <form action="" method="POST" id="enqury_form">
                   <div class="row form-comp p-4 bg-white shadow-lg rounded-2">

                       <div class="col-md-6 mb-2 col-lg-3">
                           <label for="">Room Type</label>
                           <select name="room_type" id="room_type">
                               <option value="Select Your Destination">Room Type</option>
                               <option value="Delux">Delux</option>
                               <option value="Semi Delux">Semi Delux</option>
                           </select>
                       </div>
                       <div class="col-md-6 mb-2 col-lg-3">
                           <label for="">No Of Rooms</label>
                           <select name="no_of_rooms" id="no_of_rooms">
                               <option value="Select Your Hotel">Select Your Room</option>
                               <option value="1">1</option>
                               <option value="2">2</option>
                               <option value="3">3</option>
                               <option value="4">4</option>
                           </select>
                       </div>
                       <div class="col-md-6 mb-2 col-lg-3">
                           <label for="">Name</label>
                           <input type="text" name="name" id="name">
                       </div>
                       <div class="col-md-6 mb-2 col-lg-3">
                           <label for="">Mobile</label>
                           <input type="number" name="mobile" id="mobile">
                       </div>
                       <div class="col-md-6 mb-2 col-lg-3">
                           <label for="">Location</label>
                           <input type="text" name="location" id="location">
                       </div>

                       <div class="col-md-6 mb-2 col-lg-3">
                           <label for="">Check In</label>
                           <input type="date" name="check_in" id="check_in">
                       </div>
                       <div class="col-md-6 mb-2 col-lg-3"> <label for="">Check Out</label>
                           <input type="date" name="check_out" id="check_out">
                       </div>
                       <div class="col-md-6 mb-2 col-lg-3">
                           <div class="recaptcha-container mt-4">
                               <div class="g-recaptcha"
                                   data-sitekey="6LdSQz4qAAAAAAeyDrY6zgvpC9bUsDU0DbP718bQ"></div>
                           </div>
                       </div>
                       <div class="col-md-12 mb-2 col-lg-2 d-flex align-items-end">
                           <button type="submit" class="vs-btn rounded-1">Book Now</button>
                       </div>

                   </div>
               </form>
           </div>
       </div>
   </div>

   <!--==============================
    About Area
    ============================== -->
   <section class="about-layout2 space">
       <div class="container">
           <div class="row gx-5">
               <div class="col-lg-6">
                   <div class="about-content">
                       <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                           <span class="sec-subtitle">Welcome to Hotel Innfinity Andaman</span>
                           <h6 class="sec-title">Your Comfort, Our Priority – Experience the Best of Port Blair at Hotel Innfinity</h6>
                       </div>
                       <p class="about-text">Located in the heart of Port Blair, Hotel Innfinity Andaman offers an exceptional blend of modern amenities, central location, and unmatched hospitality. Whether you are visiting for business, leisure, or a quick stopover, our hotel is the perfect choice for travelers seeking comfort, convenience, and ease of access to key landmarks in the Andaman Islands.
                       </p>


                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="about-img">
                       <div class="about-logo">
                           <img src="<?php echo base_url() ?>assets/web/img/about/selling-img-1-2.png" alt="white logo 2">
                       </div>
                       <img src="<?php echo base_url() ?>assets/web/img/about/hotelinnfinity.png" alt="Hotel Innfinity" class="img1 rounded-2">
                       <img src="<?php echo base_url() ?>assets/web/img/about/about-2-2.jpg" alt="about img 2 2" class="img2 rounded-2">
                   </div>
               </div>
           </div>

       </div>
   </section>
   <!--==============================
    Product Area
    ============================== -->
   <section class="product-layout1 bg-smoke space">
       <div class="container">
           <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">

               <span class="sec-subtitle">Stays, Tours & Cuisine</span>
               <h2 class="sec-title">Rooms & tariff</h2>
           </div>
           <div class="row vs-carousel" data-slide-show="2" data-lg-slide-show="2" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-dots="true" data-center-mode="true">
               <div class="col-lg-6">
                   <div class="product-style1">
                       <div class="product-img">
                           <img src="<?php echo base_url() ?>assets/web/img/about/delux.gif" alt="Delux Room">
                       </div>
                       <div class="product-meta">30% Off</div>
                       <div class="product-about">
                           <h2 class="product-title"><a href="">Deluxe Room</a></h2>
                           <p class="text ">Extra spacious AC rooms, with all mordern facilities, provision for extra matress at additional cost of Rs.500.
                           </p>
                           <span class="price"> Tariff : Rs. 3000 <span class="gst-text">+GST</span> </span>
                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="list-style1">
                                       <ul class="list-unstyled">
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Complimentary Breakfast</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>24 hours Power Backup</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Air Conditioner</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Lift Facility</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Geyser</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Intercom</li>

                                       </ul>
                                   </div>

                               </div>
                               <div class="col-lg-6">
                                   <div class="list-style1">
                                       <ul class="list-unstyled">

                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Free Wifi</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Room Service</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Muti Cuisine AC Restaurent</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>RO Drinking Water</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>CCTV Suveillence</li>

                                       </ul>
                                   </div>

                               </div>
                           </div>
                           <button type="button" class="vs-btn" data-toggle="modal" data-target="#hotelModal">Book Now</button>

                       </div>

                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="product-style1">
                       <div class="product-img">
                           <img src="<?php echo base_url() ?>assets/web/img/about/semidelux.gif" alt="Semi Delux Room">
                       </div>
                       <div class="product-meta">30% Off</div>
                       <div class="product-about">
                           <h2 class="product-title"><a href="">Semi-Deluxe Room</a></h2>
                           <p class="text ">Twin sharing AC rooms with all modern facilities. Best suitable for couples and family with small children below 5 years.
                           </p>
                           <span class="price"> Tariff : Rs. 2000 <span class="gst-text">+GST</span> </span>
                           <div class="row">
                               <div class="col-lg-6">
                                   <div class="list-style1">
                                       <ul class="list-unstyled">
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Complimentary Breakfast</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>24 hours Power Backup</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Air Conditioner</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Lift Facility</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Geyser</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Intercom</li>

                                       </ul>
                                   </div>

                               </div>
                               <div class="col-lg-6">
                                   <div class="list-style1">
                                       <ul class="list-unstyled">

                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Free Wifi</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Room Service</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>Muti Cuisine AC Restaurent</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>RO Drinking Water</li>
                                           <li><span class="icon"><i class="far fa-check-circle"></i></span>CCTV Suveillence</li>

                                       </ul>
                                   </div>

                               </div>
                           </div>
                           <button type="button" class="vs-btn" data-toggle="modal" data-target="#hotelModal">Book Now</button>

                       </div>

                   </div>
               </div>



           </div>
       </div>
   </section>


   <!--==============================
    Project Area
    ============================== -->
   <section class="project-layout1 space">
       <div class="container">
           <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
               <div class="d-flex justify-content-between align-items-center">
                   <div class="title-left">
                       <span class="sec-subtitle">Our Popular package</span>
                       <h2 class="sec-title">Tour Package</h2>
                   </div>

               </div>
           </div>
           <div class="row " data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="false" data-center-mode="true">
               <?php foreach ($packages as $pack) : ?>
                   <div class="col-lg-4">
                       <div class="project-style1">
                           <div class="project-img">
                               <img src="<?php echo base_url('uploads/package/' . $pack->image); ?>" alt="project-img">
                               <span class="price">Starting @ - ₹ <?php echo $pack->min_price; ?></span>
                           </div>
                           <div class="project-content">
                               <h3 class="project-title"><a href="<?php echo base_url('package/' . url_title($pack->category_name, '-', TRUE)); ?>"><?php echo $pack->category_name; ?></a></h3>
                               <p class="project-text">Experience our <?php echo $pack->category_name; ?> in Andaman</p>
                               <div class="link-btn">
                                   <a href="<?php echo base_url('package/' . url_title($pack->category_name, '-', TRUE)); ?>">View Our Packages<i class="fas fa-angle-double-right"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               <?php endforeach; ?>

           </div>
           <span class="notice">Need help planning your stay or booking a tour? <a href="tel:+91-3192-235888">Call Us: +91-3192-235888</a></span>
       </div>
   </section>

   <!--==============================
    Blog Area
    ============================== -->
   <section class="blog-layout1 space">
       <div class="container">
           <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
               <span class="sec-subtitle">Blog</span>
               <h2 class="sec-title">Our Blogs</h2>
           </div>
           <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true" data-arrows="true">
               <?php foreach ($blog as $row): ?>
                   <div class="col-lg-4">
                       <div class="vs-blog blog-single">
                           <div class="blog-img">
                               <a href="<?= base_url('blog-view/' . $row->id) ?>"><img src="<?php echo base_url('uploads/blog/' . $row->image); ?>" alt="Blog Image"></a>
                           </div>
                           <div class="blog-content">
                               <div class="blog-meta">
                                   <a href="<?= base_url('blog-view/' . $row->id) ?>"><i class="fal fa-tag"></i>Andaman Travel Tips</a>
                               </div>
                               <h2 class="blog-title"><a href="<?= base_url('blog-view/' . $row->id) ?>"><?= $row->title; ?></a></h2>
                           </div>

                       </div>
                   </div>
               <?php endforeach; ?>
           </div>
           <div class="blog-btn">
               <a href="<?= base_url() . 'blog' ?>" class="vs-btn">View All Blogs</a>
           </div>
       </div>
   </section>
   <!--==============================
    Testmonial Area
    ============================== -->
   <section class="testimonial-layout2 space">
       <div class="container">
           <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
               <span class="sec-subtitle">What Does The Customer Have To Say?</span>
               <h2 class="sec-title">Clients Testimonials</h2>
           </div>
           <div class="row justify-content-center ">
               <div class="col-lg-10">
                   <div class="vs-carousel" data-arrows="false" data-center-mode="left" data-dots="true" data-autoplay="true" data-slide-show="1">
                       <?php foreach ($testimonial as $row): ?>
                           <div class="testi-style2">
                               <p class="testi-text">
                                   <?= $row->content; ?>
                               </p>
                               <div class="auther-inner">
                                   <div class="auther-img">
                                       <img src="<?php echo base_url() ?>assets/web/img/testimonial/testi-img-1-1.png" alt="testimonial">
                                       <div class="testi-icon"><i class="far fa-quote-left"></i></div>
                                   </div>
                                   <div class="auther-content">
                                       <h3 class="name h5"><?= $row->title; ?></h3>
                                       <span class="designation"><?= $row->heading; ?></span>

                                       <div class="rating">
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star"></i>
                                           <i class="fas fa-star"></i>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       <?php endforeach; ?>
                   </div>
               </div>
           </div>
       </div>
   </section>
   <div class="modal fade" id="hotelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <form action="" method="POST" id="hotelform">
               <div class="modal-content">
                   <div class="modal-header" style="background:#0A3C45;">
                       <h5 class="modal-title text-white" id="exampleModalLabel">Booking Room</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="row">
                           <div class="col-md-12">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <select class="form-control" name="hotel_room_type" id="hotel_room_type" aria-label="Default select example">
                                       <option value="0">Room Type</option>
                                       <option value="Delux">Delux</option>
                                       <option value="Semi Delux">Semi Delux</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-mobile"></i>
                                       </span>
                                   </div>
                                   <select class="form-control" name="hotel_no_of_rooms" id="hotel_no_of_rooms" aria-label="Default select example">
                                       <option value="0">Select Number of Rooms</option>
                                       <option value="1">1</option>
                                       <option value="2">2</option>
                                       <option value="3">3</option>
                                       <option value="4">4</option>
                                   </select>
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <label class="form-check-label" for="add_bed">Add Bed (Rs. 750 per bed)</label>
                               <div class="form-check">
                                   <input type="radio" class="form-check-input" id="add_bed1" name="add_bed" value="1">
                                   <label class="form-check-label" for="add_bed1">1</label>
                               </div>
                               <div class="form-check">
                                   <input type="radio" class="form-check-input" id="add_bed2" name="add_bed" value="2">
                                   <label class="form-check-label" for="add_bed2">2</label>
                               </div>
                               <div class="form-check">
                                   <input type="radio" class="form-check-input" id="add_bed3" name="add_bed" value="3">
                                   <label class="form-check-label" for="add_bed3">3</label>
                               </div>
                               <div class="form-check">
                                   <input type="radio" class="form-check-input" id="add_bed4" name="add_bed" value="4">
                                   <label class="form-check-label" for="add_bed4">4</label>
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <input type="text" name="price" class="form-control" id="price" placeholder="Price will be calculated here" readonly>
                                   <div class="input-group-append">
                                       <span class="input-group-text">+GST</span>
                                   </div>
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name">
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter Your mobile Number">
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <input type="text" name="location" class="form-control" id="location" placeholder="Enter Your location">
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <label for="">Check In</label>
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <input type="date" name="check_in" class="form-control" id="check_in" placeholder="Enter Date">
                               </div>
                           </div>
                           <div class="col-md-12 mt-3">
                               <label for="">Check Out</label>
                               <div class="input-group">
                                   <div class="input-group-prepend">
                                       <span class="input-group-text">
                                           <i class="fas fa-user"></i>
                                       </span>
                                   </div>
                                   <input type="date" name="check_out" class="form-control" id="check_out" placeholder="Enter Date">
                               </div>
                           </div>
                           <div class="g-recaptcha mt-3" data-sitekey="6LdSQz4qAAAAAAeyDrY6zgvpC9bUsDU0DbP718bQ"></div>

                       </div>
                   </div>
                   <div class="modal-footer" style="background:#0A3C45;">
                       <button type="submit" class="btn btn-info">Submit</button>
                   </div>
           </form>
       </div>
   </div>
   <style>
       .form-control {
           height: 30px !important;
       }
       .input-group-text{
        line-height: 1.0 !important;
       }
   </style>
   <script>
       function calculateTotalPrice() {
           let roomType = document.getElementById("hotel_room_type").value;
           let noOfRooms = parseInt(document.getElementById("hotel_no_of_rooms").value) || 0;
           let addBed = parseInt(document.querySelector('input[name="add_bed"]:checked')?.value || 0);

           let roomPrice = roomType === 'Delux' ? 3000 : roomType === 'Semi Delux' ? 2000 : 0;
           let bedPrice = addBed * 750;

           let totalPrice = (roomPrice * noOfRooms) + bedPrice;

           document.getElementById("price").value = totalPrice || 0;
       }

       document.getElementById("hotel_room_type").addEventListener("change", calculateTotalPrice);
       document.getElementById("hotel_no_of_rooms").addEventListener("change", calculateTotalPrice);
       document.querySelectorAll('input[name="add_bed"]').forEach(radio => {
           radio.addEventListener("change", calculateTotalPrice);
       });
       document.getElementById("hotelform").addEventListener("submit", function(e) {
           e.preventDefault();
           let formData = new FormData(this);

           fetch('Web/hotel_enqury_save', {
                   method: 'POST',
                   body: formData
               })
               .then(response => response.json())
               .then(data => {
                   if (data.status === 'success') {
                       Swal.fire({
                           title: "Success",
                           text: data.message,
                           icon: "success",
                           confirmButtonText: "Okay",
                           allowOutsideClick: false
                       }).then(() => {
                           location.reload();
                       });
                   } else {
                       Swal.fire({
                           title: "Error",
                           text: data.message,
                           icon: "error",
                           confirmButtonText: "Okay"
                       });
                   }
               })
               .catch(error => {
                   Swal.fire({
                       title: "Error",
                       text: "Something went wrong!",
                       icon: "error",
                       confirmButtonText: "Okay"
                   });
               });
       });
   </script>
   <script>
       document.getElementById("enqury_form").addEventListener("submit", function(e) {
           e.preventDefault();

           let formData = new FormData(this);

           document.querySelectorAll('.error').forEach((span) => {
               span.innerText = '';
           });

           fetch('Web/enqury_save', {
                   method: 'POST',
                   body: formData
               })
               .then(response => response.json())
               .then(data => {
                   if (data.status === 'success') {
                       Swal.fire({
                           title: "Success",
                           text: data.message,
                           icon: "success",
                           confirmButtonText: "Okay",
                           allowOutsideClick: false
                       }).then(() => {
                           location.reload();
                       });
                   } else {
                       if (data.errors) {
                           if (data.errors.name) {
                               document.getElementById('room_type').innerText = data.errors.name;
                           }
                       } else {
                           Swal.fire({
                               title: "Error",
                               text: data.message,
                               icon: "error",
                               confirmButtonText: "Okay"
                           });
                       }
                   }
               })
               .catch(error => {
                   Swal.fire({
                       title: "Error",
                       text: "Something went wrong!",
                       icon: "error",
                       confirmButtonText: "Okay"
                   });
               });
       });
   </script>