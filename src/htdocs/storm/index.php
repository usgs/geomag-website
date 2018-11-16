<?php
if (!isset($TEMPLATE)) {
  $TITLE = 'Magnetic Disturbance Summaries';
  $HEAD = '<link rel="stylesheet" href="index.css"/>';
  $NAVIGATION = true;
  include 'template.inc.php';
}
?>

<div class="column">
  <table>
    <thead>
      <tr>
        <th>Date Interval</th>
        <th>Name</th>
        <th>Peak Dst</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <th>2018-08-25 00:00:00Z  to  2018-08-28 00:00:00Z</th>
        <th><a href="/storm/storm24.php">2018-08-25</a></th>
        <th>174</th>
      </tr>

      <tr>
        <th>2015-06-21 16:45:00Z  to  2015-06-22 18:30:00Z</th>
        <th><a href="/storm/storm23.php">2015-06-23</a></th>
        <th>-195</th>
      </tr>

      <tr>
        <th>2015-03-17 00:00:00Z  to  2015-03-22 00:00:00Z</th>
        <th><a href="/storm/storm22.php">17 March 2015</a></th>
        <th>-195</th>
      </tr>

      <tr>
        <th>2014-09-11 00:00:00Z  to  2014-09-13 23:59:59Z</th>
        <th><a href="/storm/storm21.php">12 September 2014</a></th>
        <th>0</th>
      </tr>

      <tr>
        <th>2014-02-18 00:00:00Z  to  2014-02-25 18:00:00Z</th>
        <th><a href="/storm/storm18.php">19 February 2014</a></th>
        <th>-95</th>
      </tr>

      <tr>
        <th>2013-06-01 00:00:00Z  to  2013-06-03 00:00:00Z</th>
        <th><a href="/storm/storm17.php">1 June 2013</a></th>
        <th>-120</th>
      </tr>

      <tr>
        <th>2012-09-30 23:00:00Z  to  2012-10-01 18:00:00Z</th>
        <th><a href="/storm/storm16.php">	1 October 2012</a></th>
        <th>-119</th>
      </tr>

      <tr>
        <th>2012-01-19 00:00:00Z  to  2012-01-23 23:59:00Z</th>
        <th><a href="/storm/storm12.php">23 January 2012	</a></th>
        <th>-66</th>
      </tr>

      <tr>
        <th>2011-09-24 00:00:00Z  to  2011-09-26 00:00:00Z</th>
        <th><a href="/storm/storm13.php">	26 September 2011</a></th>
        <th>-93</th>
      </tr>

      <tr>
        <th>2011-02-14 00:00:00Z  to  2011-02-18 23:59:59Z</th>
        <th><a href="/storm/storm19.php">14 February 2011	</a></th>
        <th>30</th>
      </tr>

      <tr>
        <th>2010-04-05 08:40:00Z  to  2010-04-05 23:59:59Z</th>
        <th><a href="/storm/storm20.php">5 April 2010</a></th>
        <th>0</th>
      </tr>
    </tbody>
  </table>
</div>
