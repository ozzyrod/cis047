<?php
$connection = dbConnect();

$sql = "SELECT * FROM `blogging_tool` . `blog`";
$dosql = mysqli_query( $connection, $sql ) or die ( 'Query failed: ' . mysqli_error( $connection ) );


// for each row in the database, grab the episode, title, director, and year
// and create a new form to edit the data. When you click "Edit", you'll update the database!
$count = 0;

while( $row = mysqli_fetch_array( $dosql ) ) {
	$count++;
	
	$columns = 'one-half';
	
	if ( $count == 0 || $count % 2 == 0 ) {
		$columns .= ' last';
	}
	
	$id       = $row['id'];
	$subject  = stripslashes( $row['subject'] );
	$name     = stripslashes( $row['name'] );
	$email    = stripslashes( $row['email'] );
	$message  = stripslashes( $row['message'] );
	$str_date = strtotime( $row['date'] );
	$date     = date('j F Y', $str_date );
	?>
	
	<div class="entry <?php echo $columns; ?>">
		<?php if ( $subject ) : ?>
			<h2 class="entry-title"><?php echo $subject; ?></h2>
		<?php endif; ?>
		<p class="date">Posted on: <?php echo $date; ?></p>
		<?php if ( $email && $name ) : ?>
			<p class="email">Email: <a href="mailto:<?php echo $email; ?>"><?php echo $name; ?></a></p>
		<?php endif; ?>
		<?php if ( $message ) : ?>
			<p class="message"><?php echo $message; ?></p>
		<?php endif; ?>
		<form method="post" action="editEntry.php">
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<input type="hidden" name="subject" value="<?php echo $subject; ?>">
			<input type="hidden" name="name" value="<?php echo $name; ?>">
			<input type="hidden" name="email" value="<?php echo $email; ?>">
			<input type="hidden" name="message" value="<?php echo $message; ?>">
			<input class="button" type="submit" value="Edit">
		</form>
	</div>
	
	<?php
}
// Close the connection.
mysqli_close( $connection );