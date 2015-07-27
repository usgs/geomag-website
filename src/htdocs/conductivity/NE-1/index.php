<?php
	if(!isset($TEMPLATE)) {
		$TITLE = "New England";
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
	<area shape="poly" alt="AK-1" coords="71,120,44,130,38,140,56,158,74,164,85,162,91,135,120,60,56,58" href="/conductivity/AK-1" />
</map>

<figure class="right">
	<img src="locationsNE1.png" width="224" height="238" alt="Location of NE-1"
			usemap="#map" />
</figure>

<p>
	Model NE-1 represents southwest portion of Maine, just north of Portland,
	and more generally the New England physiographic province.
	[Fernberg, EPRI 2012]
</p>

<center>
	<h3>
		1D Resistivity Model for New England Province (Maine) Model NE-1
	</h3>
</center>
<a href="NE-1.png">
	<img src="NE-1_browser.png" alt=" " width="650" height="454" />
</a>
<p class="disclaimer">
	Resistivity values and depths have been interpreted from published
	geological reports and maps, and may differ from actual conditions
	measured by a geophysical survey and/or borehole.
</p>
<p>
	Source data:
	<a target="_blank"
		href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_NE1.txt">
		earth_model_NE1.txt
	</a>
</p>
