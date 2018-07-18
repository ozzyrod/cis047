<!DOCTYPE html>
<html>
<?php include( 'inc/head.php' ); ?>
<body>
<?php include( 'inc/header.html' ); ?>
<div class="site-container">
	<main class="site-main">
		<div class="wrap">
			<h1 class="center">Update the entry</h1>
			<?php
			$id       = $_POST['id'];
			$subject  = $_POST['subject'];
			$name     = $_POST['name'];
			$email    = $_POST['email'];
			$message  = $_POST['message'];
			?>
			
			<form class="edit-entry" method="post" action="">
				<ul>
					<li><label class="display-label" for="name">Name</label><input type="text" name="name" value="<?php echo addslashes( $name ); ?>"></li>
					<li><label class="display-label" for="email">Email</label><input type="email" name="email" value="<?php echo addslashes( $email ); ?>"></li>
					<li><label class="display-label" for="subject">Subject</label><input type="text" name="subject" value="<?php echo addslashes( $subject ); ?>"></li>
					<li><label class="display-label" for="message">Message</label><textarea name="message" placeholder="<?php echo addslashes( $message ); ?>"></textarea></li>
				</ul>
				<input class="button" type="submit" value="Edit">
			</form>
			<?php $connection = dbConnect(); ?>
			
			<?php
			// Close the connection.
			mysqli_close( $connection );
			?>
		</div>
	</main>
</div>
</body>
</html>