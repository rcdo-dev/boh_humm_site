<?php

require_once __DIR__ . '/../model/adminModel.php';
require_once __DIR__ . '/../DAO/adminDAO.php';

use DAO\AdiminDAO;
use model\AdminModel;

if (isset($_POST['loginAdmin'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    if ($name && $password) {
        $admin = new AdminModel($name, $password);
        $adminDAO = new AdiminDAO();

        if ($adminDAO->loginAdmin($admin->getName(), $admin->getPassword())) {
            echo "<p>Logado</p>";
        } else {
            echo "<p>Erro ao logar.</p>";
        }
    } else {
        echo "<p>Preencha todos os campos</p>";
    }
}