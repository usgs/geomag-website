<?php

if (!isset($TEMPLATE)) {
  $TITLE = 'USGS Geomagnetism Program';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  include 'template.inc.php';
}

?>
<div class="row">
  <div class="one-of-two column">
    <img src="images/geoelectric-geomagnetic-hazard.gif" alt="satellite photo of the US at night with lights"/>
    <ul class="linklist no-style">
      <li>
        <a href="https://eos.org/research-spotlights/mapping-geoelectric-hazards-across-the-united-states">
          <h2>Highlight: Mapping Geoelectric Hazards Across the United States - EOS</h2>
        </a>
        <p>
          Variations in Earth’s magnetic field can induce electric fields in the ground, driving damaging currents through our power grids.
        </p>
      </li>
    </ul>
    </a>

    <hr />

    <div id="storm-summary">
      <h2>Latest Magnetic Disturbance Event</h2>

      <h3>
        <a href="/storm/storm23.php">Event: 2015-06-23</a>
      </h3>
      <h4>Maximum Dst Amplitude -195 <abbr title="Nanotesla">nT</abbr></h4>
      <p>
        A “severe” storm occurred on June 21-23, 2015. This storm arose in response
        to variable solar-wind conditions that the Space Weather Prediction Center
        of the National Oceanic and Atmospheric Administration (SWPC, NOAA)
        associated with active region 2371 on the Sun. A series of 3 coronal mass
        ejections (CMEs) originated from this active region. These were subsequently
        recorded by NASA’s Advanced Composition Explorer (ACE) satellite, located on
        the Sun-Earth line at a distance approximately 1% of the distance from the
        Earth to the Sun, as abrupt enhancements in solar-wind velocity and density.
        With the arrival of the CMEs at the Earth on about June 21 16:45 UT,
        June 22 05:45 UT, and June 22 18:30 UT, concomitant increases in solar-wind
        ram pressure abruptly compressed the Earth’s magnetosphere. These generated
        eastward-flowing magnetopause electric currents and positive perturbations
        in the horizontal component of the geomagnetic field recorded at
        low-latitude magnetic observatories around the world, including at USGS
        observatories in Guam, Honolulu, and San Juan.
      </p>

    </div>
    <hr />

    <div>
      <h3>Video - Hazards: Geomagnetic Storms</h3>
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
