<?php
	if(!isset($TEMPLATE)) {
		$TITLE = "Interior Plains (North Dakota)";
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
	<area shape="poly" alt="SU-1" coords="105,70,139,72,152,60,153,44,132,28,99,23" href="/conductivity/SU-1" />
	<area shape="poly" alt="IP-3" coords="137,77,141,98,158,121,206,111,202,104,209,94,208,82,195,71,195,62,182,52,186,48,185,41,172,39,155,44,154,61" href="/conductivity/IP-3" />
	<area shape="poly" alt="AP-1" coords="167,217,171,234,187,219,197,205,202,185,224,174,224,113,214,123,215,141,210,151,204,170,193,191,192,199,183,210,182,216" href="/conductivity/AP-1" />
	<area shape="poly" alt="CP-2" coords="57,258,61,229,65,223,71,223,81,226,104,227,118,214,128,195,139,180,146,178,155,179,160,186,161,203,159,207,165,216,170,235,191,241,211,240,224,230,224,258" href="/conductivity/CP-2" />
	<area shape="poly" alt="IP-2" coords="8,16,4,98,0,97,0,12" href="/conductivity/IP-2" />
	<area shape="poly" alt="IP-4" coords="10,20,43,44,38,75,58,122,58,154,48,169,51,177,40,187,30,190,22,199,23,209,15,220,17,229,8,235,6,247,41,255,43,249,56,248,54,258,0,258,1,100,6,100" href="/conductivity/IP-4" />
</map>

<figure class="right">
	<!-- <h2>Location</h2> -->
	<img src="locationsIP1.png" width="224" height="259" alt="Location of IP-1"
			usemap="#map">
</figure>
<p>
	Model IP-1 represents generally the eastern Interior Plains geophysical
	province. Although a vast (sub)province, the model should be considered
	typical of the eastern portion of North Dakota only. Note that Fernberg's
	tabulated resistivities differ from his figures; models posted by USGS have
	been corrected to match the body of his report. [Fernberg, EPRI 2012]
</p>

<center><h3>1D Resistivity Model for Interior Plains (North Dakota) Model IP-1</h3></center>
<a href="IP-1.png"><img src="IP-1_browser.png" alt=" " width="650" height="460"></a>
<p class="disclaimer">Resistivity values and depths have been interpreted
from published geological reports and maps, and may differ from actual
conditions measured by a geophysical survey and/or borehole.</p>
<p>
	Model data:
	<a target="_blank"
		href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_IP1.txt">
		earth_model_IP-1.txt
	</a>
</p>
