<?php
  //only show if being called properly...
  if(isset($abbrev)) {
?>
<style>
<!--
  .data {
    list-style:none;
  }

  .data li {
    display:block;
    width:200px;
  }
-->
</style>

<script src="/js/easytoggle.js"></script>
<a name="data"></a>
<h3>
  <div style="float:right;">
    <font size="-2"><a href="#startcontent">Back To Top</a></font>
  </div>
  Preliminary Data
</h3>
<p>The last seven days of preliminary data are available
<ul class="data">

<?php
  $oneday = 60 * 60 * 24;
  $now = time();

  for($i = 0; $i < 8; $i++)
  {
    $datestr = date("M j, Y (D)", $now - ($i * $oneday));

    $imgstr = "/wwwplots/" . $abbrev;
    if($i != 0) {
    	$imgstr .= "-" . $i;
    }
    $imgstr .= ".gif";

    print "<li><a href=\"#plot" . $i . "\" class=\"toggle\">" . $datestr . "</a><br />";
    print "<div id=\"plot" . $i . "\">";
    print "<center><a href=\"" . $imgstr . "\" alt=\"Preliminary Data on " . $datestr . "\">";
    print "<img src=\"" . $imgstr . "\" width=\"500\" alt=\"Preliminary Data on " . $datestr . "\" />";
    print "</a></center>";
    print "</div></li>";

    //print "<li><a href=\"/wwwplots/" . $abbrev;
    //if($i != 0)
    //{
    //	print "-" . $i;
    //}
    //print ".gif\">" . date("M j, Y (D)", $now - ($i * $oneday)) . "</a></li>";
  }
?>
</ul>
</p>

<?php
  } //if(isset($abbrev) {
?>
