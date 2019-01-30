<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Appalachian Plateaus";
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<map name="map">
  <area
    shape="poly"
    alt="CP-1"
    coords="130,197,148,215,163,198,196,198,196,185,174,185,205,149,184,88,
            178,94,180,140"
    href="/conductivity/CP-1" />
  <area
    shape="poly"
    alt="PT-1"
    coords="57,208,73,214,96,214,120,198,136,188,177,141,175,94,203,66,205,
            57,169,57,159,70,151,98,140,115,140,126,95,152"
    href="/conductivity/PT-1" />
  <area
    shape="poly"
    alt="IP-3"
    coords="41,1,16,24,22,50,40,75,93,63,89,56,94,50,98,35,94,26,84,19,83,3"
    href="/conductivity/IP-3" />
  <area
    shape="poly"
    alt="AP-2"
    coords="111,76,148,95,158,65,169,55,192,54,204,34,203,23,195,19,164,29,
            127,53"
    href="/conductivity/AP-2" />
</map>

<figure class="right">
  <img src="locationsAP1.png" width="224" height="215" alt="Location of AP-1"
    usemap="#map" />
</figure>

<p>
  Model AP-1 represents the southern portion of the Appalachian Plateau
  physiographic region. [Fernberg, EPRI 2012]
</p>

<h3>
  1D Resistivity Model for Appalachian Plateau (SE Appalachians) Model AP-1
</h3>

<a href="AP-1.png">
  <img src="AP-1_browser.png"
    alt="1D Resistivity Model for Appalachian Plateau (SE Appalachians) Model
         AP-1" width="650" height="450" />
</a>

<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions measured
  by a geophysical survey and/or borehole.
</p>

<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_AP1.txt">
    earth_model_AP1.txt
  </a>
</p>
