<?php include "cabecalho.php" ?>

<body id="cadastrar">
    <header> <!-- *********************************************** HEADER ***************************************************** -->
        <nav class="navegacao">
            <div class="navegacao__esquerda">
                <a class="navegacao__esquerda--inicio" href="index.php">Início</a>
                <a class="navegacao__esquerda--assistidos" href="#">Assistidos</a>
                <a class="navegacao__esquerda--favoritos" href="#">Favoritos</a>
            </div>
            <div class="navegacao__direita">
                <a class="navegacao__direita--index" href="index.php">Catálogo</a>
                <a class="navegacao__direita--cadastrar" href="cadastrar.php">Cadastrar</a>
            </div>
        </nav>

        <div class="row">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar Filme</span>

                        <!-- input do título -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo-filme" type="text" class="validate" required>
                                <label for="titulo-filme">Título do Filme</label>
                            </div>
                        </div>


                        <!-- input da sinopse -->

                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="sinopse" class="materialize-textarea"></textarea>
                                <label for="sinopse">Sinopse</label>
                            </div>
                        </div>


                        <!-- input do ano do filme -->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="ano-filme" type="number" min="1900" max="2500" class="validate" required>
                                <label for="ano-filme">Ano do filme</label>
                            </div>
                        </div>

                        <div class="file-field input-field">
                            <div class="btn blue accent-1">
                                <span>Capa</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>

                        <div class="card-action">
                            <a href="index.php" class="waves-effect waves-light btn grey">Cancelar</a>
                            <a href="#" class="waves-effect waves-light btn blue accent-1">Enviar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main> <!-- *********************************************** MAIN ***************************************************** -->

    </main>
</body>

<?php include "footer.php" ?>

</html>