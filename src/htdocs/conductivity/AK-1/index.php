<?php
	if(!isset($TEMPLATE)) {
		$TITLE = "Adirondack Mountains";
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
	<area shape="poly" alt="IP-3" coords="79,161,79,151,84,146,87,129,82,121,70,110,71,96,49,82,58,75,46,67,14,72,15,96,0,110,2,150,11,161" href="/conductivity/IP-3" />
	<area shape="poly" alt="AP-2" coords="163,160,176,151,199,152,213,132,212,120,206,112,186,116,148,131,137,136,120,160" href="/conductivity/AP-2" />
	<area shape="poly" alt="SL-1" coords="145,129,198,110,183,95,184,86,207,78,207,72,145,77,145,98,175,97,174,113,139,119" href="/conductivity/SL-1" />
	<area shape="poly" alt="NE-1" coords="219,130,206,155,269,126,253,111,259,88,309,88,309,72,277,72,298,52,288,42,248,72,248,120" href="/conductivity/NE-1" />
</map>
<figure class="right">
	<!-- <h2>Location</h2> -->
		<img src="locationsAK1.png" alt="Location of AK1.png" width="304"
				height="162" usemap="#map">
</figure>
<p>
	Models AK-1A and AK-1B represent the central part of the Adirondack
	physiographic province in upper New York State. The Adirondacks are the
	southeasterly extension of the Canadian Precambrian Shield into upper New
	York, and are not part of the Appalachians. AK-1A is the central core,
	characterized by a massive intrusion of metamorphosed anorthosite,
	exhibiting very high electrical resistivity. AK-1B excludes the
	meta-anorthosite, but is otherwise identical. [Fernberg, EPRI 2012]
</P>


<center>
	<h3>1D Resistivity Model for Adirondack Mountains Model AK-1A</h3>
</center>
<a href="AK-1A.png">
	<img src="AK-1A_browser.png" width="464" height="332" />
</a>
<center>
	<h3>1D Resistivity Model for Adirondack Mountains Model AK-1B</h3>
</center>
<a href="AK-1B.png">
	<img src="AK-1B_browser.png" width="464" height="328">
</a>
<p class="disclaimer">
	Resistivity values and depths have been interpreted from published
	geological reports and maps, and may differ from actual conditions measured
	by a geophysical survey and/or borehole.
</p>
<p>Source data:
	<ul>
		<li>
			<a taget="_blank" href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_AK1A.txt">
				earth_model_AK1A.txt
			</a>
		</li>
		<li>
			<a target="_blank" href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_AK1B.txt">
				earth_model_AK1B.txt
			</a>
		</li>
	</ul>
</p>
