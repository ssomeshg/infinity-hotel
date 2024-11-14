<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-header">Admin Details </h5>
                    </div>
                    <div class="card-body">
                    <form action="<?= base_url('save_changepassword') ?>" method="post" onsubmit="return validate();" autocomplete="off">
                            <div class="row">
                                <div class="col-md-3 mt-3">
                                    <label for="oldpassword">Old Password</label>
                                    <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter Old Password" />
                                    <span id="oldpassword_error" style="color:red"></span>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="newpassword">New Password</label>
                                    <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="Enter New Password" />
                                    <span id="newpassword_error" style="color:red"></span>
                                </div>

                                <div class="col-md-3 mt-3">
                                    <label for="confirmpassword">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm New Password" />
                                    <span id="confirmpassword_error" style="color:red"></span>
                                </div>

                                <div class="col-sm-12 mt-3" align="right">
                                    <input type="submit" class="btn btn-primary" value="Update Password">
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
        let isValid = true;

        // Clear previous errors
        $("#oldpassword_error").html("");
        $("#newpassword_error").html("");
        $("#confirmpassword_error").html("");

        // Get values
        var oldpassword = $("#oldpassword").val();
        var newpassword = $("#newpassword").val();
        var confirmpassword = $("#confirmpassword").val();

        // Validate old password
        if (oldpassword == "") {
            $("#oldpassword_error").html("Please enter the old password.");
            isValid = false;
        }

        // Validate new password
        if (newpassword == "") {
            $("#newpassword_error").html("Please enter a new password.");
            isValid = false;
        } else if (!/[a-zA-Z]/.test(newpassword) || !/\d/.test(newpassword) || !/[@#$]/.test(newpassword)) {
            $("#newpassword_error").html("New password must contain letters, numbers, and at least one special character (@, #, $, etc.).");
            isValid = false;
        }

        // Validate confirm password
        if (confirmpassword == "") {
            $("#confirmpassword_error").html("Please confirm the new password.");
            isValid = false;
        } else if (newpassword !== confirmpassword) {
            $("#confirmpassword_error").html("New password and confirm password do not match.");
            isValid = false;
        }

        return isValid;
    }
</script>

