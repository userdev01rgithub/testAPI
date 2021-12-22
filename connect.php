<?php 

use Medoo\Medoo;
 
$database = new Medoo([
	// [required]
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'test_api',
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8mb4',
	'collation' => 'utf8mb4_general_ci',
]);

?>