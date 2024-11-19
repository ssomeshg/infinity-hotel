<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-header">Testimonial Details </h5>
                        <a href="<?= base_url() . 'testimonial_list' ?>" class="btn btn-primary d-block m-3">
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
                        <form action="<?= base_url() . 'testimonial_save' ?>" method="post" enctype="multipart/form-data" onSubmit="return validate();" autocomplete="off">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($testimonial->id) ? $testimonial->id : ''; ?>" />
                              <div class="row">
                                
                                <div class="col-md-6">
                                    <label class="col-sm- col-form-label" for="category_name">Title</label>
                                    <input type="text" class="form-control" name="title" id="username" placeholder="Enter Title" value="<?php echo isset($testimonial->title) ? $testimonial->title : ''; ?>" />
									<div> <span id="username_error" style="color:red"></span></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="col-sm- col-form-label" for="category_name">Heading</label>
                                    <input type="text" class="form-control" name="heading" id="email" placeholder="Enter Heading" value="<?php echo isset($testimonial->heading) ? $testimonial->heading : ''; ?>" />
									<div> <span id="email_error" style="color:red"></span></div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-md-5 col-form-label" for="category_name">Content</label>
                                    <input type="text" class="form-control" name="content" id="password" placeholder="Enter Content" value="<?php echo isset($testimonial->content) ? $testimonial->content : ''; ?>"/>
									<div> <span id="password_error" style="color:red"></span></div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-md-5 col-form-label" for="category_name">Video Link</label>
                                    <input type="text" class="form-control" name="video_link" id="password" placeholder="Enter Video Link" value="<?php echo isset($testimonial->video_link) ? $testimonial->video_link : ''; ?>"/>
									<div> <span id="password_error" style="color:red"></span></div>
                                </div>

                                <div class="col-sm-6">
                                    <label class="col-md-5 col-form-label" for="category_name">Image</label>
                                    <input type="file" class="form-control" name="image" id="password"/>
									<div> <span id="password_error" style="color:red"></span></div>
                                </div>
								
                                <div class="col-sm-12 mt-3" align=right>
								<?php 
								  if(!empty($testimonial)){
                                    echo "<input type='submit' class='btn btn-primary' value='Update'>";
								  }else{
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
// 	$("#username_error").html("");
// 	$("#password_error").html("");
// 	$("#mobile_error").html("");
	
// 	var username = $("#username").val();
//     var email = $("#email").val();
//     var password = $("#password").val();
	
// 	if (username == "") {
//         $("#username_error").append("Please enter Username");
//     }

//     if (email == "") {
//         $("#email_error").append("Please enter Email");
//     } else if (!/\S+@\S+\.\S+/.test(email)) {
//         $("#email_error").append("Please enter a valid Email address");
//     }

// 	if (password == "") {
//     $("#password_error").append("Please enter a password");
// 	} else if (!/[a-zA-Z]/.test(password) || !/\d/.test(password) || !/[@#$]/.test(password)) {
// 		$("#password_error").append("Password must contain both letters, numbers, and at least one special character (@, #, $, etc.)");
// 	}

	
//  if ($("#username_error, #email_error, #password_error").text() == "") {
//         alert("The Form has been Submitted.");
//         return true;
//     } else {
//         return false;
//     }
//  }
</script>