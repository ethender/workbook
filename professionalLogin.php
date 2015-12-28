<?php
	
	include 'connection.php';
	
	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars(md5($_POST['password']));
	
	$query = "SELECT * FROM professionaluser  WHERE email='$email' AND password='$password' AND active ='1'";
	
	$reusltQuery = mysql_query($query);
	
	if(mysql_num_rows($reusltQuery) == 1){
		
	}else if(mysql_num_rows($reusltQuery) > 1){
		
	}else{
		
	}
?>
