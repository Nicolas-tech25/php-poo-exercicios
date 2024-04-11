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
                
                require_once "vendor/autoload.php";
                
                $Livro_01 = new Tucano\Livro;
                $Livro_01->setTitulo("Hellraiser");
                $Livro_01->setAutor("Clive Barker");
                $Livro_01->setPaginas(368);
     
                $Tecnico = new Tucano\Tecnico;
                $Didatico = new Tucano\Didatico;
                $nivel = new Tucano\Didatico;
                $Programacao = new Tucano\Programacao;
                $Programacao->setArea("Terror");
                $Didatico->setDiciplina("Literatura");
                
            ?>
            
          
            <h3>Titulo: <?= $Livro_01->getTitulo() ?></h3>
            <h4>Autor: <?= $Livro_01->getAutor() ?></h4>
            
         
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