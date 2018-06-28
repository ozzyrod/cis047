<?php
// Post variables.
$name    = stripslashes( $_POST['your-name'] );
$email   = stripslashes( $_POST['your-email'] );
$subject = stripslashes( $_POST['subject'] );
$message = stripslashes( $_POST['message'] );
$sendTo  = "$name <$email>";
$from    = "From: $name <$email>";

// Set the time.
date_default_timezone_set( 'America/Los_Angeles' );

$today         = date( "F jS, Y" );
$time          = date( "h:i:sa" );
$store_message = "$today at $time -- $from \n Subject: $subject \n Message:\n $message \n --- \n";

// Store the post.
$store_post = fopen( 'blog.txt', 'a' );
fwrite( $store_post, $store_message );
fclose( $store_post );

?>
<!DOCTYPE html>
<html>
	<?php include( 'inc/head.html' ); ?>
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
				
				<p><a href="blog.txt">Link to the blog</a>.</p>
			</div>
		</main>
	</div>
</body>
</html>
