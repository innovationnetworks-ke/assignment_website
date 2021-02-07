<?php include 'config.php'; ?>
<?php if (count($errors)>0): ?>
	<?php foreach ($errors as $error): ?>
		<div> <?php echo $error;?> </div>
	<? endforeach ?>
<?php endif ?>