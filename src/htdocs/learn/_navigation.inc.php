<?php
echo navGroup(navItem('/learn/index.php', 'Learn'),
  navItem('/learn/introtogeomag.php', 'Introduction to Geomag') .
  navItem('/learn/reading.php', 'Further Reading') .
  navItem('/learn/pressreleases.php', 'Press Releases') .
  navItem('https://www.usgs.gov/faq/geology', 'FAQ\'s')
);
?>
