<div class="container">
	<div class="row p-3">
		<div class="col-12">
			<canvas id="UsersVsMyUsers" width="100" height="35"></canvas>
		</div>
	</div>
	<div class="row text-center" style="margin-bottom: 10px;">
		<div class="col">
			<div class="card bg-color-orange">
				<h6>PM10</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['pm10'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>PM25</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['pm25'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>SO2</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['so2'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>CO</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['co'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>O3</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['o3'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
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
			<div class="card bg-color-orange">
				<h6>WS</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['ws'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>WD</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['wd'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>HUMIDITY</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['humidity'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>TEMPERATURE</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['temperature'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>PRESSURE</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['pressure'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>SR</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['sr'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
		<div class="col">
			<div class="card bg-color-orange">
				<h6>RAIN&nbsp;INTENSITY</h6>
				<?php foreach($aqmdata as $aqm) : ?>
					<h4><?= $aqm['rain_intensity'] ?></h4>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>