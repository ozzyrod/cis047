<aside class="sidebar">
	<?php
	// Variables used in the file.
	$user_agent   = $_SERVER['HTTP_USER_AGENT'];
	$server_name  = $_SERVER['HTTP_HOST'];
	$currentYear  = date("Y");
	$currentHour  = date("H");
	$currentTime  = date("F j, Y, g:i a");
	$howOldIsOzzy = $currentYear - 1979;
	?>
	<p class="sidebar-title">Extra information</p>
	<p>You're using the following web browser:</p>
	<p><?php echo $user_agent; ?></p>
	<p>The name of the server is:</p>
	<p><?php echo $server_name; ?></p>
	<p>The current date and time is:</p>
	<p><?php echo $currentTime; ?></p>
	<p>Good
		<?php if ( $currentHour < 12 ) : ?>
			morning!
		<?php elseif ( $currentHour < 17 ) : ?>
			afternoon!
		<?php else : ?>
			evening!
		<?php endif; ?>
	</p>
	<p>Ozzy is currently <?php echo $howOldIsOzzy; ?> years old.</p>
</aside>