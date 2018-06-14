<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'USGS Geomagnetism Program';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include 'template.inc.php';
}

?>
<div class="row">
  <div class="one-of-two column">

    <!--FEATURED RESEARCH-->
    <h2>Highlights</h2>
    <!-- Featured Items -->
    <div class='alert'>
      <?php
      include_once '_features.inc.php';
      echo $GM_FEATURES->toHtml();
      ?>

      <p><a href="highlight-archives.php">View Highlight Archives</a></p>
      <a href="atom.php"><img style="padding-right:16px;" src="images/rssfeed.gif" alt="ATOM feed">Subscribe to Geomagnetism Program Highlights</a>
    </div>

    <div>
      <h2>Video - Hazards: Geomagnetic Storms</h2>
      <p>
        View <a href="http://www.youtube.com/watch?v=s9YGOUWpH8s">
            "Hazards: Geomagnetic Storms"</a> - a 7-minute introductory video</a>
      </p>
      <div class="iframe-container">
        <iframe class="iframe" src="//www.youtube.com/embed/s9YGOUWpH8s"
            allowfullscreen="">
        </iframe>
      </div>
    </div>

<!--
    <div id="storm-summary">
      <h2>Latest Magnetic Disturbance Event</h2>
      <h3>
        <a href="/storm/storm23.php">Event: 2015-06-23</a>
      </h3>
      <h4>Maximum Dst Amplitude -195 <abbr title="Nanotesla">nT</abbr></h4>
      <p>
      </p>
    </div>
-->

  </div>

  <div class="one-of-two column">
    <ul class="linklist">
      <li>
        <a href="/monitoring/">
          <h2>Monitoring</h2>
          <img src="/images/observatory_index.jpg" alt=""/>
        </a>
        <p>
          Get information on how our magnetic observatories collect and
          transfer data and find sources for data outside of the United
          States
        </p>
      </li>
      <li>
        <a href="/products/">
          <h2>Data &amp; Products</h2>
          <img src="/images/ring_current2_index.gif" alt=""/>
        </a>
        <p>
          View graphs of real-time magnetic data from USGS and partner
          observatories and download historical definitive data'
        </p>
      </li>
      <li>
        <a href="/research/">
          <h2>Research</h2>
          <img src="/images/Q17_index.jpg" alt=""/>
        </a>
        <p>
          Get information about research being done by the USGS Geomagnetism
          Program and view publications by our researchers
        </p>
      </li>
      <li>
        <a href="/publications/papers.php">
          <h2>Publications</h2>
          <img src="/images/pubs.gif" width="150" alt=""/>
        </a>
        <p>
          Scientific publications listed by year.
        </p>
      </li>
      <li>
        <a href="/learn/">
          <h2>Learn</h2>
          <img src="/images/Q5_index.jpg" alt=""/>
        </a>
        <p>
          Learn about Earth's magnetic field, space weather, magnetism and
          more
        </p>
      </li>
      <li>
        <a href="/services.php">
          <h2>Services</h2>
          <img src="/images/MagSensors4_index.jpg" alt=""/>
        </a>
        <p>
          The USGS Geomagnetism Program provides some services such as
          Compass Rose Surveys to governmental, academic and private
          communities
        </p>
      </li>
      <li>
        <a href="/partners.php">
          <h2>Partners &amp; Customers</h2>
          <img src ="/images/partners.gif" alt=""/>
        </a>
        <p>
          Meet the public and private groups and companies that contribute
          to our program and benefit from our services
        </p>
      </li>
    </ul>
  </div>
</div>
