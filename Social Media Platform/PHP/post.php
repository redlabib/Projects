<?php
	include('includes/database.php');
	include('includes/session.php');
							
							
									$user=$_SESSION['id'];
									$content=$_POST['content'];
									$time=time();
									
									$update=mysqli_query($con," INSERT INTO post (user_id,content,created)
									VALUES ('$id','$content','$time') ");

									
										header('location:home.php');
									
									
									
							
?>