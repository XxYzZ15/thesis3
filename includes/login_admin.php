<?php include "db.php"; ?>

<?php session_start(); ?>

    
<?php  
    
    if(isset($_POST['login_admin'])){
        
        $email_admin = $_POST['email_admin'];
        $password = $_POST['password'];
    
       $email_admin = mysqli_real_escape_string($connection, $email_admin);
       $password = mysqli_real_escape_string($connection, $password);
        
            $query = "SELECT * FROM tbl_admin WHERE admin_email = '{$email_admin}' ";
            $select_admin_query = mysqli_query($connection, $query);
        
        if(!$select_admin_query){
            die ("QUERY FAILED" . mysqli_error($connection));
        }
        
        while($row = mysqli_fetch_array($select_admin_query)){
            
        $db_admin_id = $row['admin_id'];
        $db_admin_email = $row['admin_email'];
        $db_admin_password = $row['admin_password'];
        $db_admin_firstname = $row['admin_firstname'];
        $db_admin_lastname = $row['admin_lastname'];
        $db_admin_role = $row['role'];
            
            
        }
        
        if($email_admin !== $db_admin_email && $password !== $db_admin_password ){
            
            header("Location: ../cuddlycare.php");
            
        } else if ($email_admin == $db_admin_email && $password == $db_admin_password ){
            
            $_SESSION['email'] = $db_admin_email;
            $_SESSION['firstname'] = $db_admin_firstname;
            $_SESSION['lastname'] = $db_admin_lastname;
            $_SESSION['role'] = $db_admin_role;    
            
            header("Location: ../admin");
            
        } else {
            
            header("Location: ../cuddlycare.php");
            
        }
        
    }
    


?>