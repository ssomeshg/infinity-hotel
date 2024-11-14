<!DOCTYPE html>
<html lang="en">

<head>
  <title>The Infinnity Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/web/img/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/web/assets/img/favicon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="<?= base_url() . 'assets/plugins/jquery/jquery.min.js' ?>"></script>
  <link rel="stylesheet" href="<?= base_url() . 'assets/toastr/toastr.css' ?>">
  <script src="<?= base_url() . 'assets/toastr/toastr.js' ?>"></script>
</head>
<body>
  <style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }

    .h-custom {
      height: calc(100% - 73px);
    }

    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
  </style>
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6 col-lg-6 col-xl-5 mb-5">
          <img src="<?php echo base_url() ?>assets/web/img/logo-infinity.png" width="100%" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-6 col-lg-6 col-xl-4 mb-4 offset-xl-1">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h2 class="mb-1">Welcome !!</h2>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0" style="color:#002044">Admin Login</p>
          </div>

          <form id="LoginForm" autocomplete="OFF">
            <div data-mdb-input-init class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" placeholder="Enter a valid Email" />
              <label class="form-label" for="form3Example3">Email</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-3">
              <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" placeholder="Enter password" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- <div class="d-flex justify-content-between align-items-center">
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
            </div> -->

            <div class="text-center text-lg-start mt-4 pt-2" style="text-align-last: right;">
              <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;background-color:#002044;color:white"> Sign In</button>
            </div>
			
          </form>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5" style="background-color:#002044">
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2024. All rights reserved By Addobyte Technologies.
      </div>
    </div>
  </section>
  <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <script>
    $("#LoginForm").on('submit', (function(e) {
      e.preventDefault();
      var formData = new FormData($("#LoginForm")[0]);
      $.ajax({
        url: "<?= base_url() . 'admin_loginCheck' ?>",
        type: "POST",
        data: formData,
        dataType: "JSON",
        contentType: false,
        cache: false,
        processData: false,
        beforeSend: function() {
          $("#LoginForm [type='submit']").attr('disabled', true);
        },
        success: function(data) {
          if (data['status'] == "Error") {
            toastr.error(data['msg']);
          } else {
            $("#LoginForm").html('<div class="alert alert-success">Login Processing !!!</div>');
            window.location.href = data['link'];
          }
        },
        complete: function(data) {
          $("#LoginForm [type='submit']").attr('disabled', false);
        },
      });
    }));
  </script>
</body>

</html>