<!DOCTYPE html>
<html>
<head>
	<style>
		.bro{
			color: white;
		}
		.bla{
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

<?php
if(!empty($_GET['enum']) and !empty($_GET['ename']) and !empty($_GET['esal']))
{
$servername = "localhost";
$username = "Prash";
$password = "Prashu123@";
$dbname="Prashanth";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$enum=$_GET['enum'];
$ename=$_GET['ename'];
$esal=$_GET['esal'];
$queryy= "INSERT INTO Employee2 VALUES('$enum','$ename','$esal')";
$conn->query($queryy);


$queryy2 = "SELECT * FROM Employee2 where enum=$enum";
$result = $conn->query($queryy2);
if ($result->num_rows > 0) {
    // output data of each row
    echo "Details entered into the database<br>";
    echo "<table border='2'><tr><th>enum</th><th>ename</th><th>esal</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["enum"]. " </td><td> " . $row["ename"]. "</td><td> " . $row["esal"]. "</td></tr>";

         echo "</table><br>";
    }
  

$conn->close();
}
}


?> 
<div class="bro">
	<h3>Enter Details:</h3></div>
<form action="/php/question38_4NI17CS057.php" method="get">

	employee number: <input type="text" name="enum">
	<br><br>
	employee name: <input type="text" name="ename">
	<br><br>
	employee salary: <input type="text" name="esal">
	<br><br>
	<button type="submit">Submit</button>
	<button type="reset">Reset</button>

</form>

</body>
</html>
