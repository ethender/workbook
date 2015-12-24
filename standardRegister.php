<?php
    include 'helpers.php';
    
    if(isset($_POST['register-submit'])){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass1 = $_POST['password'];
        $pass2 = $_POST['confirm-password'];
        $number = $_POST['mobile_number'];
        
        echo $name."\n".$email."\n".$pass1."\n".$pass2."\n".$number;
        
        if(pass1 === pass2){
          //  $resultQuery = 0;
            //$query = "INSERT INTO //standarduser(name,email,password,number)VALUES('$name','$email','$pass1','$number')";
            //$resultQuery = insertTable($query);
            
            //if(!$resultQuery == 0){
                //echo "<script>alert('created successful');</script>";
            //}else{
               // echo "<script>alert('created unsuccessful');</script>";
            //}
       // }else{
          //  echo "<script>alert('passwords must match');</script>";
        //}
        
        
        
        
    }
    
    ?>
