<?php

require_once __DIR__.'/../boh_hummm_site/src/DAO/leadDAO.php';

use DAO\LeadDAO;

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $leadDAO = new LeadDAO();

    if ($leadDAO->delete($id)) {
        header("Location: leads.php?success=delete");
        exit;
    } else {
        echo "<p>Erro ao deletar lead.</p>";
    }
} else {
    echo "<p>ID inválido.</p>";
}
?>
