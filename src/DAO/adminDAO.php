<?php
namespace DAO;

require_once __DIR__.'/../config/connection.php';
require_once __DIR__.'/../model/adminModel.php';

use config\Connection;
use model\adminModel;
use PDO;
use PDOException;

class AdiminDAO{
    public $conn;

    public function __construct()
    {
        $database = new Connection();
        $this->conn = $database->getConnection();
    }

    public function loginAdmin($name, $password)
    {
        try {
            $query = "SELECT * FROM administrador WHERE adm_name = :name AND adm_password = :password";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_ASSOC);
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Erro ao realizar login: " . $e->getMessage();
            return false;
        }
    }
}