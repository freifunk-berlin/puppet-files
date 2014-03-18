<?php
  $CONFIG['version'] = 4;
  $CONFIG['socket'] = 'unix:///var/run/collectd-socket';
  $CONFIG['graph_type'] = 'hybrid';

  $CONFIG['cat']['berlin.freifunk.net'] = array(
    'vpn03.berlin.freifunk.net',
    'firmware.berlin.freifunk.net',
    'vmhost03.berlin.freifunk.net',
    'monitor.berlin.freifunk.net',
    'bgp01.berlin.freifunk.net'
  );
  $CONFIG['cat']['Server und Gateways'] = array(
    'segen-router', 'servnix42', 'druschba'
  );
  $CONFIG['cat']['Zoofenster'] = array(
    'zoofenster22', 'zoofenster23', 'zoofenster24', 'zoofenster25', 'zoofenster27', 'zoofenster_33_2'
  );
  $CONFIG['cat']['Segenkirche'] = array(
    'segen-no-2', 'segen-no-5', 'segen-so-2', 'segen-so-5', 'segen-sw-2',
    'segen-sw-5', 'segen-nw-2', 'segen-nw-5', 'segen-top-sw'
  );
  $CONFIG['cat']['Eliaskirche'] = array('Eliaskirche-West', 'eliaskircheS5G');
  $CONFIG['cat']['Rathaus Kreuzberg'] = array(
    'rhxb-2-no',
    'rhxb-2-nw',
    'rhxb-2-so',
    'rhxb-2-sw',
    'rhxb-rt1',
    'rhxb-warte'
  );
  $CONFIG['cat']['E-Lok'] = array(
    'laskerwiese-2ghz',
    'elok-lascafe',
    'elok-medienraum',
    'elok-tresen',
    'elok-nordwest'
  );
  $CONFIG['cat']['Zwingli'] = array(
    'Zwingli-Core',
    'Zwingli-Ost-2GHz',
    'Zwingli-Ost-5GHz',     
    'Zwingli-Nord-2GHz',
    'Zwingli-Nord-5GHz',    
    'Zwingli-West-2GHz',    
    'Zwingli-West-5GHz',
    'Zwingli-Sued-2GHz'    
  );
  $CONFIG['cat']['Samariterkirche'] = array(
    'sama-core-rt',
    'Sama-Nord-2ghz',
    'Sama-West-2ghz',
    'sama-ost-2ghz',
    'sama-sued-2ghz'
  );
  $CONFIG['cat']['Finowst. 2a'] = array(
    'f2a-core-rt',
    'f2a-omni-2ghz',
    'f2a-sued'
  );
  $CONFIG['cat']['Kinzigstr. 9'] = array(
    'k9-bbb-rt1',
    'k9-bbb-30',
    'k9-bbb-31',     
    'k9-bbb-32',     
    'k9-bbb-33'     
  );
  $CONFIG['cat']['Neukoelln Arcaden'] = array(
    'arcaden-klunkerkranich',
    'arcaden-rhxb-kindl',
    'arcaden-bib',
    'arcaden-nordost'
  );
  $CONFIG['cat']['Manstein 10'] = array(
    'manstein10-core',
    'manstein10-n2',
    'manstein10-o2'
  );
  $CONFIG['cat']['Martin Luther Kirche'] = array(
    'martin-luther-core',
    'martin-luther-no',
    'martin-luther-so',
    'martin-luther-sw',
  );
  $CONFIG['cat']['Emmaus Kirche'] = array(
    'emma-core',
    'emma-nno-m2',
    'emma-nnw-m2',
    'emma-ono-m2',
    'emma-oso-m2',
    'emma-sso-m2',
    'emma-ssw-m2',
    'emma-wnw-m2'
  );
  $CONFIG['cat']['Ohlauer Str - Refugee Strike'] = array(
    'refugee-core',
    'refugee-mesh-2',
    'refugee-mesh-4',
    'refugee-mesh-5',
    'refugee-mesh-6',
    'refugee-mesh-7',
  );
?>
