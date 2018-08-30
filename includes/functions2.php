<?php
    
    function createUser(){
        
    if(isset($_POST['btn_signup'])){
    global $connection;
        
    $firstname = $_POST['client_firstname'];
    $lastname = $_POST['client_lastname'];
    $middlename = $_POST['client_middlename'];
    $email = $_POST['client_email'];
    $password = $_POST['client_password'];
    $address = $_POST['client_address'];
    $contactnum = $_POST['client_contactnum'];
    $branch = $_POST['client_branch'];
        
    $pname = $_POST['pet_name'];
    $pbreed = $_POST['pet_breed'];
    $pspecies = $_POST['pet_species'];
    $pgender = $_POST['pet_gender'];
    $pcolor = $_POST['pet_color'];
        
    $date = $_POST['date'];
    $time_s = $_POST['time_start'];
    $time_e = $_POST['time_end'];
      
        $firstname = mysqli_real_escape_string($connection, $firstname);
        $lastname = mysqli_real_escape_string($connection, $lastname);
        $middlename = mysqli_real_escape_string($connection, $middlename);
        $email = mysqli_real_escape_string($connection, $email);
        $password = mysqli_real_escape_string($connection, $password);
        $address = mysqli_real_escape_string($connection, $address);
        $contactnum = mysqli_real_escape_string($connection, $contactnum);
        $branch = mysqli_real_escape_string($connection, $branch);
        
        $pname = mysqli_real_escape_string($connection, $pname);
        $pbreed = mysqli_real_escape_string($connection, $pbreed);
        $pspecies = mysqli_real_escape_string($connection, $pspecies);
        $pgender = mysqli_real_escape_string($connection, $pgender);
        $pcolor = mysqli_real_escape_string($connection, $pcolor);
             
//        $hashFormat ="$2y$10$";
//        
//        $salt = "iusesomecrazystrings32";
//        $hashF_and_salt = $hashFormat . $salt; 
//        
//        $password = crypt($password, $hashF_and_salt);
                      
    $query = "INSERT INTO tbl_clients(client_firstname, client_lastname, client_middlename, client_email, client_password, client_address, client_contactnum, client_branch, pet_name, pet_breed, pet_species, pet_gender, pet_color)";
    $query .= "VALUES ('$firstname', '$lastname', '$middlename', '$email', '$password', '$address', '$contactnum', '$branch', '$pname', '$pbreed', '$pspecies', '$pgender', '$pcolor')";  
        
        $result = mysqli_query($connection, $query);
        
    if(!$result){
        die('Query FAILED' . mysqli_error());
        
        }else{
        echo "Create Successfully";
        }
    }
}


?>
