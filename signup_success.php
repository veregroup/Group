
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>success signup </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php"><img src="images/logo.png" alt="Logo"></a>
		</div>
		
	</div>
	<div class="body">
		<div>
			<div class="header">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
						<a href="featured.php">Featured Recipes</a>
					</li>
					
					<li >
						<a href="about.php">About</a>
					</li>
				
					
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
						<div>
							<center><h4>Successfully Registered!</h4></center>
							<p>
								<center>Now you are the part of cooking website <a href="login.php">click here</a> to login.</center>
							</p>

							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
		<div>
				<h3>Featured Recipes</h3>
				<ul id="featured">
					<li>
						<a href="recipes.php"><img src="images/maja.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">MAJA BLANCA</a></h2>
							<span>by: JDCV</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/piyaya.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">PIYAYA</a></h2>
							<span>by: JPSL</span>
						</div>
					</li>
					<li>
						<a href="recipes.php"><img src="images/puto.jpg" alt="Image"></a>
						<div>
							<h2><a href="recipes.php">PUTO BUMBONG</a></h2>
							<span>by: JFAG</span>
						</div>
					</li>
				</ul>
			</div>
			
			<div>
				<h3>Get Updates</h3>
				<a href="https://www.facebook.com/panlasangpinoy" target="_blank" id="facebook">Facebook</a>
				<a href="https://www.youtube.com/user/panlasangpinoy" target="_blank" id="youtube">Youtube</a>
			
				 
			</div>
			<div style="display:<?php echo $none;?>;">
				<h3>Settings</h3>
				<a href="#"  ><?php echo $logout;?></a>
				
				 
			</div>
		</div>
	</div>
	<div class="footer">
		<div>
			<p>
				&copy;Vere's Group
			</p>
		</div>
	</div>
</body>
</html>