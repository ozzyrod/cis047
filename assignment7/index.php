<!DOCTYPE html>
<html>
<?php include( 'inc/head.html' ); ?>
<body>
	<?php include( 'inc/header.html' ); ?>
	<div class="site-container">
		<main class="site-main">
			<div class="wrap">
				<h1 class="center">Fun with Forms</h1>
				<form class="main-form" method="get" action="result.php" enctype="multipart/form-data">
					<ul>
						<li><label class="display-label" for="bg_color">Select a background color:</label><input id="bg_color" type="color" name="bg_color"></li>
						<li><label class="display-label" for="text_color">Select a text color:</label><input id="text_color" type="color" name="text_color"></li>
						<li><label for="your_name">Enter your name:</label><input id="your_name" type="text" name="your_name" placeholder="your name"></li>
						<li><label for="your_class">Enter your class:</label><input id="your_class" type="text" name="your_class" placeholder="your class"></li>
						<li><label for="teacher_name">Enter your teacher's name:</label><input id="teacher_name" type="text" name="teacher_name" placeholder="teacher name"></li>
						<li><label for="school_name">Enter your school's name:</label><input id="school_name" type="text" name="school_name" placeholder="school name"></li>
					</ul>
					<input class="button" type="submit" value="Submit">
				</form>
			</div>
		</main>
	</div>
</body>
</html>