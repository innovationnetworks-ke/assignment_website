<?php include 'config.php' ?>
<?php include 'includes/header.php' ?>

<?php 

if (!isset($_SESSION['logged'])) {
	header('location:errors.php');
} 

if ($_SESSION['logged']) {
	header('location:errors.php');
}

if (isset($_GET['logout'])) {
	$_SESSION['logged']=0;
	session_unset($_SESSION['logged']);
	session_destroy();
	header('location:login.php');
}




?>



<!DOCTYPE html>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>

	<title>
		PRIME DEVELOPERS
	</title>
</head>
<body>
	<?php if ($_SESSION['logged']=1):?>
		<a href="index.php?logout=1">logout</a>


	<div class="top_body">
		<p class="prime">Prime developers<p>

		<p> We offer quality dynamic websites at your favourite costs to suit your needs.</p>


	</div>

	<div class="second">
		<p style="padding: 25px"></p>

		<div class="second1">
			<p class="offer"><u>WE OFFER.</u></p>
			<P>Responsive web design</P>
			<p>Web Maintenance</p>
			<p>Web Redesigning</p>
			<p>Search Engine Optimization</p>
			<p>Social Media Management</p>
			<p> Free Monthly Consultation</p>
			<p>Google Analytics</p>
			<p>Web Marketting</p>
		</div>
	</div>
	<div class="now_at">
		<p><b>Now Get our website development services</b></p>
		<img src="images/abc.jpeg">

		<p style="margin-top: 30px; font-size: 20px;">SIGN-UP FOR OUR WEEKLY CONSULTATION SERVICES</p>
		<form action="login.php" method="POST">
			<button><a href="login.php" col-span-5>Join Us</a></button>
			<button><a href="login.php" col-span-5>Login</a></button>
		</form>
		<p class="quality">with us quality is guaranteed</p>

	</div>
	<?php include 'includes/footer.php' ?>

	<?php endif ?>
</body>
</html>
