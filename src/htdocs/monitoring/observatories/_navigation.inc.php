<?php

//OBSERVATORIES
$observatories = '/monitoring/observatories';

echo navGroup(navItem('/monitoring/index.php', 'Monitoring'),
  navItem('/monitoring/operations.php', 'Operations') .
  navItem('/monitoring/instrumentation.php', 'Instrumentation') .
	navItem('/monitoring/observatories', 'Observatories') .
  navItem('/monitoring/links.php', 'International Observatory Programs')
);

echo navGroup('Observatories',
	navItem($observatories . '/barrow/', '<code>BRW</code> Barrow') .
	navItem($observatories . '/boulder/', '<code>BOU</code>  Boulder') .
	navItem($observatories . '/college/', '<code>CMO</code>  College') .
	navItem($observatories . '/deadhorse/', '<code>DED</code>  Deadhorse') .
	navItem($observatories . '/fredericksburg/', '<code>FRD</code>  Fredericksburg') .
	navItem($observatories . '/fresno/', '<code>FRN</code>  Fresno') .
	navItem($observatories . '/guam/', '<code>GUA</code>  Guam') .
	navItem($observatories . '/honolulu/', '<code>HON</code>  Honolulu') .
	navItem($observatories . '/newport/', '<code>NEW</code>  Newport') .
	navItem($observatories . '/sanjuan/', '<code>SJG</code>  San Juan') .
	navItem($observatories . '/shumagin/', '<code>SHU</code>  Shumagin') .
	navItem($observatories . '/sitka/', '<code>SIT</code>  Sitka') .
	navItem($observatories . '/stennis/', '<code>BSL</code>  Stennis') .
	navItem($observatories . '/tucson/', '<code>TUC</code>  Tucson')
);
?>
