<!DOCTYPE html>
<html>
<head>
	<title>Ozzy's PHP Script</title>
</head>
<body>
	<h1>Welcome to my website!</h1>
	<?php
	$myName = "Ozzy Rodriguez";
	?>
	<p><?php echo $myName; ?> is currently enrolled in
		<?php
		echo getEnrollment( 'CIS 047', 'Mark Branom', 'San Jose City College' );
		?>
	</p>
</body>
</html>

<?php
/**
 * Display enrollment information
 *
 * @param string $class Name of the class you're taking
 * @param string $teacher Name of the teacher teaching the class.
 * @param string $school School attending.
 *
 * @return string
 */
function getEnrollment( $class, $teacher, $school ) {
	$enrollment = sprintf( '%s from %s at %s.',
		$class,
		$teacher,
		$school
	);
	
	return $enrollment;
}