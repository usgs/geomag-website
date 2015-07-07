<?php
	if(!isset($TEMPLATE)) {
		$TEMPLATE = 'onecolumn';
		$TITLE = "Coastal Plain (Georgia)";
	}

	include_once($_SERVER['DOCUMENT_ROOT'].'/template/template.inc.php');
?>

<div class="column container contains-twelve">
	<p>
		Model CP-2 primarily represents the Coastal Plain geophysical province
		around Georgia, but extends westward through Alabama, Mississippi,
		Arkansas, Louisiana, and eastern Texas. Note that Fernberg's tabulated
		resistivities differ from his figures; models posted by USGS have been
		corrected to match the body of his report. [Fernberg, EPRI 2012]
	</p>
	<div class="nine column">
		<center>
			<h3>
				1D Resistivity Model for Atlantic Coastal Plain (Georgia) Model CP-2
			</h3>
		</center>
		<a href="CP-2.png">
			<img src="CP-2_browser.png" alt=" " width="650" height="448" />
		</a>
		<p class="disclaimer">
			Resistivity values and depths have been interpreted from published
			geological reports and maps, and may differ from actual conditions
			measured by a geophysical survey and/or borehole.
		</p>
		<p>
			Source data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_CP2.txt">
				earth_model_CP2.txt
			</a>
		</p>
	</div>

<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="CP-1" coords="185,44,199,57,210,45,223,45,223,28,223,1,213,15" href="/conductivity/CP-1" />
<area shape="poly" alt="PT-1" coords="136,52,146,56,161,57,180,45,221,1,181,1,160,12,152,36" href="/conductivity/PT-1" />
</map>
	<div class="three column">
		<h2>Location</h2>
		<img src="locationsCP2.png" width="224" height="148" alt="Location of CP-2"
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
