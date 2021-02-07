<?php require 'process.php'; ?>	
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	 <div class="container">
	 	<div class="row">
	 		<div class="col-lg-6">

	 			<div class="card bg-black">
	 				<div class="title bg-primary text white">
	 						<h2>LOGIN FORM</h2>
	 				</div>

	 				<div class="body"> 

	 					<form method="POST" action="process.php">
	 						<div>
	 							<label for="user_name">USER NAME :</label>
	 							<input type="text" name="user_name" required="">
	 						</div>

	 						<div>
	 							<label for="password">USER NAME :</label>
	 							<input type="password" name="password" required="">
	 						</div>

	 						<input type="submit" name="login" value="login">
	 					</form>

	 				</div>


	 			</div>
	 		</div>

	 	</div>
	 </div>
</body>
</html>