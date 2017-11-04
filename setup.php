<?php

function plugin_init_useravatar() {
  
   global $PLUGIN_HOOKS, $LANG ;
	
	$PLUGIN_HOOKS['csrf_compliant']['useravatar'] = true;         
   
   $plugin = new Plugin();
   if ($plugin->isInstalled('useravatar') && $plugin->isActivated('useravatar')) {
 	}                    
}


function plugin_version_useravatar(){
	global $DB, $LANG;

	return array('name'			   => __('GLPI User Avatar'),
					'version' 			=> '0.0.1',
					'author'			   => '<a href="mailto:rodrigo.sobjak@gmail.com"> Rodrigo Sobjak </b> </a>',
					'license'		 	=> 'GPLv2+',
					'homepage'			=> 'https://www.google.com',
					'minGlpiVersion'	=> '9.2');
}

function plugin_useravatar_check_prerequisites(){
     if (GLPI_VERSION == '9.2'){
         return true;
     } else {
         echo "GLPI version not compatible need 9.2";
     }
}


function plugin_useravatar_check_config($verbose=false){
	if ($verbose) {
		echo 'Installed / not configured';
	}
	return true;
}


?>
