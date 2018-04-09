<?php
echo navGroup(navItem('/research/index.php', 'Research'),
  navItem('/publications/papers.php', 'Publications') .
  navItem('/research/GIC.php', 'Geomagnetically Induced Currents') .
  navItem('/research/magdataquality.php', 'Magnetic Data Quality') .
  navItem('/research/extreme-events.php', 'Extreme Events') .
  navItem('/conductivity/', 'Regional Conductivity Maps') .
  navItem('/research/spaceweather.php', 'Space Weather Applications') .
  navItem('/research/spaceclimatology.php', 'Space Climatology') .
  navItem('/research/geomagnetism-earthquakes.php', 'Earthquake Prediction') .
  navItem('/publications/movies/', 'Magnetic Disturbance Movies') .
  navItem('/research/featured/', 'Science for Everyone')

);
 ?>
