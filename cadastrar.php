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
    </header>

    <main> <!-- *********************************************** MAIN ***************************************************** -->
        <div id="formulario__cadastro" class="row">

            <form action="inserirFilme.php" method="POST" id="formulario">
                <div class="col s6 offset-s3">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Cadastrar Filme</span>

                            <!-- input do título -->
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="titulo-filme" type="text" class="validate" name="titulo" required>
                                    <label for="titulo-filme">Título do Filme</label>
                                </div>
                            </div>


                            <!-- input da sinopse -->

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea name="sinopse" id="sinopse" class="materialize-textarea"></textarea>
                                    <label for="sinopse">Sinopse</label>
                                </div>
                            </div>


                            <!-- input do ano do filme -->
                            <div class="row">
                                <div class="input-field col s4">
                                    <input name="ano" id="ano-filme" type="number" min="1900" max="2500" class="validate" required>
                                    <label for="ano-filme">Ano do filme</label>
                                </div>
                            </div>

                            <!-- input do poster do filme -->
                            <div class="file-field input-field">
                                <div class="btn blue accent-1">
                                    <span>Capa</span>
                                    <input type="file">
                                </div>
                                <div class="file-path-wrapper">
                                    <input id="file-filme" class="file-path validate" type="text" name="file-filme">
                                </div>

                                <!-- <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="poster">
                                </div> -->
                            </div>

                            <div class="file-field input-field">
                                <div class="file-path-wrapper">
                                    <input id="link-filme" class="file-path validate" type="text" name="link-filme">
                                    <label for="link-filme">Link do pôster do filme</label>
                                </div>

                                <!-- <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" name="poster">
                                </div> -->
                            </div>

                            <div class="card-action">
                                <a href="index.php" class="waves-effect waves-light btn grey">Cancelar</a>
                                <button id="button-enviar" type="submit" class="waves-effect waves-light btn blue accent-1">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <script src="script.js"></script>
</body>

<?php include "footer.php" ?>

</html>