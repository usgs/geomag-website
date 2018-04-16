<?php

// site search url, leave blank for all usgs
$SITE_URL = 'geomag.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
  navItem('/monitoring/', 'Monitoring') .
  navItem('/products/', 'Data &amp; Products') .
  navItem('/research/', 'Research') .
  navItem('/publications/papers.php', 'Publications') .
  navItem('/learn/', 'Learn') .
  navItem('/services.php', 'Services') .
  navItem('/partners.php', 'Partners &amp; Customers');

// at bottom of page
$SITE_COMMONNAV =
  navItem('/', 'Home') .
  navItem('/about.php', 'About Us') .
  navItem('/contact.php', 'Contacts') .
  navItem('/legal.php', 'Legal');

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
  '"/>'.
  // universal analytics (should be last in $HEAD)
    '<script id="_fed_an_ua_tag" async="async" src="' .
        'https://dap.digitalgov.gov/Universal-Federated-Analytics-Min.js' .
        '?agency=DOI&amp;subagency=USGS&amp;pua=UA-7320779-3' .
        '"></script>';

// comments and questions default
if (!isset($CONTACT)) {
  $CONTACT_URL = 'https://answers.usgs.gov/cgi-bin/gsanswers';
}
else {
  $CONTACT_URL = 'mailto:{CONTACT}?subject=Geomag%20Website%20Email%20';
}

?>
