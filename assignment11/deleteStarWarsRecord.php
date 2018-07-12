<!DOCTYPE html>
<html>
<?php include( 'inc/head.html' ); ?>
<body>
<?php include( 'inc/header.html' ); ?>
<div class="site-container">
	<main class="site-main">
		<div class="wrap">
			<?php
			$episode = $_REQUEST['episode'];
			
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
			
			$sql   = "DELETE FROM `StarWars` . `Films` WHERE `Episode` = $episode";
			$dosql = mysqli_query( $connection, $sql ) or die( 'Query failed: ' . mysqli_error( $connection ) );
			mysqli_close( $connection );
			?>
			<h1>The following episode was deleted from the database:</h1>
			<ul>
				<?php if ( $episode ) : ?>
					<li>Episde: <?php echo $episode; ?></li>
				<?php endif; ?>
			</ul>
		</div>
	</main>
</div>
</body>
</html>
