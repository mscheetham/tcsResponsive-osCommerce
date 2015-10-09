<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

// define our webserver variables
// FS = Filesystem (physical)
// WS = Webserver (virtual)
  define('HTTP_SERVER', 'http://test.cadservices.co.uk'); // eg, http://localhost or - https://localhost should not be NULL for productive servers
  define('HTTPS_SERVER', 'https://test.cadservices.co.uk');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', 'test.cadservices.co.uk');
  define('HTTPS_COOKIE_DOMAIN', 'test.cadservices.co.uk');
  define('HTTP_COOKIE_PATH', '/');
  define('HTTPS_COOKIE_PATH', '/');
  define('HTTP_CATALOG_SERVER', 'http://test.cadservices.co.uk'); 
  define('HTTPS_CATALOG_SERVER', 'https://test.cadservices.co.uk');
  define('ENABLE_SSL_CATALOG', 'false'); // secure webserver for catalog module
  define('DIR_FS_DOCUMENT_ROOT', $DOCUMENT_ROOT); // where your pages are located on the server. if $DOCUMENT_ROOT doesnt suit you, replace with your local path. (eg, /usr/local/apache/htdocs)
  define('DIR_WS_ADMIN', '/admin/');
  define('DIR_WS_HTTPS_ADMIN', '/admin/');
  define('DIR_FS_ADMIN', DIR_FS_DOCUMENT_ROOT . DIR_WS_ADMIN);
  define('DIR_WS_CATALOG', '/');
  define('DIR_WS_HTTPS_CATALOG', '/');
  define('DIR_FS_CATALOG', DIR_FS_DOCUMENT_ROOT . DIR_WS_CATALOG);
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_BOXES', DIR_WS_INCLUDES . 'boxes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

// define our database connection
 define('DB_SERVER', 'localhost'); // eg, localhost - should not be empty for productive servers
  define('DB_SERVER_USERNAME', 'mahmtadb_test');
  define('DB_SERVER_PASSWORD', 's0^g^VZD#f#mEK3j');
  define('DB_DATABASE', 'mahmtadb_test');
  define('USE_PCONNECT', 'false'); // use persistent connections?
  define('STORE_SESSIONS', 'mysql'); // leave empty '' for default handler or set to 'mysql'

?>
