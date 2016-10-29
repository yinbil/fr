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

		<!--<div data-role="page" id="landingPage" style="background: white">

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
				
				<a href="#login" data-transition="pop">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						Login 
					</div>
				</a>
			</div>
		</div> -->
		
		<!-- Login Username -->
		<div data-role="page" id="login" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				<br />
			<div data-role="content" style="text-shadow: slideup" class= "form">
				<form name="login" action="testerform.php" method= "post">
					Username: <br> <input type="text" name="username" placeholder= "Username" required/> <br><br>
					Password: <br> <input type="password" name="password" placeholder= "Password" required/> <br><br>
					<input type="submit" name="submit" value= "Login" required/>
				</form>
				<p>Not registered yet? <a href='register.php' rel= "external" >Register Here </a> </p>
			</div>	
		</div>
		

	</body>

	
</html>
