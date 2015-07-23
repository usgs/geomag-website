<?php
echo navGroup(navItem('/monitoring/index.php', 'Monitoring'),
  navItem('/monitoring/operations.php', 'Operations') .
  navItem('/monitoring/instrumentation.php', 'Instrumentation') .
  navItem('/monitoring/observatories', 'Observatories') .
  navItem('/monitoring/links.php', 'International Observatory Programs')
);
 ?>
