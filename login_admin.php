<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login_admin.css">
    <title>Login Admin</title>
</head>
<body>
<section id="login">
    <section id="login_text">
        <h2>Login administrador</h2>
    </section>
    <form action="src/controller/processLogin.php" method="post">
        <label>
            <input type="text" name="name" placeholder="Nome" required>
        </label>
        <label>
            <input type="text" name="password" placeholder="senha" required>
        </label>
        <button type="submit" name="loginAdmin">Acessar</button>
    </form>
</section>
</body>
</html>