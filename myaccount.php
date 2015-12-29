<?php
    session_start();
    
    include 'connection.php';
    

    
    // standard login
    if(isset($_POST['standard-submit'])){
        $database = new connection();
        
        $username = htmlspecialchars($_POST['username']);
        $password = md5($_POST['password']);
        
        $query = "SELECT * FROM standarduser WHERE email='$username'AND password='$password'";
        $resultQuery = mysql_query($query);
        
        if(mysql_num_rows($resultQuery) == 1){
            header("Location:home.php");
        }else{
            echo "<script>alert('check username , password');</script>";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Company-HTML Bootstrap theme</title>

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
<div class="container">
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
<div class="menu">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation"><a href="index.html">Home</a></li>
<li role="presentation"><a href="support.html">Support</a></li>
<li role="presentation"><a href="myaccount.html" style="font-size: 14px;" class="active">My Account</a></li>
</ul>
</div>
</div>
</div>
</div>
</nav>
</header>

<section id="signin-page">
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3" style="margin-top: 75px;">
<div class="panel panel-login">
<div class="panel-heading">
<div class="row">
<div class="col-xs-6">
<a href="#" class="active" id="Standard-form-link">Standard</a>
</div>
<div class="col-xs-6">
<a href="#" id="Professional-form-link">Professional</a>
</div>
</div>
<hr>
</div>
<div class="panel-body">
<div class="row">
<div class="col-lg-12">
<form id="Standard-form" action="myaccount.php" method="post" role="form" style="display: block;">
<div class="form-group">
<input type="email" name="username" id="username" tabindex="1" class="form-control" placeholder="Email" value="">
</div>
<div class="form-group">
<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group text-center">
<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
<label for="remember" style="color:black;">Remember Me</label>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<input type="submit" name="standard-submit" id="standard-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-lg-12">
<div class="text-center">
<a href="" tabindex="5" class="forgot-password">Forgot Password?</a><hr>
<strong><a href="standard_registration.php"  id="" style="color:rgb(83, 195, 164);font-size:18px;">New user?</a></strong>
</div>
</div>
</div>
</div>
</form>

<!--  professional login -->



<form id="Professional-form" action="myaccount.php" method="post" role="form" style="display: none;">
<div class="form-group">
<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
</div>
<div class="form-group">
<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
</div>
<div class="form-group text-center">
<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
<label for="remember" style="color:black;">Remember Me</label>
</div>
<div class="form-group">
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
</div>
</div>
</div>
<div class="form-group">
<div class="row">
<div class="col-lg-12">
<div class="text-center">
<a href="" tabindex="5" class="forgot-password">Forgot Password?</a><hr>
<strong><a href=""  id="" style="color:rgb(83, 195, 164);font-size:18px;">New user?</a></strong>
</div>
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
</div>
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

<div class="col-md-4 ">
<div class="copyright">
Copyright 2015 &copy; <a target="_blank" href="http://www.yodhaa.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">Yodhaa Business Solutions Pvt Ltd </a>
</div>
<!--
All links in the footer should remain intact.
Licenseing information is available at: http://bootstraptaste.com/license/
You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Company
-->
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
             <script>
             $(function() {
               
               $('#Standard-form-link').click(function(e) {
                                              $("#Standard-form").delay(100).fadeIn(100);
                                              $("#Professional-form").fadeOut(100);
                                              $('#Professional-form-link').removeClass('active');
                                              $(this).addClass('active');
                                              e.preventDefault();
                                              });
               $('#Professional-form-link').click(function(e) {
                                                  $("#Professional-form").delay(100).fadeIn(100);
                                                  $("#Standard-form").fadeOut(100);
                                                  $('#Standard-form-link').removeClass('active');
                                                  $(this).addClass('active');
                                                  e.preventDefault();
                                                  });
               
               });
             </script>
             
             </body>
             </html>