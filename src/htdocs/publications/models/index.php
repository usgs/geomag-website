<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Models';
  include 'template.inc.php';
}
?>

<p>
  For main-field models and calculators for declination and other field
  components, please visit NOAA
  <a href="http://www.ngdc.noaa.gov/geomag/magfield.shtml">
  (http://www.ngdc.noaa.gov/geomag/magfield.shtml)</a>
</p>

<ul class="referencelist">
  <li>
    Love, J. J. & Gannon, J. L., 2009.
    <a href="/downloads/publications/angeo-27-3101-2009.pdf">
    Revised Dst and the epicycles of magnetic disturbance: 1958-2007</a>, Ann.
    Geophys., 27, 3101-3131.
    <ul class="referencelist">
      <li>
        Download model:
        <a href="ftp://ftpext.usgs.gov/pub/cr/co/golden/jlove/models/5807-4SH">
        5807-4SH</a> (1 hour Dst)
      </li>
      <li>
        Download model:<a href="ftp://hazards.cr.usgs.gov/minDst_definitive">
        8507-4SM</a> (1 minute USGS Dst)
      </li>
      <li>
        Download model:<a href="ftp://hazards.cr.usgs.gov/minDst">
        Near real-time Dst</a>
      </li>
      <li>
        Download model:<a href="magnetic_declination.avi">
        Magnetic Field Declination</a> 1590 to 2008
      </li>
    </ul>
  </li>
</ul>