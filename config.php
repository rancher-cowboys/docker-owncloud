<?php
$CONFIG = array (
  'dbtype' => 'mysql',
  'dbhost' => 'mariadb',
  'dbuser' => 'root',
  'dbname' => 'owncloud',
  'dbpassword' => 'owncloudpwd',
  'memcache.local' => '\OC\Memcache\APCu',
  'memcache.distributed' => '\OC\Memcache\Memcached',
  'memcached_servers' => array(
      array('memcached', 11211),
  )
);
