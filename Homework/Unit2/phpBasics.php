<!DOCTYPE html>
<html>
	<head>
		<title>The Artistic Pawprint</title>
		<meta charset="UTF-8">
		<meta name="description" content="PHP Basics page">
		<meta name="keywords" content="PHP, learning, basics, web development">
		<style>
			body{
				background-color: #660066;
				color: white;
			}
		</style>
		<!-- 	Christina Buchwald
			Date: Jan 12, 2019
			Home Page	-->
	</head>
	<body>
    <h1>Intro to PHP</h1>
     <?php
		 $yourName = "Christina Buchwald";
		 echo '<h1>PHP Basics</h1>';
		 ?>
		 <h2><?php echo $yourName; ?></h2>
		 <?php
			$x = 8;
			$y = 2;
			$total = $x + $y;
			echo "<p>x = $x </p>";
			echo "<p>y = $y </p>";
			echo "<p>total = $total </p>";
			?>
			<?php
			$languages = array("PHP", "HTML", "Javascript");
			echo "I program in " . $languages[0] . ", " . $languages[1] . " and " . $languages[2] . ".";
			?>
	</body>
</html>
