<?php

  class db{

    public $connection;

    public function connect($host, $user, $passsword, $database){

      $this->connection = new mysqli($host, $user, $passsword, $database);

      if($this->connection->connect_errno){
        return false;
      }
      return true;
    }

    public function sendQuery($sql){
      if($this->connection->connect_errno){
        return false;
      }
      return $this->connection->query($sql);
    }

  }


  $db = new db();
  $db->connect("sql535.your-server.de", "krakennetz_w", "sdrseuri", "krakennetz");

?>