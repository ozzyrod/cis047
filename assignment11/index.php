<!DOCTYPE html>
<html>
<?php include( 'inc/head.html' ); ?>
<body>
	<?php include( 'inc/header.html' ); ?>
	<div class="site-container">
		<main class="site-main">
			<div class="wrap">
				<h1 class="center">Star Wars Database</h1>
				<?php include( 'inc/form-new-record.php' ); ?>
				<hr>
				<?php include( 'inc/form-delete-record.php' ); ?>
				<hr>
				<?php include( 'inc/viewRecords.php' ); ?>
			</div>
		</main>
	</div>
</body>
</html>