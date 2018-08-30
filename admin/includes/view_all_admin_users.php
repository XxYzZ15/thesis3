 <table class="table table-bordered table-hover">
                            <head>
                                <tr>
                                    <th>Id</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Middlename</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Contact Number</th>
                                    <th>Branch</th>
                                    <th>Role</th>
                                    
                                </tr>
                            </head>
                                <tbody>
                                   
                                  <?php
                                    
                                     $query = "SELECT * FROM tbl_admin";
                                    $select_users = mysqli_query ($connection, $query);
                
                
                                    while($row = mysqli_fetch_assoc($select_users)){
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
                                        
                                        echo "<tr>";
                                        
                                        echo "<td>$admin_id</td>";
                                        echo "<td>$admin_firstname</td>";
                                        echo "<td>$admin_lastname</td>";
                                        echo "<td>$admin_middlename</td>";
                                        echo "<td>$admin_email</td>";
                                        echo "<td>$admin_address</td>";
                                        echo "<td>$admin_contactnum</td>";
                                        echo "<td>$admin_branch</td>";
                                        echo "<td>$role</td>";
                                                  
                                        
//              echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a></td>";
//              echo "<td><a href='users.php?change_to_sub={$user_id}'>Subscriber</a></td>";
                echo "<td><a href='admin_user.php?source=edit_admin_user&edit_user={$admin_id}'>Edit</a></td>";
                echo "<td><a href='admin_user.php?delete={$admin_id}'>Delete</a></td>";
                echo "</tr>";
                                        
                                    }

                                    
                                    if(isset($_GET['delete'])){
                                        
                                        $the_client_id = $_GET['delete'];
                                        
                                        $query = "DELETE FROM tbl_clients WHERE client_id = {$the_client_id} ";
                                        $delete_query = mysqli_query($connection, $query);
                                        header("Location: admin_user.php");
                                        
                                    }
                                    
                                    
                                    ?>
                                 
                                  
                                </tbody>
                        </table>