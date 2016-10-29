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
		<!--<div data-role="page" id="login" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div>
				<br />
			<div data-role="content" style="text-shadow: slideup" class= "form">
				<form name="login" action="testerform.php" method= "post">
					Username: <br> <input type="text" name="username" placeholder= "Username" required/> <br><br>
					Password: <br> <input type="password" name="password" placeholder= "Password" required/> <br><br>
					<input type="submit" name="submit" value= "Login" required/>
				</form>
				<p>Not registered yet? <a href='register.php' rel= "external" >Register Here </a> </p>
			</div>	
		</div> -->
		<!--<div data-role="page" id="landingPage" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div>
				<center><img src ="image/logo.jpg" style="height: auto; width: auto; max-width: 100%;" /></center>
			<div data-role="content" style="text-shadow: none">
				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Welcome to Ashesi University College
				</div> </a>
				<br />
				
				<a href="#departmentals" data-transition="pop">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						Click here to take a Departmental Tour
					</div>
				</a>

			</div>
		</div> -->
		<div data-role="page" id="departmentals">

			<div data-role="header" style="text-shadow: none">
				<h1>DEPARTMENT LOCATIONS OR BLOCKS</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->

			<div data-role="content" style="text-shadow: slideup">
					<a href="#cs" data-transition="pop">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						Computer Science
					</div> </a>
					<br/>
					
					<a href="#ba" data-transition="slideup">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						Business Administration
					</div> </a>
					<br/>
					
					<a href="#mis" data-transition="slide">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						Management Information system
					</div> </a>
					<br/> <br/>
					
					<a href="#eng" data-transition="flow">
					<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
						 Engineering
							<select id="filter-menu" data-native-menu="false">
								<option value =""> </option>
								<option value ="ME">Mechanical </option>
								<option value ="EE"> Electrical and Electronic</option>
								<option value ="CE"> Computer</option>
							</select>
					</div> </a>
					<br/><br/>
					<br />
			</div><!-- /content -->
		</div><!-- /page -->
		
		<!-- Computer Science Department -->
		<div data-role="page" id="cs" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				<center><img src ="image/csd.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
			<div data-role="content" style="text-shadow: none">
				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					<h2>Computer Science</h2>
					<p style="text-align: justify;">Computer science is a discipline that spans theory and practice. It requires thinking both in abstract terms and in concrete terms. The practical side of computing can be seen everywhere. Nowadays, practically everyone is a computer user, and many people are even computer programmers. <!--Getting computers to do what you want them to do requires intensive hands-on experience. But computer science can be seen on a higher level, as a science of problem solving. Computer scientists must be adept at modeling and analyzing problems. They must also be able to design solutions and verify that they are correct. Problem solving requires precision, creativity, and careful reasoning. -->
					</p>
				</div> </a>
				<br />

				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Click here for more
				</div> </a>
				<br />
				
				<div >
					<center><img src ="image/CS_Ashesi_2.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
				</div>
			</div><!-- /content -->
			
			
		</div><!-- /page -->
		
		<!-- BA Department -->
		<div data-role="page" id="ba" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				<center><img src ="image/bad.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
			<div data-role="content" style="text-shadow: none">
				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					<h2>Business Adminitration Department</h2>
					
					<h3 style="text-align: left;">Market Research</h3>
					<p style="text-align: justify;">
							Timely and high quality information is crucial for the success of firms in today's highly competitive and evolving environment. Market research is an organized way of developing and providing information for managerial decision-making. This course takes the perspective of the manager who uses market research data. The course will introduce students to research methodology and implementation, as well as how to evaluate market research proposals and reports. <!--The course is quantitative in its orientation and will provide an overview of how market research methods can be applied to solve problems in specific application areas such as estimating market potential, designing and positioning new products and services, pricing, and measuring customer satisfaction. The class consists of lectures, classroom discussions, and an applied team project. This course will give students a basic understanding of research methodology and implementation, and will enable students to effectively evaluate market research proposals, interpret, review, and criticize subsequent reports. -->
					</p>
					
					<h3 style="text-align: left;">Financial Accounting</h3>
				</div> </a>
				<br />

				<a href="http://www.ashesi.edu.gh/academics/business-administration/8-academics/business-administration16/41-business-administration-course-description.html" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Click here for more
				</div> </a>
				<br />
				
				<div> 
					<center><img src ="image/Ashesi_Header_14.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
				</div>
			</div><!-- /content -->
				
		</div><!-- /page -->
		
		<!-- MIS Department -->
		<div data-role="page" id="mis" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				<div>
					<center><img src ="image/mis.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
				</div>
			<div data-role="content" style="text-shadow: none">
				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					<h2>Management Information System</h2>
					<p style="text-align: justify;">
						In today’s rapidly changing business world, a company’s ability to compete depends on how quickly that enterprise can respond to change.
						Central to this ability, is the successful use of information, and by extension, the appropriate deployment of information technology.

						<!--The Management Information Systems program at Ashesi University seeks to train system analysts and managers, who combine the knowledge 
						of information technology with an understanding of business and organizational strategy. As such, this interdisciplinary program trains 
						managers who are uniquely empowered to enhance the competitiveness of enterprises in the new knowledge economy. -->
					</p> 
	
				</div> </a>
				<br />

				<a href="http://www.ashesi.edu.gh/academics/business-administration/management-information-systems-courses.html" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Click here for more
				</div> </a>
				<br />
				<div>
					<center><img src ="image/CS_Ashesi_2.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
				</div>
			</div><!-- /content -->
				
		</div><!-- /page -->
		
		<!-- Engineering Department -->
		<div data-role="page" id="eng" style="background: white">

			<div data-role="header" style="text-shadow: none">
				<h1>Ashesi University College</h1>
				<a href="index.html" data-role="button" data-icon="refresh" data-iconpos="notext" style="background: white;border: none;">Refresh</a>
			</div><!-- /header -->
				<div><center><img src ="image/engd.jpg" style="height: auto; width: auto; max-width: 100%;"/></center></div>
			<div data-role="content" style="text-shadow: none">
				<a href="#" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					<h2>Engineering</h2>
					<p style="text-align: justify;">
						The engineers tasked to solve society's problems need a broad range of skills that will allow them to tap into ideas beyond one engineering field; they have to be entrepreneurs who can see through challenges and find solutions within a local context. They must be ethical and responsible, and see the short and long term effects of their decisions on society and the environment. They also have to be leaders who can communicate their ideas and work with teams to solve problems.
					</p>
				</div> </a>
				<br />

				<a href="http://www.ashesi.edu.gh/academics/engineering.html" data-transition="pop">
				<div style="background: rgb(1, 229, 255);color:white; text-align:center; font-weight:bolder; padding: 40px;box-shadow: 5px 5px 5px grey;">
					Click here for more
				</div> </a>
				<br />
				<div>
					<center><img src ="image/Engineering_Ashesi.jpg" style="height: auto; width: auto; max-width: 100%;"/></center>
				</div>

			</div><!-- /content -->
				
		</div><!-- /page -->
		 

	</body>

	
</html>
