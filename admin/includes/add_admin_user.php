
    <?php 

    if(isset($_POST['create_user'])){
    
     
        $admin_firstname = $_POST['admin_firstname'];
        $admin_lastname = $_POST['admin_lastname'];
        $admin_middlename = $_POST['admin_middlename'];
        $role = $_POST['role'];
            
//        $post_image = $_FILES['image']['name'];
//        $post_image_temp = $_FILES['image']['tmp_name'];
            
        $admin_email = $_POST['admin_email'];
        $admin_contactnum = $_POST['admin_contactnum'];
        $admin_password = $_POST['admin_password'];
        $admin_address = $_POST['admin_address'];
        $admin_branch = $_POST['admin_branch'];
      //  $post_date = date('d-m-y');
      
        
      //  move_uploaded_file($post_image_temp, "../images/$post_image");
        
    $query = "INSERT INTO tbl_admin(admin_firstname, admin_lastname, admin_middlename, admin_email, admin_password, admin_address, admin_contactnum, admin_branch, role ) ";
        
$query .= "VALUES ('{$admin_firstname}','{$admin_lastname}','{$admin_middlename}','{$admin_email}','{$admin_password}','{$admin_address}','{$admin_contactnum}','{$admin_branch}','{$role}' ) ";
        
        $create_user_query = mysqli_query($connection, $query);
        
        confirmQuery($create_user_query);
        
        
        
    }

?>
   

   <form action="" method="post" enctype="multipart/form-data">
    
    

    
  <div class="form-group">
       
        <label for="admin_firstname">Firstname</label>
        <input type="text" class="form-control" name="admin_firstname">
    
       </div>
       
    <div class="form-group">
        <label for="admin_lastname">Lastname</label>
        <input type="text" class="form-control" name="admin_lastname">
       </div>
  
    
    <div class="form-group">
        <label for="admin_middlename">Middlename</label>
        <input type="text" class="form-control" name="admin_middlename">
    </div>
        
<!--
    <div class="form-group">
        <label for="post_image">Post Image</label>
        <input type="file" name="image">
    </div>
-->
    
    <div class="form-group">
        <label for="admin_email">Email</label>
        <input type="email" class="form-control" name="admin_email">
    </div>
    
   <div class="form-group">
        <label for="admin_password">Password</label>
        <input type="password" class="form-control" name="admin_password">    
   </div>
   
    <div class="form-group">
        <label for="admin_contactnum">Contact Number</label>
        <input type="text" class="form-control" name="admin_contactnum">    
   </div>
   
    
        
    <div class="form-group">
        <label for="admin_address">Address</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="admin_address"></textarea>
  </div>
    
    <div class="form-group">
        
        <label for="admin_branch">Select Branch: </label>
        <select name="admin_branch" id="">
           
            <option value="SSS Lilac">SSS Lilac</option>
            <option value="J.P Rizal">J.P Rizal</option>

        </select>
    
    </div>
       
       <div class="form-group">
        
        <label for="role">Select Role: </label>
        <select name="role" id="">
           
            <option value="Doctor">Doctor</option>
            <option value="Grommer">Groomer</option>

        </select>
    
    </div>
    
    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add User">
        </div>
    
</form>