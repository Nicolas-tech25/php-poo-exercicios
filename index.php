<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP E POO</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>

        <article class="container">
            <h1>Dados dos Livros </h1>
            <?php
                require_once "src/Livro.php";
                $Livro_01 = new Livro;
                $Livro_01->setTitulo("Carandiru 📘");
                $Livro_01->setAutor("Dráuziu valrela 👴🏾");
                $Livro_01->setPaginas(368, "📑📚");
            ?>
            <h2>Titulo: <?= $Livro_01->getTitulo() ?></h2>
            <h3>Autor: <?= $Livro_01->getAutor() ?></h3>
            <p>Páginas: <?= $Livro_01->getPaginas() ?></p>
        </article>

</body>
</html>