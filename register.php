<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>COLLATE</title>

		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" /> -->
		<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width">
		
		<link rel="stylesheet"  href="css/jquery.mobile.structure.css" />
		<link rel="stylesheet" href="css/jquery.mobile.theme.css" />
		<!--<link rel="stylesheet" href="css/style.css" /> -->

		<script>
			var userAgent = navigator.userAgent + '';
			if (userAgent.indexOf('iPhone') > -1) {
				document.write('<script src="js/lib/cordova-iphone.js"></sc' + 'ript>');
				var mobile_system = 'iphone';
			} else if (userAgent.indexOf('Android') > -1) {
				document.write('<script src="js/lib/cordova-android.js"></sc' + 'ript>');
				var mobile_system = 'android';
			} else {
				var mobile_system = '';
			}
		</script>

		<script src="js/lib/jquery.js"></script>
		<!-- your scripts here -->
		<script src="js/app/app.js"></script>
		<script src="js/app/bootstrap.js"></script>
		<script src="js/lib/jquery.mobile.js"></script>
		<style>
			.ui-selectmenu.ui-popup .ui-input-search {
				margin-left: .5em;
				margin-right: .5em;
			}
			.ui-selectmenu.ui-dialog .ui-content {
				padding-top: 0;
			}
			.ui-selectmenu.ui-dialog .ui-selectmenu-list {
				margin-top: 0;
			}
			.ui-selectmenu.ui-popup .ui-selectmenu-list li.ui-first-child .ui-btn {
				border-top-width: 1px;
				-webkit-border-radius: 0;
				border-radius: 0;
			}
			.ui-selectmenu.ui-dialog .ui-header {
				border-bottom-width: 1px;
			}
			a {
				text-decoration: none;
			}
		</style>

	</head>
	<body>

		<!-- <div data-role="page" id="landingPage" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div>
				<center><img src ="image/logo.jpg" style="height: auto; width: auto; max-width: 100%;" /></center>
			<div data-role="content" style="text-shadow: none">
				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Welcome to Ashesi Car Pooling
				</div> </a>
				<br />
				
				<a href="#reg" data-transition="pop">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						Register 
					</div>
				</a>
			</div>
		</div>-->
	
		<!-- Register Username -->
		<div data-role="page" id="reg" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
			<div data-role="content" style="text-shadow: none">
				<br />
				<div data-role="content" style="text-shadow: slideup" class= "form">
							<?php 
					require('db.php');
					if(isset($_POST['username'] ) ){
						$username=$_POST['username'];
						$password=$_POST['password'];
						$email=$_POST['email'];
						$registered_date=date("Y-m-d H:i:s");
						
						$username= stripslashes($username);
						$username= mysql_real_escape_string($username);
						
						$password= stripslashes($password);
						$password= mysql_real_escape_string($password);
						
						$email= stripslashes($email);
						$email= mysql_real_escape_string($email);
						
						$query= "insert into users (username, password, email,registered_date) value ('$username', '".md5($password)."', '$email','$registered_date')";
						$result= mysql_query($query);
						if($result){
							echo "<div class='form'> <h3> You are registered successfully. </h3><br/> Click here to <a href='login.php' rel='external' >Login</a></div>";
						}
					}else{
						?>
						<div class= "form">
							<h1>Registration</h1>
							<form name="registration" action="" method= "post">
								Username: <br> <input type="text" name="username" placeholder= "Username" required/> <br><br>
								Email: <br> <input type="email" name="email" placeholder= "Email" required/> <br><br>
								Password: <br> <input type="password" name="password" placeholder= "Password" required/> <br><br>
								<input type="submit" name="submit" value= "Register" required/>
							</form>
							<p>Already Registered? <a href='login.php' rel= "external" >Click To Login </a> </p>
						</div>
						<?php } 
						?>
				</div>	
				<br />
			
			</div>
		</div>
		
	</body>

	
</html>
