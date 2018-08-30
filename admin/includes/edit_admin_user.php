<?php 
    
    if(isset($_GET['edit_user'])){
        
                                 $the_admin_id = $_GET['edit_user'];
                                    $query = "SELECT * FROM tbl_admin WHERE admin_id = $the_admin_id ";
                                    $select_admin_query = mysqli_query ($connection, $query);
                
                
                                    while($row = mysqli_fetch_assoc($select_admin_query)){
                                        $admin_id = $row['admin_id'];
                                        $admin_firstname = $row['admin_firstname'];
                                        $admin_lastname = $row['admin_lastname'];
                                        $admin_middlename = $row['admin_middlename'];
                                        $admin_email = $row['admin_email'];
                                        $admin_password = $row['admin_password'];
                                        $admin_address = $row['admin_address'];
                                        $admin_contactnum = $row['admin_contactnum'];
                                        $admin_branch = $row['admin_branch'];
                                        $role = $row['role'];
                }
    }




    if(isset($_POST['edit_user'])){
    
     
        $admin_firstname = $_POST['admin_firstname'];
        $admin_lastname = $_POST['admin_lastname'];
        $admin_middlename = $_POST['admin_middlename'];
        $role = $_POST['role'];
            
//        $post_image = $_FILES['image']['name'];
//        $post_image_temp = $_FILES['image']['tmp_name'];
    
        $admin_email = $_POST['admin_email'];
        $admin_password = $_POST['admin_password'];
        $admin_contactnum = $_POST['admin_contactnum'];
        $admin_address = $_POST['admin_address'];
        $admin_branch = $_POST['admin_branch'];
      //  $post_date = date('d-m-y');
      
        
      //  move_uploaded_file($post_image_temp, "../images/$post_image");
        
  
            
                                $query = "UPDATE tbl_admin SET ";
                                $query .="admin_firstname = '{$admin_firstname}', ";
                                $query .="admin_lastname = '{$admin_lastname}', ";
                                $query .="admin_middlename = '{$admin_middlename}', ";
                                
                                $query .="admin_email =  '{$admin_email}', ";
                                $query .="admin_password =  '{$admin_password}', ";
                                $query .="admin_contactnum =  '{$admin_contactnum}', ";
                                $query .="admin_address =  '{$admin_address}', ";
                                $query .="admin_branch =  '{$admin_branch}', ";
                                $query .="role =  '{$role}' ";
                                $query .="WHERE admin_id = {$the_admin_id} ";
        
                                    $edit_user_query = mysqli_query($connection, $query);
        
                                        confirmQuery($edit_user_query);
        
    }

?>
   
   <form action="" method="post" enctype="multipart/form-data">

    

    
  <div class="form-group">
       
        <label for="admin_firstname">Firstname</label>
        <input type="text" value="<?php echo $admin_firstname; ?>" class="form-control" name="admin_firstname">
    
       </div>
       
    <div class="form-group">
        <label for="admin_lastname">Lastname</label>
        <input type="text" value="<?php echo $admin_lastname; ?>" class="form-control" name="admin_lastname">
       </div>
  
    
    <div class="form-group">
        <label for="admin_middlename">Middlename</label>
        <input type="text" value="<?php echo $admin_middlename; ?>" class="form-control" name="admin_middlename">
    </div>
        
<!--
    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div>
-->
    
    <div class="form-group">
        <label for="admin_email">Email</label>
        <input type="email" value="<?php echo $admin_email; ?>" class="form-control" name="admin_email">
    </div>
    
   <div class="form-group">
        <label for="admin_password">Password</label>
        <input type="password" value="<?php echo $admin_password; ?>" class="form-control" name="admin_password">    
   </div>
   
    <div class="form-group">
        <label for="admin_contactnum">Contact Number</label>
        <input type="text" value="<?php echo $admin_contactnum; ?>" class="form-control" name="admin_contactnum">    
   </div>
   
    
        
    <div class="form-group">
        <label for="admin_address">Address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="admin_address"><?php echo $admin_address; ?></textarea>
  </div>
    
    <div class="form-group">
        
        <label for="admin_branch">Select Branch: </label>
        <select name="admin_branch" id="">
           
            <option value="SSS Lilac">SSS Lilac</option>
            <option value="J.P Rizal">J.P Rizal</option>
            
            <?php 
            
            if($admin_branch == 'SSS Lilac'){
                
            echo "<option value='J.P Rizal'>J.P Rizal</option>";
                
            }else{
                
          echo  "<option value='SSS Lilac'>SSS Lilac</option>";
                
            }
           
            ?>
            

        </select>
    
    </div>
    
    <div class="form-group">
        
        <label for="role">Select Role: </label>
        <select name="role" id="">
           
            <option value="Doctor">Doctor</option>
            <option value="Groomer">Groomer</option>
            
            <?php 
            
            if($role == 'Groomer'){
                
            echo "<option value='Doctor'>Doctor</option>";
                
            }else{
                
          echo  "<option value='Grommer'>Groomer</option>";
                
            }
           
            ?>
            

        </select>
    
    </div>
    
        
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Update">
        </div>
    
    
    
    
</form>