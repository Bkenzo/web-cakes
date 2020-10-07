<?php

class Gestor {

    private $db_server = 'localhost';
    private $db_name = 'newsletter';
    #private $db_charset = 'utf8';
    private $db_username = 'root';
    private $db_password = '';
    private $pdo;

    /**
     * Método para abrir o banco de dados
     */
    public function openDataBase()
    {
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_FOUND_ROWS => true
          );      
          
          $this->pdo = new PDO("mysql:host=" . $this->db_server . 
          ";dbname=" . $this->db_name, 
          $this->db_username, 
          $this->db_password, $options);
          
          return $this->pdo;

    }

}