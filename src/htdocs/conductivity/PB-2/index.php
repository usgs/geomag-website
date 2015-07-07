<?php
	if(!isset($TEMPLATE)) {
		$TEMPLATE = 'onecolumn';
		$TITLE = "Pacific Border (Puget Lowlands)";
	}

?>

<div class="column container contains-twelve">
	<p>
		Model PB-2 represents the Puget Lowlands portion of the Pacific Border
		physiographic province, including the Seattle metropolitan area. Note
		that substantial differences (2 orders of magnitude) in resistivity
		exist for the first 7km depth depending on whether considering sedimentary
		or volcanic upper crust. [Fernberg, EPRI 2012]
	</p>
	<div class="nine column">
		<center>
			<h3>
				1D Resistivity Model for Pacific Border Model PB-2 (upper Washington)
			</h3>
		</center>
		<a href="PB-2.png">
			<img src="PB-2_browser.png" alt=" " width="650" height="446" />
		</a>
		<p class="disclaimer">
			Resistivity values and depths have been interpreted from published
			geological reports and maps, and may differ from actual conditions
			measured by a geophysical survey and/or borehole.
		</p>
		<p>
			Source data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_PB2.txt">
				earth_model_PB2.txt
			</a>
		</p>
	</div>

<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="PB-1" coords="52,57,30,115,21,128,17,164,7,179,12,194,12,218,50,218,49,209,44,202,44,184,49,173,45,169,43,141,48,133,47,112,73,79,74,69" href="/conductivity/PB-1" />
<area shape="poly" alt="CS-1" coords="91,10,90,34,76,70,74,79,49,113,49,133,44,142,46,168,51,172,45,185,45,202,49,208,51,217,74,217,72,206,61,194,60,184,58,150,57,142,84,87,84,79,94,73,111,51,124,35,127,20" href="/conductivity/CS-1" />
<area shape="poly" alt="BR-1" coords="65,132,59,144,62,192,73,206,76,218,213,218,212,199,217,195,221,182,225,177,223,163,182,188,168,193,132,182,114,148" href="/conductivity/BR-1" />
<area shape="poly" alt="CO-1" coords="124,37,96,74,85,80,85,87,65,129,116,147,133,181,166,191,222,162,232,150,234,143,232,138,219,140,203,153,165,157,156,145,158,120,153,109,155,100,169,93,169,83,159,70,160,56" href="/conductivity/CO-1" />
</map>

	<div class="three column">
		<h2>Location</h2>
		<img src="locationsPB2.png" width="224" height="200" alt="Location of PB-2"
			style="margin-top:-10px;" usemap="#map" />
	</div>
	<div id="minimap" class="right two column">
		<a href="/conductivity/">
			<h2>Zoom Out</h2>
			<img src="/conductivity/locationssmall.png" alt="Return to main"
				width="144" height="108">
		</a>
	</div>
</div>
