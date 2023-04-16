<?php include "cabecalho.php" ?> <!-- Essa linha adiciona o código do cabecalho.php nessa parte do código -->

<body>
    <header> <!-- *********************************************** HEADER ***************************************************** -->
        <nav class="navegacao">
            <div class="navegacao__esquerda">
                <a href="galeria.php">Início</a>
                <a href="#">Assistidos</a>
                <a href="#">Favoritos</a>
            </div>
            <div class="navegacao__direita">
                <a href="galeria.php">Galeria</a>
                <a href="cadastrar.php">Cadastrar</a>
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
            <div class="col s3">
                <div class="card">
                    <div class="card-image">
                        <img src="https://www.themoviedb.org/t/p/w300/gYbCpjAsyJ0uO0rKcvJ295INZZp.jpg">
                        <span class="card-title">Valente</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light blue accent-1"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p><i class="material-icons">star</i> 9,5</p>
                        <p>Determinada a seguir seu próprio caminho na vida, a princesa Mérida desafia um costume que traz caos ao seu reino. Concedido um desejo, Merida deve confiar em sua bravura e suas habilidades de arco e flecha para desfazer uma maldição bestial.</p>
                    </div>
                </div>
            </div>

            <div class="col s3">
                <div class="card">
                    <div class="card-image">
                        <img src="https://www.themoviedb.org/t/p/w300/kms7XVDS6v7ic2jEw6N4DslQrWx.jpg">
                        <span class="card-title">Up: Altas Aventuras</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light blue accent-1"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p><i class="material-icons">star</i> 9,5</p>
                        <p>Carl Fredricksen é um vendedor de balões que, aos 78 anos, está prestes a perder a casa em que sempre viveu com sua esposa, a falecida Ellie. Após um incidente, Carl é considerado uma ameaça pública e forçado a ser internado. Para evitar que isto aconteça, ele põe balões em sua casa, fazendo com que ela levante voo. Carl quer viajar para uma floresta na América do Sul, onde ele e Ellie sempre desejaram morar, mas descobre que um problema embarcou junto: Russell, um menino de 8 anos.</p>
                    </div>
                </div>
            </div>

            <div class="col s3">
                <div class="card">
                    <div class="card-image">
                        <img src="https://www.themoviedb.org/t/p/w300/qx0EDGXslJvH4qU3DCTseNUL2wo.jpg">
                        <span class="card-title">Procurando Nemo</span>
                        <a class="btn-floating halfway-fab waves-effect waves-light blue accent-1"><i class="material-icons">favorite_border</i></a>
                    </div>
                    <div class="card-content">
                        <p><i class="material-icons">star</i> 9,5</p>
                        <p>Depois que seu filho é capturado na Grande Barreira de Corais e levado para Sydney, um peixe-palhaço tímido parte em uma jornada para trazê-lo para casa.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

<?php include "footer.php" ?>

</html>