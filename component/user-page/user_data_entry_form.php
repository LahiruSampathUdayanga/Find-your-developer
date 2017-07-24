<form class="form-horizontal" role="form" id="userproject" enctype="multipart/form-data" name="userproject">
                <h2>Enter Your Project</h2>

                <div class="form-group">
                        <label class="control-label col-sm-3">Select a Catagory<span class="text-danger">*</span></label>
                        <div class="col-md-4 col-sm-4 col-lg-4 selectContainer">
                        <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                                <select name="projecttitle" class="form-control selectpicker">
                                        <option value="" disabled selected hidden>Please Choose your Project Title</option>
                                        <option value="website">Web Site</option>
                                        <option value="android_application">Android Application</option>
                                        <option value="software_programming">Software Programming</option>
                                        <option value="design">Design</option>
                                        <option value="audio_video_multimedia">Audio video & multimedia</option>
                                        <option value="Other">Other</option>
                                </select>
                        </div>
                        </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-sm-3">Project Name <span class="text-danger">*</span></label>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                                <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="projectname" id="projectname" placeholder="Enter your Project Name" value="">
                                </div>
                        </div>
		</div>

                <div class="form-group">
                        <label class="control-label col-sm-3">your company Name <span class="text-danger">*</span></label>
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-building" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" name="companyname" id="companyname" placeholder="Enter your Company Name" value="">
                                </div>
                        </div>
                </div>

               <!-- <div class="form-group">
                        <label class="control-label col-sm-3">Country<span class="text-danger">*</span></label>  
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <input id="country" name="country" type="text" placeholder="Country" class="form-control input-md" value="">     
                        </div>
                </div>-->

                <div class="form-group">
                        <label class="control-label col-sm-3">Address<span class="text-danger">*</span></label>  
                        <div class="col-md-4 col-sm-4 col-lg-4">
                                <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-address-card" aria-hidden="true"></i></span>
                        <input id="address" name="address" type="text" placeholder="Your Address" class="form-control input-md" value="">  
                        </div>   
                        </div>
                </div>

                <div class="form-group">
                        <label class="control-label col-sm-3">Amount Of Project<span class="text-danger">*</span></label>  
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input id="amount" name="amount" type="text" placeholder="Amount" class="form-control input-md" value=""> 
                        </div>    
                        </div>
                </div>


                <div class="form-group">
                        <label class="control-label col-sm-3">Due To Date<span class="text-danger">*</span></label>  
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                        <input id="date" name="date" type="text" placeholder="dd/mm/yy" class="form-control input-md" value=""> 
                        </div>    
                        </div>
                </div>


                <div class="form-group">
                        <label class="control-label col-sm-3">Enter your Project Details<span class="text-danger">*</span></label>  
                        <div class="col-md-4 col-sm-4 col-lg-4">
                        <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-comment fa-2"></i></span>
                        <textarea class="form-control" name="projectdetails" id="projectdetails" rows="5" style="width:99.9%" placeholder="Enter your project details here"></textarea>
                        </div>    
                        </div>
                </div>
<!--
                <div class="form-group">
                    <div class="col-xs-offset-3 col-md-8 col-sm-9">
                        <input type="checkbox" required name="terms" onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms">   <label for="terms">I agree with the terms and conditions.</label><span class="req">* </span>
                    </div>
                </div>        -->
                
               <div class="form-group">
                        <div class="col-xs-offset-3 col-md-4">
                                <input name="Submit" type="submit" value="Send Project" class="btn btn-success" >
                                <button id="reset" name="reset" type="reset" class="btn btn-danger">Reset</button>
                        </div>
                </div>
</form> <!-- /form -->


<script type="text/javascript">
    $(document).ready(function() {
    $('#userproject').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            projecttitle: {
                validators: {
                        notEmpty: {
                        message: 'Please select your project title'
                    }
                }
            },
             projectname: {
                validators: {
                     stringLength: {
                        min: 6,
                    },
                    notEmpty: {
                        message: 'Please enter your project name'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_]+$/,
                        message: 'The name can only consist of alphabetical, number and underscore'
                    }
                }
            },
            companyname: {
                validators: {
                    notEmpty: {
                        message: 'Please your company name'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your current address'
                    }
                }
            },
            amount: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your project amount'
                    },
                    numeric: {
                        message: 'The price must be a number'
                    }
                }
            },
            date: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please enter due date'
                    }
                }
            },
            projectdetails: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 1000,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#userproject').data('bootstrapValidator').resetForm();

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




