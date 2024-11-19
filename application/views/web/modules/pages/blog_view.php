<!--==============================
    Breadcumb
    ============================== -->
    <div
      class="breadcumb-wrapper"
      data-bg-src="<?php echo base_url() ?>assets/web/img/breadcumb/breadcumb-bg1.jpg"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Our Blog Details</h1>
        </div>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Our Blog Details</li>
          </ul>
        </div>
      </div>
    </div>

    <!--==============================
    Blog Details Area
    ==============================-->
    <section class="vs-blog-wrapper blog-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-12">
                    <div class="vs-blog">
                        <div class="blog-content">
                            <div class="mb-30">
                                <img src="<?php echo base_url('uploads/blog/' . $blog->image); ?>" class="w-100" alt="Andaman Islands Beach">
                            </div>
                            <div class="blog-meta">
                                <a href="#"><i class="fal fa-tag"></i>Andaman Tourism</a>
                            </div>
                            <h2 class="blog-title"><a href="blog-details.html"><?= $blog->title;?></a></h2>
                            <p class="blog-text">
                            <?= $blog->description;?>
                            </p>
                        </div>


                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>