<?php
echo navGroup(navItem('/learn/index.php', 'Learn'),
  navItem('/learn/introtogeomag.php', 'Introduction to Geomag') .
  navItem('/learn/reading.php', 'Further Reading') .
  navItem('/learn/pressreleases.php', 'Press Releases') .
  navItem('https://www2.usgs.gov/faq/?q=taxonomy/term/9782', 'FAQ\'s')
);
?>
