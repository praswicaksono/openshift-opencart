<?php
// HTTP
define('HTTP_SERVER', 'http://'. $_ENV['OPENSHIFT_APP_DNS'] .'/admin/');
define('HTTP_CATALOG', 'http://'. $_ENV['OPENSHIFT_APP_DNS']);
define('HTTP_IMAGE', 'http://'. $_ENV['OPENSHIFT_APP_DNS'] .'/image/');

// HTTPS
define('HTTPS_SERVER', 'https://'. $_ENV['OPENSHIFT_APP_DNS'] .'/admin/');
define('HTTPS_CATALOG', 'https://'. $_ENV['OPENSHIFT_APP_DNS'] .);
define('HTTPS_IMAGE', 'https://'. $_ENV['OPENSHIFT_APP_DNS'] .'/image/');

// DIR
define('DIR_APPLICATION', $_ENV['OPENSHIFT_REPO_DIR'].'php/admin/');
define('DIR_SYSTEM', $_ENV['OPENSHIFT_REPO_DIR'].'php/system/');
define('DIR_DATABASE', $_ENV['OPENSHIFT_REPO_DIR'].'php/system/database/');
define('DIR_LANGUAGE', $_ENV['OPENSHIFT_REPO_DIR'].'php/admin/language/');
define('DIR_TEMPLATE', $_ENV['OPENSHIFT_REPO_DIR'].'php/admin/view/template/');
define('DIR_CONFIG', $_ENV['OPENSHIFT_REPO_DIR'].'php/system/config/');
define('DIR_IMAGE', $_ENV['OPENSHIFT_REPO_DIR'].'php/image/');
define('DIR_CACHE', $_ENV['OPENSHIFT_REPO_DIR'].'php/system/cache/');
define('DIR_DOWNLOAD', $_ENV['OPENSHIFT_REPO_DIR'].'php/download/');
define('DIR_LOGS', $_ENV['OPENSHIFT_REPO_DIR'].'php/system/logs/');
define('DIR_CATALOG', $_ENV['OPENSHIFT_REPO_DIR'].'php/catalog/');

// DB
define('DB_DRIVER', 'mysql');
define('DB_HOSTNAME', $_ENV['OPENSHIFT_MYSQL_DB_HOST']);
define('DB_USERNAME', $_ENV['OPENSHIFT_MYSQL_DB_USERNAME']);
define('DB_PASSWORD', $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD']);
define('DB_DATABASE', $_ENV['OPENSHIFT_APP_NAME']);
define('DB_PREFIX', '');
?>