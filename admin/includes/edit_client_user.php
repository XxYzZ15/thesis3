<?php 
    
    if(isset($_GET['p_id'])){
        
                                 $the_post_id = $_GET['p_id'];
                                    $query = "SELECT * FROM tbl_clients WHERE client_id = $the_post_id ";
                                    $select_posts_query = mysqli_query ($connection, $query);
                
                
                                    while($row = mysqli_fetch_assoc($select_posts_query)){
                                        $client_id = $row['client_id'];
                                        $client_firstname = $row['client_firstname'];
                                        $client_lastname = $row['client_lastname'];
                                        $client_middlename = $row['client_middlename'];
                                        $client_email = $row['client_email'];
                                        $client_password = $row['client_password'];
                                        $client_address = $row['client_address'];
                                        $client_contactnum = $row['client_contactnum'];
                                        $client_branch = $row['client_branch'];

                                        $pname = $row['pet_name'];
                                        $pbreed = $row['pet_breed'];
                                        $pspecies = $row['pet_species'];
                                        $pgender = $row['pet_gender'];
                                        $pcolor = $row['pet_color'];
                                        $pet_image = $row['pet_image'];
                                       
                }
    }




    if(isset($_POST['edit_user'])){
    
     
        $client_firstname = $_POST['client_firstname'];
        $client_lastname = $_POST['client_lastname'];
        $client_middlename = $_POST['client_middlename'];
//        $role = $_POST['role'];
            
    
        $client_email = $_POST['client_email'];
        $client_password = $_POST['client_password'];
        $client_contactnum = $_POST['client_contactnum'];
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
        
//        if(empty($post_image)){
//                                        
//            $query = "SELECT * FROM tbl_clients WHERE client_id = $the_post_id ";
//            $select_image = mysqli_query($connection, $query);
//
//                while($row = mysqli_fetch_array($select_image))
//                {
//                    $pet_image = $row['pet_image'];
//                }
//
//        }
//        
  
            
                                $query = "UPDATE tbl_clients SET ";
                                $query .="client_firstname = '{$client_firstname}', ";
                                $query .="client_lastname = '{$client_lastname}', ";
                                $query .="client_middlename = '{$client_middlename}', ";
        
                                $query .="client_email =  '{$client_email}', ";
                                $query .="client_password =  '{$client_password}', ";
                                $query .="client_contactnum =  '{$client_contactnum}', ";
                                $query .="client_address =  '{$client_address}', ";
                                $query .="client_branch =  '{$client_branch}', ";
        
                                $query .="pet_name =  '{$pname}', ";
                                $query .="pet_breed =  '{$pbreed}', ";
                                $query .="pet_species =  '{$pspecies}', ";
                                $query .="pet_gender =  '{$pgender}', ";
                                $query .="pet_color =  '{$pcolor}', ";
                                $query .="pet_image =  '{$pet_image}' ";
        
        
                                $query .="WHERE client_id = {$the_post_id} ";
        
                                    $edit_post_query = mysqli_query($connection, $query);
        
                                        confirmQuery($edit_post_query);
        
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
                            <input type="email" name="client_email" class="form-control" id="validationCustom01" placeholder="email@example.com"  aria-label="Email" aria-describedby="basic-addon1" value="<?php echo $client_email; ?>">
                        <div class="invalid-feedback">
                            Please enter your Email.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Password</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="password" name="client_password" class="form-control" id="validationCustom01" placeholder="Enter your password"  aria-label="Password" aria-describedby="basic-addon1" value="<?php echo $client_password; ?>">
                        <div class="invalid-feedback">
                            Please enter your password.
                        </div>
                    </div>

                    

                    
                    <label for="validationCustomUsername">Firstname</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_firstname" class="form-control" id="validationCustom01" placeholder="Firstname"  aria-label="Lastname" aria-describedby="basic-addon1" value="<?php echo $client_firstname; ?>">
                        <div class="invalid-feedback">
                            Please enter your Firstname.
                        </div>
                    </div>
                    
                    
                    <label for="validationCustomUsername">Lastname</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_lastname" class="form-control" id="validationCustom01" placeholder="Lastname"  aria-label="Lastname" aria-describedby="basic-addon1" value="<?php echo $client_lastname; ?>">
                        <div class="invalid-feedback">
                            Please enter your Lastname.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Middlename</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_middlename" class="form-control" id="validationCustom01" placeholder="Middlename"  aria-label="Middlename" aria-describedby="basic-addon1" value="<?php echo $client_middlename; ?>">
                        <div class="invalid-feedback">
                            Please enter your Middlename.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Address</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_address" class="form-control" id="validationCustom01" placeholder="Address"  aria-label="Address" aria-describedby="basic-addon1" value="<?php echo $client_address; ?>">
                        <div class="invalid-feedback">
                            Please enter your Home Address.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Contact Number</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="client_contactnum" class="form-control" id="validationCustom01" placeholder="Contact Number"  aria-label="Contact number" aria-describedby="basic-addon1" value="<?php echo $client_contactnum; ?>">
                        <div class="invalid-feedback">
                            Please enter your Contact Number.
                        </div>
                    </div>
                    
              <div class="form-group">
        
        <label for="client_branch">Select Branch: </label>
        <select name="client_branch" id="">
           
            <option value="SSS Lilac">SSS Lilac</option>
            <option value="J.P Rizal">J.P Rizal</option>
            
            <?php 
            
            if($client_branch == 'SSS Lilac'){
                
            echo "<option value='J.P Rizal'>J.P Rizal</option>";
                
            }else{
                
          echo  "<option value='SSS Lilac'>SSS Lilac</option>";
                
            }
           
            ?>

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
                            <input type="text" name="pet_name" class="form-control" id="validationCustom01" placeholder="Pet name"  aria-label="Petname" aria-describedby="basic-addon1" value="<?php echo $pname; ?>">
                        <div class="invalid-feedback">
                            Please enter your Petname.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Species</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_species" class="form-control" id="validationCustom01" placeholder="Species"  aria-label="Contact number" aria-describedby="basic-addon1" value="<?php echo $pspecies; ?>">
                        <div class="invalid-feedback">
                            Please enter your Pet Species.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Breed</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_breed" class="form-control" id="validationCustom01" placeholder="Breed"  aria-label="Breed" aria-describedby="basic-addon1" value="<?php echo $pbreed; ?>">
                        <div class="invalid-feedback">
                            Please enter your Pet Breed.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Gender</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_gender" class="form-control" id="validationCustom01" placeholder="Gender"  aria-label="Gender" aria-describedby="basic-addon1" value="<?php echo $pgender; ?>">
                        <div class="invalid-feedback">
                            Please enter your Pet Gender.
                        </div>
                    </div>
                    
                    <label for="validationCustomUsername">Color</label>
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <input type="text" name="pet_color" class="form-control" id="validationCustom01" placeholder="Color"  aria-label="Color" aria-describedby="basic-addon1" value="<?php echo $pcolor; ?>">
                        <div class="invalid-feedback">
                            Please enter your Pet Color.
                        </div>
                    </div>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            
                        </div>
                            <img width="100" src="./images/<?php echo $pet_image; ?>" alt="">
                            <input type="file" name="pet_image">
                       
                    </div>
                 
                   <button class="btn btn-dark btn-lg btn-block" type="submit" name="edit_user">Submit</button>

                 
             </div>
            

         </div>
    </div>
    
</form>