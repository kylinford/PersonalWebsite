<?php
function DisplayTrip($city, $visits, $private, $transportation){
	echo "<div class='city'><h2>$city</h2><ul>";
	for ($i = 0; $i < count($visits); $i++)
		echo "<li>$visits[$i]</li>";

	$mode = $_GET["mode"];
	if ($mode == "private"){
		for ($i = 0; $i < count($private); $i++)
			if ($private[$i] != "")
				echo "<li class='yellow'>$private[$i]</li>"; 
	}
	if($transportation != '')
		echo "</ul></div><div class='onmyway'><img src='arrow-248-xxl.png' alt='down arrow'><span>$transportation </span></div>";
}

function UpdateTrip(){
	$file = fopen("data.txt","r");
	$lines= array();
	$lineNum = 0;
	while(! feof($file)){
		$lines[] = fgetcsv($file);
		if ($lineNum % 4 == 3)
			DisplayTrip($lines[$lineNum-3][0], $lines[$lineNum-2], $lines[$lineNum], $lines[$lineNum-1][0]);
		$lineNum++;
	}
	fclose($file);
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title>朱祎</title>
    <meta http-equiv="Content-Type" content="text/html; charset=GB2312" />
    
    <style>
        body {margin: 15px; background-color: #f66; color: white; text-align:center;}
	h1{font-size:35px;}
	h2{margin-left: 5px;}
        p{font-family: "Times New Roman"; font-size: 20px;}
        .red{color:red;}
	.yellow{color:yellow;}
	.trip{display:inline-block; width: 800px; text-align:left;}
        .city {border: 1px solid white;}
        .onmyway img {width: 60px; height: 120px; display: inline-block; vertical-align: middle;}
        .onmyway span {display: inline-block; vertical-align: middle;}
	.uploadform{display:inline-block; width: 800px; text-align:left;}
    	.uploadform a{color:white; text-decoration:none; border:1px solid white; padding: 5px;}
    </style>
</head>

<body>
	<div class="uploadform">
		<a href="DataTemplate.txt" download="DataTemplate">Download Template</a>
		<a href="data.txt" download="MySchedule">Download My Schedule</a>
		<a href="instruction.txt" download="Instruction">Download Instruction</a>
			<br><br>
			<form action="upload.php" method="post" enctype="multipart/form-data">
			<div style="border:1px solid white; padding: 5px;">  
				Upload Schedule File:  
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload" name="submit">
			</div>
		</form>
	</div>
	<br>
	<br>

    <div class="trip" >
	<?php UpdateTrip();?>
    </div><br>

*日期划分以当晚所在城市决定<br>

</body>
</html>