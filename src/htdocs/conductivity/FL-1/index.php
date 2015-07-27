<?php
  if(!isset($TEMPLATE)) {
    $TITLE = "Florida Peninsula";
    $NAVIGATION = true;
    include 'template.inc.php';
  }

?>

<figure class="right">
  <!-- <h2>Location</h2> -->
  <img src="locationsFL1.png" width="224" height="148" alt="Location of FL-1"/>
</figure>

<p>
  Model FL-1 represents a very general Florida peninsula, and is created from
  inversion of published conductivity values of known rock types lying
  sratigraphically beneath Florida. The range of conductivity values, as well
  as the range of corresponding layer thickness, was taken from published
  sources. FL-1 was calculated using the geometric mean of upper and lower
  conductivity values, and an average layer thickness of each stratigraphic
  layer. [Love and Blum, USGS 2014 - in preparation]
</p>

<center>
  <h3>1D Resistivity Model for Florida Peninsula Model FL-1</h3>
</center>
<img src="Depth_vs_Resistivity-FL1.png" alt=" " width="650" height="448" />
<p class="disclaimer">
  Resistivity values and depths have been interpreted from published
  geological reports and maps, and may differ from actual conditions measured
  by a geophysical survey and/or borehole.
</p>
<p>
  Source data:
  <a target="_blank"
    href="ftp://hazards.cr.usgs.gov/Rigler/Conductivity_Latest/earth_model_FL1.txt">
    earth_model_FL1.txt
  </a>
</p>
