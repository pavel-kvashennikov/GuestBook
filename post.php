<?php
$name = $_POST['name'];
$message = $_POST['message'];
if ($_POST['action'] == 'get'){
    return '12234234234';
}

require_once ('connect.php');
$db=new db();
$sql = "INSERT INTO posts SET name='".$name."', text='".$message."'";
$response = $db->query($sql);
var_dump($response);
return $response;