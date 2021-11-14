<?php

	include_once "../services/header.html";

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Register Customer</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Loozeelee Initiative" />

</head>
<body>

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="index.php">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--Register form-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="../actions/register_process.php" method="post">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Enter first name" name="Fname"  required>
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Enter last name " name="Lname" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Email" name="email"  required >
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Password" name="pass_1" required >
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" value="Confirm Password" name="pass_2"  required >
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-flag" aria-hidden="true"></i>
							<input  type="text" value="Country" name="country" required>
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fas fa-city" aria-hidden="true"></i>
							<input  type="text" value="City" name="city"  required >
							<div class="clearfix"></div>
						</div>

						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" value="Enter phone number" name="contact"  required >
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" name ="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>

</body>
</html>