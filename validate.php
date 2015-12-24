<?php
    //session_start();
    require 'connection.php';
    
    function standardLogin($username,$password){
        $password = md5($password);
        
        $getQuery = "SELECT * FROM companyUsers WHERE userAdminLogin='$username'AND userAdminPass='$password'";
        
        if(mysql_num_rows == 1){
            header("Location:home.php");
        }else if(mysql_num_rows >= 1){
            echo "<script>alert('multiple logins founded');</script>";
        }else{
             echo "<script>alert('no username found');</script>";
        }
    }
    
?>