<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP E POO</title>
    <link rel="stylesheet" href="css\estilos.css">
</head>
<body>

    <article class="container">
        
        <div class="texto">
            <h1>Dados do Livro </h1>
            <?php
                /* ================================================== */
                            /* HTML dos dois exercícios */
                /* ================================================== */
                /* Exercicio 01 (set)*/
                require_once "src/Livro.php";
                $Livro_01 = new Livro;
                $Livro_01->setTitulo("Hellraiser");
                $Livro_01->setAutor("Clive Barker");
                $Livro_01->setPaginas(368);
                /* Fim 01  (set)*/

                /* Exercicio 02 (set) */
                require_once "src/tecnico.php";
                require_once "src/didatico.php";
                require_once "src/programacao.php";
                $Tecnico = new Tecnico;
                $Didatico = new Didatico;
                $nivel = new Didatico;
                $Programacao = new Programacao;
                $Programacao->setArea("Terror");
                $Didatico->setDiciplina("Literatura");
                /* Fim 02 (set) */
            ?>
            <!-- ================================================== -->
                        <!-- HTML dos dois exercícios -->
            <!-- ================================================== -->
            <!-- Exercicio 01  (get) -->
            <h3>Titulo: <?= $Livro_01->getTitulo() ?></h3>
            <h4>Autor: <?= $Livro_01->getAutor() ?></h4>
            
            <!-- Exercicio 02 (get) -->
            <h4>Informações adicionais</h4>
            <ul>
                <li>Formato: <?= $Tecnico->getFormato()[0] ?></li>
                <li>Área: <?= $Programacao->getArea() ?></li>
                <li>Diciplina: <?= $Didatico->getDiciplina() ?></li>
                <li>Nível: <?= $Didatico->getNivel()[1] ?></li>
                <!-- Paginas (do exercicio 1), (ficou mais bonito aqui) -->
                <li>Páginas: <?= $Livro_01->getPaginas() ?></li>
            </ul>
        </div>

        <div>
            <img class="capa" src="images\hellraiser-renascido-do-inferno.jpg" alt="hellraiser">
        </div>
    </article>            

</body>
</html>