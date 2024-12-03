<?php
namespace DAO;

require_once __DIR__.'/../config/connection.php';
require_once __DIR__.'/../model/leadModel.php';

use config\Connection;
use model\LeadModel;
use PDO;
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

    public function getAllLeads()
    {
        $query = "SELECT * FROM leads";
        $stmt = $this->conn->prepare($query);

        try {
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            error_log("Error retrieving leads: " . $error->getMessage());
        }
        return false;
    }

    public function getLeadById($id)
    {
        $query = "SELECT lea_id, lea_name, lea_email, lea_mobile_number FROM leads WHERE lea_id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $error) {
            error_log("Error retrieving lead by ID: " . $error->getMessage());
        }
        return false;
    }

    public function update(LeadModel $lead)
    {
        $id = $lead->getId();
        $name = $lead->getName();
        $email = $lead->getEmail();
        $telephone = $lead->getTelephone();

        $query = "UPDATE leads SET lea_name = :name, lea_email = :email, lea_mobile_number = :telephone WHERE lea_id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":telephone", $telephone);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $error) {
            error_log("Error updating lead: " . $error->getMessage());
        }
        return false;
    }

    public function delete($id)
    {
        $query = "DELETE FROM leads WHERE lea_id = :id";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();
            return true;
        } catch (PDOException $error) {
            error_log("Error deleting lead: " . $error->getMessage());
        }
        return false;
    }
}