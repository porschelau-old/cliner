<?php
/**
 * This is a global namespace app loader
 *
 * @author jonlau
 *
 */

class App {

}

/**
 * defining the autoloader to use the class package path to infer the folder structure
 */
spl_autoload_register(function ($class) {
	
	$classPath = str_replace("\\", "/", $class);
	
	$path = ROOT_PATH."/$classPath.php";
	
	require_once $path;
});