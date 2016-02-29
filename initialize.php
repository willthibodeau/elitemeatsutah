<?php

//Define core paths
// define them as absolute paths to make sure require_once works as expected

//directory separator is a php pre-defined constant
defined('DS') ? NULL : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? NULL : define('SITE_ROOT', DS. 'elitemeatsutah');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS. 'css');


// require_once(LIB_PATH.DS.'main.css');

// require_once(LIB_PATH.DS.'footer.php');



?>