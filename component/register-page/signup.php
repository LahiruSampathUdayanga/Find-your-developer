<div class="container">  
	
	 	<hr class="colorgraph">
				<form class="form-horizontal" method="post" action="../../database/connectivity_sign_up.php" name="signup" id="signup" enctype="multipart/form-data">

					<div class="form-group">
						<label class="control-label col-sm-3">Status<span class="text-danger">*</span></label>
						<div class="col-md-8 col-md-8 col-sm-9 selectContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
								<select name="status" class="form-control selectpicker">
									<option value="" disabled selected hidden>Please Choose your status</option>
									<option value="user">User</option>
									<option value="developer">Developer</option>
									</select>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">Type Your ID number<span class="text-danger">*</span></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-id-card" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="number" id="number" placeholder="Enter your ID number here" value="" />
						</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">User Name <span class="text-danger">*</span></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input type="text" class="form-control" name="username" id="mem_name" placeholder="Enter your Name here" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Email ID <span class="text-danger">*</span></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<input type="email" class="form-control" name="emailid" id="emailid" placeholder="Enter your Email ID" value="">
							</div>
							<small> Your Email Id is being used for ensuring the security of your account, authorization and access recovery. </small> </div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">Password <span class="text-danger">*</span></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Confirm Password <span class="text-danger">*</span></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm your password" value="">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="control-label col-sm-3">Contact No <span class="text-danger">*</span></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
								<input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." value="">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label class="control-label col-sm-3">Profile Photo <br>
								<small>(optional)</small></label>
						<div class="col-md-8 col-sm-9">
							<div class="input-group"> <span class="input-group-addon" id="file_upload"><i class="glyphicon glyphicon-upload"></i></span>
								<input type="file" name="file_nm" id="file_nm" class="form-control upload" placeholder="" aria-describedby="file_upload">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-offset-3 col-md-8 col-sm-9">
							<input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the <a href="terms.php" title="You may read our terms and conditions by clicking on this link">terms and conditions</a> for Registration.</label><span class="req">* </span>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-10">
							<input name="Submit" type="submit" value="Register" class="btn btn-success">
							<button id="reset" name="reset" type="reset" class="btn btn-danger">Reset</button>
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-offset-3 col-xs-10">
							<label class="control-label">Already Registered? Go to </label>
							
                		<a href="../../index.php"><i class="fa fa-fw fa-lg fa-home faa-tada faa-fast"></i>Home</a>
            
						</div>
					</div>	

				</form>
		<hr class="colorgraph">
	</div>



    
<script type="text/javascript">
    $(document).ready(function() {
    $('#signup').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            status: {
                validators: {
                    notEmpty: {
                        message: 'Please select your status'
                    }
                }
            },
			number: {
				validators: {
					stringLength: {
                        min: 9,
						max: 9,
                    },
					integer: {
						message: 'The value is not an integer',
						thousandsSeparator: '',
						decimalSeparator: '.'
					},
					notEmpty: {
                        message: 'Please Enter your id number'
                    }
				}
			},
            username: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    },
					regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
            },
            emailid: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			cpassword: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    },
                    identical:{
                        field: 'password',
                        message: 'The password and confirm password are not match'
                    }
                }
            },
            contactnum: {
                validators: {
                  	stringLength: {
                        min: 10, 
                        max: 10,
					notEmpty: {
                        message: 'Please supply your phone number'
                    },
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#signup').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>