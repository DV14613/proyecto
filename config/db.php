<?php
class Database
{
	public static function connect(){						
		$db = new mysqli(serverDB,userDB,pwdDB,database);		
	
		if ($db->connect_error) {
			die('Error de conexión: ' . $db->connect_error);
		} else {
			$db->query("SET NAMES 'utf8'");
			return $db;	
		}		
	}
}
