<?php include "db.php"; ?>


    
<?php  
    
    if(isset($_POST['login'])){
        
        $email = $_POST['email'];
        $password = $_POST['password'];
    
       $email = mysqli_real_escape_string($connection, $email);
       $password = mysqli_real_escape_string($connection, $password);
        
            $query = "SELECT * FROM tbl_clients WHERE client_email = '{$email}' ";
            $select_user_query = mysqli_query($connection, $query);
        
        if(!$select_user_query){
            die ("QUERY FAILED" . mysqli_error($connection));
        }
        
        while($row = mysqli_fetch_array($select_user_query)){
            
        $db_user_id = $row['client_id'];
        $db_user_email = $row['client_email'];
        $db_user_password = $row['client_password'];
        $db_user_firstname = $row['client_firstname'];
        $db_user_lastname = $row['client_lastname'];
        $db_user_role = $row['role'];
            
            
        }
        
        if($email !== $db_user_email && $password !== $db_user_password ){
            
            header("Location: ../cuddlycare.php");
            
        } else if ($email == $db_user_email && $password == $db_user_password ){
            
            $_SESSION['email'] = $db_user_email;
            $_SESSION['firstname'] = $db_user_firstname;
            $_SESSION['lastname'] = $db_user_lastname;
            $_SESSION['role'] = $db_user_role;    
            
            header("Location: ../index.php");
            
        } else {
            
            header("Location: ../cuddlycare.php");
            
        }
        
    }
    


?>