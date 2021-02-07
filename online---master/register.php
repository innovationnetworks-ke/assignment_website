<?php include 'process.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
<!-- 	<link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-lg-6">

	 			<div class="card bg-black">
	 				<div class="title bg-primary text white">
	 						<h2>REGISTRATION FORM</h2>
	 				</div>

	 				<div class="body"> 

	 					<form method="POST" action="">
	 						<div>
	 							<label for="user_name">USER NAME :</label>
	 							<input type="text" name="user_name" required="">
	 						</div>

	 						<div>
	 							<label for="fname">FIRST NAME :</label>
	 							<input type="text" name="fname" required="">
	 						</div>
	 						<div>
	 							<label for="lname">LAST NAME :</label>
	 							<input type="text" name="lname" required="">
	 						</div>
	 						<div>
	 							<label for="email">EMAIL :</label>
	 							<input type="email" name="email" required="">
	 						</div>

	 						<div>
	 							<label for="password1">PASSWORD :</label>
	 							<input type="password" name="password1" srequired="">
	 						</div>
	 						<div>
	 							<label for="password2">REPEAT PASSWORD :</label>
	 							<input type="password" name="password2" srequired="">
	 						</div>
	 						<div>
	 							<label for="date">DATE OF BIRTH :</label>
	 							<input type="date" name="date" required="">
	 						</div>
	 						
	 						


	 						<input type="submit" name="register" value="register">
	 					</form>

	 				</div>


	 			</div>
	 		</div>

	 	</div>
	 </div>
</body>
</html>