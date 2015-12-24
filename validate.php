<?php
    //session_start();
    include 'connection.php';
    
    function standardLogin($username,$password){
        $password = md5($password);
        
        $getQuery = "SELECT * FROM companyUsers WHERE userAdminLogin='$username'AND userAdminPass='$password'";
        
        
        print_r
    }
    
?>