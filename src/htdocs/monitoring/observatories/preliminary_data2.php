<?php
  $day = $_POST['day'];
  $abbrev = array ( "brwt", "bout", "cmot", "dedt", "frdt", "frnt", "guat",
                  "hont", "newt", "sjgt", "shut", "sitt", "bslt", "tuct" );

  //only show if being called properly...
  if(isset($day)) {
?>
  <style>
  <!--
  .data {
    list-style: none;
  }
  .data li {
    display: block;
    width: 200px;
  }
  -->
  </style>

<p>
  <ul class="data">

<?php
  foreach ($abbrev as $value)
  {
    $imgstr = "/wwwplots/" . $value;
    if($day != 0)
    {
      $imgstr .= "-" . $day;
    }
    $imgstr .= ".gif";

    print "<li>";
    print "<img src=\"" . $imgstr . "\" alt=\"Preliminary Data for " . $imgstr . "\" />";
    print "</li>";
  }
?>
  </ul>
</p>

<?php
  } //if(isset($day) {
?>
