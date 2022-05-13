<?php
$CONFIG = array (
  'instanceid' => 'occsebm8fw0d',
  'passwordsalt' => 'ArNBjdjchvuIoGsElX0yHxOguEtRJT',
  'secret' => 'tt/tgskAiYbDK2tMqTp6TOo5+soZKxSzOCvinwN6beG6+EUK',
  'trusted_domains' =>
  array (
    0 => '10.1.4.4',
    1 => '10.1.4.5',
    2 => 'mssaca-s4nextcloud.southeastasia.cloudapp.azure.com',
    3 => '20.205.213.46',
  ),
  'trusted_proxies' =>
  array (
    0 => '10.1.4.5',
  ),
  'datadirectory' => '/nextcloud/ncdata/',
  'overwrite.cli.url' => 'https://10.1.4.4',
  'dbtype' => 'mysql',
  'version' => '9.1.2.2',
  'dbname' => 'nextcloud_db',
  'dbhost' => 'localhost',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'dbuser' => 'nextclouduser',
  'dbpassword' => 'nextclouduser@',
  'logtimezone' => 'UTC',
  'installed' => true,
  'ldapIgnoreNamingRules' => false,
  'ldapProviderFactory' => '\\OCA\\User_LDAP\\LDAPProviderFactory',
  'loglevel' => 0,
  'appstore.experimental.enabled' => true,
  'maintenance' => false,
);



# put it in /nextcloud/ncinstall/nextcloud/config/config.php