<?php
//create connection to database
$connection = dbConnect();

//check connection to database
if ( ! $connection ) {
	die( "Connection failed! Here is what is wrong: " . mysqli_connect_error() );
}

$sql   = "INSERT INTO `blogging_tool` . `blog` ( `id`,`name`, `email`, `subject`, `message`, `date` ) VALUES ( DEFAULT, \"$name\", \"$email\", \"$subject\", \"$message\", DEFAULT )";
$dosql = mysqli_query( $connection, $sql ) or die( 'Query failed: ' . mysqli_error( $connection ) );
mysqli_close( $connection );

?>
<!DOCTYPE html>
<html>
	<?php include( 'inc/head.php' ); ?>
<body>
	<?php include( 'inc/header.html' ); ?>
	<div class="site-container">
		<main class="site-main">
			<div class="wrap">
				<h1 class="center">Your post was submitted.</h1>
				<p>The following is the information in your post:<br>
					<strong>Date:</strong> <?php echo $today; ?><br>
					<strong>Time:</strong> <?php echo $time; ?><br>
					<strong>Name:</strong> <?php echo $name; ?><br>
					<strong>Email:</strong> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
					<strong>Subject:</strong> <?php echo $subject; ?><br>
					<strong>Message:</strong><br>
					<?php echo $message; ?>
				</p>
			</div>
		</main>
	</div>
</body>
</html>
