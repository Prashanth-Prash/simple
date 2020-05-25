<!DOCTYPE html>
<html>
<head>
    <style>
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
if(!empty($_GET['empno']))
{
$servername = "localhost";
$username = "Prash";
$password = "Prashu123@";
$dbname="Prashanth";

$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Details:<br>";
$empno=$_GET['empno'];
$queryy = "SELECT * FROM Employee where empno=$empno";
$result = $conn->query($queryy);
if ($result->num_rows > 0) {
    echo "<table border='3'><tr><th>empno</th><th>ename</th><th>empsal</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["empno"]. " </td><td> " . $row["ename"]. "</td><td> " . $row["esal"]. "</td></tr></table><br>";
    }
} else {
    echo "0 rows returned";
}
$conn->close();
}



?> 
<br>
<form action="/php/question37_4NI17CS057.php" method="get">
	employee number: <input type="text" name="empno">
	<br><br>
	<button type="submit">submit</button>
	<button type="reset">reset</button>

</form>

</body>
</html>
