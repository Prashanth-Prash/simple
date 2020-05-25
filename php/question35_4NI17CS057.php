<!DOCTYPE html>
<html>
<head>
<style>
	.bla
	{
		color: white;
	}
</style>
</head>
<body bgcolor="grey">
<div class="bla">
<?php
date_default_timezone_set("Asia/Kolkata");
echo "Today is " . date("Y-m-d") . "<br>";
echo "The time is " . date("h:i:sa");
?>
<hr >
<h3> The details entered  by You:</h3>

<?php
$name=$_GET["name"];
$age=$_GET["age"];
echo "Hey   ".$name."  , you are ".$age." years old.";
?> 

</body>
</html>
