
    <?php 

    if(isset($_POST['create_user'])){
    
     
        $client_firstname = $_POST['client_firstname'];
        $client_lastname = $_POST['client_lastname'];
        $client_middlename = $_POST['client_middlename'];
       
            
            
        $client_email = $_POST['client_email'];
        $client_contactnum = $_POST['client_contactnum'];
        $client_password = $_POST['client_password'];
        $client_address = $_POST['client_address'];
        $client_branch = $_POST['client_branch'];
        
        $pname = $_POST['pet_name'];
        $pbreed = $_POST['pet_breed'];
        $pspecies = $_POST['pet_species'];
        $pgender = $_POST['pet_gender'];
        $pcolor = $_POST['pet_color'];
        $pet_image = $_FILES['pet_image']['name'];
        $pet_image_temp = $_FILES['pet_image']['tmp_name'];
      //  $post_date = date('d-m-y');
      
        
        move_uploaded_file($pet_image_temp, "./images/$pet_image");
        
    $query = "INSERT INTO tbl_clients(client_firstname, client_lastname, client_middlename, client_email, client_password, client_address, client_contactnum, client_branch, pet_name, pet_breed, pet_species, pet_gender, pet_color, pet_image) ";
        
$query .= "VALUES ('{$client_firstname}','{$client_lastname}','{$client_middlename}','{$client_email}','{$client_password}','{$client_address}','{$client_contactnum}','{$client_branch}','{$pname}','{$pbreed}','{$pspecies}','{$pgender}','{$pcolor}','{$pet_image}' ) ";
        
        $create_user_query = mysqli_query($connection, $query);
        
        confirmQuery($create_user_query);
        
        
        
    }

?>
   

   <form action="" method="post" enctype="multipart/form-data">

    
  <div class="container">
        
         <div class="row">
             
                         <!-- LEFT COLUMN -->

             <div class="col">
                             
                            
                              
                <label for="validationCustomUsername">Email Address</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="email" name="client_email" class="form-control" id="validationCustom01" placeholder="email@example.com"  aria-label="Firstname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Email.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Password</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="password" name="client_password" class="form-control" id="validationCustom01" placeholder="Enter your password"  aria-label="password" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your password.
                        </div>
                    </div>

                    

                    
                    <label for="validationCustomUsername">Firstname</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_firstname" class="form-control" id="validationCustom01" placeholder="Firstname"  aria-label="Lastname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Firstname.
                        </div>
                    </div>
                    
                    
                    <label for="validationCustomUsername">Lastname</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_lastname" class="form-control" id="validationCustom01" placeholder="Lastname"  aria-label="Lastname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Lastname.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Middlename</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_middlename" class="form-control" id="validationCustom01" placeholder="Middlename"  aria-label="Middlename" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Middlename.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Address</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_address" class="form-control" id="validationCustom01" placeholder="Address"  aria-label="Address" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Home Address.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Contact Number</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
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
                         

             </div>
             
            
             
             <!-- RIGHT COLUMN -->
             <div class="col">
             <div class="w-100"></div>
                 
                 <label for="validationCustomUsername">Pet Name</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_name" class="form-control" id="validationCustom01" placeholder="Pet name"  aria-label="Petname" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Petname.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Species</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_species" class="form-control" id="validationCustom01" placeholder="Species"  aria-label="Contact number" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Species.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Breed</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_breed" class="form-control" id="validationCustom01" placeholder="Breed"  aria-label="Breed" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Breed.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Gender</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_gender" class="form-control" id="validationCustom01" placeholder="Gender"  aria-label="Gender" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Gender.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Color</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_color" class="form-control" id="validationCustom01" placeholder="Color"  aria-label="Color" aria-describedby="basic-addon1">
                        <div class="invalid-feedback">
                            Please enter your Pet Color.
                        </div>
                    </div>
                    
              
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <label for="pet_image">Put Image</label>
                            <input type="file" name="pet_image">
                       
                    </div>
                 
                   <button class="btn btn-dark btn-lg btn-block" type="signup" name="create_user">Submit</button>

                 
             </div>
            

         </div>
    </div>
    
</form>