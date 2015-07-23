<?php
	if(!isset($TEMPLATE)) {
		$TEMPLATE = 'onecolumn';
		$TITLE = "Columbia Plateau";
	}

?>

<div class="column container contains-twelve">
	<p>
		Model CO-1 represents the Columbian Plateau physiographic province.
		Smaller physiographic sections within the Columbia Plateau include the Blue
		Mountains, Snake River, and High Lava Plains. The Columbia Plateau
		straddles eastern Washington and Oregon, with an arcuate extension into
		southwestern Idaho. [Fernberg, EPRI 2012]
	</p>

	<div class="nine column">
		<center>
			<h3>
				1D Resistivity Model for Columbia Pleateau Model CO-1
			</h3>
		</center>
		<a href="CO-1.png">
			<img src="CO-1_browser.png" alt=" " width="650" height="465" />
		</a>
		<p class="disclaimer">
			Resistivity values and depths have been interpreted from published
			geological reports and maps, and may differ from actual conditions
			measured by a geophysical survey and/or borehole.
		</p>
		<p>
			Source data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_CO1.txt">
				earth_model_CO1.txt
			</a>
		</p>
	</div>

<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="BR-1" coords="51,100,46,111,48,141,58,152,59,166,157,167,156,147,160,143,160,134,167,130,165,122,130,142,97,137,83,110" href="/conductivity/BR-1" />
<area shape="poly" alt="CS-1" coords="70,9,66,33,53,66,39,85,36,149,40,157,40,166,55,166,55,153,46,142,43,108,68,56,91,30,96,15" href="/conductivity/CS-1" />
<area shape="poly" alt="PB-2" coords="42,10,43,35,39,48,56,53,65,24" href="/conductivity/PB-2" />
<area shape="poly" alt="PB-1" coords="38,51,18,93,16,118,7,131,11,141,10,161,13,168,39,167,39,157,35,150,37,84,55,56" href="/conductivity/PB-1" />
</map>
	<div class="three column">
		<h2>Location</h2>
		<img src="locationsCO1.png" width="224" height="167" alt="Location of CO-1"
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
