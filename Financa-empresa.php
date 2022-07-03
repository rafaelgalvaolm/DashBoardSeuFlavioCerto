<?php
 
$dataPoints = array( 
	array("label" => "Vendas",  "y" => 0 ),
	array("label" => "Serviços", "y" => 0 ),
	array("label" => "Receita Total", "isIntermediateSum" => true),
	array("label" => "Pesquisa", "y" => 0 ),
	array("label" => "Marketing",  "y" => 0),
	array("label" => "Salarários", "y" => 0 ),
	array("label" => "Operating Income", "isCumulativeSum" => true ),
	array("label" => "Imposto",  "y" => 0 ),
	
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title: {
		text: "Finança da Empresa"
	},
	axisY: {
		title: "Total (em R$)",
		prefix: "R$",
		suffix: "Mil",
		gridThickness: 0
	},
	data: [{
		type: "waterfall",
		risingColor: "#428CFF",
		fallingColor: "#FF8C8C",
		indexLabel: "{y}",
		indexLabelFontColor: "#292B2C",
		indexLabelFontWeight: "bolder",
		indexLabelPlacement: "inside",
		yValueFormatString: "$#,##0k",
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