<?php include "cabecalho.php" ?> <!-- Essa linha adiciona o código do cabecalho.php nessa parte do código -->

<?php

require "./repository/FilmesRepositoryPDO.php";

$filmesRepository = new FilmesRepositoryPDO();
$filmes = $filmesRepository->listarTodos();

/* $filme1 = [
    "titulo" => "Toy Story",
    "ano" => 1995,
    "sinopse" => "Buzz Lightyear é o novo e sofisticado astronauta de brinquedo do garoto Andy. Buzz não imaginava que encontraria um rival: Woody, um cowboy de brinquedo que, dominado pelo ciúme, acredita ter perdido um lugar precioso no coração do seu dono. Os dois brinquedos vivem brigando até que vão parar nas garras do vizinho, um verdadeiro destruidor de brinquedos. Agora, mais do que nunca, Buzz e Woody precisam precisam se unir para escapar do perigo. Com a ajuda de seus amigos da caixa de brinquedos, eles vão viver uma incrível aventura.",
    "poster" => "https://www.themoviedb.org/t/p/w300/AptcisAVyZqBllXLEGje8MjKzJI.jpg"
]; */

//$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body id="galeria">
    <header> <!-- *********************************************** HEADER ***************************************************** -->
        <nav class="navegacao">
            <div class="navegacao__esquerda">
                <a class="navegacao__esquerda--inicio" href="galeria.php">Início</a>
                <a class="navegacao__esquerda--assistidos" href="#">Assistidos</a>
                <a class="navegacao__esquerda--favoritos" href="#">Favoritos</a>
            </div>
            <div class="navegacao__direita">
                <a class="navegacao__direita--galeria" href="galeria.php">Catálogo</a>
                <a class="navegacao__direita--cadastrar" href="cadastrar.php">Cadastrar</a>
            </div>
        </nav>
        <div class="header__conteudo">
            <img class="header__imagem" src="./assets/tv-couple.png" alt="Casal assistindo TV, Ilustração de Storyset">
            <div class="header__titulo--e--subtitulo">
                <h1 class="header__titulo">Pixar</h1>
                <a href="#" class="header__subtitulo">Catálogo de desenhos da Pixar!</a>
            </div>
        </div>

    </header>

    <main> <!-- *********************************************** MAIN ***************************************************** -->

        <div class="row">
            <?php foreach($filmes as $filme) : ?>
                <!--   < ?php for ($i = 0; $i < count($filmes); $i++) {   forma de escrever
                            $filme = $filmes[$i]; 
                        ?>
                            CÓDIGO SERIA ISERIDO AQUI, LEMBRANDO QUE O PRIMEIRO PHP SERIA FECHADO, E O ÚLTIMO TBM
                        < ?php } ?>                                      -->
                <div class="col s12 m6 l3 sl2">
                    <div class="card hoverable">
                        <div class="card-image">
                            <img src="<?php echo $filme["poster"] ?>"> <!-- Forma comum de escrever php-->
                            <a class="btn-floating halfway-fab waves-effect waves-light blue accent-1"><i class="material-icons">favorite_border</i></a>
                        </div>
                        <div class="card-content">
                            <span class="card-title"><?php echo $filme["titulo"] ?></span> <!-- Outra forma de escrever quando é só 1 linha-->
                            <p class="valign-wrapper"><i class="material-icons">date_range</i> <?= $filme["ano"] ?></p>
                            <p><?= $filme["sinopse"] ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>
</body>


<?php include "footer.php" ?>

<?php if(isset($_GET["msg"])) : ?>
    <script>
        M.toast({
            html: '<?= $_GET["msg"] ?>'
        });
    </script>
<?php endif ?>

</html>