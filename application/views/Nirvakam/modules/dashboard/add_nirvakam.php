<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-header">Admin Details </h5>
                        <a href="<?= base_url() . 'nirvakam_list' ?>" class="btn btn-primary d-block m-3">
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
                        <form action="<?= base_url() . 'save_nirvakam' ?>" method="post" onSubmit="return validate();" autocomplete="off">
                            <input type="hidden" name="id" id="id" value="<?php echo isset($nirvakam->id) ? $nirvakam->id : ''; ?>" />
                              <div class="row">
                                
                                <div class="col-md-3">
                                    <label class="col-sm- col-form-label" for="category_name">User Name</label>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter User Name" value="<?php echo isset($nirvakam->username) ? $nirvakam->username : ''; ?>" />
									<div> <span id="username_error" style="color:red"></span></div>
                                </div>

                                <div class="col-md-3">
                                    <label class="col-sm- col-form-label" for="category_name">Email</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php echo isset($nirvakam->email) ? $nirvakam->email : ''; ?>" />
									<div> <span id="email_error" style="color:red"></span></div>
                                </div>

                                <div class="col-sm-3">
                                    <label class="col-md-5 col-form-label" for="category_name">Password</label>
                                    <input type="text" class="form-control" name="password" id="password" placeholder="Enter Password"/>
									<div> <span id="password_error" style="color:red"></span></div>
                                </div>
								
                                <div class="col-sm-12 mt-3" align=right>
								<?php 
								  if(!empty($nirvakam)){
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
function validate() {
	$("#username_error").html("");
	$("#password_error").html("");
	$("#mobile_error").html("");
	
	var username = $("#username").val();
    var email = $("#email").val();
    var password = $("#password").val();
	
	if (username == "") {
        $("#username_error").append("Please enter Username");
    }

    if (email == "") {
        $("#email_error").append("Please enter Email");
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        $("#email_error").append("Please enter a valid Email address");
    }

	if (password == "") {
    $("#password_error").append("Please enter a password");
	} else if (!/[a-zA-Z]/.test(password) || !/\d/.test(password) || !/[@#$]/.test(password)) {
		$("#password_error").append("Password must contain both letters, numbers, and at least one special character (@, #, $, etc.)");
	}

	
 if ($("#username_error, #email_error, #password_error").text() == "") {
        alert("The Form has been Submitted.");
        return true;
    } else {
        return false;
    }
 }
</script>