<!DOCTYPE html>
<html>

	<head>
		<title> BeeFriends </title>
		<link rel="stylesheet" type="text/css" href="css/signinn.css">
	</head>

<body>
	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="index.php" title="BeeFriends"> <img src="image/logo.jpg" style="height: 50px; width: 100px;"></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="signup.php" title="Sign up"><button class="btn-sign-up" value="Sign up">Sign up</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<h1>Welcome to BeeFriends</h1>
			<h2>Log in</h2>
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td><label>Username</label></td>
					<td><input  id="username" type="text" name="username" placeholder="hodor" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="*****" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>