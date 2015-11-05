#!/bin/sh

cd /usr/local/src/www/htdocs/buildbot/unstable/ar71xx && rm -fr $(ls -t | tail -n +20)
cd /usr/local/src/www/htdocs/buildbot/unstable/ar71xx_mikrotik && rm -fr $(ls -t | tail -n +20)
cd /usr/local/src/www/htdocs/buildbot/unstable/x86 && rm -fr $(ls -t | tail -n +20)
cd /usr/local/src/www/htdocs/buildbot/unstable/mpc85xx && rm -fr $(ls -t | tail -n +20)
cd /usr/local/src/www/htdocs/buildbot/unstable/ramips && rm -fr $(ls -t | tail -n +20)
