<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Pacific Border (Willamette Valley)";
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
  <area shape="poly" alt="PB-2" coords="57,2,11,9,11,29,58,27,58,40,79,51,93,12,78,2" href="/conductivity/PB-2" />
  <area shape="poly" alt="CS-1" coords="99,1,99,14,81,54,75,63,50,97,52,124,47,131,54,238,79,289,76,314,87,314,94,300,92,263,83,239,81,204,64,179,61,132,90,60,130,13,134,0" href="/conductivity/CS-1" />
  <area shape="poly" alt="CO-1" coords="131,18,92,65,71,116,128,136,139,168,145,171,143,21" href="/conductivity/CO-1" />
  <area shape="poly" alt="BR-1" coords="71,119,63,133,66,179,81,200,85,237,94,264,95,300,85,318,76,322,125,352,109,351,114,366,107,369,113,381,143,382,145,175,139,170,126,140" href="/conductivity/BR-1" />
</map>

<figure class="right">
  <img src="locationsPB1.png" width="144" height="383" alt="Location of PB-1"
      usemap="#map" />
</figure>

<p>
  Model PB-1 represents the Willamette Valley portion of the Pacific Border
  physiographic province, extending southward through Oregon and into
  western California. [Fernberg, EPRI 2012]
</p>


<h3>
  1D Resistivity Model for Pacific Border Model PB-1 (Oregon)
</h3>

<a href="PB-1.png">
  <img src="PB-1_browser.png" alt=" " width="650" height="446" />
</a>
<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions
  measured by a geophysical survey and/or borehole.
</p>
<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_PB1.txt">
    earth_model_PB1.txt
  </a>
</p>
