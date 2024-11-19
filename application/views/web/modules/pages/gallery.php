<!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="<?php echo base_url() ?>assets/web/img/breadcumb/breadcumb-bg1.jpg">
  <div class="container z-index-common">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title">Our Gallery</h1>
    </div>
    <div class="breadcumb-menu-wrap">
      <ul class="breadcumb-menu">
        <li><a href="<?php echo base_url(); ?>">Home</a></li>
        <li>Our Gallery</li>
      </ul>
    </div>
  </div>
</div>

<section class="vs-blog-wrapper space-top space-extra-bottom" id="category-section">
  <div class="container">
    <div class="title-area text-center wow fadeInUp" data-wow-delay="0.3s">
      <span class="sec-subtitle">Gallery</span>
      <h2 class="sec-title">Our Gallery</h2>
    </div>
    <div class="row">
      <?php foreach ($gallery_category as $row): ?>
        <div class="col-lg-4">
          <div class="vs-blog blog-single rounded-2" style="overflow: hidden;">
            <div class="blog-img">
              <a href="javascript:void(0);" class="show-gallery" data-gallery-id="<?= $row->id; ?>" data-category-name="<?= $row->category_name; ?>">
                <img src="<?php echo base_url('uploads/gallery/' . $row->image); ?>" alt="<?= $row->category_name; ?>" />
              </a>
            </div>
            <div class="blog-content">
              <div class="blog-meta">
                <a href="javascript:void(0);" class="show-gallery" data-gallery-id="<?= $row->id; ?>" data-category-name="<?= $row->category_name; ?>">
                  <i class="fal fa-tag"></i><?= $row->category_name; ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="blog-layout1 space" id="gallery-section" style="display: none;">
  <div class="container">
    <div class="title-area text-center">
      <span class="sec-subtitle">Gallery</span>
      <h2 class="sec-title" id="gallery-title"></h2>
    </div>
    <div class="row" id="gallery-images">
      <!-- Dynamically populated images will appear here -->
    </div>
    <div class="text-center">
      <button id="back-button" class="btn btn-primary mt-4">Back to Gallery</button>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const galleryLinks = document.querySelectorAll(".show-gallery");
    const categorySection = document.getElementById("category-section");
    const gallerySection = document.getElementById("gallery-section");
    const galleryTitle = document.getElementById("gallery-title");
    const galleryImages = document.getElementById("gallery-images");
    const backButton = document.getElementById("back-button");

    galleryLinks.forEach((link) => {
        link.addEventListener("click", function () {
            const galleryId = this.dataset.galleryId;
            const categoryName = this.dataset.categoryName;

            galleryTitle.textContent = categoryName;
            galleryImages.innerHTML = "";

            fetch("<?php echo base_url('Web/fetch_images'); ?>", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ gallery_id: galleryId }),
            })
                .then((response) => response.json())
                .then((data) => {
                    if (data.success) {
                        if (data.images.length > 0) {
                            data.images.forEach((image, index) => {
                                const colDiv = document.createElement("div");
                                colDiv.className = "col-lg-4";
                                const imgDiv = document.createElement("div");
                                imgDiv.className = "gallery-item";
                                const imgElement = document.createElement("img");
                                imgElement.src = "<?php echo base_url('uploads/gallery/'); ?>" + image.image;
                                imgElement.alt = "Gallery Image";
                                imgElement.setAttribute("data-index", index + 1);

                                imgDiv.appendChild(imgElement);
                                colDiv.appendChild(imgDiv);
                                galleryImages.appendChild(colDiv);
                            });

                            const galleryItems = document.querySelectorAll(".gallery-item img");
                            galleryItems.forEach((item) => {
                                item.addEventListener("click", currentImage);
                            });
                        } else {
                            galleryImages.innerHTML = "<p class='text-center'>No images available for this category.</p>";
                        }

                        categorySection.style.display = "none";
                        gallerySection.style.display = "block";
                    } else {
                        console.error("Error fetching gallery images:", data.message);
                    }
                })
                .catch((error) => {
                    console.error("AJAX error:", error);
                });
        });
    });

    backButton.addEventListener("click", function () {
        gallerySection.style.display = "none";
        categorySection.style.display = "block";
    });

    const galleryItem = document.getElementsByClassName("gallery-item");
    const lightBoxContainer = document.createElement("div");
    const lightBoxContent = document.createElement("div");
    const lightBoxImg = document.createElement("img");
    const lightBoxPrev = document.createElement("div");
    const lightBoxNext = document.createElement("div");

    lightBoxContainer.classList.add("lightbox");
    lightBoxContent.classList.add("lightbox-content");
    lightBoxPrev.classList.add("fa", "fa-angle-left", "lightbox-prev");
    lightBoxNext.classList.add("fa", "fa-angle-right", "lightbox-next");

    lightBoxContainer.appendChild(lightBoxContent);
    lightBoxContent.appendChild(lightBoxImg);
    lightBoxContent.appendChild(lightBoxPrev);
    lightBoxContent.appendChild(lightBoxNext);

    document.body.appendChild(lightBoxContainer);

    let index = 1;

    function showLightBox(n) {
        if (n > galleryItem.length) {
            index = 1;
        } else if (n < 1) {
            index = galleryItem.length;
        }
        let imageLocation = galleryItem[index - 1].children[0].getAttribute("src");
        lightBoxImg.setAttribute("src", imageLocation);
    }

    function currentImage() {
        lightBoxContainer.style.display = "block";

        let imageIndex = parseInt(this.getAttribute("data-index"));
        showLightBox(index = imageIndex);
    }

    function slideImage(n) {
        showLightBox(index += n);
    }

    function prevImage() {
        slideImage(-1);
    }

    function nextImage() {
        slideImage(1);
    }

    lightBoxPrev.addEventListener("click", prevImage);
    lightBoxNext.addEventListener("click", nextImage);

    function closeLightBox(event) {
        if (this === event.target) {
            lightBoxContainer.style.display = "none";
        }
    }

    lightBoxContainer.addEventListener("click", closeLightBox);
});

</script>
