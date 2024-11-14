<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Home /</span> Package Edit Plans
        </h4>

        <div class="row">
            <!-- FormValidation -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo base_url(); ?>package/package_plan_update" method="POST" enctype="multipart/form-data" id="formValidationExamples" class="row g-3 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                            <div style="text-align:end;">
								<a id="addInputTextarea" class="extra-fields-customer btn btn-info" href="#" data-package-id="<?php echo $package_id; ?>"><i class='bx bx-plus'></i> Add </a>
                            </div>
                            <div id="container">
                                <?php foreach ($package as $index => $row): ?>
                                    <input type="hidden" name="id[]" value="<?php echo $row->id; ?>">
									<input type="hidden" name="package_id" value="<?php echo $row->package_id; ?>">
                                    <div class="col-12">
                                        <div class="item d-flex justify-content-between align-items-center m-2">
                                            <div>
                                                <label class="form-label" for="plan_title_<?php echo $index; ?>">Plan Title</label>
                                            </div>
                                        </div>
                                        <input type="text" name="plan_title[]" id="plan_title_<?php echo $index; ?>" class="form-control" placeholder="Enter Title" value="<?php echo $row->plan_title; ?>">
                                    </div>

                                    <div class="col-12">
                                        <label class="form-label" for="plan_description_<?php echo $index; ?>">Plan Description</label>
                                        <textarea name="plan_description[]" id="plan_description_<?php echo $index; ?>" class="form-control tinymce" rows="5"><?php echo $row->plan_description; ?></textarea>
                                    </div>
                                    <div class="d-flex justify-content-between mt-1">
                                        <div class="">
                                            <input type="submit" name="submitButton" class="btn btn-info" value="Update">
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-danger delete-plan-btn" data-id="<?php echo $row->id; ?>">Delete</button>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <div id="dynamicPlans">
                                    <!-- New plans will be dynamically added here -->
                                </div>
                            </div>
                            <div id="submitContainer" style="display: none;">
                                <input type="submit" name="submitButton" class="btn btn-info mt-3" value="Submit">
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
        var index = document.querySelectorAll('#container > div').length;
		
		var packageId = document.getElementById('addInputTextarea').getAttribute('data-package-id');

        var container = document.createElement('div');
        container.className = 'col-12 mt-2';

        var inputLabel = document.createElement('label');
        inputLabel.className = 'form-label';
        inputLabel.textContent = 'Plan Title';
		
		var newInput1 = document.createElement('input');
		newInput1.type = 'hidden';
		newInput1.name = 'package_id';
		newInput1.className = 'form-control';
		newInput1.value = packageId;

        var newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'plan_title[]';
        newInput.id = 'plan_title_' + index;
        newInput.className = 'form-control';
        newInput.placeholder = 'Enter Title';

        var textareaLabel = document.createElement('label');
        textareaLabel.className = 'form-label mt-2';
        textareaLabel.textContent = 'Plan Description';

        var newTextarea = document.createElement('textarea');
        newTextarea.name = 'plan_description[]';
        newTextarea.id = 'plan_description_' + index;
        newTextarea.className = 'form-control tinymce';
        newTextarea.rows = '5';

        var deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.className = 'btn btn-danger mt-2 text-end';

        container.appendChild(inputLabel);
        container.appendChild(newInput1);
        container.appendChild(newInput);
        container.appendChild(textareaLabel);
        container.appendChild(newTextarea);
        container.appendChild(deleteButton);

        document.getElementById('container').appendChild(container);

        initTinyMCE('.tinymce');

        deleteButton.addEventListener('click', function() {
            container.remove();
        });

        // Show submit button when a new plan is added
        document.getElementById('submitContainer').style.display = 'block';
    }

    document.getElementById('addInputTextarea').addEventListener('click', addInputTextarea);

    // Delete button click event
    document.querySelectorAll('.delete-plan-btn').forEach(button => {
        button.addEventListener('click', function() {
            var planId = this.getAttribute('data-id');
            if (confirm('Are you sure you want to delete this plan?')) {
                fetch('<?php echo base_url(); ?>package/delete_plan', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ id: planId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        location.reload();
                    } else {
                        alert('Failed to delete the plan.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    });
</script>
