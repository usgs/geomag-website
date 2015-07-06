<?php
  if(!isset($TEMPLATE)) {
    $TITLE = 'Instrumentation';
    $CONTACT = 'geomagdata';
    include 'template.inc.php';
  }
?>

<h3>
  The basic sensor package at each observatory consists of two magnetometers
</h3>

<ol>
  <li>
    a tri-axial fluxgate magnetometer for gathering vectorial data (data with a
    directional component and a numerical component)
  </li>
  <li>
    a proton magnetometer that measures the total intensity of the magnetic
    field (F)
  </li>
</ol>

<h3>
  The vector-component data collected by the fluxgate magnetometer typically
  includes:
</h3>

<ul>
  <li>
    horizontal intensity (H)
  </li>
  <li>
    declination (D)
  </li>
  <li>
    vertical component (Z)
  </li>
</ul>

<p>
  The redundancy between these two measurement systems allows for consistency
  checks that are useful for troubleshooting. Since it is important that the
  directional information be precise, both the fluxgate magnetometer and the
  theodolite are supported by piers that are firmly anchored into the ground so
  that they cannot move once they are oriented properly. The two instruments are
  sensitive to temperature and magnetic interference; as a result the buildings
  at each observatory are situated on plots of land of sufficient size to help
  isolate the operations from outside magnetic interference. To reduce the
  baseline drift of the instruments due to temperature, the sensors and
  electronics are housed in well-insulated, thermostatically-controlled
  buildings, but this doesn't completely eliminate the baseline drift. Each
  observatory is visited by a Program employee or contractor about once a week
  so that 'absolute' measurements can be made using a theodolite coupled to a
  small magnetometer. These absolutes data are used during data processing to
  make final adjustments to the data baselines. USGS Geomagnetism Program
  observatory standards are consistent with those set by
  <a href="http://www.intermagnet.org">Intermagnet</a>, an international
  consortium which promotes the worldwide collection of high-quality,
  ground-based magnetometer data, and within which the USGS Geomagnetism
  Program has an important leadership role.
</p>

<div class="row">
  <div class="one-of-two column">
    <figure>
      <img src="/images/MagSensors4.jpg" alt="Observatory sensor package." />
      <figcaption>
        Observatory Sensor Package. The basic sensor package installed at each
        observatory: (bottom) fluxgate magnetometer, (top left) proton
        magnetometer, (top right) theodolite with fluxgate coupled to the
        telescope.
      </figcaption>
    </figure>
  </div>

  <div class="one-of-two column">
    <figure>
      <img src="/images/coords_sm.jpg" alt="Magnetic-field components." />
      <figcaption>
        Magnetic-field components: (X,Y,Z) define the Cartesian components
        (north, east, down), (H,D,Z) are the components usually measured by the
        fluxgate (horizontal intensity, declination, down), (I) is the
        inclination of the field (F) is the total intensity measured by the
        proton.
      </figcaption>
    </figure>
  </div>
</div>
