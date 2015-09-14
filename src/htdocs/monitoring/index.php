<?php
  if(!isset($TEMPLATE)) {
    $TITLE = 'Monitoring';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<ul class="linklist">
  <li>
    <a href="operations.php">
      <h2>Operations</h2>
      <img src="/images/operations.jpg" alt=""/>
    </a>
    <p>
      Learn more about the USGS Geomagnetism operations.
    </p>
  </li>
  <li>
    <a href="instrumentation.php">
      <h2>Instrumentation</h2>
      <img src="/images/instrumentation.jpg" alt=""/>
    </a>
    <p>
      See the instruments we use at our geomagnetic observatories and how
      they help us to gather data.
    </p>
  </li>
  <li>
    <a href="observatories/">
      <h2>Observatories</h2>
      <img src="/images/observatories.jpg" alt=""/>
    </a>
    <p>
      Get information on and locations of geomagnetic observatories operated
      by the USGS and partners of the USGS geomagnetism program.
    </p>
  </li>
  <li>
    <a href="links.php">
      <h2>International Observatory Programs</h2>
    </a>
    <p>Links to our international observatory partners' programs</p>
  </li>
</ul>
