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
        <div class="row">

            <form action="inserirFilme.php" method="POST">
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

            <script>
                const btn = document.getElementById('button-enviar');

                btn.addEventListener('click', function handleClick(event) {
                    // 👇️ if you are submitting a form (prevents page reload)
                    event.preventDefault();

                    const fileInput = document.getElementById('file-filme');
                    const linkInput = document.getElementById('link-filme');

                    // Send value to server
                    console.log(fileInput.value);

                    if (fileInput.value !== null && linkInput.value !== null) {
                        // 👇️ clear input field
                        fileInput.value = '';
                        // 👇️ change id name to poster to work with php
                        linkInput.id = 'poster';                        
                    } else if (fileInput.value !== null && linkInput.value == null) {
                        fileInput.id = 'poster';
                    }
                });
            </script>

        </div>
    </main>
</body>

<?php include "footer.php" ?>

</html>