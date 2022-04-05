<!DOCTYPE html>
<html>

	<head>
		<title>Welcome To BeeFriends  </title>
		<link rel="stylesheet" type="text/css" href="css/signupp.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
		<center>	
			<h1>Welcome to BeeFriends</h1>
		</center>

		<br>	
		<script src="valid.js"></script>
		<fieldset class="sign-up-form-1">
		<form method="post" action="signup_form.php" enctype="multipart/form-data" onsubmit="return validated()">
			<table cellpadding="5" cellspacing="5">
				<legend>Profile Information</legend>
				<tr>
					<td><label>First name</label></td>
					<td><label>Last name</label></td>
				</tr>
				<tr>
					<td><input type="text" name="firstname" placeholder="Enter your firstname..." class="form-1" title="Enter your firstname" required /></td>
					
					<td><input type="text" name="lastname" placeholder="Enter your lastname..." class="form-1" title="Enter your lastname" required /></td>
					
				</tr>
				<tr>
					<td><label>Username</label></td>
					<td><label>Re-enter your username</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="Enter your username....." class="form-1" title="Enter your username" required /></td>
					<td><input type="text" name="username2" class="form-1" title="Enter your username" required /></td>
				</tr>
				
				<tr>
					<td><label>Date of Birth:</label></td>
					<td>
					<select name=day style="font-size:18px;" required>
					<?php

					$day=1;
					while($day<=31)
					  {
					  echo "<option> $day
					  </option>";
					  $day++;
					  }
					?>
					</select>
					<select name=month style="font-size:18px;" required>
						<option>January</option>
						<option>Febuary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
					<select name=year style="font-size:18px;" required>
					<?php
					$year=1960;
					while($year<=2002)
					  {
					  echo "<option> $year
					  </option>";
					  $year++;
					  }
					?>
					</select>
					</td>
				</tr>
				<tr>
					<td><label>Gender:</label></td>
					<td>
					<label>Male</label><input type="radio" name="gender" value="male" required />
					<label>Female</label><input type="radio" name="gender" value="female" required />
					</td>
				</tr>
				<tr>
					<td><label>Phone Number:</label></td>
					<td><input type="number" name="number" placeholder="204441XXXX" maxlength="11" class="form-1" title="Enter your mobile number" required /> </td>
					
				</tr>
				<tr>
					<td><label>Your email address</label></td>
					<td><label>Re-enter your email</label></td>
				</tr>
				<tr>
					<td><input type="email" name="email" placeholder="Enter your email address..." class="form-1" title="Enter your firstname" required /></td>
					<td><input type="email" name="email2" class="form-1" title="Enter your lastname" required /></td>
				</tr>
				
				<tr>
					<td><label>Password</label></td>
					<td><label>Re-enter your password</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="Enter your password..." class="form-1" title="Enter your username" required /></td>
					<td><input type="password" name="password2" class="form-1" title="Enter your username" required /></td>
				</tr>
			</table>
		</fieldset>
		
		<br />	
			
		<br />
		<br />
					<input type="submit" name="submit" value="Sign up" class="btn-sign-in" title="Sign up" /> 
		</form>
		
		</div>
	</div>

</body>

</html>