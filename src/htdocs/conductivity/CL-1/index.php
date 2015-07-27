<?php
	if(!isset($TEMPLATE)) {
		$TITLE = "Colorado Plateau";
		$NAVIGATION = true;
    include 'template.inc.php';
	}

?>

<map name="map">
	<!-- #$-:Image map file created by GIMP Image Map plug-in -->
	<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
	<!-- #$-:Please do not edit lines starting with "#$" -->
	<!-- #$VERSION:2.3 -->
	<!-- #$AUTHOR:afurze -->
	<area shape="poly" alt="BR-1" coords="213,189,208,189,203,198,190,190,187,175,171,158,148,154,148,162,117,157,77,135,77,130,64,125,72,113,44,96,52,91,56,83,46,22,38,15,36,0,75,1,79,11,99,16,133,1,137,2,134,7,128,19,129,42,93,90,103,104,145,132,163,125,173,108,185,109,180,128,187,139,188,164" href="/conductivity/BR-1" />
	<area shape="poly" alt="IP-4" coords="196,55,190,109,199,114,206,157,224,150,224,55" href="/conductivity/IP-4" />
</map>
<figure class="right">
	<img src="locationsCL1.png" width="224" height="211" alt="Location of CL-1"
			usemap="#map" />
</figure>

<p>
	Model CL-1 represents the Colorado Plateau physiographic province, part of
	the larger Intermontane Plateau physiographic division. Approximately
	centered in the Four Corners region of the southwestern United States,
	the Colorado Plateau encompasses southeastern Utah, northern Arizona,
	northwestern New Mexico and the western edge of Colorado. [Fernberg, EPRI
	2012]
</p>

<center>
	<h3>
		1D Resistivity Model for Colorado Plateau Model CL-1
	</h3>
</center>
<a href="CL-1.png">
	<img src="CL-1_browser.png" alt=" " width="650" height="463" />
</a>
<p class="disclaimer">
	Resistivity values and depths have been interpreted from published
	geological reports and maps, and may differ from actual conditions
	measured by a geophysical survey and/or borehole.
</p>
<p>
	Source data:
	<a target="_blank"
		href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_CL1.txt">
		earth_model_CL1.txt
	</a>
</p>
