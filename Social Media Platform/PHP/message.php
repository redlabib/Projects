

<!DOCTYPE html>
<html>

	<head>
		<title> BeeFriends </title>
		<link rel="stylesheet" type="text/css" href="css/homee.css">
	</head>

<body>
<?php 
include("includes/database.php");
include ('includes/session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="BeeFriends"> <img src="image/logo.jpg" style="height: 50px; width: 100px;"></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="profile.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label>Home</label></a></li>
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li>
				<li><a href="friends.php" title="Friends"><label>Friends</label></a></li>
				<li><a href="message.php" title="Messages"><label class="active">Messages</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">

				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		
		<div id="right-nav">
			<h1>Send a message</h1>
	<div>
			<div class="col-md-6 col-sm-3 text-center">
								<form method="post" id="send_message" action="send_message.php">
										<div class="control-group">
											<label><b>To:</b></label>
                                          <br>
                                          <select name="firstname">
													  <option>		
													  	<?php
																	$result=mysqli_query($con,"SELECT * FROM user");
			
			$row_count = 1;
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <option> <b>".$test['firstname']."</b></option>";
				echo " <b>".$test['lastname']."</b>";
				echo "</div> ";
				echo "<hr /> ";		
			
				
				++$row_count;
			}
															?>  </option>
                                              	
								</select>
							<hr>
										<div class="control-group">
											<label>Message:</label>
                                          <div class="controls">
											<textarea name="my_message" class="my_message" required></textarea>
                                          </div>
                                        </div>
										<hr>
										<div class="control-group">
                                          <div class="controls">
												<button> Send </button>

                                          </div>
                                        </div>
                                </form>
            </div>

            <div>
             	Your Messages:
				<hr>
				<?php 
				$query = $con->query("SELECT * from messages
				LEFT JOIN user on messages.user_id = user.user_id where user_id = '$id' ");
				while($row = $query->fetch()){
				$id = $row['message_id'];
				
				?>
				
				<div class="message"><?php echo $row['text']; ?>
				<hr>
				<div class="pull-left"><?php echo $row['sent']; ?></div>
				<div class="pull-right">Sent by: <?php echo $row['firstname']." ".$row['lastname']; ?></div>

				<hr>
				<br>
				</div>
				</div>
				<?php } ?>
            </div>
	</div>
	
		</div>
		


</body>

</html>