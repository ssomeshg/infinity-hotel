<!--==============================
    Breadcumb
    ============================== -->
    <div
      class="breadcumb-wrapper"
      data-bg-src="<?php echo base_url() ?>assets/web/img/breadcumb/breadcumb-bg1.jpg"
    >
      <div class="container z-index-common">
        <div class="breadcumb-content">
          <h1 class="breadcumb-title">Our Blog</h1>
        </div>
        <div class="breadcumb-menu-wrap">
          <ul class="breadcumb-menu">
            <li><a href="index.html">Home</a></li>
            <li>Our Blog</li>
          </ul>
        </div>
      </div>
    </div>

    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row">
            <?php foreach ($blog as $row): ?>
                <div class="col-lg-6">
                    <div class="vs-blog blog-single rounded-2" style="overflow: hidden;">
                        <div class="blog-img">
                            <a href="<?= base_url('blog-view/' . $row->id) ?>"><img src="<?php echo base_url('uploads/blog/' . $row->image); ?>" alt="Andaman Beach"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="<?= base_url('blog-view/' . $row->id) ?>"><i class="fal fa-tag"></i>Andaman Tourism</a>
                            </div>
                            <h2 class="blog-title">
                                <a href="<?= base_url('blog-view/' . $row->id) ?>"><?= $row->title; ?></a>
                            </h2>
                            <p class="blog-text">
                            <?= $row->description; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                 

                    <div class="vs-pagination">
                        <ul>
                            <li class="arrow"><a href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">6</a></li>
                            <li class="arrow"><a href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                        </ul>
                    </div>
                
                
            </div>
        </div>
    </section>