<!DOCTYPE html>
<html>
<head>
	<style>
		table{
			color: white;
			text-align: center;
			border-color: yellow;
		}
		
		.bla{
			color: white;
		}
	</style>
</head>
<body bgcolor="grey">

	<?php
function fun()
{
	$arr=array("Prashanth N"=>"4NI17CS057", "Pravesh"=>"4NI17CS058", "Gurya"=>"4NI17CS022","Adhithya Gandhi"=>"4NI17CS007");
	return $arr;

}
?>
<div class="bla">
	<?php
date_default_timezone_set("Asia/Kolkata");
echo "Today is " . date("Y-m-d") . "<br>";
echo "The time is " . date("h:i:sa");
?>
<hr>
<h2 style="color: white"> Table with Name and USN of Students</h2>
<?php
 $arr=fun();
echo "<table border='10' style='width: 300px;'><tr><th>Name</th><th>USN</th></tr>";
foreach($arr as $val1=>$val2){
echo "<tr><td>".$val1."</td><td>".$val2."</td></tr>";
}
echo "</table>";

?>
</body>
</html>