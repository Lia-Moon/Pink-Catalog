<?php include "cabecalho.php" ?> <!-- Essa linha adiciona o código do cabecalho.php nessa parte do código -->

<?php

$filme1 = [
    "titulo" => "Toy Story",
    "ano" => 1995,
    "sinopse" => "Buzz Lightyear é o novo e sofisticado astronauta de brinquedo do garoto Andy. Buzz não imaginava que encontraria um rival: Woody, um cowboy de brinquedo que, dominado pelo ciúme, acredita ter perdido um lugar precioso no coração do seu dono. Os dois brinquedos vivem brigando até que vão parar nas garras do vizinho, um verdadeiro destruidor de brinquedos. Agora, mais do que nunca, Buzz e Woody precisam precisam se unir para escapar do perigo. Com a ajuda de seus amigos da caixa de brinquedos, eles vão viver uma incrível aventura.",
    "poster" => "https://www.themoviedb.org/t/p/w300/AptcisAVyZqBllXLEGje8MjKzJI.jpg"
];

$filme2 = [
    "titulo" => "Vida de Inseto",
    "ano" => 1998,
    "sinopse" => "Flik é uma formiga cheia de ideias que, em nome dos 'insetos oprimidos de todo o mundo', precisa contratar guerreiros para defender sua colônia de um faminto bando de gafanhotos liderado por Hopper. Mas quando descobrem que o exército de insetos é na verdade um fracassado grupo de atores de um circo de pulgas, o cenário está armado para divertidas confusões... com estes improváveis heróis.",
    "poster" => "https://www.themoviedb.org/t/p/w300/twzLdfNxyAa5xQWLLVQyapSqJJP.jpg"
];

$filme3 = [
    "titulo" => "Toy Story 2",
    "ano" => 1999,
    "sinopse" => "Quando Andy viaja para um acampamento de verão, Woody é sequestrado por Al, um ambiocioso colecionador, que precisa do brinquedo favorito de Andy para completar sua coleção da Gangue do Rodeio. Junto com Jessie, Bala no Alvo e Mineiro, Woody corre o risco de ter que passar o resto de sua vida em exposição num museu. Agora, Buzz, Sr. Cabeça de Batata, Porquinho, Rex e Slinky terão que salvar seu amigo e trazê-lo de volta à vida de brinquedos.",
    "poster" => "https://www.themoviedb.org/t/p/w300/yjzb9ojVSEw9vg5kp22ijPKXyMF.jpg"
];

$filme4 = [
    "titulo" => "Monstros S.A.",
    "ano" => 2001,
    "sinopse" => "O astro do susto, Sulley, e seu falante assistente, Mike, trabalham na Monstros S.A., a maior fábrica de processamento de gritos da cidade de Monstrópolis. A principal fonte de energia do mundo dos monstros provém da coleta dos gritos das crianças humanas. Os monstros acreditam que as crianças são tóxicas, e entram em pânico quando uma menininha invade seu mundo. Sulley e Mike fazem de tudo para levar a garota de volta para casa, mas enfrentam desafios monstruosos e algumas situações hilárias em suas atrapalhadas aventuras.",
    "poster" => "https://www.themoviedb.org/t/p/w300/5p6cdAeUevsLOX0oI1T4JIul4QO.jpg"
];

$filmes = [$filme1, $filme2, $filme3, $filme4];

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
                <a class="navegacao__direita--galeria" href="galeria.php">Galeria</a>
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

            <?php foreach ($filmes as $filme) : ?>
                <!--   < ?php for ($i = 0; $i < count($filmes); $i++) {   forma de escrever
                            $filme = $filmes[$i]; 
                        ?>
                            CÓDIGO SERIA ISERIDO AQUI, LEMBRANDO QUE O PRIMEIRO PHP SERIA FECHADO, E O ÚLTIMO TBM
                        < ?php } ?>                                      -->
                <div class="col s3">
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

</html>