<!--==============================
    Breadcumb
    ============================== -->
    <div
      class="breadcumb-wrapper"
      data-bg-src="<?php echo base_url() ?>assets/web/img/breadcumb/breadcumb-bg1.jpg"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Our Contact</h1>
        </div>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Our Contact</li>
          </ul>
        </div>
      </div>
    </div>

        <!--==============================
    Contact Area
    ============================== -->
    <section class="contact-layout1 space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="title-area wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle">CONTACT US</span>
                        <h2 class="sec-title">We're Here to Help You. Get in Touch with Our Team!</h2>
                    </div>
                    <div class="vs-comment-form">
                        <div id="respond" class="comment-respond">
                            <div class="form-title">
                                <p class="media-title">Please fill out the form below and one of our recruitment specialists will back in touch shortly.</p>
                            </div>
                            <form id="contactForm" class="form-style3 ajax-contact">
                                <div class="row">
                                    <div class="col-12  form-group">
                                        <textarea name="message" class="form-control" placeholder="Message" required=""></textarea>
                                      </div>
                                    <div class="col-md-6 form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Name" required="">
                                    <span class="error text-danger" id="name_error"></span>
                                  </div>
                                  <div class="col-6 form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Email Address" required="">
                                    <span class="error text-danger" id="email_error"></span>
                                  </div>
                                  <div class="col-12 ">
                                    <div class="custom-checkbox notice">
                                        <input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
                                        <label for="wp-comment-cookies-consent"> Save my name, email, and website in this browser for the next time I comment.</label>
                                        <div class="g-recaptcha" data-sitekey="6LdSQz4qAAAAAAeyDrY6zgvpC9bUsDU0DbP718bQ"></div>
                                    </div>
                                </div>
                                  <div class="col-12 form-group">
                                    <button class="vs-btn" type="submit">
                                      Send Message
                                    </button>
                                  </div>
                                </div>
                            </form>
                            <!-- <p class="form-messages mb-0 mt-3"></p> -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="contact-left">
                       
                        <div class="team-media">
                            <h2 class="contact-title">Contact Details</h2>
                            <div class="media-style1">
                                <div class="media-icon"><img src="<?php echo base_url() ?>assets/web/img/icon/icon-1-1.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Phone No:</h3>
                                    <p class="media-info"><a href="tel:+913192235888">+91-3192-235888, </a> <br>7063956455</p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="<?php echo base_url() ?>assets/web/img/icon/icon-1-2.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Email Address:</h3>
                                    <p class="media-info"><a href="mailto:booking@innfinityandaman.com">booking@innfinityandaman.com</a> <br></p>
                                </div>
                            </div>
                            <div class="media-style1">
                                <div class="media-icon"><img src="<?php echo base_url() ?>assets/web/img/icon/icon-1-3.png" alt="icon"></div>
                                <div class="media-body">
                                    <h3 class="media-title">Locatoin:</h3>
                                    <p class="media-info">88 MA Road, Phongy Chang, Port Blair, A&N Islands</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3907.367848385031!2d92.73466897586813!3d11.668321642108245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87215f081cd38921%3A0xbae8e9693c573ddb!2sInnfinity%20Travels%20Andaman!5e0!3m2!1sen!2sin!4v1731925138651!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <script>
  document.getElementById("contactForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let formData = new FormData(this);

    document.querySelectorAll('.error').forEach((span) => {
      span.innerText = '';
    });

    fetch('Web/contact_save', {
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
              document.getElementById('name_error').innerText = data.errors.name;
            }
            if (data.errors.email) {
              document.getElementById('email_error').innerText = data.errors.email;
            }
            if (data.errors.phone_number) {
              document.getElementById('phone_number_error').innerText = data.errors.phone_number;
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