<!DOCTYPE html>
<html>
<?php include( 'inc/head.php' ); ?>
<body>
	<?php include( 'inc/header.html' ); ?>
	<div class="site-container">
		<main class="site-main">
			<div class="wrap">
				<h1 class="center">Set a Cookie</h1>
				<p>This page sets two cookies with the following information:</p>
				<ol>
					<li><strong>Persistent Cookie</strong></li>
						<ul>
							<li>Cookie Name: <em>my-persistent-cookie</em></li>
							<li>Cookie Value: <em>Cookies are good enough for me</em></li>
							<li>Time to expire: <em>30 days</em></li>
						</ul>
					<li><strong>Session Cookie</strong></strong></li>
						<ul>
							<li>Cookie Name: <em>my-session-cookie</em></li>
							<li>Cookie Value: <em>Only lasts for so long</em></li>
							<li>Time to expire: <em>0</em></li>
						</ul>
				</ol>
				<?php
				setcookie( 'my-persistent-cookie', 'Cookies are good enough for me', time() + 60 * 60 * 24 * 30 );
				setcookie( 'my-session-cookie', 'Only lasts for so long', 0 );
				$persistent = $_COOKIE['my-persistent-cookie'];
				$session    = $_COOKIE['my-session-cookie'];
				echo sprintf( '<p>The name of the cookie is %s and it\'s value is "%s"</p>', 'my-persistent-cookie', $persistent );
				echo sprintf( '<p>The name of the cookie is %s and it\'s value is "%s"</p>', 'my-session-cookie', $session );
				?>
			</div>
		</main>
	</div>
</body>
</html>