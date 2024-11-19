<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-header">Gallery Details </h5>
                        <a href="<?= base_url() . 'gallery_list' ?>" class="btn btn-primary d-block m-3">
                            <i class='bx bx-list-ul'></i> List </a>
                    </div>
                    <div class="card-body">
                        <?php if ($this->session->flashdata('success')) : ?>
                            <div class="flash-message_success">
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($this->session->flashdata('error')) : ?>
                            <div class="flash-message_error">
                                <?php echo $this->session->flashdata('error'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url() . 'gallery_save' ?>" method="post" enctype="multipart/form-data" onSubmit="return validate();" autocomplete="off">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($gallery->id) ? $gallery->id : ''; ?>" />
                            <div class="row">
                                <div class="col-md-12 fv-plugins-icon-container">
                                    <label class="form-label" for="formValidationName">Select Package</label>
                                    <select class="form-select" name="gallery_category_id" id="exampleFormControlSelect1" aria-label="Default select example">
                                        <option selected="">Select Category</option>
                                        <?php $i = 1;
                                        foreach ($gallery_category as $row):
                                        ?>
                                            <option value="<?php echo $row->id ?>"><?php echo $row->category_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                </div>

                                <div class="col-md-12">
                                    <label class="col-sm- col-form-label" for="category_name">Title</label>
                                    <input type="text" class="form-control" name="title" id="username" placeholder="Enter Title" value="<?php echo isset($gallery->title) ? $gallery->title : ''; ?>" />
                                    <div> <span id="username_error" style="color:red"></span></div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label" for="bootstrap-maxlength-example2">Description</label>
                                    <textarea id="file-picker" name="description" class="form-control bootstrap-maxlength-example" rows="5"><?php echo isset($gallery->description) ? $gallery->description : ''; ?></textarea>
                                </div>

                                <div class="col-sm-12">
                                    <label class="col-md-5 col-form-label" for="category_name">Image</label>
                                    <input type="file" class="form-control" name="image" id="password" placeholder="Enter Password" />
                                    <div> <span id="password_error" style="color:red"></span></div>
                                </div>

                                <div class="col-sm-12 mt-3" align=right>
                                    <?php
                                    if (!empty($blog)) {
                                        echo "<input type='submit' class='btn btn-primary' value='Update'>";
                                    } else {
                                        echo "<input type='submit' class='btn btn-primary' value='Submit'>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    // function validate() {
    //     $("#username_error").html("");
    //     $("#password_error").html("");
    //     $("#mobile_error").html("");

    //     var username = $("#username").val();
    //     var email = $("#email").val();
    //     var password = $("#password").val();

    //     if (username == "") {
    //         $("#username_error").append("Please enter Username");
    //     }

    //     if (email == "") {
    //         $("#email_error").append("Please enter Email");
    //     } else if (!/\S+@\S+\.\S+/.test(email)) {
    //         $("#email_error").append("Please enter a valid Email address");
    //     }

    //     if (password == "") {
    //         $("#password_error").append("Please enter a password");
    //     } else if (!/[a-zA-Z]/.test(password) || !/\d/.test(password) || !/[@#$]/.test(password)) {
    //         $("#password_error").append("Password must contain both letters, numbers, and at least one special character (@, #, $, etc.)");
    //     }


    //     if ($("#username_error, #email_error, #password_error").text() == "") {
    //         alert("The Form has been Submitted.");
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
</script>
<script src="https://cdn.tiny.cloud/1/xlfeurntq9y7i4xekogr2t4bmyapgkvf5omt3qefzg3qda4b/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</script>