<?php
require_once __DIR__ . '/../boh_hummm_site/src/DAO/leadDAO.php';
require_once __DIR__ . '/../boh_hummm_site/src/model/leadModel.php';

use DAO\LeadDAO;
use model\LeadModel;

$leadDAO = new LeadDAO();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $lead = $leadDAO->getLeadById($id); // Adicione o método getLeadById() no LeadDAO

    if ($lead): ?>
        <!doctype html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Editar Lead</title>
            <style>
                body {
                    background-color: #F5F5F5;
                }

                h1 {
                    max-width: 600px;
                    text-align: start;
                    font-family: monospace;
                    font-size: 20px;
                }

                form {
                    max-width: 600px;
                }

                input[type=text] {
                    width: 100%;
                    padding: 12px 20px;
                    margin: 8px 0;
                    display: inline-block;
                    font-family: monospace;
                    font-size: 15px;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                    box-sizing: border-box;
                }

                button[type=submit] {
                    width: 100%;
                    background-color: #04AA6D;
                    color: white;
                    font-family: monospace;
                    font-size: 15px;
                    font-weight: 600;
                    padding: 14px 20px;
                    margin: 8px 0;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                }
            </style>
        </head>
        <body>
        <h1>Editar Lead</h1>
        <form action="src/controller/processForm.php" method="post">
            <input type="hidden" name="id" value="<?= htmlspecialchars($lead['lea_id']) ?>">
            <label>
                <input type="text" name="name" value="<?= htmlspecialchars($lead['lea_name']) ?>" required>
            </label><br>
            <label>
                <input type="text" name="email" value="<?= htmlspecialchars($lead['lea_email']) ?>" required>
            </label><br>
            <label>
                <input type="text" name="telephone" value="<?= htmlspecialchars($lead['lea_mobile_number']) ?>"
                       required>
            </label><br>
            <button type="submit" name="editButton">Salvar</button>
        </form>
        </body>
        </html>
    <?php else: ?>
        <p>Lead não encontrado.</p>
    <?php endif;
} else {
    echo "<p>ID não fornecido.</p>";
}
?>
