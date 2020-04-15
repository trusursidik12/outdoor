<!DOCTYPE html>
<html>
<head>
	<title>Outdoor ISPU</title>

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/ballonstyle.css') ?>">
	<style type="text/css">
		.bg-color-orange{
			background-color: orange;
		}
	</style>
</head>
<body class="bg-secondary" onload="startTime()">
	<nav class="navbar navbar-expand-lg navbar-light bg-color-orange">
	  <a class="navbar-brand" href="<?= site_url() ?>">
	  	<img src="<?= base_url('assets/frontend/img/ispumap.png') ?>" width="10%">
	  </a>
	  <a class="navbar-brand" href="<?= site_url() ?>">OUTDOOR APP</a>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	      </li>
	    </ul>
	  </div>
	</nav>

	<?= $contents; ?>

	<div class="menu-button"><img src="<?= base_url('assets/frontend/img/settings.png') ?>">
		<?php foreach($configuration as $config) : ?>
	    	<a href="<?= site_url('configuration/'.$config['id']) ?>"><img src="<?= base_url('assets/frontend/img/configuration.png') ?>"></a>
	    <?php endforeach ?>
	</div>

	<div class="footer text-right p-2 fixed-bottom bg-color-orange">
		<div class="row">
			<div class="col-6 text-left">
				<a><img style="margin-bottom: 5px;" src="<?= base_url('assets/frontend/img/map.png') ?>">&nbsp;Stasiun : <b>&nbsp;CILEGON</b></a>
			</div>
			<div class="col-6 text-right">
		      <?php
		      date_default_timezone_set("Asia/Bangkok");
		      $day = date("D");
		      $dayList = array(
		        'Sun' => 'Minggu',
		        'Mon' => 'Senin',
		        'Tue' => 'Selasa',
		        'Wed' => 'Rabu',
		        'Thu' => 'Kamis',
		        'Fri' => 'Jumat',
		        'Sat' => 'Sabtu'
		      );
		      $month = date("m");
		      $monthList = array(
		        '01' => 'Januari',
		        '02' => 'Februari',
		        '03' => 'Maret',
		        '04' => 'April',
		        '05' => 'Mei',
		        '06' => 'Juni',
		        '07' => 'Juli',
		        '08' => 'Agustus',
		        '09' => 'September',
		        '10' => 'Oktober',
		        '11' => 'November',
		        '12' => 'Desember',
		      );
		      echo $dayList[$day].', '.date("j").' '.$monthList[$month].' '.date("Y").' | <a id="clock"></a>'; ?>
		  </div>
		</div>
    </div>

	<!-- chart -->	
	<script src="<?= base_url('assets/frontend/js/chart/utils.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/chart/chart.min.js') ?>"></script>

	<!-- jQuery -->
	<script src="<?= base_url('assets/frontend/js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/jquery-3.4.1.slim.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/popper.min.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/bootstrap.min.js') ?>"></script>

	<script type="text/javascript">
		$(function() {
		    var color = Chart.helpers.color;
		    var UserVsMyAppsData = {
		        labels: ['PM10','SO','CO','O3','NO2'],
		        datasets: [{
		            label: 'ISPU',
		            backgroundColor: color(window.chartColors.orange).alpha(1).rgbString(),
		            borderColor: window.chartColors.orange,
		            borderWidth: 1,
		            data: [
		            	<?php foreach($aqmispu as $ispu) : ?>
		            		<?= $ispu['pm10'] ?>,
		            		<?= $ispu['so2'] ?>,
		            		<?= $ispu['co'] ?>,
		            		<?= $ispu['o3'] ?>,
		            		<?= $ispu['no2'] ?>
		            	<?php endforeach ?>
		            ]
		        }]
		 
		    };
		 
		    var UserVsMyAppsCtx = document.getElementById('UsersVsMyUsers').getContext('2d');
		    var UserVsMyApps = new Chart(UserVsMyAppsCtx, {
		        type: 'bar',
		        data: UserVsMyAppsData,
		        options: {
		            responsive: true,
		            legend: {
		                labels: {
			                fontColor: "orange",
			                fontSize: 18
			            },
		                position: 'top',
		                display: true,
		 
		            },
		            "hover": {
		              "animationDuration": 0
		            },
		             "animation": {
		                "duration": 1,
		              "onComplete": function() {
		                var chartInstance = this.chart,
		                  ctx = chartInstance.ctx;
		 
		                ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
		                ctx.textAlign = 'center';
		                ctx.textBaseline = 'bottom';
		 
		                this.data.datasets.forEach(function(dataset, i) {
		                  var meta = chartInstance.controller.getDatasetMeta(i);
		                  meta.data.forEach(function(bar, index) {
		                    var data = dataset.data[index];
		                    ctx.fillText(data, bar._model.x, bar._model.y - 5);
		                  });
		                });
		              }
		            },
		            title: {
		                display: false,
		                text: ''
		            },
		            scales: {
			            yAxes: [{
			                ticks: {
			                    fontColor: "orange",
			                    fontSize: 14,
			                    beginAtZero: true
			                }
			            }],
			            xAxes: [{
			                ticks: {
			                    fontColor: "orange",
			                    fontSize: 22,
			                    stepSize: 1,
			                    beginAtZero: true
			                }
			            }]
			        }
		        }
		    });
		});
	</script>
	<script type="text/javascript">
		function startTime() {
			var today = new Date();
			var h = today.getHours();
			var m = today.getMinutes();
			var s = today.getSeconds();
			m = checkTime(m);
			s = checkTime(s);
			document.getElementById('clock').innerHTML =
			h + ":" + m + ":" + s;
			var t = setTimeout(startTime, 500);
		}
		function checkTime(i) {
			if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
			return i;
		}
	</script>
</body>
</html>