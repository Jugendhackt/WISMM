<?php

  class db{

    public $host;
    public $user;
    public $passsword;
    public $database;
    public $connection;

    function connect(){
      $this->$connection=new mysqli($this->$host, $this->$user, $this->$passsword, $this->$database);
      if($this->$connection->connect_errno){
        return false;
      }
      return true;
    }

    function sendQuery($sql){
      if($this->$connection->connect_errno){
        return false;
      }
      $this->$connection->query($sql);
      return true;
    }

  }
?>