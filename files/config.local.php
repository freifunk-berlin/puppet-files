<?php
  $CONFIG['version'] = 4;
  $CONFIG['socket'] = 'unix:///var/run/collectd-socket';
  $CONFIG['graph_type'] = 'hybrid';

  $CONFIG['cat']['Server und Gateways'] = array('segen-router', 'servnix42', 'druschba');
  $CONFIG['cat']['Zoofenster'] = array('zoofenster22', 'zoofenster24', 'zoofenster27', 'zoofenster_33_2');
  $CONFIG['cat']['Segenkirche'] = array('segen-no-2', 'segen-no-5', 'segen-so-2', 'segen-so-5', 'segen-sw-2', 'segen-sw-5', 'segen-nw-2', 'segen-nw-5', 'segen-top-sw');
  $CONFIG['cat']['Eliaskirche'] = array('Eliaskirche-West', 'eliaskircheS5G');
?>
