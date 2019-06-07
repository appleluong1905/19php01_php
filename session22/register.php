<!DOCTYPE html>
<html>
<head>
	<title>Register - Session 22</title>
</head>
<body>
	<?php
		$errName = '';
		$errEmail = '';
		$errPhone = '';
		$errBithday = '';
		$errCity = '';
		$errGender = '';

		if (isset($_POST['register'])) {
			
		}
	?>
	<h1>Register</h1>
	<form action="#" method="POST">
		<p>Name
			<input type="text" name="name">
		</p>
		<p class="error"><?php echo $errName;?></p>
		<p>Email
			<input type="text" name="email">
		</p>
		<p class="error"><?php echo $errEmail;?></p>
		<p>Phone
			<input type="text" name="phone">
		</p>
		<p class="error"><?php echo $errPhone;?></p>
		<p>Gender
			<input type="radio" name="gender" value="male">Male
			<input type="radio" name="gender" value="female">Female
			<input type="radio" name="gender" value="other">Other
		</p>
		<p class="error"><?php echo $errGender;?></p>
		<p>Bithday
			<input type="date" name="bithday">
		</p>
		<p class="error"><?php echo $errBithday;?></p>
		<p>City
			<select name="city">
				<option value="">Please choose city</option>
				<option value="danang">Da Nang</option>
				<option value="quangnam">Quang Name</option>
				<option value="hue">Hue</option>
			</select>
		</p>
		<p class="error"><?php echo $errCity;?></p>
		<p><input type="submit" name="register" value="Register"></p>
	</form>
</body>
</html>