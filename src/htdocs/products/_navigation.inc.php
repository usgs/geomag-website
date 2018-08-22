<?php
echo navGroup(navItem('/products/index.php', 'Data &amp; Products'),
  navItem('/plots/', 'Geomagnetism Plots') .
  navItem('/products/downloads.php', 'Downloads') .
  navItem('/storm/', 'Magnetic Disturbance Events') .
  navItem('/products/models.php', 'Models') .
  navItem('/plots/dst.php', 'Real-Time Dst Display')
);
?>
