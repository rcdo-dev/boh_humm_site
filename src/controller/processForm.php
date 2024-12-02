<?php

require_once __DIR__.'/../model/leadModel.php';
require_once __DIR__.'/../DAO/leadDAO.php';

use DAO\LeadDAO;
use model\LeadModel;

if (isset($_POST['enterListButton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];


    if ($name && $email && $telephone) {

        $lead = new LeadModel($name, $email, $telephone);
        $leadDAO = new LeadDAO();

        if ($leadDAO->save($lead)) {
            header("Location: ../../success.html");
        } else {
            echo "<p>Erro ao cadastrar. Tente novamente mais tarde.</p>";
        }
    } else {
        echo "<p>Preencha todos os campos corretamente.</p>";
    }
}