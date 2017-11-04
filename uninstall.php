<?php

include_once (GLPI_ROOT."/config/based_config.php");

if (!defined("GLPI_USERAVATAR_DIR")) {
   define("GLPI_USERAVATAR_DIR",GLPI_ROOT . "/plugins/useravatar");
}

if(is_file(GLPI_ROOT.'/front/central.php.avatar.bak')) {
		
	exec('rm '.GLPI_ROOT.'/front/central.php');
	rename(GLPI_ROOT.'/front/central.php.avatar.bak', GLPI_ROOT.'/front/central.php');

}

if(is_file(GLPI_ROOT.'/inc/html.class.php.avatar.bak')) {
	exec('rm '.GLPI_ROOT.'/inc/html.class.php');
	rename(GLPI_ROOT.'/inc/html.class.php.avatar.bak', GLPI_ROOT.'/inc/html.class.php');
}


?>
