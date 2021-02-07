<?php include 'config.php'; ?>
<?php session_start();

if (isset($_POST['register'])) {
	$username=mysqli_real_escape_string($conn, $_POST['user_name']);
	$fname=mysqli_real_escape_string($conn, $_POST['fname']);
	$lname=mysqli_real_escape_string($conn, $_POST['lname']);
	$email=mysqli_real_escape_string($conn, $_POST['email']);
	$date=mysqli_real_escape_string($conn, $_POST['date']);
	$password1=mysqli_real_escape_string($conn, $_POST['password1']);
	$password2=mysqli_real_escape_string($conn, $_POST['password2']);

	if (empty($username)) {array_push($errors, "username is required");}
	if (empty($fname)) {array_push($errors, "fname is required");}
	if (empty($lname)) {array_push($errors, "lname is required");}
	if (empty($email)) {array_push($errors, "email is required");}
	if (empty($password1)) {array_push($errors, "password is required");}
	if ($password1!=$password2) {array_push($errors, "entered password do not match");}

	$check=mysqli_query($conn, "SELECT * FROM users WHERE user_name='$username' and email='$email' LIMIT 1");
	$user=mysqli_fetch_assoc($check);

	if ($user) {
		if ($user['user_name']==$username) {array_push($errors, "username is already taken");}
		echo "checked";

		if ($user['email']==$email) {array_push($errors, "email is already taken");}
	}


	if (count($errors)==0) {
		$password=md5($password1);
		$u_id=mysqli_real_escape_string($conn,rand(0,1000));
		$hash=mysqli_real_escape_string($conn, rand(0,100));
		$sql= "INSERT INTO users (user_id, user_name, fname, lname, email, DOB, password, hash_code) VALUES ('$u_id','".$_POST['user_name']."', '$fname', '$lname', '$email', '$date','$password','$hash')";

		if (mysqli_query($conn, $sql)) {
			echo "checked";
			$_SESSION['user']=$username;
			$_SESSION['logged']=0;
			$_SESSION['active']=0;
			$_SESSION['msg']="registration successful, please activate your account using the link forwaded your email";

			$to=$email;
			$subject="Account activation";
			$message='Dear'.$username.' Click the following link below to activate your account : http://localhost/online/verify.php?email='.$email.'&hash='.$hash;

			mail($to, $subject, $message);

			$_SESSION['msg']=$message;
			header('location:success.php');}

		
		
		
	}
	else{
		array_push($errors, "Not registered");
		header('location:errors.php');
	}

}

//user login
if (isset($_POST['login'])) {
	$username=mysqli_real_escape_string($conn, $_POST['user_name']);	
	$password1=mysqli_real_escape_string($conn, $_POST['password']);

	if (empty($username)) {array_push($errors, "username is required");}
	if (empty($password)) {array_push($errors, "you must enter your password to continue");}

	if (count($errors)==0) {
		$password=md5($password1);
		$check=mysqli_query($conn, "SELECT * FROM users WHERE user_name='$username' and password='$password'");

		if (mysqli_num_rows($check)==0) {
			array_push($errors, "invalid username");
		}
		else{
			$user=mysqli_fetch_assoc($check);
			if ($user['password']==$password){
				$_SESSION['logged']=1;
				$_SESSION['user']=$username;
				header('location:index.php');
			}
			else{
				array_push($errors, "invalid password");
				header('location:errors.php');
			}
		}



	}
	else{
		array_push($errors, "login failed");
		header('location:')
	}
}


?>