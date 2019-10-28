<?php

// site search url, leave blank for all usgs
$SITE_URL = 'geomag.usgs.gov';

// navigation above search, below section navigation
$SITE_SITENAV =
  navItem('/https://www.usgs.gov/natural-hazards/geomagnetism/monitoring', 'Monitoring') .
  navItem('https://www.usgs.gov/natural-hazards/geomagnetism/data-tools', 'Data &amp; Products') .
  navItem('https://www.usgs.gov/natural-hazards/geomagnetism/science', 'Research') .
  navItem('https://www.usgs.gov/natural-hazards/geomagnetism/publications', 'Publications') .
  navItem('/https://www.usgs.gov/natural-hazards/geomagnetism/education', 'Learn') .
  navItem('https://www.usgs.gov/natural-hazards/geomagnetism/partners', 'Partners &amp; Customers');

// at bottom of page
$SITE_COMMONNAV =
  navItem('/', 'Home') .
  navItem('https://www.usgs.gov/natural-hazards/geomagnetism/about', 'About Us') .
  navItem('https://www.usgs.gov/natural-hazards/geomagnetism/connect', 'Contacts') .
  navItem('https://www.usgs.gov/policies-and-notices', 'Legal');

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
        '?agency=DOI&amp;subagency=USGS' .
        '"></script>';

// comments and questions default
if (!isset($CONTACT)) {
  $CONTACT_URL = 'https://answers.usgs.gov/cgi-bin/gsanswers';
}
else {
  $CONTACT_URL = 'mailto:{CONTACT}?subject=Geomag%20Website%20Email%20';
}

?>
