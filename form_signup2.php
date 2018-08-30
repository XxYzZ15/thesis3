<?php include "includes/db.php"?>
<?php include "includes/header.php"?>

<?php include "includes/navigation.php"?>
<?php include "includes/functions2.php"?>


<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o),
					m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

			ga('create', 'UA-60343429-1', 'auto');
			ga('send', 'pageview');
		</script>
    
    

    <div class="container">
        <br />
        <form action="form_signup.php" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">

        <!-- SmartWizard html -->
        <div id="smartwizard">
            <ul>
                <li><a href="#step-1">Step 1<br /><small>Personal Information</small></a></li>
                <li><a href="#step-2">Step 2<br /><small>Pet Information</small></a></li>
                <li><a href="#step-3">Step 3<br /><small>Account Details</small></a></li>
                <li><a href="#step-4">Step 4<br /><small>Appointment</small></a></li>
            </ul>

            <div>
                <div id="step-1">
                    <h2>Personal Information</h2>
                    <div id="form-step-0" role="form" data-toggle="validator">

                    <label for="firstname">Firstname</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="client_firstname" id="firstname" placeholder="Firstname" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        
                    
                    <label for="lastname">Lastname</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="client_lastname" id="lastname" placeholder="Lastname" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        
                        
                        </div>
                    
                    <label for="middlename">Middlename</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="client_middlename" id="middlename" placeholder="Middlename" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        
                        
                        </div>
                    
                    <label for="address">Address</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-home" aria-hidden="true"></i></span>
                        </div>
                <textarea class="form-control" id="address" rows="2" name="client_address" required></textarea>

                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <label for="contact">Contact Number</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-mobile-alt" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="client_contactnum" id="contactnumber" placeholder="Contact number" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        
                        
                        
             </div>


                </div>
                <div id="step-2">
                    <h2>Pet Information</h2>
                    <div id="form-step-1" role="form" data-toggle="validator">

                    <label for="petname">Pet Name</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="pet_name" id="petname" placeholder="Pet Name" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    
                    <label for="species">Species</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="pet_species" id="species" placeholder="Species" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    
                    <label for="breed">Breed</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="pet_breed" id="breed" placeholder="Breed" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <label for="color">Color</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-palette" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" class="form-control" name="pet_color" id="color" placeholder="Color" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                       
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        
                            <label for="pet_gender">Select Gender: </label>
                               
                                <select name="pet_gender" id="">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                    
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        

                        
                        
                    </div>
                </div>
                <div id="step-3">
                    <h2>Account Detail</h2>
                    <div id="form-step-2" role="form" data-toggle="validator">
                    
                    <label for="email">Email Address</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-at" aria-hidden="true"></i></span>
                        </div>
                            <input type="email" class="form-control" name="client_email" id="email" placeholder="email@example.com" required>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        <label for="password">Password</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                        </div>
                            <input type="password" class="form-control" name="client_password" id="pword" placeholder="Password" required>
        				<span id="error_password" class="text-danger small"></span>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        

                        <label for="password">Confirm Password</label>
                        <div class="form-group">
                            
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                        </div>
                            <input type="password" class="form-control" name="client_password" id="cpword" placeholder="Password" required>
        				<span id="error_cpassword" class="text-danger small"></span>
                        </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        
                        
                    </div>
                </div>
                <div id="step-4" class="container well">
                   
                  
			<div class="row">
				<div class="col-md-6">
					<h2>Date Picker</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-control-wrapper">
						<input type="text" id="min-date" class="form-control time" placeholder="Date">
					</div>
				</div>
				
			</div>
		
                   
                    <h2>Terms and Conditions</h2>
                    <p>
                        Terms and conditions: Keep your smile :)
                    </p>
                    
                        <div class="form-group">
                            <label for="terms">I agree with the T&C</label>
                            <input type="checkbox" id="terms" data-error="Please accept the Terms and Conditions" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    


                </div>
            </div>
        </div>

        </form>

    </div>

   

    <script type="text/javascript">
        $(document).ready(function(){

            // Toolbar extra buttons
            var btnFinish = $('<button></button>').text('Finish')
                                             .addClass('btn btn-info')
                                             .on('btn_signup', function(){
                                                    if( !$(this).hasClass('disabled')){
                                                        var elmForm = $("#myForm");
                                                        if(elmForm){
                                                            elmForm.validator('validate');
                                                            var elmErr = elmForm.find('.has-error');
                                                            if(elmErr && elmErr.length > 0){
                                                                alert('Oops we still have error in the form');
                                                                return false;
                                                            }else{
                                                                alert('Great! we are ready to submit form');
                                                                elmForm.submit();
                                                                return false;
                                                            }
                                                        }
                                                    }
                                                });
            var btnCancel = $('<button></button>').text('Cancel')
                                             .addClass('btn btn-danger')
                                             .on('click', function(){
                                                    $('#smartwizard').smartWizard("reset");
                                                    $('#myForm').find("input, textarea").val("");
                                                });
            

            // Smart Wizard
            $('#smartwizard').smartWizard({
                    selected: 0,
                    theme: 'arrows',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'bottom',
                                      toolbarExtraButtons: [btnFinish, btnCancel]
                                    },
                    anchorSettings: {
                                markDoneStep: true, // add done css
                                markAllPreviousStepsAsDone: true, // When a step selected by url hash, all previous steps are marked done
                                removeDoneStepOnNavigateBack: true, // While navigate back done step after active step will be cleared
                                enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
                            }
                 });

            $("#smartwizard").on("leaveStep", function(e, anchorObject, stepNumber, stepDirection) {
                var elmForm = $("#form-step-" + stepNumber);
                // stepDirection === 'forward' :- this condition allows to do the form validation
                // only on forward navigation, that makes easy navigation on backwards still do the validation when going next
                if(stepDirection === 'forward' && elmForm){
                    elmForm.validator('validate');
                    var elmErr = elmForm.children('.has-error');
                    if(elmErr && elmErr.length > 0){
                        // Form validation failed
                        return false;
                    }
                }
                return true;
            });

            $("#smartwizard").on("showStep", function(e, anchorObject, stepNumber, stepDirection) {
                // Enable finish button only on last step
                if(stepNumber == 3){
                    $('.btn-finish').removeClass('disabled');
                }else{
                    $('.btn-finish').addClass('disabled');
                }
            });
            

			$('#time').bootstrapMaterialDatePicker
			({
				date: false,
				shortTime: false,
				format: 'HH:mm'
			});

			$('#date-format').bootstrapMaterialDatePicker
			({
				format: 'dddd DD MMMM YYYY - HH:mm'
			});
			$('#date-fr').bootstrapMaterialDatePicker
			({
				format: 'DD/MM/YYYY HH:mm',
				lang: 'fr',
				weekStart: 1, 
				cancelText : 'ANNULER',
				nowButton : true,
				switchOnClick : true
			});

			$('#date-end').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm'
			});
			$('#date-start').bootstrapMaterialDatePicker
			({
				weekStart: 0, format: 'DD/MM/YYYY HH:mm', shortTime : true
			}).on('change', function(e, date)
			{
				$('#date-end').bootstrapMaterialDatePicker('setMinDate', date);
			});

			$('#min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

			$.material.init()
        });
        
        
    </script>


