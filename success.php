<?php include_once 'config.php'; ?>
<?php 
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>SUCCESS</title>
</head>
<body>
	<?='SUCCESS'; ?>
	<?php if(isset($_SESSION['msg']) && !empty($_SESSION['msg'])){
		echo $_SESSION['msg'];
	}



	?>

</body>
</html>