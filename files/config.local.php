<?php
  $CONFIG['version'] = 5;
  $CONFIG['socket'] = 'unix:///var/run/collectd-socket';
  $CONFIG['graph_type'] = 'hybrid';
  # default plugins to show on host page
  $CONFIG['overview'] = array('load', 'cpu', 'memory', 'interface');
  $CONFIG['network_datasize'] = 'bits';
  $CONFIG['percentile'] = 95;
  $CONFIG['showload'] = false;

  $CONFIG['cat']['berlin.freifunk.net'] = array(
    'buildbot.berlin.freifunk.net',
    'config.berlin.freifunk.net',
    'download-master.berlin.freifunk.net',
    'pool.tunnel.berlin.freifunk.net',
    'vmhost03.berlin.freifunk.net',
  );

  $CONFIG['cat']['vpn03.berlin.freifunk.net'] = array(
    'vpn03d.berlin.freifunk.net',
    'vpn03f.berlin.freifunk.net',
    'vpn03g.berlin.freifunk.net',
    'vpn03h.berlin.freifunk.net'
  );

  $CONFIG['cat']['Rathaus Kreuzberg'] = array(
    'rhxb-rt1'
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
    'sama-core'
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

  $CONFIG['cat']['Neukoelln Arcaden'] = array(
    'arcaden-klunkerkranich',
    'arcaden-bib',
    'arcaden-nordost'
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

  $CONFIG['cat']['Refugee Notunterkünfte'] = array(
    'refugees-TeskeSchuleUplink',
    'refugees-haarlemer',
    'refugees-jahnhalle',
    'refugees-lageso',
    'refugees-mdorferweg',
    'refugees-teske-downlink',
    'notunterkunft-malmoeer8',
    'notunterkunft-malmoeer8-slave-0',
    'notunterkunft-malmoeer8-slave-1',
    'refugees-geibel-halle',
    'refugees-lobeck-core'
  );

  $CONFIG['cat']['Stuttgarter Str.'] = array(
    'stuttgarter-core',
    'stuttgarter-emma',
    'stuttgarter-hof',
    'stuttgarter-nord',
    'stuttgarter-ost',
    'stuttgarter-rhnk',
    'stuttgarter-stra',
    'stuttgarter-sued',
    'stuttgarter-west'
  );

  $CONFIG['cat']['IN-Berlin'] = array(
    'am-dach-rt1',
    'am-dach-ns5-sw',
    'am-dach-ns5-so'
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

  $CONFIG['cat']['Neukölln - Kneipen, Cafes und private APs'] = array(
    'nk-silverfuture'
  );

  $CONFIG['cat']['Treptow / Köpenick'] = array(
    'Adlershof-Eigeninitiative',
    'Ahof-frieden-bbbgw', 'Ahof-frieden01', 'Ahof-frieden02', 'Ahof-frieden03',
    'ekke-aussen', 'ekke-innen',
    'eschenbach5',
    'ff_Ahoernchen2',
    'Geographie',
    'Mitmach-Republik',
    'PFTK',
    'Rabenhaus',
    'Unter_den_Linden',
    'Wilhelminenhofstrasse',
    'wop-sued'
  );

  $CONFIG['cat']['Cottbuss'] = array(
    'cottbus-poznaner-str19',
    'cottbus-quasimono',
    'cottbus-vom-stein-str-37',
  );

  $CONFIG['cat']['Scherer8'] = array(
    'scherer8',
    'scherer8-abb',
    'scherer8-eg-s',
    'scherer8-eg-nw',
    'scherer8-eg-o',
    'basta',
    'Scherer8-Dach-Ost',
    'Scherer8-Perleberger36',
  );

  $CONFIG['cat']['Scharni'] = array(
    'scharni-core',
    'scharni-ap1',
    'scharni-ap2',
    'scharni-ap3',
    'scharni-ap3'
  );

?>
