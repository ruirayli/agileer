<?php
/*
* Highchart后台服务，用于后台生成png图片
* @author: frankychen
*
*/

Class HighchartExporter {

	var $exporter_jar_path;
	
	function __construct($exporter_jar_path=NULL) {
		if($exporter_jar_path) {
			$this->exporter_jar_path = $exporter_jar_path;
		} else {
			$this->exporter_jar_path = dirname(__FILE__) . '/myHighChartExporter.jar';
		}
	}

	/*
	* export方法用于生成png图片
	* @params string $output_full_path, 生成图片的全路径 如 /temp/test.png
	* @params array $chart_options, 图片参数, 
	* 如 $chart_options = array(
	*   'title'=> '',  // option
	*   'type'=> 'pie',  // required, pie|line|column|bar
	*	'data' => array(), //required
	*   'categories' => array() // required, but option when chart is pie type
	*   'width' => 800, // option, chart width
	*  );
	* 
	*
	*/
	function export($output_full_path, $chart_options) {
		$chart_full_options = $this->_init_chart_options($chart_options);
		if($output_full_path && $chart_full_options) {
			if(!file_exists($output_full_path)) { 
				$handle = fopen($output_full_path, "w"); //如果此文件不存在，则自动建立一个
				fclose($handle);
			}
			@system('export LC_ALL=en_US.UTF-8 && java -jar ' . $this->exporter_jar_path . ' ' . $output_full_path . ' "' .  $chart_full_options . '"');
			// var_dump('export LC_ALL=en_US.UTF-8 && java -jar ' . $this->exporter_jar_path . ' ' . $output_full_path . ' "' .  $chart_full_options . '"');
		} else {
			echo 'chart options error.';
			return;
		}
	}


	function _init_chart_options($chart_options) {
		if(empty($chart_options['type']) || empty($chart_options['data'])) {
			return false;
		}
		$chart_width = !empty($chart_options['width'])?$chart_options['width']:800;
		$legend_item_width = (($chart_width/4) < 200 ) ? 200 : ($chart_width/4);

		$categories = !empty($chart_options['categories'])?$chart_options['categories']:array();
		if(!empty($categories)) {
			foreach($categories as &$category_item) {
         	   $category_item = substr($category_item, 0, 30);
        	}
		}
		

		$chart_defaut_options = array(
				'credits' => array('enabled' => false),
				'chart' => array(
						'type' => $chart_options['type'],
						'width' => $chart_width,
						'spacingBottom' => 36
					),
				'title' => array(
						'text' => !empty($chart_options['title'])?$chart_options['title']:'TAPD图表',
						'style' => array(
                    		'color' => '#000',
                    		'fontSize' => '14px',
                    		'fontWeight' => 'bold'
                		)
					),
				'xAxis' => array(
                		'categories' => $categories,
                		'labels' => array('overflow' => 'justify','style' => array('color' => '#000'))
                	),
				'yAxis' => array(	
						'min' => 0,
						'minRange' => 1,
	                	'allowDecimals' => false,
	                	'title' => array('text' => ''),
	                	'stackLabels' => array(
	                		'enabled' => true,
	                		'formatter' => "function() { return (this.total > 0)?this.total:''}"
	                	)
					),
				'legend' => array(
						'verticalAlign' => 'bottom',
                		'borderColor' => '#fff',
                		'borderWidth' => 0,
                		'itemWidth' => $legend_item_width,
                		'itemStyle' => array(
                				'color' => '#000'
                			)
					),
				'plotOptions' => array(
						'pie' => array(
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000',
								'formatter' => "function() { return this.point.name + ': ' + this.y; }"
							)
						),
						'column' => array(
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000'
							)
						),
						'line' => array(
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000'
							)
						),
						'bar' => array(
							'dataLabels' => array(
								'enabled' => true,
								'color' => '#000000'
							)
						)
					)
		);
		
		switch ($chart_options['type']) {
			case 'pie':
				$chart_defaut_options['series'][] = array('data' =>  (!empty($chart_options['data']))?$chart_options['data']:array());
				break;
			case 'column':
				$column_stacking = isset($chart_options['stacking']) ? $chart_options['stacking'] : true ; //for column type chart
                if($column_stacking) {
                    //stacked column
                    $chart_defaut_options['plotOptions']['column']['stacking'] = 'normal';
                    $chart_defaut_options['plotOptions']['column']['dataLabels']['formatter'] = "function() { if(this.y != 0) { return this.y; } }";
                } else {
                    $chart_defaut_options['plotOptions']['column']['dataLabels']['formatter'] = "function() { return this.y; }";
                }
			case 'bar':
			case 'line':
				$chart_defaut_options['series'] = !empty($chart_options['data'])?$chart_options['data']:array();
				if (count($categories) > 5 ) {
					$chart_defaut_options['xAxis']['labels'] = array(
						'rotation' => -45,
				    	'align' => 'right',
				    	'overflow' => 'justify',
				    	'style' => array('color' => '#000')
					);
				}
				break;
			default:
				break;
		}

        return str_replace('"', '\"', json_encode($chart_defaut_options));
	}


}