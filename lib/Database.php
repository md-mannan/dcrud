<?php
include'Config.php';


class Database{
    private $host=DB_HOST;
private $user=DB_USER;
private $pass=DB_PASS;
private $name=DB_NAME;
public $pdo;

public function __construct(){
    if(!isset($this->pdo)){
        try{
            $link=new PDO('mysql:host='.$this->host.';dbname='.$this->name,$this->user,$this->pass);
            $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $link->exec("SET CHARACTER SET utf8");
            $this->pdo=$link;
        }catch(PDOException $e){
            die('Database Connection Failed'.$e->getMessage());
        }
    }
}
}

?>