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
		
		<!-- Tester Form Page -->
		<div data-role="page" id="#" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				<br />
			<div data-role="content" style="text-shadow: none" >
				<?php
					require("db.php");
					//session_start();
					//check username, id and password sent from the form
					if(isset($_POST['username'])&&isset($_POST['password'])){
						$username=$_POST['username'];
						$password=$_POST['password'];
						
						$username= stripslashes($username);
						$username= mysql_real_escape_string($username);
						$password= stripslashes($password);
						$password= mysql_real_escape_string($password);
					
						$password_hash=MD5($password);
						
						
						$strQuery= "SELECT * FROM users WHERE username='$username' AND password='$password_hash'";
						// variable result holds the outcome of the query
						$result = mysql_query($strQuery) or die(mysql_error() );
						// Mysql_num_row is counting table row
						$num_of_rows = mysql_num_rows($result);
						if($num_of_rows==1){
						$user_id = mysql_result($result, 0, 'id');
						$_SESSION['$user_id']= $user_id;
						header("location:course.html" );
						}else{ 
						echo "<div class='form'> <h3> Username or Password is incorrect. </h3><br/> Click here to <a href='login.php' rel='external' >Login</a></div>";	
						}
					}		
				?>
			</div>	
				
		</div>

	</body>

	
</html>
