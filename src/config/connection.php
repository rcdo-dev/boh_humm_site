<?php

namespace config;

use PDO;
use PDOException;

class Connection
{
    private $host = "localhost";
    private $db_name = "BohHummmLeads";
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection()
    {
        try {
            $this->conn = new PDO ("mysql:host=$this->host; dbname=$this->db_name", $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch (PDOException $error) {
            error_log("Connection error: " . $error->getMessage());
            die("Erro ao conectar ao banco de dados.");
        }
        return $this->conn;
    }
}