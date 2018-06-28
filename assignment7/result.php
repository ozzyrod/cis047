<html>
<?php include( 'inc/head.html' ); ?>
<body>
	<?php include( 'inc/header.html' ); ?>
	<?php
	$bg_color         = $_GET['bg_color'];
	$text_color       = $_GET['text_color'];
	$your_name        = $_GET['your_name'];
	$your_class       = $_GET['your_class'];
	$teacher_name     = $_GET['teacher_name'];
	$school_name      = $_GET['school_name'];
	$bg_color_style   = '';
	$text_color_style = '';
	
	if ( ! empty( $bg_color ) ) {
		$bg_color_style = " style='background-color: $bg_color;'";
	}
	
	if ( ! empty( $text_color ) ) {
		$text_color_style = " style='color: $text_color;'";
	}
	?>
	<div class="site-container"<?php echo $bg_color_style; ?>>
		<main class="site-main"<?php echo $text_color_style; ?>>
			<div class="wrap">
				<h1 class="center">Welcome <?php echo $your_name; ?></h1>
				<p>I am currently enrolled in
					<?php
					echo $your_class . ' from ' . $teacher_name . ' at ' . $school_name . '.';
					?>
				</p>
			</div>
		</main>
	</div>
</body>
</html>
