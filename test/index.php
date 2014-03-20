<?php
	require('highchart_exporter.php'); 


	$myHighchartExporter = new HighchartExporter();
	var_dump($myHighchartExporter);

	//export pie chart
	$myPieTypeChartOptions = array(
		'title' => 'myPieTypeChart',
		'type' => 'pie',
		'data' => array(
			array('Firefox', 45),
			array('IE', 55)
		)
	);
	$myHighchartExporter->export("./exportPieChart2222.png", $myPieTypeChartOptions);

?>