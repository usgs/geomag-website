<?php

// site search url, leave blank for all usgs
$SITE_URL = 'http://geomag.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
	navItem('/monitoring/', 'Monitoring') .
	navItem('/products/', 'Hazards') .
	navItem('/research/', 'Data &amp; Products') .
	navItem('/learn/', 'Learn') .
	navItem('/services.php', 'Services') .
	navItem('/partners.php', 'Partners');

// at bottom of page
$SITE_COMMONNAV =
	navItem(($SITE_URL), 'Home') .
	navItem('/about.php', 'About Us') .
	navItem('/contact.php', 'Contact Us') .
	navItem('http://www.usgs.gov/legal/', 'Legal');

$HEAD =
// site theme, should use a site root-relative URL
	'<link rel="stylesheet" href="/theme/site/geomag/index.css"/>' .
// page head content
	($HEAD ? $HEAD : '') .
// description meta
	'<meta name="description" content="' .
		'National Geomagnetism Program, Real-time monitoring of the Earth\'s' .
		' magnetic field, Data for research and practical application.' .
	'"/>' .
// keywords meta
	'<meta name="keywords" content="' .
		'aurora,spaceweather,space-weather,geomagnetism,dynamo,paleomagnetism,' .
		'palaeomagnetism,magnetic,magnetism,geomagnetic,declination,' .
		'magnetosphere,ionosphere,magnetospheric,ionospheric,geophysics,' .
		'Dst Index,K Index,Space Weather,Solar Storm' .
	'"/>';

?>
