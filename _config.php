<?php
class Autoloader{
	public static function register()
	{
		session_start();
		ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
		$root = 'D:/wamp64/www';
		$host = 'localhost';

		//define('HOST', 'http://'.$host.'/InscriptionConnexionTest/');
		define('ROOT', $root.'/InscriptionConnexionTest/');

		define('CONTROLLER', ROOT.'Controllers/');
		define('VIEW', ROOT.'Views/');
		define('MODEL', ROOT.'Models/');
		define('APP', ROOT.'app/');
		define('ISSET', ROOT.'public/');
		
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}
	
	public static function autoload($class)
	{
		if(file_exists(MODEL.$class.'.php'))
		{
			include_once (MODEL.$class.'.php');
		}else if(file_exists(VIEW.$class.'.php'))
		{
			include_once (VIEW.$class.'.php');
		}else if(file_exists(CONTROLLER.$class.'.php'))
		{
			include_once (CONTROLLER.$class.'.php');
		}
		else if(file_exists(APP.$class.'.php'))
		{
			include_once (APP.$class.'.php');
		}
		
    	
    }
 
}
