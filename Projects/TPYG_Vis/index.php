<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <title class = "en">Visualization for TPYG</title>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312" /> 
    <link rel = "stylesheet" type = "text/css" media = "screen" href = "../../CSS/Page.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.js"></script>
</head>

<body class="visPage">
    <?php include '../../php/header.php';?>
<?
//echo "Database connected: mydb.ics.purdue.edu";
$servername = "mydb.ics.purdue.edu";
$username = "wang2401";
$password = "Wjqcmn1021";

// Create connection
$conn = new mysqli($servername, $username, $password);

?>
    <br><br><br><br><br><br>
    	<div id="JobSelection">

	    <h1>Jobs Comparasion</h1><br><br><br><br>
        	<form>
	<div id="Current">
	<canvas id="colorMajor2" title="Destination"></canvas>
           <div class="select">
        	<select id="CurrentWorkSelection_Field">
             		<option value="">--Current Work Field--</option>
	      		<option value="Programmer">Programmer</option>
              		<option value="Manager">Manager</option>
            	</select>
            </div>
            <div class="select">
        	<select id="CurrentWorkSelection_Occupation" onchange="UpdateChart()">
			<option value="0">--Current Occupation--</option>              
			<?php
			$sql = "SELECT ID,IdealOccupation FROM wang2401.Characteristics ORDER BY IdealOccupation";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($record = $result->fetch_assoc()) {
				$ID = $record["ID"];
				$idealOccupation = $record["IdealOccupation"];
				echo "<option value = $ID>$idealOccupation</option>";
				}
			}
			?>
            	</select>
            </div>
		<hr><br>
	</div>

	<div id="Dream">
            <canvas id="colorMajor1" title="Current"></canvas>
            <div class="select">
        	<select id="DreamWorkSelection_Field">
             		<option value="">--Dream Work Field--</option>
	      		<option value="Programmer">Programmer</option>
              		<option value="Manager">Manager</option>
            	</select>
            </div>
            <div class="select">
        	<select id="DreamWorkSelection_Occupation" onchange="UpdateChart()">
			<option value="0">--Dream Occupation--</option>              
			<?php
			$sql = "SELECT ID,IdealOccupation FROM wang2401.Characteristics ORDER BY IdealOccupation";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while($record = $result->fetch_assoc()) {
				$ID = $record["ID"];
				$idealOccupation = $record["IdealOccupation"];
				echo "<option value = $ID>$idealOccupation</option>";
				}
			}
			?>
            	</select>
            </div>

            <hr>
	</div>

            
	</form> 
          
		
        </div>

        <div id="ChartArea">
            <canvas id="myChart"></canvas>
            <br><br>
        </div>

        <div id="ChartData">
        </div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr>

<center>
<h4>Raw Data</h4>
<?php
$sql = "SELECT * FROM wang2401.Characteristics";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table border=1>
<tr>
<th>ID</th>
<th>Ideal Occupation</th>
<th>Task Flexibility</th>
<th>Female Friendly</th>
<th>Midwest</th>
<th>Family Friendly</th>
<th>Verbal Skill</th>
<th>Quantitative Skill</th>
<th>Reasoning Skill</th>
<th>Salary</th>
</tr>";

