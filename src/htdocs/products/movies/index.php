<?php
  if(!isset($TEMPLATE)) {
    $TITLE = 'Declination of the Earth 1590-1990';
    $NAVIGATION = true;
    include 'template.inc.php';
  }

  $movie_type = "declination";
  $movie_format = "flash";

  if($_GET["type"] !== "") {
    $movie_type = $_GET['type'];
  }

  if($_GET["format"] !== "") {
    $movie_format = $_GET['format'];
  }

  if($movie_type === "declination") {
    $movie_title = "Declination";
  } elseif($movie_type === "inclination") {
    $movie_title = "Inclination";
  } elseif($movie_type === "horizontal") {
    $movie_title = "Horizontal Intensity";
  } elseif($movie_type === "tintensity") {
    $movie_title = "Total Intensity";
  } elseif($movie_type === "vertical") {
    $movie_title = "Vertical Intensity";
  } elseif($movie_type === "corefield") {
    $movie_title = "Core Radial Field";
  } else {
    $movie_title="Declination";

  //default to declination
  $movie_type = 'declination';
  }

  $title = $movie_title;

  if($movie_format === "flash") {
    $title .= " (Flash)";
  } else {
    $title .= " (GIF)";
  }

  print "<h2>" . $movie_title . " <font size=\"-2\">";

  if($movie_format === "flash") {
    print "(Flash | <a href=\"index.php?type=" . $movie_type . "&format=gif\">GIF</a>)";
  } else {
    print "(<a href=\"index.php?type=" . $movie_type . "&format=flash\">Flash</a> | GIF)";
  }

  print "</font></h2>\n";

  print "<center>";


  if($movie_format === "flash") {
?>

<object
  classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
  codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0"
  width="410"
  height="360" alt="Flash Movie depicting <?php print $movie_title; ?> of the Earth's Magnetic Field">
    <param name="movie" value="<?php print $movie_type ?>.swf">
    <param name="quality" value="high">
    <embed src="<?php print $movie_type ?>.swf"
      quality="high"
      pluginspage="http://www.macromedia.com/go/getflashplayer"
      type="application/x-shockwave-flash"
      width="410"
      height="360">
    </embed>
    <noembed>
      <a href="<?php print $movie_type; ?>.swf">Flash Movie depicting <?php print $movie_title; ?> of the Earth's Magnetic Field</a>
    </noembed>
</object>


<blockquote>
  <p>
    <b>Note: This page has a Flash movie. To view this movie in flash format you must install the flash player</b>
    <br />
    Alternatively, you can
    <a href="index.php?type=<?php print $movie_type; ?>&format=gif">view the Animated GIF Version of this same movie.</a>  <br />
    <a href="http://www.macromedia.com">The flash player is freely available from http://www.macromedia.com</a>.
  </p>
</blockquote>

<?php
  } else {
?>

  <img src="<?php print $movie_type ?>.gif" width="372" height="327" alt="Movie depicting <?php print $movie_title; ?> of the Earth's Magnetic Field" />
<?php
  }
  print "</center>";
?>
