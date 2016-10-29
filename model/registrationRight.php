<!--Developer @ Francis Yinbil
	Contact: 0248123728
 -->
<! doctype html>
<html>
	<head>
		<title>Registration of Users</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="jquery-1.12.1.js"></script>
		<script language = "javascript" type = "text/javascript">
        
      </script>
	</head>
	<body>
		<table>
			<tr>
				<td colspan="2" id="pageheader">
				<div id="div7"> <img src="images/logo.jpg" height="60"/> </div>
					<strong><font color="">GAEC Veterinary Clinic</font></strong>
				</td>

			</tr>
			<tr>
				
				<td id="content">
					<div id="divPageMenu">
						<span></span>		
					</div>
					<div id="divContent">

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
		echo "<div class='form'> <h3> You are registered successfully. </h3><br/> Click here to <a href='loginClinic.php'>Login</a></div>";
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
	<p>Already Registered? <a href='loginClinic.php'>Click To Login </a> </p>
	</div>
	<?php } ?>
				</td>
			</tr>
		</tr>
		
		</tr>
			
			<tr>
				<td colspan="2" id="pagefooter">
				<footer>
						<p>©Atomic Veterinary Clinic. All rights reserved.</p>
						<p>Ghana Atomic Energy Commission(GAEC),Kwabenya;Accra, Ghana | Phone: +233.302.610.330</p>
				 </footer>
				</td>
			</tr>	
			
		</table>
	</body>
</html>	
