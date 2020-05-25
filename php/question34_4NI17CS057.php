
<html>
<head>
	<title>Enumerated and Associative array</title>
	<style>
		.bla{
			color: white;
		}
	</style>
</head>
<body bgcolor="grey">
	<div class="bla">

USN: 4NI17CS057 <br />
Name:Prashanth N <br /> <br />
<?php
date_default_timezone_set("Asia/Kolkata");
echo "Today is " . date("Y-m-d") . "<br>";
echo "The time is " . date("h:i:sa");
?>
<hr >


<?php
$p1 = array(9,5,2,1,5,6);
$p2 = array('Prash' => 57 , 'Prav' =>58, 'Gurya'=>22 , 'Adhi'=>007 );

?>
<h3>Enumerated Array</h3>
<?php

foreach ($p1 as $p) {
	echo " The value is ".$p;
	echo '<br />' ;
}

?>
<br />

<h3> Associated Array</h3>
<?php

foreach ($p2 as $pp =>$p) {
	echo "This  is  " .$pp."  and  his USN  is  ".$p."\n";
	echo'<br />';
}

?>
</body>

</html>