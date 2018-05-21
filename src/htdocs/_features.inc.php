<?php

include_once '../lib/Features.class.php';

date_default_timezone_set('UTC');

$GM_FEATURES = new Features();
$GM_FEATURES->id = 'usgs_geomag_home';
$GM_FEATURES->title = 'USGS Geomagnetism Program Featured Items';
$GM_FEATURES->author = 'U.S. Geological Survey';
$GM_FEATURES->siteUrl = 'https://geomag.usgs.gov/';
$GM_FEATURES->baseUrl = '';

$GM_FEATURES->items[] = array(
   'id' => '2018-04-09',
   'title' => 'The Electric Storm of November 1882',
   'content' => 'Strange things started happening on November 17, 1882, and no one knew quite what to make of it.(image from Baranyi et al., 2016)',
   'link' => 'https://geomag.usgs.gov/research/featured/2018/elecstorm-1882/',
   'modified' => strtotime('2018-04-09'),
   'thumbnail' => 'https://geomag.usgs.gov/images-featured/sun.jpg',
   'image' => 'https://geomag.usgs.gov/images-featured/sun.jpg'
 );

$GM_FEATURES->items[] = array(
  'id' => '2018-03-08',
  'title' => 'New 3D Measurements Improve Understanding of Geomagnetic Storm Hazards',
  'content' => 'Measurements of the three-dimensional structure of the earth, as opposed to the one-dimensional models typically used, can help scientists more accurately determine which areas of the United States are most vulnerable to blackouts during hazardous geomagnetic storms. (Image courtesy of Joshua Strange, U.S. Air Force)' ,
  'link' => 'https://www.usgs.gov/news/new-3d-measurements-improve-understanding-geomagnetic-storm-hazards',
  'modified' => strtotime('2018-03-08'),
  'thumbnail' => 'https://geomag.usgs.gov/images-featured/NASA_Aurora.jpg',
  'image' => 'https://geomag.usgs.gov/images-featured/NASA_Aurora.jpg'
);

$GM_FEATURES->items[] = array(
  'id' => '2018-03-08',
  'title' => 'Mapping Extreme-Value Geoelectric Fields',
  'content' => 'To help mitigate magnetic storm interference on electric power grid operations, extreme-value geoelectric fields have been mapped across the mid-Atlantic United States. (EOS article)' ,
  'link' => 'https://eos.org/editor-highlights/mapping-extreme-value-geoelectric-fields',
  'modified' => strtotime('2018-03-08'),
  'thumbnail' => 'https://geomag.usgs.gov/images-featured/2017GL076402-Figure-3a-800x600.jpg',
  'image' => 'https://geomag.usgs.gov/images-featured/2017GL076402-Figure-3a-800x600.jpg'
);

$GM_FEATURES->items[] = array(
 'id' => '2018-03-08',
 'title' => 'Preparing the Nation for Intense Space Weather',
 'content' => 'While major geomagnetic storms are rare, with only a few recorded per century, there is significant potential for large-scale impacts when they do occur.' ,
 'link' => 'https://www.usgs.gov/news/preparing-nation-intense-space-weather',
 'modified' => strtotime('2018-03-08'),
 'thumbnail' => 'https://geomag.usgs.gov/images-featured/solarwind-interaction-magnetosphere410.jpg',
 'image' => 'https://geomag.usgs.gov/images-featured/solarwind-interaction-magnetosphere410.jpg'
);
