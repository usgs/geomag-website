<?php
	if(!isset($TEMPLATE)) {
		$TEMPLATE = 'onecolumn';
		$TITLE = "Northern Appalachian Plateaus";
	}

?>

<div class="column container contains-twelve">
	<div class="nine column">
		<p>
			Model AP-2 represents the Southern New York physiographic section
			encompassing the northern portion of the Appalachian Plateau
			physiographic province. [Fernberg, EPRI 2012]
		</p>
		<center>
			<h3>
				1D Resistivity Model for Appalachian Plateau (northern portion) Model AP-2
			</h3>
		</center>
		<a href="AP-2.png"><img src="AP-2.png" alt=" " width="650" height="450"></a>
		<p class="disclaimer">
			Resistivity values and depths have been interpreted from published
			geological reports and maps, and may differ from actual conditions
			measured by a geophysical survey and/or borehole.
		</p>
		<p>Source data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_AP2.txt">
				earth_model_AP-2.txt
			</a>
		</p>
	</div>
	<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="NE-1" coords="141,103,131,128,188,101,174,87,180,67,226,67,226,52,197,52,197,46,213,36,205,21,169,50,169,94" href="/conductivity/NE-1" />
<area shape="poly" alt="AK-1" coords="129,58,111,66,114,73,122,82,134,83,141,71,159,18,121,18" href="/conductivity/AK-1" />
<area shape="poly" alt="SL-1" coords="127,57,126,51,71,57,71,73,101,73,103,85,96,90,71,94,73,106,118,84,108,65" href="/conductivity/SL-1" />
</map>

	<div class="three column">
		<h2>Location</h2>
		<img src="locationsAP2.png" width="224" height="180" alt="Location of AP-2"
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
