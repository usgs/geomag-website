<?php
	if(!isset($TEMPLATE)) {
		$TITLE = 'Data & Products';
		$HEAD = '<link rel="stylesheet" href="index.css"/>';
		$CONTACT = 'geomagdata';
		include 'template.inc.php';
	}
?>

<ul class="row two-up no-style">
	<li class="column">
		<h2><a href="/realtime/">Real-Time HEZF Display</a></h2>
		<div class="row">
			<img src="/images/realtime_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				Real-time HEZF index display from USGS geomagnetic observatories
				internet feeds without filling gaps with satellite data.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="/realtime/basic.html">Real-Time H Display (by latitude)</a>
				</h2>
		<div class="row">
			<img src="/images/lobby_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				Real-time H index data as displayed above but sorted by latitude.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="realtime/">Blended Real-Time HEZF Display</a></h2>
		<div class="row">
			<img src="/images/blended_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				Real-time HEZF data from USGS geomagnetic observatories with
				satellite data used to fill gaps.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="downloads.php">Download</a></h2>
		<div class="row">
			<img src="/images/download.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				Download real-time and definitive data and indices from USGS
				geomagnetic observatories.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="/storm/">Magnetic Disturbance Events</a></h2>
		<div class="row">
			<img src="/images/storms_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				View reports on magnetic disturbance events.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="models.php">Models</a></h2>
		<div class="row">
			<img src="/images/models_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				View and download model results from magnetic studies.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="/map/">Real-Time Geomagnetic Conditions</a></h2>
		<div class="row">
			<img src="/images/map_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				Real-time data map display from USGS geomagnetic observatories.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="/realtime/dst">Real-Time Dst Display</a></h2>
		<div class="row">
			<img src="/images/dst_final.png" alt=""
					class="column mobile-one-of-four" />
			<div class="column mobile-three-of-four">
				Real-time Dst data from USGS observatories as well as other world
				partners.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="beta.php">Beta Products</a></h2>
		<div class="row">
			<div class="column mobile-three-of-four">
				These products are in development and are offered "as-is" with no
				guarantee of availability, accuracy, or support.
			</div>
		</div>
	</li>
	<li class="column">
		<h2><a href="otherdata.php">Other Sources of Data</a></h2>
		<div class="row">
		</div>
	</li>
</ul>
