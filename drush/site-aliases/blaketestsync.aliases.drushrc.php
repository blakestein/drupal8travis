<?php

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site blaketestsync, environment dev.
$aliases['dev'] = array(
  'root' => '/var/www/html/blaketestsync.dev/docroot',
  'ac-site' => 'blaketestsync',
  'ac-env' => 'dev',
  'ac-realm' => 'devcloud',
  'uri' => 'blaketestsync55vwnmwlnz.devcloud.acquia-sites.com',
  'remote-host' => 'blaketestsync55vwnmwlnz.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'blaketestsync.dev',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['dev.livedev'] = array(
  'parent' => '@blaketestsync.dev',
  'root' => '/mnt/gfs/blaketestsync.dev/livedev/docroot',
);

if (!isset($drush_major_version)) {
  $drush_version_components = explode('.', DRUSH_VERSION);
  $drush_major_version = $drush_version_components[0];
}
// Site blaketestsync, environment test.
$aliases['test'] = array(
  'root' => '/var/www/html/blaketestsync.test/docroot',
  'ac-site' => 'blaketestsync',
  'ac-env' => 'test',
  'ac-realm' => 'devcloud',
  'uri' => 'blaketestsynctaoqkrnjdn.devcloud.acquia-sites.com',
  'remote-host' => 'blaketestsynctaoqkrnjdn.ssh.devcloud.acquia-sites.com',
  'remote-user' => 'blaketestsync.test',
  'path-aliases' => array(
    '%drush-script' => 'drush' . $drush_major_version,
  ),
);
$aliases['test.livedev'] = array(
  'parent' => '@blaketestsync.test',
  'root' => '/mnt/gfs/blaketestsync.test/livedev/docroot',
);
