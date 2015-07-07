<?php
	if(!isset($TEMPLATE)) {
		$TEMPLATE = 'onecolumn';
		$TITLE = "Superior Upland";
	}

?>

<div class="column container contains-twelve">
	<p>
		Model SU-1 represents the Superior Upland physiographic province, which
		occupies the northern portions of Minnesota, Wisconsin, and Michigan's
		Upper Peninsula. [Fernberg, EPRI 2012]
	</p>
	<div class="nine column">
		<center>
			<h3>
				1D Resistivity Model for Superior Uplands Model SU-1
			</h3>
		</center>
		<a href="SU-1.png">
			<img src="SU-1_browser.png" alt=" " width="650" height="445" />
		</a>
		<p class="disclaimer">
			Resistivity values and depths have been interpreted from published
			geological reports and maps, and may differ from actual conditions
			measured by a geophysical survey and/or borehole.
		</p>
		<p>
			Source data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_SU1.txt">
				earth_model_SU1.txt
			</a>
		</p>
	</div>

<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="IP-3" coords="77,75,81,94,97,117,141,107,137,101,142,87,143,81,132,71,130,58,117,48,124,48,117,41,108,40,91,44,91,60" href="/conductivity/IP-3" />
<area shape="poly" alt="AP-2" coords="151,117,182,133,190,109,200,99,219,100,223,91,223,72,208,72,200,80,182,84,162,100" href="/conductivity/AP-2" />
<area shape="poly" alt="SL-1" coords="181,83,200,79,206,71,216,69,205,59,212,52,222,51,222,46,180,48,180,60,202,61,202,70,194,75,176,77" href="/conductivity/SL-1" />
</map>

	<div class="three column">
		<h2>Location</h2>
		<img src="locationsSU1.png" width="224" height="144" alt="Location of SU-1"
		style="margin-top:-10px;" usemap="#map" />
	</div>
	<div id="minimap" class="right two column">
		<a href="/conductivity/">
			<h2>Zoom Out</h2>
			<img src="/conductivity/locationssmall.png" alt="Return to main"
				width="144" height="108" />
		</a>
	</div>
</div>
