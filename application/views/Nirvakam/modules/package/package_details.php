<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4">
      <span class="text-muted fw-light">Home /</span> Package plans
    </h4>

    <div class="row">
      <!-- FormValidation -->
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <form action="<?= base_url() . 'package_active_save' ?>" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
              <input class="form-control" type="hidden" id="formValidationFile" name="package_id" value="<?php echo isset($package) ? $package->id : ''; ?>">
              <div id="container">
                <div style="text-align:end;">
                  <a id="addInputTextarea" class="extra-fields-customer btn btn-info" href="#"><i class='bx bx-plus'></i>Add </a>
                </div>
                <div class="col-12">
                  <div class="item d-flex justify-content-between align-items-center m-2">
                    <div>
                      <label class="form-label" for="plan_title[]">Plan Title</label>
                    </div>
                  </div>
                  <input type="text" name="plan_title[]" class="form-control" placeholder="Enter Title">
                </div>

                <div class="col-12">
                  <label class="form-label" for="plan_description[]">Plan Description</label>
                  <textarea id="file-picker" name="plan_description[]" class="form-control tinymce" rows="5"></textarea>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" name="submitButton" class="btn btn-info">Submit</button>
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
        // Function to initialize TinyMCE
         function initTinyMCE(selector) {
            tinymce.init({
                selector: selector,
                plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
        } 

        initTinyMCE('.tinymce');

        function addInputTextarea(event) {
            event.preventDefault();

            // Create container div to hold input, textarea, labels and delete button
            var container = document.createElement('div');
            container.className = 'col-12 mt-2';

            // Create label for input
            var inputLabel = document.createElement('label');
            inputLabel.className = 'form-label';
            inputLabel.textContent = 'Plan Title';

            // Create new input field
            var newInput = document.createElement('input');
            newInput.type = 'text';
            newInput.name = 'plan_title[]';
            newInput.className = 'form-control';
            newInput.placeholder = 'Enter Title';

            // Create label for textarea
            var textareaLabel = document.createElement('label');
            textareaLabel.className = 'form-label mt-2';
            textareaLabel.textContent = 'Plan Description';

            // Create new textarea
            var newTextarea = document.createElement('textarea');
            newTextarea.name = 'plan_description[]';
            newTextarea.className = 'form-control tinymce';
            newTextarea.rows = '5';

            // Create delete button
            var deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.className = 'btn btn-danger mt-2 text-end';
			

            // Append input, textarea, labels, and delete button to container
            container.appendChild(inputLabel);
            container.appendChild(newInput);
            container.appendChild(textareaLabel);
            container.appendChild(newTextarea);
            container.appendChild(deleteButton);

            // Append container to the main container
            document.getElementById('container').appendChild(container);

            // Initialize TinyMCE on the new textarea
            initTinyMCE('.tinymce');

            // Add event listener to delete button
            deleteButton.addEventListener('click', function() {
                // Remove the container div when delete button is clicked
                container.remove();
            });
        }

        // Add event listener to add input and textarea button
        document.getElementById('addInputTextarea').addEventListener('click', addInputTextarea);
    </script>
