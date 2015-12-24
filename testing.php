//<?php
  //  include 'helpers.php';
    
   
	    
        //$username = "root";
        //$password = md5('19931993');
    	
	//echo $username."\n".$password;
      //  $getQuery = "SELECT * FROM companyUsers WHERE userAdminLogin='$username' AND userAdminPass='$password'";
    
        //$resultQuery = mysql_query($getQuery,$connection);
    
    	//echo "\n".mysql_num_rows($resultQuery);
    
    //if(isset($_POST['login-submit'])){
        
      //  $username = htmlspecialchars($_POST['username']);
        //$password = md5($_POST['password']);
        
        //echo "name: ".$username."\n".$password;
        //$getQuery = "SELECT * FROM companyUsers WHERE userAdminLogin='$username'AND userAdminPass='$password'";
        
        //$resultQuery = mysql_query($getQuery);
        //echo "\n".$resultQuery;
        //if(mysql_num_rows($resultQuery) > 0){
          //  header("Location:home.php");
        //}else{
          //  echo "<script>alert('check your username & password');</script>";
        //}
        
   // }
//?>

<?php

    require 'connection.php';
    
    function standardLogin($username,$password){
        $password = md5($password);
        
        echo $username."\n".$password;
        $getQuery = "SELECT * FROM companyUsers WHERE userAdminLogin='$username'AND userAdminPass='$password'";
        echo $getQuery;
        $resultQuery = mysql_query($getQuery);
        
        if(mysql_num_rows($resultQuery) == 1){
            header("Location:home.php");
        }else if(mysql_num_rows >= 1){
            echo "<script>alert('multiple logins founded');</script>";
        }else{
            echo "<script>alert('no username found');</script>";
        }
    }
    
    ?>

    



