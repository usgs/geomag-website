<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Learn';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<div class="row">
  <div class="column two-of-five">
    <ul class="linklist">
      <li>
        <a href="introtogeomag.php">
          <h2>Introduction to Geomagnetism</h2>
          <img src="/images/intro.png" alt="" />
        </a>
      </li>
      <li>
        <a href="reading.php">
          <h2>Further Reading</h2>
          <img src="/images/furtherreading.jpeg" alt="" />
        </a>
      </li>
      <li>
        <a href="pressreleases.php">
          <h2>Press Releases</h2>
          <img src="/images/pressrelease.png" alt=""/>
        </a>
      </li>
      <li>
        <a href="http://www.usgs.gov/faq/?q=taxonomy/term/9782">
          <h2>FAQ's</h2>
          <img src="/images/faq.gif" alt=""/>
        </a>
      </li>
    </ul>
  </div>
  <div class="column three-of-five">
    <p>
      For centuries, navigators of the world's oceans have been familiar
      with an effect of Earth's magnetic field: It imparts a directional
      preference to the needle of a compass. Although in some settings
      magnetic orientation remains important, the modern science of
      geomagnetism has emerged from its romantic nautical origins and
      developed into a subject of great depth and diversity. The
      geomagnetic field is used to explore the dynamics of Earth's interior
      and its surrounding space environment, and geomagnetic data are used for
      geophysical mapping, mineral exploration, risk mitigation, and other
      practical applications. A global distribution of groundbased magnetic
      observatories supports those pursuits by providing accurate records of the
      magnetic-field direction and intensity at fixed locations and over long
      periods of time.
    </p>
    <p>
      Learn more:
      <a href="/publications/comicbook/GeomagComic.pdf">
        "Journey along a field line"</a> Comic Book.
    </p>
  </div>
</div>
