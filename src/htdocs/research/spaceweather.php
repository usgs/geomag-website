<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Space Weather Applications';
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

<h3>AE Index</h3>

<p>
  The AE index is a global measure of high latitude disturbance due to
  enhancements of the auroral electrojet. Similar to the Dst index, but
  using an envelope method instead of averaging, the traditional index
  uses local disturbance values at a ring of 12 high latitude stations.
  An updated version, using 40 mid- to high-latitude stations, gives a
  more complete picture of high latitude disturbance.
</p>

<p>
  <a href="/realtime/ae/">AE Index (beta)</a>
</p>

<h3>K Index</h3>

<p>
  The K index is a characterization of local disturbance on a 0 to 9
  scale. Because disturbance values are larger at higher latitudes, the
  scale is individually determined for each location to produce similar
  K values at all locations during geomagnetic disturbance. K values of
  0 to 3, 4 to 6, and 7 to 9 are considered low, moderate, and high
  disturbance, respectively.
</p>

<p>
  <a href="/realtime/k/">K Index (beta)</a>
</p>

<h3>Local Disturbance (Dist) and Solar-Quiet (SQ) Variation</h3>

<p>
  Local Dist values are physical measures (in nT) of the portion of
  measured magnetic field that is due to external variations, such as
  geomagnetic storms. The SQ variation is the remaining variation due to
  ionospheric and internal contributions. In the Dst calculation, some
  of these Dist values are averaged to produce a global index. The local
  version may be quite different from the global index if the external
  disturbance is very asymmetric.
</p>

<p>
  <a href="/realtime/dist/">Local Disturbance (beta)</a><br />
  <a href="/realtime/SQ/">Solar-Quiet (beta)</a>
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

<p>
  Questions about our research? <a href="mailto:geomag_research@usgs.gov">
  E-mail us</a>
</p>
