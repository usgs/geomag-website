<?php
  if(!isset($TEMPLATE)) {
    $TITLE = 'Data & Products';
    $HEAD = '<link rel="stylesheet" href="index.css"/>';
    $CONTACT = 'geomagdata@usgs.gov';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>
<div class="row">
  <div class="one-of-two column">
    <ul class="linklist">
      <li>
        <a href="/realtime">
          <h2>Real-Time HEZF Display</h2>
          <img src="/images/realtime_final.png" alt=""/>
        </a>
        <p>
          Real-time HEZF index display from USGS geomagnetic observatories
          internet feeds without filling gaps with satellite data.
        </p>
      </li>
      <li>
        <a href="realtime/">
          <h2>Blended Real-Time HEZF Display</h2>
          <img src="/images/blended_final.png" alt=""/>
        </a>
        <p>
          Real-time HEZF data from USGS geomagnetic observatories with
          satellite data used to fill gaps.
        </p>
      </li>
      <li>
        <a href="downloads.php">
          <h2>Downloads</h2>
          <img src="/images/download.png" alt=""/>
        </a>
        <p>
          Download real-time and definitive data and indices from USGS
          geomagnetic observatories.
        </p>
      </li>
      <li>
        <a href="/storm/">
          <h2>Magnetic Disturbance Events</h2>
          <img src="/images/storms_final.png" alt=""/>
        </a>
        <p>
          View reports on magnetic disturbance events.
        </p>
      </li>
    </ul>
  </div>
  <div class="one-of-two column">
    <ul class="linklist">
      <li>
        <a href="models.php">
          <h2>Models</h2>
          <img src="/images/models_final.png" alt=""/>
        </a>
        <p>
          View and download model results from magnetic studies.
        </p>
      </li>
      <li>
        <a href="/map/">
          <h2>Real-Time Geomagnetic Conditions</h2>
          <img src="/images/map_final.png" alt=""/>
        </a>
        <p>
          Real-time data map display from USGS geomagnetic observatories.
        </p>
      </li>
      <li>
        <a href="/realtime/dst">
          <h2>Real-Time Dst Display</h2>
          <img src="/images/dst_final.png" alt=""/>
        </a>
        <p>
          Real-time Dst data from USGS observatories as well as other world
          partners.
        </p>
      </li>
      <li>
        <a href="otherdata.php">
          <h2>Other Sources of Data</h2>
        </a>
      </li>
    </ul>
  </div>
</div>
