<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$GM_FEATURES = new Features();
$GM_FEATURES->id = 'usgs_geomag_home';
$GM_FEATURES->title = 'USGS Geomagnetism Program Featured Items';
$GM_FEATURES->author = 'U.S. Geological Survey';
$GM_FEATURES->siteUrl = 'https://geomag.usgs.gov/';
$GM_FEATURES->baseUrl = '';

$GM_FEATURES->items[] = array(
   'id' => '2018-04-09',
   'title' => 'Keeping the Lights On in North America',
   'content' => 'Realtime geoelectric maps during a magnetic storm can assist utility companies with their operations and can help power-grid managers to make decisions that may minimize the impact to their systems.',
   'link' => 'https://geomag.usgs.gov/research/featured/2018/geoelect-maps/',
   'modified' => strtotime('2018-04-09'),
   'thumbnail' => 'https://geomag.usgs.gov/research/featured/2018/geoelect-maps/images/US-lights-night.jpg',
   'image' => 'https://geomag.usgs.gov/research/featured/2018/geoelect-maps/images/US-lights-night.jpg'
 );

 $GM_FEATURES->items[] = array(
    'id' => '2018-04-09',
    'title' => 'The Electric Storm of November 1882',
    'content' => 'Strange things started happening on November 17, 1882, and no one knew quite what to make of it.(image from Baranyi et al., 2016)',
    'link' => 'https://geomag.usgs.gov/research/featured/2018/elecstorm-1882/',
    'modified' => strtotime('2018-04-09'),
    'thumbnail' => 'https://geomag.usgs.gov/research/featured/2018/elecstorm-1882/images/sun.jpg',
    'image' => 'https://geomag.usgs.gov/research/featured/2018/elecstorm-1882/images/sun.jpg'
  );
