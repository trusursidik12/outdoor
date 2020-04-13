<!DOCTYPE html>
<html>
<head>
	<title>Outdoor ISPU</title>

	<link rel="stylesheet" href="<?= base_url('assets/frontend/css/bootstrap.min.css') ?>">
</head>
<body class="bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
	  <a class="navbar-brand" href="<?= site_url() ?>">
	  	<img src="<?= base_url('assets/frontend/img/ispumap.png') ?>" width="10%">
	  </a>
	  <a class="navbar-brand" href="<?= site_url() ?>">TRUSUR OUTDOOR APLICATION</a>

	  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
	    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
	      <li class="nav-item active">
	      </li>
	    </ul>
	  </div>
	</nav>

	<div class="container">
		<div class="row p-3">
			<div class="col-12">
				<canvas id="UsersVsMyUsers" width="100" height="40"></canvas>
			</div>
		</div>
		<div class="row text-center" style="margin-bottom: 10px;">
			<div class="col">
				<div class="card">
					<h6>PM10</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['pm10'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>PM25</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['pm25'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>SO2</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['so2'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>CO</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['co'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>O3</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['o3'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>NO2</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['no2'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
		</div>
		<!-- weather -->
		<div class="row text-center">
			<div class="col">
				<div class="card">
					<h6>WS</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['ws'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>WD</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['wd'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>HUMIDITY</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['humidity'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>TEMPERATURE</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['temperature'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>PRESSURE</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['pressure'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>SR</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['sr'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col">
				<div class="card">
					<h6>RAIN&nbsp;INTENSITY</h6>
					<?php foreach($aqmdata as $aqm) : ?>
						<h4><?= $aqm['rain_intensity'] ?></h4>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>

	<!-- chart -->	
	<script src="<?= base_url('assets/frontend/js/chart/utils.js') ?>"></script>
	<script src="<?= base_url('assets/frontend/js/chart/chart.min.js') ?>"></script>

	<!-- jQuery -->
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
		            backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
		            borderColor: window.chartColors.red,
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
		                position: 'bottom',
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
		        }
		    });
		});
	</script>
</body>
</html>