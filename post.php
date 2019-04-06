<?php
$name = $_POST['name'];
$message = $_POST['message'];
require_once('db.php');
$db=new db();
$sql = "INSERT INTO posts SET name='".$name."', text='".$message."'";
$db->query($sql);