while($row = $result->fetch_array()) {
	echo "<tr>";
	for ($i=0;$i<10;$i++){
    	echo "<td>$row[$i]</td>";
	}
	echo "</tr>";
}
} else {
    echo "<tr><td>0 results</td></tr>";
}
echo "</table>";
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	echo "Database connected: mydb.ics.purdue.edu<br><br><br>";
}
mysqli_close($conn);
?>
</center>
    <script>
	document.getElementById("colorMajor1").style.backgroundColor = "rgba(220,100,100,1)";
	document.getElementById("colorMajor2").style.backgroundColor = "rgba(151,187,255,1)";
	function UpdateChart() {
		var CurrentWorkSelection_Occupation = document.getElementById("CurrentWorkSelection_Occupation");
		var currentOccupation = CurrentWorkSelection_Occupation.options[CurrentWorkSelection_Occupation.selectedIndex].value;
		var DreamWorkSelection_Occupation = document.getElementById("DreamWorkSelection_Occupation");
		var dreamOccupation = CurrentWorkSelection_Occupation.options[DreamWorkSelection_Occupation.selectedIndex].value;
		console.log("current:" + currentOccupation);
		console.log("Dream:" + dreamOccupation);
		xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
           		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                		document.getElementById("ChartData").innerHTML = xmlhttp.responseText;
				UpdateChartGraph();
            		}
        	};
		xmlhttp.open("GET","OccupationCharacteristicsData.php?c="+currentOccupation+"&d="+dreamOccupation,true);
		xmlhttp.send();
	}
	function UpdateChartGraph(){
	// Get the context of the canvas element we want to select
	var ctx = document.getElementById("myChart").getContext("2d");
	var c2 = document.getElementById("c2").innerHTML;
	var c3 = document.getElementById("c3").innerHTML;
	var c4 = document.getElementById("c4").innerHTML;
	var c5 = document.getElementById("c5").innerHTML;
	var c6 = document.getElementById("c6").innerHTML;
	var c7 = document.getElementById("c7").innerHTML;
	var c8 = document.getElementById("c8").innerHTML;
	var c9 = document.getElementById("c9").innerHTML;
	
	var d2 = document.getElementById("d2").innerHTML;
	var d3 = document.getElementById("d3").innerHTML;
	var d4 = document.getElementById("d4").innerHTML;
	var d5 = document.getElementById("d5").innerHTML;
	var d6 = document.getElementById("d6").innerHTML;
	var d7 = document.getElementById("d7").innerHTML;
	var d8 = document.getElementById("d8").innerHTML;
	var d9 = document.getElementById("d9").innerHTML;
	
	var data = {
		labels: ["Task Flexibility", "Female Friendly", "Midwest", "Family Friendly", "Verbal Skill", "Quantitative Skill", "Reasoning Skill", "Salary"],
		datasets: [
			{
				label: "Software System Developer",
				fillColor: "rgba(220,100,100,0.2)",
				strokeColor: "rgba(220,100,100,1)",
				pointColor: "rgba(220,100,100,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(220,220,220,1)",
				//data: [0.14, 0.26, 0.07, 0.13, 0.53, 0.61, 0.62, 0.81]
				data: [d2,d3,d4,d5,d6,d7,d8,d9]
			},
			{
				label: "Academic Administrator",
				fillColor: "rgba(151,187,255,0.2)",
				strokeColor: "rgba(151,187,255,1)",
				pointColor: "rgba(151,187,255,1)",
				pointStrokeColor: "#fff",
				pointHighlightFill: "#fff",
				pointHighlightStroke: "rgba(151,187,255,1)",
				//data: [0.06, 0.79, 0.46, 0.51, 0.79, 0.51, 0.72, 0.28]
				data: [c2,c3,c4,c5,c6,c7,c8,c9]
			}
		]
	};
	var myRadarChart = new Chart(ctx).Radar(data, 
	{
    //Boolean - Whether to show lines for each scale point
    scaleShowLine : true,

    //Boolean - Whether we show the angle lines out of the radar
    angleShowLineOut : true,

    //Boolean - Whether to show labels on the scale
    scaleShowLabels : false,

    // Boolean - Whether the scale should begin at zero
    scaleBeginAtZero : true,

    //String - Colour of the angle line
    angleLineColor : "rgba(255,255,255,.1)",

    //Number - Pixel width of the angle line
    angleLineWidth : 2,

    //String - Point label font declaration
    pointLabelFontFamily : "'Arial'",

    //String - Point label font weight
    pointLabelFontStyle : "normal",

    //Number - Point label font size in pixels
    pointLabelFontSize : 18,

    //String - Point label font colour
    pointLabelFontColor : "#777",

    //Boolean - Whether to show a dot for each point
    pointDot : true,

    //Number - Radius of each point dot in pixels
    pointDotRadius : 4,

    //Number - Pixel width of point dot stroke
    pointDotStrokeWidth : 1,

    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
    pointHitDetectionRadius : 20,

    //Boolean - Whether to show a stroke for datasets
    datasetStroke : true,

    //Number - Pixel width of dataset stroke
    datasetStrokeWidth : 2,

    //Boolean - Whether to fill the dataset with a colour
    datasetFill : true,

    //String - A legend template
    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

}
	
	);
	
}
	</script>

</body>
</html>