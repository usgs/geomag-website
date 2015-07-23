<?php
echo navGroup(navItem('/research/index.php', 'Research'),
  navItem('/research/papers.php', 'Publications') .
  navItem('/research/geomagnetism-earthquakes.php', 'Earhquake Prediction') .
  navItem('/research/GIC.php', 'Geomagnetically Induced Currents') .
  navItem('/research/hazards.php', 'Hazard Mapping') .
  navItem('/research/magdataquality.php', 'Magnetic Data Quality') .
  navItem('/research/extreme-events.php', 'Extreme Events') .
  navItem('/conductivity/', 'Regional Conductivity Maps') .
  navItem('/research/spaceweather.php', 'Space Weather Applications') .
  navItem('/research/spaceclimatology.php', 'Space Climatology') .
  navItem('/publications/movies/', 'Magnetic Disturbance Movies')
);
 ?>
