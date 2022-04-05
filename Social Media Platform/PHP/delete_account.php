<!DOCTYPE html>
<html>

	<head>
		<title> BeeFriends </title>
		
	</head>

<body>


<?php
include("includes/database.php");
include("includes/session.php");

$query = mysqli_query($con,"DELETE FROM user WHERE user_id='$id'");
echo "Account sucessfully deleted.";
?>
						

</body>

</html>