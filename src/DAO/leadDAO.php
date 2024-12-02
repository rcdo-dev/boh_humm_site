<?php
namespace DAO;

require_once __DIR__.'/../config/connection.php';
require_once __DIR__.'/../model/leadModel.php';

use config\Connection;
use model\LeadModel;
use PDOException;

class LeadDAO
{
    public $conn;

    public function __construct()
    {
        $database = new Connection();
        $this->conn = $database->getConnection();
    }

    public function save(LeadModel $lead)
    {

        $name = $lead->getName();
        $email = $lead->getEmail();
        $telephone = $lead->getTelephone();

        $query = "INSERT INTO leads (lea_name, lea_email, lea_mobile_number) VALUES (:name, :email, :telephone)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":telephone", $telephone);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $error) {
            error_log("Error saving lead: " . $error->getMessage());
        }
        return false;
    }
}