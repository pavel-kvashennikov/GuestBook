<?php
define(host,'localhost');
define(name,'guestbook');
define(user,'root');
define(password, '123456Zz!');
use PDO;

class db {
    protected $db;

    public function __construct(){
        try{
            $this->db = new PDO('mysql:host='.host.';dbname='.name.'', user, password);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function query($sql){
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}