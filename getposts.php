<?php
require_once('db.php');
$message = new message();
header('Content-Type: application/json; charset=utf-8');
echo json_encode($message->message);