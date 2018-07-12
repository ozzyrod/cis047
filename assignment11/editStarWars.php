<!DOCTYPE html>
<html>
<?php include( 'inc/head.html' ); ?>
<body>
	<?php include( 'inc/header.html' ); ?>
	<div class="site-container">
		<main class="site-main">
			<div class="wrap">
				<?php
				$episode       = $_REQUEST['episode'];
				$title         = addslashes( $_REQUEST['title'] );
				$director      = addslashes( $_REQUEST['director'] );
				$year_released = $_REQUEST['year-released'];
				
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
				
				$sql = "UPDATE `StarWars`.`Films` SET `Episode` = $episode, `Title` = \"$title\", `Director` = \"$director\", `Year_Released` = $year_released WHERE `Episode` = $episode";
				$dosql= mysqli_query( $connection, $sql ) or die( 'Query failed: ' . mysqli_error() );
				mysqli_close( $connection );
				?>
				<h1>The following information was added into the database:</h1>
				<ul>
					<?php if ( $episode ) : ?>
						<li>Episde: <?php echo $episode; ?></li>
					<?php endif; ?>
					<?php if ( $title ) : ?>
						<li>Title: <?php echo $title; ?></li>
					<?php endif; ?>
					<?php if ( $director ) : ?>
						<li>Director: <?php echo $director; ?></li>
					<?php endif; ?>
					<?php if ( $year_released ) : ?>
						<li>Year Released: <?php echo $year_released; ?></li>
					<?php endif; ?>
				</ul>
			</div>
		</main>
	</div>
</body>
</html>
