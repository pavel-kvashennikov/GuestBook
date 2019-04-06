<?php
require_once ('connect.php');
$db=new db();
$response = $db->query('SELECT * FROM users');
var_dump($response);

