<!DOCTYPE html>
<html lang="pt-br">

<!-- https://www.edivaldobrito.com.br/como-instalar-o-xampp-no-linux/ -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boh_Humm</title>
    <link rel="stylesheet" href="css/style_sheet.css">
    <script src="script/transitions.js"></script>
</head>

<body>
<!-- Menu de navegação -->
<nav>
    <ul>
        <li><a href="#cta">Eu quero o Boh_Humm no meu celular</a></li>
    </ul>
</nav>

<!-- Seção de cabeçalho -->
<header>
    <h1>Boh_Humm - O aplicativo do motoboy</h1>
    <p>
        Faça parte do seleto grupo de entregadores em duas rodas que utilizarão o melhor app de gerenciamento de
        ganhos.
    </p>
</header>

<!-- Seção do produto -->
<section id="product">
    <section id="product_text">
        <h2>Boh_Humm</h2>
        <p>
            É o aplicativo amigo do motoboy. Com ele você poderá centralizar e gerenciar as taxas das entregas
            em um único app.
        </p>
    </section>
    <img src="assets/images/logo.png" alt="Imagem da logomarca do aplicativo Boh_Humm">
</section>

<!-- Seção sobre -->
<section id="about">
    <img src="assets/images/fee.png"
         alt="Imagem com fundo verde com o descritivo: Deixa que a gente cuida das taxas e marcha.">
    <section id="about_text">
        <h2>Gerenciamento eficiênte nas taxas</h2>
        <p>
            O mercado de entregas é amplo, e você motoboy que está sempre no corre, pode realizar entregas demandadas
            por aplicativos, comércios ou mesmo entregas particulares, para cada entrega uma taxa diferente, e para cada
            taxa um registro diferente em um lugar diferente, ao final do dia você terá um somatório de taxas em cada
            lugar e que na melhor das hipóteses, possibilitará realizar a soma das taxas, certo?
        </p>
        <p>
            Utilizando o Boh_Humm você irá além do somatório das taxas que já será automático. Será possível
            visualizar relatórios de desempenho baseado no conjunto de entregas demandadas, ou seja, você terá o
            controle
            para saber qual app, comercio ou demanda particular está rendendo mais, poderá realizar um comparativo
            diário, semanal ou mensal, e centralizando as informações em um único lugar a marcha nas entregas é pra
            cima, porque o Boh_Humm cuidará e de tudo pra você.
        </p>
    </section>
</section>

<!-- Seção CTA - Call To Action -->
<section id="cta">
    <section id="cta_text">
        <h2>Lista de espera</h2>
        <p>
            Boh_Humm é marcha nas entregas com eficiência no gerenciamento das taxas. Entre na lista de espera e seja
            um dos primeiros a utilizar o app do motoboy!
        </p>
    </section>
    <form action="src/controller/processForm.php" method="post">
        <label>
            <input type="text" name="name" placeholder="Nome" required>
        </label>
        <label>
            <input type="text" name="email" placeholder="E-mail" required>
        </label>
        <label>
            <input type="text" name="telephone" placeholder="Telefone" required>
        </label>
        <button type="submit" name="enterListButton">Entrar na lista</button>
        <label>
            <a href="login_admin.php">admin</a>
        </label>
    </form>
</section>

<!-- Seção de rodapé-->
<footer>
    <p>
        &copy 2024 Boh_Humm App. Todos os direitos reservados.
    </p>
</footer>
</body>

</html>