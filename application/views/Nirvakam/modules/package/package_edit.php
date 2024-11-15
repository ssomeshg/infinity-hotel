<div class="content-wrapper">

  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">


    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Home /</span> Package Create
    </h4>

    <div class="row">
      <!-- FormValidation -->
      <div class="col-12">
        <div class="card">
          <div class="card-body">

            <form action="<?= base_url() . 'package_update' ?>" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
              <input type="hidden" name="id" value="<?php echo isset($package) ? $package->id : ''; ?>">

              <div class="col-md-6 fv-plugins-icon-container">
                <label class="form-label" for="formValidationName">Select Package</label>
                <select class="form-select" name="category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected="">Select Category</option>
                  <?php foreach ($package_list as $row): ?>
                    <option value="<?php echo $row->id; ?>" <?php echo isset($package) && $package->category_id == $row->id ? 'selected' : ''; ?>>
                      <?php echo $row->category_name; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-6 fv-plugins-icon-container">
                <label class="form-label" for="formValidationName">Package Type</label>
                <select class="form-select" name="type_id" id="exampleFormControlSelect1" aria-label="Default select example">
                  <option selected="">Package Type</option>
                  <?php foreach ($type_list as $row): ?>
                    <option value="<?php echo $row->id; ?>" <?php echo isset($package) && $package->type_id == $row->id ? 'selected' : ''; ?>>
                      <?php echo $row->category_type; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-6 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Image</label>
                <input class="form-control" type="file" id="formValidationFile" name="image">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-6">
                <label class="form-label" for="bootstrap-maxlength-example2">Package Title</label>
                <input class="form-control" type="text" id="formValidationFile" name="package_heading" value="<?php echo isset($package) ? $package->package_heading : '' ?>">
              </div>

              <div class="col-6">
                <label class="form-label" for="bootstrap-maxlength-example2">Day Plans</label>
                <input class="form-control" type="text" id="formValidationFile" name="day_plans" value="<?php echo isset($package) ? $package->day_plans : '' ?>">
              </div>

              <div class="col-12">
                <label class="form-label" for="bootstrap-maxlength-example2">Place To Destination</label>
                <input class="form-control" type="text" id="formValidationFile" name="place" value="<?php echo isset($package) ? $package->place : '' ?>">
              </div>

              <div class="col-md-12 fv-plugins-icon-container">
                <label class="form-label" for="formValidationEmail">Package Content</label>
                <textarea id="file-picker" name="package_content" class="form-control bootstrap-maxlength-example" rows="5"><?php echo isset($package) ? $package->package_content : '' ?></textarea>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-4 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Package Standard Cost</label>
                <input class="form-control" type="number" id="formValidationFile" name="standard_cost" value="<?php echo isset($package) ? $package->standard_cost : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-4 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Package Luxury Cost</label>
                <input class="form-control" type="number" id="formValidationFile" name="luxury_cost" value="<?php echo isset($package) ? $package->luxury_cost : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-4 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Package Royal Cost</label>
                <input class="form-control" type="number" id="formValidationFile" name="royal_cost" value="<?php echo isset($package) ? $package->royal_cost : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-4 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Package Standard MRP Price</label>
                <input class="form-control" type="number" id="formValidationFile" name="standard_price" value="<?php echo isset($package) ? $package->standard_price : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-4 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Package Luxury MRP Price</label>
                <input class="form-control" type="number" id="formValidationFile" name="luxury_price" value="<?php echo isset($package) ? $package->luxury_price : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-4 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Package Royal MRP Price</label>
                <input class="form-control" type="number" id="formValidationFile" name="royal_price" value="<?php echo isset($package) ? $package->royal_price : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>
              <div class="col-md-4">
                <label class="form-label" for="bootstrap-maxlength-example2">Standard Description</label>
                <textarea id="file-picker" name="standard_description" class="form-control bootstrap-maxlength-example" rows="3"><?php echo isset($package) ? $package->standard_description : '' ?></textarea>
              </div>

              <div class="col-md-4">
                <label class="form-label" for="bootstrap-maxlength-example2">Luxury Description</label>
                <textarea id="file-picker" name="luxury_description" class="form-control bootstrap-maxlength-example" rows="3"><?php echo isset($package) ? $package->luxury_description : '' ?></textarea>
              </div>

              <div class="col-md-4">
                <label class="form-label" for="bootstrap-maxlength-example2">Royal Description</label>
                <textarea id="file-picker" name="royal_description" class="form-control bootstrap-maxlength-example" rows="3"><?php echo isset($package) ? $package->royal_description : '' ?></textarea>
              </div>

              <div class="col-md-3 fv-plugins-icon-container">
                <label for="formValidationFile" name="adult" class="form-label">Adult</label>
                <input class="form-control" type="number" id="formValidationFile" name="adult" value="<?php echo isset($package) ? $package->adult : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>

              <div class="col-md-3 fv-plugins-icon-container">
                <label for="formValidationFile" name="child" class="form-label">Child(above 5 years)</label>
                <input class="form-control" type="number" id="formValidationFile" name="child" value="<?php echo isset($package) ? $package->child : '' ?>">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>



              <div class="col-12">
                <label class="form-label" for="bootstrap-maxlength-example2">Package Inclusions</label>
                <textarea id="file-picker" name="package_inclusion" class="form-control bootstrap-maxlength-example" rows="5"><?php echo isset($package) ? $package->package_inclusion : '' ?></textarea>
              </div>

              <div class="col-12">
                <div class="item d-flex justify-content-between align-items-center m-2">
                  <div>
                    <label class="form-label" for="bootstrap-maxlength-example2">Package exclusions</label>
                  </div>
                </div>
                <textarea id="file-picker" name="package_exclusions" class="form-control bootstrap-maxlength-example" rows="5"><?php echo isset($package) ? $package->package_exclusions : '' ?></textarea>
              </div>

              <div class="col-md-6 fv-plugins-icon-container">
                <label for="formValidationFile" name="image" class="form-label">Multiple Image</label>
                <input class="form-control" type="file" id="formValidationFile" name="image_bundle[]" multiple>
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
              </div>



              <div class="col-12">
                <button type="submit" name="submitButton" class="btn btn-info">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /FormValidation -->
    </div>


  </div>
  <!-- / Content -->

</div>


<script src="https://cdn.tiny.cloud/1/xlfeurntq9y7i4xekogr2t4bmyapgkvf5omt3qefzg3qda4b/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#file-picker',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>