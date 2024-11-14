<style>
  .pa {
    width: 100%;
    height: 100px;
  }
</style>
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Home /</span> Package Type
    </h4>

    <div class="row">
      <!-- FormValidation -->
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="<?php echo base_url('package/save_type_package'); ?>" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
              <input type="hidden" id="type_id" name="type_id">
              <div class="col-12">
                <label class="form-label" for="category_name">Package Name</label>
                <input class="form-control" type="text" id="category_name" name="category_name">
              </div>
              <div class="col-12">
                <label class="form-label" for="type_name">Package Type</label>
                <input class="form-control" type="text" id="type_name" name="category_type">
              </div>

              <div class="col-12">
                <label class="form-label" for="image">Image</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>

              <div class="col-12">
                <button type="submit" name="submitButton" class="btn btn-info">Submit</button>
              </div>
            </form>

            <div class="table-responsive text-nowrap mt-5">
              <table class="table table-hover">
                <thead class="table-dark">
                  <tr>
                    <th class="text-white">S.No</th>
                    <th class="text-white">Package Name</th>
                    <th class="text-white">Type Name</th>
                    <th class="text-white">Image</th>
                    <th class="text-white">Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                  <?php $i = 1;
                  foreach ($type as $row): ?>
                    <tr>
                      <td><span class="fw-medium"><?php echo $i++; ?></span></td>
                      <td>
                        <span class="category-type"><?php echo $row->category_name; ?></span>
                      </td>
                      <td>
                        <span class="category-type"><?php echo $row->category_type; ?></span>
                        <input type="hidden" class="type-id" value="<?php echo $row->id; ?>">
                      </td>
                      <td style="width:25%;">
                        <?php if ($row->image != ''): ?>
                          <img src="<?php echo base_url('uploads/package/' . $row->image); ?>" alt="package_andaman" class="pa">
                        <?php endif; ?>
                      </td>
                      <td>
                        <div class="dropdown">
                          <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item text-info edit-type" href="#" data-id="<?php echo $row->id; ?>"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                            <a class="dropdown-item text-danger delete-type" href="<?php echo base_url('package/type_delete/' . $row->id); ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /FormValidation -->
    </div>
  </div>
  <!-- / Content -->
</div>

<script>
  $(document).ready(function() {
    // Edit category click handler
    $('.edit-type').on('click', function(e) {
      e.preventDefault();
      var typeId = $(this).data('id');
      editType(typeId);
    });

    // Function to fetch category details via AJAX
    function editType(id) {
      $.ajax({
        url: '<?php echo base_url('package/get_type_details'); ?>',
        type: 'POST',
        dataType: 'json',
        data: {
          id: id
        },
        success: function(response) {
          $('#type_id').val(response.id);
          $('#category_name').val(response.category_name);
          $('#type_name').val(response.category_type);
        },
        error: function(xhr, status, error) {
          console.error('AJAX Error: ' + status + ' - ' + error);
        }
      });
    }
  });
</script>