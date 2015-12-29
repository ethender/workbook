<?php 
	// required files
	require 'connect.php';
	require 'PHPMailer-master/PHPMailerAutoload.php';
	
	// fields 
	$name = htmlspecialchars($_POST['username']);
	$email = htmlspecialchars($_POST['email']);
	$pass1 = htmlspecialchars(md5($_POST['password1']));
	$pass2 = htmlspecialchars(md5($_POST['password2']));
	$number = htmlspecialchars($_POST['number']);
	
	
	
	// checking password
	if($pass1 === $pass2){
		
		
		// checking the fields is empty
		if(!empty($name) && !empty($email) && !empty($number)){
			$database = new connect();
			$query = "INSERT INTO users(username,password,email,mobile,active)VALUES('$name','$pass1','$email','$number','0')";
			$resultQuery = mysql_query($query);
			
			// getting mysql id
			$id = mysql_insert_id();
			
			// domain name
			$httphost = $_SERVER['HTTP_HOST'];
			// current page
			$requestUri = $_SERVER['REQUEST_URI'];
			//link
			$link = "http://$httphost/test/"."activation.php?id=$id";
				
			
	
			/*
			*	mail function
			*/		
			$mail = new PHPMailer;
		
		//$mail->SMTPDebug = 3;                               // Enable verbose debug output
		
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'mail.goodscab.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'support@goodscab.com';                 // SMTP username
		$mail->Password = 'Gbhnqw@#$964';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 25;                                    // TCP port to connect to
		
		$mail->setFrom('support@goodscab.com', 'goodscab');
		$mail->addAddress($email, $name);     // Add a recipient
		$mail->addAddress('');               // Name is optional
		$mail->addReplyTo('', '');
		$mail->addCC('');
		$mail->addBCC('');
		
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
		
		$mail->Subject = 'goodscab account activation';
		$mail->Body    = 'please click here to activate your account.<a href='.$link.'>'.$link.'</a>';
		$mail->AltBody = '$link';
		
		if(!$mail->send()) {
			echo 'Message could not be sent.';
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			echo 'Message has been sent';
		}
	}else{
		echo "one of the fields are empty";	
	}
		
		
		
	}else{
		header("Location:registration.html");
	}

	function sendmail($link, $emailto, $nameto){
		//echo $link."\n".$emailto."\n".$nameto."\n";
		
		
	}

?>