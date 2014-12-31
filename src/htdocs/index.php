<?php

if (!isset($TEMPLATE)) {
	$TITLE = 'USGS Geomagnetism Program';
	$HEAD = '<link rel="stylesheet" href="index.css"/>';
	include 'template.inc.php';
}

?>
<div class="row">
  <div class="one-of-two column">
    <div id="storm-summary">Storm summary goes here.</div>
    <div>
      <hr />
      <h3>New Video - Hazards: Geomagnetic Storms</h3>
      <p>
        View <a href="http://www.youtube.com/watch?v=s9YGOUWpH8s">
            "Hazards: Geomagnetic Storms"</a> - a 7-minute introductory video
      </p>
      <div class="iframe-container">
        <iframe class="iframe" src="//www.youtube.com/embed/s9YGOUWpH8s"
            allowfullscreen="">
        </iframe>
      </div>
    </div>
  </div>
  <div class="one-of-two column">
    <ul class="row no-style">
      <li class="column">
        <h2><a href="/monitoring/">Monitoring</a></h2>
        <div class="row">
          <img src="/images/observatory_index.jpg" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
              Get information on how our magnetic observatories collect and
              transfer data and find sources for data outside of the United
              States
          </div>
        </div>
      </li>
      <li class="column">
        <h2><a href="/products/">Data &amp; Products</a></h2>
        <div class="row">
          <img src="/images/ring_current2_index.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
              View graphs of real-time magnetic data from USGS and partner
              observatories and download historical definitive data'
          </div>
        </div>
      </li>
      <li class="column">
        <h2><a href="/research/">Research</a></h2>
        <div class="row">
          <img src="/images/Q17_index.jpg" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">Get information about
              research being done by the USGS Geomagnetism Program and view
              publications by our researchers
          </div>
        </div>
      </li>
      <li class="column">
        <h2><a href="/learn/">Learn</a></h2>
        <div class="row">
          <img src="/images/Q5_index.jpg" alt="" class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">Learn about Earth's magnetic
              field, space weather, magnetism and more
          </div>
        </div>
      </li>
      <li class="column">
        <h2><a href="/services.php">Services</a></h2>
        <div class="row">
          <img src="/images/MagSensors4_index.jpg" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
              The USGS Geomagnetism Program provides some services such as
              Compass Rose Surveys to governmental, academic and private
              communities
          </div>
        </div>
      </li>
      <li class="column">
        <h2><a href="/partners.php">Partners &amp; Customers</a></h2>
        <div class="row">
          <img src ="/images/partners.gif" alt=""
              class="column mobile-one-of-four" />
          <div class="column mobile-three-of-four">
              Meet the public and private groups and companies that contribute
              to our program and benefit from our services
          </div>
        </div>
      </li>
    </ul>
  </div>
</div>
