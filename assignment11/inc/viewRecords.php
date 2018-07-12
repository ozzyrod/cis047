<?php
$host = "localhost";
$user = "root";
$pass = "";
$databasename = "StarWars";

//create connection to database
$connection = new mysqli( $host, $user, $pass, $databasename );

//check connection to database
if ( ! $connection ) {
	die( "Connection failed! Here is what is wrong: " . mysqli_connect_error() );
}

$sql = "SELECT * FROM `StarWars` . `Films`";
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
	
	$title    = htmlspecialchars( $row['Title'] );
	$director = htmlspecialchars( $row['Director'] )
	
	?>
	<form class="episode-form <?php echo $columns; ?>" method="get" action="editStarWars.php">
		<fieldset>
			<legend>Episode <?php echo $row['Episode']; ?></legend>
			<ul>
				<li><input class="one-half" type="number" name="episode" value="<?php echo $row['Episode']; ?>"><input class="button one-half last" type="submit" value="Edit"></li>
				<li><input class="one-half" type="text" name="title" value="<?php echo addslashes( $title ); ?>"><input class="button one-half last" type="submit" value="Edit"></li>
				<li><input class="one-half" type="text" name="director" value="<?php echo addslashes( $director ); ?>"><input class="button one-half last" type="submit" value="Edit"></li>
				<li><input class="one-half" type="text" name="year-released" value="<?php echo $row['Year_Released']; ?>"><input class="button one-half last" type="submit" value="Edit"></li>
			</ul>
		</fieldset>
	
	</form>
	<?php
}
// Close the connection.
mysqli_close( $connection );
?>