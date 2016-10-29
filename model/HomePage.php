<!--Developer @ Francis Yinbil
	Contact: 0248123728
 -->

<! doctype html>
<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/default.css">
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" id="pageheader">
				<div id="div7"> <img src="images/logo.JPG" height="60"/> </div>
					<strong><font color="">GAEC Veterinary Clinic</font></strong>
				<ul>
					<!--Links to important websites-->
			  <li><a href="HomePage.php">Home</a></li>
			  <li><a href="patient.php">Add New Patient</a></li>
			  <li><a href="viewPatient.php">View Patient</a></li>
			  <li><a href="appointment.php">Book Appointment</a></li>
			  <li><a href="viewAppointment.php">View Appointment</a></li>
			  <li><a href="animals.php">Aminals Images</a></li>
			  <li><a href="video.php">Aminals Videos</a></li>
			  <li2 ><a href="logout.php"><font color = 'white'>Logout</font> </a></li2>
			</ul>
				</td>

			</tr>
			<tr>
				
				<td id="content">
					<div id="divPageMenu">
						<span>Welcome To The Atomic Veterinary Clinic</span>		
					</div>
					<div id="divContent">
						<div class="form" style="float:left">
							<h5>Images 1 </h5>
							<div class="photos" style="float:left">
							<img src="images/cat.jpg" height="100"/>
							<img src="images/dog.jpg" height="100"/>
							<img src="images/animal.jpg" height="100"/>
							</div>
						</div>
						<div class="form" style="float:left">
							<h5>Images 2 </h5>
							<div class="photos">
							<img src="images/rabbit.jpg" height="100"/>
							<img src="images/ani.jpg" height="100"/>
							<img src="images/fowl.jpg" height="100"/>
							</div>
						</div>
						
						<div class="form" style="float:right">
							<h5>Images 3 </h5>
							<img class="mySlides w3-animate-top" src="images/cat.jpg" height="80%" width="100%"/>
							<img class="mySlides w3-animate-top" src="images/goat1.jpg" height="80%" width="100%"/>
							<img class="mySlides w3-animate-bottom" src="images/dog.jpg" height="80%" width="100%"/>
							<img class="mySlides w3-animate-top" src="images/animal.jpg" height="60%" width="100%"/>
							<img class="mySlides w3-animate-bottom" src="images/dogg.jpg" width="100%"/>
							<img class="mySlides w3-animate-bottom" src="images/rabbit.jpg" height="80%" width="100%"/>
							<img class="mySlides w3-animate-top" src="images/ani.jpg" height="60%" width="100%"/>
							<img class="mySlides w3-animate-bottom" src="images/fowl.jpg" height="80%" width="100%"/>
							<img class="mySlides w3-animate-top" src="images/goat2.jpg" height="80%" width="100%"/>
						</div>
						<script>
							var myIndex = 0;
							carousel();
							function carousel(){
								var i;
								var x = document.getElementsByClassName("mySlides");
								for(i=0; i<x.length; i++){
									x[i].style.display = "none";
								}
								myIndex++;
								if(myIndex > x.length){
									myIndex=1
								}
								x[myIndex-1].style.display = "block";
								setTimeout(carousel, 2500);
							}
						</script>
						
					</div>
					
				</td>
			</tr>
	
		</tr>
		
		</tr>
			
			<tr>
				<td colspan="2" id="pagefooter">
				<footer>

					<div class="menuitem"><a href="http://mail.office365.com/"><font color = 'white'> Send Client An Email </font></a></div>
					<div class="menuitem"><a href="http://www.google.com/"><font color = 'white'>
						Search For Info About Diseases</font></a></div>
					<div class="menuitem"><a href="http://www.who.int/topics/en/"><font color = 'white'> Animal Health News</font></a></div>
			
						<?php echo '<a href="logout.php">Logout </a>'; ?>
						<p>©Atomic Veterinary Clinic. All rights reserved.</p>
						<p>Ghana Atomic Energy Commission(GAEC),Kwabenya;Accra, Ghana | Phone: +233.302.610.330</p>
				 </footer>
				</td>
			</tr>	
			
		</table>
	</body>
</html>	
