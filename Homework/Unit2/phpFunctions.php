<?php
$d=strtotime("tomorrow");
$s="  My name is Christina Buchwald and I go to DMACC. This is my last semester.  ";
$numberOne=1234567890;
$numberTwo=123456;
function formateDateMDY($inDate)
{
	echo date("m-d-Y", $inDate);
}
function formateDateDMY($inDate)
{
	echo date("d-m-Y", $inDate);
}
function stringFun($inString)
{
	echo "Number of Character: " . strlen($inString) . ".<br>";
	echo "Trimming white space: " . trim($inString) . "<br>";
	echo "In all lowercase: " . strtolower($inString) . "<br>";
	echo "DMACC is in the string " . substr_count($inString, "DMACC") . " number of times.";
}
function formatNumber($inNumber)
{
	echo number_format($inNumber);
}
function formatCurrency($inNumber)
{
	echo "$" . number_format($inNumber, 2);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Functions</title>
		<meta charset="UTF-8">
		<meta name="description" content="PHP Basics page">
		<meta name="keywords" content="PHP, learning, basics, web development">
		<style>
			body{
				background-color: #66ff99;
				color: black;
			}
			h1{
				text-align: center;
			}
			h3 {
				font-weight: bold;
			}
		</style>
		<!-- 	Christina Buchwald
			Date: Jan 27, 2019
			Home Page	-->
	</head>
  <body>
		<h1>PHP Functions</h1>
		<h3>Month Day Year</h3>
		<p>Tomorrow is: <span><?php formateDateMDY($d)	?></span></p>
		<h3>Day Month Year</h3>
		<p>Tomorrow is: <span><?php formateDateDMY($d)	?></span></p>
		<h3>Lots of String manipulation</h3>
		<span><?php stringFun($s) ?></span>
		<h3>Number formatting</h3>
		<p>Number: <span><?php formatNumber($numberOne) ?></span></p>
		<h3>Currency formatting: </h3>
		<p>Currency: <span><?php formatCurrency($numberTwo) ?></span></p>
  </body>
</html>
