<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Space Weather Applications';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<p>
  Real-time space weather applications use USGS and international
  ground-based magnetic field data to provide a derived product.
  Operational applications undergo a formal transitions procedure and
  processes are hosted in a operationally-robust and monitored system.
</p>

<h3>USGS-Dst Index</h3>

<p>
  The USGS-Dst index is a global measure of low-latitude magnetic
  disturbance. It is used to define the phases of a geomagnetic storm.
  It is provided at a 1-minute time resolution in real-time and supports
  the operations of NOAA-Space Weather Prediction Center and the Air
  Force Research Lab.
</p>

<p>
  <a href="/realtime/dst/">Real-time Dst</a>
</p>

<h3>Electric Field Estimates</h3>

<p>
  Combining magnetic field measurements with local conductivity values,
  we estimate the electric field induced by rapid magnetic field
  changes. Using regional conductivity estimates, we are developing hazard
  maps based on these electric field calculations that indicate the
  threat of geomagnetically-induced currents.
</p>

<h3>Pulsation Indices</h3>

<p>
  Using wavelet analysis to separate by frequency band, the pulsation
  indices are real-time specifications of Pc3, Pc4, and Pc5 waves. These
  indices require 1 second data to fully resolve the high frequency
  components.
</p>
