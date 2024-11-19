    <!--==============================
    Breadcumb
    ============================== -->
    <div
      class="breadcumb-wrapper"
      data-bg-src="<?php echo base_url() ?>assets/web/img/breadcumb/breadcumb-bg1.jpg">
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
                    <button type="button" data-toggle="modal" data-target="#exampleModal">Request <i class="far fa-phone-alt"></i></button>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
      <form action="" method="POST" id="toureform">
        <div class="modal-content">
          <div class="modal-header" style="background:#0A3C45;">
            <h5 class="modal-title text-white" id="exampleModalLabel">Andaman Quote</h5>
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
                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your name">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-mobile"></i>
                      </span>
                    </div>
                    <input type="text" name="mobile_no" class="form-control" id="mobile_no" placeholder="Enter your mobile">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Email">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" name="adult" class="form-control" id="adult" placeholder="Enter No of Adult">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="text" name="below_child" class="form-control" id="below_child" placeholder="Enter No of Child Below age 5">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <input type="date" name="date" class="form-control" id="date" placeholder="Enter Date">
                  </div>
                </div>
                <div class="col-md-12 mt-3">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-user"></i>
                      </span>
                    </div>
                    <select class="form-control" name="vacation_type" id="exampleFormControlSelect1" aria-label="Default select example">
                      <option selected="">Vaction Type</option>
                      <?php $i = 1;
                      foreach ($pack as $row) :
                      ?>
                        <option name="vacation_type" value="<?php echo $row->category_name; ?>"><?php echo $row->category_name; ?></option>
                      <?php endforeach; ?>
                    </select>
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
    </div>
    <style>
      .form-control {
        height: 30px !important;
      }
    </style>
    <script>
       document.getElementById("toureform").addEventListener("submit", function(e) {
           e.preventDefault();

           let formData = new FormData(this);

           document.querySelectorAll('.error').forEach((span) => {
               span.innerText = '';
           });

           fetch('<?php echo base_url("Web/tour_enqury_save"); ?>', {
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
                               document.getElementById('fullname').innerText = data.errors.name;
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