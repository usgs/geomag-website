<?php
	if(!isset($TEMPLATE)) {
		$TITLE = "Piedmont";
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
	<area shape="poly" alt="IP-3" coords="69,46,1,61,0,47,6,53,18,48,21,21,16,1,66,2,75,15,74,28,64,38" href="/conductivity/IP-3" />
	<area shape="poly" alt="AP-1" coords="83,66,132,90,123,110,123,120,67,154,67,161,57,167,52,179,53,194,22,224,13,196,35,198,35,191,49,168,49,157,74,114,83,90" href="/conductivity/AP-1" />
	<area shape="poly" alt="CP-2" coords="107,211,132,235,124,254,130,277,97,286,84,280,68,290,43,278,2,283,2,186,12,198,20,225,37,232,74,232,95,220" href="/conductivity/CP-2" />
	<area shape="poly" alt="CP-1" coords="110,210,133,232,154,211,191,211,190,197,163,197,202,152,176,76,170,86,175,136" href="/conductivity/CP-1" />
	<area shape="poly" alt="AP-2" coords="82,62,135,87,140,73,142,50,161,35,189,36,201,2,157,1,120,17" href="/conductivity/AP-2" />
</map>

<figure class="right">
	<img src="locationsPT1.png" width="224" height="305" alt="Location of PT-1"
			usemap="#map" />
</figure>

<p>
	Model PT-1 represents the Piedmont physiographic province, and is located
	between CP-1 and AP-1. Note that Fernberg's tabulated resistivities differ
	from his figures; models posted by USGS have been corrected to match the
	body of his report. [Fernberg, EPRI 2012]
</p>

<center>
	<h3>
		1D Resistivity Model for Piedmont (SE Appalachians) Model PT-1
	</h3>
</center>
<a href="PT-1.png">
	<img src="PT-1_browser.png" alt=" " width="650" height="447" />
</a>
<p class="disclaimer">
	Resistivity values and depths have been interpreted from published
	geological reports and maps, and may differ from actual conditions
	measured by a geophysical survey and/or borehole.
</p>
<p>
	Source data:
	<a target="_blank"
		href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_PT1.txt">
		earth_model_PT1.txt
	</a>
</p>
