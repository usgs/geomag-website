<?php

include_once '../lib/Features.class.php';

date_default_timezone_set('UTC');

$GM_FEATURES = new Features();
$GM_FEATURES->id = 'usgs_geomag_home';
$GM_FEATURES->title = 'USGS Geomagnetism Program Featured Items';
$GM_FEATURES->author = 'U.S. Geological Survey';
$GM_FEATURES->siteUrl = 'https://geomag.usgs.gov/';
$GM_FEATURES->baseUrl = '';

/*
 $GM_FEATURES->items[] = array(
    'id' => '2018-03-08',
    'title' => 'Mapping Extreme-Value Geoelectric Fields',
    'content' => 'To help mitigate magnetic storm interference on electric power grid operations, extreme-value geoelectric fields have been mapped across the mid-Atlantic United States. (EOS article)' ,
    'link' => 'https://eos.org/editor-highlights/mapping-extreme-value-geoelectric-fields',
    'modified' => strtotime('2018-03-08'),
    'thumbnail' => 'https://geomag.usgs.gov/images-featured/2017GL076402-Figure-3a-800x600.jpg',
    'image' => 'https://geomag.usgs.gov/images-featured/2017GL076402-Figure-3a-800x600.jpg'
  );

 */
