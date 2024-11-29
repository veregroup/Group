<?php
include('connection/connect.php');

 session_start(); //session started by unique user_id
  
error_reporting(0);                                                                      //for printing the  text
  $sql = "SELECT * FROM signup where user_id='".$_SESSION["user_id"]."'";
  $result = mysqli_query($db, $sql);
  $row = mysqli_fetch_array($result);
  $name=$row['firstname'];

  if($_SESSION["user_id"]==0)
  {
	  $none='none';
  }

?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Recipe of month</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php"><img src="images/doof.png" alt="Logo"></a>
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
					<li class="current">
							<a href="featured.php">Recipe of Month</a>
					</li>
					
					<li>
						<a href="about.php">About</a>
					</li>
					<?php
						if(empty($_SESSION["user_id"]))
							{
								echo '<li><a href="login.php">login</a></li>';
								echo '<li><a href="signup.php">signup</a></li>';
							}
						else
							{
									
									
									
									$logout= '<form action="login.php" method="post" >
									<input type="submit" id="logout" name="logout" value="logout" style="width:100px;color:#000;border:none;padding:5px;font-size:15px;"  ></form>';
							}

						?>
					
				</ul>
			</div>
			<div class="body">
				<div id="content">
					<div>
						<div>
							<h3>ILOCOS EMPANADA</h3>
							<p>
							Ilocos empanadas are a Filipino pastry turnover with a rice flour wrapper and a filling of shredded green papaya, longganisa, egg, and other ingredients.
							</p>
							<a href="index.php"><img src="images/ilocosempanada.jpg" alt="Image"></a>
							<p>
							Historically, the empanada was brought to Ilocos province by the Spaniards and its former Latin American colonies during their occupation. A Spanish empanada on the other hand is made out of a wheat flour crust and stuffed with a filling of meat, vegetables, cheese, or sauce. The basic Ilocos empanada has a rice or galapong wrapper stuffed with shredded green papaya. Other fillings such as longganisa and egg are more recent innovations to showcase the flavours of the region. And, since baking is a Western import and not a method of cooking indigenous to the islands, the empanadas of Ilocos are deep-fried in oil.


						</p>
								
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div>
				
			</div>
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