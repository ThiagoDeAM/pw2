<!DOCTYPE html>
<html>
<head>
    <title>Exercício 2 - Filmes</title>
    <meta charset="utf-8">

</head>
<body>
    
<?php

switch ($_GET["id"]){
    case 0:
?>
        <h1>Os Vingadores: The Avengers</h1>
        <p>Loki retorna à Terra enviado pelos chitauri,
        uma raça alienígena que pretende dominar os humanos. 
        Com a promessa de que será o soberano do planeta, 
        ele rouba o cubo cósmico dentro de instalações da 
        S.H.I.E.L.D. e, com isso, adquire grandes poderes.</p>
        <?php 
        break;
    case 1:
        ?> 
        <h1>Vingadores: Era de Ultron</h1>
        <p>Tentanto proteger o planeta de ameaças como as vistas 
            no primeiro Os Vingadores, Tony Stark busca 
            construir um sistema de inteligência artifical que cuidaria da 
            paz mundial. O projeto acaba dando errado e gera o nascimento 
            do Ultron. Capitão América, 
            Homem de Ferro, Thor, 
            Hulk, Viúva Negra e Gavião 
            Arqueiro terão que se unir para mais uma vez salvar o dia.</p>
        <?php
        break;
    case 2:
        ?>
        <h1>Vingadores: Guerra Infinita</h1>
        <p>Thanos enfim chega à Terra, disposto a reunir as Joias 
            do Infinito. Para enfrentá-lo, os Vingadores precisam unir forças 
            com os Guardiões da Galáxia, ao mesmo tempo em que lidam com 
            desavenças entre alguns de seus integrantes.</p>
        <?php 
        break;
    case 3:
    ?>
        <h1>Capitã Marvel</h1>
        <p>Carol Danvers é uma ex-agente da Força Aérea norte-americana, 
            que, sem se lembrar de sua vida na Terra, é recrutada pelos 
            Kree para fazer parte de seu exército de elite. Inimiga 
            declarada dos Skrull, ela acaba voltando ao seu planeta de 
            origem para impedir uma invasão dos metaformos, e assim vai 
            acabar descobrindo a verdade sobre si, com a ajuda do agente 
            Nick Fury e da gata Goose.</p>
        <?php 
        break;
    case 4:
    ?>
        <h1>Deadpool 1</h1>
        <p>Ex-militar e mercenário, Wade Wilson é diagnosticado com câncer 
            em estado terminal, porém encontra uma possibilidade de cura 
            em uma sinistra experiência científica. Recuperado, com poderes 
            e um incomum senso de humor, ele torna-se Deadpool e busca 
            vingança contra o homem que destruiu sua vida.</p>
        <?php 
        break;
    case 5:
    ?>
        <h1>Deadpool 2</h1>
        <p>Quando o super soldado Cable chega em uma missão para assassinar 
            o jovem mutante Russel, o mercenário Deadpool precisa aprender 
            o que é ser herói de verdade para salvá-lo. Para isso, ele 
            recruta seu velho amigo Colossus e forma o novo grupo X-Force, 
            sempre com o apoio do fiel escudeiro Dopinder.</p>
        <?php 
        break;
    case 6:
    ?>
        <h1>Capitão América: O Primeiro Vingador</h1>
        <p>Steve Rogers é um jovem que aceitou ser voluntário em uma série de 
            experiências que visam criar o supersoldado americano. Os militares 
            conseguem transformá-lo em uma arma humana, mas logo percebem que 
            o supersoldado é valioso demais para pôr em risco na luta contra os 
            nazistas.</p>
        <?php 
        break;
    case 7:
    ?>
        <h1>Capitão América 2: O Soldado Invernal</h1>
        <p>Dois anos após os acontecimentos em Nova York (Os Vingadores - 
            The Avengers), Steve Rogers continua seu dedicado trabalho com a 
            agência S.H.I.E.L.D. e também segue tentando se acostumar com o 
            fato de que foi descongelado e acordou décadas depois de seu tempo.</p>
        <?php 
        break;
    case 8:
    ?>
        <h1>Capitão América: Guerra Civil</h1>
        <p>Steve Rogers é o atual líder dos Vingadores, super-grupo de heróis 
            formado por Viúva Negra, Feiticeira Escarlate, Visão, Falcão e
            Máquina de Combate.</p>
        <?php 
        break;
    case 9:
    ?>
        <h1>Homem-Aranha: Longe de Casa</h1>
        <p>Peter Parker está em uma viagem de duas semanas pela Europa, ao lado 
            de seus amigos de colégio, quando é surpreendido pela visita de Nick 
            Fury. Convocado para mais uma missão heróica, ele precisa enfrentar 
            vários vilões que surgem em cidades-símbolo do continente, como 
            Londres, Paris e Veneza, e também a aparição do enigmático Mysterio.</p>
        <?php 
        break;
}
?>
        <a href="listar.php">Voltar</a>
</body>
</html>



