<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Coastal Plain (South Carolina)";
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
  <area shape="poly" alt="CP-2" coords="66,210,100,203,91,185,101,166,77,141,57,161,27,165,0,158,0,206,20,202,40,214,58,201" href="/conductivity/CP-2" />
  <area shape="poly" alt="PT-1"
  coords="2,154,21,161,49,158,95,124,123,91,137,73,137,56,131,36,135,19,156,1,115,1,92,60,42,90,27,126" href="/conductivity/PT-1/" />
  <area shape="poly" alt="AP-1" coords="1,151,1,132,12,127,56,32,55,7,100,30,91,58,40,90,25,124" href="/conductivity/AP-1" />
</map>

<figure class="right">
  <!-- <h2>Location</h2> -->
    <img src="locationsCP1.png" width="224" height="247" alt="Location of CP-1"
        usemap="#map">
</figure>

<p>
  Model CP-1 primarily represents the Coastal Plain geophysical province
  around South Carolina, but extends northward through North Carolina,
  Virginia, and into western Maryland. Note that Fernberg's tabulated
  resistivities differ from his figures; models posted by USGS have been
  corrected to match the body of his report. [Fernberg, EPRI 2012]
</p>

<center>
  <h3>1D Resistivity Model for Coastal Plains (South Carolina) Model CP-1</h3>
</center>
<a href="CP-1.png"><img src="CP-1_browser.png" alt=" " width="650" height="450"></a>
<p class="disclaimer">Resistivity values and depths have been interpreted
from published geological reports and maps, and may differ from actual
conditions measured by a geophysical survey and/or borehole.</p>
<p>
  Model data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_CP1.txt">
    earth_model_CP-1.txt
  </a>
</p>
