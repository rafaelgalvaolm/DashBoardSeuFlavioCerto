<?php
 
$dataPoints = array( 
	array("y" => 0,"label" => "Janeiro" ),
	array("y" => 0,"label" => "Fevereiro" ),
	array("y" => 0,"label" => "Março" ),
	array("y" => 0,"label" => "Abril" ),
	array("y" => 0,"label" => "Maio" ),
    array("y" => 0,"label" => "Junho"),
    array("y" => 0,"label" => "Julho" ),
    array("y" => 0,"label" => "Agosto" ),
    array("y" => 0,"label" => "Setembro"),
    array("y" => 0,"label" => "Outubro" ),
    array("y" => 0,"label" => "Novembro" ),
    array("y" => 0,"label" => "Dezembro" ),
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Receita por ano"
	},
	axisY: {
		title: "Receita (em R$)",
		includeZero: true,
		prefix: "R$",
		suffix:  "Mil"
	},
	data: [{
		type: "bar",
		yValueFormatString: "R$#,##0K",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>                             