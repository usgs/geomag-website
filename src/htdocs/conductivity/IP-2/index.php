<?php
	if(!isset($TEMPLATE)) {
		$TITLE = "Interior Plains (North American Conductive Anomaly)";
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
	<area shape="poly" alt="IP-4" coords="74,21,69,92,57,92,60,31,41,31,41,20,60,21,61,15,1,7,1,23,16,30,13,44,36,58,35,77,46,80,45,108,112,108,96,68,98,40" href="/conductivity/IP-4" />
	<area shape="poly" alt="IP-1" coords="75,16,75,20,101,40,98,65,114,108,224,108,224,94,191,102,175,83,172,64,146,64,142,42,126,42,126,30,144,30,127,17" href="/conductivity/IP-1" />
	<area shape="poly" alt="SU-1" coords="173,62,184,53,184,39,168,28,143,24,143,31,127,31,127,40,143,40,148,61" href="/conductivity/SU-1" />
	<area shape="poly" alt="IP-3" coords="186,40,186,52,174,65,176,80,191,100,224,93,223,65,219,51,210,46,211,39,200,35" href="/conductivity/IP-3" />
</map>
<figure class="right">
	<!-- <h2>Location</h2> -->
	<img src="locationsIP2.png" width="224" height="108" alt="Location of IP-2"
			usemap="#map">
</figure>
<p>
	Model IP-2 is provided primarily to represent the North American
	Conductivity Anomaly (NACP), a narrow region of low resistivity extending
	across western South and North Dakota, and north into Canada along the
	Saskatchewan-Manitoba provincial boundary. Note that Fernberg's tabulated
	resistivities differ from his figures; models posted by USGS have been
	corrected to match the body of his report. [Fernberg, EPRI 2012]
</p>
<center>
	<h3>1D Resistivity Model for Interior Plains (North Dakota) Model IP-2 </h3>
		<h6 class="disclaimer">Specific to North American Central Plains conductive anomaly</h6>
		</center>
		<a href="IP-2.png"><img src="IP-2_browser.png" alt=" " width="650" height="441"></a>
		<p class="disclaimer">Resistivity values and depths have been interpreted
		from published geological reports and maps, and may differ from actual
		conditions measured by a geophysical survey and/or borehole.</p>
		<p>
			Model data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_IP2.txt">
				earth_model_IP-2.txt
			</a>
		</p>
	</div>
