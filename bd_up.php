<?php
    $bd = new SQLite3('filmes.db');

    $sql = "DROP TABLE IF EXISTS filmes";

    if ($bd->exec($sql)) 
        echo "\nTabela de Filmes apagada\n";

    $sql = "CREATE TABLE filmes (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            titulo VARCHAR(200) NOT NULL,
            poster VARCHAR(400),
            sinopse TEXT,
            ano DECIMAL(4)
        )
    ";

    if ($bd->exec($sql)) 
        echo "\nTabela de Filmes criada\n";
    else
        echo "\nErro ao criar Tabela de Filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, ano) VALUES (
            0,
            'Toy Story',
            'https://www.themoviedb.org/t/p/w300/AptcisAVyZqBllXLEGje8MjKzJI.jpg',
            'Buzz Lightyear é o novo e sofisticado astronauta de brinquedo do garoto Andy. Buzz não imaginava que encontraria um rival: Woody, um cowboy de brinquedo que, dominado pelo ciúme, acredita ter perdido um lugar precioso no coração do seu dono. Os dois brinquedos vivem brigando até que vão parar nas garras do vizinho, um verdadeiro destruidor de brinquedos. Agora, mais do que nunca, Buzz e Woody precisam precisam se unir para escapar do perigo. Com a ajuda de seus amigos da caixa de brinquedos, eles vão viver uma incrível aventura.',
            1995
        )";

    if ($bd->exec($sql)) //A função exec executa um comando e não retorna dados
        echo "\nFilmes inseridos com sucesso\n";
    else
        echo "\nErro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, ano) VALUES (
            1,
            'Vida de Inseto',
            'https://www.themoviedb.org/t/p/w300/twzLdfNxyAa5xQWLLVQyapSqJJP.jpg',
            'Flik é uma formiga cheia de ideias que, em nome dos `insetos oprimidos de todo o mundo`, precisa contratar guerreiros para defender sua colônia de um faminto bando de gafanhotos liderado por Hopper. Mas quando descobrem que o exército de insetos é na verdade um fracassado grupo de atores de um circo de pulgas, o cenário está armado para divertidas confusões... com estes improváveis heróis.',
           1998
        )";

    if ($bd->exec($sql)) //A função exec executa um comando e não retorna dados
        echo "\nFilmes inseridos com sucesso\n";
    else
        echo "\nErro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, ano) VALUES (
            2,
            'Toy Story 2',
            'https://www.themoviedb.org/t/p/w300/yjzb9ojVSEw9vg5kp22ijPKXyMF.jpg',
            'Quando Andy viaja para um acampamento de verão, Woody é sequestrado por Al, um ambiocioso colecionador, que precisa do brinquedo favorito de Andy para completar sua coleção da Gangue do Rodeio. Junto com Jessie, Bala no Alvo e Mineiro, Woody corre o risco de ter que passar o resto de sua vida em exposição num museu. Agora, Buzz, Sr. Cabeça de Batata, Porquinho, Rex e Slinky terão que salvar seu amigo e trazê-lo de volta à vida de brinquedos.',
           1999
        )";

    if ($bd->exec($sql)) //A função exec executa um comando e não retorna dados
        echo "\nFilmes inseridos com sucesso\n";
    else
        echo "\nErro ao inserir filmes\n";

    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, ano) VALUES (
            3,
            'Monstros S.A.',
            'https://www.themoviedb.org/t/p/w300/5p6cdAeUevsLOX0oI1T4JIul4QO.jpg',
            'O astro do susto, Sulley, e seu falante assistente, Mike, trabalham na Monstros S.A., a maior fábrica de processamento de gritos da cidade de Monstrópolis. A principal fonte de energia do mundo dos monstros provém da coleta dos gritos das crianças humanas. Os monstros acreditam que as crianças são tóxicas, e entram em pânico quando uma menininha invade seu mundo. Sulley e Mike fazem de tudo para levar a garota de volta para casa, mas enfrentam desafios monstruosos e algumas situações hilárias em suas atrapalhadas aventuras.',
            2001
        )";

    if ($bd->exec($sql)) //A função exec executa um comando e não retorna dados
        echo "\nFilmes inseridos com sucesso\n";
    else
        echo "\nErro ao inserir filmes\n";

?>