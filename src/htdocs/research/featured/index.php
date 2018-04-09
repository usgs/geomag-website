<?php
// Author: Lisa Wald
// Contact: Lisa Wald
  if (!isset($TEMPLATE)) {
    $TITLE = 'Science for Everyone';
    include_once 'functions.inc.php';
    ob_start();
    include '../_navigation.inc.php';
    $NAVIGATION = ob_get_clean();
    $HEAD = '<link rel="stylesheet" href="/research/featured/styles.css"/>';
    include 'template.inc.php';
  }
?>

<h3>2018</h3>
<!-- Featured Items -->
  <?php
  include_once '2018/_features.inc.php';
  echo $GM_FEATURES->toHtml(-1);
  ?>

  <h3>Science for Everyone Archives</h3>

<h4>2013</h4>
<ul>
  <li>
    <a href="https://www.youtube.com/watch?v=s9YGOUWpH8s">Geomagnetic Storms</a> (7:33 min video)
  </li>
</ul>
