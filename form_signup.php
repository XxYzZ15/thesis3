<?php   include "includes/header.php"; ?>
<?php   include "includes/functions2.php";?>
<?php   include "includes/db.php"; ?>
<?php   include "includes/navigation.php"; ?>

<?php  createUser();?>   
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<form class="needs-validation" action="form_signup.php" method="post">



    

    

<div class="container">
        
         <div class="row">
             
                         <!-- LEFT COLUMN -->

             <div class="col">
                             
                             <h1>Patience Information</h1>
                              
                <label for="validationCustomUsername">Email Address</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="email" name="client_email" class="form-control" id="validationCustom01" placeholder="email@example.com"  aria-label="Firstname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Email.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Password</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                            <input type="password" name="client_password" class="form-control" id="validationCustom01" placeholder="Enter your password"  aria-label="password" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your password.
                        </div>
                    </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        </div>
                            <input type="password" name="conpass" class="form-control" id="validationCustom01" placeholder="Confirm your password"  aria-label="confirmpassword" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please Confirm your password.
                        </div>
                    </div>

                    
                    <label for="validationCustomUsername">Firstname</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="client_firstname" class="form-control" id="validationCustom01" placeholder="Firstname"  aria-label="Lastname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Firstname.
                        </div>
                    </div>
                    
                    
                    <label for="validationCustomUsername">Lastname</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="client_lastname" class="form-control" id="validationCustom01" placeholder="Lastname"  aria-label="Lastname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Lastname.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Middlename</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="client_middlename" class="form-control" id="validationCustom01" placeholder="Middlename"  aria-label="Middlename" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Middlename.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Address</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="client_address" class="form-control" id="validationCustom01" placeholder="Address"  aria-label="Address" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Home Address.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Contact Number</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="client_contactnum" class="form-control" id="validationCustom01" placeholder="Contact Number"  aria-label="Contact number" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Contact Number.
                        </div>
                    </div>
                    
                    <div class="form-group">
        
        <label for="client_branch">Select Branch: </label>
        <select name="client_branch" id="">
           
            <option value="SSS Lilac">SSS Lilac</option>
            <option value="J.P Rizal">J.P Rizal</option>

        </select>
    
    </div>
              
                         <div class="form-group">
            <div class="form-check">
              <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
              <label class="form-check-label" for="invalidCheck3">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>

             </div>
             
            
             
             <!-- RIGHT COLUMN -->
             <div class="col">
             <div class="w-100"></div>
                 <h1>Pet Information</h1>
                 
                 <label for="validationCustomUsername">Pet Name</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="pet_name" class="form-control" id="validationCustom01" placeholder="Pet name"  aria-label="Petname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Petname.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Species</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="pet_species" class="form-control" id="validationCustom01" placeholder="Species"  aria-label="Contact number" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Species.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Breed</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="pet_breed" class="form-control" id="validationCustom01" placeholder="Breed"  aria-label="Breed" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Breed.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Gender</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="pet_gender" class="form-control" id="validationCustom01" placeholder="Gender"  aria-label="Gender" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Gender.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Color</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                        </div>
                            <input type="text" name="pet_color" class="form-control" id="validationCustom01" placeholder="Color"  aria-label="Color" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Color.
                        </div>
                    </div>
                 
                   <button class="btn btn-primary btn-lg btn-block" type="signup" name="btn_signup">Submit</button>

                 
             </div>
            

         </div>
    </div>
  
</form>



<?php include "includes/footer.php"; ?>