<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "St. Lawrence Lowlands";
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<map name="map">
  <area
    shape="poly"
    alt="NE-1"
    coords="197,72,150,111,148,171,110,184,94,218,175,179,159,158,163,133,224,
            132,223,111,180,111,210,87"
    href="/conductivity/NE-1" />
  <area
    shape="poly"
    alt="AK-1"
    coords="91,70,85,123,70,134,81,156,98,157,109,151,110,133,132,71"
    href="/conductivity/AK-1" />
  <area
    shape="poly"
    alt="AP-2"
    coords="92,215,106,182,107,165,94,159,70,165,58,177,24,183,6,199,1,205,1,
            236,35,237,37,228,60,212,73,212"
    href="/conductivity/AP-2" />
</map>

<figure class="right">
  <img src="locationsSL1.png" width="224" height="237" alt="Location of SL-1"
      usemap="#map" />
</figure>

<p>
  Model SL-1 represents the St. Lawrence Lowlands physiographic province,
  covering upper New York state, and the eastern Ontario area of Canada.
  [Fernberg, EPRI 2012]
</p>

<h3>
  1D Resistivity Model for St. Lawrence Lowlands Model SL-1
</h3>

<a href="SL-1.png">
  <img src="SL-1_browser.png"
    alt="1D Resistivity Model for St. Lawrence Lowlands Model SL-1"
    width="650" height="447" />
</a>

<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions
  measured by a geophysical survey and/or borehole.
</p>

<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_SL1.txt">
    earth_model_SL1.txt
  </a>
</p>
