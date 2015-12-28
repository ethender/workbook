<?php
    // database connection and select db
    include 'connection.php';
    
    // getting the fields
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $pass1 = htmlspecialchars(md5($_POST['password1']));
    $pass2 = htmlspecialchars(md5($_POST['password2']));
    $org = htmlspecialchars($_POST['org']);
    $address = htmlspecialchars($_POST['address']);
    
    // checking the password given same or not
    if($pass1 === $pass2){
        $query = "INSERT INTO professionaluser(name,email,password,organisation,address,active)VALUES('$name','$email','$pass1','$org','$address','0')";
        $resultQuery = mysql_query($query,$connection);
    }
    
?>