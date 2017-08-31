<!DOCTYPE html>
<html>
<head>
</head>

<body>
           
<?php
$servername = "mydb.ics.purdue.edu";
$username = "wang2401";
$password = "Wjqcmn1021";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) 
    die("Connection failed: " . $conn->connect_error);

$sql = "SELECT * FROM wang2401.Characteristics";
$result = $conn->query($sql);
$numRows = mysqli_num_rows($result);

$c = intval($_GET['c']);
$sql_C = "SELECT * FROM wang2401.Characteristics WHERE ID=".$c;
$result_C = $conn->query($sql_C);
$row_C = $result_C->fetch_array();
$d = intval($_GET['d']);
$sql_D = "SELECT * FROM wang2401.Characteristics WHERE ID=".$d;
$result_D = $conn->query($sql_D);
$row_D = $result_D->fetch_array();

for ($i=2;$i<10;$i++){
	$id_C = "c".$i;
	echo "<span id=$id_C hidden>$row_C[$i]</span>";
	$id_D = "d".$i;
	echo "<span id=$id_D hidden>$row_D[$i]</span>";

}
mysqli_close($conn);
?>

</body>
</html>