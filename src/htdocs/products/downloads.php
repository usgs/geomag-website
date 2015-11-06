<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Downloads';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<div class="alert info">
  <p>
    The magweb download server will be decommissioned
    <strong>November 30, 2015</strong>.
    Geomagnetic data is still available online via alternative methods.
    Please subscribe to our new mailing lists to receive email notifications
    for changes like this in the future:
  </p>
  <ul>
    <li>
      <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-data">geomag-data</a>
      <p>
        Questions and discussion related to USGS Geomagnetism program data
        products and  data access. Announcements about new data products,
        data product updates, and issues with data products.
      </p>
    </li>
    <li>
      <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-operations">geomag-operations</a>
      <p>
        Frequent announcements about USGS Geomagnetic observatory related
        maintenance and disturbances, including planned outages.
      </p>
    </li>
    <li>
      <a href="https://geohazards.usgs.gov/mailman/listinfo/geomag-research">geomag-research</a>
      <p>
        Questions and discussion related to geomagnetic, geoelectric, and
        space hazards research. Announcements about new research papers,
        presentations and public outreach from the USGS Geomagnetism Program.
      </p>
    </li>
  </ul>
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
    <h2>Automated Download</h2>
    <p>
      The data here are updated in near real-time and are kept on this site for
      several months. For more historic data and for detailed descriptions of
      INTERMAGNET IAGA2002 file format, visit the
      <a href="http://www.intermagnet.org/">Intermagnet</a> website.
    </p>

    <dl>
      <dt>Data Types:</dt>
        <dd>
          <a href="http://magweb.cr.usgs.gov/data/indices/">Indices</a>
        </dd>
        <dd>
          <a href="http://magweb.cr.usgs.gov/data/magnetometer/">
            Magnetometer Data</a>
        </dd>
    </dl>

    <p>
      If you'd like to download this data at a regular interval we recommend a
      tool like <a href="http://www.gnu.org/software/wget/">wget</a>.
    </p>

    <p class="disclaimer">
      Access to the data is provided as-is, without any additional promises to
      respond quickly to outages, data quality, etc. We request that you
      acknowledge the USGS Geomagnetism Program in all published documents
      which make use of our data. Thank you for your interest in the USGS.
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
