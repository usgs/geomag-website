<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Coastal Plain (Georgia)";
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<map name="map">
  <area
    shape="poly"
    alt="CP-1"
    coords="185,44,199,57,210,45,223,45,223,28,223,1,213,15"
    href="/conductivity/CP-1" />
  <area
    shape="poly"
    alt="PT-1"
    coords="136,52,146,56,161,57,180,45,221,1,181,1,160,12,152,36"
    href="/conductivity/PT-1" />
</map>

<figure class="right">
  <img src="locationsCP2.png" width="224" height="148" alt="Location of CP-2"
      usemap="#map" />
</figure>

<p>
  Model CP-2 primarily represents the Coastal Plain geophysical province
  around Georgia, but extends westward through Alabama, Mississippi,
  Arkansas, Louisiana, and eastern Texas. Note that Fernberg's tabulated
  resistivities differ from his figures; models posted by USGS have been
  corrected to match the body of his report. [Fernberg, EPRI 2012]
</p>

<h3>
  1D Resistivity Model for Atlantic Coastal Plain (Georgia) Model CP-2
</h3>

<a href="CP-2.png">
  <img src="CP-2_browser.png"
    alt="1D Resistivity Model for Atlantic Coastal Plain (Georgia) Model CP-2"
    width="650" height="448" />
</a>

<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions
  measured by a geophysical survey and/or borehole.
</p>

<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_CP2.txt">
    earth_model_CP2.txt
  </a>
</p>
