<!DOCTYPE html>
<html>

	<head>
		<title> BeeFriends </title>
		<link rel="stylesheet" type="text/css" href="css/profilee.css">
	</head>

<body>
<?php include ('includes/session.php');?>

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
				<li><a href="profile.php" title="Profile"><label>Profile</label></a></li>
				<li><a href="friends.php" title="Friends"><label class="active">Friends</label></a></li>
				<li><a href="message.php" title="Messages"><label>Messages</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button>Update Picture</button></a>
				</div>

				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		
		<div id="right-nav">
			<h1>Your Friends</h1>
			<hr />
			<br />
			<?php
			include('includes/database.php');

			$result=mysqli_query($con,"SELECT * FROM user");
			
			$row_count = 1;
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo "<hr /> ";		
				echo "<br /> ";		
				echo "<div>";
				echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src=".$test['profile_picture'].">";
				echo "</div> ";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['firstname']."</b>";
				echo "</div> ";
				echo "<hr /> ";		
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['lastname']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['birthday']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['number']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";	
				echo "<a href ='message.php?user_id=$id'><button>Send Message</button></a>";
				echo "</div> ";
				echo "<br /> ";		
				echo "<br /> ";	
				echo "<br /> ";	
				++$row_count;
			}
			?>
			
		</div>

	
		</div>
		

	
		
	</div>

</body>

</html>