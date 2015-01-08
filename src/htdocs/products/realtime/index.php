<?php
  if(!isset($TEMPLATE)) {
    $TITLE = 'Blended Real-Time Data - Preliminary';
    include 'template.inc.php';
  }
?>

<div class="row">
  <a href="/monitoring/observatories/">
      <img src="/images/observatory_map_2012_05.jpg"
      alt="USGS Geomagnetic Observatories" class="column mobile-one-of-four" />
  </a>
  <p class="column mobile-three-of-four">
    Blended data is preliminary data that contains all of the same
    information as the <a href="/products/">Real-Time Data Display</a> with
    the addition of Satellite data used to fill in any gaps in the
    transmitted data.
  </p>
</div>

<h3>View Preliminary Data</h3>
<p>
  A graphical display of preliminary data (updated every 12 minutes) for
  all observatories is available. Each observatory is on a single plot.
  These plots have each of the data streams for each observatory on a
  single plot for that observatory.
</p>

<dl class="no-class">
  <dt>Please select a day to view:</dt>
    <dd>
      <form action="/monitoring/observatories/preliminary_data2.php"
          method="post" name="display" target="_blank" id="display">
        <select name="day" alt="day">
          <option value="0" selected="selected">Today</option>
          <option value="1">Yesterday</option>
<?php
  $day = 2;
  $oneday = 60 * 60 * 24;
  $now = time();

  for ($day = 2; $day < 8; $day++) {
    $datestr = date("M j, Y (D)", $now - ($day * $oneday));
    print "<option value=" . $day . ">" . $datestr . "</option>";
  }
?>
        </select>
        <INPUT TYPE=SUBMIT>
      </form>
    </dd>
</dl>

<hr />

<h3>Obtaining Recent Preliminary Data</h3>
<p>
  The USGS Geomagnetism Program operates a downlink center in Golden, Colorado
  for the reception of geomagnetic observatory data via satellite and electronic
  file exchange. Golden is a Geomagnetic Information Node (GIN) which, as a
  member of Intermagnet, is one of several GINs located around the world.
  Intermagnet data, which include those from USGS observatories, are available
  through the <a href="http://www.intermagnet.org">Intermagnet website</a> on
  their Intermagnet Data Download page. Visit our
  <a href="http://geomag.usgs.gov/products/downloads.php">Download</a> page for
  more ways to get USGS data.
</p>

<h3>USGS Geomagnetism Program Data, Inquiries and Specialized Data Requests</h3>

<p>
  Duff C Stewart<br/>
  Data Management: Software Developer<br/>
  <a href="mailto:dcstewart@usgs.gov">dcstewart@usgs.gov</a>
</p>

