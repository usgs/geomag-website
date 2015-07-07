<?php
	if(!isset($TEMPLATE)) {
		$TEMPLATE = 'onecolumn';
		$TITLE = "Interior Plains (Michigan)";
	}

	include_once($_SERVER['DOCUMENT_ROOT'].'/template/template.inc.php');
?>

<div class="column container contains-twelve">
	<p>
		Model IP-3 represents the lower Michigan portion of the Interior Plains
		geophysical province. encompassing much of the state in addition to the
		eastern margin of Wisconsin. IP-3 does not include the Upper Peninsula.
		[Fernberg, EPRI 2012]
	</p>
	<div class="nine column">
		<center><h3>1D Resistivity Model for Central Lowland-East Lake Section Model IP-3</h3></center>
		<a href="IP-3.png"><img src="IP-3_browser.png" alt=" " width="650" height="448"></a>
		<p class="disclaimer">Resistivity values and depths have been interpreted
		from published geological reports and maps, and may differ from actual
		conditions measured by a geophysical survey and/or borehole.</p>
		<p>
			Model data:
			<a target="_blank"
				href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_IP3.txt">
				earth_model_IP-3.txt
			</a>
		</p>
	</div>
	<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:afurze -->
<area shape="poly" alt="SU-1" coords="27,26,27,37,8,37,8,50,28,50,32,75,68,76,82,63,81,46,59,31" href="/conductivity/SU-1" />
<area shape="poly" alt="AP-2" coords="146,127,180,145,190,118,200,107,222,108,223,78,209,78,201,87,183,90,169,100" href="/conductivity/AP-2" />
<area shape="poly" alt="AP-1" coords="145,130,144,147,136,170,169,170,179,147" href="/conductivity/AP-1" />
<area shape="poly" alt="SL-1" coords="223,48,200,52,177,53,177,67,201,67,201,77,195,81,175,83,176,92,185,88,200,86,208,77,221,75,206,61" href="/conductivity/SL-1" />
<area shape="poly" alt="IP-1" coords="150,115,142,124,142,146,132,155,124,152,114,163,106,152,91,169,63,170,60,164,34,159,24,170,0,169,0,18,7,18,9,12,10,20,25,25,25,36,7,36,7,52,26,52,31,77,66,78,67,101,88,127" href="/conductivity/IP-1" />
</map>
	<div class="three column">
		<h2>Location</h2>
		<img src="locationsIP3.png" width="224" height="170" alt="Location of IP-3" style="margin-top:-10px;" usemap="#map">
	</div>
	<div id="minimap" class="right two column">
		<a href="/conductivity/"><h2>Zoom Out</h2><img src="/conductivity/locationssmall.png" alt="Return to main" width="144" height="108"></a>
	</div>
</div>
