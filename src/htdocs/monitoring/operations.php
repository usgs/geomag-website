<?php
  if (!isset($TEMPLATE)) {
    $TITLE = 'Operations';
    $NAVIGATION = true;
    include 'template.inc.php';
  }
?>

<p>
  The most important product of the USGS Geomagnetism Program is time series of
  stable <a href="/map/">magnetometer data</a> having high accuracy and
  resolution. In this section we briefly describe how these data are collected,
  transported, processed, managed, and disseminated -- the primary tasks of
  <a href="/contact.php">Program staff</a>.
</p>

<h3>Data Transport and Distribution</h3>

<p>
  Much of the geomagnetic acquisition, transport and dissemination system is
  based upon the <em>earthworm</em> system developed by the seismology group.
  Some of the basic earthworm modules are used as-is, in particular the
  importer-exporter data transport modules and the waveserver storage module.
  Some modules were developed to adopt the earthworm system for geomagnetism.
  This system is referred to as the <em>magworm</em>.
</p>

<p>
  Magnetic data and diagnostic housekeeping data are acquired at each USGS
  observatory by magworm modules linking the computers to the acquisition
  instruments. Data are transferred to Golden in via three different methods to
  improve redundancy and reliability. This includes a near real-time feed of
  1-minute and 1-second data via magworm, a transmission of 1-minute data via
  satellite and a daily ftp of text files. Intermittent manual calibration
  measurements made at each observatory are recorded in text files and included
  in the ftp transfers. Additionally, each observatory provides a magworm
  connection for direct data transmission to the NOAA Space Weather Prediction
  Center.
</p>

<p>
  At the USGS the data layer is based on virtual machines, which can easily be
  duplicated and moved to new physical machines when necessary to provide
  another level of redundancy to ensure we have data collecting, moving and
  storing as much as possible. Web-based modules are also being developed to
  eliminate dependencies on particular operating systems and hardware. This
  will also centralize the data so that processing for
  <a href="/products/">Data &amp; Products</a> can occur more quickly.
</p>

<h3>Data Processing, Management, and Dissemination</h3>

<p>
  Data that are received in Golden in near-real time are &#8216;variational
  &#8217; or &#8216;preliminary&#8217;; they are arbitrary to within a baseline
  offset, which itself may have a slow drift. For many applications, such
  preliminary data are more than sufficient, particularly for investigators
  concerned with relatively rapid changes in the magnetic field occurring over
  time windows of less than a few days. Studies involving longer windows of
  time usually require absolute data time series. These are obtained through
  data processing, with adjustments made for baseline drift using the periodic
  absolute measurements made at each observatory. Specialized data-processing
  software, namely &#8216;MagProc&#8217; has been developed in-house, making
  the production of absolute, so-called&#8216;definitive&#8217;, data
  relatively efficient. Moreover, since the processing software allows for
  quick systematic inspection of large quantities of data, it can be used for
  troubleshooting and quality control. The Program is also developing an Oracle
  database, which will serve as an interface between the data-collection
  systems and processing software, as well as help facilitate the dissemination
  of both new and old observatory data. Data are disseminated in two forms:
  variational data, available in near-real time, and definitive data, available
  after processing and within a year of their collection. There are several
  near-real-time <a href="/products/">preliminary data displays</a> and a
  location for <a href="/products/downloads.php">downloading data</a> here
  on the Program's website. Definitive data are disseminated through the
  production of CDs. These are produced in cooperation with
  <a href="http://www.intermagnet.org/">Intermagnet</a>, which also helps
  promote the dissemination of other nations' magnetometer data.
</p>
