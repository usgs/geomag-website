<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Downloads';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<div class="alert info">
  <p>
    USGS Geomagnetism Program data are made available as-is and without any guarantees of continuity and quality.
  </p>
</div>

<div class="row">
  <div class="one-of-two column">
    <h2>Data Access</h2>
    <h3>View Data</h3>
    <p>
      To view geomagnetic data use
      <a href="https://geomag.usgs.gov/plots/">Geomag Plots</a>.
    </p>
    <h3>Retrieve Data</h3>
    <ul>
      <li>
        <a href="https://github.com/usgs/geomag-algorithms">Programmatic Access</a> - geomag-algorithms python library
      </li>
      <li>
        <a href="/ws/edge/">Web Service</a>
      </li>
    </ul>
    <h3>Mailing Lists</h3>
    <p>
      <dl>
        <dt>
          <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-data">geomag-data</a>
        </dt>
        <dd>
          Questions and discussion related to USGS Geomagnetism program data
          products and  data access. Announcements about new data products,
          data product updates, and issues with data products.
        </dd>
        <dt>
          <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-operations">geomag-operations</a>
        </dt>
        <dd>
          Frequent announcements about USGS Geomagnetic observatory related
          maintenance and disturbances, including planned outages.
        </dd>
        <dt>
          <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-research">geomag-research</a>
        </dt>
        <dd>
          Questions and discussion related to geomagnetic, geoelectric, and
          space hazards research. Announcements about new research papers,
          presentations and public outreach from the USGS Geomagnetism Program.
        </dd>
      </dl>
    </p>
  </div>

  <div class="one-of-two column">
    <h2>Interactive Download</h2>
    <p>
      Definitive data, consisting of one-minute, hourly-mean, and daily-mean
      values from USGS observatories from the year 1985 onward are available
      online. Intermagnet has definitive data available for download, including
      USGS data. The most recent definitive data typically becomes available
      within a year of the end of the previous calendar year. USGS currently
      has an interactive data downloader in beta testing, which will provide
      download for USGS preliminary and definitive data directly from USGS.
    </p>

    <dl>
      <dt>Definitive Dst</dt>
      <dd>
        <a href="ftp://ftpext.usgs.gov/pub/cr/co/golden/hazards/Geomag/data/Dst/hrDst_definitive/5807-4SH">1-hour
          USGS Dst</a>
      </dd>
      <dd>
        <a href="ftp://ftpext.usgs.gov/pub/cr/co/golden/hazards/Geomag/data/Dst/minDst_definitive/Dst_definitive_fix_minute.out">1-minute
          USGS Dst</a>
      </dd>
    </dl>

    <h2>Data Acknowledgement</h2>
    <p>
      Publications making use of our data should include an acknowledgment statement such as the following:<br/>
      <blockquote>
        The results presented in this document rely on data collected at magnetic observatories operated by the U.S. Geological Survey (USGS, geomag.usgs.gov).
      </blockquote>
    </p>

    <h3>
      USGS Geomagnetism Program Data, Inquiries and Specialized Data Requests
    </h3>

    <p>
      Abram Claycomb<br/>
      Data Management: Software Developer<br/>
      <a href="mailto:aclaycomb@usgs.gov">aclaycomb@usgs.gov</a>
    </p>
  </div>
</div>
