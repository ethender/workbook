<?php
  include 'helpers.php';
    
    if(isset($_POST['register-submit'])){
        $name = $_POST['username'];
        $email = $_POST['email'];
        $pass1 = md5($_POST['password']);
        $pass2 = md5($_POST['confirm-password']);
        $number = $_POST['mobile_number'];
        
        
        if($pass1 === $pass2){
            $resultQuery = 0;
            $query = "INSERT INTO standarduser(name,email,password,number)VALUES('$name','$email','$pass1','$number')";
            $resultQuery = mysql_query($query);
            
            if(!$resultQuery == 0){
                header("Location:myaccount.php");
            }else{
                echo "<script>alert('created unsuccessful');</script>";
            }
        }else{
            echo "<script>alert('passwords must match');</script>";
        }
        
        
        
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WookBook</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
	<link href="css/Sign_In.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container" style="    margin-bottom: 5px;">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<table><tr><td><img src="images/logo.png"></td><td><h1><span>Work</span>book</h1></td></tr></table>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	<section id="Registration-page">
        <div class="container"> 
			<div class="row">
				<div class="col-md-6 col-md-offset-3" style="margin-top: 40px;">
					<div class="panel panel-login">
						<div class="panel-heading">
							<div class="row">
								<div class="col-xs-12">
									<h3 style="text-align:center;color:rgba(26, 175, 134, 0.75);">Registration</h3>
								</div>
							</div>
							<hr>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-lg-12">
									<form id="login-form" action="standard_registration.php" method="post" role="form">
										<div class="form-group">
											<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
										</div>
										<div class="form-group">
											<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
										</div>
										<div class="form-group">
											<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
										</div>
										<div class="form-group">
											<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
										</div>
										<div class="form-group">
											<input type="text" name="mobile_number" id="mobile_number" tabindex="2" class="form-control" placeholder="Mobile Number">
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" style="background-color:rgba(26, 175, 134, 0.75);" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	<footer>
		<div class="footer">
			<div class="container">
				<div class="col-md-4" style="    margin-top: 30px;">
					<a href="#" style="text-align:left;">About us</a>&nbsp;&nbsp;&nbsp; 
					<a href="#" style="text-align:left;">Privacy Policy</a>&nbsp;&nbsp;&nbsp; 
					<a href="#" style="text-align:left;">Terms of Use </a>	
				</div>
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="copyright">
						Copyright 2015 &copy; <a target="_blank" href="http://www.yodhaa.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Yodhaa Business Solutions Pvt Ltd </a>
					</div>
				</div>						
			</div>
								
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
  </body>
</html>