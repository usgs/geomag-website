<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Downloads';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<div class="alert warning">
  <p>
    The magweb download server will be decommissioned
    <strong>November 30, 2015</strong>.
    Geomagnetic data is still available online via alternative methods.
    Please subscribe to our
    <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-data">geomag-data
      mailing list</a> and other mailing lists below to receive email
    notifications for changes like this in the future.
  </p>
  <p>
    To view geomagnetic data, use the
    <a href="http://geomag.usgs.gov/plots/">Geomag Plots application</a>
  </p>
  <p>
    For programmatic access to geomagnetic data, use the
    <a href="https://github.com/usgs/geomag-algorithms">geomag-algorithms
      python library</a>
  </p>
  <p>
    Thank you for your interest in our program.
  <p>
</div>

<div class="row">
  <div class="one-of-two column">
    <h2>Data Access</h2>
    <h3>View Data</h3>
    <p>
      To view geomagnetic data, use the
      <a href="http://geomag.usgs.gov/plots/">Geomag Plots application</a>
    </p>
    <h3>Retrieve Data</h3>
    <p>
      For programmatic access to geomagnetic data, use the
      <a href="https://github.com/usgs/geomag-algorithms">geomag-algorithms
        python library</a>
    </p>
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
          <a href="ftp://ftpext.usgs.gov/pub/cr/co/golden/jlove/models/5807-4SH">
            1-hour USGS Dst</a>
        </dd>
        <dd>
          <a href="ftp://hazards.cr.usgs.gov/minDst_definitive">
            1-minute USGS Dst</a>
        </dd>
        <dd>
          <a href="ftp://hazards.cr.usgs.gov/minDst">
            Near Real-Time USGS Dst</a>
        </dd>
    </dl>

    <p>
      USGS Geomagnetism Program Data, Inquiries and Specialized Data Requests
    </p>

    <p>
      Duff C Stewart<br/>
      Data Management: Software Developer<br/>
      <a href="mailto:dcstewart@usgs.gov">dcstewart@usgs.gov</a>
    </p>
  </div>
</div>
