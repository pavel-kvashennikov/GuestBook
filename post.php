<?php
$name = $_POST['name'];
$message = $_POST['message'];
if ((strlen($name) >= 3) and (strlen($message) >= 10)) {
    require_once('db.php');
    $db = new db();
    $sql = "INSERT INTO posts SET name='" . $name . "', text='" . $message . "'";
    $db->query($sql);
} else echo ('error');