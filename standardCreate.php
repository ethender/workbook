<?php
    
    // connection of the database and select the database
    include 'connection.php';
    
    // get the fields for standard user
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $mobile = htmlspecialchars($_POST['mobile']);
    $pass1 = htmlspecialchars(md5($_POST['password1']));
    $pass2 = htmlspecialchars(md5($_POST['password2']));
    
    // checking pass1 equals the pass 2
    if($pass1 === $pass2){
        $query = "INSERT INTO standarduser(email,password,mobile,name,active)VALUES('$email','$pass1','$mobile','$name','0')";
        $resultQuery = mysql_query($query,$connection);
        
    }
    
    
    ?>