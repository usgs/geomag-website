<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Interior Plains (Great Plains)";
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
  <area shape="poly" alt="IP-1" coords="94,16,94,19,122,39,118,66,135,108,135,133,126,145,129,151,112,162,106,172,91,209,103,209,116,213,118,208,129,208,135,188,143,182,142,17" href="/conductivity/IP-1" />
  <area shape="poly" alt="CL-1" coords="0,124,0,175,18,188,35,183,43,155,29,142,37,128,33,111,13,108" href="/conductivity/CL-1" />
  <area shape="poly" alt="IP-2" coords="81,14,78,93,88,93,92,14" href="/conductivity/IP-2" />
</map>
<figure class="right">
    <!-- <h2>Location</h2> -->
    <img src="locationsIP4.png" width="144" height="296" alt="Location of IP-4"
        usemap="#map" />
</figure>
<p>
  Model IP-4 represents the Great Plains physiographic province, a
  subdivision of the Interior Plains province. This region includes the
  Denver metropolitan area, and extends eastward to west Kansas, and
  south-easterly to the Texas panhandle. [Fernberg, EPRI 2012]
</p>

<center>
  <h3>
    1D Resistivity Model for Interior Plains (Great Plains) Model IP-4
  </h3>
</center>
<a href="IP-4.png">
  <img src="IP-4_browser.png" alt=" " width="650" height="442" />
</a>
<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions
  measured by a geophysical survey and/or borehole.
</p>
<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_IP4.txt">
    earth_model_IP4.txt
  </a>
</p>
