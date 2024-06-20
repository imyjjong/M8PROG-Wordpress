<?php
get_header();
echo '<pre style="background:darkred; padding: 0rem; width:100%;">';
print_r( 'index page, this is -- yoda' );
echo '</pre>';
die(__FILE__.':'.__LINE__);
get_footer();