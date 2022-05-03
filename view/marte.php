<title>Marte</title>
<?php
include_once('./include/header.php');
include_once('../control/descricao.php');
?>

<?php

$marte = new Planeta;
echo "<div id='ali_texto'>";
echo "<h1>";
echo $marte->marte[0][0];
echo "</h1>";
echo "<p>";
echo $marte->marte[1][0];
echo "</p>";
echo "<h1>";
echo $marte->marte[2][0];
echo "</h1>";
echo "<p>";
echo $marte->marte[3][0];
echo "<br>";
echo $marte->marte[3][1];
echo "<br>";
echo $marte->marte[3][2];
echo "<br>";
echo $marte->marte[3][3];
echo "<br>";
echo $marte->marte[3][4];
echo "<br>";
echo $marte->marte[3][5];
echo "<br>";
echo $marte->marte[3][6];
echo "<br>";
echo $marte->marte[3][7];
echo "<br>";
echo $marte->marte[3][8];
echo "<br>";
echo $marte->marte[3][9];
echo "<br>";
echo $marte->marte[3][10];
echo "</p>";
echo "</div>";
echo "<div id='planetas'>";
echo "<img src=img/marte2.jpg>" . $marte->marte[4][0];
echo "</div>"





?>
<!-- <div id="ali_texto">
    <h1>Júpiter</h1> <br>
    <P>
        "Júpiter é o maior planeta do Sistema Solar, estando situado entre Marte e Saturno. Seu tamanho rende-lhe vários satélites naturais orbitando ao seu redor, cerca de 70.
        Durante a noite, esse planeta pode ser visto a olho nu, sendo a segunda estrela mais brilhante, atrás apenas de Vênus, o segundo planeta na ordem usando-se o Sol como
        referência."
    </P>
    <p>
        <h1>Dados gerais de Júpiter</h1>
    </p>
    <p>
        • Diâmetro equatorial: 142,984 km <br>
        • Área da superfície: 6.14x1010 km2<br>
        • Massa: 1.899x1027 kg<br>
        • Distância do Sol: 778.330.000 km<br>
        • Satélites naturais: estima-se que Júpiter tenha entre 60 e 70 satélites conhecidos. Quatro foram apelidados de Luas Galileanas, pois foram descobertas, em 1610, <br>
        por Galileu Galilei. Ganímedes, Calisto, Io e Europa são seus nomes. A primeira é um pouco maior que Mercúrio, e as outras três são semelhantes à nossa Lua.<br>
        • Período de rotação: aproximadamente 10 horas<br>
        • Período de translação: aproximadamente 12 anos<br>
        • Temperatura média: -121,1 °C<br>
        • Composição atmosférica: a atmosfera de Júpiter é composta, basicamente, por dois gases: 86% de hidrogênio e 14% de hélio. Há, de forma ínfima, a presença de <br>
        metano, amoníaco, vapor d’água e sulfureto de hidrogênio.<br>
    </p>
    </div>
    <div id="planetas">
    <img src="../view/img/marte2.png" alt="">
</div> -->
<?php
include_once('./include/footer.php');
?>