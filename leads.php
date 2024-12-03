<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Leads</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f4f4f4;
        }

        button {
            padding: 5px 10px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<?php if (isset($_GET['success'])): ?>
    <?php if ($_GET['success'] === 'delete'): ?>
        <p style="color: green;">Lead deletado com sucesso!</p>
    <?php elseif ($_GET['success'] === 'edit'): ?>
        <p style="color: green;">Lead editado com sucesso!</p>
    <?php endif; ?>
<?php endif; ?>

<body>
<h1>Lista de Leads</h1>
<?php
require_once __DIR__ . '/../boh_hummm_site/src/DAO/leadDAO.php';

use DAO\LeadDAO;

$leadDAO = new LeadDAO();
$leads = $leadDAO->getAllLeads();

if ($leads && count($leads) > 0): ?>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($leads as $lead): ?>
            <tr>
                <td><?= htmlspecialchars($lead['lea_id']) ?></td>
                <td><?= htmlspecialchars($lead['lea_name']) ?></td>
                <td><?= htmlspecialchars($lead['lea_email']) ?></td>
                <td><?= htmlspecialchars($lead['lea_mobile_number']) ?></td>
                <td>
                    <form action="edit_lead.php" method="GET" style="display:inline;">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($lead['lea_id']) ?>">
                        <button type="submit" class="edit-btn">Editar</button>
                    </form>
                </td>
                <td>
                    <form action="delete_lead.php" method="post" style="display:inline;">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($lead['lea_id']) ?>">
                        <button type="submit" class="delete-btn"
                                onclick="return confirm('Tem certeza que deseja deletar este lead?')">Deletar
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Nenhum lead encontrado.</p>
<?php endif; ?>
</body>
</html>
