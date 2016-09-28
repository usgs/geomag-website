<?php
if (!isset($TEMPLATE)) {
  include_once 'functions.inc.php';

  $movie_type = param('type', 'declination');
  $movie_format = param('format', 'gif');

  if ($movie_type === 'declination') {
    $movie_title = 'Declination of the Earth 1590 - 1990';
  } else if ($movie_type === 'inclination') {
    $movie_title = 'Inclination 1590 - 1990';
  } else if ($movie_type === 'horizontal') {
    $movie_title = 'Horizontal Intensity of the Earth 1840 - 1990';
  } else if ($movie_type === 'tintensity') {
    $movie_title = 'Total Intensity of the Earth 1840 - 1990';
  } else if ($movie_type === 'vertical') {
    $movie_title = 'Vertical Intensity of the Earth 1840 - 1990';
  } else if ($movie_type === 'corefield') {
    $movie_title = 'Core Radial Field of the Earth 1590 - 1990';
  } else {
    // Bad type requested, default to declination
    $movie_type = 'declination';
    $movie_title='Declination of the Earth 1590 - 1990';
  }

  if ($movie_format === "flash") {
    $format_links = '(Flash | <a href="index.php?type=' . $movie_type .
        '&amp;format=gif">GIF</a>)';
  } else {
    // Default to GIF
    $format_links = '(<a href="index.php?type=' . $movie_type .
        '&amp;format=flash">Flash</a> | GIF)';
    // Bad format requested, default to gif
    $movie_format = 'gif';
  }

  $TITLE = $movie_title;
  $HEAD = '<link rel="stylesheet" href="index.css"/>';

  include_once 'template.inc.php';
}
?>

<div class="row">
  <div class="one-of-two column">
    <small class="format-switcher"><?php print $format_links; ?></small>
    <?php if ($movie_format === "flash") : ?>
      <object class="flash-movie" type="application/x-shockwave-flash"
          data="<?php print $movie_type; ?>.swf"
          width="0" height="0">
        <param name="movie" value="<?php $movie_type; ?>.swf"/>
        <param name="quality" value="high"/>
      </object>

      <aside class="flash-disclaimer">
        Note: This page has a Flash movie. To view this movie in flash
        format you must install the flash player. Alternatively, you can
        <a href="index.php?type=<?php print $movie_type; ?>&amp;format=gif">view
        the Animated GIF Version of this same movie.</a>. The flash player is freely
        available from <a href="https://get.adobe.com/flashplayer/">
        https://get.adobe.com/flashplayer/</a>.
      </aside>
    <?php else: ?>
      <img src="<?php print $movie_type ?>.gif" class="gif-movie"
          alt="Movie depicting <?php print $movie_title; ?> of the Earth's Magnetic Field" />
    <?php endif ?>
  </div>
  <div class="one-of-two column">
    <h2>Available Videos</h2>
    <ul>
      <li><a href="index.php?type=declination&amp;format=<?php print $movie_format; ?>">Declination</a></li>
      <li><a href="index.php?type=inclination&amp;format=<?php print $movie_format; ?>">Inclincation</a></li>
      <li><a href="index.php?type=horizontal&amp;format=<?php print $movie_format; ?>">Horizontal Intensity</a></li>
      <li><a href="index.php?type=vertical&amp;format=<?php print $movie_format; ?>">Vertical Intensity</a></li>
      <li><a href="index.php?type=tintensity&amp;format=<?php print $movie_format; ?>">Total Intensity</a></li>
      <li><a href="index.php?type=corefield&amp;format=<?php print $movie_format; ?>">Core Radial Field</a></li>
    </ul>
  </div>
</div>
