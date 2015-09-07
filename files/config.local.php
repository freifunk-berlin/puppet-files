<?php
  $CONFIG['version'] = 4;
  $CONFIG['socket'] = 'unix:///var/run/collectd-socket';
  $CONFIG['graph_type'] = 'hybrid';

  $CONFIG['cat']['freifunk.net'] = array(
    'www.freifunk.net'
  );
  $CONFIG['cat']['berlin.freifunk.net'] = array(
    'bgp01.berlin.freifunk.net',
    'bgp02.berlin.freifunk.net',
    'config.berlin.freifunk.net',
    'download-master.berlin.freifunk.net',
    'firmware.berlin.freifunk.net',
    'friendica.berlin.freifunk.net',
    'host-ipb.berlin.freifunk.net',
    'monitor.berlin.freifunk.net',
    'vmhost03.berlin.freifunk.net',
    'bbb-vpn.berlin.freifunk.net',
    'icvpn02.berlin.freifunk.net',
    'vpn02.berlin.freifunk.net',
    'vpn03.berlin.freifunk.net',
    'vpn03b.berlin.freifunk.neta',
    'vpn03c.berlin.freifunk.net'
  );
  $CONFIG['cat']['Server und Gateways'] = array(
    'segen-router', 'servnix42', 'druschba'
  );
  $CONFIG['cat']['Zoofenster'] = array(
    'zoofenster22', 'zoofenster23', 'zoofenster24', 'zoofenster25', 'zoofenster27', 'zoofenster_33_2'
  );
  $CONFIG['cat']['Segenkirche'] = array(
    'segen-core', 'segen-loggia', 'segen-no-5-2', 'segen-no-5', 'segen-so-2', 'segen-so-5', 'segen-sw-2',
    'segen-sw-5', 'segen-nw-2', 'segen-nw-5',
    'segen-top-sw',
    'Segen-Top-West',
    'segen-top-sued-west'
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
  $CONFIG['cat']['Rathaus Neukoelln'] = array(
    'rhnk-core',
    'rhnk-ap-0'
  );
  $CONFIG['cat']['E-Lok'] = array(
    'elok-ff-core',
    'elok-medienraum',
    'elok-tresen',
    'elok-lascafe',
    'laskerwiese-2ghz',
    'elok-nordwest',
    'ELOK-Nordwest-2GHz',
    'ELOK-Nordwest-5GHz'
  );
  $CONFIG['cat']['JUP'] = array(
    'JUP-core',
    'JUP-OG1',
    'JUP-OG2',
    'JUP-beam',
    'JUP-omni',
    'JUP-ost-5',
    'JUP-nord-2',
    'JUP-nord-5',
    'JUP-sued-2',
    'JUP-sued-5'
  );
  $CONFIG['cat']['Zwingli'] = array(
    'Zwingli-Core',
    'Zwingli-Ost-2GHz',
    'Zwingli-Ost-5GHz',
    'Zwingli-Nord-2GHz',
    'Zwingli-Nord-5GHz',
    'Zwingli-West-2GHz',
    'Zwingli-West-5GHz',
    'Zwingli-Sued-2GHz',
    'Zwingli-Sued-5GHz'
  );
  $CONFIG['cat']['Samariterkirche'] = array(
    'sama-core',
    'sama-nord-2ghz',
    'sama-nord-5ghz',
    'sama-west-2ghz',
    'sama-west-5ghz',
    'sama-ost-2ghz',
    'sama-ost-5ghz',
    'sama-sued-5ghz',
    'sama-sued-2ghz',
    'sama-kirchenschiff'
  );
  $CONFIG['cat']['Finowst. 2a'] = array(
    'f2a-core-rt',
    'f2a-omni-2ghz',
    'f2a-omni-2og',
    'f2a-nno-2ghz',
    'f2a-sued',
    'f2a-bbb-sw',
    'f2a-bbb-west',
    'f2a-finow-nord-2ghz',
    'f2a-finow-sued-2ghz',
    'f2a-testing-dfs'
  );
  $CONFIG['cat']['Kinzigstr. 9'] = array(
    'k9-bbb-rt1',
    'k9-bbb-30',
    'k9-bbb-31',
    'k9-bbb-32',
    'k9-bbb-33'
  );
  $CONFIG['cat']['MABB Kleine Präsidentenstr. 1'] = array(
    'mabb-rt1',
    'mabb-ns2-monbijou',
    'mabb-ns2-simon'
  );
  $CONFIG['cat']['Neukoelln Arcaden'] = array(
    'arcaden-klunkerkranich',
    'arcaden-bib',
    'arcaden-nordost'
  );
  $CONFIG['cat']['Manstein 10'] = array(
    'manstein10-core',
    'manstein10-n2',
    'manstein10-w2',
    'manstein10-s2',
    'manstein10-o2'
  );
  $CONFIG['cat']['Martin Luther Kirche'] = array(
    'martin-luther-core',
    'martin-luther-no',
    'martin-luther-so',
    'martin-luther-sw',
    'martin-luther-cafe'
  );
  $CONFIG['cat']['Emmaus Kirche'] = array(
    'emma-core',
    'emma-nno-2ghz',
    'emma-nnw-2ghz',
    'emma-ono-m2',
    'emma-oso-2ghz',
    'emma-sso-2ghz',
    'emma-ssw-m2',
    'emma-wnw-2ghz',
    'emma-wsw-2ghz'
  );
  $CONFIG['cat']['Ohlauer Str - Refugee Strike'] = array(
    'refugee-core',
    'refugee-mesh-2',
    'refugee-mesh-3',
    'refugee-mesh-4',
    'refugee-mesh-5',
    'refugee-mesh-6',
    'refugee-mesh-7',
    'refugee-mesh-8',
    'refugee-mesh-9',
    'refugee-mesh-10'
  );

  $CONFIG['cat']['Flux-FM'] = array(
    'fluxfm-core',
    'fluxfm-m2-o',
    'fluxfm-m5-o',
    'fluxfm-m2-no',
    'fluxfm-m5-no',
    'fluxfm-m2-nw',
    'fluxfm-m5-nw'
  );

  $CONFIG['cat']['RAW'] = array(
    'RAW-Core',
    'RAW-Ost',
    'RAW-West',
    'RAW-Simondach',
    'revaler10-core',
    'revaler10-m2-ost',
    'revaler10-m2-west',
    'revaler10-m5-sued'
  );
  $CONFIG['cat']['IN-Berlin'] = array(
    'am-dach-rt1',
    'am-dach-ns5-sw',
    'am-dach-ns5-so'
  );
  $CONFIG['cat']['I/P/B/'] = array(
    'ipb-west-5ghz'
  );
  $CONFIG['cat']['Christophorus'] = array(
    'christophorus-core',
    'christophorus-n',
    'christophorus-o',
    'christophorus-s',
    'christophorus-w'
  );
  $CONFIG['cat']['Teufelsberg'] = array(
    'tberg-core',
    'tberg-loft',
    'tberg-loft-m2'
  );
  $CONFIG['cat']['TU Berlin'] = array(
    'dk0tu-core',
    'dk0tu-shack',
    'dk0tu-mathe',
    'tub-zoo-5ghz',
    'tub-am-2ghz',
    'tub-mathe-2ghz'
  );
  $CONFIG['cat']['SKA95'] = array(
    'ska95-core',
    'ska95-cortile',
    'ska95-schoolyard'
  );
  $CONFIG['cat']['c-base'] = array(
    'c-base-core',
    'c-base-ceminar',
    'c-base-mainhall-exit',
    'c-base-mainhall-he1'
  );
  $CONFIG['cat']['AnhalterBf'] = array(
    'AnhalterBf-NSM2loco',
    'AnhalterBf-Sued-NSM5',
    'AnhalterBf-SuedOst-NSM2',
    'AnhalterBf-SuedWest-NSM2',
    'AnhalterBf-West-2GHz'
  );
  $CONFIG['cat']['humpty-frei'] = array(
    'humpty-frei-main',
    'humpty-frei-beeren-back',
    'humpty-frei-obentraut-back',
    'humpty-frei-rhxb',
    'humpty-frei-saigon'
  );
  $CONFIG['cat']['Rixbox'] = array(
    'rixbox-core',
    'rixbox-node01',
    'rixbox-node02',
    'rixbox-node03'
  );
  $CONFIG['cat']['Kneipen, Cafes und private APs'] = array(
    'beuth0',
    'tantehorst',
    'Suedblock',
    'blage',
    'tristeza',
    'silverfuture',
    'schaumschlaeger',
    'Harzer89',
    'Fulda52',
    'kfetisch',
    'voigt42',
    'milli',
    'laidak',
    'derrida',
    'Hermann12',
    'vetomat-indoor',
    'vetomat-outdoor',
    'wahlkreisbuero-wawzyniak',
    'wg1337-west'
  );
?>
