					
<?php
include('includes/database.php');

						if(isset($_POST['submit']))
						{
							$username=$_POST['username'];
							$password=$_POST['password'];
						{
							$result = mysqli_query($con,"SELECT * FROM user WHERE username = '$username' and password='$password'");
							
							$row = mysqli_fetch_array($result);
							$count = mysqli_num_rows($result);				
								if ($count == 0) 
									{
									echo "<script>alert('Please check your username and password and try again!'); window.location='signin.php'</script>";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['user_id'];
										header("location:home.php");
									}
						}				
						}
?>