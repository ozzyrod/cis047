<!DOCTYPE html>
<html>
<?php include( 'inc/head.html' ); ?>
<body>
<?php include( 'inc/header.html' ); ?>
<div class="site-container">
	<main class="site-main">
		<div class="wrap">
			<h1 class="center">Simple Blogging Application</h1>
			<form action="process.php" method="post" class="main-form">
				<fieldset>
					<legend>Your Information</legend>
					<ul>
						<li class="one-half">
							<label for="your-name">Your Name</label>
							<input type="text" name="your-name" id="your-name" placeholder="your name">
						</li>
						<li class="one-half last">
							<label for="your-email">Your email</label>
							<input type="email" name="your-email" id="your-email" placeholder="your email">
						</li>
					</ul>
				</fieldset>
				<ul>
					<li>
						<label for="subject">Subject</label>
						<input type="text" name="subject" id="subject" placeholder="subject">
					</li>
					<li>
						<textarea name="message" id="message" placeholder="your message" rows="10" cols="50"></textarea>
					</li>
				</ul>
				<div class="form-footer">
					<input type="reset" class="button one-half" value="Reset">
					<input type="submit" class="button one-half last" value="Submit">
				</div>
			</form>
		</div>
	</main>
</div>
</body>
</html>