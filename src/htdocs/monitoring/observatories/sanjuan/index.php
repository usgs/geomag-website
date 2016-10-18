<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'San Juan (SJG)';
  $HEAD = '
    <link rel="stylesheet" href="../styles.css"/>
  ';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<div class="row">
  <div class="one-of-two column">
    <table>
      <tbody>
        <tr>
          <td>
            Station Id:
          </td>
          <td>
            SJG
          </td>
        </tr>
        <tr>
          <td>
            Location:
          </td>
          <td>
            Cayey, PR
          </td>
        </tr>
        <tr>
          <td>
            Latitude:
          </td>
          <td>
            18.1110&deg;N
          </td>
        </tr>
        <tr>
          <td>
            Longitude:
          </td>
          <td>
            66.1498&deg;W
          </td>
        </tr>
        <tr>
          <td>
            Geomagnetic Latitude:
          </td>
          <td>
            27.62&deg;N<sup>*</sup>
          </td>
        </tr>
        <tr>
          <td>
            Geomagnetic Longitude:
          </td>
          <td>
            6.95&deg;E<sup>*</sup>
          </td>
        </tr>
        <tr>
          <td>
            Elevation:
          </td>
          <td>
            424 meters
          </td>
        </tr>
        <tr>
          <td>
            Orientation:
          </td>
          <td>
            HDZF
          </td>
        </tr>
      </tbody>
    </table>

    <p>
      <sup>*</sup> <a href="http://wdc.kugi.kyoto-u.ac.jp/igrf/gggm/">IGRF</a> values as of 2015.
    </p>

  </div>
  <div class="one-of-two column">
    <figure class="center">
      <img src="images/SanJuan_sign.jpg" alt="The San Juan observatory sign." />
    </figure>
  </div>
</div>

<h2>Background</h2>
<p>
  The Geomagnetism Program has operated an observatory at Puerto Rico since
  1903. The current observatory site, consisting of 36 acres in the
  mountains near Cayey, has been in use since 1965.
</p>

<h2>Other Operations</h2>
<ul>
  <li>
    A seismometer for the
    <a href="http://earthquake.usgs.gov/monitoring/operations/station.php?network=IU&amp;station=SJG">USGS
      Global Seismic Network</a>.
  </li>
  <li>
    A seismometer for the
    <a href="http://redsismica.uprm.edu/english/">Puerto Rican Seismic
      Network</a>.
  </li>
  <li>
    <a href="http://www.ctbto.org/verification-regime/station-profiles/?station=184&amp;cHash=64d70f964b">CTBTO
      IMS Auxiliary Seismic Station</a>
  </li>
  <li>
    <a href="http://www.ngdc.noaa.gov/stp/IONO">NOAA National Centers for
    Environmental Information (NCEI) ionosonde</a>
  </li>
</ul>

<h2>Photos</h2>

<figure class="center">
  <img src="images/Cayey_third_size.jpg"
    alt="Cayey, PR magnetic observatory."
    title="San Juan magnetic observatory." />
  <figcaption>
    San Juan magnetic observatory.
  </figcaption>
</figure>
<figure class="center">
  <img src="images/Cayey2_third_size.jpg" alt="" />
  <figcaption>
    Absolutes, variations and proton buildings (left to right) at San Juan
    magnetic observatory, Cayey, Puerto Rico.
    <br/>
    * Pictures courtesy of Jeff Fox
  </figcaption>
</figure>
