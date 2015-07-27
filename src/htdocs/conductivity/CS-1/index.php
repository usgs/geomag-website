<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Cascade-Sierra Mountains";
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
  <area shape="poly" alt="BR-1" coords="70,143,63,158,65,176,68,187,65,203,82,222,87,277,98,297,97,337,76,352,88,357,142,356,143,200,136,195,123,163,107,155" href="/conductivity/BR-1" />
  <area shape="poly" alt="CO-1" coords="70,139,95,83,133,39,143,43,143,196,126,157" href="/conductivity/CO-1" />
  <area shape="poly" alt="PB-1" coords="53,65,39,102,20,141,18,175,6,190,13,207,8,230,24,264,25,296,42,335,39,344,60,357,80,357,70,350,76,308,51,263,53,225,44,207,51,188,48,174,48,115,77,82" href="/conductivity/PB-1" />
  <area shape="poly" alt="PB-2" coords="58,10,55,62,76,78,78,54,86,48,88,26" href="/conductivity/PB-2" />
</map>
<figure class="right">
  <!-- <h2>Location</h2> -->
  <img src="locationsCS1.png" width="144" height="357" alt="Location of CS-1"
      usemap="#map" />
</figure>
<p>
  Model CS-1 represents the narrow Cascade-Sierra Mountains physiographic
  province, most applicable to central Oregon and Washington states, but
  extending southward into California. [Fernberg, EPRI 2012]
</p>

<center>
  <h3>
    1D Resistivity Model for Cascade-Sierra Mountains Model CS-1
  </h3>
</center>
<a href="CS-1.png">
  <img src="CS-1_browser.png" alt=" " width="650" height="468" />
</a>
<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions
  measured by a geophysical survey and/or borehole.
</p>
<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_CS1.txt">
    earth_model_CS-1.txt
  </a>
</p>
