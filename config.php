<?php
require 'ambiente.php';
define("BASE_URL", "http://localhost/mvc");
global $config;
$config = array();
if (ambiente == "desenvolvimento") {
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '33541155';

}else{
	$config['dbname'] = 'banco de dados';
	$config['host'] = 'servidor do projeto';
	$config['dbuser'] = 'usuario do projeto';
	$config['dbpass'] = 'senha do projeto';	
}

?>