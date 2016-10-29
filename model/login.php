<?php 
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no;" />

		<link rel="stylesheet"  href="css/jquery.mobile.structure.css" />
		<link rel="stylesheet" href="css/jquery.mobile.theme.css" />
		<link rel="stylesheet" href="css/stye.css" />

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

		<div data-role="page" id="landingPage" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				
			<a href="#login" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Login
				</div> 
			</a>
				
			<div data-role="content" style="text-shadow: none">
				<div data-role="page" id="login">
					<div data-role="header" style="text-shadow: none">
						<h1>LOGIN USER</h1>
						<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
					</div><!-- /header -->
						<div data-role="content" style="text-shadow: slideup" class= "form">
							<form name="login" action="testerform.php" method= "post">
							Username: <br> <input type="text" name="username" placeholder= "Username" required/> <br><br>
							Password: <br> <input type="password" name="password" placeholder= "Password" required/> <br><br>
							<input type="submit" name="submit" value= "Login" required/>
							</form>
							<p>Not registered yet? <a href='register.php' rel= "external" >Register Here </a> </p>
						</div>
				</div>
			</div>
		</div>
					<!-- Script here -->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="cordova.js"></script>
		<script type="text/javascript" src="script/platformOverrides.js"></script>
		<script type="text/javascript" src="scripts/index.js"></script>
		<script async defer
	    	src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
	    </script>
	    <script type="text/javascript">
	    	$("#btn").click(function(){
	    		alert("you just clicked me");
	    	});
	    </script>
	    
	   <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

	      function initMap() {
	        var map = new google.maps.Map(document.getElementById('map'), {
	          center: {lat: -34.397, lng: 150.644},
	          zoom: 6
	        });
	        var infoWindow = new google.maps.InfoWindow({map: map});

	        // Try HTML5 geolocation.
	        if (navigator.geolocation) {
	          navigator.geolocation.getCurrentPosition(function(position) {
	            var pos = {
	              lat: position.coords.latitude,
	              lng: position.coords.longitude
	            };

	            infoWindow.setPosition(pos);
	            infoWindow.setContent('Location found.');
	            map.setCenter(pos);
	          }, function() {
	            handleLocationError(true, infoWindow, map.getCenter());
	          });
	        } else {
	          // Browser doesn't support Geolocation
	          handleLocationError(false, infoWindow, map.getCenter());
	        }
	      }

	      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
	        infoWindow.setPosition(pos);
	        infoWindow.setContent(browserHasGeolocation ?
	                              'Error: The Geolocation service failed.' :
	                              'Error: Your browser doesn\'t support geolocation.');
	      }
	    </script>
	    <script async defer
	    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
	    </script>
	</body>

	
</html>
