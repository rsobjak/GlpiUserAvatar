<?php

include_once (GLPI_ROOT."/config/based_config.php");

if (!defined("GLPI_USERAVATAR_DIR")) {
   define("GLPI_USERAVATAR_DIR",GLPI_ROOT . "/plugins/useravatar");
}

//without plugin
if(!is_file(GLPI_ROOT.'/front/central.php.avatar.bak')) {
	
	rename(GLPI_ROOT.'/front/central.php', GLPI_ROOT.'/front/central.php.avatar.bak');
	copy(GLPI_USERAVATAR_DIR.'/src/central.php', GLPI_ROOT.'/front/central.php');

}
else {
	//update plugin
	exec('cp '.GLPI_USERAVATAR_DIR.'/src/central.php '.GLPI_ROOT.'/front/central.php');
}	


//without plugin
if(!is_file(GLPI_ROOT.'/inc/html.class.php.avatar.bak')) {

	rename(GLPI_ROOT.'/inc/html.class.php', GLPI_ROOT.'/inc/html.class.php.avatar.bak');
	copy(GLPI_USERAVATAR_DIR.'/src/html.class.php', GLPI_ROOT.'/inc/html.class.php');
		
}
else {
	//update plugin
	exec('cp '.GLPI_USERAVATAR_DIR.'/src/html.class.php '.GLPI_ROOT.'/inc/html.class.php');
}	

?>