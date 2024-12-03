<?php

require_once __DIR__.'/../model/leadModel.php';
require_once __DIR__.'/../DAO/leadDAO.php';

use DAO\LeadDAO;
use model\LeadModel;

$leadDAO = new LeadDAO();

// Cadastro de novo lead
if (isset($_POST['enterListButton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    if ($name && $email && $telephone) {
        $lead = new LeadModel($name, $email, $telephone);

        if ($leadDAO->save($lead)) {
            header("Location: ../../success.html");
            exit;
        } else {
            echo "<p>Erro ao cadastrar. Tente novamente mais tarde.</p>";
        }
    } else {
        echo "<p>Preencha todos os campos corretamente.</p>";
    }
}

// Editar lead existente
if (isset($_POST['editButton'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    if ($id && $name && $email && $telephone) {
        $lead = new LeadModel($name, $email, $telephone);
        $lead->setId($id);

        if ($leadDAO->update($lead)) {
            header("Location: ../../leads.php");
            exit;
        } else {
            echo "<p>Erro ao editar. Tente novamente mais tarde.</p>";
        }
    } else {
        echo "<p>Preencha todos os campos corretamente.</p>";
    }
}

// Deletar lead existente
if (isset($_POST['deleteButton'])) {
    $id = $_POST['id'];

    if ($id) {
        if ($leadDAO->delete($id)) {
            header("Location: ../../success_delete.html");
            exit;
        } else {
            echo "<p>Erro ao deletar. Tente novamente mais tarde.</p>";
        }
    } else {
        echo "<p>ID inválido para exclusão.</p>";
    }
}
