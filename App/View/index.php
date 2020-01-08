<?php  
	ini_set('display_errors',1);
	ini_set('display_startup_errors',1);
	error_reporting(E_ALL);

	require_once "../../vendor/autoload.php";
	$gastosDao = new \App\Model\GastosDao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Módulo Financeiro</title>
	<link rel="stylesheet" href="../webroot/_css/bootstrap.min.css">
</head>
<body style="background-color: #777;">
	<div class="container">
		<div class="row">
			<div class="col">
				<!-- GOOGLE CHARTS -->
				 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			    <script>
			    	google.charts.load('current', {packages: ['corechart', 'line']});
					google.charts.setOnLoadCallback(drawBasic);

					function drawBasic() {

					      var data = new google.visualization.DataTable();
					      data.addColumn('string', 'Mês');
					      data.addColumn('number', 'COMIDA');
					      data.addColumn('number', 'COISAS');
					      data.addColumn('number', 'CIRCUNSTÂNCIAS');

					      data.addRows([
					        ['Jan',  0, 0, 0],
					        ['Fev',  0, 0, 0],
					        ['Mar',  0, 0, 0],
					        ['Abr',  362.90, 840.70, 211.75],
				            ['Mai',  334.62, 1380.51, 213.37],
				            ['Jun',  428.69,  2222.23, 95.80],
				            ['Jul',  518.16, 1872.98, 138.64],
				            ['Ago',  558.02, 2389.35, 316.22],
				            ['Set',  366.50, 1619.15, 24.00],
				            ['Out',  451.85, 2168.49, 35.64],
				            ['Nov',  165.09, 2442.70, 67.65],
				            ['Dez',  459.15, 2702.00, 667.69]
					      ]);

					      var options = {
					        hAxis: {
					          title: 'Meses 2019'
					        },
					        vAxis: {
					          title: 'Gasto Mensal',
					          format: 'R$ #.##'
					        },
					        width: 1100,
					        height: 400
					      };

					      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

					      chart.draw(data, options);
					    }
			    </script>
				<div id="chart_div" class="mt-5"></div>
			</div>
		</div>
	</div>
</body>
</html>