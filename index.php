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
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="rating.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="rating.js"></script>
<script language="javascript" type="text/javascript">
$(function() {
    $("#rating_star").codexworld_rating_widget({
        starLength: '5',
        initialValue: '',
        callbackFunctionName: 'processRating',
        imageDirectory: 'images/',
        inputAttr: 'postID'
    });
});

function processRating(val, attrVal){
    $.ajax({
        type: 'POST',
        url: 'rating.php',
        data: 'postID='+attrVal+'&ratingPoints='+val,
        dataType: 'json',
        success : function(data) {
            if (data.status == 'ok') {
                alert('You have rated '+val+' to CodexWorld');
                $('#avgrat').text(data.average_rating);
                $('#totalrat').text(data.rating_number);
            }else{
                alert('Some problem occured, please try again.');
            }
        }
    });
}
</script>
<style type="text/css">
    .overall-rating{font-size: 14px;margin-top: 5px;color: #8e8d8d;}
</style>
</head>
<body>
	<div class="header">
		<div>
			<a href="index.php"><img src="images/doof.png" alt="Logo"></a>
		</div>
	
		
	</div>
	<div  style="background-color:;margin:auto;min-height:20px;display:<?php echo $none;?>;">
	<div  style="background-color:;margin-left:200px;width:950px;min-height:30px;">
	<p style='float:left;color:#449c3a;margin-left:10px;font-size:20px;'>You successfully login!</p>
		<p style='float:right;color:#fff;margin-left:px;font-size:20px;'>Welcome:<span style='margin-right:0px;display:inline-block;margin-right:5px;'><?php echo $name ?></span>
			<image src='images/user.png'  style='display:inline-block;height:20px;width:20px;margin-top:5px;margin-right:5px;'/>
	</div>	
	</div>
	<div class="body">
	
		<div>
			<div class="header">
				<ul>
					<li class="current">
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="recipes.php">Recipes</a>
					</li>
					<li>
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
				<div>
					<a href="index.php"><img src="images/pnoy.jpg" alt="Image"></a>
				</div>
				<ul>
					<li class="current">
						<a href="blog.php"><img src="images/shanghai.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.php">Lumpiang Shanghai</a></h2>
							<p>
								Walang Katulad
								
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/taho.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.php">Taho</a></h2>
							<p>
								Pinoy Dessert
							</p>
						</div>
					</li>
					<li>
						<a href="blog.php"><img src="images/balut.jpg" alt="Image"></a>
						<div>
							<h2><a href="blog.php">Balut</a></h2>
							<p>
								Duck egg
							</p>
						</div>
					</li>
				</ul>
			</div>
			<div class="footer">
				<ul>
				<li>
						<h2><a href="recipes.php"> Recipes</a></h2>
						<a href="recipes.php"><img src="images/pnoydoof.jpg" alt="Image"></a>
					</li>
					<li>
						<h2><a href="featured.php">Featured Recipes</a></h2>
						<a href="featured.php"><img src="images/feature.jpg" alt="Image"></a>
					</li>
					
				</ul>
				
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
				&copy; Vere's Group
			</p>
		</div>
	</div>
</body>
</html>